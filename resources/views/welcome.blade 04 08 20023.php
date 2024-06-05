<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" integrity="sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>pro build final</title>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


    <link href="{{ asset('assets/font/knife_princess/knife_princess/KnifePrincess-MMPY.ttf') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.theme.default.css') }}" rel="stylesheet">




    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .businesses_css .active {
            width: 170px;
            margin-right: 10px;
        }

        .open>.dropdown-menu {

            max-height: 260px;
            overflow-y: scroll;
        }

        .btn-cart2 {
            height: 40px;
            color: #fff;
            line-height: 40px;
            border-radius: 50px;
            padding: 0 25px;
            background-color: #F4E059;
        }

        .logindcolor {
            color: white;
        }

        .logindcolor:hover {
            color: yellow;
        }

        ul#dropdown-menu {
            height: 300px;
            overflow: auto;
        }

        #dropdown-menu .dropdown-menu li {
            cursor: pointer;
        }
    </style>
    <style>
        @media only screen and (max-width: 767px) {
            .containerss {
                display: block !important;
            }

        }
    </style>

</head>

<body class="home_body" id="body_popup">





    <div id="bg_expired">




        <div id="js-preloader" class="js-preloader">
            <div class="preloader-inner">
                <span class="dot"></span>
                <div class="dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>



        <header class="header-area wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
            <div class="container" id="header-container">
                <div class="row">
                    <div class="col-12">
                        <nav class="main-nav">
                            <a href="{{ route('index') }}" class="logo middle_logo header-logo header_logo" style="margin-top: 38px;">

                                <img class="logo-img" height="70px" width="30px" src="{{ asset('assets/images/logo.png') }}" alt="">

                            </a>

                            <ul class="nav">

                                @if (Auth::guard('customer')->check())

                                <li>
                                    <b><a href="{{ route('customer') }}" class="logined logindcolor">
                                            <i class="bi bi-box-arrow-in-right"></i> &nbsp; Customer</a></b>
                                </li>
                                <li class="add_business containerss" style="display:none;">
                                    <b><a href="{{ route('customer_login') }}" style="background:#F4D03F!important;">
                                            Submit Tender</a></b>
                                </li>
                                <li class="add_business_logined">
                                    <b><a href="{{ route('customer') }}" class="logindcolor">
                                            Submit Tender</a></b>
                                </li>

                                @elseif(Auth::guard('vendor')->check())
                                {{-- <div class="row"> --}}
                                <li>
                                    <b><a href="{{ route('vendor') }}" class="logined logindcolor">
                                            <i class="bi bi-box-arrow-in-right"></i> &nbsp; Vendor</a></b>
                                </li>

                                @if ($check_b['vendor_bl'] < $check_b['business_listing']) <li class="add_business_logined">
                                    <b><a href="{{ route('vendor') }}" style="">
                                            Add Business</a></b>
                                    </li>
                                    @else
                                    <li class="add_business_logined">
                                        <b><a href="{{ route('vendor_package_monthly') }}">
                                                Add Business</a></b>
                                    </li>
                                    @endif
                                    {{-- <li class = "logined_name">>
                          <b id="vendor_name" style="color: white"></b>
                    </li> --}}
                                    {{-- </div> --}}

                                    @else



                                    <li>
                                        <b><a href="{{ route('customer_login') }}">
                                                <i class="bi bi-box-arrow-in-right"></i> &nbsp; sign in</a></b>
                                    </li>


                                    <li class="add_business containerss" style="display:none;">
                                        <b><a href="{{ route('customer_login') }}" style="background:#F4D03F!important;">
                                                Submit Tender</a></b>
                                    </li>



                                    <li class="add_business">
                                        <b><a href="{{ route('customer_login') }}">
                                                Submit Tender</a></b>
                                    </li>
                                    <!--<li><a href="" style="font-weight: bold;font-size: 16px"> </a></li>-->


                                    @endif


                            </ul>
                            <a class='menu-trigger'>
                                <span>Menu</span>
                            </a>

                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <script type="text/javascript">
            $(document).ready(function(argument) {
                $('.cat_dropdown').click(function() {
                    $('#dropdown-menu').toggle()
                })

                $('.dropdown-submenu.drop_li').click(function() {
                    $('.dropdown-submenu.drop_li ul.dropdown-menu').hide();

                    if ($(this).children('ul.dropdown-menu').hasClass('opened')) {
                        console.log("Enter")
                        $(this).children('ul.dropdown-menu').hide()
                    } else {
                        console.log("Enter d")
                        $(this).children('ul.dropdown-menu').show()
                    }
                    $(this).children('ul.dropdown-menu').toggleClass('opened')
                })

                $('#dropdown-menu .dropdown-menu li').click(function() {
                    $('#dropdown-menu').toggle()
                })
                @if(Auth::guard('customer') - > check())
                // $('#Login-Account').modal('hide');
                // @elseif(Auth::guard('vendor')->check())
                // $('#Login-Account').modal('hide');
                // @else
                // $('#Login-Account').modal('show');
                // @endif

                // $('.close_modal').click(function() {
                //   // alert()
                //   $("#Login-Account").modal('hide');
                //   // $("#Login-Account .close").click();
                // });




                @if(Auth::guard('vendor') - > check())
                var id = {
                    !!json_encode(Auth::guard('vendor') - > id()) !!
                };
                $.ajax({
                    url: '{{ url('
                    getVendor_detail ') }}',
                    data: {
                        'id': id,
                    },
                    type: "GET",
                    headers: {
                        'X-CSRF-Token': '{{ csrf_token() }}',
                    },
                    success: function(data) {
                        // alert( JSON.stringify(data.vendor_name.name))
                        $('#vendor_name').html(data.vendor_name.name)


                    },

                });
                @endif


            });
        </script>

        <style type="text/css">
            .dropdown-submenu {
                position: relative;
            }

            .heart.fas {
                color: red !important;
            }

            .heart.white_heart {
                color: #cccecf !important;
            }

            .dropdown-submenu .dropdown-menu {
                top: 0;
                left: 100%;
                margin-top: -6px;
                margin-left: -1px;
                -webkit-border-radius: 0 6px 6px 6px;
                -moz-border-radius: 0 6px 6px 6px;
                border-radius: 0 6px 6px 6px;
            }

            .dropdown-submenu:hover .dropdown-menu {
                /*display: block;
                transition: ease 0.3s;
*/
            }

            .test {
                padding: 5px 10px 10px 10px !important;

            }

            .drop_li:hover .test {
                font-weight: 600;
                background-color: #F4E059 !important;
                color: white;
                padding: 5px 10px 10px 10px !important;
                transition: ease 0.3s;
            }

            /* .dropdown-submenu a:after {
                background-color: #F4E059 !important;
                display: block;
                content: " ";
                float: right;
                width: 0;
                height: 0;
                border-color: transparent;
                border-style: solid;
                border-width: 5px 0 5px 5px;
                margin-top: 5px;
                margin-right: -10px;
            } */

            .dropdown-submenu:hover a:after {
                border-left-color: #ffffff;
            }

            .dropdown-submenu.pull-left {
                float: none;
            }

            .dropdown-submenu.pull-left .dropdown-menu {
                left: -100%;
                margin-left: 10px;
                /*-webkit-border-radius: 6px 0 6px 6px;
          -moz-border-radius: 6px 0 6px 6px;
          border-radius: 6px 0 6px 6px;*/
            }

            .dropdown-container {
                position: relative;
            }

            .right_banner {
                padding-right: 0px;
            }
        </style>
        <style>
            .main-button {
                display: inline-block;
                padding: 8px 16px;
                background-color: #F4D03F;
                color: white;
                border: none;
                border-radius: 4px;
                text-decoration: none;
            }

            .main-button.btn-small {
                padding: 6px 12px;
                font-size: 14px;
            }
        </style>
        <div class="main-banner" style="
  background-image:url({{ env('IMG_URL') . 'upload_images/banner_image/' . $data['banner_image']['home_image'] }});    background-repeat: no-repeat;
    background-size: cover; background-position: center center;left: 0;right: 0;color: #fff;  height: auto !important; width:100%;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="top-text header-text">
                            <div class="image_title">

                                <img src="{{ asset('images/Construction_digitalized.png') }}" style=" margin-top: 125px;">
                            </div>

                            @if (Auth::guard('customer')->check())

                            <button> </button>
                            @elseif (Auth::guard('vendor')->check())

                            <!-- <h1 class="btn btnb" style="display:none;">

<form id="search-form" name="searchText" role="search"
                    >
                    @csrf

                                <div class=filter_btn>
                                  <button class="main-button btnb" type="submit"><span><a style="color:white;" href="{{ route('vendor_login') }}">Submit tender</a></span></button>
                                </div>
</form>
</h1>
<h1 class="btn btnb" style="display:none;">
<form id="search-form" name="searchText" role="search"
                    >
                    @csrf
<div class=filter_btn>
                                  <button class="main-button btnb" type="submit"><span><a style="color:white;" href="{{ route('vendor_login') }}">Register Business</a></span></button>
                                </div>

</form>

</h1> -->
                            <br>
                            <div style="display: flex; justify-content: center; align-items: center;">
                                <div class="btn btnb" style="display:none; ">
                                    <div class="filter_btn">

                                        <a class="main-button btnb btn-small" href="{{ route('vendor_login') }}">Submit tender</a>
                                    </div>

                                </div>

                                <div class="btn btnb" style="display:none;">

                                    <div class="filter_btn">

                                        <a class="main-button btnb btn-small" href="{{ route('vendor_login') }}">Register Business</a>


                                    </div>

                                </div>
                            </div>


                            @else
                            <br>
                            <!-- <h1 class="btn btnb" style="margin-top: 23px;background-color: #f4e059;font-weight: 600;margin-left: 20%;margin-right: 20%;text-decoration: none;display:none;">
<a style="color:black;" href="{{ route('vendor_login') }}">Submit tender</a>
</h1>
<h1 class="btn btnb" style="margin-top: 23px;background-color: #f4e059;font-weight: 600;margin-left: 20%;margin-right: 20%;text-decoration: none;display:none;">
<a style="color:black;" href="{{ route('vendor_login') }}">Register Business</a>
</h1>                -->
                            <div style="display: flex; justify-content: center; align-items: center;">
                                <div class="btn btnb" style="display:none; ">
                                    <div class="filter_btn">

                                        <a class="main-button btnb btn-small" href="{{ route('vendor_login') }}">Submit tender</a>
                                    </div>

                                </div>

                                <div class="btn btnb" style="display:none;">

                                    <div class="filter_btn">

                                        <a class="main-button btnb btn-small" href="{{ route('vendor_login') }}">Register Business</a>


                                    </div>

                                </div>
                            </div>
                            @endif



                        </div>
                    </div>
                </div>
                {{-- style="margin-top: 10%;margin-right: -200px;width: 1046px;" --}}
                <form id="search-form" name="searchText" method="GET" role="search" action="{{ route('searchText') }}">
                    @csrf
                    <div class="row width_filter">
                        <div class="col-lg-12 filter_header ">

                            <div class="drop_one">
                                {{-- <fieldset> --}}
                                <div class="looking">
                                    <div class="selectlogo1 looking_logo"><img src="{{ asset('assets/images/search.png') }}" style="height: 20px;width: 20px;margin-top: 5px;"></div>

                                    <input type="address" name="looking" style="color: black" class="searchText_1 looking_text" placeholder="What are you looking for?" autocomplete="on">
                                </div>
                                {{-- </fieldset> --}}
                            </div>

                            <div class="drop_one ">
                                {{-- <fieldset> --}}
                                <div class="filter_location">
                                    <div class="selectlogo1"><img src="{{ asset('assets/images/location.png') }}" style="height: 20px;width: 20px;margin-top: 2px; margin-left: 8px;"></div>
                                    <input type="address" name="location" style="color: black" class="searchText " placeholder="Location" autocomplete="on">
                                </div>
                                {{-- </fieldset> --}}
                            </div>

                            <div class="drop_one ">
                                {{-- <fieldset> --}}
                                <div class="category">
                                    {{-- <div class="selectlogo2"><img src="{{ asset('assets/images/shopping.png') }}"
                                    style="height: 20px;width: 20px;margin-top: 5px;">
                                </div> --}}
                                <!-- <select name="price" class="form-select category-li" aria-label="Default select example"  id="chooseCategory"  onchange="this.form.click()">
                              <option class="choose" selected>Choose category</option>
                              @foreach ($data['category'] as $val)
                              <option value="{{ $val['id'] }}" >{{ $val['category'] }}</option>
                              @endforeach
                          </select> -->



                                {{-- <div class="cate_flex">
                            <div class="selectlogo2"><img src="{{ asset('assets/images/shopping.png') }}"
                                style="height: 20px;width: 20px;margin-top: 5px;">
                            </div>

                            <select class="select2 category_select js-example-programmatic form-control" name="category_select" onfocus='this.size=full-width;' data-validation-required-message="Select Boat">

                                <option class="category_name" value="">


                                    Choose Category </option>
                                <div class="opt_tl">

                                    @forelse ($data['category'] as $key => $cat1)
                                    <optgroup label="{{ $cat1['category'] }}">
                                        @foreach ($data['subCategory'] as $key => $subCat)
                                        @if ($cat1['id'] == $subCat['category_type'])

                                        <option value="{{ $subCat['id'] }}">
                                            {{ $subCat['sub_category'] }}
                                        </option>
                                        @endif
                                        @endforeach
                                    </optgroup>
                                    @empty
                                    <option value="">Create Boat First</option>
                                    @endforelse
                                </div>

                            </select>


                            <i class='fas fa-angle-down'></i>

                        </div> --}}

                        <fieldset>
                            <div class="selectlogo2"><img src="{{ asset('assets/images/shopping.png') }}" style="height: 20px;width: 20px;margin-top: 5px;"></div>
                            <!-- <select name="price" class="form-select category-li" aria-label="Default select example"  id="chooseCategory"  onchange="this.form.click()">
                                 <option class="choose" selected>Choose category</option>
                                 @foreach ($data['category'] as $val)
                                 <option value="{{ $val['id'] }}" >{{ $val['category'] }}</option>
                                 @endforeach
                             </select> -->
                            <div class="dropdown-root">
                                <div class="dropdown cat_dropdown" style="text-align: left;" id="cat_dropdown">
                                    <button class="btn btn-default  cat_button" id="categoryButton" type="button">Category <i class='fas fa-angle-down'></i></button>
                                    <input type="hidden" name="sub_category_filter_id" id="subCategoryInput">
                                </div>
                                <div class="dropdown-container">
                                    <ul class="dropdown-menu" id="dropdown-menu">
                                        @foreach ($data['category'] as $key => $cat1)
                                        <li class="dropdown-submenu drop_li" style="border-bottom: 1px solid #e0e4f6;display: block;background: white;padding: inherit;">
                                            <a class="test" tabindex="-1" href="javascript:void(0)">
                                                {{ $cat1['category'] }}<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                @foreach ($data['subCategory'] as $key => $subCat)
                                                @if ($cat1['id'] == $subCat['category_type'])
                                                <li style=""><a tabindex="-1" onclick="changeSubCategory('{{ $subCat['id'] }}', '{{ $subCat['sub_category'] }}')">{{ $subCat['sub_category'] }}</a>
                                                </li>
                                                @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                        @endforeach

                                    </ul>

                                </div>
                            </div>
                        </fieldset>




                        {{-- </fieldset> --}}

                        @foreach ($data['category'] as $key => $cat)

                        @endforeach

                    </div>
            </div>
            <div class="drop_one">
                <div class=filter_btn>
                    <button class="main-button" type="submit"><span>Search</span></button>
                </div>
            </div>
        </div>
    </div>
    </form>



    <div id="testimonials" style="margin-top: 47px;  margin-bottom:15px;" class="">
        <div class=" cat_port">

            <div class="owl-carousel owl-theme category_carousel" id="category_carousel">

                @foreach ($data['category'] as $key => $val)
                <div class="item" style="text-align:center;">
                    <a onclick="sub_category({{ $val['id'] }})" data-target="#subCatModal" class="icon">
                        <p class="carosal_css cat_icon" style="">
                            <img class="icon " src="{{ env('IMG_URL') . 'upload_images/category_icon/' . $val['category_icon'] }}" id="category_img" style="display: block;width: 25px;margin-bottom:10px;">
                        </p>
                        <span class="cat_title">{{ $val['category'] }}</span>

                    </a>
                </div>
                @endforeach
            </div>
        </div>


    </div>
    </div>
    </div>

    <!-- <a href="#"  data-toggle="modal" class="btn_modal" data-target="#Login-Account">register</a> -->
    <!-- <div class="modal" id="Login-Account">
   <div class="modal-dialog modal-dialog-login  modal-dialog-centered">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close close_modal" id="close_modal" style="margin-left: 400px" data-dismiss="modal">&times;</button>
         </div>
         <div class="modal-body">
            <div class="product-details-inner">
               <div class="row">
                  <div class="col-lg-12">
                     <p class="text-center"><img src="{{ asset('assets/images/logo.png') }}" style="height: 74px;width: 100px;"></p>
                     <div class="product-details-des">
                        <h3 class="product-name">Join / Sign in using</h3>
                        <div class="manufacturer-name">
                           <p>Enter Email</p>
                           <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="manufacturer-name">
                           <p>Enter Password</p>
                           <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <br>
                        <br>
                        <div class="row">
                          <div class="col-md-8">
                           <a class="btn btn-cart2 close_modal" id="" data-dismiss="modal" href="#">Continue</a>
                          </div>
                          <div class="col-md-3" style="margin-left: 29px;">
                             <a type="submit" class="btn btn-cart2" onclick="modal_submit()" id="modal_submit">Submit</a>
                          </div>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div> -->

    <!-- <section id="testimonials" class="testimonials">
    <ul class="categories1">
        {{-- <li><a href="#" class="icon"><img src="{{asset('assets/images/man.png')}}"  > <span> helth</span></a></li> --}}
        <li><a href="#" class="icon"><img src=" {{ asset('assets/images/man.png') }}" ><span class="text-secondary"> Health</span></a></li>

        <li><a href="#" class="icon"><img src=" {{ asset('assets/images/car.png') }}" ><span class="text-secondary"> Transportation</span></a></li>
        <li><a href="#" class="icon"><img src="{{ asset('assets/images/builder.png') }}" ><span class="text-secondary"> Architecture</span></a></li>
        <li><a class="text-secondary" href="#"><span class="icon"><img src="{{ asset('assets/images/write.png') }}"></span > View</a></li>
        <li><a class="text-secondary" href="#"><span class="icon"><img src="{{ asset('assets/images/write.png') }}"></span > View</a></li>

      </ul>
</section> -->
    <style>
        .subcatblock {
            display: none;
        }
    </style>
    <div class="container sub_category_css subcatblock" id="subCatModal">

        @foreach ($data['category'] as $key => $cat)
        {{-- @if ($cat->sub_count >= 4) --}}
        <div id="testimonials" style="margin-top: -52px;margin-right: 6px; margin-bottom:15px;" class="subCat {{ 'cat_' . $cat->id }} {{ $cat->id == $data['active_Category'] ? '' : 'hide' }}" style="padding-left: 80px">
            <div class="owl-carousel owl-theme sub_cat_carousel" id="">
                @foreach ($data['subCategory'] as $key => $subCat)
                @if ($subCat->category_type == $cat->id)
                <div class="item" style="text-align:center;">
                    <a href="{{ route('subCategorys', $subCat->id) }}" class="icon">
                        <p class="carosal_css" style="background: #F4E059;">

                            <img src="{{ env('IMG_URL') . 'upload_images/sub_category_icon/' . $subCat['sub_category_icon'] }}" id="sub_category_img" style="display: block;width: 50px;margin-bottom:10px;margin: 0 auto;">
                        </p>
                        <span class="text-secondary">{{ strtoupper($subCat->sub_category) }}</span>
                    </a>
                    <br>
                    {{-- <p
                                        style="background-color: #e0e1e2;padding-right: 10px;padding-left: 10px;border-radius: 6px;width: 120px;margin-left: 15%" class="sub_cate">
                                        {{ $subCat->list_count }} Listings</p> --}}
                </div>
                @endif
                @endforeach
            </div>
        </div>
        {{-- @else --}}


        {{-- @endif --}}
        @endforeach

    </div>
    <style>
        @media only screen and (max-width: 768px) {
            .btnb {
                display: block !important;
                display: inline-block !important;
            }

        }
    </style>
    @if (Auth::guard('vendor')->check())
    <h1 class="btn btnb">
        <a style="color:black;"></a>
    </h1><br>
    @else
    <!-- <h1 class="btn btnb" style="margin-top: 23px;background-color: #f4e059;font-weight: 600;padding-left: 19px;padding-right: 17px;margin-left: 20%;margin-right: 20%;text-decoration: none;display:none;">
        <a style="color:black;" href="{{ route('customer_login') }}">Submit tender</a>
    </h1><br> -->
    @endif


    <!-- <h1 class="btn btnb" style="margin-top: 23px;background-color: #f4e059;font-weight: 600;padding-left: 19px;padding-right: 17px;margin-left: 20%;margin-right: 20%;text-decoration: none;display:none;"><a style="color:black;" >Submit Tender</a></h1><br> -->

    <br>

    <div class=" business_css">
        <div class="Recommended">
            <div class="popular">
                <section id="about">
                    <div class="container businesses_css" style="">
                        <div class="row about-cols">
                            <h1 style="">Featured Businesses</h1>
                            <div id="testimonials1" class="">
                                <div class=" owl-carousel owl-theme
                                business_carousel" style="">
                                    @foreach ($business_data as $k => $val)
                                    @if ($val['featured_business'] == 1)

                                    <div class="" data-aos=" fade-up" data-aos-delay="50" style="display: block;">
                                        <div class="about-col" style="">
                                            <?php $color = $val['status'] ? '#cacccf' : 'red'; ?>
                                            <div class="available_tag home_available" style="position: absolute;z-index: 100;background-color: <?php echo $color; ?>;width: 38%;left: 62%;text-align: center;top: 4%;">
                                                {{ $val['status'] ? 'Available' : 'Not Available' }}
                                            </div>
                                            <div class="img ">
                                                {{-- <a href="javascript:void(0)"
                                                        onclick="addToWishList({{ $val['id'] }})"> --}}
                                                {{-- <img src="assets/img/icon/fav.jpg" alt=""
                                                    style="top: 15px !important;width: 20px;position: absolute;left: 13px;"class="heart"> --}}

                                                @if (Auth::guard('customer')->check())

                                                <i onclick="wishlist_heart('#wishlistHeart{{ $val['b_id'] }}', '{{ $val['b_id'] }}')" id="wishlistHeart{{ $val['b_id'] }}" class="far fa-heart heart {{ \App\Models\Wishlist::where('user_id', Auth::guard('customer')->id())->where('business_id', $val['b_id'])->first()
    ? 'fas'
    : '' }}"></i>

                                                @else
                                                <i class="far fa-heart heart "></i>
                                                @endif

                                                {{-- </a> --}}
                                                <div class="b_image b_image_home">
                                                    <img src="{{ asset('upload_images/business_image/' . $val['business_image']) }}" alt="" style="height: 171px" class="img-fluid ">
                                                </div>
                                                <div class="icon">
                                                    {{-- <i class="bi bi-brightness-high"></i> --}}
                                                    <img src="{{ asset('upload_images/business_logo/' . $val['business_logo']) }}" alt="" style="height: 54px; width:54px;" class="img-fluid ">
                                                </div>
                                            </div>
                                            <h2 class="title ">
                                                <a href="#">{{ $val['business_title'] }} </a>
                                                @if ($val['verified_vendor'] == 1)
                                                <a href="" class="check">
                                                    <img src="{{ asset('assets/images/verified_check.png') }}">
                                                </a>
                                                @endif
                                            </h2>
                                            <div class="rate">
                                                <div id="stars-existing" class="starrr" data-rating='{{ $val['rating_avg'] }}'> </div>
                                                <span class="count">({{ $val['rating_count'] }}
                                                    Reviews)</span>
                                            </div>

                                            <div class="location">
                                                <span>
                                                    <img src="{{ asset('assets/img/icon/cil_location-pin.png') }}" style="width: 15px;float: left;margin-left: 5px;margin-right: 10px;">
                                                    {{ $val['country'] }},{{ $val['city'] }}
                                                </span>
                                            </div>
                                            <a href="{{ route('customer_company', $val['b_id']) }}" style="color:#2F2F30;">

                                                <p>
                                                    <b>
                                                        view
                                                    </b>
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>






    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>


    <div class="container">
        <div class="row">
            <!-- <img src="{{ asset('storage/advertisement_images/51179941.png') }}" > -->
            <!--  <img src="{{ asset('storage/advertisement_images/51179941.png') }}">
          <img src="{{ asset('storage/app/public/advertisement_images/51179941.png') }}"> -->


            <div class="col-md-6">
                <img src=" {{ asset('assets/images/5117994 1.png') }}" alt="Home" class="zoom_img" style="width: 100%;height:70%;">

            </div>

            <div class="col-md-6 right_banner">
                <img src=" {{ asset('assets/images/5256934 1.png') }}" alt="Home" class="zoom_img" style="width: 100%;height:70%;">
            </div>

            <!-- @foreach ($data['add_image'] as $val)
        <div class="col-md-6">
          <img src="{{ $val['add_image'] }}" alt="Home" class="zoom_img" style="width: 100%;height:70%;">
      </div>
        @endforeach -->
        </div>

        <h3 class="place_nearme" style="text-align: center;font-weight: 600; margin-top:0px !important; font-size: 26px;">Discover place Near You</h3>
        <!--

        <div class="table" style="margin-top: 20px;">
            <div class="imageshade">
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-sm-6 p-2 ">
                            @foreach ($data['home_category_1'] as $val)

                                <div class="iconhover">
                                    {{-- <img src="assets/images/house.jpg" class="image2 " style=" border-radius: 8px;">
                                <div class="overlay"> --}}
                                    <img src="{{ asset('upload_images/category_home_image/' . $val->background_image) }}"
                                        class="image2 " style=" border-radius: 8px;">
                                    <div class="overlay">
                                        <a href="{{ route('subCategorys', $val->sub_category) }}"
                                            class="overicon">

                                            <img class="logo-img"
                                                src="{{ asset('upload_images/category_home_image/' . $val->centered_image) }}"
                                                alt="">

                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-6 col-sm-6 p-2 ">
                            @foreach ($data['home_category_2'] as $item)
                                <div class="iconhover">
                                    {{-- <img src="assets/images/cctv.jpg" class="image2" style=" border-radius: 8px;">
                                <div class="overlay"> --}}

                                    <img src="{{ asset('upload_images/category_home_image/' . $item->background_image) }}"
                                        class="image2" style=" border-radius: 8px;">
                                    <div class="overlay">
                                        <a href="{{ route('subCategorys', $val->sub_category) }}"
                                            class="overicon">
                                            <img class="logo-img"
                                                src="{{ asset('upload_images/category_home_image/' . $item->centered_image) }}"
                                                alt="">

                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="imageshade">
                <div class="container">
                    <div class="row bottom_cate">
                        <div class="col-6 col-md-3 p-2 mt-0">
                            @foreach ($data['home_category_3'] as $val)
                                <div class="iconhover">
                                    {{-- <img src="assets/images/Furniture.jpg" class="image10"
                                    style=" border-radius: 8px;"> --}}
                                    <img src="{{ asset('upload_images/category_home_image/' . $val->background_image) }}"
                                        class="image10" style=" border-radius: 8px;">
                                    <div class="overlay">
                                        <a href="{{ route('subCategorys', $val->sub_category) }}"
                                            class="overicon">
                                            <img class="logo-img"
                                                src="{{ asset('upload_images/category_home_image/' . $val->centered_image) }}"
                                                alt="">

                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-6 col-md-3 p-2 ">
                            <div class="viewimage">
                                @foreach ($data['home_category_4'] as $val)
                                    <div class="iconhover">
                                        {{-- <img src="assets/images/Kitchen.jpg" class="image10" style=" border-radius: 8px;"> --}}
                                        <img src="{{ asset('upload_images/category_home_image/' . $val->background_image) }}"
                                            class="image10" style=" border-radius: 8px;">
                                        <div class="overlay">
                                            <a href="{{ route('subCategorys', $val->sub_category) }}"
                                                class="overicon">
                                                <img class="logo-img"
                                                    src="{{ asset('upload_images/category_home_image/' . $val->centered_image) }}"
                                                    alt="">

                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-12 col-md-6 bottom_hover p-2 ">
                            @foreach ($data['home_category_5'] as $val)
                                <div class="iconhover">
                                    <img src="{{ asset('upload_images/category_home_image/' . $val->background_image) }}"
                                        class="image10" style=" border-radius: 8px;">

                                    {{-- <img src="assets/images/carpenter.jpg" class="image10" style=" border-radius: 8px;"> --}}
                                    <div class="overlay">
                                        <a href="{{ route('subCategorys', $val->sub_category) }}"
                                            class="overicon">
                                            {{-- <img class="logo-img" src="{{ asset('assets/images/logo.png') }}" alt=""> --}}
                                            <img class="logo-img"
                                                src="{{ asset('upload_images/category_home_image/' . $val->centered_image) }}"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <style>
            .image-container {
                position: relative;
            }

            .image2 {
                display: block;
                width: 100%;
                height: auto;
            }

            .color-layer {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(139, 128, 0);
                /* Replace 'yellow' with your desired color */
                opacity: 0.5;
                /* Adjust the opacity as needed */
            }
        </style>
        <div class="table" style="margin-top: 20px;">
            <div class="imageshade">
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-sm-6 p-2 ">
                            @foreach ($data['home_category_1'] as $val)
                            <div class="iconhover">
                                <img src="{{ asset('upload_images/category_home_image/' . $val->background_image) }}" class="image2">
                                <div class="color-layer " id="content"></div>
                                <div class="overlay" onmouseover="showContent()" onmouseout="hideContent()" style=" background-color: transparent!important;">
                                    <a href="{{ route('subCategorys', $val->sub_category) }}" class="overicon">
                                        <img class="logo-img" src="{{ asset('upload_images/category_home_image/' . $val->centered_image) }}" alt="">
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="col-6 col-sm-6 p-2 ">
                            @foreach ($data['home_category_2'] as $item)
                            <div class="iconhover">
                                <img src="{{ asset('upload_images/category_home_image/' . $item->background_image) }}" class="image2" style="border-radius: 8px;">
                                <div class="color-layer" id="content2"></div>
                                <div class="overlay" onmouseover="showContent2()" onmouseout="hideContent2()" style=" background-color: transparent!important;">
                                    <a href="{{ route('subCategorys', $val->sub_category) }}" class="overicon">
                                        <img class="logo-img" src="{{ asset('upload_images/category_home_image/' . $item->centered_image) }}" alt="">
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="imageshade">
                <div class="container">
                    <div class="row bottom_cate">

                        <div class="col-6 col-md-3 p-2 mt-0">
                            @foreach ($data['home_category_3'] as $val)
                            <div class="iconhover">

                                <img src="{{ asset('upload_images/category_home_image/' . $val->background_image) }}" class="image10" style="border-radius: 8px; height: 200px; width: 100%; object-fit: cover;">
                                <div class="color-layer" id="content3"></div>
                                <div class="overlay" onmouseover="showContent3()" onmouseout="hideContent3()" style=" background-color: transparent!important;">
                                    <a href="{{ route('subCategorys', $val->sub_category) }}" class="overicon">
                                        <img class="logo-img" src="{{ asset('upload_images/category_home_image/' . $val->centered_image) }}" class="logo-img" alt="" style="height: 150px; width: 100%; object-fit: cover;">
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>


                        <div class="col-6 col-md-3 p-2">
                            <div class="viewimage">
                                @foreach ($data['home_category_4'] as $val)
                                <div class="iconhover">
                                    <img src="{{ asset('upload_images/category_home_image/' . $val->background_image) }}" class="image10" style="border-radius: 8px; height: 200px; width: 100%; object-fit: cover;">
                                    <div class="color-layer" id="content4"></div>
                                    <div class="overlay" onmouseover="showContent4()" onmouseout="hideContent4()" style=" background-color: transparent!important;">

                                        <a href="{{ route('subCategorys', $val->sub_category) }}" class="overicon">
                                            <img class="logo-img mg-fluid blur-up lazyload bg-img" alt="Gallery image" style="height: 200px; width: 100%; object-fit: cover;" src="{{ asset('upload_images/category_home_image/' . $val->centered_image) }}" alt="">
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="col-12 col-md-6 bottom_hover p-2 ">
                            @foreach ($data['home_category_5'] as $val)
                            <div class="iconhover">
                                <img src="{{ asset('upload_images/category_home_image/' . $val->background_image) }}" class="image10 img-fluid blur-up lazyload bg-img" style="border-radius: 8px;height:200px;width:100%;object-fit:cover;">
                                <div class="color-layer" id="content5"></div>
                                <div class="overlay" onmouseover="showContent5()" onmouseout="hideContent5()" style=" background-color: transparent!important;">
                                    <a href="{{ route('subCategorys', $val->sub_category) }}" class="overicon">
                                        <img class="logo-img" src="{{ asset('upload_images/category_home_image/' . $val->centered_image) }}" alt="">
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <script>
        function showContent() {
            var contentElement = document.getElementById("content");
            contentElement.style.display = "none";
        }

        function hideContent() {
            var contentElement = document.getElementById("content");
            contentElement.style.display = "block";
        }

        function showContent2() {
            var contentElement = document.getElementById("content2");
            contentElement.style.display = "none";
        }

        function hideContent2() {
            var contentElement = document.getElementById("content2");
            contentElement.style.display = "block";
        }

        function showContent3() {
            var contentElement = document.getElementById("content3");
            contentElement.style.display = "none";
        }

        function hideContent3() {
            var contentElement = document.getElementById("content3");
            contentElement.style.display = "block";
        }

        function showContent4() {
            var contentElement = document.getElementById("content4");
            contentElement.style.display = "none";
        }

        function hideContent4() {
            var contentElement = document.getElementById("content4");
            contentElement.style.display = "block";
        }

        function showContent5() {
            var contentElement = document.getElementById("content5");
            contentElement.style.display = "none";
        }

        function hideContent5() {
            var contentElement = document.getElementById("content5");
            contentElement.style.display = "block";
        }
    </script>

    <div class="business_css recommand_top">
        <div class="Recommended">
            <div class="popular">
                <section id="about">
                    <div class="container" style="">
                        <div class="row about-cols">
                            <h1 style="text-align: center;margin-top: -47px;font-weight: bold;font-size: 26px;">
                                Recommended</h1>
                            <div id="testimonials1" class="">
                                <div class=" owl-carousel owl-theme
                                business_carousel">
                                    @foreach ($business_data as $k => $val)
                                    @if ($val['recommended'] == 1)
                                    <div class="" data-aos=" fade-up" data-aos-delay="50" style="">
                                        <div class="about-col" style="">
                                            <?php $color = $val['status'] ? '#8cf179ab' : 'red'; ?>
                                            <div class="available_tag home_available" style="position: absolute;z-index: 100;background-color: <?php echo $color; ?>;width: 38%;left: 62%;text-align: center;top: 4%;">
                                                {{ $val['status'] ? 'Available' : 'Not Available' }}
                                            </div>

                                            <div class="img ">
                                                {{-- <img src="assets/img/icon/fav.jpg" alt=""
                                                    style="top: 15px !important;width: 20px;position: absolute;left: 13px;" class="heart"> --}}
                                                <i onclick="wishlist_heart('#wishlistHeart1{{ $val['b_id'] }}', '{{ $val['b_id'] }}')" id="wishlistHeart1{{ $val['b_id'] }}" class="far fa-heart heart {{ \App\Models\Wishlist::where('user_id', Auth::guard('customer')->id())->where('business_id', $val['b_id'])->first()
    ? 'fas'
    : 'white_heart' }}"></i>

                                                <div class="b_image b_image_home">
                                                    <img src="{{ asset('upload_images/business_image/' . $val['business_image']) }}" alt="" class="img-fluid b_image">
                                                </div>
                                                <div class="icon">
                                                    {{-- <i class="bi bi-brightness-high"></i> --}}
                                                    <img src="{{ asset('upload_images/business_logo/' . $val['business_logo']) }}" alt="" style="height: 54px; width:54px;" class="img-fluid ">
                                                </div>
                                            </div>
                                            <h2 class="title">
                                                <a href="#">{{ $val['business_title'] }} </a>

                                                @if ($val['verified_vendor'] == 1)
                                                <a href="" class="check">
                                                    <img src="{{ asset('assets/images/verified_check.png') }}">
                                                </a>
                                                @endif

                                            </h2>
                                            <div class="rate">
                                                <div id="stars-existing" class="starrr" data-rating='{{ $val['rating_avg'] }}'> </div>
                                                <span class="count">({{ $val['rating_count'] }}
                                                    Reviews)</span>

                                            </div>
                                            <div class="location">
                                                <img src="{{ asset('assets/img/icon/cil_location-pin.png') }}" style="width: 15px;float: left;margin-left: 5px;margin-right: 10px;">
                                                {{ $val['country'] }},{{ $val['city'] }}
                                            </div>
                                            <a href="{{ route('customer_company', $val['b_id']) }}" style="color:#2F2F30;">

                                                <p>
                                                    <b>
                                                        view
                                                    </b>
                                                </p>
                                            </a>

                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>








    <div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="margin: auto;margin-top: 0px">

                    <img src="{{ asset('assets/images/11075 1.png') }}" class="" alt=" Home" style="">

                </div>
            </div>
        </div>
    </div>



    <br>

    <div class="business_css" style="height: auto;">
        <div class="Recommended">
            <div class="popular">
                <section id="about">
                    <div class="container">
                        <div class="row about-cols">
                            <h1 style="text-align: center;margin-top: -42px;font-weight: bold;font-size: 26px;">Real
                                Estate</h1>
                            <div id="testimonials1" class="">
                                <div class=" owl-carousel owl-theme
                                business_carousel" id="">
                                    @foreach ($business_data as $k => $val)
                                    @if ($val['recommended'] == 1)
                                    <div class="" data-aos=" fade-up" data-aos-delay="50">
                                        <div class="about-col">
                                            <div class="like_heart">
                                                <?php $color = $val['status'] ? '#8cf179ab' : 'red'; ?>
                                            </div>
                                            <div class="available_tag home_available" style="position: absolute;z-index: 100;background-color: <?php echo $color; ?>;width: 38%;left: 62%;text-align: center;top: 4%;">
                                                {{ $val['status'] ? 'Available' : 'Not Available' }}
                                            </div>

                                            <div class="img ">
                                                {{-- <img src="assets/img/icon/fav.jpg" alt=""
                                                        style="top: 15px !important;width: 20px;position: absolute;left: 13px;" class="heart"> --}}
                                                <i onclick="wishlist_heart('#wishlistHeart12{{ $val['b_id'] }}', '{{ $val['b_id'] }}')" id="wishlistHeart12{{ $val['b_id'] }}" class="far fa-heart heart {{ \App\Models\Wishlist::where('user_id', Auth::guard('customer')->id())->where('business_id', $val['b_id'])->first()
    ? 'fas'
    : 'white_heart' }}"></i>

                                                <div class="b_image b_image_home">
                                                    <img src="{{ asset('upload_images/business_image/' . $val['business_image']) }}" alt="" class="img-fluid b_image">
                                                </div>

                                                <div class="icon">
                                                    {{-- <i class="bi bi-brightness-high"></i> --}}
                                                    <img src="{{ asset('upload_images/business_logo/' . $val['business_logo']) }}" alt="" style="height: 54px; width:54px;" class="img-fluid ">
                                                </div>
                                            </div>
                                            <h2 class="title">
                                                <a href="#">{{ $val['business_title'] }} </a>

                                                @if ($val['verified_vendor'] == 1)
                                                <a href="" class="check">
                                                    <img src="{{ asset('assets/images/verified_check.png') }}">
                                                </a>
                                                @endif

                                            </h2>
                                            <div class="rate">

                                                <div id="stars-existing" class="starrr" data-rating='{{ $val['rating_avg'] }}'> </div>
                                                <span class="count">({{ $val['rating_count'] }}
                                                    Reviews)</span>

                                            </div>
                                            <div class="location">
                                                <img src="{{ asset('assets/img/icon/cil_location-pin.png') }}" style="width: 15px;float: left;margin-left: 5px;margin-right: 10px;">
                                                {{ $val['country'] }},{{ $val['city'] }}
                                            </div>

                                            <a href="{{ route('customer_company', $val['b_id']) }}" style="color:#2F2F30;">

                                                <p>
                                                    <b>
                                                        view
                                                    </b>
                                                </p>
                                            </a>

                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>



    <footer id="footer" style="">

        <div class="footer-top" style="height: auto">
            <div class="container mt-3" style="">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3> Ready to get started ?<span></span></h3>
                        @if (Auth::guard('customer')->check())
                        <button id="addb"> <a href="{{ route('customer_login') }}">Submit Tender</a></button>
                        @elseif (Auth::guard('vendor')->check())
                        <button id="addb"> <a href="{{ route('vendor') }}">Add Business</a></button>
                        @else
                        <button id="addb"> <a href="{{ route('customer_login') }}">Submit Tender</a></button>
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
                            <li><a href="{{ route('index') }}">
                                    Browse Category</a></li>
                            <li><a href="{{ route('index') }}">Search Business</a></li>
                            <li><a href="{{ route('customer') }}">Login to your account</a></li>
                        </ul>
                        <div class="social-links mt-3">
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-facebook"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php
    $host = url('http://localhost/mindnotix/admin/probuild/public/assets/images/');
    ?>
    <script type="text/javascript" src="{{ URL::asset('assets/js/view_star.js') }}"></script>
    {{-- <script type="text/javascript" src="{{ URL::asset('assets/vendor/jquery/jquery.min.js') }}"></script> --}}
    <script type="text/javascript" src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}">
    </script>

    <script type="text/javascript" src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/animation.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/imagesloaded.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/styles.js') }}"></script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

    <script>
        function sub_category(id) {
            // var val = id;
            $('#subCatModal').removeClass('subcatblock');
            $('.subCat').addClass('hide');
            $('.cat_' + id).removeClass('hide');
        }


        function wishlist_heart(id, key) {
            $.ajax({
                url: "{{ route('wishlists_store') }}",
                type: 'POST',
                data: {
                    "_token": '{{ csrf_token() }}',
                    id: key
                },
                success: function(response) {
                    $(id).toggleClass('fas');
                },

            })
        }


        $('.sub_cat_carousel').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            dots: true,
            responsive: {
                250: {
                    items: 1
                },

                350: {
                    items: 2
                },
                450: {
                    items: 3
                },
                650: {
                    items: 4
                }
            }
        });


        $('.category_carousel').owlCarousel({
            loop: false,
            margin: 10,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 4
                },
                1000: {
                    items: 6
                }
            }
        });



        $(".vertical-center-4").slick({
            dots: true,
            vertical: true,
            centerMode: true,
            slidesToShow: 4,
            slidesToScroll: 2
        });


        $('.responsive').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>
    <script type="text/javascript">
        function modal_submit() {
            // alert();
            var email = $('#email').val();
            var password = $('#password').val();
            $.ajax({
                url: '{{ url('
                login / vendor ') }}',
                data: {
                    'email': email,
                    'password': password,
                },
                type: "POST",
                headers: {
                    'X-CSRF-Token': '{{ csrf_token() }}',
                },
                success: function(data) {
                    location.reload();

                },

            });
        }
    </script>
    <script type="text/javascript">
        $('.business_carousel').owlCarousel({
            loop: false,
            margin: 30,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        });
    </script>

    @if (Auth::guard('vendor')->check())

    @if ($check_b['expired_popup'] == false)

    <script>
        //                 $(document).ready(function() {
        //                     $('.dropdown-submenu a.test').on("click", function(e) {
        //                         $(this).next('.dropdown-menu').toggle();
        //                         e.stopPropagation();
        //                         e.preventDefault();
        //                     });
        //                 });

        //  $(document).ready(function(){
        //   $(".dropdown-submenu a.test").click(function(){
        //     $("ul").toggle();
        //   });
        // });



        function PopUp(hideOrshow) {
            if (hideOrshow == 'hide') document.getElementById('ac-wrapper').style.display = "none";
            else document.getElementById('ac-wrapper').removeAttribute('style');
        }
        window.onload = function() {
            setTimeout(function() {
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