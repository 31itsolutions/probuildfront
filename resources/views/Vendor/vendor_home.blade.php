<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Vendor Home</title>
  {{-- Css from assets --}}
  <link href="{{ asset('assets/css/company_profile.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/vendor.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">

{{-- bootsnipp CDN link --}}


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">


<!------ Include the above in your HEAD tag ---------->

   {{-- toggle --}}
     <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="{{ asset('app-assets/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('app-assets/css/bootstrap-extended.min.css') }}" rel="stylesheet">
<link href="{{ asset('app-assets/css/colors.min.css') }}" rel="stylesheet">
<!-- <link href="{{ asset('app-assets/css/components.min.css') }}" rel="stylesheet"> -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">

    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>

  {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">

  {{-- boot icon --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" integrity="sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU" crossorigin="anonymous">

        {{-- google map --}}
<script src="https://api.tiles.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.js"></script>
<link
href="https://api.tiles.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.css"
rel="stylesheet" />

 
    <!-- Fontawsome icon CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

<style type="text/css">
  .custom-control-input:checked~.custom-control-label::before{
    background-color: #F4E059;
  }
  .custom-switch.custom-switch-glow .custom-control-input:not(:disabled):checked~.custom-control-label::before{
    box-shadow:none !important;
  }
  
</style>

<style>
    
    .tender_request {
    position: absolute;
    bottom: 5%;
    right: 7%;
    z-index: 999;
} 

 @media (max-width: 600px) {
  .this-img{
    margin-right: 35% !important;
  }
  .logo_bottom{
    margin-left: 4%;
  }
 }
 @media (min-width: 991px) {
.profile_menu .dropdown img{
      margin-right:25px;
  }
  .profile_menu .add_buisness a{
      margin-top:-12px;
  }
}
  @media (max-width: 520px) {
     .profile_menu .dropdown-menu {
    margin-top: 4px !important;
    left: -5px !important;
}
.profile_menu .dropdown img {
    height: 49px;
    width: 49px;
}
}
</style>

</head>




<body id="body_popup">


  <div id="ac-wrapper" style='display:none'>
    {{-- <input type="submit" name="submit" value="Submit" onClick="PopUp('hide')" /> --}}

<div id="popup"  style="margin-top: 25% !important;">
<div class="my_plan">
<p>My Plan</p>
</div>
<div class="package_expired" style="margin-top: 2% !important;">
<p>Your Package has Expired, Please Upgrade</p><br>
<a href="{{ route('vendor_package') }}" class="btn-allign" >
<button >Upgrade</button>
</a>
</div>

</div>
</div>

<div id="bg_expired">



  <div class="container-fluid bg-no-overlay"   style="background-image:url({{env('IMG_URL').'upload_images/banner_image/'.$data['banner_image']['home_image']}});    background-repeat: no-repeat;
  background-size: cover; background-position: center center;position:relative;     left: 0;right: 0;color: #fff;  height: 471px; width:100%;">


<div class="tender_request">
                    <div class="containersss">
                        <h1 class="btn" style="margin-top: -155px; background-color: #f4e059;font-weight: 600;padding-left: 19px;padding-right: 17px;margin-left: 6px;text-decoration: none;"><a style="color:black;" href="#MyBusiness">My Business</a></h1>
                    </div>
                </div>


<div class = "row">
<div class ="col-md-12">

<div class = "logo" style="left:1.8%;"> 
<a href="{{ route('index') }}">
    <img class="this-img logo-img " src="{{ asset('assets/images/logo.png') }}" alt="" style='margin-left:15% !important;'>
</a>
</div>




<div class = "profile_menu d-flex">
 <li class="nav-item dropdown vendor_home dmenu">
          <a class="nav-link " href="#" id="navbardrop" data-toggle="dropdown">
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

        @if($vendor_bl >= $business_listing) 
          <a  class="dropdown-item" href="{{route('vendor_package_monthly')}}">Add Business</a>
          @else
          <a class="dropdown-item"  href="{{route('add_business',$vendor->id)}}">Add Business</a>

          @endif 

                <a class = "dropdown-item" href="{{ route('vendor.logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"  >Logout</a>

                            <form id="logout-form" action="{{ route('vendor.logout') }}" method="POST" style="display: none;">
                             @csrf
                               </form>


                   



          </div>
        </li>


        <li class="add_buisness add_business_logined">

        @if($vendor_bl >= $business_listing) 
          <a class="header-btn" href="{{route('vendor_package_monthly')}}">Add Business</a>
          @else
          <a class="header-btn" href="{{route('add_business',$vendor->id)}}">Add Business</a>

          @endif 

        </li>
      


        </div>
</div>
</div>

<div class = "row">

<div class = "col-md-12">

<div class = "top_left_logo " style='margin-top:285px; left:5%;'>
<div class = "logo_bottom">
@if($vendor->profile_image == null)
<img class="logo-bottom" src="{{ asset('assets/images/default.png') }}" alt="">
@else
<img class="logo-bottom" src="{{ asset('upload_images/vendor_profile/'.$vendor->profile_image) }}" alt="">
@endif
</div>

<div class = "logo_info">



<div class = "logo_name">
  
<h1 style="font-size: 28px;padding-top:10px;padding-bottom:5px;margin-bottom:50%;">{{$vendor->name}} {{$vendor->lname}}</h1>
</div>




</div>
</div>



</div>


</div>
</div>
</div>











<style>
                                        @media only screen and (max-width: 767px) {
                                                    .containerss {
                                                        display: block !important;
                                                    }
                                                    .containersss {
                                                        display: none !important;
                                                    }
                                                    }
                                                    @media (max-width: 767px){
                                                .right_tlc {
                                                    background-color: transparent!important;
                                                    border: 0px!important;
                                                }
                                              }
                                        </style>
                                         <style>
                        /* Apply shadow effect */

.shadowbox {
    /* Initial box shadow */
    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    /* Transition property for smooth effect */
    transition: box-shadow 0.3s ease;
  }

  /* Apply hover effect */
  .shadowbox:hover {
    /* Updated box shadow on hover */
    box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.3);
    /* Optionally, you can dim the color on hover by adjusting the background color or opacity */
    background-color: rgba(0, 0, 0, 0.1); /* For example, setting a semi-transparent black background */
    /* Or change the opacity */
    opacity: 0.8; /* For example, reducing the opacity to 80% */
  }


                        </style>


  <div class="right_tl right_tlc containerss" style="display:none;">
                    
                    <div class="mge_row" id="rfq">
                      
                            
                               
                                <h1 class="shadowbox " data-toggle="modal" data-target="#myModal" data-backdrop="false"><a style="color:black;" href="#MyBusiness"><b>My Business</b></a></h1>

</div>
</div>

<!-- ====================MOBILE VIEW Brochure end==================== -->

<br>


<div class  = "container ">

          
                                {{-- @include('flash::message') --}}
                                       
                                   <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class=" login_alert">
                    
                                            @if (session('success'))
                    
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                    
                                                {{ session('success') }}
                    
                                            </div>
                                            @endif
                    
                                        </div>
                                    </div>






                                    
                                </div>

     <div class="row " >
    <div class="col-md-12">

<div class = "row plan_row">
<div class = "col-md-12 ">

<div class = "plan_tl" id="expired">
<div class = "plan_br plan_col">
<div class = "plan_header">
<h1>My Plan</h1>
</div>

<div class = "plan_detail " style="padding-top: 2%;">


<div class = "plan_left">

<h1 style="margin-top: 2% !important;">{{$plan_detail}}</h1>

<p style="margin-top: -5% !important;">Exp in - {{  date('d-M-Y',strtotime($end_date))}}</p>
</div>

<div class = "plan_right">
<a style="padding: 11px 26px;margin-left: 7%;margin-top: 1% !important;display:none;" href = "{{route('vendor_package_monthly')}}">Upgrade</a>
</div>


</div>

</div>
</div>

</div>
</div>







<div class = "row body_col mt-4">
<div class = "col-md-12 ">

<div class = "body_tl">

<div class = "body_header">
<h1>My Profile</h1>
<a href = "{{route('vendor_profile_edit',$vendor->id)}}">Edit Profile</a>
</div>

<hr>

<div class = "body_form">
      
      <div class="row image_input" >    
        <div class="col-md-12 ">  
            <label for="exampleInputEmail1">Profile Image </label>

              {{-- <input type="file" class="form-control" name = "profile_image" readonly   value = "{{$vendor->profile_image}}" id="exampleInputEmail1" placeholder="First Name" > --}}
                @if($vendor->profile_image == null)
 <img class="logo-bottom" src="{{ asset('assets/images/default.png') }}" alt="" style="width: 75px;">
@else
 <img class="logo-bottom" src="{{ asset('upload_images/vendor_profile/'.$vendor->profile_image) }}" alt="" style="width: 75px;">
@endif
        </div>
    </div>
                               
<br>
 <div class="form-group">
    <label for="exampleInputEmail1">Full Name</label>
    <input type="text" class="form-control"   value = "{{$vendor->name}} {{$vendor->lname}}" id="exampleInputEmail1" placeholder="Enter email" readonly>
  </div>



 <div class="form-group">
    <label for="exampleInputEmail1">Email </label>
    <input type="email" class="form-control" value = "{{$vendor->email}}" id="exampleInputEmail1" placeholder=" Email" readonly>
  </div>

<br>

 <div class="form-group mt-5">
    <label for="exampleInputEmail1">Mobile No</label>
    <input type="text" class="form-control" value = "{{$vendor->number}}"  id="exampleInputEmail1" placeholder="Mobile No" readonly>
  </div>



 <div class="form-group">
    <label for="exampleInputEmail1">Area</label>
    <input type="text" class="form-control" value = "{{$vendor->address_1}}"  id="exampleInputEmail1" placeholder="Area" readonly>
  </div>



 <div class="form-group">
    <label for="exampleInputEmail1">City</label>
    <input type="text" class="form-control" value = "{{$vendor->city}}"  id="exampleInputEmail1" placeholder="City" readonly>
  </div>


 <div class="form-group">
    <label for="exampleInputEmail1"> Province</label>
    <input type="text" class="form-control" value = "{{$vendor->state}}"  id="exampleInputEmail1" placeholder="Province" readonly>
  </div>



 <div class="form-group">
    <label for="exampleInputEmail1">Country</label>
    <input type="text" class="form-control" value = "{{$vendor->country}}"  id="exampleInputEmail1" placeholder="Country" readonly>
  </div>


<br>

</div>
</div>


<div class = "company_tl" id="MyBusiness">
<div class = "company_br">
<div class = " body_header">
<h1>My Business</h1>
</div>

<hr>
<div class = "company_table">
    
   
@if(count($business) > 0)

<table class="table table-responsive w-100 d-block d-md-table border">
  <thead>
  
    <tr>
      <th scope="col" >Name</th>
      <th scope="col" >Status</th>
      <th scope="col" >Action</th>
    </tr>
  </thead>
  <tbody>
     @foreach($business as $key => $item)
         <tr class="bg-light ">
      <td style="white-space: nowrap; ">{{$item->business_title}}</td>
      <td>
      
         <div class="custom-control custom-switch custom-switch-glow custom-control-inline">
       <input type="checkbox" class="custom-control-input" {{$item->status == 1 ? 'checked' : ''}}
        value="{{$item->id}}"  onchange="change_status(this.value, 'businesses', '#customSwitchGlow{{$key}}', 'id');" id="customSwitchGlow{{$key}}" >
        <label class="custom-control-label" for="customSwitchGlow{{$key}}">
         </label>
         </div>

      
      </td>
      <td class = "action" style="white-space: nowrap; ">
      <a href = "{{route('vendor_company_profile',$item->id)}}">View</a>
      <a href = "{{route('business_edit',$item->id)}}">Edit</a>
      <a href = "{{route('deleteBusiness',$item->id)}}">Delete</a>
      
      </td>
    </tr> 
    @endforeach

   
  </tbody>
</table>
@else
 <p style="text-align: center;color: #adaeaf;">----- No Business Found -----</p>
@endif
</div>



</div>
</div>








</div>
</div> 








        </div>
     </div>



</div>{{--container--}}




@include('Vendor.vendor_layout.footer')
  

@if(Auth::guard('vendor')->check())

    @if ($check_b['expired_popup'] == false)
        
    <script>
        $(document).ready(function() {
            $('.dropdown-submenu a.test').on("click", function(e) {
                $(this).next('ul').toggle();
                e.stopPropagation();
                e.preventDefault();
            });
        });



        function PopUp(hideOrshow) {
    if (hideOrshow == 'hide') document.getElementById('ac-wrapper').style.display = "none";
    else document.getElementById('ac-wrapper').removeAttribute('style');
}
window.onload = function () {
    setTimeout(function () {
        PopUp('show');

        document.getElementById('body_popup').style.overflow = "hidden";
        document.getElementById('bg_expired').style.opacity = ".5";

    }, 1000);
}
    </script>

@endif

@endif
</div>

</body>
</html>