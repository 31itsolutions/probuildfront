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

    <!------ Include the above in your HEAD tag ---------->
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">
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




    <div class="container-fluid bg-no-overlay"
        style="background-image:url({{ env('IMG_URL') . 'upload_images/banner_image/' . $data['banner_image']['home_image'] }});    background-repeat: no-repeat;
    background-size: cover; background-position: center center;    left: 0;right: 0;color: #fff;  height: 471px; width:100%;">




        <div class="row">
            <div class="col-md-12">

                <div class="logo">
                    <a href="{{ route('index') }}" class="logo" style="margin-top: 38px;">

                        <img href="{{ route('index') }}" class="logo-img" height="70px" width="30px"
                            src="{{ asset('assets/images/logo.png') }}" alt="">

                    </a>

                </div>




                <div class="profile_menu d-flex">
                    <li class="nav-item dropdown dmenu">
                        {{-- <a class="nav-link " href="#" id="navbardrop" data-toggle="dropdown">
     @if (Auth::guard('customer')->check())
       @if ($customer->profile_image != null)
           <img class="logo-img" src="{{ asset('upload_images/customer_profile/'.$customer->profile_image) }}" alt="">
       @else
           <img class="logo-img" src="{{ asset('assets/images/default.png') }}" alt="">
       @endif

      </a>

        <div class="dropdown-menu menu"> --}}
                        {{-- <a class="dropdown-item" href="#">Dashboard</a> --}}
                        {{-- <a class="dropdown-item" href="{{route('customer')}}">My Profile</a>
                         <hr>


          <a class="dropdown-item" href="#">Tendor </a>
                         <hr>



     <a class = "dropdown-item" href="{{ route('customer_logout') }}" onclick="event.preventDefault();
     document.getElementById('logout-form').submit();"  >Logout</a>

 <form id="logout-form" action="{{ route('customer_logout') }}" method="POST" style="display: none;">
  @csrf
    </form>
        </div> --}}
                        @if (Auth::guard('customer')->check())

                            <a class="nav-link " href="" id="navbardrop" data-toggle="dropdown">
                                @if ($customer->profile_image == null)
                                    <img class="logo-img" src="{{ asset('assets/images/default.png') }}" alt="">
                                @else
                                    <img class="logo-img"
                                        src="{{ asset('upload_images/customer_profile/' . $customer->profile_image) }}"
                                        alt="">
                                @endif
                            </a>

                            <div class="dropdown-menu menu company_dropdown ">
                                {{-- <a class="dropdown-item" href="#">Dashboard</a> --}}
                                <a class="dropdown-item" href="{{ route('customer') }}">My Profile</a>

                                <a class="dropdown-item" href="{{ route('wishlist') }}">Wishlist</a>
                                {{-- <a class="dropdown-item" href="#">Tendor </a> --}}
                                <a class="dropdown-item mt-2" href="{{ route('request_call_li') }}">Request Call </a>



                                <a class="dropdown-item  mt-2" href="{{ route('customer_logout') }}"
                                    onclick="event.preventDefault();
     document.getElementById('logout-form').submit();">Logout</a>

                                <form id="logout-form" action="{{ route('customer_logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>



                            </div>
                    </li>
                @elseif (Auth::guard('vendor')->check())
                    <nav class="main-nav only_let">
                        <div class="">
                            <b><a href="{{ route('vendor') }}"
                                    style="display: block;
    font-weight: 500;
    font-size: 14px;
    color: #fff;
    text-transform: uppercase;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    height: 40px;
    line-height: 40px;
    border: transparent;
    letter-spacing: 1px;">
                                    <i class="bi bi-box-arrow-in-right"></i> &nbsp; Vendor</a></b>
                        </div>
                    </nav>
                @else
                    <nav class="main-nav only_let">
                        <div class="">
                            <b><a href="{{ route('customer_login') }}"
                                    style="display: block;
    font-weight: 500;
    font-size: 14px;
    color: #fff;
    text-transform: uppercase;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    height: 40px;
    line-height: 40px;
    border: transparent;
    letter-spacing: 1px;">
                                    <i class="bi bi-box-arrow-in-right"></i> &nbsp; sign in</a></b>
                        </div>
                    </nav>
                    @endif


                    {{-- <li class="add_buisness">

      @if ($vendor_bl >= $business_listing)

        <a href="{{route('vendor_package',$plan_detail->id)}}">Add Buisness</a>

        @else
        <a href="{{route('add_business')}}">Add Buisness</a>

        @endif

      </li> --}}



                </div>
            </div>
        </div>
        <style>
            .logo {
                margin-left: 5%;
            }

            .top_left_logo {
                display: flex;
                align-items: center;
            }

            .logo_bottom img {
                max-width: 100px;
                /* Adjust the width as needed */
                max-height: 100px;
                /* Adjust the height as needed */
            }

            .logo_info {
                margin-left: 10px;
                margin-top: 41px;
                /* Adjust the margin as needed */
            }

            .logo_type span {
                font-weight: bold;
                font-size: 18px;
                /* Adjust the font size as needed */
            }

            .logo_name h1 {
                font-size: 24px;
                /* Adjust the font size as needed */
                margin: 0;
            }

            .logo_location h1 {
                font-size: 18px;
                /* Adjust the font size as needed */
                margin: 0;
            }

            .logo_rate {
                display: flex;
                align-items: center;
            }

            .logo_rate .fa-star {
                font-size: 14px;
                /* Adjust the font size of stars as needed */
                color: #ff9800;
                /* Adjust the star color for rated stars */
            }

            .count_cy {
                font-size: 14px;
                /* Adjust the font size for the review count as needed */
                margin-left: 10px;
                margin-bottom: 10px !important;
            }

            .logo_type p span {
                font-size: 15px !important;
            }

            .reviewText {
                font-size: 16px;
            }

            @media only screen and (max-width: 768px) {
                /* .logo_info {
                    display: flex;
                    justify-content: space-around;
                    flex-direction: column;
                    margin-left: 10%;
                } */

                .logo {
                    margin-left: 3%;
                }

                .req-btn {
                    margin-left: 10px;
                    margin-right: 10px;
                }

                .reviewText {
                    font-size: 5px;
                }
            }
        </style>

        <div class="row" style="margin-top:-100px;">

            <div class="col-md-12">

                <div class="col-md-12" style="font-size: 16px;">
                    <div class="top_left_logo company_flex" style="width: 600px;">
                        <!-- <div class="logo_bottom">
                @if ($vendor_id->profile_image != null)
<img class="logo-bottom" src="{{ asset('upload_images/vendor_profile/' . $vendor_id->profile_image) }}" alt="No image">
@else
<img class="logo-bottom" src="{{ asset('assets/images/default.png') }}" alt="No image">
@endif
            </div> -->
                        <div class="logo_bottom">
                            @if ($vendor_id->profile_image != null)
                                <img style="margin-top:20px;" class="logo-bottom"
                                    src="{{ asset('upload_images/vendor_profile/' . $vendor_id->profile_image) }}"
                                    alt="No image" style="width: 300px; height: 400px;">
                            @else
                                <img style="margin-top:20px;" class="logo-bottom"
                                    src="{{ asset('assets/images/default.png') }}" alt="No image"
                                    style="width: 300px; height: 400px;">
                            @endif
                        </div>

                        <div class="logo_info">
                            <div class="logo_type">
                                <p style="color: black;">
                                    <span>{{ $data['products'][0]->sub_category }}</span>
                                </p>
                            </div>
                            <div class="logo_name mt-1 mb-2 company_logo_name">
                                <h1 style="font-size: 20px;">{{ $business->business_title }}</h1>
                                @if ($vendor_id->verified_vendor == 1)
                                    <a href="" class="check_in_cy">
                                        <img src="{{ asset('assets/images/verified_check.png') }}">
                                    </a>
                                @endif
                            </div>
                            <div class="logo_location" style="padding-top: 10px!important;">
                                <!-- <h1 style="font-size: 24px;"><i class="bi bi-geo-alt " style="color:#F4E059; font-size: 22px!important;"></i>{{ $business->location }},
                        {{ $business->city }}, {{ $business->country }}</h1> -->
                                <p style="font-size: 11px; font-weight: bold; color: #F4E059;margin-top:9px;">
                                    <i class="bi bi-geo-alt" style="font-size: 16px!important;"></i>
                                    {{ $business->location }}, {{ $business->city }}, {{ $business->country }}
                                </p>
                            </div>
                            <div class="logo_rate" style="margin-top: -14px;">
                                <div style="font-size: 10px; margin-top: -3px; margin-left: 3px;">
                                    @for ($i = 0; $i < 5; $i++)
                                        @if ($i < $avg_review)
                                            <i class="fa fa-star" style="color: #ff9800;"></i>
                                        @else
                                            <i class="fa fa-star"></i>
                                        @endif
                                    @endfor
                                </div><br>
                                <span class="count count_cy reviewText"
                                    style="margin-left: 10px; margin-top: 8px!important;">
                                    ({{ $business->rating_count }} Reviews)
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    @media only screen and (max-width: 768px) {
                        /* .btnb {
                            margin-right: -110px !important;
                        } */


                        /* .top {
                            margin-top: -15px;
                        } */

                        /* .rt {
                            margin-left: 14px !important;
                        } */

                        .btn {
                            font-size: 10px;
                            width: 120px !important;
                            margin-top: 11px !important;
                        }
                    }
                </style>
                <div class="top_right top">
                    <div class="req-btn">
                        <h1 class="btn brow_btn btnb shadowbox"
                            style="width:150px;background-color: #f4e059;font-weight: 600;padding-left: 19px;padding-right: 17px;text-decoration: none;">
                            <a style="color:black;text-align:center;"
                                href="{{ route('request_call', $business->id) }}">Request Call</a>
                        </h1>
                    </div>
                    <div class="req-btn">
                        <!-- <h1 class="btn brow_btn" data-toggle="modal" style="margin-left: 5px;margin-top: 7px;background-color: #f4e059;color:black;font-weight: 600;text-decoration: none;" data-target="#myModal" data-backdrop="false">View Brochure</h1> -->
                        <h1 class="btn brow_btn btnb shadowbox"
                            style="width:150px;margin-top: 7px;background-color: #f4e059;color:black;font-weight: 600;text-decoration: none;"
                            data-backdrop="false"><a href="#rfq" style="color:black;text-align:center;">Request
                                Quotation</h1></a>
                    </div>

                    <!--  <div class="view_broch">
                        <h1 data-toggle="modal" style="margin-top: 19px;" data-target="#myModal" data-backdrop="false">View Brochure</h1>
                    </div>-->


                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <h4 class="modal-title" id="myModalLabel"></h4>
                                </div>
                                <div class="modal-body">
                                    <iframe class="mg-fluid blur-up lazyload bg-img"
                                        src="{{ asset('upload_images/business_document/' . $business->business_document) }}"
                                        width="100%" height="600px" style="object-fit:cover;"
                                        frameborder="0"></iframe>
                                    <!-- <img
                                        src="{{ asset('upload_images/business_document/' . $business->business_document) }}"
                                        width="100%" height="600px"  frameborder="0"> -->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default"
                                        data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>






                </div>



            </div>


        </div>
    </div>
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

                @if ($vendor_id->verified_vendor == 1)
                    <div class="verify veriy_re">
                        <h1><span><i class="fa fa-check" aria-hidden="true"></i>
                                Verified Listing</span></h1>
                    </div>
                @endif

                <div class="body_part">
                    <div class="business_detail  mt-3">




                        <div class="business_title">

                            <h1>Description</h1>

                        </div>
                        <hr>
                        {{--
                        <div class="business_image">
                            <img class="logo-bottom rounded"
                                src="{{ asset('upload_images/business_image/' . $business->business_image) }}"
                                alt="">
                        </div> --}}

                        <div class="business_para">
                            <p style="text-align: left; padding: 5px; padding-right: 20px;">
                                {{ $business->business_description }}</p>
                        </div>

                        <br>
                        <br>




                    </div>
                </div>




                <div class="product_part">
                    <br>



                    <div class="product">
                        <div class="product_title">
                            <h1>Product And Service</h1>
                            <hr>
                        </div>
                        {{-- {{ dd($data) }} --}}
                        <div class="product_dtail" style="overflow-x: auto; margin: 20px;">
                            <style>
                                /* Default styles (not applied on mobile screens) */
                                .lightbox {
                                    /* Define default styles here (e.g., centering the lightbox) */
                                    /* position: absolute;
    top: 50%;
    left: 50%; */
                                    /* transform: translate(10%, 30%); */
                                }

                                /* Media query for mobile screens */
                                @media (max-width: 768px) {
                                    .lightbox {
                                        /* Apply styles only on screens with a maximum width of 768px (adjust as needed) */
                                        transform: translate(1%, 50%);
                                    }

                                    .wdth {
                                        max-width: 50px !important;
                                    }
                                }
                            </style>




                            <!-- <link href="{{ asset('assets/card/css/styles.css') }}" rel="stylesheet"> -->
                            <link href="{{ asset('assets/card/css/swiper-bundle.min.css') }}" rel="stylesheet">
                            <link rel="stylesheet"
                                href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap">
                            <!-- Link to Swiper CSS -->
                            <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

                            <style>
                                .slide-container {
                                    max-width: 1120px;
                                    width: 100%;
                                    padding: 40px 0;
                                }

                                .slide-content {
                                    margin: 0 40px;
                                    overflow: hidden;
                                    border-radius: 25px;
                                    height: 430px;
                                }

                                .image-content,
                                .card-content {
                                    display: flex;
                                    flex-direction: column;
                                    align-items: center;
                                    padding: 10px 14px;
                                }

                                .image-content {
                                    position: relative;
                                    row-gap: 5px;
                                    padding: 25px 0;
                                }

                                .overlay {
                                    position: absolute;
                                    left: 0;
                                    top: 0;
                                    height: 100%;
                                    width: 100%;
                                    background-color: #4070F4;
                                    border-radius: 25px 25px 0 25px;
                                }

                                .overlay::before,
                                .overlay::after {
                                    content: '';
                                    position: absolute;
                                    right: 0;
                                    bottom: -40px;
                                    height: 40px;
                                    width: 40px;
                                    background-color: #4070F4;
                                }

                                .overlay::after {
                                    border-radius: 0 25px 0 0;
                                    background-color: #FFF;
                                }

                                .card-image {
                                    position: relative;
                                    height: 150px;
                                    width: 150px;
                                    border-radius: 50%;
                                    background: #FFF;
                                    padding: 3px;
                                }

                                .card-image .card-img {
                                    height: 100%;
                                    width: 100%;
                                    object-fit: cover;
                                    border-radius: 50%;
                                    border: 4px solid #f4e059;
                                }

                                .name {
                                    font-size: 18px;
                                    font-weight: 500;
                                    color: #333;
                                }

                                .description {
                                    /* font-size: 14px;
  color: #707070;
  text-align: center; */
                                    font-family: "Open Sans", sans-serif;
                                    font-size: 14.8px;
                                    font-weight: 400;
                                    margin-top: 20px;
                                    margin-bottom: -43px;
                                }

                                .button {
                                    border: none;
                                    font-size: 16px;
                                    color: #FFF;
                                    padding: 8px 16px;
                                    background-color: #4070F4;
                                    border-radius: 6px;
                                    margin: 14px;
                                    cursor: pointer;
                                    transition: all 0.3s ease;
                                }

                                .button:hover {
                                    background: #265DF2;
                                }

                                .swiper-navBtn {
                                    color: #f4e059;
                                    transition: color 0.3s ease;
                                }

                                .swiper-navBtn:hover {
                                    color: #4070F4;
                                }

                                .swiper-navBtn::before,
                                .swiper-navBtn::after {
                                    font-size: 35px;
                                }

                                .swiper-button-next {
                                    right: 0;
                                }

                                .swiper-button-prev {
                                    left: 0;
                                }

                                .swiper-pagination-bullet {
                                    background-color: #f4e059;
                                    opacity: 1;
                                }

                                .swiper-pagination-bullet-active {
                                    background-color: #f4e059;
                                }

                                .card {
                                    border-radius: 25px;
                                    background-color: #FFF;
                                    overflow: hidden;
                                    /* Ensure content doesn't overflow from curved edges */
                                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                                    transition: box-shadow 0.3s ease;
                                    border-radius: 25px 25px 25px 25px !important;
                                    /* Apply rounded top edges to image section */
                                    height: 400px;


                                }

                                .ssize {

                                    width: calc(50% - 16px) !important;
                                    /* Adjust width for two cards in a row with some spacing */
                                    margin-bottom: 20px;
                                    /* Add some space between rows of cards */

                                }

                                .pname {
                                    font-family: "Open Sans", sans-serif;
                                    font-size: 24.4px;
                                    padding-bottom: 7px;
                                    margin-top: 17px !important;
                                    font-weight: 410;
                                }

                                .price {
                                    color: grey;
                                    font-size: 18px;
                                    padding-bottom: 5px;
                                }

                                .card:hover {
                                    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
                                }

                                .image-content {
                                    position: relative;
                                    background-size: cover;
                                    object-fit: cover;
                                    background-position: center;
                                    background-repeat: no-repeat;
                                    height: 200px;
                                    border-radius: 25px 25px 0 0;
                                    /* Apply rounded top edges to image section */
                                }


                                .card-content {
                                    padding: 20px;
                                    /* Adjust padding to your preference */
                                    border-radius: 25px 25px 0 0;
                                    /* Apply rounded top edges to image section */
                                }

                                .swiper-navBtn:hover {
                                    color: #fca510 !important;
                                }

                                .this-card{
                                    width:45%; margin-left:11px; margin-right:11px;
                                    text-align: center;
                                }

                                .card-wrapper{
                                    justify-content:center;
                                }

                                @media screen and (max-width: 995px) {
                                                                         .this-card{
                                    width:100%; margin-left:5px; margin-right:5px;
                                }
                                .card-wrapper{
                                    justify-content:normal;
                                }
                                }
                                @media screen and (max-width: 768px) {
                                    .slide-content {
                                        margin: 0 10px;
                                    }

                                    .swiper-navBtn {
                                        display: none;
                                    }

                                    /* ... Your existing CSS ... */


                                    @media only screen and (max-width: 767px) {
                                        .ssize {
                                            /* Your large screen styles for ssize class */

                                            /* width: 100%!important; */
                                            /* Adjust width for two cards in a row with some spacing */
                                            /* margin-bottom: 20px;  */
                                            /* Add some space between rows of cards */

                                        }
                                    }

                                    /* ... Your other CSS ... */

                                }
                            </style>


                            <div class="slide-container swiper">
                                <div class="slide-content">
                                    <div class="card-wrapper swiper-wrapper">
                                        @foreach ($data['products'] as $key => $item)
                                            <div class="card swiper-slide this-card">
                                                <!-- <div class="image-content" style=""> -->
                                                <div class="image-content"
                                                    style="background-image: url('{{ asset('upload_images/business_image/' . $business->business_image) }}'); background-size: cover;object-fit: cover; background-position: center; background-repeat: no-repeat;height:200px;">

                                                </div>

                                                
                                                <div class="card-content" style="margin-top:-20px;">
                                                    <h1 class="pname" style="text-align:center;"><b>{{ $item->product_name }}</b></h1>
                                                    <p class="price" style="text-align:center;"> {{ $item->product_price_from }} BD -
                                                        {{ $item->product_price_to }} BD</h5>
                                                    <p class="description"
                                                        style="text-align: center;!important;margin-top:-8px;">
                                                        {{ $item->product_description }}</p>

                                                    <!-- <button class="button">{{ $item->product_price_from }} - {{ $item->product_price_to }}</button> -->
                                                </div>
                                            </div>
                                        @endforeach




                                    </div>
                                </div>

                                <div class="swiper-button-next swiper-navBtn"></div>
                                <div class="swiper-button-prev swiper-navBtn"></div>
                                <div class="swiper-pagination"></div>
                            </div>





                            <script src="{{ asset('assets/card/js/swiper-bundle.min.js') }}"></script>

                            <!-- JavaScript -->
                            <script src="{{ asset('assets/card/js/script.js') }}"></script>








                            <script>
                                // Initialize the lightbox for the product images
                                lightbox.option({
                                    // Add any specific options you need for the lightbox library
                                });
                            </script>

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
                                                    background: rgba(0, 0, 0, 0.6);
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
                                                    padding: 0.5rem;
                                                    ;
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
                                                    background: rgba(0, 0, 0, 0.3);
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
                                                    transform: scale(1.5, 1.5);
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
                                                    width: 100%;
                                                    /* fallback */
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
                                                    width: 100%;
                                                    /* can't take this out either as it breaks Chrome */
                                                    width: calc(100%/var(--n));
                                                    pointer-events: none;
                                                }

                                                /* Default styles for the image */
                                                #gallery-image {
                                                    height: auto;
                                                    /* Set to auto so that the aspect ratio is maintained */
                                                }

                                                /* Media query for mobile devices with a maximum width of 767px */
                                                @media (max-width: 767px) {
                                                    #gallery-image {
                                                        height: 100%;
                                                        /* Set the height to 100% on mobile view */
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
                                                        width: 100%;
                                                        /* fallback */
                                                        width: calc(var(--n)*100%);
                                                        height: 50vw;
                                                        max-height: 100vh;
                                                        transform: translate(calc(var(--i, 0)/var(--n)*-100% + var(--tx, 0px)));
                                                    }

                                                }
                                            </style>




                                            <div class="slider-wrapper" style="padding-right:10px;">

                                                <div class="slider-container"
                                                    style="padding:10px;height:300px!important;">


                                                    @forelse ($gallery_image as $data)
                                                        <img src="{{ asset('upload_images/gallery_image/' . $data->gallery_image) }}"
                                                            style="width:355px;height:266.25px;padding:10px;">


                                                    @empty
                                                        <p> gallery images not added</p>
                                                    @endforelse

                                                    @foreach ($gallery_image_1 as $data_1)
                                                        <img src="{{ asset('upload_images/gallery_image/' . $data_1->gallery_image) }}"
                                                            style="width:355px;height:266.25px;padding:10px;">
                                                    @endforeach
                                                </div>

                                                <div class="slider-controls" style="display:none;">
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

                <div class="row">

                    <div class="col-md-12">

                        <div class="gallery">

                            <div class="gallery_main">
                                <div class="gallery_title mb-2">

                                    <h1>Gallery otside</h1>

                                </div>
 <hr>
<div class="spe-cor ">
            <div id="spe-cor" class="carousel carousel-correspondence slide">
                <div class="carousel-inner">








                    <div class="carousel-inner">
                        @forelse ($gallery_image as $data)
<div class="item active">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="thumbnail row ">
                                    <img style="height:209px;" src="{{ asset('upload_images/gallery_image/' . $data->gallery_image) }}" alt="Gallery image">

                                </div>
                            </div>
                        </div>
@empty
                        <p> Gallery images not added</p>
@endforelse

                      @foreach ($gallery_image_1 as $data_1)
<div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="thumbnail row">
                                    <img  style="height:209px;" src="{{ asset('upload_images/gallery_image/' . $data_1->gallery_image) }}" alt="Gallery image">

                                </div>
                            </div>
                        </div>
@endforeach




                    </div>
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



                <!-- ====================MOBILE VIEW Brochure==================== -->

                <style>
                    /* .shadowbox {
  box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
} */

                    /* Apply hover effect */
                    /* .shadowbox:hover {
  box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.3);

} */


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
                        background-color: rgba(0, 0, 0, 0.1);
                        /* For example, setting a semi-transparent black background */
                        /* Or change the opacity */
                        opacity: 0.8;
                        /* For example, reducing the opacity to 80% */
                    }


                    @media only screen and (max-width: 767px) {
                        .containerss {
                            display: block !important;
                        }

                        .containersss {
                            display: none !important;
                        }
                    }
                </style>

                <div class="right_tl containerss" style="display:none;">
                    <br>
                    <div class="mge_row" id="rfq">


                        <div class="mge_btn">

                            <h1 class="shadowbox" data-toggle="modal" data-target="#myModal" data-backdrop="false">
                                <button type="button" class="btn ">View Brochure</button>
                            </h1>


                        </div>

                        <br>
                        <br>


                    </div>
                </div>

                <!-- ====================MOBILE VIEW Brochure end==================== -->





                <div class="row">

                    <div class="col-md-12">

                        <div class="gallery">

                            <div class="gallery_main">

                                <div class="gallery_title"
                                    style="display: flex; align-items: center; justify-content: space-between">
                                    <h1>Item Reviews</h1>
                                    <h5 class="btn btnb" data-toggle="modal" data-target="#myModal2"
                                        style="background-color: #f4e059;text-decoration: none;margin-top:25px;margin-right: 25px; font-size:1.5rem;">
                                        Add Review
                                    </h5>
                                </div>


                                <hr>

                                <div class="comment ">
                                    @forelse ($reviewOne as $item_one)
                                        <div
                                            style="background : @if ($loop->even) rgba(244, 224, 89, 0.27) @endif">


                                            <div class="comment_li">
                                                <div class="comment_flex d-flex ">

                                                    <div class="u_image">
                                                        @if ($item_one->profile_image)
                                                            <img class=""
                                                                src="{{ asset('upload_images/customer_profile/' . $item_one->profile_image) }}"
                                                                alt="" style="margin-top: 5px;">
                                                        @else
                                                            <img class=""
                                                                src="{{ asset('assets/images/default.png') }}"
                                                                alt="" style="margin-top: 5px;">
                                                        @endif
                                                    </div>
                                                    <div class="u_d ml-2 mx-5 ">

                                                        <div class="review_flex">

                                                            <div class="u_name">
                                                                <h1 style="padding-top:5px;">
                                                                    {{ $item_one->customer_name }}</h1>
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
                                                            <div id="stars-existing" class="starrr company_rate"
                                                                data-rating='{{ $item_one->rating }}'>
                                                            </div>

                                                        </div>
                                                        <p style="padding-top:5px;" class="comment_d">
                                                            {{ $item_one->review }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    @empty
                                        <p class="company_review"
                                            style=" padding-top:5px;text-align: center;margin-right:65px;">No Reviews
                                            Found...!</p>
                                    @endforelse
                                </div>




                            </div>

                            <div id="read_more" class="mt-5">

                                @foreach ($reviewTwo as $key => $item_one)
                                    <div
                                        style="background : @if ($loop->even) rgba(244, 224, 89, 0.27) @endif">

                                        <div class="comment_li ">
                                            <div class="comment_flex d-flex ">

                                                <div class="u_image">
                                                    @if ($item_one->profile_image)
                                                        <img class=""
                                                            src="{{ asset('upload_images/customer_profile/' . $item_one->profile_image) }}"
                                                            alt="">
                                                    @else
                                                        <img class=""
                                                            src="{{ asset('assets/images/default.png') }}"
                                                            alt="">
                                                    @endif
                                                </div>
                                                <div class="u_d ml-2 mx-5 ">

                                                    <div class="review_flex">

                                                        <div class="u_name">
                                                            <h1 style="padding-top:5px;">
                                                                {{ $item_one->customer_name }}</h1>
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
                                                        <div id="stars-existing" class="starrr company_rate"
                                                            data-rating='{{ $item_one->rating }}'>
                                                        </div>

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




                <!-- <form action="{{ route('update_review', $business->id) }}" method="POST">
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
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="review" placeholder="Send Review"
                                            rows="3" required></textarea>
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


                </form>{{-- review form end --}} -->



            </div>{{-- col-md-8 end --}}


            <div class="col-md-4" id="rfq">
                @if ($vendor_id->verified_vendor == 1)
                    <div class="verify verify_right">
                        <h1><span><i class="fa fa-check" aria-hidden="true"></i>
                                Verified Listing</span></h1>
                    </div>
                @endif

                <div class="right_tl">
                    <div class="right_mge">
                        <div class="right_li d-flex">

                            <div>
                                @if ($vendor_id->profile_image == null)
                                    <img class="" src="{{ asset('assets/images/default.png') }}"
                                        alt="">
                                @else
                                    <img class=""
                                        src="{{ asset('upload_images/vendor_profile/' . $vendor_id->profile_image) }}"
                                        alt="">
                                @endif

                            </div>

                            <div class="u_name text-center">
                                <h1>{{ $vendor_id->name }} {{ $vendor_id->lname }}</h1>
                            </div>

                        </div>

                    </div>

                    <div class="mge_row">
                        <form id="contact-form" name="contact-form" action="{{ route('requestFQ') }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="vendor_id" value="{{ $vendor_id->id }}">
                            <div class="form-group change_input ">
                                <label for="exampleInputEmail1">Full Name</label>
                                <input type="text" class="form-control m-0" style="font-size:15px;"
                                    id="exampleInputEmail1" name="name" required aria-describedby="emailHelp"
                                    placeholder="Your Name">
                            </div>
                            <div class="form-group change_input_mge">
                                <label for="exampleInputEmail1">Email </label>
                                <input type="email" class="form-control" style="font-size:15px;"
                                    id="exampleInputEmail1" name="email" required aria-describedby="emailHelp"
                                    placeholder="Your Email">
                            </div>
                            <div class="form-group change_input_mge">
                                <label for="exampleInputEmail1">Messages</label>
                                <textarea class="form-control" style="font-size:15px;" id="exampleFormControlTextarea1" name="message" required
                                    rows="3" placeholder="Send a Message....."></textarea>
                            </div>
                            <div class="form-group change_input_mge">
                                <label for="exampleInputEmail1">Document</label>
                                <input type="file" name="customer_document" required id="customer_document">
                            </div>

                            <div class="mge_btn">

                                    @if (Auth::guard('customer')->check())
                                        <button type="submit" class="btn " style='width:100% !important; background-color:#f4e059; padding-top:4%; padding-bottom:4%;font-size:1em; font-weight:600; '>Request for Quotation</button>
                                    @elseif(Auth::guard('vendor')->check())
                                        <button type="button" class="btn " style='width:100% !important; background-color:#f4e059; padding-top:4%; padding-bottom:4%;font-size:1em; font-weight:600;'>Request for Quotation</button>
                                    @else
                                        <button type="button" class="btn " style='width:100% !important; background-color:#f4e059; padding-top:4%; padding-bottom:4%;font-size:1em; font-weight:600;'>Request for Quotation</button>
                                    @endif
                                <!-- <h1 data-toggle="modal" data-target="#myModal" data-backdrop="false"><button type="button" class="btn " >View Brochure</button></h1> -->


                            </div>

                        </form>

                        <br>
                        <br>


                    </div>
                </div>






                <br>
                <div class="right_tl containersss">
                    <br>
                    <div class="mge_row" id="rfq">


                        <div class="mge_btn">

                            <h1 data-toggle="modal" data-target="#myModal" data-backdrop="false"><button
                                    type="button" class="btn ">View Brochure</button></h1>


                        </div>

                        <br>
                        <br>


                    </div>
                </div>




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
                            <p>{{ $business->sunday_from }}
                                @if ($business->sunday_from != 'Closed')
                                    <span>to {{ $business->sunday_to }}</span>
                                @endif
                            </p>
                        </div>
                    </div>

                    <hr style="margin-bottom: 0px !important;margin-top: 0px !important;">

                    <div class="d-flex day_time">
                        <div class="day">
                            <p>Monday</p>
                        </div>
                        <div class="timing">
                            <p>{{ $business->monday_from }}
                                @if ($business->monday_from != 'Closed')
                                    to {{ $business->monday_to }}
                                @endif
                            </p>
                        </div>
                    </div>

                    <hr style="margin-bottom: 0px !important;margin-top: 0px !important;">


                    <div class="d-flex day_time">
                        <div class="day">
                            <p>Tuesday</p>
                        </div>
                        <div class="timing">
                            <p>{{ $business->tuesday_from }}
                                @if ($business->tuesday_from != 'Closed')
                                    to {{ $business->tuesday_to }}
                                @endif
                            </p>
                        </div>
                    </div>

                    <hr style="margin-bottom: 0px !important;margin-top: 0px !important;">


                    <div class="d-flex day_time">
                        <div class="day">
                            <p>Wednesday</p>
                        </div>
                        <div class="timing">
                            <p>{{ $business->wednesday_from }}
                                @if ($business->wednesday_from != 'Closed')
                                    to {{ $business->wednesday_to }}
                                @endif
                            </p>
                        </div>
                    </div>
                    <hr style="margin-bottom: 0px !important;margin-top: 0px !important;">


                    <div class="d-flex day_time">
                        <div class="day">
                            <p>Thursday</p>
                        </div>
                        <div class="timing">
                            <p>{{ $business->thursday_from }}
                                @if ($business->thursday_from != 'Closed')
                                    to {{ $business->thursday_to }}
                                @endif
                            </p>
                        </div>
                    </div>
                    <hr style="margin-bottom: 0px !important;margin-top: 0px !important;">


                    <div class="d-flex day_time">
                        <div class="day">
                            <p>Friday</p>
                        </div>
                        <div class="timing">
                            <p>{{ $business->friday_from }}
                                @if ($business->friday_from != 'Closed')
                                    to {{ $business->friday_to }}
                                @endif
                            </p>
                        </div>
                    </div>
                    <hr style="margin-bottom: 0px !important;margin-top: 0px !important;">


                    <div class="d-flex day_time">
                        <div class="day">
                            <p>Saturday</p>
                        </div>
                        <div class="timing">
                            <p>{{ $business->saturday_from }}
                                @if ($business->saturday_from != 'Closed')
                                    to {{ $business->saturday_to }}
                                @endif
                            </p>
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
                            <p><i class="bi bi-geo-alt"></i> <span> {{ $business->location }},
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
                            <a style="margin-top: 4px;" href="{{ $business->facebook }}"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a style="margin-top: 4px;" href="{{ $business->twitter }}"> <i
                                    class="fab fa-twitter"></i></a>
                            <a style="margin-top: 4px;" href="{{ $business->instagram }}"><i
                                    class="fab fa-instagram"></i></a>
                            <a style="margin-top: 4px;" href="{{ $business->linkedin }}"><i
                                    class="fab fa-linkedin"></i></a>

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
            /*Correspondence Slider*/

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

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>

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
                                        <input id="input-1" name="rating" class="rating rating-loading"
                                            data-min="0" data-max="5" data-step="1" value="2">


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
                                            <textarea class="form-control" id="exampleFormControlTextarea1" name="review" placeholder="Send Review"
                                                rows="3" required></textarea>
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
