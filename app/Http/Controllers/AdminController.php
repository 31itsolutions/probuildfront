<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Package;

use App\Models\Customer;

use App\Models\Business;

use App\Models\Tendor;


use App\Models\Galllery_image;

use App\Models\Business_information;

use App\Models\Product;

use App\Models\Sub_category;
use App\Models\User;


use Carbon\Carbon;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


use App\Models\Vendor;

class AdminController extends Controller
{
    
/**
 * Packages
 */
    public function PackageDetail(){
        
        $package_detail = Package::all();

        $admin = User::find(1);



        // $data1 = DB::table('package_vendor')->where('package_id','=',1)->where('Approval','=',1)->count();

        return view('Admin.Package_detail.Package_details', compact('package_detail'),['admin'=>$admin]);

     
    }

   
    
//delete-product
public function delete_package($id){
    Package::find($id)->delete();
    return redirect()->back()->with('SuccessMsg','Package deleted Successfully' );
}



    public function edit_package(Request $request, $id){


        $edit_package = Package::find($id);

        $admin = User::find(1);


        return view('Admin.Package_detail.edit_package', ['edit_package' => $edit_package,'admin' => $admin]);
    }

    public function create_package(Request $request){

        $admin = User::find(1);

        

            return view('Admin.Package_detail.create_package',['admin' => $admin]);



    }


    

    
    public function store_package(Request $request){

        $this->validate($request,[

            'package_name'=>'required',
            'bussiness_listing'=>'required',
            'product_listing'=>'required',
            'gallery_image'=>'required',
            'company_profile'=>'required',
            'contact'=>'required',
            'location'=>'required',
            'social_media'=>'required',
            'priority_listing'=>'required',
            'probuild_verify'=>'required',
            'tendor_board'=>'required',
            'validity'=>'required',
            'price' =>'required',
       
           ]);

    
      
            $package =New Package;    

              
              $package->package_name = $request->package_name;
              $package->bussiness_listing = $request->bussiness_listing;
              $package->product_listing = $request->product_listing;
              $package->gallery_image = $request->gallery_image;
              $package->company_profile = $request->company_profile;
              $package->contact = $request->contact;
              $package->location = $request->location;
              $package->social_media = $request->social_media;
              $package->priority_listing = $request->priority_listing;
              $package->probuild_verify = $request->probuild_verify;
              $package->tendor_board = $request->tendor_board;
              $package->validity = $request->validity;
              $package->price = $request->price;
            
              $package->save();
              return redirect(route('PackageDetail'))->with('SuccessMsg','Package Successfully Added' );
       
}




    public function update_package(Request $request, $id){


        $this->validate($request,[

            'package_name'=>'required',
            'bussiness_listing'=>'required',
            'product_listing'=>'required',
            'gallery_image'=>'required',
            'company_profile'=>'required',
            'contact'=>'required',
            'location'=>'required',
            'social_media'=>'required',
            'priority_listing'=>'required',
            'probuild_verify'=>'required',
            'tendor_board'=>'required',
            'validity'=>'required',
            'price' =>'required',

       
           ]);

    
      
            $package =Package::find($id);    

              
              $package->package_name = $request->package_name;
              $package->bussiness_listing = $request->bussiness_listing;
              $package->product_listing = $request->product_listing;
              $package->gallery_image = $request->gallery_image;
              $package->company_profile = $request->company_profile;
              $package->contact = $request->contact;
              $package->location = $request->location;
              $package->social_media = $request->social_media;
              $package->priority_listing = $request->priority_listing;
              $package->probuild_verify = $request->probuild_verify;
              $package->tendor_board = $request->tendor_board;
              $package->validity = $request->validity;
              $package->price = $request->price;

            
              $package->save();
              return redirect(route('PackageDetail'))->with('SuccessMsg','Package Successfully updated' );
       
}


public function create_vendor(){


    $package_detail = Package::all();

    $admin = User::find(1);


    return view('Admin.create_vendor', compact('package_detail'),['admin'=>$admin]);
}



public function store_vendor(Request $request){



   $vendor_id = Vendor::create([
         'name' => $request->fname,
         'email' => $request->email,
         'lname' => $request->lname,
         'number' => $request->mobile,
         'password' => Hash::make($request->pwd),
     ]);



     $this->validate($request,[
     
        'address_1'=>'required',
        'address_2'=>'required',
        'state'=>'required',
        'city'=>'required',
        'zip'=>'required',
        'account_status'=>'required',
   
       ]);

    //    $id = Auth::guard('vendor')->id();

          $id = $vendor_id->id;

     
          $vendor =  Vendor::find($id); 
          
          if($request->hasFile('vendor_profile')){
    
            $profile_image = $request->file('vendor_profile')->getClientOriginalName();
            $request->file('vendor_profile')->storeAs('public/vendor_profile/',$profile_image);
        
            }
            if($request->hasFile('vendor_profile')){
            $vendor->profile_image=$profile_image;
            }

            if($request->hasFile('vendor_document')){
                
                $vendor_document_file = $request->file('vendor_document')->getClientOriginalName();
                $request->file('vendor_document')->storeAs('public/vendor_document/',$vendor_document_file);
            
                }
                if($request->hasFile('vendor_document')){
                $vendor->vendor_document=$vendor_document_file;
                }
                //    print_r ($vendor_document_file);
                //   die();

          $vendor->address_1 = $request->address_1;
          $vendor->verified_vendor = $request->verified_vendor;
          $vendor->address_2 = $request->address_2;
          $vendor->state = $request->state;
          $vendor->city = $request->city;
          $vendor->zip = $request->zip;
          $vendor->account_status = $request->account_status;
        
          $vendor->save();



    //  $vendor = Vendor::latest('id')->first();

     $vendor_id = $vendor->id;

      $date = Carbon::now();

      
      $package =  $request->package_id;
      $package_table = Package::find($package);
      $month = $package_table->validity;
      $newDateTime = Carbon::now()->addMonth($month);


     DB::table('package_vendor')->insert([
         'package_id' => $request->package_id,
         'vendor_id' => $vendor_id,
         'starts_date'    =>$date , 
         'ends_date'    =>$newDateTime,
         'Approval'    =>$request->package_status ,

         ]);

          return redirect()->back()->with('SuccessMsg','Vendor Successfully Added' );
   
          
}



// view package detail

public function view_package_detail($id){

    $view_package = Package::find($id);

    $data = Vendor::join('package_vendor', 'package_vendor.vendor_id', '=', 'vendors.id')
            ->where('package_vendor.Approval', '1')
            ->where('package_vendor.package_id', $id)
            ->get();

            $admin = User::find(1);



    return view('Admin.Package_detail.view_package_detail', ['view_package' => $view_package,'admin' => $admin], compact('data'));

}

public function user_accounts(){

    $user_accounts = Customer::all();

    $admin = User::find(1);


    return view('Admin.user_accounts',compact('user_accounts'),['admin' => $admin]);
}

public function user_account($id){

    $user_account = Customer::find($id);
    $admin = User::find(1);


    return view('Admin.view_customer_detail',['user_account' => $user_account,'admin' => $admin],);
}

public function edit_customer($id){

    $user_account = Customer::find($id);

    $admin = User::find(1);


    return view('Admin.edit_customer',['user_account' => $user_account,'admin' => $admin]);
}



//update edited cu

public function update_customer(Request $request, $id){

    
    $this->validate($request,[

        'fname'=>'required',
        'lname'=>'required',
        'email'=>'required',
        'mobile'=>'required',
        'add_1'=>'required',
        'area'=>'required',
        'province'=>'required',
        'country'=>'required',
        'zip'=>'required',
   
       ]);


  
          $cu_dtail =Customer::find($id);    

          if($request->hasFile('cu_profile')){
    
            $profile_image = $request->file('cu_profile')->getClientOriginalName();
            $request->file('cu_profile')->storeAs('public/cu_profile/',$profile_image);
        
            }
            if($request->hasFile('cu_profile')){
            $cu_dtail->profile_image=$profile_image;
            }
          
          $cu_dtail->name = $request->fname;
          $cu_dtail->lname = $request->lname;
          $cu_dtail->email = $request->email;
          $cu_dtail->number = $request->mobile;
          $cu_dtail->address_1 = $request->add_1;
          $cu_dtail->address_2 = $request->area;
          $cu_dtail->city = $request->province;
          $cu_dtail->state = $request->country;
          $cu_dtail->zip = $request->zip;
        
          $cu_dtail->save();
          return redirect()->back()->with('SuccessMsg','profile Successfully updated' );


}


public function tendor_req($id){

    $user_account = Customer::find($id);


    $tendors = Tendor::where('customer_id', '=', $id)->get();

    $admin = User::find(1);


    return view('Admin.customer_tendor_detail',['user_account' => $user_account,'admin' => $admin], compact('tendors'));
}

public function change_status(Request $request, $id){

       $status = Customer::find($id);    

    $status->account_status = $request->account_status;

    $status->save();



        return redirect()->back()->with('SuccessMsg','Status updated Successfully' );

}


public function change_account_status(Request $request, $id){

    $status = Vendor::find($id);    

 $status->account_status = $request->account_status;

 $status->save();


     return redirect()->back()->with('SuccessMsg','Status updated Successfully' );

}





///////////////////////////////////////////////////////////



//admin vendor detail

public function vendor_accounts(){

    $vendor_accounts = Vendor::all();

    $admin = User::find(1);


    return view('Admin.Vendor.vendor_accounts',compact('vendor_accounts'),['admin'=>$admin]);
}

public function vendor_account($id){

    $vendor_account = Vendor::find($id);

    $vendor_a = Vendor::all();

    foreach ($vendor_account->packages as $key => $value) {


        $current_date = Carbon::now();

        if(($value->pivot->latest()->first()->Approval == '1') && ($value->pivot->latest()->first()->ends_date >= $current_date)){

            $plan_id = $value->pivot->latest()->first()->package_id; 

            $plan_status = $value->pivot->latest()->first()->Approval; 

            $package_info = true;

        }else {
            $package_info = false;
        }
        $plan_detail = Package::find($plan_id);


    }

    $package = Package::all();


    $admin = User::find(1);



    return view('Admin.Vendor.view_vendor_detail',['admin' => $admin,'vendor_account' => $vendor_account, 'package_info' => $package_info, 'plan_status' => $plan_status , 'plan_detail' => $plan_detail], compact('package'));

}

public function edit_vendor($id){

    $vendor_account = Vendor::find($id);

    $admin = User::find(1);


    return view('Admin.Vendor.edit_vendor',['vendor_account' => $vendor_account,'admin' => $admin] );
}


//update edited vendor
public function update_vendor(Request $request, $id){

    
        $this->validate($request,[
    
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required',
            'mobile'=>'required',
            'add_1'=>'required',
            'area'=>'required',
            'province'=>'required',
            'country'=>'required',
            'zip'=>'required',
       
           ]);
    
    
      
              $vendor_dtail =Vendor::find($id);    
    
              if($request->hasFile('vendor_profile')){
        
                $profile_image = $request->file('vendor_profile')->getClientOriginalName();
                $request->file('vendor_profile')->storeAs('public/vendor_profile/',$profile_image);
            
                }
                if($request->hasFile('vendor_profile')){
                $vendor_dtail->profile_image=$profile_image;
                }


                if($request->hasFile('vendor_document')){
                
                    $vendor_document_file = $request->file('vendor_document')->getClientOriginalName();
                    $request->file('vendor_document')->storeAs('public/vendor_document/',$vendor_document_file);
                
                    }
                    if($request->hasFile('vendor_document')){
                    $vendor_dtail->vendor_document=$vendor_document_file;
                    }
              
              $vendor_dtail->verified_vendor = $request->verified_vendor;
              $vendor_dtail->name = $request->fname;
              $vendor_dtail->lname = $request->lname;
              $vendor_dtail->email = $request->email;
              $vendor_dtail->number = $request->mobile;
              $vendor_dtail->address_1 = $request->add_1;
              $vendor_dtail->address_2 = $request->area;
              $vendor_dtail->city = $request->province;
              $vendor_dtail->state = $request->country;
              $vendor_dtail->zip = $request->zip;
            
              $vendor_dtail->save();
              return redirect()->back()->with('SuccessMsg','profile Successfully updated' );
    
    




}

// admin - venndor dtail update

  // Change Status
  public function change_status_vendor(Request $request){

    try {
       $vendor =  DB::table($request->name)->where($request->column, $request->id)->update(['account_status' => $request->status]);
       if($vendor){
          return response()->json(['status' => 1, 'message' => 'Success']);
       }
       return response()->json(['status' => 0, 'message' => 'Please Refersh and Try Again!']);
    } catch (\Throwable $th) {
       //throw $th;
       return catchResponse();
    }
 }


   // Change Status
   public function change_premium(Request $request){

    try {
       $vendor =  DB::table($request->name)->where($request->column, $request->id)->update(['premium' => $request->status]);
       if($vendor){
          return response()->json(['status' => 1, 'message' => 'Success']);
       }
       return response()->json(['status' => 0, 'message' => 'Please Refersh and Try Again!']);
    } catch (\Throwable $th) {
       //throw $th;
       return catchResponse();
    }
 }
 


    // Change Status
    public function change_business_status(Request $request){

        try {
           $vendor =  DB::table($request->name)->where($request->column, $request->id)->update(['status' => $request->status]);
           if($vendor){
              return response()->json(['status' => 1, 'message' => 'Success']);
           }
           return response()->json(['status' => 0, 'message' => 'Please Refersh and Try Again!']);
        } catch (\Throwable $th) {
           //throw $th;
           return catchResponse();
        }
     }

         // Change Status
    public function change_business_featured_status(Request $request){

        try {
           $vendor =  DB::table($request->name)->where($request->column, $request->id)->update(['featured_business' => $request->featured_business]);
           if($vendor){
              return response()->json(['status' => 1, 'message' => 'Success']);
           }
           return response()->json(['status' => 0, 'message' => 'Please Refersh and Try Again!']);
        } catch (\Throwable $th) {
           //throw $th;
           return catchResponse();
        }
     }


// admin cchange_package_details
public function change_package_details(Request $request, $id){

    $vendor = Vendor::find($id);

    foreach ($vendor->packages as $key => $value) {

//updating previous package de-active
        $vendor->packages()->newPivotStatement()->where('vendor_id', $id)->update(['Approval' => 0]);
        
        

    }
    ////////////////////////////////
   
    $date = Carbon::now();

    $package =  $request->package_update;

    $package_table = Package::find($package);

    $month = $package_table->validity;
    $newDateTime = Carbon::now()->addMonth($month);


   DB::table('package_vendor')->insert([
       'package_id' => $package,
       'vendor_id' => $id,
       'starts_date'    =>$date , 
       'ends_date'    =>$newDateTime,
       'Approval'    =>$request->package_status ,

       ]);
       return redirect()->back()->with('SuccessMsg','Package updated Successfully' );

}

//admin - vendor detail - company profile

public function company_profile($id){

    $vendor_account = Vendor::find($id);

    $admin = User::find(1);



// getting package detail
    foreach ($vendor_account->packages as $key => $value) {

        $current_date = Carbon::now();

            if(($value->pivot->latest()->first()->Approval == '1') && ($value->pivot->latest()->first()->ends_date >= $current_date)){

                $plan_id = $value->pivot->latest()->first()->package_id; 

                $plan_detail = Package::find($plan_id);

            $business_listing_count = $plan_detail->bussiness_listing;                        
  
            }
    }

        $vendor_business_count = Business::where('vendor_id', '=', $id)->count();


        

    $business = Business::where('vendor_id', '=', $id)->get();
    // checking business availability
    if (!empty($business)){
    foreach($business as $businesschild){

    $product = Product::where('business_id', '=', $businesschild->id)->get();

    }
    $business_check = true;


    $product = Product::where('business_id', '=', 1)->get();



    return view('Admin.Vendor.company_profile', ['admin'=>$admin,'business_listing_count'=>$business_listing_count,'vendor_business_count'=>$vendor_business_count, 'vendor_account' => $vendor_account, 'business_check' => $business_check], compact('business', 'product'));

    
}else {
    $business_check = false;
    return view('Admin.Vendor.company_profile', ['admin'=>$admin,'business_listing_count'=>$business_listing_count,'vendor_business_count'=>$vendor_business_count,'vendor_account' => $vendor_account, 'business_check' => $business_check]);
}

}


public function business_detail($id){


    $business = Business::find($id);

    $vendor_account = $business->vendor_id;


    $product = Product::where('business_id', '=', $id)->get();

    $admin = User::find(1);



    return view('Admin.Vendor.business_detail', [ 'admin' => $admin,'business' => $business, 'vendor_account'=>$vendor_account], compact('product'));

}





public function tendor_detail($id){

    $vendor_account = Vendor::find($id);
    $admin = User::find(1);


    return view('Admin.Vendor.tendor_profile', ['vendor_account' => $vendor_account,'admin' => $admin]);

}





// add business in company profile
public function add_company_profile($id){


    $vendor_account = Vendor::find($id);



    $package_vendor = DB::table('package_vendor')
    ->where('vendor_id',$vendor_account->id)
    ->where('Approval','=',1)->where('ends_date','>=',$current_date)->get();

    foreach ($package_vendor as $key => $value) {


        // $current_date = Carbon::now();

        // if(($value->pivot->Approval == '1') && ($value->pivot->ends_date >= $current_date)){

            $plan_id = $value->package_id;

            $package  = Package::find($plan_id);



        // }//if-condtion

        $business = $package->business_listing;
        $product = $package->product_listing;
        $gallery_image = $package->gallery_image;
        $contact = $package->contact;
        $location = $package->location;
        $social_media = $package->social_media;
    }//foreach

    $sub_category_type =   Sub_category::all(); 

    
    $business_check = DB::table('businesses')->latest('id')->first();


    $admin = User::find(1);


    return view('Admin.Vendor.add_company_profile',compact('sub_category_type'),[  'admin'=>$admin, 'vendor_account'=>$vendor_account, 'business' => $business,'product'=>$product ,'gallery_image' => $gallery_image,'contact'=>$contact,'location'=>$location ,'social_media'=>$social_media]);

}

public function add_product_image($id){

    $business_id = Business::find($id);


    $vendor_id = $business_id->vendor_id;


    $vendor_account = Vendor::find($vendor_id);

    $package_vendor = DB::table('package_vendor')
    ->where('vendor_id',$vendor_account->id)
    ->where('Approval','=',1)->where('ends_date','>=',$current_date)->get();

    foreach ($package_vendor as $key => $value) {


        // $current_date = Carbon::now();

        // if(($value->pivot->Approval == '1') && ($value->pivot->ends_date >= $current_date)){

            $plan_id = $value->package_id;

            $package  = Package::find($plan_id);



        $product = $package->product_listing;
        $gallery_image = $package->gallery_image;
 
    }//foreach

    $sub_category_type =   Sub_category::all(); 

    
    // $business_check = DB::table('businesses')->latest('id')->first();


    if(Product::where('business_id',$business_id->id)->count() == null){

        $product_count = 0;
        
    } 
    else {
        
        $product_count = Product::where('business_id',$business_id->id)->count();
    }  
    if(Galllery_image::where('business_id',$business_id->id)->count() == null){

        $image_count = 0;
        
    } 
    else {
        
        $image_count = Galllery_image::where('business_id',$business_id->id)->count();
    }   
    $admin = User::find(1);


    return view('Admin.Vendor.add_product_and_image',compact('sub_category_type'),['admin' => $admin,'image_count' => $image_count, 'product_count'=>$product_count, 'vendor_account'=>$vendor_account, 'product'=>$product ,'gallery_image' => $gallery_image,]);

}


}
