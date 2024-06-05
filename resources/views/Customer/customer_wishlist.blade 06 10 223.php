<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
        integrity="sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>pro build final</title>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


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
    .dropdown-container {
    position: relative;
} ul#dropdown-menu {
    height: 300px;
    overflow: auto;
}
#dropdown-menu .dropdown-menu li{
    cursor:pointer;
}

        .businesses_css .active {
            width: 170px;
            margin-right: 10px;
        }

        .btn-cart2 {
            height: 40px;
            color: #fff;
            line-height: 40px;
            border-radius: 50px;
            padding: 0 25px;
            background-color: #F4E059;
        }

    </style>

</head>

<body class="home_body">

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
                        <a href="{{ route('index') }}" class="logo  middle_logo header-logo header_logo"
                        style="margin-top: 38px;">

                        <img class="logo-img" height="70px" width="30px"
                            src="{{ asset('assets/images/logo.png') }}" alt="">

                    </a>

                        <ul class="nav">

                            @if (Auth::guard('customer')->check())

                                <li>
                                    <b><a href="{{ route('customer') }}" style="color:white !important;"
                                            class="logined">
                                            <i class="bi bi-box-arrow-in-right"></i> &nbsp; Customer</a></b>
                                </li>
                                 <li class="add_business_logined " >
                                    <b><a href="{{ route('vendor_package_monthly') }}">
                                            Submit Tender</a></b>
                                </li>


                            @elseif(Auth::guard('vendor')->check())
                                {{-- <div class="row"> --}}
                                <li>
                                    <b><a href="{{ route('vendor') }}" style="color:white !important;"
                                            class="logined">
                                            <i class="bi bi-box-arrow-in-right"></i> &nbsp; Vendor</a></b>
                                </li>
                                 @if($data['add_business'] = true)
                                 <li class="add_business_logined">
                                    <b><a href="{{ route('vendor') }}">
                                            Add Buisness</a></b>
                                </li>
                                @elseif($data['add_business'] = false)
                                 <li class="add_business_logined">
                                    <b><a href="{{ route('vendor_package_monthly') }}">
                                            Add Buisness</a></b>
                                </li>
                                @endif

                            @else

                            <li>
                                <b><a href="{{ route('vendor_login') }}">
                                        <i class="bi bi-box-arrow-in-right"></i> &nbsp; sign in</a></b>
                            </li>

                            <li class="add_business">
                                <b><a href="{{ route('customer_login') }}">
                                    Submit Tendor</a></b>
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

            @if (Auth::guard('customer')->check())
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


            @if (Auth::guard('vendor')->check())

                // <li><a href="" style="font-weight: bold;font-size: 16px"> Add Buisness</a></li>


            // @elseif(Auth::guard('customer')->check())
                // <li><a href="#">Submit Tendor</a></li>

            // @else
                // <li><a href="{{ route('vendor_login') }}" style="font-weight: bold;font-size: 16px"> Add Buisness</a></li>
                // @endif


            @if (Auth::guard('vendor')->check())
                var id = {!! json_encode(Auth::guard('vendor')->id()) !!};
                $.ajax({
                url: '{{ url('getVendor_detail') }}',
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
            /*display: block;*/
        }
        
        .heart.fas {
            color: red !important;
        }
        .heart.white_heart{
            color: #cccecf !important;
        }
        /*.dropdown-submenu a:after {*/
        /*    display: block;*/
        /*    content: " ";*/
        /*    float: right;*/
        /*    width: 0;*/
        /*    height: 0;*/
        /*    border-color: transparent;*/
        /*    border-style: solid;*/
        /*    border-width: 5px 0 5px 5px;*/
            /*border-left-color: #cccccc;*/
        /*    margin-top: 5px;*/
        /*    margin-right: -10px;*/
        /*}*/

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

    </style>

    <div class="main-banner"
        style="
  background-image:url({{ env('IMG_URL') . 'upload_images/banner_image/' . $data['banner_image']['home_image'] }});    background-repeat: no-repeat;
    background-size: cover; background-position: center center;left: 0;right: 0;color: #fff;  height: auto !important; width:100%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top-text header-text">
                        <div class="image_title">

                            <img src="{{ asset('images/Construction_digitalized.png') }}"
                                style=" margin-top: 125px;">
                        </div>

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
                                <div class="selectlogo1 looking_logo"><img
                                        src="{{ asset('assets/images/search.png') }}"
                                        style="height: 20px;width: 20px;margin-top: 5px;"></div>

                                <input type="address" name="looking" value = "{{$data['looking']}}" class="searchText_1"
                                    placeholder=" what are you looking for?" autocomplete="on">
                            </div>
                            {{-- </fieldset> --}}
                        </div>

                        <div class="drop_one ">
                            {{-- <fieldset> --}}
                            <div class="filter_location">
                                <div class="selectlogo1"><img src="{{ asset('assets/images/location.png') }}"
                                        style="height: 20px;width: 20px;margin-top: 2px; margin-left: 8px;"></div>
                                <input type="address" name="location"  value = "{{$data['location']}}" class="searchText " placeholder=" location"
                                    autocomplete="on">
                            </div>
                            {{-- </fieldset> --}}
                        </div>

                        <div class="drop_one ">
                            {{-- <fieldset> --}}
                            <div class="category">
                                {{-- <div class="selectlogo2"><img src="{{ asset('assets/images/shopping.png') }}"
                                        style="height: 20px;width: 20px;margin-top: 5px;"></div> --}}
                                <!-- <select name="price" class="form-select category-li" aria-label="Default select example"  id="chooseCategory"  onchange="this.form.click()">
                          <option class="choose" selected>Choose category</option>
                          @foreach ($data['category'] as $val)
                          <option value="{{ $val['id'] }}" >{{ $val['category'] }}</option>
                          @endforeach
                      </select> -->
                                
{{-- 
                      <div class="cate_flex">
                        <div class="selectlogo2"><img src="{{ asset('assets/images/shopping.png') }}"
                                style="height: 20px;width: 20px;margin-top: 5px;"></div>

                        <select class="select2 category_select js-example-programmatic form-control"
                            name="category_select" data-validation-required-message="Select Boat" >

                            <option class="category_name" value="">


                                Category </option>
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
                                        <div class="selectlogo2"><img
                                                src="{{ asset('assets/images/shopping.png') }}"
                                                style="height: 20px;width: 20px;margin-top: 5px;"></div>
                                        <!-- <select name="price" class="form-select category-li" aria-label="Default select example"  id="chooseCategory"  onchange="this.form.click()">
                                 <option class="choose" selected>Choose category</option>
                                 @foreach ($data['category'] as $val)
                                 <option value="{{ $val['id'] }}" >{{ $val['category'] }}</option>
                                 @endforeach
                             </select> -->
                             <div class="dropdown-root">
                                        <div class="dropdown cat_dropdown" style="text-align: left;" id="cat_dropdown">
                                            <button class="btn btn-default  cat_button"
                                                id="categoryButton" type="button"
                                                >Category <i class='fas fa-angle-down'></i></button>
                                            <input type="hidden" name="sub_category_filter_id" id="subCategoryInput">
                                           </div>
                                           <div class="dropdown-container"><ul class="dropdown-menu" id="dropdown-menu">
                                                @foreach ($data['category'] as $key => $cat1)
                                                    <li class="dropdown-submenu drop_li"
                                                        style="border-bottom: 1px solid #e0e4f6;display: block;background: white;padding: inherit;">
                                                        <a class="test" tabindex="-1" href="javascript:void(0)" >
                                                            {{ $cat1['category'] }}<span
                                                                class="caret"></span></a>
                                                        <ul class="dropdown-menu">
                                                            @foreach ($data['subCategory'] as $key => $subCat)
                                                                @if ($cat1['id'] == $subCat['category_type'])
                                                                    <li style=""><a tabindex="-1"
                                                                            onclick="changeSubCategory('{{ $subCat['id'] }}', '{{ $subCat['sub_category'] }}')">{{ $subCat['sub_category'] }}</a>
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



            <div id="testimonials" style="margin-top: 47px;  margin-bottom:15px;"
                class="" >
              <div class = " cat_port">

                <div class="owl-carousel owl-theme category_carousel" id="category_carousel">

                    @foreach ($data['category'] as $key => $val)
                        <div class="item" style="text-align:center;">
                            <a onclick="sub_category({{ $val['id'] }})" data-target="#subCatModal"
                                class="icon">
                                <p class="carosal_css cat_icon" style="">
                                    <img class="icon "
                                        src="{{ env('IMG_URL') . 'upload_images/category_icon/' . $val['category_icon'] }}"
                                        id="category_img" style="display: block;width: 25px;margin-bottom:10px;">
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
    <div class="container sub_category_css" id="subCatModal">

        @foreach ($data['category'] as $key => $cat)
            @if ($cat->sub_count >= 4)
                <div id="testimonials" style="margin-top: -52px;margin-right: 6px; margin-bottom:15px;"
                    class="subCat {{ 'cat_' . $cat->id }} {{ $cat->id == $data['active_Category'] ? '' : 'hide' }}"
                    style="padding-left: 80px">
                    <div class="owl-carousel owl-theme sub_cat_carousel" id="">
                        @foreach ($data['subCategory'] as $key => $subCat)
                            @if ($subCat->category_type == $cat->id)
                                <div class="item" style="text-align:center;">
                                    <a href="{{ route('subCategorys', $subCat->id) }}" class="icon">
                                        <p class="carosal_css" style="background: #F4E059;">

                                            <img src="{{ env('IMG_URL') . 'upload_images/sub_category_icon/' . $subCat['sub_category_icon'] }}"
                                                id="sub_category_img"
                                                style="display: block;width: 50px;margin-bottom:10px;margin: 0 auto;">
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
            @else

                <div id="testimonials" style="margin-top: -52px;margin-bottom:15px;"
                    class="row subCat {{ 'cat_' . $cat->id }} {{ $cat->id == $data['active_Category'] ? '' : 'hide' }}"
                    style="padding-left: 80px">
                    @foreach ($data['subCategory'] as $key => $subCat)
                        @if ($subCat->category_type == $cat->id)
                            <div class="item col-sm-4" style="text-align:center;"><a
                                    href="{{ route('subCategorys', $subCat->id) }}" class="icon">
                                    <p class="carosal_css" style="background: #F4E059;">
                                        <img src="{{ env('IMG_URL') . 'upload_images/sub_category_icon/' . $subCat['sub_category_icon'] }}"
                                            class="sub_category_img" id="sub_category_img"
                                            style="display: block;width: 50px;margin-bottom:10px;margin: 0 auto;">
                                    </p>
                                    <span class="text-secondary">{{ strtoupper($subCat->sub_category) }}</span>
                                </a><br>
                                {{-- <p
                                    style="background-color: #e0e1e2;padding-right: 10px;padding-left: 10px;border-radius: 6px;width: 120px;margin-left: 33%;">
                                    {{ $subCat->list_count }} Listings</p> --}}
                            </div>

                        @endif
                    @endforeach
                </div>
            @endif
        @endforeach

    </div>

    {{-- <div class=" business_css">
        <div class="Recommended">
            <div class="popular">
                <section id="about">
                    <div class="container businesses_css" style="">
                        <div class="row about-cols">
                            <h1 style="">Featured Businesses</h1>
                            <div id="testimonials1" class="" >
                  <div class=" owl-carousel owl-theme
                                business_carousel" style="">
                                @foreach ($data['business'] as $val)

                                <?php

 
                                ?>
                                    <div class="" data-aos=" fade-up" data-aos-delay="50" style="display: block;">
                                        <div class="about-col" style="">
                                            <?php $color = $val['status'] ? '#8cf179ab' : 'red'; ?>
                                            <div class="available_tag"
                                               style="position: absolute;z-index: 100;background-color: <?php echo $color; ?>;width: 38%;left: 62%;text-align: center;top: 4%;">
                                                {{ $val['status'] ? 'Available' : 'Not Available' }}</div>
                                            <div class="img ">
                                                <a href="javascript:void(0)"
                                                    onclick="addToWishList({{ $val['id'] }})">
                                                    <img src="assets/img/icon/fav.jpg" alt=""
                                                    style="top: 15px !important;width: 20px;position: absolute;left: 13px;"class="heart">
                                                </a>
                                                <div class = "b_image">
                                                <img src="{{ asset('upload_images/business_image/' . $val['business_image']) }}"
                                                    alt="" style="height: 171px" class="img-fluid ">
                                                    </div>
                                                <div class="icon">
                                                    <i class="bi bi-brightness-high"></i>
                                                </div>
                                            </div>
                                            <h2 class="title ">
                                                <a href="#">{{ $val['business_title'] }} </a>
                                                <a href = "" class = "check">
                                                <img src="{{ asset('assets/images/verified_check.png') }}">
                                                </a>
                                            </h2>
                                            <div class="rate">
                                                <div id="stars-existing" class="starrr" data-rating='3'></div>
                                            </div>

                                            <div class="location">
                                                <span>
                                                    <img src="assets/img/icon/cil_location-pin.png"
                                                        style="width: 15px;float: left;margin-left: 5px;margin-right: 10px;">
                                                    {{ $val['country'] }},{{ $val['city'] }}
                                                </span>
                                            </div>
                                            <p>
                                                <b>
                                                    <a href="{{ route('customer_company', $val['id']) }}"
                                                        style="color:#2F2F30;">view</a>
                                                </b>
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
            </div>
            </section>
        </div>
    </div>
    </div> --}}




{{-- 
                   <div class = "filter_flex">
                           
                            <h1>Search Results “{{$data['looking']}}”</h1>
                            <div class=  "filter_button">
                             <div class = "filter_bg">
                            <button onclick="myFunction()" class="modal__trigger"> <i class="fas fa-filter"></i>
                            Filter
                            </button>
                            </div>

                              <div id="modal_open" class="modal_filter modal__bg bg-primary" >
                              <div class = "filter_tl">
                              {{-- <div class = "row">
                              <div class = "col-4"> 
                              <div class = "filter_head">

                              <h1 onclick = "rating()">Rating</h1>
                              <h1 onclick = "location()">Location</h1>
                              <h1 onclick = "category()">Category</h1>
                              <h1 onclick = "probuild()">Probuild Verified</h1>
                            </div>



    

                            	<div class="filter-content">
                                <div id = "rating">
                                        <div>
                                          <input type="radio" name="rating_search" value="5">
                                          <label>4 <i class="fa fa-star" aria-hidden="true"></i> &above</label>
                                        </div>
                                        <div>
                                        <input type="radio" name="rating_search" value="4">
                                        <label>3 <i class="fa fa-star" aria-hidden="true"></i>& above</label>
                                        </div>
                                        <div>
                                        <input type="radio" name="rating_search" value="3">
                                        <label>2 <i class="fa fa-star" aria-hidden="true"></i> &above</label>
                                        </div>
                                        <div>
                                        <input type="radio" name="rating_search"value="2">
                                        <label>1 <i class="fa fa-star" aria-hidden="true"></i> &above</label>
                                        </div>
                                      </div>

                                <div id = "location">
                              <div class="form-group">
                              <label for="exampleFormControlInput1">Type Location</label>
                              <input type="text" class="form-control" id="exampleFormControlInput1" name = "location" placeholder="Location....">
                             </div>
                                </div>

                                <div id = "category">
                                  <div class="form-group">
    <label for="exampleFormControlSelect1">select Category</label>
    <select class="form-control" name = "category" id="exampleFormControlSelect1">

    @foreach($data['cate_li'] as $item)
    <option value= "{{$item->id}}">{{$item->category}}</option>
    @endforeach
     
    </select>
  </div>
  </div>


                   <div id = "probuild">
                                
                                  <div class="form-group">
    <label for="exampleFormControlSelect1">Probuild Verified</label>
    <select class="form-control" name = "category" id="exampleFormControlSelect1">

    <option value= "1">Yes</option>
    <option value= "0">No</option>
     
    </select>
  </div>

  </div>


     

                 
        </div>
		</div>



 </div>
 </div>
 </div>



                            </div>
                            </div> --}}



                   <div class = "filter_flex wishlist_title">
                           
                            <h1>Wishlists</h1>
                            
 </div>



                            </div>
                            </div>





                             


    {{-- <div class="business_css" style="height: auto;">
        <div class="Recommended">
            <div class="popular">
                <section id="about">
                    <div class="container">
                        <div class="row about-cols title_li">
                     

                            <div id="testimonials1" class="" >
                  <div class=" owl-carousel owl-theme
                               business_carousel " id="">
                                @foreach ($result as $val)
                                        <div class="" data-aos=" fade-up" data-aos-delay="50">
                                            <div class="about-col">
                                            <div class = "like_heart">
                                                <?php $color = $val['status'] ? '#8cf179ab' : 'red'; ?>
                                                </div>
                                                <div class="available_tag"
                                                    style="position: absolute;z-index: 100;background-color: <?php echo $color; ?>;width: 38%;left: 62%;text-align: center;top: 4%;">
                                                    {{ $val['status'] ? 'Available' : 'Not Available' }}</div>

                                                <div class="img ">
                                                    <img src="assets/img/icon/fav.jpg" alt=""
                                                        style="top: 15px !important;width: 20px;position: absolute;left: 13px;" class="heart">

                                                        <div class = "b_image">
                                                    <img src="{{ asset('upload_images/business_image/' . $val['business_image']) }}"
                                                        alt="" class="img-fluid b_image">
                                                        </div>

                                                    <div class="icon">
                                              {{-- <i class="bi bi-brightness-high"></i> --}}
                                                     {{-- <img src="{{ asset('upload_images/business_logo/' . $val['business_logo']) }}"
                                                    alt="" style="height: 54px; width:54px;" class="img-fluid ">
                                                    </div>
                                                </div>
                                                <h2 class="title">
                                                    <a href="#">{{ $val['business_title'] }}   </a>
                                                      @if($val['verified_vendor'] == 1)
                                                <a href = "" class = "check">
                                                <img src="{{ asset('assets/images/verified_check.png') }}">
                                                </a>
                                                @endif
                                                </h2>
                                                <div class="rate">
                                                    <div id="stars-existing" class="starrr" data-rating='5'></div>
                                                </div>
                                                <div class="location">
                                                    <img src="assets/img/icon/cil_location-pin.png"
                                                        style="width: 15px;float: left;margin-left: 5px;margin-right: 10px;">
                                                    {{ $val['country'] }},{{ $val['city'] }}
                                                </div>

                                                 <p>
                                                <b>
                                                    <a href="{{ route('customer_company', $val['id']) }}"
                                                        style="color:#2F2F30;">view</a>
                                                </b>
                                            </p>

                                            </div>
                                        </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
            </div>
            </section>
        </div>
    </div>
    </div> --}} 


   <div class="business_css for_tag" style="height: auto;">
        <div class="Recommended cu_whishlist">
            <div class="popular">
                <section id="about">
                    <div class="container">
                        <div class = "row">
     @foreach ($result as $k=> $val)
     <div class = "col-lg-3 col-md-4 col-12 col-sm-4 ">
      <div class="" data-aos=" fade-up" data-aos-delay="50"
                                             style="display: block;">
                                             <div class="about-col" style="">
                                                <div class="like_heart">
                                                    <?php $color = $val['status'] ? '#8cf179ab' : 'red'; ?>
                                                </div>
                                                 <?php $color = $val['status'] ? '#8cf179ab' : 'red'; ?>
                                                 <div class="available_tag"
                                                     style="position: absolute;z-index: 100;background-color: <?php echo $color; ?>;width: 38%;left: 62%;text-align: center;top: 4%;">
                                                     {{ $val['status'] ? 'Available' : 'Not Available' }}</div>
                                                 <div class="img ">
                                                   
                                                         {{-- <img src="assets/img/icon/fav.jpg" alt=""
                                                     style="top: 15px !important;width: 20px;position: absolute;left: 13px;"class="heart"> --}}
                                                     <i onclick="wishlist_heart('#wishlistHeart12{{ $val['b_id'] }}', '{{ $val['b_id'] }}')"
                                                     id="wishlistHeart12{{ $val['b_id'] }}"
                                                     class="far fa-heart heart {{ \App\Models\Wishlist::where('user_id', Auth::guard('customer')->id())->where('business_id', $val['b_id'])->first()
? 'fas'
: '' }}"></i>

                                                     <div class="b_image">
                                                         <img src="{{ asset('upload_images/business_image/' . $val['business_image']) }}"
                                                             alt="" style="height: 171px" class="img-fluid ">
                                                     </div>
                                                     <div class="icon">
                                                         {{-- <i class="bi bi-brightness-high"></i> --}}
                                                         <img src="{{ asset('upload_images/business_logo/' . $val['business_logo']) }}"
                                                             alt="" style="height: 54px; width:54px;"
                                                             class="img-fluid ">
                                                     </div>
                                                 </div>
                                                 <h2 class="title ">
                                                     <a href="#">{{ $val['business_title'] }} </a>
                                                     @if ($val['verified_vendor'] == 1)
                                                     <a href="" class="check">
                                                         <img
                                                             src="{{ asset('assets/images/verified_check.png') }}">
                                                     </a>
                                                 @endif
                                                 </h2>
                                                 <div class="rate">
                                                     <div id="stars-existing" class="starrr"
                                                         data-rating='{{ $val['rating_avg'] }}'> </div>
                                                     <span class="count">({{ $val['rating_count'] }}
                                                         Reviews)</span>
                                                 </div>
 
                                                 <div class="location">
                                                     <span>
                                                        <img src="{{ asset('assets/img/icon/cil_location-pin.png') }}"
                                                        style="width: 15px;float: left;margin-left: 5px;margin-right: 10px;">
                                                         {{ $val['country'] }},{{ $val['city'] }}
                                                     </span>
                                                 </div>
                                                 <p>
                                                     <b>
                                                         <a href="{{ route('customer_company', $val['id']) }}"
                                                             style="color:#2F2F30;">view</a>
                                                     </b>
                                                 </p>
                                             </div>
                                         </div>
     </div>
                                @endforeach
    </div>
</div>
</div>
</div>
</div>
</div>
    







    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

{{-- 
    <div class="container">
        <div class="row"> --}}
         
        {{-- <h3 style="text-align: center;font-weight: bold;font-size: 26px;">Discover place Near You</h3>
        <div class="table" style="margin-top: 40px;">
            <div class="imageshade">
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-sm-6 ">
                            <div class="iconhover">
                                <img src="assets/images/house.jpg" class="image1 zoom_img"
                                    style=" border-radius: 8px;">
                                <div class="overlay">
                                    <a href="#" class="overicon">

                                        <img class="logo-img" src="{{ asset('assets/images/logo.png') }}"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6">
                            <div class="iconhover">
                                <img src="assets/images/cctv.jpg" class="image2" style=" border-radius: 8px;">
                                <div class="overlay">
                                    <a href="#" class="overicon">
                                        <img class="logo-img" src="{{ asset('assets/images/logo.png') }}"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="imageshade">
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-md-3">
                            <div class="iconhover">
                                <img src="assets/images/Furniture.jpg" class="image10"
                                    style=" border-radius: 8px;">
                                <div class="overlay">
                                    <a href="#" class="overicon">
                                        <img class="logo-img" src="{{ asset('assets/images/logo.png') }}"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="viewimage">
                                <div class="iconhover">
                                    <img src="assets/images/Kitchen.jpg" class="image1"
                                        style=" border-radius: 8px;">
                                    <div class="overlay">
                                        <a href="#" class="overicon">
                                             <img class="logo-img" src="{{ asset('assets/images/logo.png') }}"
                                                alt=""> 
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 bottom_hover">
                            <div class="iconhover">
                                <img src="assets/images/carpenter.jpg" class="image1"
                                    style=" border-radius: 8px;">
                                <div class="overlay">
                                    <a href="#" class="overicon">
                                       <img class="logo-img" src="{{ asset('assets/images/logo.png') }}"
                                            alt=""> 
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>

    {{-- <div class="business_css">
        <div class="Recommended">
            <div class="popular">
                <section id="about">
                    <div class="container" style="">
                        <div class="row about-cols">
                            <h1 style="text-align: center;margin-top: -42px;font-weight: bold;font-size: 26px;">
                                Recommended</h1>
                            <div id="testimonials1" class="" >
                  <div class=" owl-carousel owl-theme
                                business_carousel">
                                @foreach ($data['business'] as $val)
                                    @if ($val['recommended'] == 1)
                                        <div class="" data-aos=" fade-up" data-aos-delay="50" style="">
                                            <div class="about-col" style="">
                                                <?php $color = $val['status'] ? '#8cf179ab' : 'red'; ?>
                                                <div class="available_tag"
                                                    style="position: absolute;z-index: 100;background-color: <?php echo $color; ?>;width: 38%;left: 62%;text-align: center;top: 4%;">
                                                    {{ $val['status'] ? 'Available' : 'Not Available' }}</div>

                                                <div class="img ">
                                                    <img src="assets/img/icon/fav.jpg" alt=""
                                                    style="top: 15px !important;width: 20px;position: absolute;left: 13px;" class="heart">
                                                    <div class = "b_image">
                                                    <img src="{{ env('IMG_URL') . 'upload_images/business_image/' . $val['business_image'] }}"
                                                        alt="" class="img-fluid b_image ">
                                                        </div>
                                                    <div class="icon">
                                                        <i class="bi bi-brightness-high"></i>
                                                    </div>
                                                </div>
                                                <h2 class="title">
                                                    <a href="#">{{ $val['business_title'] }}  </a>
                                                    <a href = "" class = "check">
                                                        <img src="{{ asset('assets/images/verified_check.png') }}">
                                                        </a>
                                                </h2>
                                                <div class="rate">
                                                    <div id="stars-existing" class="starrr" data-rating='5'></div>
                                                </div>
                                                <div class="location">
                                                    <img src="assets/img/icon/cil_location-pin.png"
                                                        style="width: 15px;float: left;margin-left: 5px;margin-right: 10px;">
                                                    {{ $val['country'] }},{{ $val['city'] }}
                                                </div>
                                          <p>
                                                <b>
                                                    <a href="{{ route('customer_company', $val['id']) }}"
                                                        style="color:#2F2F30;">view</a>
                                                </b>
                                            </p>

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
    </div> --}}













    <footer id="footer" style="margin-top: 50px">

        <div class="footer-top" style="height: auto">
            <div class="container mt-3" style="margin-top: -31px">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3> Ready to get started ?<span></span></h3>
                        @if (Auth::guard('customer')->check())
                        <button id="addb"> <a href="{{ route('customer') }}">Submit Tender</a></button>
                        @elseif (Auth::guard('vendor')->check())
                        <button id="addb"> <a href="{{ route('vendor') }}">Add Business</a></button>
                        @else
                        <button id="addb"> <a href="{{ route('customer') }}">Submit Tender</a></button>
                        @endif

                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Pro Build</h4>
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
    <script type="text/javascript">
      function sub_category(id) {
            // var val = id;
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

        // });
    </script>
    <script type="text/javascript">
        function modal_submit() {
            // alert();
            var email = $('#email').val();
            var password = $('#password').val();
            $.ajax({
                url: '{{ url('login/vendor') }}',
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
    <script>
        $(document).ready(function() {
            // $('.dropdown-submenu a.test').on("click", function(e) {
            //     $(this).next('ul').toggle();
            //     e.stopPropagation();
            //     e.preventDefault();
            // });
            
            $('.cat_dropdown').click(function(){
                $('#dropdown-menu').toggle()
            })
            
            $('.dropdown-submenu.drop_li').click(function(){
              $('.dropdown-submenu.drop_li ul.dropdown-menu').hide();
            
              if($(this).children('ul.dropdown-menu').hasClass('opened')){
                  console.log("Enter")
                  $(this).children('ul.dropdown-menu').hide()
              } else {
                  console.log("Enter d") 
                  $(this).children('ul.dropdown-menu').show()
              }
              $(this).children('ul.dropdown-menu').toggleClass('opened')
            })
            
            $('#dropdown-menu .dropdown-menu li').click(function(){
                $('#dropdown-menu').toggle()
            })
        });
    </script>




    <style>
.none_card{
    display:none;
}
.block_card{
    display:block;
}
.drop_li:hover .test   {
                font-weight: 600;
                background-color: #F4E059 !important;
                color: white;
                padding: 5px 10px 10px 10px !important;
                transition: ease 0.3s;
            }
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
            .test{
                padding: 5px 10px 10px 10px !important;

            }

            .drop_li:hover .test   {
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
.right_banner{
    padding-right:0px;
}
</style>

<script>
   var x = document.getElementById("modal_open");
x.classList.add("none_card");
function myFunction() {
  if (x.classList.contains("none_card")) {
    x.classList.remove("none_card");
    
  } else {
    x.classList.add("none_card");
  }
}
</script>



{{-- <script>
   var x = document.getElementById("modal_open");
x.style.display = "none";
function myFunction() {
  if (x.style.display === "none") {
    x.style.display = "block";
    
  } else {
    x.style.display = "none";
  }
}
</script> --}}

<script>


//   var rating1 = document.getElementById("rating");
//   var location1 = document.getElementById("location");
//   var category1 = document.getElementById("category");
//   var probuild1 = document.getElementById("probuild");

// rating1.style.display = "block";
// location1.style.display = "none";
// category1.style.display = "none";
// probuild1.style.display = "none";

// function rating() {
//   if (rating.style.display === "block") {
//     rating.style.display = "none";
    
//   } else {
//     rating.style.display = "block";
//   }
// }

// function location() {
//   if (location1.style.display === "block") {
//     location1.style.display = "none";
    
//   } else {
//     location1.style.display = "block";
//   }
// }

// function category() {
//   if (category1.style.display === "none") {
//     category1.style.display = "block";
    
//   } else {
//     category1.style.display = "none";
//   }
// }

// function probuild() {
//   if (probuild1.style.display === "none") {
//     probuild1.style.display = "block";
    
//   } else {
//     probuild1.style.display = "none";
//   }
// }
// </script>


<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
    
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>



</body>

</html>
