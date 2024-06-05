
<div class="container-fluid bg-no-overlay"   style="background-image:url({{env('IMG_URL').'upload_images/banner_image/'.$data['banner_image']['home_image']}});    background-repeat: no-repeat;
    background-size: cover; background-position: center center;       left: 0;right: 0;color: #fff;  height: 471px; width:100%;">

<style>
     @media (max-width: 520px) {
     .profile_menu .dropdown-menu {
    margin-top: 4px !important;
    left: -48px !important;
}
.dropdown-menu.menu a:nth-child(1) {
    margin-top: 0px !important;
}
border-bottom: 1px solid #c9d1cb !important;
    display: block;
    width: 100%;
    padding: 10px 10px 5px 10px !important;
    border: none !important;
    font-size: 16px !important;
    font-weight: 500;
    color: #212529;
    text-align: inherit;
    /* margin-top: 6px; */
    text-decoration: none;
    white-space: nowrap;
    background-color: transparent;
    font-family: 'Open Sans', sans-serif;
}
</style>

<div class = "row">
<div class ="col-md-12">

<div class = "logo"> 
  <a href="{{ route('index') }}">
      <img class="logo-img" src="{{ asset('assets/images/logo.png') }}" alt="">
</a>
</div>




<div class = "profile_menu d-flex">
   <li class="nav-item dropdown vendor_img dmenu">
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

             @if($vendor_bl >= $business_listing) 
            <a class="dropdown-item" href="{{route('vendor_package_monthly')}}">Add Business</a>
            @else
            <a class="dropdown-item" href="{{route('add_business',$vendor->id)}}">Add Business</a>

            @endif 
                  <a class = "dropdown-item" href="{{ route('vendor.logout') }}" onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();"  >Logout</a>

                              <form id="logout-form" action="{{ route('vendor.logout') }}" method="POST" style="display: none;">
                               @csrf
                                 </form>


                     



            </div>
          </li>


          <li class="add_business_logined">

          @if($vendor_bl >= $business_listing) 
            <!--<a  class="header-btn" href="{{route('vendor_package_monthly')}}">Add Business</a>-->
            <a  href="{{route('vendor_package_monthly')}}">Add Business</a>
            @else
            <!--<a  class="header-btn" href="{{route('add_business',$vendor->id)}}">Add Business</a>-->
            <a href="{{route('add_business',$vendor->id)}}">Add Business</a>

            @endif 

          </li>
        


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



<div class = "logo_name">
<h1>{{$vendor->name}} {{$vendor->lname}}</h1>
</div>




</div>
</div>



</div>


</div>
</div>
</div>