<style>
    
    .tender_request {
    position: absolute;
    bottom: 5%;
    right: 7%;
    z-index:999;
}
.tender_request{
    display:none;
}
.showtender_request .tender_request{
    display:block;
}


@media (max-width: 600px) {
    .logo_bottom{
    margin-left: 4%;
  }
  .logo_name{
    margin-left: 4%;
  }
}
@media (max-width: 520px) {
   
   .profile_menu .dropdown-menu {
   
    left: 5px !important;
}
}
</style>
<div class="container-fluid bg-no-overlay"    style="background-image:url({{env('IMG_URL').'upload_images/banner_image/'.$data['banner_image']['customer_image']}});    background-repeat: no-repeat;
    background-size: cover; background-position: center center;position:relative;    left: 0;right: 0;color: #fff;  height: 471px; width:100%;">

<div class="tender_request">
                    <div class="">
                        <h1 class="btn" style="margin-top: -155px;background-color: #f4e059;font-weight: 600;padding-left: 19px;padding-right: 17px;margin-left: 6px;text-decoration: none;"><a style="color:black;" href="#tender_request">Tender Request</a></h1>
                    </div>
                </div>


<div class = "row">
<div class ="col-md-12">

<div class = "logo logo_cu"> 
<a href = "{{route('index')}}">

  <img class="logo-img" src="{{ asset('assets/images/logo.png') }}" alt="" style='margin-left:15% !important;'>

  <a>

</div>




<div class = "profile_menu d-flex">
<li class="nav-item dropdown dmenu">
        <a class="nav-link " href="" id="navbardrop" data-toggle="dropdown">
 @if($customer->profile_image == null)
     <img class="logo-img" src="{{ asset('assets/images/default.png') }}" alt="" style='margin-left:15% !important;'>  
 @else
     <img class="logo-img" src="{{ asset('upload_images/customer_profile/'.$customer->profile_image) }}" alt="" style='margin-left:15% !important;'>           
 @endif
      </a>
     
        <div class="dropdown-menu menu">   
           {{-- <a class="dropdown-item" href="#">Dashboard</a> --}}
          <a class="dropdown-item" href="{{route('customer')}}">My Profile</a>

<a class="dropdown-item" href="{{route('wishlist')}}">Wishlist</a>
          {{-- <a class="dropdown-item" href="#">Tender </a> --}}
          <a class="dropdown-item" href="{{route('request_call_li')}}">Request Call </a>


        
     <a class = "dropdown-item" href="{{ route('customer_logout') }}" onclick="event.preventDefault();
     document.getElementById('logout-form').submit();"  >Logout</a>

 <form id="logout-form" action="{{ route('customer_logout') }}" method="POST" style="display: none;">
  @csrf
    </form>



        </div>
      </li>

{{-- 
      <li class="add_buisness">

      @if($vendor_bl >= $business_listing)

        <a href="{{route('vendor_package',$plan_detail->id)}}">Add Buisness</a>

        @else
        <a href="{{route('add_business')}}">Add Buisness</a>

        @endif

      </li> --}}
    


      </div>
</div>
</div>

<div class = "row">

<div class = "col-md-12">

<div class = "top_left_logo " style='margin-top:285px; left:5%;'>

<div class = "logo_bottom">
@if($customer->profile_image == null)
<img class="logo-bottom" src="{{ asset('assets/images/default.png') }}" alt="">
@else
<img class="logo-bottom" src="{{ asset('upload_images/customer_profile/'.$customer->profile_image) }}" alt="" >
@endif

</div>

<div class = "logo_info" style=" padding-top: 10px!important;">
<div class = "logo_name ">
<h1>{{$customer->name}} {{$customer->lname}}</h1>
</div>
</div>
</div>

{{-- <div class = top_right>
<div class = "rq_call">
<h1><a href = "{{route('request_call',$business->id)}}">Request Call</a></h1>
</div>

<div class = "view_broch">
<h1>View Brochure</h1>
</div> --}}

</div>



</div>


</div>
</div>
</div>