<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Buisness</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('assets/fonts/material-icon/css/material-design-iconic-font.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">


    <!--fontawesome-->
    <link href="{{ asset('assets/css/company_profile.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/vendor.css') }}" rel="stylesheet">


    <!--bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    
    <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <!--fontawesome-->
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('assets/css/fontawesome.min.css') }}" rel="stylesheet"> -->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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
        .dropzone{
            border: 1px dashed gray !important;

        }
        .fb9 {
      border: 1px solid #3366FF;
      background-color: #B3C6FF;
      width:150px;
      height:30px;
    }
    .uploa_image_css{
        height: 50px;
        width: 50px;
    }
    .cus_button{
    color: black !important;
    background-color: #F4E059  !important;
    padding: 10px 20px 13px 20px  !important;
    border-radius: 5px  !important;
    font-family: 'Open Sans', sans-serif;
    font-size: 16px;
    font-weight: 700;
    margin-top: 5px;
    border: 1px solid #F4E059;
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
.btn_edit button {
    color: black;
    background-color: #f4e059;
    
}
.btn-primary {
    color: #161616;
    background-color: #f4e059;
    border-color: #f4e059;
}
.edit_upload_image  p{
    padding-left:0px !important;
    font-size:18px !important;
    color:#495E96 !important;
}
.gallery_title p {
    margin-left: 20px;
}
.gallery_image{
    margin-top:0px;
}
.edit_upload_image .border_image .form-group {

    height: 60px;
}
.gallery_image img {
    margin: 0;
}

  @media (max-width: 767px) {
  .edit_image {
    width: 180px !important;
    height: 180px !important;
    /* width: 130px !important;
    height: 62px !important; */
}
.edit_upload_image p{
    margin-top:0px;
}
.update_button_edit{
    margin-left:15px !important;
}
}
</style>


  
</head>

<body style="background: #E5E5E5;">
{{-- 
        <div class="total">
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
            </div> --}}

            {{-- </div> --}}



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
                    <a class="nav-link " href="javascript:void(0)" id="navbardrop" data-toggle="dropdown">
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
                    <a href="{{route('vendor_package_monthly')}}">Add Buisness</a>
                    @else
                    <a href="{{route('add_business',$vendor->id)}}">Add Buisness</a>
        
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





        <div class="container input_r">


            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="m-2">

                        @if (session('success'))

                        <div class="alert alert-success alert-dismissible fade show" role="alert">

                            {{ session('success') }}

                        </div>
                        @endif

                    </div>
                </div>
            </div>

            <form action="{{ route('edit_update_business') }}" id="form_data" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="business_id" value="{{ $business['id'] }}">
                @csrf

                <div class="Total_Con">
                    <div class="">
                        <div class="row">
                            <div class="col-sm-12 ">
                                <div class="mess card">
                                    <div class="privacy">
                                        <h2>General Information</h2>
                                    </div>
                                    <div class="container">
                                        <div class="box bu_edit_page">
                                            <label>Buisness Title*</label>
                                            <input type="text" style="background: rgba(215, 215, 215, 0.23);" name="business_title" value="{{ $business['business_title'] }}" class="form-control"
                                                placeholder="Title ">
                                                <div class="">
                                                    <label>Category*</label>

                                                    <select name="
                                                business_category" style="background: rgba(215, 215, 215, 0.23);" class="form-control " aria-label="Default select example"
                                                id="chooseCategory" onchange="this.form.click()">


                                                <option selected>Choose category</option>
                                                @foreach ($category as $key => $cat)
                                                    <option value="{{ $cat['id'] }}">
                                                        {{ $cat['category'] }}
                                                    </option>
                                                @endforeach
                                                </select>
                                            </div>
                                            <div>
                                                <label class="mt-3">Sub Category*</label>

                                                <select name="business_SubCategory" style="background: rgba(215, 215, 215, 0.23);" class="form-control "
                                                    aria-label="Default select example" id="chooseSuCategory"
                                                    onchange="this.form.click()">
                                                    <!-- <option value="selected">Choose Subcategory</option> -->
                                                </select>

                                            </div>


                                            <div class="test mt-3">
                                                <label>Description</label>
                                                <textarea class="form-control" placeholder="Business Description"
                                                    style="background: rgba(215, 215, 215, 0.23);height:200px;width: 100%;" name="business_description">{{ $business['business_description'] }}</textarea>
                                            </div>
                                        </div>

                                        <div class="btn_edit update_button mt-4">
                                            <button type="submit" class="btn cus_button">Update Business</button>
                                             </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                
                </div>

             
            </form>
                <div class="Total_Con bg_light edit_upload_image ">
                                <div class="privacy ">
                                    <h2>Upload Image</h2>
                                </div>
                                <div class="row m-3 border_image">

                                    <div class="col-md-4">
                                                                                  

                                        <p style="color:#495E96;font-size: 15px;" >Upload Business Logo </p>
                                         
                                        <div class="form-group">
                                            {{-- <input type="file" name="business_logo" class="form-control"
                                                id="product_image" placeholder="image" value="{{ $business['business_logo'] }}" > --}}
                                                {{-- <label class="mt-3">Current Logo</label> --}}
                                                <img src="{{ asset('/upload_images/business_logo/'.$business['business_logo']) }}" style="width:180px; height:180px;" class="business_logo">

                                        </div><br><br><br><br><br>
                                         <div class="btn_edit update_button mt-4">
                                        <button type="submit" data-toggle="modal" data-target="#exampleModalCenterlogo" data-backdrop="false" class="btn ">
                                            Edit
                                        </button>
                                         </div>

{{-- 
                                         <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter{{ $val['id'] }}" data-backdrop="false">
    Launch demo modal
  </button>
   --}}
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenterlogo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" >
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header m-3">
          <h5 class="modal-title" id="exampleModalLongTitle">Upload Business Logo</h5>
        
        </div>
        <div class="modal-body">
            <form action="{{ route('update_logo',$business['id']) }}" method="post" enctype="multipart/form-data">
                @csrf 

            <div class="m-3">
          
                <div class="form-group">
                    <input type="file" name="business_logo" class="form-control"
                        id="product_image" placeholder="image" value="{{ $business['business_logo'] }}" >
                        {{-- <label class="mt-3">Current Logo</label> --}}
                      
                </div>
            </div>
          
        </div>
        <div class="modal-footer modal-button">
            <button type="submit" class="btn btn-primary">Update</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
    </form>

      </div>
    </div>
  </div>



                                        {{-- <p style="color: #6c757d; text-align:center; font-size: 9.7835px;">Maxinum file size:2 MB</p> --}}
                                    </div>

                                    
                                <div class="col-md-4">

                                         

                                    <p style="color:#495E96;font-size: 15px;">Upload Banner </p>
                                 
                                    <div class="form-group">
                                        {{-- <input type="file" name="business_image" class="form-control"
                                            id="product_image" placeholder="image" value="{{ $business['business_image'] }}" > --}}
                                            <img src="{{ asset('/upload_images/business_image/'.$business['business_image']) }}" style="width:180px; height:180px;"  class="edit_image business_logo">
                                        </div><br><br><br><br><br><br>
                                        <div class="btn_edit update_button">
                                            <button type="submit" data-toggle="modal" data-target="#exampleModalCenterimage" data-backdrop="false" class="btn ">
                                                Edit
                                            </button>
                                             </div>
    
    {{-- 
                                             <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter{{ $val['id'] }}" data-backdrop="false">
        Launch demo modal
      </button>
       --}}
      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenterimage" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" >
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header m-3">
              <h5 class="modal-title" id="exampleModalLongTitle">Upload Business Banner</h5>
            
            </div>
            <div class="modal-body">
                <form action="{{ route('update_banner',$business['id']) }}" method="post" enctype="multipart/form-data">
                    @csrf        
    
                <div class="m-3">
              
                    <div class="form-group">
                        <input type="file" name="business_logo" class="form-control"
                            id="product_image" placeholder="image" value="{{ $business['business_image'] }}" >
                            {{-- <label class="mt-3">Current Logo</label> --}}
                          
                    </div>
                </div>
              
            </div>
            <div class="modal-footer modal-button">
                <button type="submit" class="btn btn-primary">Update</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </form>
    
          </div>
        </div>
      </div>

      


                                    {{-- <p style="color: #6c757d; text-align:center; font-size: 9.7835px;">Maxinum file size:2 MB</p> --}}

                                
                            </div>
                            <div class="col-md-4">

                                        
                                <p style="color:#495E96;font-size: 15px;">Upload Brochure</p>

                                   <div class="form-group">
                                    {{-- <input type="file" name="business_brochure" class="form-control"
                                        id="product_image" placeholder="image" value="{{ $business['business_brochure'] }}" > --}}
                                        <!-- <p class="mt-3">{{ $business['business_brochure'] }}</p> -->
                                         <img src=" {{ asset('upload_images/business_document/'.$business['business_brochure']) }}" style="width:180px; height:180px;"  class="business_logo"> 
                               

    
    {{-- 
                                             <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter{{ $val['id'] }}" data-backdrop="false">
        Launch demo modal
      </button>
       --}}
      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenterbrochure" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" >
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header m-3">
              <h5 class="modal-title" id="exampleModalLongTitle">Upload Business Brochure</h5>
            
            </div>
            <div class="modal-body">
                <form action="{{ route('update_brochure',$business['id']) }}" method="post" enctype="multipart/form-data">
                    @csrf     
    
                <div class="m-3">
              
                    <div class="form-group">
                        <input type="file" name="business_logo" class="form-control"
                            id="product_image" placeholder="image" value="{{ $business['business_brochure'] }}" >
                            {{-- <label class="mt-3">Current Logo</label> --}}
                          
                    </div>
                </div>
              
            </div>
            <div class="modal-footer modal-button">
                <button type="submit" class="btn btn-primary">Update</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </form>
    
          </div>
        </div>
      </div>

                              
                                {{-- <p style="color: #6c757d; text-align:center; font-size: 9.7835px;">Maxinum file size:2 MB</p> --}}


                            </div>


 <div class="btn_edit update_button mt-4"><br><br><br><br><br><br>
                                            <button type="submit" data-toggle="modal" data-target="#exampleModalCenterbrochure" data-backdrop="false" class="btn ">
                                                Edit
                                            </button>
                                             </div>
                                </div>



                               
                                </div>
                                    <div class="row">
                                  
                                        <div class="col-md-12">

                                        <div class="form-group m-2">
                                            <div class="gallery_title">

                                                <p>Update Gallery images</p>

                                            </div>

                                            <div class="row gallery_image">
                                              

                                            @foreach($gallery_image as $key=>$val)
                                            <div class="col-md-3 m1-1">

                                                <img src="{{ asset('/upload_images/gallery_image/'.$val['gallery_image']) }}" class="uploa_image_css edit_image" style="width:180px; height:180px;" >
                                              
                                            
                                                <div class="btn_edit update_button mt-4  mb-3">
                                                    <button type="submit" data-toggle="modal" data-target="#exampleModalCenter{{ $val['id'] }}" data-backdrop="false" class="btn ">
                                                        Edit
                                                    </button>
                                                     </div>
            
            {{-- 
                                                     <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter{{ $val['id'] }}" data-backdrop="false">
                Launch demo modal
              </button>
               --}}
              <!-- Modal -->
              <div class="modal fade" id="exampleModalCenter{{ $val['id'] }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" >
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header m-3">
                      <h5 class="modal-title" id="exampleModalLongTitle">Upload Business image</h5>
                    
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('update_g_image',$val['id']) }}" method="post" enctype="multipart/form-data">
                            @csrf     
            
                        <div class="m-3">
                      
                            <div class="form-group">
                                <input type="file" name="gallery_image" class="form-control"
                                    id="gallery_image" placeholder="image" value="{{ $val['gallery_image'] }}" >
                                    {{-- <label class="mt-3">Current Logo</label> --}}
                                  
                            </div>
                        </div>
                      
                    </div>
                    <div class="modal-footer modal-button">
                        <button type="submit" class="btn btn-primary">Update</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            
                  </div>
                </div>
              </div>
                 
              
            </div>
     @endforeach

  </div>
</div>

@if ($data['gallery_image_count'] < $plan_detail->gallery_image)

<div class="add_g">

    <button type="submit" data-toggle="modal" data-target="#exampleModalCentermore" data-backdrop="false" >
        <i class="fa fa-plus" aria-hidden="true"></i>  Add More Images 
    </button>

</div>



<div class="modal fade" id="exampleModalCentermore" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" >
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header m-3">
<h5 class="modal-title" id="exampleModalLongTitle">Add More Images</h5>

</div>
<div class="modal-body">
<form action="{{ route('add_more_image',$business['id'])}}" method="post"  enctype="multipart/form-data">
@csrf     

<div class="m-3">

<div class="form-group">
<input type="file" name="gallery_image" class="form-control"
id="gallery_image" placeholder="image" value="" >
{{-- <label class="mt-3">Current Logo</label> --}}

</div>
</div>

</div>
<div class="modal-footer modal-button">
<button type="submit" class="btn btn-primary">Add</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
</div>
</form>

</div>
</div>
</div>
    
@endif

                                        <div class="row" id="image_preview"></div>
                                    </div>
                          
                        </div>
                    
            
                </div>
                <div class="Total_Con mt-3 mb-3 bg_light" >
                        <div class="row ">
                            <div class="col-md-12">

                      

                                <div class="privacy edit_document ">
                                    <h2>Business Document</h2>
                                </div>
                                    <div class="edit_document_body">

                                           <div class="form-group">
                                            {{-- <input type="file" name="business_document" class="form-control"
                                                id="product_image" placeholder="image" value="{{ $business['business_document'] }}" "> --}}
                                                
                                                <img src="{{ asset('upload_images/business_document/'.$business['business_document']) }}" class="uploa_image_css edit_image" style="width:180px; height:180px;" >
                                              
                                                <!-- <p class="mt-3">{{ $business['business_document']  }}</p> -->

                                               
                                        </div>

                                        <div class="btn_edit update_button ml-3 mb-5">
                                            <button type="submit" data-toggle="modal" data-target="#exampleModalCenterbrochure" data-backdrop="false" class="btn ">
                                                Edit
                                            </button>
                                             </div>
    
    {{-- 
                                             <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter{{ $val['id'] }}" data-backdrop="false">
        Launch demo modal
      </button>
       --}}
      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenterbrochure" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" >
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header m-3">
              <h5 class="modal-title" id="exampleModalLongTitle">Upload Business Document</h5>
            
            </div>
            <div class="modal-body">
                <form action="{{ route('update_document',$business['id']) }}" method="post" enctype="multipart/form-data">
                    @csrf  
    
                <div class="m-3">
              
                    <div class="form-group">
                        <input type="file" name="business_logo" class="form-control"
                            id="product_image" placeholder="image" value="{{ $business['business_document'] }}" >
                            {{-- <label class="mt-3">Current Logo</label> --}}
                          
                    </div>
                </div>
              
            </div>
            <div class="modal-footer modal-button">
                <button type="submit" class="btn btn-primary">Update</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </form>
    
          </div>
        </div>
      </div>





                                    </div>

                           
                            </div>
                        </div>
        </div>
                <div id="multiple_imageUpload">  
                </div>
            

                <div class="Total_Con bg_light">
                        <div class="row" >
                            <div class=" panel-default col-sm-12">
                                <div class="privacy edit_product">
                                    <h4>Add Product and Service </h4>
                                </div>
                            @foreach($product as $key=> $val)

                          <form action="{{ route('update_product',$val['id']) }}" method="post" enctype="multipart/form-data">
                            @csrf

                                <div id="tab_logic " class="  panel-default m-3">
                                  
                                    <div id="" class="row m-2">
                                        <div class="col-sm-4 nopadding">
                                            <div class="form-group">
                                                <label style="color:#495E96;font-size: 15px;">Name</label>
                                                <input type="text" style="background: rgba(215, 215, 215, 0.23);" name="product_name"  value="{{ $val['product_name'] }}"  class="form-control"
                                                    placeholder="Name of your Product / Service ">

                                            </div>
                                        </div>
                                        <div class="col-sm-4 nopadding">
                                            <div class="form-group">
                                                <label style="color:#495E96;font-size: 15px;">Price From</label>
                                                <input type="text" style="background: rgba(215, 215, 215, 0.23);" name="product_price_from" value="{{ $val['product_price_from'] }}" class="form-control"
                                                    placeholder=" ">
                                            </div>
                                        </div>
                                        <div class="col-sm-4 nopadding">
                                            <div class="form-group">
                                                <label style="color:#495E96;font-size: 15px;">Price To</label>
                                                <input type="text" style="background: rgba(215, 215, 215, 0.23);" name="product_price_to" value="{{ $val['product_price_to'] }}" class="form-control"
                                                    placeholder=" ">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 nopadding">
                                            <div class="form-group">
                                                <label style="color:#495E96;font-size: 15px;">Description</label>
                                                <textarea name="product_description" class="form-control "
                                                    placeholder="Buisness Description" maxlength="100"
                                                    style="background: rgba(215, 215, 215, 0.23);height:200px;width: 100%;">{{ $val['product_description'] }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 nopadding">
                                            <div class="form-group">
                                                <label style="color:#495E96;font-size: 15px;">Product Image</label>
                                                <input type="file" name="product_image" class="form-control"
                                                    id="product_image" placeholder="image" value="{{ $val['product_name'] }}" >

                                                    <img src="{{ asset('/upload_images/product_image/'.$val['product_image']) }}" class="uploa_image_css mt-4 edit_image"  style="width:130px; height:100px;">
                                            </div>
                                        </div>
                                     
                                        <div class="clear"></div>
                                    </div>
                                    <div class="btn_edit update_button ml-4 mb-5">
                                        <button type="submit" style="border: none" class="cus_button">
                                            Update Product
                                        </button>
                                         </div>
                                </div>

                            

                            </form>
                            @endforeach

                            @if ($data['product_count']<$plan_detail->product_listing)
                            
                           <div class="add_p add_productt">
                             <button type="submit" data-toggle="modal" data-target="#exampleModalCenterproduct" data-backdrop="false" >
                             <i class="fa fa-plus" aria-hidden="true"></i>  Add More Products 
                             </button>
                             </div>     
                             
                             
                             
<div class="modal product_modal fade" id="exampleModalCenterproduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" >
    <div class="modal-dialog modal-dialog-centered " role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLongTitle">Add More Products</h5>
    
    </div>
    <div class="modal-body">
    <form action="{{ route('add_more_product',$business['id'])}}" method="post"  enctype="multipart/form-data">
    @csrf     
    
    <div id="tab_logic">
       
        <div  class="row ">
            <div class="col-sm-12 ">
                <div class="form-group">
                    <label style="color:#495E96;font-size: 15px;">Name</label>
                    <input type="text" style="background: rgba(215, 215, 215, 0.23);" name="product_name"   class="form-control"
                        placeholder="Name of your Product / Service ">

                </div>
            </div>
            <div class="col-sm-6 ">
                <div class="form-group">
                    <label style="color:#495E96;font-size: 15px;">Price From</label>
                    <input type="text" style="background: rgba(215, 215, 215, 0.23);" name="product_price_from" class="form-control"
                        placeholder=" ">
                </div>
            </div>
            <div class="col-sm-6 ">
                <div class="form-group">
                    <label style="color:#495E96;font-size: 15px;">Price To</label>
                    <input type="text" style="background: rgba(215, 215, 215, 0.23);" name="product_price_to"  class="form-control"
                        placeholder=" ">
                </div>
            </div>
            <div class="col-sm-12 ">
                <div class="form-group">
                    <label style="color:#495E96;font-size: 15px;">Description</label>
                    <textarea name="product_description" class="form-control "
                        placeholder="Buisness Description" maxlength="300"
                        style="background: rgba(215, 215, 215, 0.23);height:200px;width: 100%;"></textarea>
                </div>
            </div>
            <div class="col-sm-6 nopadding">
                <div class="form-group">
                    <label style="color:#495E96;font-size: 15px;">Product Image</label>
                    <input type="file" name="product_image" class="form-control"
                        id="product_image" placeholder="image"  >

                </div>
            </div>
        
            <div class="clear"></div>
        </div>
    </div>
    
    </div>
    <div class="modal-footer modal-button">
    <button type="submit" class="btn btn-primary">Add</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    </div>
    </form>
    
    </div>
    </div>
    </div>



                                
                            @endif
                        </div>
                        </div>
                </div>



                <div class="Total_Con mt-3">
                        <div class="row">
                            <div class="col-sm-12 ">
                                <div class="li card">
                                    <form action="{{ route('update_location',$business['id']) }}" method="post">
                                    @csrf
                                    <div class="privacy">
                                        <h2>Location Information</h2>
                                    </div>
                                    <div class="box mt-5 top_gap">
                                        <div class="row ">
                                            <div class="col-sm-6 add_top mt-5">
                                                <div class="add_a_buisness_text4"><label style="color:#495E96;font-size: 15px;">Country</label>
                                                    <input type="text" value="{{ $business['country'] }}" style="background: rgba(215, 215, 215, 0.23);" class="form-control" placeholder="Country "
                                                        name="country">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 add_top">
                                                <div class="add_a_buisness_text5"><label style="color:#495E96;font-size: 15px;">City</label>
                                                    <input type="text" value="{{ $business['city'] }}" style="background: rgba(215, 215, 215, 0.23);" class="form-control" placeholder="City "
                                                        name="city">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12 add_top">

                                                <div class="add_a_buisness_text6"><label style="color:#495E96;font-size: 15px;">Location</label>
                                                    <input type="text" style="background: rgba(215, 215, 215, 0.23);" class="form-control" value="{{ $business['location'] }}"
                                                        placeholder="Location" name="location">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 add_top">
                                                <div class="add_a_buisness_text4"><label style="color:#495E96;font-size: 15px;">Longitude</label>
                                                    <input type="text" style="background: rgba(215, 215, 215, 0.23);" class="form-control" value="{{ $business['lang'] }}" placeholder="Longitude"
                                                        name="longitude">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 add_top">
                                                <div class="add_a_buisness_text5"><label style="color:#495E96;font-size: 15px;">Latitude</label>
                                                    <input type="text" style="background: rgba(215, 215, 215, 0.23);" class="form-control"  value="{{ $business['lat'] }}" placeholder="Latitude "
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

                                    <div class="btn_edit update_button update_button_edit mt-0 ml-5 mb-5">
                                        <button type="submit" class="btn cus_button">Update Location</button>
                                         </div>
                                </form>
                                </div>
                            </div>
                        </div>
                </div>
                <br>

                <div class="Total_Con">
                    <div class="row">
                        <div class="col-sm-12 ">
                            <div class="card">

                                <form action="{{ route('update_contact',$business['id']) }}" method="post">
                                    @csrf
                                <div class="privacy">
                                    <h2>Contact Information</h2>
                                </div>
                                <div class="box mt-5 top_gap">
                                    <div class="row">
                                        <div class="col-sm-6 add_top">
                                            <div class="add_a_buisness_text7"><label style="color:#495E96;font-size: 15px;">Email</label>
                                                <input type="text" style="background: rgba(215, 215, 215, 0.23);" class="form-control"
                                                    placeholder="business@gmail.com " value="{{ $business['email'] }}"  name="email">
                                            </div>
                                        </div>

                                        <div class="col-sm-6 add_top">

                                            <div class="add_a_buisness_text8"><label style="color:#495E96;font-size: 15px;">Mobile</label>
                                                <input type="text" style="background: rgba(215, 215, 215, 0.23);" class="form-control" value="{{ $business['mobile_no'] }}" placeholder="9656788378"
                                                    name="mobile_no">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 add_top">

                                            <div class="add_a_buisness_text9"><label style="color:#495E96;font-size: 15px;">Website</label>
                                                <input type="text" style="background: rgba(215, 215, 215, 0.23);" class="form-control" value="{{ $business['website'] }}"
                                                    placeholder="https://yoursite.com/" name="website">
                                            </div>
                                        </div>

                                        <div class="col-sm-6 add_top">
                                            <div class="add_a_buisness_text10"><label style="color:#495E96;font-size: 15px;">FAX NO</label>
                                                <input type="text" value="{{ $business['fax_no'] }}" style="background: rgba(215, 215, 215, 0.23);" class="form-control" placeholder="256 254 7854"
                                                    name="fax_no">
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                
                                <div class="btn_edit update_button update_button_edit mt-4 ml-5 mb-5">
                                    <button type="submit" class="btn cus_button">Update Contact

                                        
                                    </button>
                                     </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="Total_Con">
                    <div class="row">
                        <div class="col-sm-12 ">
                            <div class="card">
                                <form action="{{ route('update_social',$business['id']) }}" method="post">
                                    @csrf
                                <div class="privacy">
                                    <h2>Social Account</h2>
                                </div>
                                <div class="box bu_edit_page">
                                    <div class="row mt-5  top_gap">
                                        <div class="col-sm-6 add_top">
                                            <div class="add_a_buisness_text7"><label>Facebook URL</label>
                                                <input type="text" style="background: rgba(215, 215, 215, 0.23);" class="form-control" value="{{ $business['facebook'] }}" placeholder=""
                                                    name="facebook">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 add_top">
                                            <div class="add_a_buisness_text8"><label>LinkedIn URL</label>
                                                <input type="text" style="background: rgba(215, 215, 215, 0.23);" class="form-control" value="{{ $business['linkedin'] }}" placeholder=""
                                                    name="linkedin">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 add_top">

                                            <div class="add_a_buisness_text9"><label>Twitter URL</label>
                                                <input type="text" style="background: rgba(215, 215, 215, 0.23);" class="form-control" value="{{ $business['twitter'] }}" placeholder=""
                                                    name="twitter">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 add_top">
                                            <div class="add_a_buisness_text10"><label>Instagram URL</label>
                                                <input type="text" style="background: rgba(215, 215, 215, 0.23);" class="form-control" value="{{ $business['instagram'] }}" placeholder=""
                                                    name="instagram">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="btn_edit update_button update_button_edit mt-4 ml-5 mb-5">
                                    <button type="submit" class="btn cus_button">Update social
                                    </button>
                                     </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="Total_Con">
                    <div class="row">
                        <div class="col-sm-12 ">
                            <div class="card">
                                <form action="{{ route('update_time',$business['id']) }}" method="post">
                                    @csrf
                                <div class="privacy">
                                <h2>Business Hour</h2>
                                </div>
                                <div class="time_date bu_edit_page">
                                    <div class="form-group row ">
                                        <label for="inputEmail3" class="col-md-2 col-form-label">Monday</label>
                                        <div class="col-md-5">
                                            <select id="inputState" style="background: rgba(215, 215, 215, 0.23);" name="monday_from" class="form-control">
                                                <option value="{{ $business['monday_from'] }}">{{ $business['monday_from'] }}</option>
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
                                            <select id="inputState" style="background: rgba(215, 215, 215, 0.23);" name="monday_to" class="form-control">
                                                <option value="{{ $business['monday_to'] }}">{{ $business['monday_to'] }}</option>
                                               
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
                                            <select id="inputState" style="background: rgba(215, 215, 215, 0.23);" name="tuesday_from" class="form-control">
                                                <option value="{{ $business['tuesday_from'] }}">{{ $business['tuesday_from'] }}</option>
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
                                            <select id="inputState" style="background: rgba(215, 215, 215, 0.23);" name="tuesday_to" class="form-control">
                                                <option value="{{ $business['tuesday_to'] }}">{{ $business['tuesday_to'] }}</option>
                                              
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
                                            <select id="inputState" style="background: rgba(215, 215, 215, 0.23);" name="wednesday_from" class="form-control">
                                                <option value="{{ $business['wednesday_from'] }}">{{ $business['wednesday_from'] }}</option>
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
                                            <select id="inputState" style="background: rgba(215, 215, 215, 0.23);" name="wednesday_to" class="form-control">
                                                <option value="{{ $business['wednesday_to'] }}">{{ $business['wednesday_to'] }}</option>
                                               
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
                                            <select id="inputState" style="background: rgba(215, 215, 215, 0.23);" name="thursday_from" class="form-control">
                                                <option value="{{ $business['thursday_from'] }}">{{ $business['thursday_from'] }}</option>
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
                                            <select id="inputState" style="background: rgba(215, 215, 215, 0.23);" name="thursday_to" class="form-control">
                                                <option value="{{ $business['thursday_to'] }}">{{ $business['thursday_to'] }}</option>
                                              
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
                                            <select id="inputState" style="background: rgba(215, 215, 215, 0.23);" name="friday_from" class="form-control">
                                                <option value="{{ $business['friday_from'] }}">{{ $business['friday_from'] }}</option>
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
                                            <select id="inputState" style="background: rgba(215, 215, 215, 0.23);" name="friday_to" class="form-control">
                                                <option value="{{ $business['friday_to'] }}">{{ $business['friday_to'] }}</option>
                                                
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
                                            <select id="inputState" style="background: rgba(215, 215, 215, 0.23);" name="saturday_from" class="form-control">
                                                <option  value="{{ $business['saturday_from'] }}">{{ $business['saturday_from'] }}</option>
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
                                            <select id="inputState" style="background: rgba(215, 215, 215, 0.23);" name="saturday_to" class="form-control">
                                                <option value="{{ $business['saturday_to'] }}">{{ $business['saturday_to'] }}</option>
                                              
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
                                            <select id="inputState" style="background: rgba(215, 215, 215, 0.23);" name="sunday_from" class="form-control">
                                                <option value="{{ $business['sunday_from'] }}">{{ $business['sunday_from'] }}</option>
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
                                            <select id="inputState" style="background: rgba(215, 215, 215, 0.23);" name="sunday_to" class="form-control">
                                                <option value="{{ $business['sunday_to'] }}">{{ $business['sunday_to'] }}</option>
                                               
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

                                
                                
                                <div class="btn_edit update_button mt-4 ml-5 mb-5">
                                    <button type="submit" class="btn cus_button">Update Time
                                    </button>
                                     </div>


                                </form>
                            </div>
                            
                        </div>
                    </div>
                   
                </div>

              


            </form>

            
        </div>

        <footer id="footer" style="padding: 60px 0 0;">
    
            <div class="footer-top" style="height: auto">
              <div class="container" style="margin-top: 0">
                <div class="row">
        
                  <div class="col-lg-3 col-md-6 footer-contact">
                    <h3> Ready to get started ?<span></span></h3>
                     @if (Auth::guard('vendor')->check())
                         <button id="addb"> <a href="">Add Business</a></button>
                         @elseif(Auth::guard('customer')->check())
                         <button type = "submit" class = "review-btn mt-2" class = "" hidden="hidden"><a style="color: black" href="{{ route('customer_login') }}">customer</a></button>
                         @else
                         <button type = "submit" class = "review-btn mt-2" class = ""><a style="color: black" href="{{ route('customer_login') }}">login</a></button>
                    @endif
                         
                  </div>
        
                  <div class="col-lg-3 col-md-6 footer-links">
                    <h4>PROBUILD</h4>
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
                      Browse Category</a></li>
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
        

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>


        <script type="text/javascript">
            function image_val(argument) {
                 alert()
             } 
        </script>
        <script>



function centerModal() {
    $(this).css('display', 'block');
    var $dialog = $(this).find(".modal-dialog");
    var offset = ($(window).height() - $dialog.height()) / 3;
    // Center modal vertically in window
    $dialog.css("margin-top", offset);
}

$('.modal').on('show.bs.modal', centerModal);
$(window).on("resize", function () {
    $('.modal:visible').each(centerModal);
});





            // Turn off auto discovery
            Dropzone.autoDiscover = false;
            $(function() {
                // Attach dropzone on element
                $("#dropzoneId").dropzone({
                    url: "{{ route('multipleImage_upload') }}",
                    addRemoveLinks: true,
                    maxFilesize: {{ isset($maxFileSize) ? $maxFileSize : config('attachment.max_size', 1000) / 1000 }},
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
    $('#chooseCategory').change(function() {
        var category = $('#chooseCategory').val();
        $.ajax({
            url: '{{ url('business/subCategory') }}',
            data: {
                'category': category
            },
            type: "GET",
            headers: {
                'X-CSRF-Token': '{{ csrf_token() }}',
            },
            success: function(data) {
                // alert(JSON.stringify(data));
                // alert(data.subCategory.length);
                $("#chooseSuCategory").empty();
                for (var i = 0; i < data.subCategory.length; i++) {
                    // alert(data.subCategory.sub_category)
                    $("#chooseSuCategory").append('<option value="' + data.subCategory[i].id +
                        '">' + data.subCategory[i].sub_category + '</option>');
                }


            },

        });
    })
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
                    '<div class="panel-body row" style="width="300px;"><div class="col-sm-4 nopadding"><div class="form-group"><label>Name</label><input type="text" name="product_name[]" class="form-control" placeholder="Name of your Product / Service "></div></div><div class="col-sm-4 nopadding"><div class="form-group"><label>Price From</label><input type="text" name="product_price_from[]" class="form-control" placeholder=" "></div></div><div class="col-sm-4 nopadding"><div class="form-group"><label>Price To</label><input type="text" name="product_price_to[]" class="form-control" placeholder=" "></div></div><div class="col-sm-12 nopadding"><div class="form-group"><label>Description</label><textarea name="product_description[]" class="form-control " placeholder="Business Description" style="height:200px;width: 100%;"></textarea></div></div><div class="col-sm-6 nopadding"><div class="form-group"><label>Product Image</label><input type="file" name="product_image[]" class="form-control" id="product_image" placeholder="image"></div></div><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields(' +
                    room +
                    ');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Delete </button></div></div></div></div><div class="clear"></div></div>';
                    }
                objTo.appendChild(divtest)
            }

            function remove_education_fields(rid) {
                $('.removeclass' + rid).remove();
            }
        </script>
        <script type="text/javascript">
             function addRow(tableID) {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);
            var colCount = table.rows[0].cells.length;
            for(var i=0; i<colCount; i++) {
                var newcell = row.insertCell(i);
                newcell.innerHTML = table.rows[1].cells[i].innerHTML;
                //alert(newcell.childNodes);
                switch(newcell.childNodes[0].type) {
                    case "text":
                            newcell.childNodes[0].value = "";
                            break;
                    case "checkbox":
                            newcell.childNodes[0].checked = false;
                            break;
                    case "select-one":
                            newcell.childNodes[0].selectedIndex = 0;
                            break;
                }
            }
        }
        function deleteRow(tableID) {
            try {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;
            for(var i=0; i<rowCount; i++) {
                var row = table.rows[i];
                var chkbox = row.cells[0].childNodes[0];
                if(null != chkbox && true == chkbox.checked) {
                    if(rowCount <= 1) {
                        alert("Cannot delete all the rows.");
                        break;
                    }
                    table.deleteRow(i);
                    rowCount--;
                    i--;
                }
            }
            }catch(e) {
                alert(e);
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

</body>

</html>
