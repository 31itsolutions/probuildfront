<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Buisness</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('assets/fonts/material-icon/css/material-design-iconic-font.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">

    <!--bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    
    <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <link href="{{ asset('assets/css/drag_drop_image.css') }}" rel="stylesheet">

    <!--fontawesome-->
    <link href="{{ asset('assets/css/company_profile.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/vendor.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('assets/css/fontawesome.min.css') }}" rel="stylesheet"> -->

    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    {{-- CSS assets in head section --}}

    <style>
        .dropbtn {
          background: none !important;
          /*color: white;*/
          /*padding: 16px;*/
          font-size: 16px;
          border: none;
        }

        .dropdown {
          position: relative;
          display: inline-block;
        }

        .dropdown-content {
          display: none;
          position: absolute;
          background-color: none !important;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }

        .dropdown-content li a {
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          border-bottom: none;
        }

        .dropdown-content  li{
            border-bottom: 1px solid black;
        }

        .dropdown-content  li a:hover {background-color: #ddd;}

        .dropdown:hover .dropdown-content {display: block;}

        .dropdown:hover .dropbtn {background-color: #3e8e41;}

        .dropzone .dz-preview.dz-error .dz-error-message{
            display: none !important;
        }
        .dropzone .dz-preview .dz-image{
            width: 55px !important;
            height: 55px !important;
        }
 
        .fb9 {
      border: 1px solid #3366FF;
      background-color: #B3C6FF;
      width:150px;
      height:30px;
    }

</style>

<!-- <style type="text/css">
    input#upload_brochure {
  display: inline-block;
  width: 100%;
  padding: 120px 0 0 0;
  height: 100px;
  overflow: hidden;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  background: white;
  border-radius: 20px;
  background-size: 60px 60px;
}
</style> -->
<style type="text/css">
    input[name="upload_brochure"] { 
  z-index: -1;
  position: absolute;
  opacity: 0;
}
input[name="document_img"] { 
  z-index: -1;
  position: absolute;
  opacity: 0;
}
input[name="upload_banner"] { 
  z-index: -1;
  position: absolute;
  opacity: 0;
}

input:focus + label {
  outline: 2px solid;
}
</style>


  
</head>

<body style="background: #E5E5E5;">

        {{-- <div class="total">
            <div class="main" style="
                  background-image:url({{env('IMG_URL').'upload_images/banner_image/'.$data['banner_image']['home_image']}});    background-repeat: no-repeat;
                    background-size: cover; background-position: center center;left: 0;right: 0;color: #fff;  height: 335px; width:100%;">
                <div class="header">
                    <a href="{{ route('index') }}">
                    <img class="logo-img" src="{{ asset('assets/images/logo.png') }}" alt="">
                    </a>
                    <div class="right-div" style="display: flex;">
                      
                        <div class="dropdown">
                          <button class="dropbtn">

                            @if (empty($vendor->profile_image))
                                <img class="header-img" src="{{ asset('assets/images/default.png') }}" alt=""
                                    onclick="myFunc1()" onkeyup="filterFunc1()" id="myInt1">
                            @else
                                <img class="header-img"
                                    src="{{ asset('storage/vendor_profile/' . $vendor->profile_image) }}" alt=""
                                    onclick="myFunc1()" onkeyup="filterFunc1()" id="myInt1">
                            @endif

                          </button>
                          <div class="dropdown-content" style="margin-left: -120px">
                            
                                <li><a href="{{ route('vendor') }}">Dashboard</a></li>
                                <li><a href="{{ route('vendor_profile') }}">Profile</a></li>
                                <li><a href="{{ route('tendor_request',$vendor) }}">Tender</a></li>
                                <li><a href="Request_call.html">Request call</a></li>
                                <li>
                                    <a href="{{ route('vendor.logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"
                                            style="width: 100px; color:black; margin-left:5px;">Logout</a>

                                        <form id="logout-form" action="{{ route('vendor.logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                </li>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 add-b">
                            <h4 style="font-size: 36px;">Add Business</h4>
                            <p style="font-size: 18px;color: #fff">Submit your Business and Grow</p>
                        </div>

                    </div>
                </div>
            </div>
        </div> --}}




        <div class="container-fluid bg-no-overlay"   style="background-image:url({{env('IMG_URL').'upload_images/banner_image/'.$data['banner_image']['home_image']}});    background-repeat: no-repeat;
        background-size: cover; background-position: center center;    left: 0;right: 0;color: #fff;  height: 471px; width:100%;">
    
    
    
    
    <div class = "row">
    <div class ="col-md-12">
    
    <div class = "logo"> 
      <a href="{{ route('index') }}">
          <img class="logo-img" src="{{ asset('assets/images/logo.png') }}" alt="">
    </a>
    </div>
    
    
    
    
    <div class = "profile_menu d-flex">
       <li class="nav-item dropdown dmenu">
                <a class="nav-link" href="javascript:void(0)" id="navbardrop" data-toggle="dropdown">
         @if($vendor->profile_image == null)
             <img class="logo-img" src="{{ asset('assets/images/default.png') }}" alt="">  
         @else
             <img class="logo-img" src="{{ asset('upload_images/vendor_profile/'.$vendor->profile_image) }}" alt="">           
         @endif
              </a>
             
                <div class="dropdown-menu menu">   
                   {{-- <a class="dropdown-item" href="#">Dashboard</a> --}}
                  <a class="dropdown-item" href="{{route('vendor')}}">My Profile</a>
    
    
                  <a class="dropdown-item" href="{{route('tendor_request',$vendor->id)}}">Tender Board</a>
    
                    <a class="dropdown-item" href="{{route('request_call_vendor',$vendor->id)}}">Request Call</a>
                    <a class="dropdown-item" href="{{route('request_for_q',$vendor->id)}}">RFQ</a>
    
    
                      <a class = "dropdown-item" href="{{ route('vendor.logout') }}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();"  >Logout</a>
    
                                  <form id="logout-form" action="{{ route('vendor.logout') }}" method="POST" style="display: none;">
                                   @csrf
                                     </form>
    
    
                         
    
    
    
                </div>
              </li>
    
{{--     
              <li class="add_buisness">
    
              @if($vendor_bl >= $business_listing) 
                <a class="add_business_logined" href="{{route('vendor_package_monthly')}}">Add Buisness</a>
                @else
                <a class="add_business_logined" href="{{route('add_business',$vendor->id)}}">Add Buisness</a>
    
                @endif 
    
              </li> --}}
            
    
    
              </div>
    </div>
    </div>
    
    <div class = "row">
    
    <div class = "col-md-12">
    
    <div class = "top_left_logo ">
    <div class = "logo_bottom">
    @if($vendor->profile_image == null)
     <img class="logo-bottom" src="{{ asset('assets/images/default.png') }}" alt="">
    @else
     <img class="logo-bottom" src="{{ asset('upload_images/vendor_profile/'.$vendor->profile_image) }}" alt="">
    @endif
    </div>
    
    <div class = "logo_info">
    
    
    
    <div class = "logo_name ">
    <h1>{{$vendor->name}} {{$vendor->lname}}</h1>
    </div>
    
    
    
    
    </div>
    </div>
    
    
    
    </div>
    
    
    </div>
    </div>
    </div>
        <div class="container label_col">
            <form action="{{ route('update_business') }}"  method="POST" enctype="multipart/form-data">
                @csrf

                <div class="Total_Con b_input">
                    <div class="">
                        <div class="row">
                            <div class="col-sm-12 ">
                                <div class="mess card">
                                    <div class="privacy">
                                        <h2>General Information</h2>
                                    </div>
                                    <div class="container image_top">
                                        <div class="box">
                                            <label>Buisness Title*</label>
                                            <input type="text" style="background: rgba(215, 215, 215, 0.23);" name="business_title"  class="form-control"
                                                placeholder="Title " required>


                                            <div class="">
                                                    <label>Category*</label>

                                                    <select name="
                                                business_category" style="background: rgba(215, 215, 215, 0.23);" class="form-control "
                                                id="category"  required>


                                                <option >Choose category</option>
                                                @foreach ($category as $key => $cat)
                                                    <option value="{{ $cat['id'] }}">
                                                        {{ $cat['category'] }}
                                                    </option>
                                                @endforeach
                                                </select>

                                            </div>
                                            <div>
                                                <label class="mt-4">Sub Category*</label>

                                                <select name="business_SubCategory" style="background: rgba(215, 215, 215, 0.23);" class="form-control "
                                                    id="subcategory" required>

                                                </select>

                                            </div>


                                            <div class="test mt-4">
                                                <label>Description</label>
                                                <textarea class="form-control" placeholder="Business Description" maxlength="300"
                                                    style="background: rgba(215, 215, 215, 0.23);height:200px;width: 100%;" name="business_description" required></textarea>
                                            </div>


                                            <div class="mt-4 nopadding">
                                                <div class="form-group">
                                                    <label style="color:#495E96;font-size: 15px;">Business logo</label>
                                                    <input type="file" name="upload_logo" class=""
                                                        id="" placeholder="image" required >
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Total_Con bg_light">
                        <div class="row mt-3">
                            <div class="col-md-12 banner_edit">
                                <div class="privacy ">
                                    <h2>Upload Image</h2>
                                </div>
                                <div class="mx-4 mb-4 image_top">



                                <p class="drop_image_p" style="color:#495E96;font-size: 15px;" >Upload business banner image</p>

                                   

                                    <span class="dragBox banner_upload" style="background-color: #f6f6f6 !important;">
                                        <div class="upload_img upload_ban_image">
                                        <img src="{{ asset('assets/images/bi_upload.png') }}" style="width: 46px;margin: auto;">

                                        </div>
                                        <p style="color: #495E96 !important; font-weight:400 !important;" class="text-muted">Drop image here to upload </p>
                                            <input type="file" name = "upload_banner" onChange="dragNdrop(event)"  ondragover="drag()" ondrop="drop()" id="uploadFile"  required/>
                                      </span>

                                      <div id="preview_banner"></div>


                                      </div>
                                      
                                        </div>
                                        <p class="banner_file_p" style="color: #6c757d; font-size: 11px;">Maximum file size:2 MB</p>

                                         {{-- <div class = "col-sm-4 mt-1 mb-1">
                  
                                       <div  id="preview"></div>
                  
                                         </div> --}}

                                        </div>


                             
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div id="dynamicImages ">
                                            </div>
                                            
                                            <div id="app" class="multi_r">
                                                <p class="drop_image_p" style="color:#495E96;font-size: 15px;" >Upload gallery images</p>

                                                <div id="dropzoneId" class="dropzone" style="background-color: #f6f6f6 !important;">
                                                    <div class="dz-default dz-message">
                                                        <div class="row upload_dd">
                                                            <img src="{{ asset('assets/images/bi_upload.png') }}" style="width: 46px;margin: auto;">
                                                        </div>    

                                                        <p style="color: #495E96 !important;" class="text-muted drag_dd_p">Drop image here to upload <br>
                                                        </p>
                                                        
                                                        <!-- <img src="{{ asset('assets/images/Vector2.png') }}" style="width: 10px;"> -->
                                                    </div>
                                                </div>
                                                <input type="hidden" name="imageNames[]" id="imageNames">
                                            </div>
                                            <p class="drop_file_p" style="color: #6c757d; font-size: 11px;">Maximum file size:2 MB | Max Files {{ $data['package']['gallery_image'] }}</p>
                                            
                                        </div>
                                        <div class="col-md-6">

                                            <div class="multi_l">

                                            <p class="brochure_p" style="color:#495E96;font-size: 15px;">Upload business brochure </p>
                                         
                                            
                                    <span class="dragBox  bro_upload " style="background-color: #f6f6f6 !important;">
                                        <div class="upload_img" >
                                        <img src="{{ asset('assets/images/bi_upload.png') }}" style="width: 46px;margin: auto;">
                                        </div>

                                        <p style="color: #495E96 !important;" class="text-muted">Drop image here to upload 
                                        </p>
                                        
                                        
                                        <input type="file" id="get_brochure" name = "upload_brochure" onChange="dragMdrop(event)" required  ondragover="drag()" ondrop="drop()" id="uploadMFile"  />
                                     

                                      <div id="preview_brochure"></div>

                                    </span>


                                            <p class="file_mb_broch" style="color: #6c757d; font-size: 11px;">Maximum file size:2 MB</p>

                                        
                            </div>
                        </div>

                        </div>

            
                </div>
                <div class="Total_Con bg_light" style="height: auto">
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="privacy ">
                                    <h2>Upload CR document</h2>
                                </div>
                                    <div class="doc_center text-center doc_width">
                                   
                                        
                                    <div class="dragBox doc_upload" style="background-color: #f6f6f6 !important;">
                                        <div class="upload_img upload_docu" >
                                            <img src="{{ asset('assets/images/bi_upload.png') }}" style="width: 46px;margin: auto;">
    
                                            </div>
                                            <p style="color: #495E96 !important; font-weight:400 !important;" class="text-muted">Drop image here to upload </p>
                                                <input type="file" name = "upload_document" id="get_document" onChange="dragLdrop(event)" required  ondragover="drag()" ondrop="drop()" id="uploadLFile"  />
                                      </div>

                                      <div id="preview_document"></div>

                                        <p class="doc_p" style="color: #495E96 !important;font-size: 11px !important;    margin-top: 5px !important;">Maximum file size:2 MB</p>

                                    </div>
                                    {{-- <br>
                                 
<div class="captcha">
	<div class="spinner">
		<label>
			<input type="checkbox" onclick="$(this).attr('disabled','disabled');">
			<span class="checkmark"><span>&nbsp;</span></span>
		</label>
	</div>
	<div class="text">
		I'm not a robot
	</div>
	<div class="logo_captacha">
		<img src="https://forum.nox.tv/core/index.php?media/9-recaptcha-png/"/>
		<p>reCAPTCHA</p>
		<small>Privacy - Terms</small>
	</div>
</div> --}}
                            </div>
                        </div>
                </div>
                <div id="multiple_imageUpload">  
                </div>

                <div class="Total_Con bg_light mt-3">
                        <div class="row mr-3">
                            <div class=" add_product panel-default col-sm-12">
                                <div class="privacy ">
                                    <h2>Add Product and Services </h2>
                                </div>
                                <div id="tab_logic" class="m-4">
                                   
                                    <div id="addr0" class="row">
                                        <div class="col-md-4 nopadding">
                                            <div class="form-group">
                                                <label style="color:#495E96;font-size: 15px;">Name</label>
                                                <input type="text" style="background: rgba(215, 215, 215, 0.23);" name="product_name[]" class="form-control"
                                                    placeholder="Name of your Product / Service " required>
                                            </div>
                                        </div>
                                        <div class="col-md-4 nopadding">
                                            <div class="form-group">
                                                <label style="color:#495E96;font-size: 15px;">Price From</label>
                                                <input type="text" style="background: rgba(215, 215, 215, 0.23);" name="product_price_from[]" class="form-control"
                                                    placeholder=" " required>
                                            </div>
                                        </div>
                                        <div class="col-md-4 nopadding">
                                            <div class="form-group">
                                                <label style="color:#495E96;font-size: 15px;">Price To</label>
                                                <input type="text" style="background: rgba(215, 215, 215, 0.23);" name="product_price_to[]" class="form-control"
                                                    placeholder=" " required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 nopadding">
                                            <div class="form-group">
                                                <label style="color:#495E96;font-size: 15px;">Description</label>
                                                <textarea name="product_description[]" class="form-control " maxlength="100"
                                                    placeholder="Buisness Description"
                                                    style="background: rgba(215, 215, 215, 0.23);height:200px;width: 100%;" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 nopadding">
                                            <div class="form-group">
                                                <label style="color:#495E96;font-size: 15px;">Product Image</label>
                                                
                                                <input type="file" name="product_image[]" class=""
                                                    id="product_image" placeholder="image" style="width: 300px;" required>
                                            </div>
                                        </div>

                                        <div id="education_fields">

                                        </div>


                                        <button type="button" id="add_row" value="add_row" style="border:none; font-weight:600; font-size:15px; color:black; background: #F4E059;border-radius: 5px;width: 120px;height: 49px;" onclick="education_fields({{ $data['package']['product_listing'] }});"
                                            class="btn btn-warning mt-3 mb-3 add_more">Add More</button>
                                        <div class="clear"></div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    
                </div>

                @if ($data['package']['location'] == 1)
                    
                <div class="Total_Con mt-3">
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="li card">
                                    <div class="privacy">
                                        <h2>Location Information</h2>
                                    </div>
                                    <div class="box">
                                        <div class="row mt-5">
                                            <div class="col-md-6 add_top">
                                                <div class="add_a_buisness_text4"><label style="color:#495E96;font-size: 15px;">Country</label>
                                                    <input type="text" style="background: rgba(215, 215, 215, 0.23);" class="form-control" placeholder="Country "
                                                        name="country">
                                                </div>
                                            </div>
                                            <div class="col-md-6 add_top">
                                                <div class="add_a_buisness_text5"><label style="color:#495E96;font-size: 15px;">City</label>
                                                    <input type="text" style="background: rgba(215, 215, 215, 0.23);" class="form-control" placeholder="City "
                                                        name="city">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row ">
                                            <div class="col-md-12 add_top">

                                                <div class="add_a_buisness_text6"><label style="color:#495E96;font-size: 15px;">Location</label>
                                                    <input type="text" style="background: rgba(215, 215, 215, 0.23);" class="form-control"
                                                        placeholder="Location" name="location">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-md-6 add_top">
                                                <div class="add_a_buisness_text4"><label style="color:#495E96;font-size: 15px;">Longitude</label>
                                                    <input type="text" style="background: rgba(215, 215, 215, 0.23);" class="form-control" placeholder="Longitude"
                                                        name="longitude">
                                                </div>
                                            </div>
                                            <div class="col-md-6 add_top">
                                                <div class="add_a_buisness_text5"><label style="color:#495E96;font-size: 15px;">Latitude</label>
                                                    <input type="text" style="background: rgba(215, 215, 215, 0.23);" class="form-control" placeholder="Latitude "
                                                        name="Latitude">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                {{-- <button type="button"
                                                    style="background: #F4E059;width: 137.82px;height: 39px;font-size:16px;margin-bottom: 16px;    border-radius: 5px;margin-left: 30px;">Select
                                                    Location</button> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                @endif

                <br>
                @if ($data['package']['contact'] == 1)

                <div class="Total_Con bu_info_dt">
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="card">
                                <div class="privacy">
                                    <h2>Buisness Information</h2>
                                </div>
                                <div class="box">
                                    <div class="row mt-5">
                                        <div class="col-md-6 add_top">
                                            <div class="add_a_buisness_text7"><label style="color:#495E96;font-size: 15px;">Email</label>
                                                <input type="text" style="background: rgba(215, 215, 215, 0.23);" class="form-control"
                                                    placeholder="buisness@gmail.com " name="email" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6 add_top">

                                            <div class="add_a_buisness_text8"><label style="color:#495E96;font-size: 15px;">Mobile</label>
                                                <input type="text" style="background: rgba(215, 215, 215, 0.23);" class="form-control" placeholder="9656788378"
                                                    name="mobile_no" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 add_top">

                                            <div class="add_a_buisness_text9"><label style="color:#495E96;font-size: 15px;">Website</label>
                                                <input type="text" style="background: rgba(215, 215, 215, 0.23);" class="form-control"
                                                    placeholder="https://yoursite.com/" name="website">
                                            </div>
                                        </div>

                                        <div class="col-md-6 add_top">
                                            <div class="add_a_buisness_text10"><label style="color:#495E96;font-size: 15px;">FAX NO</label>
                                                <input type="text" style="background: rgba(215, 215, 215, 0.23);" class="form-control" placeholder="256 254 7854"
                                                    name="fax_no">
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                <br>


                @if ($data['package']['social_media'] == 1)

                <div class="Total_Con">
                    <div class="row">
                        <div class="col-sm-12 ">
                            <div class="card">
                                <div class="privacy">
                                    <h2>Social Account</h2>
                                </div>
                                <div class="box">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="add_a_buisness_text7"><label>Facebook URL</label>
                                                <input type="text" style="background: rgba(215, 215, 215, 0.23);" class="form-control" placeholder=""
                                                    name="facebook">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="add_a_buisness_text8"><label>LinkedIn URL</label>
                                                <input type="text" style="background: rgba(215, 215, 215, 0.23);" class="form-control" placeholder=""
                                                    name="linkedin">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">

                                            <div class="add_a_buisness_text9"><label>Twitter URL</label>
                                                <input type="text" style="background: rgba(215, 215, 215, 0.23);" class="form-control" placeholder=""
                                                    name="twitter">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="add_a_buisness_text10"><label>Instagram URL</label>
                                                <input type="text" style="background: rgba(215, 215, 215, 0.23);" class="form-control" placeholder=""
                                                    name="instagram">
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                <br>
                <div class="Total_Con bu_hour">
                    <div class="row">
                        <div class="col-sm-12 ">
                            <div class="card">
                                <div class="privacy">
                                <h2>Business Hour</h2>
                                </div>
                                <div class="time_date">
                                    <div class="form-group row ">
                                        <label for="inputEmail3" class="col-md-2 col-form-label">Monday</label>
                                        <div class="col-md-5 ">
                                            <select id="inputState" style="background: rgba(215, 215, 215, 0.23);" name="monday_from" class="form-control time_t">
                                                <option selected>Opening Time</option>
                                                <option>Closed</option>
                                <option>1:00</option>
                                <option>2:00</option>
                                <option>3:00</option>
                                <option>4:00</option>
                                <option>5:00</option>
                                <option>6:00</option>
                                <option>7:00</option>
                                <option>8:00</option>
                                <option>9:00</option>
                                <option>10:00</option>
                                <option>11:00</option>
                                <option>12:00</option>
                                <option>13:00</option>
                                <option>14:00</option>
                                <option>15:00</option>
                                <option>16:00</option>
                                <option>17:00</option>
                                <option>18:00</option>
                                <option>19:00</option>
                                <option>20:00</option>
                                <option>21:00</option>
                                <option>22:00</option>
                                <option>23:00</option>
                                <option>24:00</option>
                                            </select>
                                        </div>
                                        <div class="col-md-5 to_date">
                                            <select id="inputState" style="background: rgba(215, 215, 215, 0.23);" name="monday_to" class="form-control time_t">
                                                <option selected>Closing Time</option>
                                               <option>1:00</option>
                                <option>2:00</option>
                                <option>3:00</option>
                                <option>4:00</option>
                                <option>5:00</option>
                                <option>6:00</option>
                                <option>7:00</option>
                                <option>8:00</option>
                                <option>9:00</option>
                                <option>10:00</option>
                                <option>11:00</option>
                                <option>12:00</option>
                                <option>13:00</option>
                                <option>14:00</option>
                                <option>15:00</option>
                                <option>16:00</option>
                                <option>17:00</option>
                                <option>18:00</option>
                                <option>19:00</option>
                                <option>20:00</option>
                                <option>21:00</option>
                                <option>22:00</option>
                                <option>23:00</option>
                                <option>24:00</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-md-2 col-form-label">Tuesday</label>
                                        <div class="col-md-5">
                                            <select id="inputState" style="background: rgba(215, 215, 215, 0.23);" name="tuesday_from" class="form-control time_t">
                                                <option selected>Opening Time</option>
                                                <option>Closed</option>
                                               <option>1:00</option>
                                <option>2:00</option>
                                <option>3:00</option>
                                <option>4:00</option>
                                <option>5:00</option>
                                <option>6:00</option>
                                <option>7:00</option>
                                <option>8:00</option>
                                <option>9:00</option>
                                <option>10:00</option>
                                <option>11:00</option>
                                <option>12:00</option>
                                <option>13:00</option>
                                <option>14:00</option>
                                <option>15:00</option>
                                <option>16:00</option>
                                <option>17:00</option>
                                <option>18:00</option>
                                <option>19:00</option>
                                <option>20:00</option>
                                <option>21:00</option>
                                <option>22:00</option>
                                <option>23:00</option>
                                <option>24:00</option>
                                            </select>
                                        </div>
                                        <div class="col-md-5 to_date">
                                            <select id="inputState" style="background: rgba(215, 215, 215, 0.23);" name="tuesday_to" class="form-control time_t">
                                                <option selected>Closing Time</option>
                                               <option>1:00</option>
                                <option>2:00</option>
                                <option>3:00</option>
                                <option>4:00</option>
                                <option>5:00</option>
                                <option>6:00</option>
                                <option>7:00</option>
                                <option>8:00</option>
                                <option>9:00</option>
                                <option>10:00</option>
                                <option>11:00</option>
                                <option>12:00</option>
                                <option>13:00</option>
                                <option>14:00</option>
                                <option>15:00</option>
                                <option>16:00</option>
                                <option>17:00</option>
                                <option>18:00</option>
                                <option>19:00</option>
                                <option>20:00</option>
                                <option>21:00</option>
                                <option>22:00</option>
                                <option>23:00</option>
                                <option>24:00</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-md-2 col-form-label">Wednesday</label>
                                        <div class="col-md-5">
                                            <select id="inputState" style="background: rgba(215, 215, 215, 0.23);" name="wednesday_from" class="form-control time_t">
                                                <option selected>Opening Time</option>
                                                <option>Closed</option>
                                               <option>1:00</option>
                                <option>2:00</option>
                                <option>3:00</option>
                                <option>4:00</option>
                                <option>5:00</option>
                                <option>6:00</option>
                                <option>7:00</option>
                                <option>8:00</option>
                                <option>9:00</option>
                                <option>10:00</option>
                                <option>11:00</option>
                                <option>12:00</option>
                                <option>13:00</option>
                                <option>14:00</option>
                                <option>15:00</option>
                                <option>16:00</option>
                                <option>17:00</option>
                                <option>18:00</option>
                                <option>19:00</option>
                                <option>20:00</option>
                                <option>21:00</option>
                                <option>22:00</option>
                                <option>23:00</option>
                                <option>24:00</option>
                                            </select>
                                        </div>
                                        <div class="col-md-5 to_date">
                                            <select id="inputState" style="background: rgba(215, 215, 215, 0.23);" name="wednesday_to" class="form-control time_t">
                                                <option selected>Closing Time</option>
                                               <option>1:00</option>
                                <option>2:00</option>
                                <option>3:00</option>
                                <option>4:00</option>
                                <option>5:00</option>
                                <option>6:00</option>
                                <option>7:00</option>
                                <option>8:00</option>
                                <option>9:00</option>
                                <option>10:00</option>
                                <option>11:00</option>
                                <option>12:00</option>
                                <option>13:00</option>
                                <option>14:00</option>
                                <option>15:00</option>
                                <option>16:00</option>
                                <option>17:00</option>
                                <option>18:00</option>
                                <option>19:00</option>
                                <option>20:00</option>
                                <option>21:00</option>
                                <option>22:00</option>
                                <option>23:00</option>
                                <option>24:00</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-md-2 col-form-label">Thursday</label>
                                        <div class="col-md-5">
                                            <select id="inputState" style="background: rgba(215, 215, 215, 0.23);" name="thursday_from" class="form-control time_t">
                                                <option selected>Opening Time</option>
                                                <option>Closed</option>
                                               <option>1:00</option>
                                <option>2:00</option>
                                <option>3:00</option>
                                <option>4:00</option>
                                <option>5:00</option>
                                <option>6:00</option>
                                <option>7:00</option>
                                <option>8:00</option>
                                <option>9:00</option>
                                <option>10:00</option>
                                <option>11:00</option>
                                <option>12:00</option>
                                <option>13:00</option>
                                <option>14:00</option>
                                <option>15:00</option>
                                <option>16:00</option>
                                <option>17:00</option>
                                <option>18:00</option>
                                <option>19:00</option>
                                <option>20:00</option>
                                <option>21:00</option>
                                <option>22:00</option>
                                <option>23:00</option>
                                <option>24:00</option>
                                            </select>
                                        </div>
                                        <div class="col-md-5 to_date">
                                            <select id="inputState" style="background: rgba(215, 215, 215, 0.23);" name="thursday_to" class="form-control time_t">
                                                <option selected>Closing Time</option>
                                               <option>1:00</option>
                                <option>2:00</option>
                                <option>3:00</option>
                                <option>4:00</option>
                                <option>5:00</option>
                                <option>6:00</option>
                                <option>7:00</option>
                                <option>8:00</option>
                                <option>9:00</option>
                                <option>10:00</option>
                                <option>11:00</option>
                                <option>12:00</option>
                                <option>13:00</option>
                                <option>14:00</option>
                                <option>15:00</option>
                                <option>16:00</option>
                                <option>17:00</option>
                                <option>18:00</option>
                                <option>19:00</option>
                                <option>20:00</option>
                                <option>21:00</option>
                                <option>22:00</option>
                                <option>23:00</option>
                                <option>24:00</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-md-2 col-form-label">Friday</label>
                                        <div class="col-md-5">
                                            <select id="inputState" style="background: rgba(215, 215, 215, 0.23);" name="friday_from" class="form-control time_t">
                                                <option selected>Opening Time</option>
                                                <option>Closed</option>
                                               <option>1:00</option>
                                <option>2:00</option>
                                <option>3:00</option>
                                <option>4:00</option>
                                <option>5:00</option>
                                <option>6:00</option>
                                <option>7:00</option>
                                <option>8:00</option>
                                <option>9:00</option>
                                <option>10:00</option>
                                <option>11:00</option>
                                <option>12:00</option>
                                <option>13:00</option>
                                <option>14:00</option>
                                <option>15:00</option>
                                <option>16:00</option>
                                <option>17:00</option>
                                <option>18:00</option>
                                <option>19:00</option>
                                <option>20:00</option>
                                <option>21:00</option>
                                <option>22:00</option>
                                <option>23:00</option>
                                <option>24:00</option>
                                            </select>
                                        </div>
                                        <div class="col-md-5 to_date">
                                            <select id="inputState" style="background: rgba(215, 215, 215, 0.23);" name="friday_to" class="form-control time_t">
                                                <option selected>Closing Time</option>
                                               <option>1:00</option>
                                <option>2:00</option>
                                <option>3:00</option>
                                <option>4:00</option>
                                <option>5:00</option>
                                <option>6:00</option>
                                <option>7:00</option>
                                <option>8:00</option>
                                <option>9:00</option>
                                <option>10:00</option>
                                <option>11:00</option>
                                <option>12:00</option>
                                <option>13:00</option>
                                <option>14:00</option>
                                <option>15:00</option>
                                <option>16:00</option>
                                <option>17:00</option>
                                <option>18:00</option>
                                <option>19:00</option>
                                <option>20:00</option>
                                <option>21:00</option>
                                <option>22:00</option>
                                <option>23:00</option>
                                <option>24:00</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-md-2 col-form-label">Saturday</label>
                                        <div class="col-md-5">
                                            <select id="inputState" style="background: rgba(215, 215, 215, 0.23);" name="saturday_from" class="form-control time_t">
                                                <option selected>Opening Time</option>
                                                <option>Closed</option>
                                               <option>1:00</option>
                                <option>2:00</option>
                                <option>3:00</option>
                                <option>4:00</option>
                                <option>5:00</option>
                                <option>6:00</option>
                                <option>7:00</option>
                                <option>8:00</option>
                                <option>9:00</option>
                                <option>10:00</option>
                                <option>11:00</option>
                                <option>12:00</option>
                                <option>13:00</option>
                                <option>14:00</option>
                                <option>15:00</option>
                                <option>16:00</option>
                                <option>17:00</option>
                                <option>18:00</option>
                                <option>19:00</option>
                                <option>20:00</option>
                                <option>21:00</option>
                                <option>22:00</option>
                                <option>23:00</option>
                                <option>24:00</option>
                                            </select>
                                        </div>
                                        <div class="col-md-5 to_date">
                                            <select id="inputState" style="background: rgba(215, 215, 215, 0.23);" name="saturday_to" class="form-control time_t">
                                                <option selected>Closing Time</option>
                                               <option>1:00</option>
                                <option>2:00</option>
                                <option>3:00</option>
                                <option>4:00</option>
                                <option>5:00</option>
                                <option>6:00</option>
                                <option>7:00</option>
                                <option>8:00</option>
                                <option>9:00</option>
                                <option>10:00</option>
                                <option>11:00</option>
                                <option>12:00</option>
                                <option>13:00</option>
                                <option>14:00</option>
                                <option>15:00</option>
                                <option>16:00</option>
                                <option>17:00</option>
                                <option>18:00</option>
                                <option>19:00</option>
                                <option>20:00</option>
                                <option>21:00</option>
                                <option>22:00</option>
                                <option>23:00</option>
                                <option>24:00</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-md-2 col-form-label">Sunday</label>
                                        <div class="col-md-5">
                                            <select id="inputState" style="background: rgba(215, 215, 215, 0.23);" name="sunday_from" class="form-control time_t">
                                                <option selected>Opening Time</option>
                                                <option>Closed</option>
                                               <option>1:00</option>
                                <option>2:00</option>
                                <option>3:00</option>
                                <option>4:00</option>
                                <option>5:00</option>
                                <option>6:00</option>
                                <option>7:00</option>
                                <option>8:00</option>
                                <option>9:00</option>
                                <option>10:00</option>
                                <option>11:00</option>
                                <option>12:00</option>
                                <option>13:00</option>
                                <option>14:00</option>
                                <option>15:00</option>
                                <option>16:00</option>
                                <option>17:00</option>
                                <option>18:00</option>
                                <option>19:00</option>
                                <option>20:00</option>
                                <option>21:00</option>
                                <option>22:00</option>
                                <option>23:00</option>
                                <option>24:00</option>
                                            </select>
                                        </div>
                                        <div class="col-md-5 to_date">
                                            <select id="inputState" style="background: rgba(215, 215, 215, 0.23);" name="sunday_to" class="form-control time_t">
                                                <option selected>Closing Time</option>
                                               <option>1:00</option>
                                <option>2:00</option>
                                <option>3:00</option>
                                <option>4:00</option>
                                <option>5:00</option>
                                <option>6:00</option>
                                <option>7:00</option>
                                <option>8:00</option>
                                <option>9:00</option>
                                <option>10:00</option>
                                <option>11:00</option>
                                <option>12:00</option>
                                <option>13:00</option>
                                <option>14:00</option>
                                <option>15:00</option>
                                <option>16:00</option>
                                <option>17:00</option>
                                <option>18:00</option>
                                <option>19:00</option>
                                <option>20:00</option>
                                <option>21:00</option>
                                <option>22:00</option>
                                <option>23:00</option>
                                <option>24:00</option>
                                            </select>
                                        </div>
                                    </div>
                                    {{-- <div class="form-group" style="align-items: center;justify-content: left;">
                                        <input type="radio" style="width: auto;margin-top: 0px;" name="businesshour">
                                        <label style="color: #495E96;margin: 0px 0px 0px 10px;">This Business open 7x24</label>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>

                <div class="Total_Con">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 ">
                                <div class="form_submit">
                                    <button class="SandR" type="submit" id="submit"
                                        style="color:black">Submit & Preview</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </form>

            
        </div>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" integrity="sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
     
    
      
    
        <link href="{{ asset('assets/font/knife_princess/knife_princess/KnifePrincess-MMPY.ttf') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/fontawesome.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/owl.theme.default.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      
      <footer id="footer" style="padding: 60px 0 0;">
    
        <div class="footer-top" style="height: auto">
          <div class="container" style="margin-top: 0">
            <div class="row">
    
              <div class="col-lg-3 col-md-6 footer-contact">
                <h3> Ready to get started ?<span></span></h3>
                 @if (Auth::guard('vendor')->check())
                     <button id="addb"> <a href="">Add Bussiness</a></button>
                     @elseif(Auth::guard('customer')->check())
                     <button type = "submit" class = "review-btn mt-2" class = "" hidden="hidden"><a style="color: black" href="{{ route('customer_login') }}">customer</a></button>
                     @else
                     <button type = "submit" class = "review-btn mt-2" class = ""><a style="color: black" href="{{ route('customer_login') }}">login</a></button>
                @endif
                     
              </div>
    
              <div class="col-lg-3 col-md-6 footer-links">
                <h4>ProBuild</h4>
                <ul>
                  <li> <a href="{{ route('about_usPage') }}">About us</a></li>
                  <li><a href="{{ route('termsAndConditions') }}"> Terms & Conditions</a></li>
                  <li><a href="{{ route('privacyPolicy') }}"> Privacy Policy</a></li>
                 
                </ul>
              </div>
    
              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Help</h4>
                <ul>
                  <li><a href="{{ route('faq_page') }}">FAQs</a></li>
                  <li><a href="{{ route('content_us') }}">Contact us</a></li>
                  
              </div>
    
              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Quick Links</h4>
                 <ul>
                  <li><a href="#">
                  Browser Category</a></li>
                  <li><a href="#">Search Business</a></li>
                  <li><a href="#">Login to your account</a></li>
                 </ul>
                {{-- <div class="social-links mt-3">
                  <a href="#"><i class="bi bi-instagram"></i></a>
                  <a href="#"><i class="bi bi-twitter"></i></a>
                  <a href="#"><i class="bi bi-facebook"></i></a>
                
                </div> --}}
              </div>
            </div>
          </div>
         </div>
      </footer>
    
    
    
    
     <style>
    
        #map {
        top: 0;
        bottom: 0;
        max-width: 100%;
        }
        .marker {
        background-image: url('mapbox-icon.png');
        background-size: cover;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        cursor: pointer;
        }
        .mapboxgl-popup {
        max-width: 200px;
        }
        .mapboxgl-popup-content {
        text-align: center;
        font-family: 'Open Sans', sans-serif;
        }
    
        .dropzone .dz-preview.dz-image-preview{
            background:unset !important;
        }
        </style>
    
    
    
    
    <script>
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    </script>
    
    
    
         <script>
          $(function () {
              // flash auto hide
              $('#flash-msg .alert').not('.alert-danger, .alert-important').delay(6000).slideUp(500);
          })
    
    
          function change_status(id, name, check, column){
          var status = 0;
            if($(check).is(':checked')){
                var status = 1;
            }
          $.ajax({
              url: "{{ route('change_business_status') }}",
              type: 'POST',
              data: {"_token": '{{csrf_token()}}', status:status, id:id, name:name, column:column},
              success: function(response){
                  if(response.status == 1){
                      toastr.success("Status Changed Successfully!", response.message);
                  }else{
                      toastr.error("Error While changing Status", response.message);
                  }
    
              },
              error:function(response){
                  toastr.error("Error While changing Status","Please Refresh and Try!");
              }
          })
      }
      </script>
    
    <script>
        var x = document.getElementById("read_more");
        var l = document.getElementById("less");
        var m = document.getElementById("more");
          l.classList.add("hide");
    
      x.classList.add("hide");
      function read_comment() {
        if (x.classList.contains("hide")) {
          x.classList.remove("hide");
    
          l.classList.remove("hide");
          m.classList.add("hide");
    
        } else {
          x.classList.add("hide");
             l.classList.add("hide");
          m.classList.remove("hide");
        }
      }
    
    
    </script>
    
    
          <script type="text/javascript">
    $(document).ready(function () {
    $(' .dmenu').hover(function () {
            $(this).find('.menu').first().stop(true, true).slideDown(150);
        }, function () {
            $(this).find('.menu').first().stop(true, true).slideUp(105)
        });
        
        $('.time_date select').change(function(){
            if($(this).val() == "Closed"){
                $(this).parent().next(".to_date").find( "select" ).attr("disabled", 'disabled')
            } else {
                $(this).parent().next(".to_date").find( "select" ).removeAttr("disabled", 'disabled')
            }
            
        })
    });
    </script>
    
        <script type="text/javascript" src="{{ URL::asset('assets/js/company_profile.js') }}"></script>
    

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
        {{-- ...Some more scripts... --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>

            <!-- END: Page image drag and drop JS-->
    <script type="text/javascript" src="{{ URL::asset('assets/js/dag_image.js') }}"></script>
    {{-- <script type="text/javascript" src="{{ URL::asset('assets/js/validate_form.js') }}"></script> --}}

<input type="text"  class="hidden file_count" value="{{ $data['package']['gallery_image'] }}">



<script>
function dragNdrop(event) {
    var fileName = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("preview_banner");
    var previewImg = document.createElement("img");
    previewImg.setAttribute("src", fileName);
    preview.innerHTML = "";
    preview.appendChild(previewImg);
}
function drag() {
    document.getElementById('uploadFile').parentNode.className = 'dragBox';
}
function drop() {
    document.getElementById('uploadFile').parentNode.className = 'dragBox';
}





function dragMdrop(event) {
    var fileName_1 = document.getElementById('get_brochure').files[0].name;
    var fileName = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("preview_brochure");
    // var previewImg = document.createElement("img");
    // previewImg.setAttribute("src", fileName);
    preview.innerHTML = fileName_1;
    // preview.appendChild(fileName_1);
}
function drag() {
    document.getElementById('uploadFileM').parentNode.className = 'bro_upload';
}
function drop() {
    document.getElementById('uploadFileM').parentNode.className = 'bro_upload';
}



function dragLdrop(event) {
    var fileName_2 = document.getElementById("get_document").files[0].name;
    var fileName = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("preview_document");
    // var previewImg = document.createElement("img");
    // previewImg.setAttribute("src", fileName);
    preview.innerHTML = fileName_2;
    // preview.appendChild(previewImg);
}
function drag() {
    document.getElementById('uploadFileL').parentNode.className = 'doc_upload';
}
function drop() {
    document.getElementById('uploadFileL').parentNode.className = 'doc_upload';
}




            
            // Turn off auto discovery
            Dropzone.autoDiscover = false;
            var filecount = $('.file_count').val();
            $(function() {
                // Attach dropzone on element
                $("#dropzoneId").dropzone({
                    url: "{{ route('multipleImage_upload') }}",
                    addRemoveLinks: true,
                    maxFiles:filecount,
                    maxFilesize: {{ isset($maxFileSize) ? $maxFileSize : config('attachment.max_size', 5000) / 1000 }},
                    acceptedFiles: "{!! isset($acceptedFiles) ? $acceptedFiles : config('attachment.allowed') !!}",
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    params: {!! isset($params) ? json_encode($params) : '{}' !!},
                    success: function(response) {
                        // uploaded files
                        $('#multiple_imageUpload').append('<input type="hidden" name="image['+response.name+']" value="'+response.name+'">');
                        var uploadedFiles = [];
                        @if (isset($uploadedFiles) && count($uploadedFiles))
                            // show already uploaded files
                            uploadedFiles = {!! json_encode($uploadedFiles) !!};
                            var self = this;
                            uploadedFiles.forEach(function (file) {
                            // Create a mock uploaded file:
                            var uploadedFile = {
                            name: file.filename,
                            size: file.size,
                            type: file.mime,
                            dataURL: file.url
                            };
                            // Call the default addedfile event
                            self.emit("addedfile", uploadedFile);
                            // Image? lets make thumbnail
                            if( file.mime.indexOf('image') !== -1) {
                            self.createThumbnailFromUrl(
                            uploadedFile,
                            self.options.thumbnailWidth,
                            self.options.thumbnailHeight,
                            self.options.thumbnailMethod,
                            true, function(thumbnail) {
                            self.emit('thumbnail', uploadedFile, thumbnail);
                            });
                            } else {
                            // we can get the icon for file type
                            self.emit("thumbnail", uploadedFile, getIconFromFilename(uploadedFile));
                            }
                            // fire complete event to get rid of progress bar etc
                            self.emit("complete", uploadedFile);
                            })
                        @endif
                        // Handle added file
                        this.on('addedfile', function(file) {
                            var thumb = getIconFromFilename(file);
                            $(file.previewElement).find(".dz-image img").attr("src", thumb);
                        })
                        // handle remove file to delete on server
                        this.on("removedfile", function(file) {
                            // try to find in uploadedFiles
                            var found = uploadedFiles.find(function(item) {
                                // check if filename and size matched
                                return (item.filename === file.name) && (item.size === file
                                    .size);
                            })
                            // If got the file lets make a delete request by id
                            if (found) {
                                $.ajax({
                                    url: "/attachments/" + found.id,
                                    type: 'DELETE',
                                    headers: {
                                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                                    },
                                    success: function(response) {
                                        console.log('deleted');
                                    }
                                });
                            }
                        });
                        // Handle errors
                        this.on('error', function(file, response) {
                            var errMsg = response;
                            if (response.message) errMsg = response.message;
                            if (response.file) errMsg = response.file[0];
                            $(file.previewElement).find('.dz-error-message').text(errMsg);
                        });
                    }
                });
            })
            // Get Icon for file type
            function getIconFromFilename(file) {
                // get the extension
                var ext = file.name.split('.').pop().toLowerCase();
                // if its not an image
                if (file.type.indexOf('image') === -1) {
                    // handle the alias for extensions
                    if (ext === 'docx') {
                        ext = 'doc'
                    } else if (ext === 'xlsx') {
                        ext = 'xls'
                    }
                    return "/images/icon/" + ext + ".svg";
                }
                // return a placeholder for other files
                return '/images/icon/txt.svg';
            }
        </script>

       
<script>
    $(document).ready(function() {
   $('#category').on('change', function() {
       var stateID = $('#category').val();
       // alert(stateID)
       if(stateID) {
           $.ajax({
               // url: '/sub_category_load/'+stateID,
               url: '{{ url('sub_category_load') }}',
               type: "GET",
               data : {"_token":"{{ csrf_token() }}","id":stateID},
               dataType: "json",
               success:function(data) {
                 if(data){
                   $('#subcategory').empty();
                   $('#subcategory').focus;

                   $('#subcategory').append('<option value="">-- Select Sub Category --</option>'); 
                   $.each(data, function(key, value){
                   $('select[name="business_SubCategory"]').append('<option value="'+ value.id +'">' + value.sub_category+ '</option>');
               });
             }else{
               $('#subcategory').empty();
             }
             }
           });
       }else{
         $('#subcategory').empty();
       }
   });
});
</script>



<script type="text/javascript">
    var input = document.getElementById( 'file-upload' );
var infoArea = document.getElementById( 'file-upload-filename' );

input.addEventListener( 'change', showFileName );

function showFileName( event ) {

  var input = event.srcElement;
// alert(event);
  var fileName = input.files[0].name;
  
  infoArea.textContent = 'File name: ' + fileName;

   $('#file-upload-filename').text(fileName);
  $('#upload_brochure').val(fileName);
  
}
</script>


<script type="text/javascript">
    var input = document.getElementById( 'file-upload1' );
var infoArea = document.getElementById( 'file-upload-filename1' );

input.addEventListener( 'change', showFileName1 );

function showFileName1( event ) {

  var input = event.srcElement;

  var fileName = input.files[0].name;


  $('#file-upload-filename1').text(fileName);
  $('#upload_banner').val(fileName);
  
  // infoArea.textContent = 'File name: ' + fileName;
}
</script>

<script type="text/javascript">
    var input = document.getElementById( 'file-upload2' );
var infoArea = document.getElementById( 'file-upload-filename2' );

input.addEventListener( 'change', showFileName2 );

function showFileName2( event ) {

  var input = event.srcElement;

  var fileName = input.files[0].name;

  $('#file-upload-filename2').text(fileName);
  $('#upload_banner').val(fileName);
}
</script>
 <script type="text/javascript">
          function product_images() {
            if (room < id) {
                room++;

                var objTo = document.getElementById('product_images')
                var divtest = document.createElement("div");
                divtest.setAttribute("class", "form-control removeclass" + room);
                var rdiv = 'removeclass' + room;
                divtest.innerHTML =
                    '';
                    }
                objTo.appendChild(divtest)
          }
            var room = 1;

            function education_fields(id) {
              if (room < id) {
                room++;

                var objTo = document.getElementById('education_fields')
                var divtest = document.createElement("div");
                divtest.setAttribute("class", "form-group removeclass" + room);
                var rdiv = 'removeclass' + room;
                divtest.innerHTML =
                    '<div class="panel-body row" style="width="300px;"><div class="col-sm-4 nopadding"><div class="form-group"><label>Name</label><input type="text" name="product_name[]" class="form-control" placeholder="Name of your Product / Service "></div></div><div class="col-sm-4 nopadding"><div class="form-group"><label>Price From</label><input type="text" name="product_price_from[]" class="form-control" placeholder=" "></div></div><div class="col-sm-4 nopadding"><div class="form-group"><label>Price To</label><input type="text" name="product_price_to[]" class="form-control" placeholder=" "></div></div><div class="col-sm-12 nopadding"><div class="form-group"><label>Description</label><textarea name="product_description[]" class="form-control " placeholder="Business Description" style="height:200px;width: 100%;"></textarea></div></div><div class="col-sm-6 nopadding"><div class="form-group"><label>Product Image</label><input type="file" name="product_image[]" class="form-control" id="product_image" placeholder="image"></div></div><div class="input-group-btn"> <button class="btn btn-danger delete_pro" type="button" onclick="remove_education_fields(' +
                    room +
                    ');"> Delete </button></div></div></div></div><div class="clear"></div></div>';
                    }
                objTo.appendChild(divtest)
            }

            function remove_education_fields(rid) {
                $('.removeclass' + rid).remove();
            }
        </script>
        
      <script type="text/javascript">
        $(document).ready(function () {
        $(' .dmenu').hover(function () {
                $(this).find('.menu').first().stop(true, true).slideDown(150);
            }, function () {
                $(this).find('.menu').first().stop(true, true).slideUp(105)
            });
        });
        </script>

<script type="text/javascript" src="{{ URL::asset('assets/js/company_profile.js') }}"></script>

</body>

</html>
