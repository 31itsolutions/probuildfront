<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Company profile</title>


    {{-- Css from assets --}}

    {{-- bootsnipp CDN link --}}




    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->


    <link href="{{ asset('assets/font/knife_princess/knife_princess/KnifePrincess-MMPY.ttf') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />

    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">
    {{-- boot icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
        integrity="sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU" crossorigin="anonymous">

    <link href="{{ asset('assets/css/company_profile.css') }}" rel="stylesheet">

    <!-- Fontawsome icon CDN-->
    {{-- google map --}}
    <script src="https://api.tiles.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.js"></script>
    <link href="https://api.tiles.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.css" rel="stylesheet" />



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <style type="text/css">
        #table_scroll {
            height: 150px;
            overflow: auto;
            margin-top: 20px;
        }
        .logo img {
            height: 74px !important;
            
            width: 81px !important;
            margin-top: 23px !important;
            margin-left: 65px !important;
        }
 @media (max-width: 520px) {
     .profile_menu .dropdown-menu {
    margin-top: 4px !important;
    left: -5px !important;
}
     .logo img {
  
    margin-top: 23px !important;
    margin-left: 0px !important;
}
.logo {
   
    left: 4.5% !important;
    top: 10px !important;
}
.profile_menu .dropdown-menu {
    margin-top: 5px;
    left: -42px !important;
}
 }
    </style>
    
    <!-- image pop up -->
<!-- Lightbox2 CSS CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
<!-- Lightbox2 JS CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
 <!-- pop up end -->                                     

</head>

<body>

    {{-- -----------------------header portion----------------------- --}}


    {{-- <div class="main-banner"
style="
background-image:url({{ env('IMG_URL') . 'upload_images/banner_image/' . $data['banner_image']['home_image'] }});    background-repeat: no-repeat;
background-size: cover; background-position: center center;left: 0;right: 0;color: #fff;  height: 620px; width:100%;"> --}}

 <div class="container-fluid bg-no-overlay"   style="background-image:url({{env('IMG_URL').'upload_images/banner_image/'.$data['banner_image']['home_image']}});    background-repeat: no-repeat;
  background-size: cover; background-position: center center;position:relative;     left: 0;right: 0;color: #fff;  height: 471px; width:100%;">





<div class = "row">
<div class ="col-md-12">

<div class = "logo" style="left:1.8%;"> 
<a href="{{ route('index') }}">
    <img class="logo-img" src="{{ asset('assets/images/logo.png') }}" alt="">
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

<!--    <div class="container-fluid bg-no-overlay"-->
<!--        style="background-image:url({{ env('IMG_URL') . 'upload_images/banner_image/' . $data['banner_image']['home_image'] }});    background-repeat: no-repeat;-->
<!--    background-size: cover; background-position: center center;    left: 0;right: 0;color: #fff;  height: 471px; width:100%;">-->




<!--        <div class="row">-->
<!--            <div class="col-md-12">-->

<!--                <div class="logo">-->
<!--                    <a href="{{ route('index') }}">-->

<!--                        <img class="logo-img" src="{{ asset('assets/images/logo.png') }}" alt="">-->
<!--                    </a>-->

<!--                </div>-->




<!--                <div class="profile_menu d-flex">-->
<!--                  <li class="nav-item dropdown dmenu">-->
<!--                    <a aria-disabled="" class="nav-link "  id="navbardrop" data-toggle="dropdown">-->
<!--             @if($vendor->profile_image == null)-->
<!--                 <img class="logo-img" src="{{ asset('assets/images/default.png') }}" alt="">  -->
<!--             @else-->
<!--                 <img class="logo-img" src="{{ asset('upload_images/vendor_profile/'.$vendor->profile_image) }}" alt="">           -->
<!--             @endif-->
<!--                  </a>-->
                 
<!--                    <div class="dropdown-menu menu">   -->
<!--                       {{-- <a class="dropdown-item" href="#">Dashboard</a> --}}-->
<!--                      <a class="dropdown-item cu_dropdown" href="{{route('vendor')}}">My Profile</a>-->
          
          
<!--                      <a class="dropdown-item cu_dropdown" href="{{route('tendor_request',$vendor->id)}}">Tendor Board</a>-->
          
<!--                        <a class="dropdown-item cu_dropdown" href="{{route('request_call_vendor',$vendor->id)}}">Request Call</a>-->
<!--                        <a class="dropdown-item cu_dropdown" href="{{route('request_for_q',$vendor->id)}}">RFQ</a>-->
          
          
<!--                          <a class = "dropdown-item cu_dropdown" href="{{ route('vendor.logout') }}" onclick="event.preventDefault();-->
<!--                                          document.getElementById('logout-form').submit();"  >Logout</a>-->
          
<!--                                      <form id="logout-form" action="{{ route('vendor.logout') }}" method="POST" style="display: none;">-->
<!--                                       @csrf-->
<!--                                         </form>-->
          
          
                             
          
          
          
<!--                    </div>-->
<!--                  </li>-->
          
          
<!--                  <li class="add_buisness">-->
          
<!--                  @if($vendor_bl >= $business_listing) -->
<!--                    <a href="{{route('vendor_package_monthly')}}">Add Business</a>-->
<!--                    @else-->
<!--                    <a href="{{route('add_business',$vendor->id)}}">Add Business</a>-->
          
<!--                    @endif -->
          
<!--                  </li>-->

<!--                {{-- @elseif (Auth::guard('vendor')->check())-->

<!--                    <nav class="main-nav only_let">-->
<!--                        <div class="">-->
<!--                            <b><a href="{{ route('vendor') }}" style="display: block;-->
<!--    font-weight: 500;-->
<!--    font-size: 14px;-->
<!--    color: #fff;-->
<!--    text-transform: uppercase;-->
<!--    -webkit-transition: all 0.3s ease 0s;-->
<!--    -moz-transition: all 0.3s ease 0s;-->
<!--    -o-transition: all 0.3s ease 0s;-->
<!--    transition: all 0.3s ease 0s;-->
<!--    height: 40px;-->
<!--    line-height: 40px;-->
<!--    border: transparent;-->
<!--    letter-spacing: 1px;">-->
<!--                                    <i class="bi bi-box-arrow-in-right"></i> &nbsp; Vendor</a></b>-->
<!--                        </div>-->
<!--                    </nav> --}}-->

<!--{{-- -->
<!--                @else-->
<!--                    <nav class="main-nav only_let">-->
<!--                        <div class="">-->
<!--                            <b><a href="{{ route('customer_login') }}" style="display: block;-->
<!--    font-weight: 500;-->
<!--    font-size: 14px;-->
<!--    color: #fff;-->
<!--    text-transform: uppercase;-->
<!--    -webkit-transition: all 0.3s ease 0s;-->
<!--    -moz-transition: all 0.3s ease 0s;-->
<!--    -o-transition: all 0.3s ease 0s;-->
<!--    transition: all 0.3s ease 0s;-->
<!--    height: 40px;-->
<!--    line-height: 40px;-->
<!--    border: transparent;-->
<!--    letter-spacing: 1px;">-->
<!--                                    <i class="bi bi-box-arrow-in-right"></i> &nbsp; sign in</a></b>-->
<!--                        </div>-->
<!--                    </nav>-->
<!--                    @endif --}}-->


<!--                    {{-- <li class="add_buisness">-->

<!--      @if ($vendor_bl >= $business_listing)-->

<!--        <a href="{{route('vendor_package',$plan_detail->id)}}">Add Buisness</a>-->

<!--        @else-->
<!--        <a href="{{route('add_business')}}">Add Buisness</a>-->

<!--        @endif-->

<!--      </li> --}}-->



<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

<!--        <div class="row">-->

<!--            <div class="col-md-12">-->

<!--                <div class="top_left_logo ">-->

<!--                    <div class="logo_bottom">-->
<!--                        @if ($vendor->profile_image != null)-->
<!--                            <img class="logo-bottom"-->
<!--                                src="{{ asset('upload_images/vendor_profile/' . $vendor->profile_image) }}"-->
<!--                                alt="No image">-->
<!--                        @else-->
<!--                            <img class="logo-bottom" src="{{ asset('assets/images/default.png') }}" alt="No image">-->
<!--                        @endif-->
<!--                    </div>-->

<!--                    <div class="logo_info">-->
                    
<!--                        <div class="logo_name">-->
<!--                            <h1>{{ $vendor->name }} {{ $vendor->lname }} </h1>-->
                         
<!--                        </div>-->


<!--                    </div>-->
<!--                </div>-->



<!--            </div>-->


<!--        </div>-->
<!--    </div>-->
    </div>

    {{-- -----------------------header end--------------------------- --}}

    <div class="container body_top">
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

        <div class="row">
            <div class="col-md-8 ">

                @if ($vendor->verified_vendor == 1)
                <div class="verify veriy_re">
                    <h1><span><i class="fa fa-check" aria-hidden="true"></i>
                            Verified Listing</span></h1>
                </div>
            @endif


                <div class="body_part">
                    <div class="business_detail mt-3">



                        <div class="business_title">

                            <h1>Description</h1>

                        </div>
                        <hr>

                        {{-- <div class="business_image">
                            <img class="logo-bottom rounded"
                                src="{{ asset('upload_images/business_image/' . $business->business_image) }}"
                                alt="">
                        </div> --}}

                        <div class="business_para">

                            <p style="text-align: left; padding: 5px; padding-right: 20px;">{{ $business->business_description }}</p>
                        </div>
                        <br>
                        <br>




                    </div>
                </div>

<!-- 
                <div class="product_part">
                    <br>
                    <div class="product ">



                        <div class="product_title ">

                            <h1>Product/Service</h1>
                            <hr>

                        </div>

                        {{-- {{ dd($data) }} --}}
                        <div class="product_dtail" style="height: auto; overflow-x: auto; margin: 20px;">
                        <table class="table" id="table_scroll" style="height: auto;">
                             <thead>
                                    <tr>
                                        {{-- <th class = "p_title"  scope="col"></th> --}}
                                         <th scope="col" colspan="2">Items</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data1 as $key => $item)
                                        <tr style="background : @if ($loop->even)  rgba(244, 224, 89, 0.27) @endif">

                                                <td>         <a href="{{ asset('upload_images/business_image/' . $business->business_image) }}" data-lightbox="product-image">
                                <img class="product_logo_td" src="{{ asset('upload_images/business_image/' . $business->business_image) }}" alt="">
                            </a>
                                                </td>
                                                <td class="">
                                                  
                                                  <p class="" style="text-align: left;" >{{ $item->product_name }}</p>
                                                                  
                                              </td>
                                          {{-- @endif --}}

                                          <td class="mt-2"><p>{{ $item->sub_category }}</p></td>
                                          <td class=" mt-2"><p style="min-width: 250px!important;text-align: justify;">{{ $item->product_description }}</p></td>
                                          <td  class="mt-2" style="padding-left: 22px;min-width: 150px!important;"><p>{{ $item->product_price_from }} -
                                              {{ $item->product_price_to }}</p></td>
                                      </tr>
                                    @endforeach


                                </tbody>
                            </table>
                            <br>
                            <br>

                        </div>
                    </div>
                </div> -->



                <div class="product_part">
    <br>
    <div class="product">
        <div class="product_title">
            <h1>Product/Service</h1>
            <hr>
        </div>
        {{-- {{ dd($data) }} --}}
        <div class="product_dtail" style="overflow-x: auto; margin: 20px;">
            <table class="table" id="table_scroll">
                <thead>
                    <tr>
                        <th scope="col" colspan="2">Items</th>
                        <th scope="col">Category</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data1 as $key => $item)
                        <tr style="background: {{ $loop->even ? 'rgba(244, 224, 89, 0.27)' : 'none' }}">
                            <td>
                                <a href="{{ asset('upload_images/business_image/' . $business->business_image) }}" data-lightbox="product-image">
                                    <img class="product_logo_td" src="{{ asset('upload_images/business_image/' . $business->business_image) }}" alt="">
                                </a>
                            </td>
                            <td class="">
                                <p class="product_name">{{ $item->product_name }}</p>
                            </td>
                            <td class="mt-2">
                                <p>{{ $item->sub_category }}</p>
                            </td>
                            <td class=" mt-2">
                                <p style="min-width: 150px!important;text-align: justify;">{{ $item->product_description }}</p>
                            </td>
                            <td class="mt-2" style="padding-left: 22px;min-width: 150px!important;">
                                <p>{{ $item->product_price_from }} - {{ $item->product_price_to }}</p>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <br>
        </div>
    </div>
</div>

                <div class="row">

                    <div class="col-md-12">

                        <div class="gallery">

                            <div class="gallery_main">
                                <div class="gallery_title mb-2">

                                    <h1>Gallery</h1>

                                </div>
                                <hr>

<div class="spe-cor ">
            <div id="spe-cor" class="carousel carousel-correspondence slide">
                <div class="carousel-inner">

                <style>
    /* parent of book-container & container (slider) */
main {
  overflow: hidden;
  display: flex;
  justify-content: space-between;
}

/* wraps entire slider */
.slider-wrapper {
  overflow: hidden;
  width: 100%;
  height: 150%;
  position: relative;
}

.slider-nav {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  
  text-align: center;
  margin: 0;
  padding: 1%;
  background: rgba(0,0,0,0.6);
  color: #fff;
}

/* slider controls*/
.control {
  position: absolute;
  top: 50%;
  width: 40px;
  height: 20px;
  color: #fff;
  font-size: 3rem;
  padding: 0.5rem;;
  margin: 0;
  line-height: 5px;
}

.prev,
.next {
  cursor: pointer;
  transition: all 0.2s ease;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
   user-select: none;
  background: rgba(0,0,0,0.3);
  padding: 1 rem;
}

.prev {
  left: 1.1rem;
}

.next {
  right: 1.1rem;
}

.prev:hover,
.next:hover {
  transform: scale(1.5,1.5);
}

.slider-container {
  /* 
  n variable holds number of images to make .container wide enough 
  to hold all its image children 
  that still have the same width as its parent
  */
  display: flex;
  align-items: center;
  overflow-y: hidden;
  width: 100%; /* fallback */
  width: calc(var(--n)*100%);
  height: 31vw; 
  max-height: 100vh;
  transform: translate(calc(var(--i, 0)/var(--n)*-100% + var(--tx, 0px)));
}

/* transition animation for the slider */
.smooth { 
  /* f computes actual animation duration via JS */
  transition: transform calc(var(--f, 1)*.5s) ease-out; 
}

/* images for the slider */
img {
  width: 100%; /* can't take this out either as it breaks Chrome */
  width: calc(100%/var(--n));
  pointer-events: none;
}
/* Default styles for the image */
#gallery-image {
    height: auto; /* Set to auto so that the aspect ratio is maintained */
}

/* Media query for mobile devices with a maximum width of 767px */
@media (max-width: 767px) {
    #gallery-image {
        height: 100%; /* Set the height to 100% on mobile view */
    }
    .slider-container {
  /* 
  n variable holds number of images to make .container wide enough 
  to hold all its image children 
  that still have the same width as its parent
  */
  display: flex;
  align-items: center;
  overflow-y: hidden;
  width: 100%; /* fallback */
  width: calc(var(--n)*100%);
  height: 50vw; 
  max-height: 100vh;
  transform: translate(calc(var(--i, 0)/var(--n)*-100% + var(--tx, 0px)));
}

}

</style>


<!-- 
@forelse ($gallery_image as $data)

<div class="item active">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class=" row  thumbnail ">
          <img src="{{ asset('upload_images/gallery_image/' . $data->gallery_image) }}" alt="Gallery image">
        </div>
    </div>
</div>
                             
  
@empty
<p> gallery images not added</p>
@endforelse 

@foreach ($gallery_image_1 as $data_1)


<div class="item">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class=" row gallery_img">
          <img src="{{ asset('upload_images/gallery_image/' . $data_1->gallery_image) }}" alt="Gallery image">
            
        </div>
    </div>
</div>

@endforeach  -->


                   
                              
<div class="slider-wrapper">

<div class="slider-container"  style="padding:10px;">
  <!-- <img src="https://source.unsplash.com/featured?technology">
  <img src="https://source.unsplash.com/featured?dogs">
  <img src="https://source.unsplash.com/featured?cats">
  <img src="https://source.unsplash.com/featured?cake">
  <img src="https://source.unsplash.com/featured?birds">
  <img src="https://source.unsplash.com/featured?cities"> -->
  
@forelse ($gallery_image as $data)

          <img src="{{ asset('upload_images/gallery_image/' . $data->gallery_image) }}" class="mg-fluid blur-up lazyload bg-img" alt="Gallery image" style="height:100%;width:100%;object-fit:cover;padding:10px;">
                      
  
@empty
<p> gallery images not added</p>
@endforelse 

@foreach ($gallery_image_1 as $data_1)


          <img src="{{ asset('upload_images/gallery_image/' . $data_1->gallery_image) }}"  class="mg-fluid blur-up lazyload bg-img"  alt="Gallery image" style="height:100%;width:100%;object-fit:cover;padding:10px;">
            
     

@endforeach 
</div>

<div class="slider-controls">
  <span class="control prev">&larr;</span>
  <span class="control next">&rarr;</span>
</div>

</div>


</div>
<!-- <div class="controls control_image">
<a class="left carousel-control" href="#spe-cor" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
<a class="right carousel-control" href="#spe-cor" data-slide="next"><i class="fa fa-chevron-right"></i></a>
</div> -->
<!-- End Carousel -->
</div>
</div>







<script>
    //  set --n (used for calc in CSS) via JS, after getting
// .container and the number of child images it holds:

const _C = document.querySelector(".slider-container"),
  N = _C.children.length;

_C.style.setProperty("--n", N);

// detect the direction of the motion between "touchstart" (or "mousedown") event
// and the "touched" (or "mouseup") event
// and then update --i (current slide) accordingly
// and move the container so that the next image in the desired direction moves into the viewport

// on "mousedown"/"touchstart", lock x-coordiate
// and store it into an initial coordinate variable x0:
let x0 = null;
let locked = false;

function lock(e) {
  x0 = unify(e).clientX;
  // remove .smooth class
  _C.classList.toggle("smooth", !(locked = true));
}

// next, make the images move when the user swipes:
// was the lock action performed aka is x0 set?
// if so, read current x coordiante and compare it to x0
// from the difference between these two determine what to do next

let i = 0; // counter
let w; //image width

// update image width w on resive
function size() {
  w = window.innerWidth;
}

function move(e) {
  if (locked) {
    // set threshold of 20% (if less, do not drag to the next image)
    // dx = number of pixels the user dragged
    let dx = unify(e).clientX - x0,
      s = Math.sign(dx),
      f = +(s * dx / w).toFixed(2);

    // Math.sign(dx) returns 1 or -1
    // depending on this, the slider goes backwards or forwards

    if ((i > 0 || s < 0) && (i < N - 1 || s > 0) && f > 0.2) {
      _C.style.setProperty("--i", (i -= s));
      f = 1 - f;
    }

    _C.style.setProperty("--tx", "0px");
    _C.style.setProperty("--f", f);
    _C.classList.toggle("smooth", !(locked = false));
    x0 = null;
  }
}

size();

addEventListener("resize", size, false);

// ===============
// drag-animation for the slider when it reaches the end
// ===============

function drag(e) {
  e.preventDefault();

  if (locked) {
    _C.style.setProperty("--tx", `${Math.round(unify(e).clientX - x0)}px`);
  }
}

// ===============
// prev, next
// ===============
let prev = document.querySelector(".prev");
let next = document.querySelector(".next");

prev.addEventListener("click", () => {
  if (i == 0) {
    console.log("start reached");
  } else if (i > 0) {
    // decrease i as long as it is bigger than the number of slides
    _C.style.setProperty("--i", i--);
  }
});

next.addEventListener("click", () => {
  if (i < N) {
    // increase i as long as it's smaller than the number of slides
    _C.style.setProperty("--i", i++);
  }
});

// ===============
// slider event listeners for mouse and touch (start, move, end)
// ===============

_C.addEventListener("mousemove", drag, false);
_C.addEventListener("touchmove", drag, false);

_C.addEventListener("mousedown", lock, false);
_C.addEventListener("touchstart", lock, false);

_C.addEventListener("mouseup", move, false);
_C.addEventListener("touchend", move, false);

// override Edge swipe behaviour
_C.addEventListener(
  "touchmove",
  e => {
    e.preventDefault();
  },
  false
);

// unify touch and click cases:
function unify(e) {
  return e.changedTouches ? e.changedTouches[0] : e;
}

    </script>
<!-- 


                  @forelse ($gallery_image as $data)

                    <div class="item active">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class=" row  thumbnail ">
                              <img src="{{ asset('upload_images/gallery_image/' . $data->gallery_image) }}" alt="Gallery image">
                               
                            </div>
                        </div>
                    </div>
                                                 
                  @empty
                  <p> gallery images not added</p>
                @endforelse 

                @foreach ($gallery_image_1 as $data_1)


                    <div class="item">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class=" row gallery_img">
                              <img src="{{ asset('upload_images/gallery_image/' . $data_1->gallery_image) }}" alt="Gallery image">
                                
                            </div>
                        </div>
                    </div>

                    @endforeach 


              
             
                </div>
                <div class="controls control_image">
                    <a class="left carousel-control" href="#spe-cor" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                    <a class="right carousel-control" href="#spe-cor" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                </div> -->
            <!-- End Carousel -->
        <!-- </div>
    </div> -->




                            </div>
                        </div>


                    </div>
                </div>








                <div class="row">

                    <div class="col-md-12">

                        <div class="gallery">

                        <div class="gallery_main">
                            <div class="gallery_title" style="display: flex; align-items: center;">
                                    <h1>Item Reviews</h1>
                                    <!-- <h1 class="btn" data-toggle="modal" data-target="#myModal2"  style="background-color: #f4e059; font-weight: 600; padding-left: 19px; padding-right: 17px; text-decoration: none;">
    Add Review
  </h1> -->

                                </div>

                                 <hr>

                                <div class="comment ">
                                    @forelse ($reviewOne as $item_one)

                                    <div style="background : @if ($loop->even)  rgba(244, 224, 89, 0.27) @endif">


                                        <div class="comment_li">
                                            <div class="comment_flex d-flex ">

                                                <div class="u_image">
                                                    @if ($item_one->profile_image)

                                                        <img class=""
                                                            src="{{ asset('upload_images/customer_profile/' . $item_one->profile_image) }}"
                                                            alt="">
                                                    @else
                                                        <img class=""
                                                            src="{{ asset('assets/images/default.png') }}" alt="">
                                                    @endif
                                                </div>
                                                <div class="u_d ml-2 mx-5 ">

                                                    <div class="review_flex">

                                                        <div class="u_name">
                                                            <h1>{{ $item_one->customer_name }}</h1>
                                                        </div>
                                                        <div class="u_date">
                                                            <h1><i class="fa fa-calendar" aria-hidden="true"></i>
                                                                <?php
                                                                echo date('d-m-Y', strtotime($item_one->updated_at));
                                                                ?>
                                                            </h1>
                                                        </div>
                                                    </div>
                                                    {{-- {{$item_one->rating}} --}}
                                                   
                                                    <div class="logo_rate">
                                                        <div id="stars-existing" class="starrr company_rate" data-rating='{{ $item_one->rating }}'>
                                                        </div>
                                
                                                    </div>
                                                    <p class="comment_d">{{ $item_one->review }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    @empty
                                    <p class="company_review">No Reviews Found...!</p>  
                                    @endforelse
                                </div>




                            </div>


                            <div id="read_more">

                            @foreach ($reviewTwo as $key => $item_one)

                            <div style="background : @if ($loop->even)  rgba(244, 224, 89, 0.27) @endif">
                            <div class="comment_li mt-3" >
                                <div class="comment_flex d-flex"   >

                                    <div class="u_image">
                                        @if ($item_one->profile_image)

                                            <img class=""
                                                src="{{ asset('upload_images/customer_profile/' . $item_one->profile_image) }}"
                                                alt="">
                                        @else
                                            <img class=""
                                                src="{{ asset('assets/images/default.png') }}" alt="">
                                        @endif
                                    </div>
                                    <div class="u_d ml-2 mx-5 ">

                                        <div class="review_flex">

                                            <div class="u_name">
                                                <h1>{{ $item_one->customer_name }}</h1>
                                            </div>
                                            <div class="u_date">
                                                <h1><i class="fa fa-calendar" aria-hidden="true"></i>
                                                    <?php
                                                    echo date('d-m-Y', strtotime($item_one->updated_at));
                                                    ?>
                                                </h1>
                                            </div>
                                        </div>
                                        {{-- {{$item_one->rating}} --}}
                                        <div class="comment_flex">
                                            <div id="stars-existing" class="starrr comment_rate"
                                                data-rating='0'></div>
                                            <p>{{ $item_one->rating }}.0</p>

                                        </div>

                                        <p class="comment_d">{{ $item_one->review }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                           
                                @endforeach
                    </div>
                            <br>
                            <br>



                        </div>



                    </div>


                </div>
                @if ($view_more == true)


                <div id="more" class="view_more mt-5">
                    <button onclick="read_comment()">View More</button>
                </div>

                <div id="less" class="view_more mt-5">
                    <button onclick="read_comment()">View Less</button>
                </div>
            @endif






            </div>{{-- col-md-8 end --}}


            <div class="col-md-4">
                @if ($vendor->verified_vendor == 1)
                    <div class="verify verify_right">
                        <h1><span><i class="fa fa-check" aria-hidden="true"></i>
                                Verified Listing</span></h1>
                    </div>
                @endif

                   



                <div class="time_tl">
                    <div class="time_br">
                        <div class="time_header d-flex">

                            <div class="open_time">
                                <h1>Opening Time</h1>
                            </div>

                            <div class="open">
                                <p><span>Open</span></p>
                            </div>

                        </div>
                    </div>

                    <div class="d-flex day_time">
                        <div class="day">
                            <p>Sunday</p>
                        </div>
                        <div class="timing">
                            <p>{{ $business->sunday_from }} to {{ $business->sunday_to }}</p>
                        </div>
                    </div>

                    <hr style="margin-bottom: 0px !important;margin-top: 0px !important;">

                    <div class="d-flex day_time">
                        <div class="day">
                            <p>Monday</p>
                        </div>
                        <div class="timing">
                            <p>{{ $business->monday_from }} to {{ $business->monday_to }}</p>
                        </div>
                    </div>

                    <hr style="margin-bottom: 0px !important;margin-top: 0px !important;">


                    <div class="d-flex day_time">
                        <div class="day">
                            <p>Tuesday</p>
                        </div>
                        <div class="timing">
                            <p>{{ $business->tuesday_from }} to {{ $business->tuesday_to }}</p>
                        </div>
                    </div>

                    <hr style="margin-bottom: 0px !important;margin-top: 0px !important;">


                    <div class="d-flex day_time">
                        <div class="day">
                            <p>Wednesday</p>
                        </div>
                        <div class="timing">
                            <p>{{ $business->wednesday_from }} to {{ $business->wednesday_to }}</p>
                        </div>
                    </div>
                    <hr style="margin-bottom: 0px !important;margin-top: 0px !important;">


                    <div class="d-flex day_time">
                        <div class="day">
                            <p>Thursday</p>
                        </div>
                        <div class="timing">
                            <p>{{ $business->thursday_from }} to {{ $business->thursday_to }}</p>
                        </div>
                    </div>
                    <hr style="margin-bottom: 0px !important;margin-top: 0px !important;">


                    <div class="d-flex day_time">
                        <div class="day">
                            <p>Friday</p>
                        </div>
                        <div class="timing">
                            <p>{{ $business->friday_from }} to {{ $business->friday_to }}</p>
                        </div>
                    </div>
                    <hr style="margin-bottom: 0px !important;margin-top: 0px !important;">


                    <div class="d-flex day_time">
                        <div class="day">
                            <p>Saturday</p>
                        </div>
                        <div class="timing">
                            <p>{{ $business->saturday_from }} to {{ $business->saturday_to }}</p>
                        </div>
                    </div>



                </div>
                {{-- timing end --}}

                {{-- location --}}

                <div class="location_tl">
                    <div class="location_br">
                        <br>
                        <br>

                        <div class="location_header">

                            <h1>Location</h1>

                        </div>
                        <hr>

                        <div class="location_map">


                            <div class="mx-2">

                                <div class="mt-1 mb-2  " style="width:100%; height:250px;" id="map"></div>

                            </div>
                            <script src="https://api.tiles.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.js"></script>

                            <script>
                                var lat = '{{ $business->lang }}';
                                var lang = '{{ $business->lat }}';
                                mapboxgl.accessToken =
                                    'pk.eyJ1IjoibWF0aGFua3VtYXIzNSIsImEiOiJja3Qyemk4enYwcGV0MnZ1bDNxOTRtanI0In0.OfSbMc8knznVzjackzbycw';

                                const map = new mapboxgl.Map({
                                    container: 'map', // HTML container id
                                    style: 'mapbox://styles/mapbox/streets-v11', // style URL
                                    center: [lat, lang], // starting position as [lng, lat]
                                    zoom: 13
                                });

                                const popup = new mapboxgl.Popup().setHTML(
                                    `<h3>Reykjavik Roasters</h3><p>A good coffee shop</p>`
                                );

                                const marker = new mapboxgl.Marker()
                                    .setLngLat([lat, lang])
                                    .setPopup(popup)
                                    .addTo(map);
                            </script>
                            <br>

                        </div>

                    </div>
                </div>








                {{-- listing end --}}


                <div class="info">
                    <div class="info_br">
                        <br>

                        <div class="info_header">
                            <h1>listing Info</h1>
                        </div>
                        <hr>
                        <div class="add_info location_info">
                            <p><i class="bi bi-geo-alt" aria-hidden="true"></i> <span>{{ $business->location }},
                                {{ $business->city }}, {{ $business->country }}</span></p>
                        </div>
                        <br>

                    </div>
                </div>

                {{-- location end --}}


                <div class="media_tl">
                    <div class="media_br">
                        <br>

                        <div class="media_li">

                            <a class="share" href=""><i class="bi bi-share"></i> </a><b></b>
                            <a href="{{ $business->facebook }}" style="margin-top:4px"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{ $business->twitter }}" style="margin-top:4px"> <i class="fab fa-twitter"></i></a>
                            <a href="{{ $business->instagram }}" style="margin-top:4px"><i class="fab fa-instagram"></i></a>
                            <a href="{{ $business->linkedin }}" style="margin-top:4px"><i class="fab fa-linkedin"></i></a>

                        </div>
                        <br>

                    </div>
                </div>



            </div>
        </div>
    </div>
    </div>












    @include('Customer.customer_layout.footer')
    <script type="text/javascript" src="{{ URL::asset('assets/js/styles.js') }}"></script>

    <script>
        function centerModal() {
            $(this).css('display', 'block');
            var $dialog = $(this).find(".modal-dialog");
            var offset = ($(window).height() - $dialog.height()) / 2;
            // Center modal vertically in window
            $dialog.css("margin-top", offset);
        }

        $('.modal').on('show.bs.modal', centerModal);
        $(window).on("resize", function() {
            $('.modal:visible').each(centerModal);
        });




        $(document).ready(function() {
        /*Correspondence Slider*/
        $('.carousel-correspondence .item').each(function() {
            var itemToClone = $(this);

            for (var i = 1; i < 2; i++) {
                itemToClone = itemToClone.next();
                if (!itemToClone.length) {
                    itemToClone = $(this).siblings(':first');
                }
                itemToClone.children(':first-child').clone()
                    .addClass("cloneditem-" + (i))
                    .appendTo($(this));
            }
        });
    });

        // $('.sub_cat_carousel').owlCarousel({
        //     loop: true,
        //     margin: 0,
        //     nav: false,
        //     dots: true,
        //     responsive: {
        //         250: {
        //             items: 1
        //         },

        //         350: {
        //             items: 2
        //         },
        //         450: {
        //             items: 3
        //         },
        //         650: {
        //             items: 4
        //         }
        //     }
        // });
    </script>





<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                        aria-hidden="true" data-backdrop="false" style="margin-top:-300px;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                              
                                <div class="modal-body">
                                    
                                <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close"><span aria-hidden="true">×</span></button>

                                <form action="{{ route('update_review', $business->id) }}" method="POST">
                    @csrf
                    {{-- item review --}}
                    <div class="item_tl">
                        <div class="item_br ">


                            <div class="item_header">
                                <h1>Item Review</h1>
                            </div>
                            <hr>

                            <div class="rating">
                                <p>Rating</p>

                                <div class="row lead give_cmt">
                                    {{-- <div id="stars" class="starrr "></div> --}}
                                    {{-- <h1 class = "" name = "rating" id="count"> --}}
                                    {{-- <input type="text" class="form-control" id="count" name = "rating"  placeholder="" required> --}}
                                    <input id="input-1" name="rating" class="rating rating-loading" data-min="0"
                                        data-max="5" data-step="1" value="2">


                                </div>

                            </div>

                            <div class="comment_area">
                                <div class="comment_li">
                                    <div class="row review_row">
                                        <div class="col">
                                            <label for="inputEmail4">Name</label>
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Your Name" required>
                                        </div>
                                        <div class="col">
                                            <label for="inputEmail4">Email</label>
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Your Email" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Review</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="review"
                                            placeholder="Send Review" rows="3" required></textarea>
                                    </div>




                                </div>


                            </div>

                            <div class="mt-2 mb-2">
                              
                                @if (Auth::guard('customer')->check())
                                    <button type="submit" class="review-btn mt-0" href=""
                                        class="">Submit
                                        Review</button>
                                @elseif (Auth::guard('vendor')->check())
                                    <button type="button" class="review-btn mt-0" href=""
                                        class="">Submit
                                        Review</button>
                                @else
                                    <button type="submit" class="review-btn mt-0" class=""><a
                                            style="color: black" href="{{ route('customer_login') }}">Submit
                                            Review</a></button>
                                @endif
                               
                            </div>

                        </div>
                    </div>


                </form>{{-- review form end --}}

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>


                            </div>
                        </div>
                    </div>






                </div>



</body>

</html>
