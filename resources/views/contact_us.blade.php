<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" integrity="sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>pro build final</title>
 

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    {{-- w3 icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
      .businesses_css .active{
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
button.header-btn {
    color: black !important;
    background-color: #F4E059 !important;
    padding: 10px 20px 13px 20px !important;
    border-radius: 5px !important;
    font-family: 'Open Sans', sans-serif;
    font-size: 16px;
    font-weight: 700;
    margin-top: 5px;
    border: 1px solid #F4E059;
    -webkit-box-shadow: 0 14px 28px rgb(0 0 0 / 25%), 0 10px 10px rgb(0 0 0 / 22%);
    -moz-box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
    -ms-box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
    -o-box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
    box-shadow: 0 14px 28px rgb(0 0 0 / 10%), 0 10px 10px rgb(0 0 0 / 10%);
}
    
</style>
    
  </head>

<body>

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
            <div class="about_logo" style="margin-left:1px;">

            <a href="{{ route('index') }}" class="logo header-logo middle_logo" style="margin-top: 38px;">

                <img class="logo-img" height="70px" width="30px" src="{{ asset('assets/images/logo.png') }}" alt="">
  
              </a>
            </div>
            
            <ul class="nav">
              
                @if (Auth::guard('customer')->check())

                <li>
                    <div class="contact.html">
                      <b><a href="{{route('customer')}}">
                       <i class="bi bi-box-arrow-in-right"></i> &nbsp; Customer</a></b>
                    </div>
                </li>
                     <li class="add_business_logined">
                                    <b><a href="{{ route('customer') }}">
                                            Submit Tender</a></b>
                                </li>

                    @elseif(Auth::guard('vendor')->check())
          
                    <li>
                        <div class="contact.html">
                          <b><a href="{{route('vendor')}}">
                           <i class="bi bi-box-arrow-in-right"></i> &nbsp; Vendor</a></b>
                        </div>
                    </li>
                     <li class="add_business_logined">
                                    <b><a href="{{ route('vendor') }}">
                                            Add Business</a></b>
                                </li>
                    @else
                    <li>
                        <b><a href="{{ route('vendor_login') }}">
                                <i class="bi bi-box-arrow-in-right"></i> &nbsp; sign in</a></b>
                    </li>

                    <li class="add_business">
                        <b><a href="{{ route('customer_login') }}">
                            Submit Tender</a></b>
                    </li>
                    
                      
                    <!--<li><a href="" style="font-weight: bold;font-size: 16px"> </a></li>-->


                   
                    @endif
   
         
{{--               
                    @if(Auth::guard('vendor')->check())

              <li><div class="main-white-button"><a href="" style="font-weight: bold;font-size: 16px"> Add Buisness</a></div></li> 

              

              <!-- <li><div class="main-white-button"><a href="#"> Add Buisness</a></div></li>  -->

              @else
              <li><div class="main-white-button"><a href="{{ route('vendor_login') }}" style="font-weight: bold;font-size: 16px"> Add Buisness</a></div></li> 
@endif --}}

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
    $(document).ready(function (argument) {

        @if (Auth::guard('customer')->check())
                $('#Login-Account').modal('hide');
        @elseif(Auth::guard('vendor')->check())
                $('#Login-Account').modal('hide');
        @else
            $('#Login-Account').modal('show');
        @endif

    $('.close_modal').click(function() {
      // alert()
      $("#Login-Account").modal('hide');
      // $("#Login-Account .close").click();
    });

    })
    
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
h3{
  font-size: 20px;
    font-style: normal;
    color: #2F2F30;
    font-weight: 600;
}

.dropdown-submenu:hover .dropdown-menu {
  display: block;
}

.dropdown-submenu a:after {
  display: block;
  content: " ";
  float: right;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
  border-width: 5px 0 5px 5px;
  /*border-left-color: #cccccc;*/
  margin-top: 5px;
  margin-right: -10px;
}

.dropdown-submenu:hover a:after {
  border-left-color: #ffffff;
}

.dropdown-submenu.pull-left {
  float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
  left: -100%;
  margin-left: 10px;
  -webkit-border-radius: 6px 0 6px 6px;
  -moz-border-radius: 6px 0 6px 6px;
  border-radius: 6px 0 6px 6px;
}
  </style>

<div class="main-banner"
style="
background-image:url({{ env('IMG_URL') . 'upload_images/banner_image/' . $data['banner_image']['home_image'] }});    background-repeat: no-repeat;
background-size: cover; background-position: center center;left: 0;right: 0;color: #fff;  height: 525px; width:100%;">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="top-text header-text">
                <div class="image_title">

                    {{-- <img src="{{ asset('images/Construction_digitalized.png') }}"
                        style=" margin-top: 125px;"> --}}
                </div>

            </div>
        </div>
    </div>
    {{-- <form id="search-form" name="searchText" method="GET" role="search" action="{{ route('searchText') }}">
        @csrf
        <div class="row width_filter">
            <div class="col-lg-12 filter_header ">

                <div class="drop_one">
                    <div class="looking">
                        <div class="selectlogo1 looking_logo"><img
                                src="{{ asset('assets/images/search.png') }}"
                                style="height: 20px;width: 20px;margin-top: 5px;"></div>

                        <input type="address" name="looking" class="searchText_1"
                            placeholder=" what are you looking for?" autocomplete="on">
                    </div>
                </div>

                <div class="drop_one ">
                    <div class="filter_location">
                        <div class="selectlogo1"><img src="{{ asset('assets/images/location.png') }}"
                                style="height: 20px;width: 20px;margin-top: 2px; margin-left: 8px;"></div>
                        <input type="address" name="location" class="searchText " placeholder=" location"
                            autocomplete="on">
                    </div>
                </div>

                <div class="drop_one ">
                    <div class="category">
                      
                      
                      


                        <div class = "cate_flex">
                        <div class="selectlogo2"><img src="{{ asset('assets/images/shopping.png') }}"
                                style="height: 20px;width: 20px;margin-top: 5px;"></div>

                        <select class="select2 category_select js-example-programmatic form-control"
                                                name="category_select"
                                                data-validation-required-message="Select Boat" >
                                                
                                                <option class = "category_name" value="">
                                                
                                
                                                Category  </option>
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
                                            
                                            </div>






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
    </form> --}}



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

        </div>
    {{-- @else --}}

        {{-- <div id="testimonials" style="margin-top: -52px;margin-bottom:15px;"
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
{{-- 
                @endif
            @endforeach
        </div>  --}}
    {{-- @endif --}}

</div>
<body style="background: #E5E5E5;">
        <h3 class="" style="text-align: center;">Contact Us</h3>


        {{-- <div class="row">
          <div class="col-md-3" style="margin-left: 350px;">
            <div id="testimonials" style="margin-top: 47px;margin-right: 6px; margin-bottom:15px;" class="container" style="padding-left: 80px">
                <div class="owl-carousel owl-theme category_carousel" id="">
            
                  <div class="item" style="text-align:center;width: 66px;" ><a  href="#" class="icon"><img class="icon" src="{{asset('assets/images/man.png')}}" id="category_img" style="background: rgba(244, 224, 89, 0.53);margin-bottom:10px" ><span style="color: #FFFFFF;font-size: 17px;">AAA</span></a>
                  </div>   
                    
              </div>

            </div>
          </div>
          <div class="col-md-6">
              <div id="testimonials" style="margin-top: 47px;margin-right: 6px; margin-bottom:15px;" class="container" style="padding-left: 80px">
                <div class="owl-carousel owl-theme category_carousel" id="">
            
                  <div class="item" style="text-align:center;width: 66px;" ><a  href="#" class="icon"><img class="icon" src="{{asset('assets/images/man.png')}}" id="category_img" style="background: rgba(244, 224, 89, 0.53);margin-bottom:10px" ><span style="color: #FFFFFF;font-size: 17px;">BBB</span></a>
                  </div>   
                    
              </div>
            </div>
          </div>      
        </div> --}}

        <div class="container">
          <div class="row">
            
         
            <div class="offset-md-2 col-md-8" style="background: #FFFFFF;padding-bottom: 3%;">
              <h3>Message Us</h3>
                <form action="{{ route('addContact_us') }}" id="contactForm_data" method="POST" enctype="multipart/form-data">
                   @csrf
                      <div class="col-md-6">
                          <p style="color: #495E96">Name</p>
                          <div class="form-group">

                              <input type="text" style="background: rgba(215, 215, 215, 0.23);" name="contact_name" id="contact_name"
                                  class="form-control" multiple="">
                          </div>

                      </div>
                      <div class="col-md-6">
                          <p style="color: #495E96">Email</p>
                          <div class="form-group">

                              <input type="text" style="background: rgba(215, 215, 215, 0.23);" name="contact_email" id="contact_email"
                                  class="form-control" multiple="">
                          </div>

                      </div>
                      <div class="col-md-12">
                          <p style="color: #495E96">Subject</p>
                          <div class="form-group">

                              <input type="text" style="border-radius: 3px;background: rgba(215, 215, 215, 0.23);" name="contact_subject" id="contact_email"
                                  class="form-control" multiple="">
                          </div>

                      </div>
                      <div class="col-md-12">
                          <p style="color: #495E96">Message</p>
                          <div class="form-group">

                              <input type="text" style="border: 1px solid #E1E1E1;height: 100px;background: rgba(215, 215, 215, 0.23);" name="contact_message" id="contact_email"
                                  class="form-control" multiple="">
                          </div>

                      </div>
                      <div class="col-md-6">
                        <button class="header-btn" style="background: #f4d03f;border-radius: 5px;height: 43px;border: none;font-size: 16px;">Send Message</button>
                      </div>
                </form>
            </div>
            {{-- <div class="col-md-6" style="background: #FFFFFF" >
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125323.47388557455!2d76.89719425617638!3d11.011701573367942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba859af2f971cb5%3A0x2fc1c81e183ed282!2sCoimbatore%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1632194681013!5m2!1sen!2sin" width="600" height="450" style="border:0;width: 500px" allowfullscreen="" loading="lazy"></iframe>
            </div> --}}
         </div>
        </div>
        
        
    
    
</body>

    


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

  <script type="text/javascript" src="{{ URL::asset('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('assets/js/animation.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('assets/js/imagesloaded.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('assets/js/styles.js') }}"></script>
  <script type="text/javascript">
  
  function sub_category(id) {
      // var val = id;
      $('.subCat').addClass('hide');
      $('.cat_'+id).removeClass('hide');    
  }
  function addToWishList(id) {

        @if (Auth::guard('customer')->check())
         // alert(id)
          $.post('{{ route('wishlists_store') }}', {_token:'{{ csrf_token() }}', id:id}, function(data){
                if(data != 0){
                  alert(JSON.stringify(data.message));
                    // $('#wishlist').html(data);
                    // showFrontendAlert('success', 'Item has been added to wishlist');
                }
                
            });
        @else
            // showFrontendAlert('warning', 'Please login first');
            window.location.href = "{{route('vendor_login')}}";
        @endif
        
  }



    $('.sub_cat_carousel').owlCarousel({
                                    loop:true,
                                    margin:10,
                                    nav:false,
                                    dots:true,
                                    responsive:{
                                        0:{
                                            items:4
                                        },
                                        600:{
                                            items:4
                                        },
                                        1000:{
                                            items:4
                                        }
                                    }
                                });

     $('.category_carousel').owlCarousel({
                                    loop:false,
                                    margin:10,
                                    nav:true,
                                    dots:false,
                                    responsive:{
                                        0:{
                                            items:4
                                        },
                                        600:{
                                            items:4
                                        },
                                        1000:{
                                            items:7
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
                                    loop:false,
                                    margin:30,
                                    nav:true,
                                    dots:false,
                                    responsive:{
                                        0:{
                                            items:4
                                        },
                                        600:{
                                            items:4
                                        },
                                        1000:{
                                            items:4
                                        }
                                    }
                                });
    </script>
    <script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>

</body>

</html>
