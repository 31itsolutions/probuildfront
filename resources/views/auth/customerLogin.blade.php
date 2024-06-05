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
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Customer Login in </title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/login_style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


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



    <header class="header-area  wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container" id="header-container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">

                        <a href="{{ route('index') }}" class="logo header-logo">

                            <img class="logo-img" height="80px" width="40px" src="{{ asset('assets/images/logo.png') }}" alt="">
              
                          </a>

                        <ul class="nav">

                            <li>
                                        <b><a href="{{ route('index') }}">
                                                <i class="bi bi-box-arrow-in-right"></i> &nbsp; Home</a></b>
                                    </li
                            {{-- <li>
                                <div class="contact.html">
                                  <b>
                                  <a href="#" style="display: block;font-weight: 500;font-size: 14px;
    color: #fff !important;
    text-transform: uppercase;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    height: 40px;
    line-height: 40px;
    border: transparent;
    letter-spacing: 1px;"><i class="bi bi-box-arrow-in-right"></i> &nbsp;sign Up</a>
                                  </b></div>
                            </li> --}}

                            @if ($url =="vendor")
                            {{-- <li>
                                <div class="main-white-button"><a href="index2.html"> Add a Buisness</a></div>
                            </li> --}}
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

    <div class="main-banner" style="background-image:url({{ env('IMG_URL') . 'upload_images/banner_image/' . $data['banner_image']['login_image'] }});    background-repeat: no-repeat;
    background-size: cover; background-position: center center;left: 0;right: 0;   height: 1000px !important;   width:100%;">
    
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="image_title">

                            <img src="{{ asset('images/Construction_digitalized.png') }}"
                                style=" margin-top: 125px;">
                        </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    
                    <div class="col-sm-12 " style="margin-top: 0px;">

                        <div class="loginform">
                            @if (session('success'))
                    
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
    
                                {{ session('success') }}
                                </div>

                                @endif

                            <h1 class="text-center login_title"><b>Login to your account</b></h1>
                            <div class="td-login text-center">

                                <a class="{{ Request::routeIs('vendor_login') ? 'login_active' : '' }}"
                                    href="{{ route('vendor_login') }}">Vendor</a>

                                <a class="{{ Request::routeIs('customer_login') ? 'login_active' : '' }}"
                                    href="{{ route('customer_login') }}">Customer</a>

                            </div>

                   

          
{{-- @include('flash::message') --}}


                {{-- -------------------------------------- --}}
                          

                              

                            <form method="POST" action='{{ url("login/customer") }}' aria-label="{{ __('Login') }}">
                              
                                @csrf
                                  {{-- @endisset --}}


                                  <label for="uname"></label>
                                  <input type="email" placeholder="Enter Username" class="form-control " name="email"
                                      value="{{ old('email') }}" required autocomplete="email" >


                                  <label for="psw"></label>
                                  <input type="password" placeholder="Enter Password" class=" form-control"
                                      name="password" required autocomplete="current-password">

                                  <div class="customer_form-check remember_check">

                                      <label>
                                          <input type="checkbox" checked="checked" name="remember"
                                              {{ old('remember') ? 'checked' : '' }}> Remember me
                                      </label><br>
                                  </div>





                                  @if (Route::has('customer.forget.password.get'))
                                  <span class="psw forgot_pwd"><a href="{{ route('customer.forget.password.get') }}">
                                          {{ __('Forget password?') }}

                                      </a></span>

                                     
                                  @endif


                                  <button type="submit" class="b1">{{ __('Login') }}</button>

                                  <span class="signup">Don't have an account? <a
                                          href="{{ route('customer_register') }}">Sign up</a></span>


                              </form>




                           
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">

        </div>
    </div>
    </div>


     <footer id="footer">

    <div class="footer-top" style="">
      <div class="container" style="margin-top: -203px">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3> Ready to get started ?<span></span></h3>
            <button id="addb"> <a href="{{ route('customer') }}">Add Business</a></button>
           
                 
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
    </div>
<script>
$('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script>

</body>

</html>
