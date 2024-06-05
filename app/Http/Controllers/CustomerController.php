<?php

namespace App\Http\Controllers;

use App\Models\Customer;

use App\Models\Sub_category;

use App\Models\Tendor;

use DateTime;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Tendor_request;

use Illuminate\Http\Request;
use App\Models\Add_image;
use App\Models\Add_image_next;

use App\Models\Category;

use App\Models\Business;

use App\Models\Product;

use App\Models\Package;

use App\Models\Request_call;

use App\Models\Wishlist;

use App\Models\BusinessAnalytics;

use App\Models\Bg_image;

use App\Models\Requestfq;

use App\Models\Review;

use App\Models\Vendor;

use App\Models\Analytic;

use DB;

class CustomerController extends Controller
{


      public function customer_home(){

    $id = Auth::guard('customer')->id();

    $customer = Customer::find($id);

    $category = Category::all();


    $tendor = DB::table('tendor_requests')->select('sub_categories.*','vendors.*','tendor_requests.*', 'tendor_requests.id as tendorId', 'tendor_requests.updated_at as tendorend')
    ->join('sub_categories','sub_categories.id','=','tendor_requests.subcategory_id')
    ->join('tendor_req_actions','tendor_req_actions.tendor_req_id','=','tendor_requests.id')
    ->join('vendors','vendors.id','=','tendor_req_actions.vendor_req_id')
    ->where('customer_id',$id)
    ->get();


    $data['banner_image'] = Bg_image::find(1);


    return view('Customer.customer_home',compact('category','tendor','data'),['customer' => $customer]);
}

public function sub_category_load(Request $request)
{
  // print_r($request->id);die();
  $sub_category = Sub_category::where('category_type',$request->id)->get();
    return response()->json($sub_category);
} 
public function tender_req(Request $request, $id){
// print_r("s");die();

      $customer = Customer::find($id);

         $tendor =New Tendor_request;


         if($request->hasFile('sample_image')){

           $sample_image = $request->file('sample_image')->getClientOriginalName();
           $request->file('sample_image')->storeAs('public/tendor_sample_image/',$sample_image);

           }
           if($request->hasFile('sample_image')){

           $tendor->sample_image=$sample_image;
         }

         $tendor->tendor_title = $request->tendor_title;
         $tendor->tendor_description = $request->tendor_description;
         $tendor->category_id = $request->category;
         $tendor->subcategory_id = $request->subcategory;

         $customer->tendor_requests()->save($tendor);

         return redirect()->back()->with('SuccessMsg','Tendor Posted Successfully' );


}
public function request_call($id){
    
 DB::beginTransaction();
  $customer_id = Auth::guard('customer')->id();

  $business = Business::find($id);

  $vendor = Vendor::find($business->vendor_id);

  $request_call = new Request_call;
  //dump($request_call);

  $request_call->business_call_id = $id;
  $request_call->vendor_call_id = $vendor->id;
  $request_call->customer_call_id = $customer_id;

  $request_call->save();
   DB::commit();
  return redirect()->back()->with('success','Request call sent succesfully' );

}
  public function request_call_li(){

    $id = Auth::guard('customer')->id();

    $customer = Customer::find($id);


    // $tendor = DB::table('request_calls')->select('sub_categories.*','vendors.*','tendor_requests.*', 'tendor_requests.id as tendorId', 'tendor_requests.updated_at as tendorend')
    // ->join('sub_categories','sub_categories.id','=','request_calls.subcategory_id')
    // ->join('businesses','businesses.business_category','=','request_calls.business_call_id')
    // ->join('tendor_req_actions','tendor_req_actions.tendor_req_id','=','tendor_requests.id')
    // ->join('vendors','vendors.id','=','tendor_req_actions.vendor_req_id')
    // ->where('customer_id',$id)
    // ->get();


    $request_call_action = DB::table('request_calls')->select('businesses.*','sub_categories.*','vendors.*','request_call_actions.*','request_calls.*', 'request_call_actions.id as requestCallId', 'request_calls.id as tendorId', 'request_calls.updated_at as tendorend')
    ->join('businesses','businesses.business_category','=','request_calls.business_call_id')
    ->join('sub_categories','sub_categories.id','=','businesses.business_category')
    ->join('request_call_actions','request_call_actions.request_call_tendor_id','=','request_calls.id')
    ->join('vendors','vendors.id','=','request_call_actions.request_call_vendor_id')
    ->where('customer_call_id',$id)
    ->get();
   // dd($request_call_action);
    $data['banner_image'] = Bg_image::find(1);

    return view('Customer.request_call',['customer' => $customer],compact('request_call_action', 'data'));

    }
    public function customer_profile_edit($id){

      $customer = Customer::find($id);
      $data['banner_image'] = Bg_image::find(1);
      return view('Customer.Edit_customer_profile',compact('data'),['customer' => $customer]);

    }
    public function customer_company(Request $request, $id)
{


    $customer_id = Auth::guard('customer')->id();

    $customer = Customer::find($customer_id);

    $review = Review::where('business_id',$id)->sum('rating');

    $review_count = Review::where('business_id',$id)->count();
    if ($review_count) {
      $avg_review = round($review/$review_count);
    }
    else
    {
      $avg_review = 0;
    }
// print_r($review_count); die();


    $business = Business::find($id);


        $category1 = Category::get();
        $subcategory = Sub_category::get();
        
    $category = Sub_category::find($business['category']);



    $reviewOne = DB::table('reviews')->join('businesses','businesses.id','=','reviews.business_id')
                                     ->join('customers','customers.id','=','reviews.customer_id')
                                     ->where('businesses.id',$id)->take(2)->get();


    $reviewTwo = DB::table('reviews')->join('businesses','businesses.id','=','reviews.business_id')
    ->join('customers','customers.id','=','reviews.customer_id')
    ->where('businesses.id',$id)->skip(2)->take(2000)->get();

    // print_r($reviewTwo);die();

    if(sizeof($reviewTwo)){
      $view_more = true;

    }
    else {
      $view_more = false;
    }
    $vendor_id = Vendor::find($business->vendor_id);


    $data['products'] = DB::table('businesses')
    ->join('vendors','vendors.id','=','businesses.vendor_id')
    ->join('sub_categories','sub_categories.id','=','businesses.business_category')
    ->join('products','products.business_id','=','businesses.id')
    ->where('businesses.id',$id)->get();

    $gallery_image = DB::table('businesses')
    ->join('galllery_images','galllery_images.business_id','=','businesses.id')
    ->where('businesses.id',$id)->take(1)->get();

    $gallery_image_1 = DB::table('businesses')
    ->join('galllery_images','galllery_images.business_id','=','businesses.id')
    ->where('businesses.id',$id)->skip(1)->take(30)->get();

    $data['banner_image'] = Bg_image::find(1);



    $vendorid = Auth::guard('vendor')->id();

    if($customer_id >0){

      $check_c = BusinessAnalytics::where('user_info', $customer_id)
                                   ->where('role', 'Customer')
                                  ->where('business_id', $id)->get()->count();
      $check_c_id = BusinessAnalytics::where('user_info', $customer_id)
                                  ->where('role', 'Customer')
                                  ->where('business_id', $id)->get();                       

                            
      // foreach ($check_c as $key => $value_c) {

        if($check_c == 0){

          $check_rfq = Requestfq::where('customer_id',$customer_id)->get()->count();

          BusinessAnalytics::create([
          'user_info' => $customer_id,
          'business_id' => $id,
          'clicks' => 1,
          'leads' => $check_rfq,
          'role' => 'Customer',
      ]);

      } 
      else{
        foreach ($check_c_id as $key => $value_c) {

        $click_c = BusinessAnalytics::find($value_c->id)->increment('clicks');

        // BusinessAnalytics::where('user_info', $customer_id)
        // ->where('business_id', $id)->increment('clicks');
        }


      }                           
     
    //}//foreach

  }
  elseif($vendorid>0){



    $check_c = BusinessAnalytics::where('user_info', $vendorid)
    ->where('role', 'Vendor')
    ->where('business_id', $id)->get()->count();
$check_c_id = BusinessAnalytics::where('user_info', $vendorid)
->where('role', 'Vendor')
    ->where('business_id', $id)->get();                            


// foreach ($check_c as $key => $value_c) {

if($check_c == 0){

// $check_rfq = Requestfq::where('customer_id',$customer_id)->get()->count();

BusinessAnalytics::create([
'user_info' => $vendorid,
'business_id' => $id,
'clicks' => 1,
'leads' => 0,
'role' => 'Vendor',

]);

} 
else{
foreach ($check_c_id as $key => $value_c) {

$click_c = BusinessAnalytics::find($value_c->id)->increment('clicks');

// BusinessAnalytics::where('user_info', $customer_id)
// ->where('business_id', $id)->increment('clicks');
}//foreach


}   

  }//elseif
  else{


    
    $check_c = BusinessAnalytics::where('user_info', $request->ip())
    ->where('role', 'Unknown')
    ->where('business_id', $id)->get()->count();
    
$check_c_id = BusinessAnalytics::where('user_info', $request->ip())
->where('role', 'Unknown')
    ->where('business_id', $id)->get();                            



if($check_c == 0){

BusinessAnalytics::create([
'user_info' => $request->ip(),
'business_id' => $id,
'clicks' => 1,
'leads' => 0,
'role' => 'Unknown',

]);

} 
else{
  $clientIP = \Request::getClientIp(true);

  // print_r($clientIP); die();

foreach ($check_c_id as $key => $value_c) {

$click_c = BusinessAnalytics::find($value_c->id)->increment('clicks');


}//foreach

  }

  }



$data['banner_image'] = Bg_image::find(1);


    return view('Customer.company_profile' , compact('data','gallery_image','gallery_image_1','reviewOne', 'reviewTwo'),[ 'view_more'=>$view_more,'avg_review'=>$avg_review,'category'=>$category, 'customer'=>$customer, 'business'=>$business,'vendor_id'=>$vendor_id]);
}


    public function addImage(Request $request,$id){

        $this->validate($request,[

            'profile_image'=>'required',

           ]);

               $profile_image = $request->file('cu_profile')->getClientOriginalName();

               $request->file('cu_profile')->storeAs('public/customer_profile/',$profile_image);

              $customer =Customer::find($id);

              $customer->profile_image=$profile_image;

              $customer->save();
              return redirect()->back()->with('SuccessMsg','Profile Photo Updated Successfully' );



    }


     public function updateProfile($id){

        $customer = Customer::find($id);
        return view('Customer.edit_customer_profile',['customer' => $customer]);

    }


    public function wishlists_store(Request $request)
    {

if(Auth::guard('customer')->check()){
    $data = Wishlist::where('user_id',Auth::guard('customer')->id())
      ->where('business_id',$request->id)->first();
        if($data){
            $data->delete();
        }
        else{
            $data = New Wishlist;

            $data->user_id = Auth::guard('customer')->id();
            $data->business_id = $request->id;

            $data->save();
        }

        return true;


}
  elseif(Auth::guard('vendor')->check()) {

  }
  else {
    return redirect(route('customer'));
  }
}


      public function update_profile_info(Request $request,$id)
      {
      $this->validate($request,[

      'fname'=>'required',
      'lname'=>'required',
      'email'=>'required',
      'mobile'=>'required',
      'area'=>'required',
      'city'=>'required',
      'province'=>'required',
      'country'=>'required',

     ]);


              $customer =Customer::find($id);

        if($request->hasFile('profile_image')){

          $profile_image = $request->file('profile_image')->getClientOriginalName();
          // $request->file('profile_image')->storeAs('public/customer_profile/',$profile_image);
          $request->file('profile_image')->move(public_path('upload_images/customer_profile'), $profile_image);

          }
          if($request->hasFile('profile_image')){

          $customer->profile_image=$profile_image;
        }


              $customer->name = $request->fname;
              $customer->lname = $request->lname;
              $customer->email = $request->email;
              $customer->number = $request->mobile;
              $customer->area = $request->area;
              $customer->city = $request->city;
              $customer->province = $request->province;
              $customer->country = $request->country;

              $customer->save();
              return redirect(route('customer'))->with('SuccessMsg','Profile Successfully updated' );

    }
    public function update_review(Request $request, $id){

    $customer_id = Auth::guard('customer')->id();
       $business = Business::find($id);
       $review = New Review;
       $review->customer_name = $request->name;
       $review->email = $request->email;
       $review->review = $request->review;
       $review->rating = $request->rating;
       $review->customer_id = $customer_id;
       $review->status = 1;
       $business->reviews()->save($review);



       //upadting rating count and rating avaerage in business table
       $update_bu =  Business::find($id);
       $review = Review::where('business_id',$id)->sum('rating');

       $review_count = Review::where('business_id',$id)->count();
       if ($review_count) {
         $avg_review = round($review/$review_count);
       }
       else
       {
         $avg_review = 0;
       }

       $update_bu->rating_count = $review_count;
       $update_bu->rating_avg = $avg_review;

       $update_bu->save();

       return redirect()->back()->with('SuccessMsg','Review Successfully updated');


    }


    public function wishlist(){
      $id = Auth::guard('customer')->id();

      $customer = Customer::find($id);
      $category = Category::get();
        $i=0;

        // print_r($category1);die();
        // print_r(array_unique($category));
       $id = Auth::guard('customer')->id();
       if($id >0){
       $current_date = Carbon::now();


       $package_vendor = DB::table('package_vendor')
       ->where('vendor_id',$id)
       ->where('Approval','=',1)->where('ends_date','>=',$current_date)->get();
        foreach ($package_vendor as $key => $value) {
            $plan_id = $value->package_id;
           //  print_r($business_listing); die();

           $plan_detail = Package::find($plan_id);

           $end_date = $value->ends_date;
   }
             //check  business_listing
             $business_listing = $plan_detail->bussiness_listing ?? 0;
             $vendor_bl = Business::where('vendor_id',$id)->count();
             // print_r($business_listing); die();
             if($vendor_bl <= $business_listing){
                $data['add_business'] = true;

             }
             else{
                 $data['add_business'] = false;

             }
            }//check id null or not


       // $vendor_name = Vendor::where('id',$id)->first()->toArray();
       // print_r($vendor_name);die();
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
       // dd($category);

      //  $result = Wishlist::where('user_id',$id)
      //  ->join('businesses','businesses.id','=','wishlists.business_id')
      //  ->selectRaw('businesses.*')->get()->toArray();

       $result = Business::join('vendors','vendors.id','=','businesses.vendor_id' )
                         ->join('wishlists','wishlists.business_id','=','businesses.id' )
                         ->select('vendors.*','businesses.*','wishlists.*','businesses.id as b_id')
                         ->where('user_id',$id)->get();

        //  print_r($id);die();



        $data['cate_li'] = Category::all();

        $data['looking'] = '';
        $data['location'] = '';
        $data['category_select'] = '';
        $data['business'] = Business::get()->toArray();
        $data['add_image'] = Add_image::get()->toArray();
        $data['banner_image'] = Bg_image::find(1);
        $data['add_image_next'] = Add_image_next::get()->toArray();
        $data['category'] = $category;
        $data['subCategory'] = $subCategory;
        $data['active_Category'] = $category[0]['id'];
        $data['all_subCategory'] = $categoryArray;

        // print_r($data['add_image']);die();


        return view('Customer.customer_wishlist',compact('data','result'),['customer' => $customer]);
    }
    public function requestFQ(Request $request)
    {
      // print_r($request->all());die();
       $customer_id = Auth::guard('customer')->id();
// print_r($customer_id);die();
      $data =  new Requestfq();
      $data->name = $request->name;
      $data->email = $request->email;
      $data->message = $request->message;
      $data->vendor_id = $request->vendor_id;
      $data->customer_id = $customer_id;

      if($request->file('customer_document')) {
                  // print_r("ifd");die();
                    $fileName = time().'_'.$request->file('customer_document')->getClientOriginalName();
                     // print_r($fileName);die();
                    // $filePath = $request->file('upload_brochure')->storeAs('uploads/pdf', $fileName, 'public');
                    $filePath = $request->file('customer_document')->move(public_path('upload_images/RFQ_document'), $fileName);
                    // print_r($filePath);die();
                    $data->document = time().'_'.$request->file('customer_document')->getClientOriginalName();

                }
      $data->save();
      return redirect()->back()->with('success','RFQ successfully sent');

    }
    public function tender(){

        $id = Auth::guard('customer')->id();

        $customer = Customer::find($id);

        return view('Customer.customer_tendor',['customer' => $customer]);
    }

    public function postTendor(Request $request){

        $this->validate($request,[

            'name'=>'required',
            'lname'=>'required',
            'email'=>'required',
            'number'=>'required',
            'address_1'=>'required',
            'address_2'=>'required',
            'state'=>'required',
            'city'=>'required',
            'zip'=>'required',
            'category'=>'required',
            'tender_description'=>'required',
            'end_date'=>'required',
           ]);

           $id = Auth::guard('customer')->id();

           $customer = Customer::find($id);

              $tendor =New Tendor;

              $tendor->name = $request->name;
              $tendor->lname = $request->lname;
              $tendor->email = $request->email;
              $tendor->number = $request->number;
              $tendor->address_1 = $request->address_1;
              $tendor->address_2 = $request->address_2;
              $tendor->state = $request->state;
              $tendor->city = $request->city;
              $tendor->zip = $request->zip;
              $tendor->category = $request->category;
              $tendor->tender_description = $request->tender_description;
              $tendor->end_date = $request->end_date;
              $customer->tendors()->save($tendor);

              return redirect()->back()->with('SuccessMsg','Tendor Posted Successfully' );


    }

    //tendorRequest

    public function tendorRequest(){

        return view('Customer.request_call');

    }
    public function get_sub_category(Request $request)
    {
      $id = $request->id;

      $data =  Sub_category::where('category_type',$id)->get();


      $view= view('Vendor.sub_category_load')->with(['sub_cat'=>$data])->render();
      // print_r($view);die();
        return response()->json(['html'=>$view,'code' => 'success']);
        // return response()->json(['data'=>$data]);

        // return view('Vendor.sub_category_load',compact('data'));
        // return response()->json($data);
    }
    public function subCategorys(Request $request, $id)
    {
      $category = Category::get();
      $i=0;

      // print_r($category1);die();
      // print_r(array_unique($category));
     $vendor_id = Auth::guard('vendor')->id();
     if($vendor_id >0){
     $current_date = Carbon::now();


     $package_vendor = DB::table('package_vendor')
     ->where('vendor_id',$vendor_id)
     ->where('Approval','=',1)->where('ends_date','>=',$current_date)->get();
      foreach ($package_vendor as $key => $value) {
          $plan_id = $value->package_id;
         //  print_r($business_listing); die();

         $plan_detail = Package::find($plan_id);

         $end_date = $value->ends_date;
 }
           //check  business_listing
           $business_listing = $plan_detail->bussiness_listing;
           $vendor_bl = Business::where('vendor_id',$vendor_id)->count();
           // print_r($business_listing); die();
           if($vendor_bl <= $business_listing){
              $data['add_business'] = true;

           }
           else{
               $data['add_business'] = false;

           }
          }//check id null or not


     // $vendor_name = Vendor::where('id',$id)->first()->toArray();
     // print_r($vendor_name);die();
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
     // dd($category);



     $current_date = Carbon::now();

    //  print_r($category_select); die();

     $result = Business::join('vendors','vendors.id','=','businesses.vendor_id' )
                         ->join('package_vendor','package_vendor.vendor_id','=','businesses.vendor_id' )
                         ->where('Approval','=',1)->where('ends_date','>=',$current_date)
                       ->join('sub_categories','sub_categories.id','=','businesses.business_category' )
                       ->select('vendors.*','businesses.*','sub_categories.*','businesses.id as b_id')
                       ->Where('business_category', $id)->get()->toArray();


      $data['cate_li'] = Category::all();

         $data['category_name'] = Sub_category::find($id);
      $data['looking'] = '';
      $data['location'] = '';
      $data['category_select'] = $category;

      $data['business'] = Business::join('vendors','vendors.id','=','businesses.vendor_id')
      ->select('vendors.*','businesses.*','businesses.id as b_id')
      ->get()->toArray();

      // print_r($data['business']); die();

      $data['add_image'] = Add_image::get()->toArray();
      $data['banner_image'] = Bg_image::find(1);
      $data['add_image_next'] = Add_image_next::get()->toArray();
      $data['category'] = $category;
      $data['subCategory'] = $subCategory;
      $data['active_Category'] = $category[0]['id'];
      $data['all_subCategory'] = $categoryArray;

      // print_r($data['add_image']);die();


      return view('Vendor.sub_category_list',compact('data','result'));
    }
//     public function searchTexti(Request $request)
//     {
//       // print_r("id");die();
//       $this->validate($request,[

//       'looking'=>'required',
//       'location'=>'required',
//      ]);
//        $category = Category::get();
//       $subcategory = Sub_category::get();
//       $allSubCategory = Sub_category::where('id',$request->id)->get()->toArray();
//       $subBusiness = Business::where('business_category',$request->id)->get()->toArray();
//       $business_location = Business::select('location')->get()->toArray();
//       // var_dump($business_location);die();
//       $business_location = array_column($business_location, 'location');
//       $business_location = array_unique($business_location);
//       // print_r($business_location);die();
// // print_r(array_unique($business_location));die();


//       $data['category'] = $category;
//       $data['subCategory'] = $subcategory;
//       $data['allSubCategory'] = $allSubCategory;
//       $data['subBusiness'] = $subBusiness;

//       $data['business_location'] = $business_location;
//       // print_r($business_location);
//       // print_r($data['business_location']);die();
//       $looking = $request->looking;
//       $location = strtolower($request->location);
//       $business = new Business();
//       $products = new Product();
//       if (!empty($looking)) {
//         # code...

//        $data['arr'] = $business->where('business_title',$looking)->get()->toArray();
//        if(empty($data['arr'])){
//           $data['arr'] = Product::where('product_name',$looking)
//           ->join('businesses','businesses.id','=','products.business_id')
//           ->selectRaw('businesses.*')->get()->toArray();
//           // foreach ($data1 as $key => $value) {
//           //   $val = $business->where('id',$value)->get()->toArray();
//           //   print_r($val);die();
//           //   array_push($data['arr'], $val);
//           // }
//        }
//        }
//        elseif (!empty($looking) && !empty($location)) {
//          $data['arr'] = $business->where('business_title',$looking)->where('location',$location)->get()->toArray();
//        if(empty($data['arr'])){
//           $data['arr'] = Product::where('product_name',$looking)
//           ->join('businesses','businesses.id','=','products.business_id')
//           ->selectRaw('businesses.*')->get()->toArray();
//        }
//        }
//        elseif (!empty($location)) {
//          $data['arr'] = $business->where('location',$location)->get()->toArray();
//        if(empty($data['arr'])){
//           $data['arr'] = Product::where('product_name',$looking)
//           ->join('businesses','businesses.id','=','products.business_id')
//           ->selectRaw('businesses.*')->get()->toArray();
//        }
//        }

//        return view('Vendor.searchList',compact('data'));

    //}



    public function searchText(Request $request)
    {
        $category = Category::get();
        $i=0;

        // print_r($category1);die();
        // print_r(array_unique($category));
       $id = Auth::guard('vendor')->id();
       if($id >0){
       $current_date = Carbon::now();


       $package_vendor = DB::table('package_vendor')
       ->where('vendor_id',$id)
       ->where('Approval','=',1)->where('ends_date','>=',$current_date)->get();
        foreach ($package_vendor as $key => $value) {
            $plan_id = $value->package_id;
           //  print_r($business_listing); die();

           $plan_detail = Package::find($plan_id);

           $end_date = $value->ends_date;
             }
             //check  business_listing
             $business_listing = isset($plan_detail) ? $plan_detail->bussiness_listing : '';
             $vendor_bl = Business::where('vendor_id',$id)->count();
             // print_r($business_listing); die();
             if($vendor_bl <= $business_listing){
                $data['add_business'] = true;

             }
             else{
                 $data['add_business'] = false;

             }
            }//check id null or not


       // $vendor_name = Vendor::where('id',$id)->first()->toArray();
       // print_r($vendor_name);die();
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
       // dd($category);

       $current_date = Carbon::now();

       $looking = $request->looking;
       $location = $request->location;
       $category_select = $request->sub_category_filter_id;

      

       if($looking == null and $location != null and $category_select != null){
        $result = Business::join('vendors','vendors.id','=','businesses.vendor_id' )
        ->join('package_vendor','package_vendor.vendor_id','=','businesses.vendor_id' )
        ->Where('Approval','=',1)
        ->where('ends_date','>=',$current_date)
        ->Where('location','like','%'. $location .'%')
        ->select('vendors.*','businesses.*','businesses.id as b_id')
        ->Where('business_category', $category_select)->get()->toArray();

       }

       elseif($looking != null and $location != null and $category_select != null){
        $result = Business::join('vendors','vendors.id','=','businesses.vendor_id' )
        ->join('package_vendor','package_vendor.vendor_id','=','businesses.vendor_id' )
        ->Where('Approval','=',1)
        ->where('ends_date','>=',$current_date)
        ->Where('business_title','like','%'. $looking .'%')
        ->Where('location','like','%'. $location .'%')
        ->select('vendors.*','businesses.*','businesses.id as b_id')
        ->Where('business_category', $category_select)->get()->toArray();

       }
       elseif($looking != null and $location == null and $category_select != null){

        $result = Business::join('vendors','vendors.id','=','businesses.vendor_id' )
        ->join('package_vendor','package_vendor.vendor_id','=','businesses.vendor_id' )
        ->Where('Approval','=',1)
        ->where('ends_date','>=',$current_date)
        ->Where('business_title','like','%'. $looking .'%')
        ->select('vendors.*','businesses.*','businesses.id as b_id')
        ->Where('business_category', $category_select)->get()->toArray();

      }
      elseif($looking != null and $location != null and $category_select == null){

        $result = Business::join('vendors','vendors.id','=','businesses.vendor_id' )
        ->join('package_vendor','package_vendor.vendor_id','=','businesses.vendor_id' )
        ->Where('Approval','=',1)
        ->where('ends_date','>=',$current_date)
        ->Where('business_title','like','%'. $looking .'%')
        ->Where('location','like','%'. $location .'%')
        ->select('vendors.*','businesses.*','businesses.id as b_id')
        ->get()->toArray();


      }
      elseif($looking == null and $location == null and $category_select != null){

       $result = Business::join('vendors','vendors.id','=','businesses.vendor_id' )
       ->join('package_vendor','package_vendor.vendor_id','=','businesses.vendor_id' )
       ->Where('Approval','=',1)
       ->where('ends_date','>=',$current_date)
       ->select('vendors.*','businesses.*','businesses.id as b_id')
       ->Where('business_category', $category_select)->get()->toArray();
      }
      elseif($looking != null and $location == null and $category_select == null){

        $result = Business::join('vendors','vendors.id','=','businesses.vendor_id' )
        ->join('package_vendor','package_vendor.vendor_id','=','businesses.vendor_id' )
        ->Where('Approval','=',1)
        ->where('ends_date','>=',$current_date)
        ->Where('business_title','like','%'. $looking .'%')
        ->select('vendors.*','businesses.*','businesses.id as b_id')
        ->get()->toArray();

      }
      elseif($looking == null and $location != null and $category_select == null){
        $result = Business::join('vendors','vendors.id','=','businesses.vendor_id' )
        ->join('package_vendor','package_vendor.vendor_id','=','businesses.vendor_id' )
        ->Where('Approval','=',1)
        ->where('ends_date','>=',$current_date)
        ->Where('location','like','%'. $location .'%')
        ->select('vendors.*','businesses.*','businesses.id as b_id')
        ->get()->toArray();

      }
      elseif($looking == null and $location == null and $category_select == null){
        $result = Business::join('vendors','vendors.id','=','businesses.vendor_id' )
        ->join('package_vendor','package_vendor.vendor_id','=','businesses.vendor_id' )
        ->Where('Approval','=',1)
        ->where('ends_date','>=',$current_date)
        ->select('vendors.*','businesses.*','businesses.id as b_id')
        ->get()->toArray();


      }



        $data['cate_li'] = Category::all();

        $data['looking'] = $looking;
            // print_r($looking); die();

        $data['location'] = $location;
        $data['category_select'] = $category_select;
        $data['business'] = Business::join('vendors','vendors.id','=','businesses.vendor_id')
                            ->select('vendors.*','businesses.*','businesses.id as b_id')
                            ->get()->toArray();

        $data['add_image'] = Add_image::get()->toArray();
        $data['banner_image'] = Bg_image::find(1);
        $data['add_image_next'] = Add_image_next::get()->toArray();
        $data['category'] = $category;
        $data['subCategory'] = $subCategory;
        $data['active_Category'] = $category[0]['id'];
        $data['all_subCategory'] = $categoryArray;

        // print_r($result);die();


        return view('Vendor.searchList',compact('data','result'));
    }








    public function search_filter(Request $request)
    {
      // return "d";
      $location = strtolower($request->location);

      if($request->ajax())
        {
          // print_r("if");die();
          $location = strtolower($request->location);
          // print_r( $request->category);die();
          $data = Business::where('location',$location)->where('category',$request->category)->get()->toArray();
          $product_view = view('Vendor.searchData_ajax',compact('data'))->render();
          return response()->json(['_view'=>$product_view,'code' => 'success']);
        }



    }



    public function apply_filter(Request $request){

      $category = Category::get();
      $i=0;

      // print_r($category1);die();
      // print_r(array_unique($category));
     $id = Auth::guard('vendor')->id();
     if($id >0){
     $current_date = Carbon::now();


     $package_vendor = DB::table('package_vendor')
     ->where('vendor_id',$id)
     ->where('Approval','=',1)->where('ends_date','>=',$current_date)->get();
      foreach ($package_vendor as $key => $value) {
          $plan_id = $value->package_id;
         //  print_r($business_listing); die();

         $plan_detail = Package::find($plan_id);

         $end_date = $value->ends_date;
 }
           //check  business_listing
           $business_listing = isset($plan_detail) ? $plan_detail->bussiness_listing : '';
           $vendor_bl = Business::where('vendor_id',$id)->count();
           // print_r($business_listing); die();
           if($vendor_bl <= $business_listing){
              $data['add_business'] = true;

           }
           else{
               $data['add_business'] = false;

           }
          }//check id null or not


     // $vendor_name = Vendor::where('id',$id)->first()->toArray();
     // print_r($vendor_name);die();
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
     // dd($category);


    //  $looking = $request->looking;
    //  $location = $request->location;
    //  $category_select = $request->category_select;

    // //  print_r($category_select); die();

    //  $result = Business::join('vendors','vendors.id','=','businesses.vendor_id' )
    //                    ->orWhere('business_title','like','%'. $looking .'%')
    //                    ->orWhere('location','like','%'. $location .'%')
    //                    ->orWhere('business_category', $category_select)->get()->toArray();


      $data['cate_li'] = Category::all();
      $current_date = Carbon::now();



      // $data['business'] = Business::get()->toArray();
      $data['business'] = Business::join('vendors','vendors.id','=','businesses.vendor_id' )
      ->join('package_vendor','package_vendor.vendor_id','=','businesses.vendor_id' )
      ->where('Approval','=',1)->where('ends_date','>=',$current_date)
    ->join('sub_categories','sub_categories.id','=','businesses.business_category' )
    ->select('vendors.*','businesses.*','sub_categories.*','businesses.id as b_id')
    ->Where('business_category', $id)->get()->toArray();


      $data['add_image'] = Add_image::get()->toArray();
      $data['banner_image'] = Bg_image::find(1);
      $data['add_image_next'] = Add_image_next::get()->toArray();
      $data['category'] = $category;
      $data['subCategory'] = $subCategory;
      $data['active_Category'] = $category[0]['id'];
      $data['all_subCategory'] = $categoryArray;

      // print_r($data['add_image']);die();


      $rating = $request->rating_search;
      $location = $request->location;
      $category = $request->category;
      $probuild = $request->probuild;
      // print_r($rating); die();


      $data['looking'] = 'Filter';
      $data['location'] = $location;
      $data['category_select'] = $category;



      if($location == null and $probuild == 'null'){

        $result = Business::join('vendors','vendors.id','=','businesses.vendor_id' )
        ->join('package_vendor','package_vendor.vendor_id','=','businesses.vendor_id' )
        ->Where('Approval','=',1)
        ->where('ends_date','>=',$current_date)
        ->select('vendors.*', 'businesses.*', 'package_vendor.*','businesses.id as b_id')
        ->where('rating_avg','>=',$rating)
        ->where('category',$category)->get()->toArray();
      }
     elseif($location == null){


        $result = Business::join('vendors','vendors.id','=','businesses.vendor_id' )
        ->join('package_vendor','package_vendor.vendor_id','=','businesses.vendor_id' )
        ->Where('Approval','=',1)
        ->where('ends_date','>=',$current_date)
        ->select('vendors.*', 'businesses.*', 'package_vendor.*','businesses.id as b_id')
        ->where('rating_avg','>=',$rating)
        ->where('category',$category)
        ->where('vendors.verified_vendor',$probuild)->get()->toArray();

      }
      elseif($probuild == 'null'){

        $result = Business::join('vendors','vendors.id','=','businesses.vendor_id' )
        ->join('package_vendor','package_vendor.vendor_id','=','businesses.vendor_id' )
        ->Where('Approval','=',1)
        ->where('ends_date','>=',$current_date)
        ->select('vendors.*', 'businesses.*', 'package_vendor.*','businesses.id as b_id')
        ->where('rating_avg','>=',$rating)
        ->where('category',$category)
        ->where('location','like','%'.$location.'%')
        ->get()->toArray();

      }
      else {

        $result = Business::join('vendors','vendors.id','=','businesses.vendor_id' )
        ->join('package_vendor','package_vendor.vendor_id','=','businesses.vendor_id' )
        ->Where('Approval','=',1)
        ->where('ends_date','>=',$current_date)
        ->select('vendors.*', 'businesses.*', 'package_vendor.*','businesses.id as b_id')
        ->where('rating_avg','>=',$rating)
        ->where('category',$category)
        ->where('location','like','%'.$location.'%')
        ->where('vendors.verified_vendor',$probuild)
        ->get()->toArray();
       }


      //  print_r($result); die();

       return view('Vendor.searchList',compact('data','result'));

    }


}



