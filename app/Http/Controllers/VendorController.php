<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Package;

use App\Models\Galllery_image;

use App\Models\Vendor;

use App\Models\Vendorplan;

use App\Models\Tendor_req_action;

use App\Models\Request_call_action;


use App\Models\Product;

use App\Models\Business;

use App\Models\Tendor;

use App\Models\Tendor_request;

use App\Models\Bg_image;

use Illuminate\Support\Facades\DB;

use App\Models\Category;
use App\Models\Sub_category;
use DateTime;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class VendorController extends Controller
{


    public function vendor_Home(Request $request){
    $id = Auth::guard('vendor')->id();
    $date = Carbon::now();
    $vendor = Vendor::find($id);
    $business = Business::where('vendor_id',$id)->get();
    $data['banner_image'] = Bg_image::find(1);

    $current_date = Carbon::now();

        $package_vendor = DB::table('package_vendor')
        ->where('vendor_id',$id)
        ->where('Approval','=',1)->where('ends_date','>=',$current_date)->get();
         foreach ($package_vendor as $key => $value) {
             $plan_id = $value->package_id; 

            $plan = Package::find($plan_id);

            $plan_detail = $plan->package_name;


            $end_date = $value->ends_date;         
    }

    if(sizeof($package_vendor)){
              $business_listing = $plan->bussiness_listing;
              $vendor_bl = Business::where('vendor_id',$id)->count();

              $check_b['expired_popup'] = true;

            }
            else{

            $check_b['expired_popup'] = false;
            $business_listing  = 1;
            $vendor_bl  = 1;
            $end_date = "Package Expired";   
            $plan_detail = "No Package Found" ;      
                 
            }      

              // $check = Analytic::find(1);

              // $add_view = New Analytic;
      
              // if($check == null){
      
              //     $add_view->views = 1;
      
              //     $add_view->save();
              // }

              // Analytic::increment('views');

            return view('Vendor.vendor_home', compact('business','data', 'check_b'),[ 'vendor' => $vendor,'vendor_bl'=>$vendor_bl,'business_listing'=> $business_listing,'end_date' =>$end_date, 'plan_detail' => $plan_detail]);
}


    public function vendor_profile(Request $request){

        $id = Auth::guard('vendor')->id();

        $vendor = Vendor::find($id);

        $packagDate = Vendor::find($id);

        $packagDate1 = $packagDate->updated_date;
     

        $time = strtotime('21-07-2021');
        
        $next_date = date("y-m-d", strtotime("+3 month", $time));

        foreach ($vendor->packages as $key => $value) {


            $current_date = Carbon::now();

            if(($value->pivot->latest()->first()->Approval == '1') && ($value->pivot->latest()->first()->ends_date >= $current_date)){

                $plan_id = $value->pivot->latest()->first()->package_id; 

                $plan_detail = Package::find($plan_id);

                $end_date = $value->pivot->latest()->first()->ends_date;
            }

            //check  business_listing
           $business_listing = $plan_detail->bussiness_listing;
           $vendor_bl = Business::where('vendor_id',$id)->count();
           if($vendor_bl < $business_listing){
               $business = true;
           }
           else {
               $business = false;
           }

        }

        return view('Vendor.vendor_profile',['vendor' => $vendor,'business'=>$business,'next_date' => $next_date]);

    }

public function vendor_profile_edit(Request $request,$id){

 // print_r("sss");die();

  $id = Auth::guard('vendor')->id();
  $date = Carbon::now();

  $vendor = Vendor::find($id);
  $data['banner_image'] = Bg_image::find(1);

  $business = Business::where('vendor_id',$id)->get();

  // print_r($business); die();
  


      $current_date = Carbon::now();

      $package_vendor = DB::table('package_vendor')
      ->where('vendor_id',$id)
      ->where('Approval','=',1)->where('ends_date','>=',$current_date)->get();

       foreach ($package_vendor as $key => $value) {


           $plan_id = $value->package_id; 

          $plan_detail = Package::find($plan_id);

          $end_date = $value->ends_date;         

  }

            //check  business_listing
            $business_listing = $plan_detail->bussiness_listing;
            $vendor_bl = Business::where('vendor_id',$id)->count();
           
           
   


          return view('Vendor.vendor_profile_edit', compact('business','data'),[ 'vendor' => $vendor,'vendor_bl'=>$vendor_bl,'business_listing'=> $business_listing,'end_date' =>$end_date, 'plan_detail' => $plan_detail]);


         
  

}

public function update_vendor_profile(Request $request,$id){

  // print_r("sss");die();
      $vendor =Vendor::find($id);    

            if($request->hasFile('profile_image')){
            
            $profile_image = $request->file('profile_image')->getClientOriginalName();
            // $request->file('profile_image')->storeAs('public/vendor_profile/',$profile_image);

            $request->file('profile_image')->move(public_path('upload_images/vendor_profile'), $profile_image);
        
            }

          //   print_r($profile_image); die();
    
                  if($request->hasFile('profile_image')){
                    $vendor->profile_image=$profile_image;
            }
        


            $vendor->name = $request->fname;
            $vendor->lname = $request->lname;
            $vendor->email = $request->email;
            $vendor->number = $request->number;
            $vendor->area = $request->area;
            $vendor->city = $request->city;
            $vendor->province = $request->province;
            $vendor->country = $request->country;
          
            $vendor->save();
            return redirect()->back()->with('SuccessMsg','Profile Successfully updated' );


  }
    
    

    public function updateProfile(Request $request,$id){


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
       
           ]);

           $id = Auth::guard('vendor')->id();

         
              $business =  Business::find($id);    

              $vendor->name = $request->name;
              $vendor->lname = $request->lname;
              $vendor->email = $request->email;
              $vendor->number = $request->number;
              $vendor->address_1 = $request->address_1;
              $vendor->address_2 = $request->address_2;
              $vendor->state = $request->state;
              $vendor->city = $request->city;
              $vendor->zip = $request->zip;
            
              $vendor->save();
              return redirect()->back()->with('SuccessMsg','Profile Successfully updated' );


    }


    public function addImage(Request $request,$id){

        $this->validate($request,[

            'profile_image'=>'required',
       
           ]);
           
               $profile_image = $request->file('profile_image')->getClientOriginalName();

               $request->file('profile_image')->storeAs('public/vendor_profile/',$profile_image);
           
              $vendor =Vendor::find($id);    

              $vendor->profile_image=$profile_image;
            
              $vendor->save();
              return redirect()->back()->with('SuccessMsg','Profile Photo Updated Successfully' );
       

        
    }


    public function vendor_package(){

      $vendor_id = Auth::guard('vendor')->id();
      $date = Carbon::now();

      $vendor = Vendor::find($vendor_id);
  
      $business = Business::where('vendor_id',$vendor_id)->get();
  
      // print_r($business); die();
      
  
  
      

      $current_date = Carbon::now();

          $package_vendor = DB::table('package_vendor')
          ->where('vendor_id',$vendor_id)
          ->where('Approval','=',1)->where('ends_date','>=',$current_date)->get();

           foreach ($package_vendor as $key => $value) {
            $plan_id = $value->package_id; 

            $plan = Package::find($plan_id);




      }
        
        $data['banner_image'] = Bg_image::find(1);
  
               

            if(sizeof($package_vendor)){
              $business_listing = $plan->bussiness_listing;
              $vendor_bl = Business::where('vendor_id',$vendor_id)->count();
  
            
  
            }
            else{
            
            $business_listing  = 1;
            $vendor_bl  = 1;
     
                 
            }      
           
       

                $package_detail = Package::where('package_type','Y')->take(30)->get();
  
      return view('Vendor.vendor_package_yearly',compact('package_detail','data'),['vendor' => $vendor,'vendor_bl' => $vendor_bl,'business_listing' => $business_listing]);
  }


   public function tendor_request($id){


  // print_r($business); die();

  $vendor = Vendor::find($id);



    $current_date = Carbon::now();

    $package_vendor = DB::table('package_vendor')
    ->where('vendor_id',$id)
    ->where('Approval','=',1)->where('ends_date','>=',$current_date)->get();

     foreach ($package_vendor as $key => $value) {


         $plan_id = $value->package_id; 

        $plan = Package::find($plan_id);
        $plan_detail = $plan->package_name;

        $end_date = $value->ends_date;         

}

          //check  business_listing


          if(sizeof($package_vendor)){
            $business_listing = $plan->bussiness_listing;
            $vendor_bl = Business::where('vendor_id',$id)->count();

            $check_b['expired_popup'] = true;
            $check_b['tendor_board'] = $plan->tendor_board;

          }
          else{
            $check_b['tendor_board'] = 0;
          $check_b['expired_popup'] = false;
          $business_listing  = 1;
          $vendor_bl  = 1;
          $end_date = "Package Expired";   
          $plan_detail = "No Package Found" ;      
               
          }      
         
         
 

$vendor = Vendor::find($id);

$tendor_id = Tendor_req_action::where('vendor_req_id',$id)->pluck('tendor_req_id')->toArray();

$data['banner_image'] = Bg_image::find(1);

// print_r($tendor_action_check); die();

$tendor = Tendor_request::join('businesses','businesses.business_category','=','tendor_requests.subcategory_id')
->join('sub_categories','sub_categories.id','=','tendor_requests.subcategory_id')
->join('customers','customers.id','=','tendor_requests.customer_id')
->select('businesses.*','sub_categories.*','customers.*','tendor_requests.*', 'tendor_requests.id as tendorId', 'tendor_requests.updated_at as tendorend')
// ->join('tendor_req_actions','tendor_req_actions.tendor_req_id','=','tendor_requests.id')
->where('vendor_id',$id)
->whereNotIn('tendor_requests.id',$tendor_id)
->get();



// print_r($tendor); die();

$tendor_action = DB::table('tendor_requests')
->join('businesses','businesses.business_category','=','tendor_requests.subcategory_id')
->join('sub_categories','sub_categories.id','=','tendor_requests.subcategory_id')
->join('customers','customers.id','=','tendor_requests.customer_id')->
join('tendor_req_actions','tendor_req_actions.tendor_req_id','=','tendor_requests.id')
->where('vendor_id',$id)
->where('tendor_req_removed', '!=','removed')
->select('businesses.*','sub_categories.*','customers.*','tendor_req_actions.*','tendor_requests.*', 'tendor_requests.id as tendorId','tendor_req_actions.id as tendoractionId','tendor_requests.updated_at as tendorend')->get();

// print_r($tendor); die();




return view('Vendor.tendor_request',compact('tendor','data','tendor_action', 'check_b'),['tendor_req_actions.*','plan_detail'=>$plan_detail, 'vendor' => $vendor,'business_listing' => $business_listing,'vendor_bl' => $vendor_bl]);


}
public function package_checkout($id){

    $vendor_id = Auth::guard('vendor')->id();

    $vendor_id = Auth::guard('vendor')->id();
    $date = Carbon::now();

    $vendor = Vendor::find($vendor_id);

    $business = Business::where('vendor_id',$vendor_id)->get();

    // print_r($business); die();
        
        $current_date = Carbon::now();

        $package_vendor = DB::table('package_vendor')
        ->where('vendor_id',$vendor_id)
        ->where('Approval','=',1)->where('ends_date','>=',$current_date)->get();

         foreach ($package_vendor as $key => $value) {


             $plan_id = $value->package_id; 
             $plan = Package::find($plan_id);



    }
            $item = Package::find($id);
   
              $data['banner_image'] = Bg_image::find(1);
              //check  business_listing
            
      if(sizeof($package_vendor)){
        $business_listing = $plan->bussiness_listing;
        $vendor_bl = Business::where('vendor_id',$id)->count();

      

      }
      else{
      
      $business_listing  = 1;
      $vendor_bl  = 1;

           
      }    
               
     

    return view('Vendor.package_checkout',compact('data'),['item' => $item,'vendor' => $vendor,'vendor_bl' => $vendor_bl, 'business_listing' => $business_listing]);

}
public function deleteBusiness($id)
{
  // print_r($id);die();
  $business = Business::find($id)->delete();;
  // print_r($business);die();
    return redirect()->back()->with('success','Business Deleted Successfully' );

}

    public function packageCheckout(){
        $id = Auth::guard('vendor')->id();

        $vendor = Vendor::find($id);
        $data['banner_image'] = Bg_image::find(1);
        return view('Vendor.package_checkout',compact('data'),['vendor' => $vendor]);

    }

    public function add_business(){

        $vendor_id = Auth::guard('vendor')->id();
        $vendor =Vendor::find($vendor_id);
        $date = Carbon::now();
        // $vendor = Vendor::find($vendor);
        $business = Business::where('vendor_id',$vendor_id)->get();
        // $vendor = Vendor::find($id);
        $category = Category::get();
        $subcategory = Sub_category::get();
        // print_r($business); die();
            $current_date = Carbon::now();
            $package_vendor = DB::table('package_vendor')
            ->where('vendor_id',$vendor_id)
            ->where('Approval','=',1)->where('ends_date','>=',$current_date)->get();
             foreach ($package_vendor as $key => $value) {
                 $plan_id = $value->package_id; 
                $data['package'] = Package::find($plan_id);
                // print_r($plan_detail);die();
                $end_date = $value->ends_date;         
        }

                  

        
        $data['banner_image'] = Bg_image::find(1);

        return view('Vendor.add_bussiness',compact('data'),['category'=>$category,'subCategory'=>$subcategory,'vendor' => $vendor]);


    }
    public function business_edit($id)
    {
      // print_r($id);die();
      $vendor_id= Auth::guard('vendor')->id();

      $vendor = Vendor::find($vendor_id);
      // print_r($vendor);die();
        $date = Carbon::now();
        $category = Category::get();
        $subcategory = Sub_category::get();
        // $vendor = Vendor::find($vendor);
        $business = Business::find($id);
        // print_r($business);die();
        $data['banner_image'] = Bg_image::find(1);
            $current_date = Carbon::now();
            $package_vendor = DB::table('package_vendor')
            ->where('vendor_id',$vendor_id)
            ->where('Approval','=',1)->where('ends_date','>=',$current_date)->get();
             foreach ($package_vendor as $key => $value) {
                 $plan_id = $value->package_id; 
                $plan_detail = Package::find($plan_id);
                $end_date = $value->ends_date;         
            }

            $product = Product::where('business_id',$id)->get()->toArray();
            $gallery_image = Galllery_image::where('business_id',$id)->get()->toArray();
            $plan_product = $plan_detail->product_listing;
            $product_ct = count($product);

            $data['product_count'] = count($product);
        // print_r($business);die();

            $data['gallery_image_count'] = count($gallery_image);




            


      return view('Vendor.edit_bussiness',compact('data'),['category'=>$category,'subCategory'=>$subcategory,'vendor' => $vendor,'plan_detail'=>$plan_detail,'product'=>$product,'gallery_image'=>$gallery_image,'business'=>$business]);
    }

     public function vendor_package_monthly(){

      $vendor_id = Auth::guard('vendor')->id();
      $date = Carbon::now();

      $vendor = Vendor::find($vendor_id);
  
      $business = Business::where('vendor_id',$vendor_id)->get();
  
      // print_r($business); die();
      $data['banner_image'] = Bg_image::find(1);
  
  
          $current_date = Carbon::now();

          $package_vendor = DB::table('package_vendor')
          ->where('vendor_id',$vendor_id)
          ->where('Approval','=',1)->where('ends_date','>=',$current_date)->get();

           foreach ($package_vendor as $key => $value) {


               $plan_id = $value->package_id; 
               $plan = Package::find($plan_id);

      }
  
      if(sizeof($package_vendor)){
        $business_listing = $plan->bussiness_listing;
        $vendor_bl = Business::where('vendor_id',$vendor->id)->count();

      

      }
      else{
      
      $business_listing  = 1;
      $vendor_bl  = 1;

           
      }    
               
       

      $package_detail = Package::where('package_type','M')->skip(1)->take(30)->get();
  
      return view('Vendor.vendor_package_monthly',compact('package_detail','data'),['vendor' => $vendor,'vendor_bl' => $vendor_bl, 'business_listing' => $business_listing]);
  }


    public function business_subCategory(Request $request)
    {
      // $all = $request->all();
      $subCategory = Sub_category::where('category_type',$request->category)->get();
      return response()->json(['subCategory' => $subCategory]);
    }
    
    public function multipleImage_upload(Request $request)
      {
        // dd($request->all());
          $request->validate([
          'file' => 'required',
          ]);

            $file = $request->file('file');
            // print_r($file);die();
          $fileName = $file->getClientOriginalName();
          $file->move(public_path('upload_images/gallery_image'),$fileName);  

          return response(['msg' => 'File Uploaded']);
      }
    public function update_business(Request $request){

       // $request->validate([
       //  'upload_brochure' => 'required|mimes:csv,xlx,xls,pdf|max:2048',
       //  'document_img' => 'required|mimes:csv,xlx,xls,pdf|max:2048',
       //  'upload_banner' => 'required|mimes:jpeg,jpg,png,|max:2048',
       //  // 'product_image' => 'required|mimes:jpeg,jpg,png,|max:2048',

       //  ]);
      // print_r($request->all());die();

           if($id = Auth::guard('vendor')->id())
           {
            // print_r($request->all());die();
              $business =New Business;
              $business->vendor_id = $id;
              $business->business_title = $request->business_title;
              $business->category = $request->business_category;
              $business->business_category = $request->business_SubCategory;
              $business->business_description = $request->business_description;
              $business->status = 1;

              $business->country = $request->country;
              $business->city = $request->city;
              $business->location = $request->location;
              $business->lat = $request->Latitude;
              $business->lang = $request->longitude;

              $business->email = $request->email;
              $business->mobile_no = $request->mobile_no;
              $business->website = $request->website;
              $business->fax_no = $request->fax_no;

              $business->facebook = $request->facebook;
              $business->linkedin = $request->linkedin;
              $business->twitter = $request->twitter;
              $business->instagram = $request->instagram;

              $business->monday_from = $request->monday_from;
              $business->monday_to = $request->monday_to;
              $business->tuesday_from = $request->tuesday_from;
              $business->tuesday_to = $request->tuesday_to;
              $business->wednesday_from = $request->wednesday_from;
              $business->wednesday_to = $request->wednesday_to;
              $business->thursday_from = $request->thursday_from;
              $business->thursday_to = $request->thursday_to;
              $business->friday_from = $request->friday_from;
              $business->friday_to = $request->friday_to;
              $business->saturday_from = $request->saturday_from;
              $business->saturday_to = $request->saturday_to;
              $business->sunday_from = $request->sunday_from;
              $business->sunday_to = $request->sunday_to;


              if($request->hasFile('upload_logo')){
    
                $upload_logo = $request->file('upload_banner')->getClientOriginalName();
                $request->file('upload_logo')->move(public_path('upload_images/business_logo'), $upload_logo);
                $business->business_logo=$upload_logo;
      
                }

                if($request->hasFile('upload_banner')){
    
                  $upload_banner = $request->file('upload_banner')->getClientOriginalName();
                  $request->file('upload_banner')->move(public_path('upload_images/business_image'), $upload_banner);
                  $business->business_image=$upload_banner;
        
                  }


                  
                if($request->hasFile('upload_brochure')){
    
                  $upload_brochure = $request->file('upload_brochure')->getClientOriginalName();
                  $request->file('upload_brochure')->move(public_path('upload_images/business_document'), $upload_brochure);
                  $business->business_brochure=$upload_brochure;
        
                  }

                        
                if($request->hasFile('upload_document')){
    
                  $upload_document = $request->file('upload_document')->getClientOriginalName();
                  $request->file('upload_document')->move(public_path('upload_images/business_document'), $upload_document);
                  $business->business_document=$upload_document;
        
                  }



              $business->save();
              $business_id =   $business->id;
              // print_r($business_id);die();
              $product = $request->all();
              $count = count($product['product_name']);
              $data =[];
              // print_r($product['product_image'][1]);die();
              if ($product['product_name']) {
                # code...
                // dd($product);
             
              for($i=0;$i<$count;$i++)
              {
                
                  $fileName = time().'_'.$product['product_image'][$i]->getClientOriginalName();
                   // $filePath = $request->file('product_image')[$i]->storeAs('uploads/images', $fileName, 'public');
                   $filePath = $request->file('product_image')[$i]->move(public_path('upload_images/product_image'), $fileName);


                    $data[] = array('product_name'=>$product['product_name'][$i],
                    'product_price_from'=>$product['product_price_from'][$i],
                    'product_price_to'=>$product['product_price_to'][$i],
                    'product_description'=>$product['product_description'][$i],
                    'product_image'=>$fileName,
                    'business_id'=> $business_id);
                
                   
              }
              
              Product::insert($data);
              }


              $upload_img = $request->all();

            
              $count1 = count($upload_img['image']);
                // print_r($count1);die();
              $data1 =[];
              if (!empty($upload_img['image'])) {
                foreach ($upload_img['image'] as $key => $value) {
                    
                   // print_r($value);
                   $data1[] = array(
                    'gallery_image'=>$value,
                    'business_id'=> $business_id);
                }

              //   for($i=0;$i<$count1;$i++)
              // {
                 
              //      print_r($upload_img['image']);
              //       // $data1[] = array(
              //       // 'gallery_image'=>$fileName,
              //       // 'business_id'=> $business_id);
              // }
                // print_r($data1);die();
              Galllery_image::insert($data1);
              }  

             

           }
          // $business = Business::find(1);
            return redirect(route('vendor'));
      }

       public function edit_update_business(Request $request)
      {

        // print_r("dd");die();
        if($id = Auth::guard('vendor')->id())
           {
            // print_r($request->images);die();
              $business = Business::where('id',$request->business_id)->first();
              $business->vendor_id = $id;
              $business->business_title = $request->business_title;
              $business->category = $request->business_category;
              $business->business_category = $request->business_SubCategory;
              $business->business_description = $request->business_description;
              $business->status = 1;


              $business->save();



              $business_id =   $business->id;
              // print_r($value['id']);die();
              // $product = $request->all();
              // $count = count($product['product_name']);

              // $data =[];  

              // for($i=0;$i<$count;$i++)
              //{
                foreach ($request->product_names as $key => $value) {


                $product = Product::find($value['id']);


                if($request->file('product_image')) {
    
                    $product_image = time().'_'.$request->file('product_image')->getClientOriginalName();
                     
                    $filePath = $request->file('product_image')->move(public_path('upload_images/product_image'), $product_image);

                    $product->product_image = $product_image;

                }
              

                $product->product_name = $request->product_name;
                $product->product_price_from = $request->product_price_from;
                $product->product_price_to = $request->product_price_to;
                $product->product_description = $request->product_description;
                $product->product_name = $request->product_name;
                $product->business_id = $business_id;

       
                    $product->save();

              }

           }
           
            return redirect()->back()->with('success', 'Business successfully updated');
      }

//update business logo

      public function update_logo(Request $request, $id){

        $update = Business::find($id);

        if($request->file('business_logo')) {
              $business_logo = time().'_'.$request->file('business_logo')->getClientOriginalName();
              $filePath = $request->file('business_logo')->move(public_path('upload_images/business_logo'), $business_logo);

              $update->business_logo = $business_logo;

              $update->save();
              return redirect()->back()->with('success', 'Business Logo successfully updated');

          }

      }
      
//update business logo

public function update_banner(Request $request, $id){

  $update = Business::find($id);

  if($request->file('business_image')) {
        $business_image = time().'_'.$request->file('business_image')->getClientOriginalName();
        $filePath = $request->file('business_image')->move(public_path('upload_images/business_image'), $business_image);

        $update->business_image = $business_image;

        $update->save();
        return redirect()->back()->with('success', 'Business Image successfully updated');

    }

}

//update business logo

public function update_document(Request $request, $id){

  $update = Business::find($id);

  if($request->file('business_document')) {
        $business_document = time().'_'.$request->file('business_document')->getClientOriginalName();
        $filePath = $request->file('business_document')->move(public_path('upload_images/business_document'), $business_document);

        $update->business_document = $business_document;

        $update->save();
        return redirect()->back()->with('success', 'Business Document successfully updated');

    }

}


public function update_brochure(Request $request, $id){

  $update = Business::find($id);

  if($request->file('update_brochure')) {
        $business_brochure = time().'_'.$request->file('business_brochure')->getClientOriginalName();
        $filePath = $request->file('business_brochure')->move(public_path('upload_images/business_brochure'), $business_brochure);

        $update->business_brochure = $business_brochure;

        $update->save();

        return redirect()->back()->with('success', 'Business Brochure successfully updated');

    }

}

public function update_g_image(Request $request, $id){

  $update = Galllery_image::find($id);

  if($request->file('gallery_image')) {
        $gallery_image = time().'_'.$request->file('gallery_image')->getClientOriginalName();
        $filePath = $request->file('gallery_image')->move(public_path('upload_images/gallery_image'), $gallery_image);

        $update->gallery_image = $gallery_image;

        $update->save();

        return redirect()->back()->with('success', 'Gallery Image successfully updated');

    }

}




public function add_more_image(Request $request, $id){

  // $business = Business::find($id);
  $update = New Galllery_image;

  if($request->file('gallery_image')) {
        $gallery_image = time().'_'.$request->file('gallery_image')->getClientOriginalName();
        $filePath = $request->file('gallery_image')->move(public_path('upload_images/gallery_image'), $gallery_image);

        $update->gallery_image = $gallery_image;
        $update->business_id = $id;

        $update->save();

        return redirect()->back()->with('success', 'Gallery Image successfully updated');


    }

}




public function update_product(Request $request, $id){

  $product = Product::find($id);

  
  if($request->file('product_image')) {
    
    $product_image = time().'_'.$request->file('product_image')->getClientOriginalName();
     
    $filePath = $request->file('product_image')->move(public_path('upload_images/product_image'), $product_image);

    $product->product_image = $product_image;
  }

    $product->product_name = $request->product_name;
    $product->product_price_from = $request->product_price_from;
    $product->product_price_to = $request->product_price_to;
    $product->product_description = $request->product_description;

    $product->save();

    return redirect()->back()->with('success', ' Product successfully updated');

 }

 
public function add_more_product(Request $request, $id){

  $product = New Product;

  
  if($request->file('product_image')) {
    
    $product_image = time().'_'.$request->file('product_image')->getClientOriginalName();
     
    $filePath = $request->file('product_image')->move(public_path('upload_images/product_image'), $product_image);

    $product->product_image = $product_image;
  }

    $product->product_name = $request->product_name;
    $product->product_price_from = $request->product_price_from;
    $product->product_price_to = $request->product_price_to;
    $product->product_description = $request->product_description;
    $product->business_id = $id;

    $product->save();

    return redirect()->back()->with('success', ' Product successfully updated');

 }
 

 public function update_location(Request $request, $id){

   $business = Business::find($id);

           $business->country = $request->country;
           $business->city = $request->city;
           $business->location = $request->location;
           $business->lat = $request->Latitude;
           $business->lang = $request->longitude;

           $business->save();

           return redirect()->back()->with('success', 'Location successfully updated');

 }

 public function update_contact(Request $request, $id){

  $business = Business::find($id);

  $business->email = $request->email;
  $business->mobile_no = $request->mobile_no;
  $business->website = $request->website;
  $business->fax_no = $request->fax_no;

  $business->save();
  return redirect()->back()->with('success', 'Contact successfully updated');

 }
 
 public function update_social(Request $request, $id){
  $business = Business::find($id);

  $business->facebook = $request->facebook;
  $business->linkedin = $request->linkedin;
  $business->twitter = $request->twitter;
  $business->instagram = $request->instagram;

  $business->save();
  return redirect()->back()->with('success', 'social successfully updated');

 }

 public function update_time(Request $request, $id){
  
  $business = Business::find($id);

  $business->monday_from = $request->monday_from;
  $business->monday_to = $request->monday_to;
  $business->tuesday_from = $request->tuesday_from;
  $business->tuesday_to = $request->tuesday_to;
  $business->wednesday_from = $request->wednesday_from;
  $business->wednesday_to = $request->wednesday_to;
  $business->thursday_from = $request->thursday_from;
  $business->thursday_to = $request->thursday_to;
  $business->friday_from = $request->friday_from;
  $business->friday_to = $request->friday_to;
  $business->saturday_from = $request->saturday_from;
  $business->saturday_to = $request->saturday_to;
  $business->sunday_from = $request->sunday_from;
  $business->sunday_to = $request->sunday_to;

  $business->save();
  return redirect()->back()->with('success', 'Time successfully updated');

 }

 


public function request_call_vendor(Request $value)
      {
        
  $id = Auth::guard('vendor')->id();

  $vendor = Vendor::find($id);


  $business = Business::where('vendor_id',$id)->get();
  $data['banner_image'] = Bg_image::find(1);

      $current_date = Carbon::now();

      $package_vendor = DB::table('package_vendor')
      ->where('vendor_id',$id)
      ->where('Approval','=',1)->where('ends_date','>=',$current_date)->get();

       foreach ($package_vendor as $key => $value) {


           $plan_id = $value->package_id; 

          $plan = Package::find($plan_id);
          
          $plan_detail = $plan->package_name;

          $end_date = $value->ends_date;         

            }
 

            //check  business_listing

            if(sizeof($package_vendor)){
              $business_listing = $plan->bussiness_listing;
              $vendor_bl = Business::where('vendor_id',$id)->count();
  
              $check_b['expired_popup'] = true;
              $check_b['tendor_board'] = $plan->tendor_board;
  
            }
            else{
              $check_b['tendor_board'] = 0;
            $check_b['expired_popup'] = false;
            $business_listing  = 1;
            $vendor_bl  = 1;
            $end_date = "Package Expired";   
            $plan_detail = "No Package Found" ;      
                 
            }      
           

            $reques_call_id = Request_call_action::where('request_call_vendor_id',$id)->pluck('request_call_tendor_id')->toArray();

      

            // print_r($tendor_action_check); die();
    
    
            $request_call = DB::table('request_calls')->select('businesses.*','sub_categories.*','customers.*','request_calls.*', 'request_calls.id as tendorId', 'request_calls.updated_at as tendorend')
            ->join('businesses','businesses.id','=','request_calls.business_call_id')
            ->join('sub_categories','sub_categories.id','=','businesses.business_category')
            ->join('customers','customers.id','=','request_calls.customer_call_id')
           //  ->join('tendor_req_actions','tendor_req_actions.tendor_req_id','=','tendor_requests.id')
            ->where('request_calls.vendor_call_id',$id)
            ->whereNotIn('request_calls.id',$reques_call_id)
           ->get();
           
           

//dd($request_call);
           
           $request_call_action = DB::table('request_calls')->select('businesses.*','sub_categories.*','customers.*','request_call_actions.*','request_calls.*', 'request_call_actions.id as requestCallId', 'request_calls.id as tendorId', 'request_calls.updated_at as tendorend')
           ->join('businesses','businesses.business_category','=','request_calls.business_call_id')
           ->join('sub_categories','sub_categories.id','=','businesses.business_category')
           ->join('customers','customers.id','=','request_calls.customer_call_id')
           ->join('request_call_actions','request_call_actions.request_call_tendor_id','=','request_calls.id')
           ->where('vendor_id',$id)
           ->where('request_call_removed', '!=','removed')
          ->get();

           


     return view('Vendor.request_call',compact('request_call','data','request_call_action', 'check_b'),['vendor'=>$vendor,'business_listing'=>$business_listing,'vendor_bl'=>$vendor_bl,'plan_detail'=>$plan_detail]);

      }



      
      public function request_for_q(Request $value)
      {
        
    
  $id = Auth::guard('vendor')->id();

  $vendor = Vendor::find($id);


  $business = Business::where('vendor_id',$id)->get();
  $data['banner_image'] = Bg_image::find(1);
  // print_r($business); die();
      
      $current_date = Carbon::now();

      $package_vendor = DB::table('package_vendor')
      ->where('vendor_id',$id)
      ->where('Approval','=',1)->where('ends_date','>=',$current_date)->get();

       foreach ($package_vendor as $key => $value) {


           $plan_id = $value->package_id; 

          $plan = Package::find($plan_id);
          $plan_detail = $plan->package_name;

          $end_date = $value->ends_date;         

  }
 

            //check  business_listing

            if(sizeof($package_vendor)){
              $business_listing = $plan->bussiness_listing;
              $vendor_bl = Business::where('vendor_id',$id)->count();
  
              $check_b['expired_popup'] = true;
              $check_b['tendor_board'] = $plan->tendor_board;
  
            }
            else{
              $check_b['tendor_board'] = 0;
            $check_b['expired_popup'] = false;
            $business_listing  = 1;
            $vendor_bl  = 1;
            $end_date = "Package Expired";   
            $plan_detail = "No Package Found" ;      
                 
            }      
           

            $reques_call_id = Request_call_action::where('request_call_vendor_id',$id)->pluck('request_call_tendor_id')->toArray();

      

            // print_r($tendor_action_check); die();  
              $reques_for_q = DB::table('requestfqs')
              // ->join('businesses','businesses.business_category','=','request_calls.business_call_id')
              // ->join('customers','customers.id','=','request_calls.customer_call_id')
             ->where('vendor_id',$id)
             ->get();
           


     return view('Vendor.request_for_q',compact('data','reques_for_q', 'check_b'),['vendor'=>$vendor,'business_listing'=>$business_listing,'vendor_bl'=>$vendor_bl,'plan_detail'=>$plan_detail]);

      }


      public function vendor_company_profile($id){
// print_r("ddd");die();
        // print_r($plan_detail);die();
      $auth_id = Auth::guard('vendor')->id();


      $date = Carbon::now();
       $data['banner_image'] = Bg_image::find(1);
      $vendor = Vendor::find($auth_id);

      $business = Business::where('vendor_id',$auth_id)->get();

  // print_r($business); die();
  


      $current_date = Carbon::now();


      $package_vendor = DB::table('package_vendor')
      ->where('vendor_id',$auth_id)
      ->where('Approval','=',1)->where('ends_date','>=',$current_date)->get();

       foreach ($package_vendor as $key => $value) {


          $plan_id = $value->package_id; 

          $plan_detail = Package::find($plan_id);

          $end_date = $value->ends_date;         

  }



            //check  business_listing
            $business_listing = $plan_detail->bussiness_listing;
            $vendor_bl = Business::where('vendor_id',$id)->count();

            // $check = Analytic::find(1);

            // $add_view = New Analytic;
    
            // if($check == null){
    
    
            //     $add_view->views = 1;
    
            //     $add_view->save();
    
            // }
    
            // Analytic::increment('views');
           
           
   


  $category = DB::table('sub_categories')->join('businesses','businesses.business_category','=','sub_categories.id')->select('sub_category')
  ->where('businesses.id',$id)->get();

  // $sub_category = $category[0];
  // print_r($category[0]['sub_category']); die();


  $reviewOne = DB::table('reviews')->join('businesses','businesses.id','=','reviews.business_id')
                                   ->join('customers','customers.id','=','reviews.customer_id')
                                   ->where('businesses.id',$id)->take(2)->get();

                                   
  $reviewTwo = DB::table('reviews')->join('businesses','businesses.id','=','reviews.business_id')
  ->join('customers','customers.id','=','reviews.customer_id')
  ->where('businesses.id',$id)->skip(2)->take(1000)->get(); 

  if(sizeof($reviewTwo)){
    $view_more = true;

  }
  else {
    $view_more = false;
  }


  $business = Business::find($id);

  $vendor= Vendor::find($auth_id);


  $data1 = DB::table('businesses')
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


  
  // ->join('profiles','profiles.id','=','users.id')
  
  // print_r($data);die();

  return view('Vendor.view_company_profile' , compact('data','data1','gallery_image' ,'gallery_image_1', 'reviewOne', 'reviewTwo'),['view_more'=>$view_more,'business_listing'=>$business_listing,'vendor_bl'=>$vendor_bl, 'category'=>$category,  'plan_detail'=>$plan_detail,'business'=>$business,'vendor'=>$vendor]);


}


     

public function store_image(Request $request)
    {
      // print_r("d");die();
        $request->validate([
        'file' => 'required',
        ]);
        // save the file
        if ($fileUid = $request->file->store('/upload', 'public')) {
          // print_r($fileUid);die();
          $file = $request->file('file');  
        $fileName = time().'.'.$file->extension(); 
        $file->move(public_path('upload'),$fileName);  
            $gallery = Gallery::create([
                'filename' => $request->file->getClientOriginalName(),
            ]);

            return response()->json(['id' => $gallery->id]);
        }
        return response(['msg' => 'Unable to upload your file.'], 400);
    }

public function store(Request $request)
{
  $file = new Galllery_image;

  if ($request->file('file')) {
    $filePath = $request->file('file');
    $fileName = $filePath->getClientOriginalName();
    $path = $request->file('file')->storeAs('uploads', $fileName, 'public');
  }

  $file->gallery_image = $fileName;
  $file->path = '/storage/'.$path;
  $file->save();

  return response()->json([ 'success' => $fileName ]);
}

public function remvoeFile(Request $request)
{
    $name =  $request->get('name');
    File::where(['name' => $name])->delete();

    return $name;
}




  // tendor accepted  request_call_vendor
      
  public function request_action_accepted($id){

    $vendor_id = Auth::guard('vendor')->id();

    $request_action = New Request_call_action;

    $request_action->request_call_action = 1;
    $request_action->request_call_tendor_id = $id;
    $request_action->request_call_vendor_id = $vendor_id;
    $request_action->request_call_removed = 'NIL';
    $request_action->save();

   
    return redirect()->back()->with('SuccessMsg','Request call Successfully updated' );

}



public function request_action_rejected($id){

    $vendor_id = Auth::guard('vendor')->id();

    $request_action = New Request_call_action;

    $request_action->request_call_action = 0;
    $request_action->request_call_tendor_id = $id;
    $request_action->request_call_vendor_id = $vendor_id;
    $request_action->request_call_removed = 'NIL';
    $request_action->save();

   
    return redirect()->back()->with('SuccessMsg','Request call Successfully updated' );

}

    // tendor rejected







public function request_call_removed($id){

    $vendor_id = Auth::guard('vendor')->id();

    $request_action = New Request_call_action;

    $request_action->request_call_action = 'removed';
    $request_action->request_call_tendor_id = $id;
    $request_action->request_call_vendor_id = $vendor_id;
    $request_action->request_call_removed = 'removed';
    $request_action->save();

   
    return redirect()->back()->with('SuccessMsg','Request call Successfully removed' );

}




public function request_action_removed($id){

    $vendor_id = Auth::guard('vendor')->id();

    $request_action =  Request_call_action::find($id);

    $request_action->request_call_removed = 'removed';
    $request_action->save();
    
    return redirect()->back()->with('SuccessMsg','request action Successfully removed' );

}



// tendor accepted

public function tendor_action_accepted($id){

  $vendor_id = Auth::guard('vendor')->id();

  $tendor_action = New Tendor_req_action;

  $tendor_action->tendor_req_action = 1;
  $tendor_action->tendor_req_id = $id;
  $tendor_action->vendor_req_id = $vendor_id;
  $tendor_action->tendor_req_removed = 'NIL';
  $tendor_action->save();
 
  return redirect()->back()->with('SuccessMsg','tendor action Successfully updated' );

}

  // tendor rejected

public function tendor_action_rejected($id){

  $vendor_id = Auth::guard('vendor')->id();

  $tendor_action = New Tendor_req_action;

  $tendor_action->tendor_req_action = 0;
  $tendor_action->tendor_req_id = $id;
  $tendor_action->vendor_req_id = $vendor_id;
  $tendor_action->tendor_req_removed = 'NIL';
  $tendor_action->save();
  
  return redirect()->back()->with('SuccessMsg','tendor action Successfully updated' );

}



public function tendor_request_removed($id){

  $vendor_id = Auth::guard('vendor')->id();

  $tendor_action = New Tendor_req_action;

  $tendor_action->tendor_req_action = 'removed';
  $tendor_action->tendor_req_id = $id;
  $tendor_action->vendor_req_id = $vendor_id;
  $tendor_action->tendor_req_removed = 'removed';
  $tendor_action->save();
  
  return redirect()->back()->with('SuccessMsg','tendor action Successfully removed' );

}


public function tendor_action_removed($id){

  $vendor_id = Auth::guard('vendor')->id();

  $tendor_action =  Tendor_req_action::find($id);

  // $tendor_action->tendor_req_action = 'removed';
  // $tendor_action->tendor_req_id = $id;
  // $tendor_action->vendor_req_id = $vendor_id;
  $tendor_action->tendor_req_removed = 'removed';
  $tendor_action->save();
  
  return redirect()->back()->with('SuccessMsg','tendor action Successfully removed' );

}


public function update_gallery_image($id){

  $update = Galllery_image::find($id);

  if($request->file('gallery_image')) {
  
      $gallery_image = time().'_'.$request->file('gallery_image')->getClientOriginalName();

      $filePath = $request->file('gallery_image')->move(public_path('upload_images/gallery_image'), $gallery_image);

   
  }

  $update->gallery_image = $gallery_image;

  $update->save();
}

    }


