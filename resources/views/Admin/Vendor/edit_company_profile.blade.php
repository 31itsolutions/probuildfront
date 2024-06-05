<!DOCTYPE html>
<!--
Template Name: Frest HTML Admin Template
Author: :Pixinvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://1.envato.market/pixinvent_portfolio
Renew Support: https://1.envato.market/pixinvent_portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<!-- Mirrored from www.pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/html/ltr/vertical-menu-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Aug 2021 13:05:15 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description"
        content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Admin-Home</title>

    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">
    <link href="{{ asset('app-assets/images/ico/apple-icon-120.html') }}" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon"
        href="https://www.pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link href="{{ asset('app-assets/vendors/css/vendors.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/vendors/css/charts/apexcharts.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/vendors/css/extensions/swiper.min.css') }}" rel="stylesheet">
    <!-- END: Vendor CSS-->
    {{-- toggle --}}
    
     <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

        {{-- google map --}}
<script src="https://api.tiles.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.js"></script>
<link
href="https://api.tiles.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.css"
rel="stylesheet" />

    <!-- BEGIN: Theme CSS-->
    <link href="{{ asset('app-assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/bootstrap-extended.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/colors.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/components.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/themes/dark-layout.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/themes/semi-dark-layout.min.css') }}" rel="stylesheet">

    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/pages/dashboard-ecommerce.min.css') }}" rel="stylesheet">

    <!-- END: Page CSS-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


    <!-- BEGIN: Custom CSS-->
    <link href="{{ asset('assets/css/adminstyle.css') }}" rel="stylesheet">

    <!-- END: Custom CSS-->


</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
@include('Admin.admin_layout.header')




                


                    <div class="row ">
                            <!-- Detail Starts -->

                            <div class="col-md-12 card">
                            <div class = "back-option ml-1 mt-1">     
                                
                            <h1><a class="" href="{{ route('admin.home') }}">Home</a> <i class="fas fa-chevron-right"></i> <a class="" href="{{ route('vendor_accounts') }}">Vendor Accounts </a> 
                             <i class="fas fa-chevron-right"></i> <a class="" href="{{ route('company_profile', $vendor_account->id) }}">Company Profile </a></h1>
                           
                            </div>

                            <div  class = "cu_header row mx-1 mt-1">
                            <div class = "col-4 px-0 header-cu">
                            <a href = "{{route('vendor_account', $vendor_account->id)}}">
                            <h1 >Profile Details</h1>
                            </a>

                            </div>
                            <div class = "col-4 px-0 header-cu">
                            <a href = "{{route('company_profile', $vendor_account->id)}}">
                            <h1 class = "cu_active">Company Details</h1>
                            </a>

                            </div>
                              
                            <div class = "col-4 px-0 header-cu">
                            <a href = "{{route('tendor_detail', $vendor_account->id)}}">
                            <h1>Tender Details</h1>
                            </a>

                            </div>
                            </div>
                              


              
<form action = "{{ route('update_business_admin', $business_id->id) }}" method = "POST" enctype="multipart/form-data" >
    @csrf   

  <div class="pack-head   m-2">
                                <div>
                                    <h1>Edit Business Details</h1>
                                    </div>
                                      

</div>



                          <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="mt-1">

                @if (session('SuccessMsg'))

                <div class="alert alert-warning alert-dismissible fade show" role="alert">

                    {{ session('SuccessMsg') }}

                </div>
                @endif

            </div>
        </div>
    </div>


<div class  = "border">


                        <div class = "row mt-1 ml-2">
                            <div class = "col-sm-12">
                            <div class = "mt-0 acc-head ">
                            {{-- <p>Account Status</p> --}}
                             <label for="staticEmail" class="col-form-label">Business Status</label>

                            </div>
                                <div class = "mb-1  status_select">
                                <select name = "status"  class="form-control">
                               @if($business_id->status == 1)
                                 <option selected value = "1">active</option>
                                 @else
                                 <option selected value = "0">de-active</option>

                                 @endif
 
                                 <option value = "1">Active</option>
                                <option value = "0">De-active</option>
                                </select>
                            </div>
                             
                      
                            </div>
                            </div>




                               <div class  = "border">
                            <div class = "row mt-1 mx-2 mb-2">
                            <div class = "col-sm-6">
                                   <label for="staticEmail" class="col-form-label">Business Document</label>

                                  <div class="custom-file">
                               <input type="file" class="custom-file-input" name ="business_document" id="validatedCustomFile" >
                                  <label class="custom-file-label" for="validatedCustomFile">{{$business_id->business_document}}</label>
                               <div class="invalid-feedback">Example invalid custom file feedback</div>
                               </div>
                               </div>
                                                           <div class = "col-sm-6">


                                   <label for="staticEmail" class="col-form-label">Business Brochure</label>
                                      <div class="custom-file">
                               <input type="file" class="custom-file-input" name ="business_brochure" id="validatedCustomFile" >
                                  <label class="custom-file-label" for="validatedCustomFile">{{$business_id->business_brochure}}</label>
                               <div class="invalid-feedback">Example invalid custom file feedback</div>
                               </div>


                            </div>
                            </div>
                            </div>


  <div class="pack-head   ml-2">
                               
                                      <div class = "mt-1">
                                    <h1> Add Business</h1>
                                    </div>

</div>



             <div class="form-group row mx-1" >
                        <div class = "col-md-6">
                                  <label for="staticEmail" class="col-form-label">Business Title</label>
                                 <div class="">
                                 <input type="text" name = "business_title" value = "{{$business_id->business_title}}"  class="form-control" id="staticEmail">
                                 </div>
                                 </div>
                                 {{-- </div> --}}


                                              {{-- <div class="form-group row"> --}}
                        <div class = "col-md-6">
                                  <label for="staticEmail" class="col-form-label">Bussiness Category</label>
                                 <div class="">
                                      <select id="inputState" name="business_category" class="form-control">
                                <option selected>{{$business_id->business_category}}</option>
                                   @foreach($sub_category_type as $item)

                                <option>{{ $item->sub_category }}</option>
                                @endforeach
                    
                            </select>
                                 </div>
                                 </div>
                                 </div>


                                 
             <div class="form-group row mx-1" >
                        <div class = "col-md-12">
                                  <label for="staticEmail" class="col-form-label">Bussiness Description</label>
                                 <div class="">
                                 <input type="text" style = "height:70px;" value = "{{$business_id->business_description}}" name = "business_description"   class="form-control" id="staticEmail">
                                 </div>
                                 </div>
                                 </div>



                                 </div>











                                 {{-- add product image --}}


                                  {{-- product --}}




  
  


                                 {{-- address --}}


                          

    @csrf
       @if($location == 0)

     @else    
<div class  = "border mt-1">
  <div class="pack-head   ml-2">
                               
                                      <div class = "mt-1">
                                    <h1> Address Information</h1>
                                    </div>

</div>




             <div class="form-group row mx-1" >
                        <div class = "col-md-6">
                                  <label for="staticEmail" class="col-form-label">Area</label>
                                 <div class="">
                                 <input type="text" name = "area" value = "{{$business_id->location}}"  class="form-control" id="staticEmail">
                                 </div>
                                 </div>
                                 {{-- </div> --}}


                                              {{-- <div class="form-group row"> --}}
                        <div class = "col-md-6">
                                  <label for="staticEmail" class="col-form-label">Province</label>
                                 <div class="">
                                 <input type="text" name = "province" value = "{{$business_id->city}}"   class="form-control" id="staticEmail">
                                 </div>
                                 </div>
                                 </div>


                                 
             <div class="form-group row mx-1" >
                        <div class = "col-md-6">
                                  <label for="staticEmail" class="col-form-label">Country</label>
                                 <div class="">
                                 <input type="text" name = "country" value = "{{$business_id->country}}"    class="form-control" id="staticEmail">
                                 </div>
                                 </div>

                                     <div class = "col-md-6">
                                  <label for="staticEmail" class="col-form-label">Lat</label>
                                 <div class="">
                                 <input type="text"  name = "lat" value = "{{$business_id->lat}}"    class="form-control" id="staticEmail">
                                 </div>
                                 </div>
                                 </div>


                                        <div class="form-group row mx-1" >
                        <div class = "col-md-12">
                                  <label for="staticEmail" class="col-form-label">Lang</label>
                                 <div class="">
                                 <input type="text"  name = "lang" value = "{{$business_id->lang}}"    class="form-control" id="staticEmail">
                                 </div>
                                 </div>
                                 </div>



                                 </div>

                                 @endif


                             @if($contact == 0)

                             @else

<div class  = "border mt-1">
  <div class="pack-head   ml-2">
                               
                                      <div class = "mt-1">
                                    <h1> Contact Information</h1>
                                    </div>

</div>




             <div class="form-group row mx-1" >
                        <div class = "col-md-6">
                                  <label for="staticEmail" class="col-form-label">Email</label>
                                 <div class="">
                                 <input type="text" name = "email" value = "{{$business_id->email}}"   class="form-control" id="staticEmail">
                                 </div>
                                 </div>
                                 {{-- </div> --}}


                                              {{-- <div class="form-group row"> --}}
                        <div class = "col-md-6">
                                  <label for="staticEmail" class="col-form-label">Mobile.No</label>
                                 <div class="">
                                 <input type="text" name = "mobile" value = "{{$business_id->mobile}}"   class="form-control" id="staticEmail">
                                 </div>
                                 </div>
                                 </div>


                                 
             <div class="form-group row mx-1" >
                        <div class = "col-md-6">
                                  <label for="staticEmail" class="col-form-label">Website</label>
                                 <div class="">
                                 <input type="text" name = "website" value = "{{$business_id->website}}"    class="form-control" id="staticEmail">
                                 </div>
                                 </div>

                                     <div class = "col-md-6">
                                  <label for="staticEmail" class="col-form-label">Fax.No</label>
                                 <div class="">
                                 <input type="text"  name = "fax_no" value = "{{$business_id->fax_no}}"    class="form-control" id="staticEmail">
                                 </div>
                                 </div>
                                 </div>


                                        



                                 </div>

                                 @endif



@if($social_media == 0)
@else
<div class  = "border mt-1">
  <div class="pack-head   ml-2">
                               
                                      <div class = "mt-1">
                                    <h1> Social Information</h1>
                                    </div>

</div>




             <div class="form-group row mx-1" >
                        <div class = "col-md-6">
                                  <label for="staticEmail" class="col-form-label">Instagram</label>
                                 <div class="">
                                 <input type="text" name = "instagram"  value = "{{$business_id->instagram}}"  class="form-control" id="staticEmail">
                                 </div>
                                 </div>
                                 {{-- </div> --}}


                                              {{-- <div class="form-group row"> --}}
                        <div class = "col-md-6">
                                  <label for="staticEmail" class="col-form-label">Twitter</label>
                                 <div class="">
                                 <input type="text" name = "twitter" value = "{{$business_id->twitter}}"   class="form-control" id="staticEmail">
                                 </div>
                                 </div>
                                 </div>


                                 
             <div class="form-group row mx-1" >
                        <div class = "col-md-6">
                                  <label for="staticEmail" class="col-form-label">LinkedIn</label>
                                 <div class="">
                                 <input type="text" name = "linkedin" value = "{{$business_id->linkedin}}"    class="form-control" id="staticEmail">
                                 </div>
                                 </div>

                                     <div class = "col-md-6">
                                  <label for="staticEmail" class="col-form-label">facebook</label>
                                 <div class="">
                                 <input type="text"  name = "facebook" value = "{{$business_id->facebook}}"    class="form-control" id="staticEmail">
                                 </div>
                                 </div>
                                 </div>



                                 </div>

                                 @endif



                                 {{-- time table --}}

                                                                        {{-- media --}}

<div class  = "border mt-1 mb-1">
  <div class="pack-head   ml-2">
                               
                                      <div class = "mt-1">
                                    <h1> Time Information</h1>
                                    </div>

</div>




             <div class="form-group row mx-1" >
                        <div class = "col-md-6">
                                  <label for="staticEmail" class="col-form-label">Monday From</label>
                                 <div class="">
                                  <select id="inputState" name="monday_from" class="form-control">
                                <option selected >{{$business_id->monday_from}}</option>
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
                            </select>
                                 </div>
                                 </div>
                                 {{-- </div> --}}


                                              {{-- <div class="form-group row"> --}}
                        <div class = "col-md-6">
                                  <label for="staticEmail" class="col-form-label">Monday To</label>
                                 <div class="">
                                    <select id="inputState" name="monday_to" class="form-control">
                                <option selected >{{$business_id->monday_to}}</option>
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
                            </select>
                                 </div>
                                 </div>
                                 </div>


                                 
             <div class="form-group row mx-1" >
                        <div class = "col-md-6">
                                  <label for="staticEmail" class="col-form-label">Tuesday From</label>
                                 <div class="">
                                  <select id="inputState" name="tuesday_from" class="form-control">
                                <option selected >{{$business_id->tuesday_from}}</option>
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
                            </select>
                                 </div>
                                 </div>

                                     <div class = "col-md-6">
                                  <label for="staticEmail" class="col-form-label">Tuesday To</label>
                                 <div class="">
                                   <select id="inputState" name="tuesday_to" class="form-control">
                                <option selected >{{$business_id->tuesday_to}}</option>
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
                            </select>
                                 </div>
                                 </div>
                                 </div>

 <div class="form-group row mx-1" >
                        <div class = "col-md-6">
                                  <label for="staticEmail" class="col-form-label">Wednesday From</label>
                                 <div class="">
                                  <select id="inputState" name="wednesday_from" class="form-control">
                                <option selected >{{$business_id->wednesday_from}}</option>
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
                            </select>
                                 </div>
                                 </div>

                                     <div class = "col-md-6">
                                  <label for="staticEmail" class="col-form-label">Wednesday To</label>
                                 <div class="">
                                   <select id="inputState" name="wednesday_to" class="form-control">
                                <option selected >{{$business_id->wednesday_to}}</option>
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
                            </select>
                                 </div>
                                 </div>
                                 </div>
 <div class="form-group row mx-1" >
                        <div class = "col-md-6">
                                  <label for="staticEmail" class="col-form-label">Thursday From</label>
                                 <div class="">
                                 <select id="inputState" name="thursday_from" class="form-control">
                                <option selected >{{$business_id->thursday_from}}</option>
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
                            </select>
                                 </div>
                                 </div>

                                     <div class = "col-md-6">
                                  <label for="staticEmail" class="col-form-label">Thursday To</label>
                                 <div class="">
                                   <select id="inputState" name="thursday_to" class="form-control">
                                <option selected >{{$business_id->thursday_to}}</option>
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
                            </select>
                                 </div>
                                 </div>
                                 </div>
 <div class="form-group row mx-1" >
                        <div class = "col-md-6">
                                  <label for="staticEmail" class="col-form-label">Friday From</label>
                                 <div class="">
                                  <select id="inputState" name="friday_from" class="form-control">
                                <option selected >{{$business_id->friday_from}}</option>
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
                            </select>
                                 </div>
                                 </div>

                                     <div class = "col-md-6">
                                  <label for="staticEmail" class="col-form-label">Friday To</label>
                                 <div class="">
                                   <select id="inputState" name="friday_to" class="form-control">
                                <option selected >{{$business_id->friday_to}}</option>
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
                            </select>
                                 </div>
                                 </div>
                                 </div>
 <div class="form-group row mx-1" >
                        <div class = "col-md-6">
                                  <label for="staticEmail" class="col-form-label">Saturday From</label>
                                 <div class="">
                                  <select id="inputState" name="saturday_from" class="form-control">
                                <option selected >{{$business_id->saturday_from}}</option>
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
                            </select>
                                 </div>
                                 </div>

                                     <div class = "col-md-6">
                                  <label for="staticEmail" class="col-form-label">Saturday To</label>
                                 <div class="">
                                   <select id="inputState" name="saturday_to" class="form-control">
                                <option selected >{{$business_id->saturday_to}}</option>
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
                            </select>
                                 </div>
                                 </div>
                                 </div>
 <div class="form-group row mx-1" >
                        <div class = "col-md-6">
                                  <label for="staticEmail" class="col-form-label">Sunday From</label>
                                 <div class="">
                                  <select id="inputState" name="sunday_from" class="form-control">
                                <option selected >{{$business_id->sunday_from}}</option>
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
                            </select>
                                 </div>
                                 </div>

                                     <div class = "col-md-6">
                                  <label for="staticEmail" class="col-form-label">Sunday To</label>
                                 <div class="">
                                   <select id="inputState" name="sunday_to" class="form-control">
                                <option selected >{{$business_id->sunday_to}}</option>
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
                            </select>
                                 </div>
                                 </div>
                                 </div>


                                        


                        <div class = "row">
                           <div class = "col-md-3">
                                 <button  type = "submit" class="btn btn-sm btn-primary glow mt-2 ml-2 mb-3 mt-md-2 ">Update details</button>
                            </div>
                        </div>

                                 </div>
</form>






              
<div class  = "border mt-1">
  <div class="pack-head   ml-2">
                               
                                      <div class = "mt-1">
                                    <h1> Add Product Information</h1>
                                    </div>

</div>

@foreach($product_detail as $item)
<form action = "{{ route('update_product_admin', $item->id) }}" method = "POST" >
    @csrf




             <div class="form-group row mx-1" >
                        <div class = "col-md-6">
                                  <label for="staticEmail" class="col-form-label">Product Name</label>
                                 <div class="">
                                 <input type="text" name = "product_name"  value = "{{$item->product_name}}" class="form-control" id="staticEmail">
                                 </div>
                                 </div>
                                 {{-- </div> --}}


                    


                                              <div class = "col-md-6">
                                  <label for="staticEmail" class="col-form-label">Product Category </label>
                                 <div class="">
                                 <select id="inputState" name="product_category" class="form-control">
                                    <option selected>{{$item->product_category}} </option>
                                    @foreach($sub_category_type as $itemone)
    
                                    <option>{{ $itemone->sub_category }}</option>
                                    @endforeach
                        
                                </select>
                                 </div>
                                 </div>
                                 </div>


                                 
             <div class="form-group row mx-1" >
                        <div class = "col-md-6">
                                  <label for="staticEmail" class="col-form-label">Product Price To </label>
                                 <div class="">
                                 <input type="text"  name = "product_price_to"   value = "{{$item->product_price_to}}"   class="form-control" id="staticEmail">
                                 </div>
                                 </div>

                     
                                               {{-- <div class="form-group row"> --}}
                        <div class = "col-md-6">
                                  <label for="staticEmail" class="col-form-label">Product Price From</label>
                                 <div class="">
                                 <input type="text" name = "product_price_from" value = "{{$item->product_price_from}}"   class="form-control" id="staticEmail">
                                 </div>
                                 </div>
                                 </div>


                                <div class="form-group row mx-1" >
                        <div class = "col-md-12">
                                  <label for="staticEmail" class="col-form-label">Product Description </label>
                                 <div class="">
                                 <input type="text" style = "height:70px;" value = "{{$item->product_description}}" name = "product_description"   class="form-control" id="staticEmail">
                                 </div>
                                 </div>
                                 </div>


                             <div class = "d-flex ml-1">
                                 <button  type = "submit" class="btn btn-sm btn-primary glow mt-1 mb-1 ml-2 mt-md-2 ">Update </button>
                                 {{-- <button  type = "submit" class="btn btn-sm btn-danger glow mt-1 mb-1 ml-2 mt-md-2 ">Delete </button> --}}
                                 </div>
                                
                                 </form>


                                  <button class="btn btn-sm btn-danger delete_product glow text-light r-0 md-2 mb-1">
                                        
                                    
                                        <form method="POST" id="delete-form-{{ $item->id }}"
                                            action="{{ route('delete_product',$item->id) }}"
                                            style="display: none">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
    
                                        </form>
    
                                        <a class="  action text-light" onclick="if (confirm('Are you sure want to delete ?')){
                                         event.preventDefault(); //redirect without loading
                                        document.getElementById('delete-form-{{ $item->id }}').submit();
                                        }
                                        else
                                         {
                                           event.preventDefault();
              
                                         } " class="action text-dark">Delete
    
    
    
                                        </a>
                                    
                                    
                                    
                                    
                                    </button>

                                 @endforeach

                         
                          @if($product_count>=$product)
                          @else

                           <div class="pack-head   ml-2">
                               
                                      <div class = "mt-1">
                                    <h1> Add New Products</h1>
                                    </div>

</div>


<form action = "{{ route('add_more_product_admin', $business_id->id) }}" method = "POST" >
    @csrf




             <div class="form-group row mx-1" >
                        <div class = "col-md-6">
                                  <label for="staticEmail" class="col-form-label">Product Name</label>
                                 <div class="">
                                 <input type="text" name = "product_name"  class="form-control" id="staticEmail">
                                 </div>
                                 </div>
                                 {{-- </div> --}}


                                              {{-- <div class="form-group row"> --}}
                        <div class = "col-md-6">
                                  <label for="staticEmail" class="col-form-label">Product Price From</label>
                                 <div class="">
                                 <input type="text" name = "product_price_from"  class="form-control" id="staticEmail">
                                 </div>
                                 </div>
                                 </div>


                                 
             <div class="form-group row mx-1" >
                        <div class = "col-md-6">
                                  <label for="staticEmail" class="col-form-label">Product Price To </label>
                                 <div class="">
                                 <input type="text"  name = "product_price_to"   class="form-control" id="staticEmail">
                                 </div>
                                 </div>

                                  <div class = "col-md-6">
                                  <label for="staticEmail" class="col-form-label">Product Category </label>
                                 <div class="">
                                 <select id="inputState" name="product_category" class="form-control">
                                    <option selected>Choose...</option>
                                       @foreach($sub_category_type as $item)
    
                                    <option>{{ $item->sub_category }}</option>
                                    @endforeach
                        
                                </select>
                                 </div>
                                 </div>
                                 </div>



                                           <div class="form-group row mx-1" >
                        <div class = "col-md-12">
                                  <label for="staticEmail" class="col-form-label">Product Description </label>
                                 <div class="">
                                 <input type="text" style = "height:70px;" name = "product_description"   class="form-control" id="staticEmail">
                                 </div>
                                 </div>
                                 </div>


                                 <button  type = "submit" class="btn btn-sm btn-primary glow mt-1 mb-2 ml-2 mt-md-2 ">Add More product</button>
                                

                                 </form>

                          @endif

                   </div>


                               






                                 {{-- add product image --}}


                                  {{-- product --}}

@foreach($image_detail as $item)




                                 
                           <div class  = "border mt-1 mb-2">


                                       <div class="pack-head   ml-2 mb-2">
                                 
                                        <div class = "mt-1">
                                      <h1> Add Product Images</h1>
                                      </div>
                                      </div>

                                  
                            <div class = "row ml-2">
                             <div class = "col-md-6">

                                 <form action = "{{ route('update_image_admin', $item->id) }}" method = "POST" enctype="multipart/form-data">
                                      @csrf
  
                               <div class="custom-file">
                               <input type="file" class="custom-file-input" value = "{{$item->gallery_image}}" name ="gallery_image" id="validatedCustomFile" >
                                  <label class="custom-file-label" for="validatedCustomFile">{{$item->gallery_image}}</label>
                               <div class="invalid-feedback">Example invalid custom file feedback</div>
                               </div>


                                    <div class = "d-flex mr-1">
                                 <button  type = "submit" class="btn btn-sm btn-primary glow mt-1 mb-1  mt-md-2 ">Update </button>
                                 {{-- <button  type = "submit" class="btn btn-sm btn-danger glow mt-1 mb-1 ml-2 mt-md-2 ">Delete </button> --}}
                                 </div>
                                 </form>


                                  <button class="btn btn-sm btn-danger delete_product_image glow text-light r-0 md-2  mb-1">
                                        
                                    
                                        <form method="POST" id="delete-form-{{ $item->id }}"
                                            action="{{ route('delete_image',$item->id) }}"
                                            style="display: none">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
    
                                        </form>
    
                                        <a class="  action text-light" onclick="if (confirm('Are you sure want to delete ?')){
                                         event.preventDefault(); //redirect without loading
                                        document.getElementById('delete-form-{{ $item->id }}').submit();
                                        }
                                        else
                                         {
                                           event.preventDefault();
              
                                         } " class="action text-dark">Delete
    
    
    
                                        </a>
                                    
                                    
                                    
                                    
                                    </button>





                               </div>
                                <div class = "col-md-6">

                                <img class="header-img ml-3" width = "150px" height = "100px" src="{{asset('assets/images/'. $item->gallery_image)}}">
                                </div>
                                </div>

  
                           

 
    </div>

     </form>
     @endforeach
   

   @if($image_count>=$gallery_image)

   @else




<form action = "{{ route('update_more_image_admin', $business_id->id) }}" method = "POST" enctype="multipart/form-data">
    @csrf
                                 
<div class  = "border mt-1 mb-2">


    <div class="pack-head   ml-2 mb-2">
                                 
                                        <div class = "mt-1">
                                      <h1> Add More Product Images</h1>
                                      </div>
                                      </div>
<div class = "row ml-2">
<div class = "col-md-5">
  
                               <div class="custom-file">
                               <input type="file" class="custom-file-input" name ="gallery_image" id="validatedCustomFile" >
                                  <label class="custom-file-label" for="validatedCustomFile">Choose Image...</label>
                               <div class="invalid-feedback">Example invalid custom file feedback</div>
                               </div>

                               </div>
                               </div>


  
  
                               <button  type = "submit" class="btn btn-sm btn-primary glow mt-1 mb-1 ml-2 mt-md-2 ">Add Product Image</button>


 
    </div>

     </form>

   @endif



   










                             



                               

                            </div>

                    </div>
                   </form>

                </section>
                <!-- Dashboard Ecommerce ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->


    
 {{--------------------------------------------------------  --}}
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
          url: "{{ route('change_status_vendor') }}",
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
    
    
    

    
    
        {{-- ------------------------------------------------------- --}}


    <!-- BEGIN: Customizer-->
    <div class="customizer d-none d-md-block"><a class="customizer-toggle" href="javascript:void(0);"><i
                class="bx bx-cog bx bx-spin white"></i></a>
        <div class="customizer-content p-2">
            <h4 class="text-uppercase mb-0">Theme Customizer</h4>
            <small>Customize & Preview in Real Time</small>
            <a href="javascript:void(0)" class="customizer-close">
                <i class="bx bx-x"></i>
            </a>
            <hr>
            <!-- Theme options starts -->
            <h5 class="mt-1">Theme Layout</h5>
            <div class="theme-layouts">
                <div class="d-flex justify-content-start">
                    <div class="mx-50">
                        <fieldset>
                            <div class="radio">
                                <input type="radio" name="layoutOptions" value="false" id="radio-light"
                                    class="layout-name" data-layout="" checked>
                                <label for="radio-light">Light</label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="mx-50">
                        <fieldset>
                            <div class="radio">
                                <input type="radio" name="layoutOptions" value="false" id="radio-dark"
                                    class="layout-name" data-layout="dark-layout">
                                <label for="radio-dark">Dark</label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="mx-50">
                        <fieldset>
                            <div class="radio">
                                <input type="radio" name="layoutOptions" value="false" id="radio-semi-dark"
                                    class="layout-name" data-layout="semi-dark-layout">
                                <label for="radio-semi-dark">Semi Dark</label>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
            <!-- Theme options starts -->
            <hr>

            <!-- Menu Colors Starts -->
            <div id="customizer-theme-colors">
                <h5>Menu Colors</h5>
                <ul class="list-inline unstyled-list">
                    <li class="color-box bg-primary selected" data-color="theme-primary"></li>
                    <li class="color-box bg-success" data-color="theme-success"></li>
                    <li class="color-box bg-danger" data-color="theme-danger"></li>
                    <li class="color-box bg-info" data-color="theme-info"></li>
                    <li class="color-box bg-warning" data-color="theme-warning"></li>
                    <li class="color-box bg-dark" data-color="theme-dark"></li>
                </ul>
                <hr>
            </div>
            <!-- Menu Colors Ends -->
            <!-- Menu Icon Animation Starts -->
            <div id="menu-icon-animation">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="icon-animation-title">
                        <h5 class="pt-25">Icon Animation</h5>
                    </div>
                    <div class="icon-animation-switch">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" checked id="icon-animation-switch">
                            <label class="custom-control-label" for="icon-animation-switch"></label>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <!-- Menu Icon Animation Ends -->
            <!-- Collapse sidebar switch starts -->
            <div class="collapse-sidebar d-flex justify-content-between align-items-center">
                <div class="collapse-option-title">
                    <h5 class="pt-25">Collapse Menu</h5>
                </div>
                <div class="collapse-option-switch">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="collapse-sidebar-switch">
                        <label class="custom-control-label" for="collapse-sidebar-switch"></label>
                    </div>
                </div>
            </div>
            <!-- Collapse sidebar switch Ends -->
            <hr>

            <!-- Navbar colors starts -->
            <div id="customizer-navbar-colors">
                <h5>Navbar Colors</h5>
                <ul class="list-inline unstyled-list">
                    <li class="color-box bg-white border selected" data-navbar-default=""></li>
                    <li class="color-box bg-primary" data-navbar-color="bg-primary"></li>
                    <li class="color-box bg-success" data-navbar-color="bg-success"></li>
                    <li class="color-box bg-danger" data-navbar-color="bg-danger"></li>
                    <li class="color-box bg-info" data-navbar-color="bg-info"></li>
                    <li class="color-box bg-warning" data-navbar-color="bg-warning"></li>
                    <li class="color-box bg-dark" data-navbar-color="bg-dark"></li>
                </ul>
                <small><strong>Note :</strong> This option with work only on sticky navbar when you scroll page.</small>
                <hr>
            </div>
            <!-- Navbar colors starts -->
            <!-- Navbar Type Starts -->
            <h5>Navbar Type</h5>
            <div class="navbar-type d-flex justify-content-start">
                <div class="hidden-ele mx-50">
                    <fieldset>
                        <div class="radio">
                            <input type="radio" name="navbarType" value="false" id="navbar-hidden">
                            <label for="navbar-hidden">Hidden</label>
                        </div>
                    </fieldset>
                </div>
                <div class="mx-50">
                    <fieldset>
                        <div class="radio">
                            <input type="radio" name="navbarType" value="false" id="navbar-static">
                            <label for="navbar-static">Static</label>
                        </div>
                    </fieldset>
                </div>
                <div class="mx-50">
                    <fieldset>
                        <div class="radio">
                            <input type="radio" name="navbarType" value="false" id="navbar-sticky" checked>
                            <label for="navbar-sticky">Fixed</label>
                        </div>
                    </fieldset>
                </div>
            </div>
            <hr>
            <!-- Navbar Type Starts -->

            <!-- Footer Type Starts -->
            <h5>Footer Type</h5>
            <div class="footer-type d-flex justify-content-start">
                <div class="mx-50">
                    <fieldset>
                        <div class="radio">
                            <input type="radio" name="footerType" value="false" id="footer-hidden">
                            <label for="footer-hidden">Hidden</label>
                        </div>
                    </fieldset>
                </div>
                <div class="mx-50">
                    <fieldset>
                        <div class="radio">
                            <input type="radio" name="footerType" value="false" id="footer-static" checked>
                            <label for="footer-static">Static</label>
                        </div>
                    </fieldset>
                </div>
                <div class="mx-50">
                    <fieldset>
                        <div class="radio">
                            <input type="radio" name="footerType" value="false" id="footer-sticky">
                            <label for="footer-sticky" class="">Sticky</label>
                        </div>
                    </fieldset>
                </div>
            </div>
            <!-- Footer Type Ends -->
            <hr>

            <!-- Card Shadow Starts-->
            <div class="card-shadow d-flex justify-content-between align-items-center py-25">
                <div class="hide-scroll-title">
                    <h5 class="pt-25">Card Shadow</h5>
                </div>
                <div class="card-shadow-switch">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" checked id="card-shadow-switch">
                        <label class="custom-control-label" for="card-shadow-switch"></label>
                    </div>
                </div>
            </div>
            <!-- Card Shadow Ends-->
            <hr>

            <!-- Hide Scroll To Top Starts-->
            <div class="hide-scroll-to-top d-flex justify-content-between align-items-center py-25">
                <div class="hide-scroll-title">
                    <h5 class="pt-25">Hide Scroll To Top</h5>
                </div>
                <div class="hide-scroll-top-switch">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="hide-scroll-top-switch">
                        <label class="custom-control-label" for="hide-scroll-top-switch"></label>
                    </div>
                </div>
            </div>
            <!-- Hide Scroll To Top Ends-->
        </div>

    </div>
    <!-- End: Customizer-->

    {{-- <!-- Buynow Button-->
    <div class="buy-now"><a href="https://1.envato.market/frest_admin" target="_blank" class="btn btn-danger">Buy Now</a>

    </div> --}}
    <!-- demo chat-->
    <div class="widget-chat-demo">
        <!-- widget chat demo footer button start -->
        {{-- <button class="btn btn-primary chat-demo-button glow px-1"><i class="livicon-evo"
    data-options="name: comments.svg; style: lines; size: 24px; strokeColor: #fff; autoPlay: true; repeat: loop;"></i></button> --}}
        <!-- widget chat demo footer button ends -->
        <!-- widget chat demo start -->
        <div class="widget-chat widget-chat-demo d-none">
            <div class="card mb-0">
                <div class="card-header border-bottom p-0">
                    <div class="media m-75">
                        <a href="JavaScript:void(0);">
                            <div class="avatar mr-75">
                                <img src="../../../app-assets/images/portrait/small/avatar-s-2.jpg" alt="avtar images"
                                    width="32" height="32">
                                <span class="avatar-status-online"></span>
                            </div>
                        </a>
                        <div class="media-body">
                            <h6 class="media-heading mb-0 pt-25"><a href="javaScript:void(0);">Kiara Cruiser</a></h6>
                            <span class="text-muted font-small-3">Active</span>
                        </div>
                    </div>
                    <div class="heading-elements">
                        <i class="bx bx-x widget-chat-close float-right my-auto cursor-pointer"></i>
                    </div>
                </div>
                <div class="card-body widget-chat-container widget-chat-demo-scroll">
                    <div class="chat-content">
                        <div class="badge badge-pill badge-light-secondary my-1">today</div>
                        <div class="chat">
                            <div class="chat-body">
                                <div class="chat-message">
                                    <p>How can we help? 😄</p>
                                    <span class="chat-time">7:45 AM</span>
                                </div>
                            </div>
                        </div>
                        <div class="chat chat-left">
                            <div class="chat-body">
                                <div class="chat-message">
                                    <p>Hey John, I am looking for the best admin template.</p>
                                    <p>Could you please help me to find it out? 🤔</p>
                                    <span class="chat-time">7:50 AM</span>
                                </div>
                            </div>
                        </div>
                        <div class="chat">
                            <div class="chat-body">
                                <div class="chat-message">
                                    <p>Stack admin is the responsive bootstrap 4 admin template.</p>
                                    <span class="chat-time">8:01 AM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer border-top p-1">
                    <form class="d-flex" onsubmit="widgetChatMessageDemo();" action="javascript:void(0);">
                        <input type="text" class="form-control chat-message-demo mr-75" placeholder="Type here...">
                        <button type="submit" class="btn btn-primary glow px-1"><i
                                class="bx bx-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <!-- widget chat demo ends -->

    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-left d-inline-block">2021 &copy; PIXINVENT</span><span
                class="float-right d-sm-inline-block d-none">Crafted with<i
                    class="bx bxs-heart pink mx-50 font-small-3"></i>by<a class="text-uppercase"
                    href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i
                    class="bx bx-up-arrow-alt"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script type="text/javascript" src="{{ URL::asset('app-assets/vendors/js/vendors.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ URL::asset('app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js') }}">
    </script>

    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script type="text/javascript" src="{{ URL::asset('app-assets/vendors/js/extensions/swiper.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('app-assets/vendors/js/extensions/swiper.min.js') }}"></script>

    <!-- END: Page Vendor JS-->


    <!-- BEGIN: Theme JS-->
    <script type="text/javascript" src="{{ URL::asset('app-assets/js/scripts/configs/vertical-menu-light.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ URL::asset('app-assets/js/core/app-menu.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('app-assets/js/core/app.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('app-assets/js/scripts/components.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('app-assets/js/scripts/footer.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('app-assets/js/scripts/customizer.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <!-- END: Theme JS-->
    <script type="text/javascript" src="{{ URL::asset('app-assets/js/scripts/pages/dashboard-ecommerce.min.js') }}">
    </script>

    <!-- BEGIN: Page JS-->

</body>
<!-- END: Body-->

<!-- Mirrored from www.pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/html/ltr/vertical-menu-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Aug 2021 13:05:18 GMT -->

</html>