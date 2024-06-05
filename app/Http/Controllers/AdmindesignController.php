<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Package;

use App\Models\Business_information;

use App\Models\Customer;
use Illuminate\Support\Facades\Auth;

use Redirect;

use App\Models\Business;

use App\Models\HomeCate;

use App\Models\Tendor;

use App\Models\Product;

use App\Models\User;

use App\Models\Bg_image;

use App\Models\Add_image;

use App\Models\Add_image_next;

use App\Models\Category;

use App\Models\Faq;

use App\Models\Galllery_image;

use App\Models\Sub_category;
use App\Models\About_us;
use App\Models\Contact_us;
use App\Models\Terms_of_policy;
use App\Models\Privacy_policy;


use Carbon\Carbon;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


use App\Models\Vendor;

class AdmindesignController extends Controller
{
    


    public function create_image(){

        $admin = User::find(1);


        if( !empty(Bg_image::find(1))){
            $image = Bg_image::find(1);

            $image_check = true;
            return view('Admin.Designs.image_update', ['admin' => $admin, 'image' => $image, 'image_check'=>$image_check]);

        }
        else {
            $image_check = false;

            return view('Admin.Designs.image_update' , ['admin' => $admin,'image_check'=>$image_check]);
        }

    }

    public function update_image( Request $request){


        if(empty(Bg_image::find(1))){

            $Bg_image = New Bg_image; 

        }
        else {
            $Bg_image =  Bg_image::find(1); 
        }


        if($request->hasFile('login_image')){
            $login_image = $request->file('login_image')->getClientOriginalName();
            // $request->file('login_image')->moveTo('public/banner_image/',$login_image);
            $request->file('login_image')->move(public_path('upload_images/banner_image'), $login_image);
            }
            if($request->hasFile('login_image')){
            $Bg_image->login_image=$login_image;
            }
            if($request->hasFile('home_image')){
                $home_image = $request->file('home_image')->getClientOriginalName();
                $request->file('home_image')->move(public_path('upload_images/banner_image'), $home_image);
                }
                if($request->hasFile('home_image')){
                $Bg_image->home_image=$home_image;
                }
                if($request->hasFile('vendor_image')){
                    $vendor_image = $request->file('vendor_image')->getClientOriginalName();
                    $request->file('vendor_image')->move(public_path('upload_images/banner_image'), $vendor_image);
                    }
                    if($request->hasFile('vendor_image')){
                    $Bg_image->vendor_image=$vendor_image;
                    }
                    if($request->hasFile('customer_image')){
                        $customer_image = $request->file('customer_image')->getClientOriginalName();
                        $request->file('customer_image')->move(public_path('upload_images/banner_image'), $customer_image);
                        }
                        if($request->hasFile('customer_image')){
                        $Bg_image->customer_image=$customer_image;
                        }
           
        

                $Bg_image->save();

                return redirect()->back()->with('SuccessMsg','Image Successfully updated' );




    }



    // advertisement
    public function advertisement(){




        $get_add_image = Add_image::all();
        $get_add_image_next = Add_image_next::all();

            $add_image1 = DB::table('add_images')->count();

            $add_image2 = DB::table('add_image_nexts')->count();

            $admin = User::find(1);


            return view('Admin.Designs.advertisement', ['admin'=>$admin, 'add_image1'=>$add_image1, 'add_image2'=>$add_image2], compact('get_add_image', 'get_add_image_next'));


 
    }


    public function update_advertisement( Request $request){
        

            $Add_image = New Add_image; 
           
        if($request->hasFile('add_image')){
    
            $add_image = $request->file('add_image')->getClientOriginalName();
            $request->file('add_image_next')->move(public_path('upload_images/advertisement_images'), $add_image);
        
            }

                  if($request->hasFile('add_image')){
                    $Add_image->add_image=$add_image;
            }

            $Add_image->save();


        
           return redirect()->back()->with('SuccessMsg','Addvertisement Image Successfully updated' );

    }
    




    // edit top advertisement 
    public function update_edited_advertisement( Request $request, $id){
        

        $Add_image =  Add_image::find($id); 
       
    if($request->hasFile('add_image')){

        $add_image = $request->file('add_image')->getClientOriginalName();
         $request->file('add_image_next')->move(public_path('upload_images/advertisement_images'), $add_image);
    
        }

              if($request->hasFile('add_image')){
                $Add_image->add_image=$add_image;
        }

        $Add_image->save();

       return redirect()->back()->with('SuccessMsg','Addvertisement Image Successfully updated' );

}

public function delete_advertisement(){
    
    Add_image::find($id)->delete();
    return redirect()->back()->with('SuccessMsg','Advertisement Deleted Successfully' );
    
}

    public function update_advertisement_next( Request $request){

        $Add_image_next = New Add_image_next; 

        if($request->hasFile('add_image_next')){

            $add_image_next = $request->file('add_image_next')->getClientOriginalName();
             $request->file('add_image_next')->move(public_path('upload_images/advertisement_images'), $add_image_next);
        
            }
          
            $Add_image_next->add_image_next=$add_image_next;

            $Add_image_next->save();
    
            return redirect()->back()->with('SuccessMsg','Addvertisement Image Successfully updated' );

    
    }


    public function edit_advertisement(){


        $add_image = Add_image::all();

        $admin = User::find(1);


        return view('Admin.Designs.edit_advertisement',['admin'=>$admin] ,compact('add_image'));


    }

    public function edit_advertisement_next(){


        $add_image = Add_image_next::all();

        $admin = User::find(1);


        return view('Admin.Designs.edit_advertisement_next',['admin'=>$admin] ,compact('add_image'));


    }


       // edit middle advertisement 
       public function update_edited_advertisement_next( Request $request, $id){
        

        $Add_imagenext =  Add_image_next::find($id); 
       
    if($request->hasFile('add_image_next')){

        $add_image_next = $request->file('add_image_next')->getClientOriginalName();
        $request->file('add_image_next')->move(public_path('upload_images/advertisement_images'), $add_image_next);
    
        }

              if($request->hasFile('add_image_next')){
                $Add_imagenext->add_image_next=$add_image_next;
        }

        $Add_imagenext->save();

       return redirect()->back()->with('SuccessMsg','Addvertisement Image Successfully updated' );

}

public function delete_advertisement_next(){
    
    Add_image_next::find($id)->delete();
    return redirect()->back()->with('SuccessMsg','Advertisement Deleted Successfully' );
    
}






    public function main_category(){

        $category_count = DB::table('categories')->count();

        $admin = User::find(1);


        return view('Admin.Designs.category', ['category_count' => $category_count,'admin' => $admin]);
    }

    public function update_category( Request $request){




        $check_priority = Category::where('priority', '=', $request->priority)->get();

        foreach($check_priority as $check_priority_child){

        if(($check_priority_child) !=null){
            return redirect()->back()->with('SuccessMsg','Priority listing already Exist');
        }
    }
        
     $this->validate($request,[
     
        'category'=>'required',
        'priority'=>'required',
        'category_description'=>'required',
        'category_icon'=>'required',

   
       ]);



     
          $category_type =  New Category; 

          if($request->hasFile('category_icon')){
    
            $category_icon = $request->file('category_icon')->getClientOriginalName();
            $request->file('category_icon')->move(public_path('upload_images/category_icon'), $category_icon);
        
            }

                  if($request->hasFile('category_icon')){
                    $category_type->category_icon=$category_icon;
            }
          
          
          $category_type->category = $request->category;
          $category_type->category_description = $request->category_description;
          $category_type->priority = $request->priority;

          $category_type->save();

          return redirect()->back()->with('SuccessMsg','Category Successfully updated' );

    }


    public function view_category(){

        $category =  Category::all(); 

        $admin = User::find(1);


        return view('Admin.Designs.view_category',['admin'=>$admin] ,compact('category'));
    }

    public function delete_category($id){
        Category::find($id)->delete();
        return redirect()->back()->with('SuccessMsg','Category deleted Successfully' );
    }

    public function edit_category($id){

        $category_update = Category::find($id);

        $admin = User::find(1);

        return view('Admin.Designs.edit_category', ['category_update'=>$category_update,'admin'=>$admin]);
    }

    public function update_edited_category(Request $request, $id){

        
        
     $this->validate($request,[
     
        'category'=>'required',
        'priority'=>'required',
        'category_description'=>'required',
        'category_icon'=>'required',

   
       ]);



     
          $category_type =   Category::find($id); 

           if($request->hasFile('category_icon')){
    
             $category_icon = $request->file('category_icon')->getClientOriginalName();
             $request->file('category_icon')->move(public_path('upload_images/category_icon'), $category_icon);
        
            }

            if($request->hasFile('category_icon')){
                     $category_type->category_icon=$category_icon;
            }


             // Image Upload
            //  if($request->hasFile('category_icon')) {
            //     $photo = $request->file('category_icon');

            //     if(isset($photo) && !empty($photo) && $photo->isValid()) {
            //         $rules = array('photo' => 'required|mimes:png,jpg,jpeg');
            //         $validator = Validator::make(array('photo'=> $photo), $rules);
            //         if($validator->passes()) {
            //             $file_name = CommonHelper::generate_safe_filename($request->input('account_fullname')).'_'.time().'.'.$photo->getClientOriginalExtension();
            //             $file_path = public_path('/category_icon/'.$file_name);

            //             // Resize Image
            //             $save_photo = Image::make($photo->getRealPath())->save($file_path);

            //             $category_type->category_icon= $file_name;
            //         }
            //     }
            // }
          
          
       
          $category_type->category = $request->category;
          $category_type->priority = $request->priority;
          $category_type->category_description = $request->category_description;

          $category_type->save();
          return redirect(route('view_category'))->with('SuccessMsg','Category Updated Successfully');

    }

    
    public function sub_category(){

        $category_count = DB::table('sub_categories')->count();

        $category_type = Category::all();

        $admin = User::find(1);

        return view('Admin.Designs.sub_category', ['category_count'=>$category_count,'admin'=>$admin], compact('category_type'));
    }

    public function update_sub_category(Request $request){


        

        
     $this->validate($request,[
     
        'sub_category'=>'required',
        'category_type'=>'required',
        'priority' => 'required',
        'sub_category_description'=>'required',
        'sub_category_icon'=>'required',
        'premium'=>'required',

   
       ]);



     
       $sub_category_type =  New Sub_category; 

  


        if($request->hasFile('sub_category_icon')){
    
               $sub_category_icon = $request->file('sub_category_icon')->getClientOriginalName();
            $request->file('sub_category_icon')->move(public_path('upload_images/sub_category_icon'), $sub_category_icon);
        
            }

                  if($request->hasFile('sub_category_icon')){
                    $sub_category_type->sub_category_icon=$sub_category_icon;
            }
          
      
          
       
       $sub_category_type->sub_category = $request->sub_category;
       $sub_category_type->category_type = $request->category_type;
          $sub_category_type->priority = $request->priority;
          $sub_category_type->sub_category_description = $request->sub_category_description;
          $sub_category_type->premium = 1;

          $sub_category_type->save();

          return redirect()->back()->with('SuccessMsg','Sub Category Type Successfully updated' );


    }


    public function view_sub_category(){

        $sub_category =  Sub_category::all();


        $data = Category::join('sub_categories', 'sub_categories.category_type', '=', 'categories.id')

        ->get();

        $admin = User::find(1);

        return view('Admin.Designs.view_sub_category',['admin'=>$admin] ,compact('data'));
    }


    public function delete_sub_category($id){

        Sub_category::find($id)->delete();
        return redirect()->back()->with('SuccessMsg','Sub Category deleted Successfully' );
        
        
    }

    public function edit_sub_category($id){

        $sub_category = Sub_category::find($id);
      $category_type = Category::all();

      $admin = User::find(1);

        return view('Admin.Designs.edit_sub_category', ['sub_category' => $sub_category,'admin' => $admin], compact('category_type'));


    }

    public function update_edited_sub_category(Request $request, $id){

        
        
     $this->validate($request,[
     
        'sub_category'=>'required',
        'category_type'=>'required',
        'priority' => 'required',
        'sub_category_description'=>'required',
        'sub_category_icon'=>'required',
        'premium'=>'required',

   
       ]);



     
       $sub_category_type =  Sub_category::find($id);

       if($request->hasFile('sub_category_icon')){
    
        $sub_category_icon = $request->file('sub_category_icon')->getClientOriginalName();
        $request->file('sub_category_icon')->move(public_path('upload_images/sub_category_icon'), $sub_category_icon);
    
        }

              if($request->hasFile('sub_category_icon')){
                $sub_category_type->sub_category_icon=$sub_category_icon;
        }
      
       
          
       
       $sub_category_type->sub_category = $request->sub_category;
       $sub_category_type->category_type = $request->category_type;
          $sub_category_type->priority = $request->priority;
          $sub_category_type->sub_category_icon = $request->sub_category_icon;
          $sub_category_type->sub_category_description = $request->sub_category_description;
          $sub_category_type->premium = $request->premium;


          $sub_category_type->save();

          return redirect(route('view_sub_category'))->with('SuccessMsg','Sub Category Type Successfully updated' );
}


    




public function add_business_admin(Request $request, $id){

    $sub_category = $request->business_category;

    $sub_category_dtail = Sub_category::where('sub_category', $sub_category)->select('category_type')->get()->toArray();
    
    $sub_category_detail = Category::where('id', $sub_category_dtail[0])->select('category')->get()->toArray();

    // print_r ($sub_category_detail[0]['category']);
    // die();

    $vendor = Vendor::find($id);
  
    $business =New Business;    

    if($request->hasFile('upload_banner')){
    
        $upload_banner = $request->file('upload_banner')->getClientOriginalName();
        $request->file('upload_banner')->storeAs('public/business_image/',$upload_banner);
     
    

    
        }

              if($request->hasFile('upload_banner')){
                $business->business_image=$upload_banner;
        }



    if($request->hasFile('business_document')){
    
        $document = $request->file('business_document')->getClientOriginalName();
        $request->file('business_document')->storeAs('public/business_document/',$document);
     
    

    
        }

              if($request->hasFile('business_document')){
                $business->business_document=$document;
        }


        if($request->hasFile('business_brochure')){
    
            $brochure = $request->file('business_brochure')->getClientOriginalName();
            $request->file('business_brochure')->storeAs('public/business_document/',$brochure);
        
            }
    
                  if($request->hasFile('business_brochure')){
                    $business->business_brochure=$brochure;
            }


    $business->business_title = $request->business_title;
    $business->business_category = $request->business_category;
    $business->category = $sub_category_detail[0]['category'];
    $business->business_description = $request->business_description;

    $business->country = $request->country;
    $business->city = $request->province;
    $business->location = $request->area;
    $business->lat = $request->lat;
    $business->lang = $request->lang;
    $business->status = $request->status;

    $business->facebook = $request->facebook;
    $business->linkedin = $request->linkedin;
    $business->twitter = $request->twitter;
    $business->instagram = $request->instagram;

    $business->monday_from = $request->monday_to;
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
  
    $business->website = $request->website;
    $business->email = $request->email;
    $business->fax_no = $request->fax_no;
    $business->mobile_no = $request->mobile_no;
    
    $vendor->businesses()->save($business);     
    
    



        return redirect(route('add_product_image', $business->id))->with('SuccessMsg','Business Successfully updated');
    
    
    }
// update bu information
    public function update_business_admin(Request $request,$id){


        $sub_category = $request->business_category;

        $sub_category_dtail = Sub_category::where('sub_category', $sub_category)->select('category_type')->get()->toArray();
        
        $sub_category_detail = Category::where('id', $sub_category_dtail[0])->select('category')->get()->toArray();

          
    $business = Business::find($id);    

    
    if($request->hasFile('business_document')){
    
        $document = $request->file('business_document')->getClientOriginalName();
        $request->file('business_document')->storeAs('public/business_document/',$document);
    
        }

              if($request->hasFile('business_document')){
                $business->business_document=$document;
        }


        if($request->hasFile('business_brochure')){
    
            $brochure = $request->file('business_brochure')->getClientOriginalName();
            $request->file('business_brochure')->storeAs('public/business_document/',$brochure);
        
            }
    
                  if($request->hasFile('business_brochure')){
                    $business->business_brochure=$brochure;
            }


    $business->business_title = $request->business_title;
    $business->business_category = $request->business_category;
    $business->category = $sub_category_detail[0]['category'];

    $business->business_description = $request->business_description;

    $business->country = $request->country;
    $business->city = $request->province;
    $business->location = $request->area;
    $business->lat = $request->lat;
    $business->lang = $request->lang;

    $business->facebook = $request->facebook;
    $business->linkedin = $request->linkedin;
    $business->twitter = $request->twitter;
    $business->instagram = $request->instagram;
    $business->status = $request->status;


    $business->monday_from = $request->monday_to;
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
  
    $business->website = $request->website;
    $business->email = $request->email;
    $business->fax_no = $request->fax_no;
    $business->mobile_no = $request->mobile_no;
    $business->save();        



        return redirect()->back()->with('SuccessMsg','Business Successfully updated');
        
    }





public function add_product_admin(Request $request, $id){




    

            $business_check =DB::table('businesses')->latest('id')->first();

            $business = Business::find($business_check->id);

            $product =New Product;   

            $product->product_name = $request->product_name;
            $product->product_price_from = $request->product_price_from;
            $product->product_price_to = $request->product_price_to;
            $product->product_category = $request->product_category;
            $product->product_description = $request->product_description;


           
            $business->products()->save($product);


            return redirect()->back()->with('SuccessMsg','Product Successfully updated');
    
    
    
}

public function add_more_product_admin(Request $request, $id){


    $business = Business::find($id);

    $product =New Product;   

    $product->product_name = $request->product_name;
    $product->product_price_from = $request->product_price_from;
    $product->product_price_to = $request->product_price_to;
    $product->product_category = $request->product_category;
    $product->product_description = $request->product_description;


   
    $business->products()->save($product);


    return redirect()->back()->with('SuccessMsg','Product Successfully updated');



}

public function update_product_admin(Request $request,$id){

    



    $product = Product::find($id);   

    $product->product_name = $request->product_name;
    $product->product_price_from = $request->product_price_from;
    $product->product_price_to = $request->product_price_to;
    $product->product_category = $request->product_category;
    $product->product_description = $request->product_description;


   
    $product->save();


    return redirect()->back()->with('SuccessMsg','Product Successfully updated');

}


public function delete_product($id){
    Product::find($id)->delete();
    return redirect()->back()->with('SuccessMsg','Product deleted Successfully' );
    

}

public function delete_image($id){
    Galllery_image::find($id)->delete();
    return redirect()->back()->with('SuccessMsg','Product Image deleted Successfully' );
    

}

public function add_image_admin(Request $request, $id){


    $business_check =DB::table('businesses')->latest('id')->first();

    $business = Business::find($business_check->id);
    $gallery_image_add = New Galllery_image;

    if($request->hasFile('gallery_image')){
    
          
        $gallery_image = $request->file('gallery_image')->getClientOriginalName();
        $request->file('gallery_image')->storeAs('public/product_image/',$gallery_image);
    
        }

              if($request->hasFile('gallery_image')){
                $gallery_image_add->gallery_image=$gallery_image;
        }
      
           $business->galllery_images()->save($gallery_image_add);

           return redirect()->back()->with('SuccessMsg','Image Successfully updated');
    

}


// update product image admin
public function update_image_admin(Request $request, $id){
    


    $gallery_image_add =  Galllery_image::find($id);

    if($request->hasFile('gallery_image')){
    
          
        $gallery_image = $request->file('gallery_image')->getClientOriginalName();
        $request->file('gallery_image')->storeAs('public/product_image/',$gallery_image);
    
        }

              if($request->hasFile('gallery_image')){
                $gallery_image_add->gallery_image=$gallery_image;
        }
      
           $gallery_image_add->save();

           return redirect()->back()->with('SuccessMsg','Image Successfully updated');
    

}


// update more product image admin
public function update_more_image_admin(Request $request, $id){

    $business = Business::find($id);

    $gallery_image_add = new  Galllery_image;

    if($request->hasFile('gallery_image')){
    
          
        $gallery_image = $request->file('gallery_image')->getClientOriginalName();
        $request->file('gallery_image')->storeAs('public/product_image/',$gallery_image);
    
        }

              if($request->hasFile('gallery_image')){
                $gallery_image_add->gallery_image=$gallery_image;
        }
      
           $business->galllery_images()->save($gallery_image_add);

           return redirect()->back()->with('SuccessMsg','Image Successfully updated');
    

}

public function delete_business($id){

    Business::find($id)->delete();
    return redirect()->back()->with('SuccessMsg','Business deleted Successfully' );
}


public function edit_company_profile(Request $request, $id){

    $business_id = Business::find($id);

    $vendor_id = $business_id->vendor_id;

    $vendor_account = Vendor::find($vendor_id);

    $product_detail = Product::where('business_id', '=', $id)->get();
    $image_detail = Galllery_image::where('business_id', '=', $id)->get();

    $product_count = Product::where('business_id', '=', $id)->count();
    $image_count = Galllery_image::where('business_id', '=', $id)->count();


    foreach ($vendor_account->packages as $key => $value) {


        $current_date = Carbon::now();

        if(($value->pivot->Approval == '1') && ($value->pivot->ends_date >= $current_date)){

            $plan_id = $value->pivot->package_id;

            $package  = Package::find($plan_id);



        }
        
        $business = $package->business_listing;
        $product = $package->product_listing;
        $gallery_image = $package->gallery_image;
        $contact = $package->contact;
        $location = $package->location;
        $social_media = $package->social_media;
    }



    $sub_category_type =   Sub_category::all(); 

    $category_type =   Sub_category::all(); 


    // //   check vendor item
    // $business_check = Business::find('business_id');


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


    return view('Admin.Vendor.edit_company_profile',compact('sub_category_type', 'product_detail', 'image_detail'),[ 'image_count'=>$image_count,'product_count'=>$product_count, 'business_id'=>$business_id, 'product'=>$product ,'gallery_image' => $gallery_image,'contact'=>$contact,'location'=>$location ,'social_media'=>$social_media,'image_count' => $image_count, 'product_count'=>$product_count,'vendor_account'=>$vendor_account,'admin'=>$admin]);

}




// footer detail


public function about_us(){

    $about_count = DB::table('about_uses')->count();
    $admin = User::find(1);


    return view('Admin.footer_dtail.about_us', ['about_count'=>$about_count,'admin'=>$admin]);
}

public function update_about_us(Request $request){
    $this->validate($request,[
     
    
        'title' => 'required',
        'title_description'=>'required',
   
       ]);
     
       $about = New About_us;

       $about->title = $request->title;
       $about->title_description = $request->title_description;

       $about->save();

       return redirect()->back()->with('SuccessMsg','Details Successfully updated');

   

}
public function faq(){

    $admin = User::find(1);


    return view('Admin.footer_dtail.faq',['admin'=>$admin]);
}
public function terms_of_policy(){
    $admin = User::find(1);

    return view('Admin.footer_dtail.terms_of_policy',['admin'=>$admin]);
}
public function privacy_policy(){
    $admin = User::find(1);

    return view('Admin.footer_dtail.privacy_policy',['admin'=>$admin]);
}
public function content_us()
{
    //


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
        //  print_r($business_listing); die();

        $plan_detail = Package::find($plan_id);

        $end_date = $value->ends_date;         
}
          //check  business_listing
          $check_b['business_listing']  = $plan_detail->bussiness_listing;
          $check_b['vendor_bl']  = Business::where('vendor_id',$id)->count();


}else{
  //check  business_listing
  $check_b['business_listing']  = 1;
  $check_b['vendor_bl']  = 1;

}
         
         // print_r($business_listing); die();
        //  if($vendor_bl <= $business_listing){
        //      $add_business = true;
        //  }
        //  else{
        //      $add_business = false;
        //  }
   
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
    // $data['business'] = Business::get()->toArray();
    $business_data = Business::join('vendors','vendors.id','=','businesses.vendor_id' )->get()->toArray();
    // print_r($business_data); die();
    $data['add_image'] = Add_image::get()->toArray();
    $data['banner_image'] = Bg_image::find(1);
    $data['add_image_next'] = Add_image_next::get()->toArray();
    $data['category'] = $category;
    $data['subCategory'] = $subCategory;
    $data['active_Category'] = $category[0]['id'];
    $data['all_subCategory'] = $categoryArray;

    // print_r($data['add_image']);die();
    $category = Category::get();
    $subcategory = Sub_category::get();
    $data['banner_image'] = Bg_image::find(1);
    $data['category'] = $category;
    $data['subCategory'] = $subcategory;
    return view('contact_us',compact('data'));
}
public function addContact_us(Request $request)
{
    $contact = new Contact_us;
    $category = Category::get();
    $subcategory = Sub_category::get();
    $data['banner_image'] = Bg_image::find(1);
    $data['category'] = $category;
    $data['subCategory'] = $subcategory;
     $contact->name = $request->contact_name;
     $contact->email = $request->contact_email;
     $contact->subject = $request->contact_subject;
     $contact->message = $request->contact_message;
     $contact->save();
     return view('contact_us',compact('data'));

}
public function faq_page()
{

    
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
        //  print_r($business_listing); die();

        $plan_detail = Package::find($plan_id);

        $end_date = $value->ends_date;         
}
          //check  business_listing
          $check_b['business_listing']  = $plan_detail->bussiness_listing;
          $check_b['vendor_bl']  = Business::where('vendor_id',$id)->count();


}else{
  //check  business_listing
  $check_b['business_listing']  = 1;
  $check_b['vendor_bl']  = 1;

}
         
         // print_r($business_listing); die();
        //  if($vendor_bl <= $business_listing){
        //      $add_business = true;
        //  }
        //  else{
        //      $add_business = false;
        //  }
   
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
    // $data['business'] = Business::get()->toArray();
    $business_data = Business::join('vendors','vendors.id','=','businesses.vendor_id' )->get()->toArray();
    // print_r($business_data); die();
    $data['add_image'] = Add_image::get()->toArray();
    $data['banner_image'] = Bg_image::find(1);
    $data['add_image_next'] = Add_image_next::get()->toArray();
    $data['category'] = $category;
    $data['subCategory'] = $subCategory;
    $data['active_Category'] = $category[0]['id'];
    $data['all_subCategory'] = $categoryArray;
    // print_r("sss");die();
    $contact = new Faq;
    $faq= Faq::first()->toArray();
    // print_r($faq);die();
    $category = Category::get();
    $subcategory = Sub_category::get();
    $data['banner_image'] = Bg_image::find(1);
    $data['category'] = $category;
    $data['subCategory'] = $subcategory;
    $data['faq'] = $faq;
    return view('faq',compact('data'));
}
public function addFAQ_us(Request $request)
{
     $contact = new Contact_us;
    $category = Category::get();
    $subcategory = Sub_category::get();
    $data['banner_image'] = Bg_image::find(1);
    $data['category'] = $category;
    $data['subCategory'] = $subcategory;
     $contact->name = $request->lorem_ipsum1;
     $contact->email = $request->lorem_ipsum2;
     $contact->subject = $request->lorem_ipsum3;
     $contact->message = $request->lorem_ipsum4;
     $contact->save();
     return view('contact_us',compact('data'));
}
public function about_usPage()
{

    
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
        //  print_r($business_listing); die();

        $plan = Package::find($plan_id);

        $end_date = $value->ends_date;         
}
    

if(sizeof($package_vendor)){
    $business_listing = $plan->bussiness_listing;
    $vendor_bl = Business::where('vendor_id',$id)->count();

  

  }
  else{
  
  $business_listing  = 1;
  $vendor_bl  = 1;

       
  }      


}else{
  //check  business_listing
  $check_b['business_listing']  = 1;
  $check_b['vendor_bl']  = 1;

}
         

   // print_r($vendor_name);die();
    $subCategory = Sub_category::get();
    // print_r($subCategory);die();
    foreach($category as $categoryEach){
        $categoryArray[$i]['data'] = $categoryEach->category;
        $sub = Sub_category::where('category_type',$categoryEach->id)->get()->toArray();
        $categoryArray[$i]['sub_category'] = $sub;
        $i++;
    }


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
    // $data['business'] = Business::get()->toArray();
    $business_data = Business::join('vendors','vendors.id','=','businesses.vendor_id' )->get()->toArray();
    // print_r($business_data); die();
    $data['add_image'] = Add_image::get()->toArray();
    $data['banner_image'] = Bg_image::find(1);
    $data['add_image_next'] = Add_image_next::get()->toArray();
    $data['category'] = $category;
    $data['subCategory'] = $subCategory;
    $data['active_Category'] = $category[0]['id'];
    $data['all_subCategory'] = $categoryArray;
    // $contact = new Faq;
    $about_us= About_us::first()->toArray();
    // print_r($about_us);die();
    $category = Category::get();
    $subcategory = Sub_category::get();
    $data['banner_image'] = Bg_image::find(1);
    $data['category'] = $category;
    $data['subCategory'] = $subcategory;
    $data['about_us'] = $about_us;
    return view('about_us',compact('data'));
}
public function termsAndConditions($value='')
{

    
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
        //  print_r($business_listing); die();

        $plan_detail = Package::find($plan_id);

        $end_date = $value->ends_date;         
}
          //check  business_listing
          $check_b['business_listing']  = $plan_detail->bussiness_listing;
          $check_b['vendor_bl']  = Business::where('vendor_id',$id)->count();


}else{
  //check  business_listing
  $check_b['business_listing']  = 1;
  $check_b['vendor_bl']  = 1;

}
         
         // print_r($business_listing); die();
        //  if($vendor_bl <= $business_listing){
        //      $add_business = true;
        //  }
        //  else{
        //      $add_business = false;
        //  }
   
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
    // $data['business'] = Business::get()->toArray();
    $business_data = Business::join('vendors','vendors.id','=','businesses.vendor_id' )->get()->toArray();
    // print_r($business_data); die();
    $data['add_image'] = Add_image::get()->toArray();
    $data['banner_image'] = Bg_image::find(1);
    $data['add_image_next'] = Add_image_next::get()->toArray();
    $data['category'] = $category;
    $data['subCategory'] = $subCategory;
    $data['active_Category'] = $category[0]['id'];
    $data['all_subCategory'] = $categoryArray;
    // $contact = new Faq;
    $terms= Terms_of_policy::first()->toArray();
    // print_r($terms);die();
    $category = Category::get();
    $subcategory = Sub_category::get();
    $data['banner_image'] = Bg_image::find(1);
    $data['category'] = $category;
    $data['subCategory'] = $subcategory;
    $data['terms'] = $terms;
    return view('termsAndConditions',compact('data'));
}
public function privacyPolicy($value='')
{


    
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
        //  print_r($business_listing); die();

        $plan_detail = Package::find($plan_id);

        $end_date = $value->ends_date;         
}
          //check  business_listing
          $check_b['business_listing']  = $plan_detail->bussiness_listing;
          $check_b['vendor_bl']  = Business::where('vendor_id',$id)->count();


}else{
  //check  business_listing
  $check_b['business_listing']  = 1;
  $check_b['vendor_bl']  = 1;

}
         
         // print_r($business_listing); die();
        //  if($vendor_bl <= $business_listing){
        //      $add_business = true;
        //  }
        //  else{
        //      $add_business = false;
        //  }
   
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
    // $data['business'] = Business::get()->toArray();
    $business_data = Business::join('vendors','vendors.id','=','businesses.vendor_id' )->get()->toArray();
    // print_r($business_data); die();
    $data['add_image'] = Add_image::get()->toArray();
    $data['banner_image'] = Bg_image::find(1);
    $data['add_image_next'] = Add_image_next::get()->toArray();
    $data['category'] = $category;
    $data['subCategory'] = $subCategory;
    $data['active_Category'] = $category[0]['id'];
    $data['all_subCategory'] = $categoryArray;
    // $contact = new Faq;
    $policy= Privacy_policy::first()->toArray();
    // print_r($policy);die();
    $category = Category::get();
    $subcategory = Sub_category::get();
    $data['banner_image'] = Bg_image::find(1);
    $data['category'] = $category;
    $data['subCategory'] = $subcategory;
    $data['policy'] = $policy;
    return view('privacyPolicy',compact('data'));
}

}