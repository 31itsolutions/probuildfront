<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Business;
use App\Models\Add_image;
use App\Models\Sub_category;
use App\Models\Add_image_next;
use App\Mail\ContactMail;
use Mail;
use App\Models\Customer;

use App\Models\HomeCategory;
use App\Models\Analytic;

use App\Models\Package;
use App\Models\Bg_image;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Tendor_request;

use App\Models\Vendor;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function welcome()
    {


        
    $check = Analytic::find(1);

    $add_view = New Analytic;

    if($check == null){


        $add_view->views = 1;

        $add_view->save();

    }
    Analytic::increment('views');



        $category = Category::get();
        $i=0;
        
        // print_r($category1);die();
        // print_r(array_unique($category));

       $id = Auth::guard('vendor')->id();
       if(Auth::guard('vendor')->check()){

       $current_date = Carbon::now();

       $package_vendor = DB::table('package_vendor')
       ->where('vendor_id',$id)
       ->where('Approval','=',1)->where('ends_date','>=',$current_date)->get();
        foreach ($package_vendor as $key => $value) {
            $plan_id = $value->package_id; 
           //  print_r($check_b['business_listing']); die();

           $plan_detail = Package::find($plan_id);

           $end_date = $value->ends_date;         

 }//foreach view

    
 if(sizeof($package_vendor)){


    //check  business_listing
    $check_b['business_listing']  = $plan_detail->bussiness_listing;
    $check_b['vendor_bl']  = Business::where('vendor_id',$id)->count();
    $check_b['expired_popup'] = true;
}else{

$check_b['expired_popup'] = false;
$check_b['business_listing']  = 1;
$check_b['vendor_bl']  = 1;
     
}

}else{
     //check  business_listing
     $check_b['business_listing']  = 1;
     $check_b['vendor_bl']  = 1;

}

            // print_r($check_b['business_listing']); die();


        $subCategory = Sub_category::get();
        // print_r($subCategory);die();
        foreach($category as $categoryEach){
            $categoryArray[$i]['data'] = $categoryEach->category;
            $sub = Sub_category::where('category_type',$categoryEach->id)->get()->toArray();
            $categoryArray[$i]['sub_category'] = $sub;
            $i++;
        }

        // print_r($categoryArray);die;
        
        // dd($category[0]['id']);

       $sub_cat = Sub_category::where('category_type',$category[0]['id'])->get()->toArray();
       $sub_cats = [];
       foreach($sub_cat as $key => $sub){
        
           $count = Business::where('business_category',$sub['id'])->get()->count();
          $data = $sub;
           $data['list_count'] = $count;
           array_push($sub_cats,$data); 
         }
$sub_cat = $sub_cats;

       $data['sub_cat'] = $sub_cat;
       //dd($data['sub_cat']);
        foreach ($category as $key => $cat) {
            $count=0;
            foreach ($subCategory as $key => $subCat) {
                if ($cat->id == $subCat->category_type) {
                    $count++;
                }
                $business_count = Business::where('business_category',$subCat->id)->get()->count();
                $subCat->list_count = $business_count;
            }
            $cat['sub_count'] = $count;
        }

        $current_date = Carbon::now();

        $business_data = Business::join('vendors','vendors.id','=','businesses.vendor_id' )
                                   ->join('package_vendor','package_vendor.vendor_id','=','businesses.vendor_id' )
                                   ->where('Approval','=',1)->where('ends_date','>=',$current_date)
                                   ->select('vendors.*','businesses.*','package_vendor.*','businesses.id as b_id')->get()->toArray();
        // print_r($business_data); die();
        $data['add_image'] = Add_image::get()->toArray();
        $data['banner_image'] = Bg_image::find(1);
        $data['add_image_next'] = Add_image_next::get()->toArray();
        $data['category'] = $category;
        $data['subCategory'] = $subCategory;
        $data['active_Category'] = $category[0]['id'];
        $data['all_subCategory'] = $categoryArray;

        $data['home_category_1'] = HomeCategory::where('place',1)->get();
        $data['home_category_2'] = HomeCategory::where('place',2)->get();
        $data['home_category_3'] = HomeCategory::where('place',3)->get();
        $data['home_category_4'] = HomeCategory::where('place',4)->get();
        $data['home_category_5'] = HomeCategory::where('place',5)->get();

        // print_r($data['add_image']);die();


        return view('welcome',compact('data','business_data','check_b'));
    }
    public function getVendor_detail(Request $request)
    {
        // return $request->id;
        $vendor_name = Vendor::where('id',$request->id)->first()->toArray();
        return response()->json(['vendor_name'=>$vendor_name]);
    }
     
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {

        $admin = User::find(1);

        $vendor_count = DB::table('vendors')->count();

        $customer_count = DB::table('customers')->count();

        $business_count = DB::table('businesses')->count();

        $business_count = DB::table('businesses')->count();

        $premium_vendor = DB::table('vendors')
    ->join('package_vendor', 'package_vendor.vendor_id', '=', 'vendors.id')
    ->where('package_vendor.package_id', '=', 4)
    ->count();

        return view('adminHome', ['premium_vendor'=>$premium_vendor, 'business_count'=>$business_count, 'vendor_count'=>$vendor_count,'customer_count'=>$customer_count,'admin'=>$admin]);
    }


    public function admin_profile(){

        $admin = User::find(1);

        return view('Admin.admin_profile.profile_detail', ['admin'=>$admin]);
    }

    public function mail(Request $request,$id){

        $vendor = Vendor::find($id);

        
    
        $details=[
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message
    
        ];
        // print_r($vendor->email); die();
    
    Mail::to($vendor->email)->send(New ContactMail($details));
    return back()->with('SuccessMsg','Message sent Successfully');
    
    } 
    public function update_profile(Request $request){
   

        $this->validate($request,[

            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
           
          

       
           ]);

    
        //    if((User::find(1))==null){
        //     $user =New User;    

        //    }
        //    else {
            $user =User::find(1);    
        //    }
      


            if($request->hasFile('profile_image')){
    
                $profile_image = $request->file('profile_image')->getClientOriginalName();
                $request->file('profile_image')->storeAs('public/admin_profile/',$profile_image);
            
                }
                if($request->hasFile('profile_image')){
                $user->profile=$profile_image;
                }

              
              $user->name = $request->name;
              $user->email = $request->email;
              $user->password =  Hash::make($request->password);
 
              $user->save();
              return redirect()->back()->with('SuccessMsg','Profile Successfully Added' );


    }

    public function under_construction(){

        return view('under_construction.under_construction');
    }


}
