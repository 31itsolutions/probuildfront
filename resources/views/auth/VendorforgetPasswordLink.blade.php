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

    <title>Login in </title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

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



    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container" id="header-container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">

                        <a href="index.html" class="logo">
                        </a>

                        <ul class="nav">


                            <!-- <li>
                                <div class="contact.html"><b><a href="{{ route('vendor_login') }}"><i class="bi bi-box-arrow-in-right"></i> &nbsp;
                                            sign in</a></b></div>
                            </li> -->
                            <!-- <li>
                                <div class="main-white-button"><a href="index2.html"> Add a Buisness</a></div>
                            </li> -->
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>

                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="main-banner" style= "background-image:url('{{ asset('upload_images/banner_image/Log in Bg.png') }}');">
        <div class="container">
            <div class="row" >
                <div class="col-lg-12">
                    <div class="top-text header-text">
                    <h2 style="margin-left:-110px;">BUILD YOUR DREAM</h2>

                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    </div>
                    <div class="col-sm-12">

                        <div class="loginform" >

                            <h1 class="text-center"><b>Login Form</b></h1>
                 

                  @if (Session::has('error'))
                         <div class="alert alert-success" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif
  
                           <form action="{{ route('reset.password.post') }}" method="POST">
                          @csrf

  <label for="email_address" class="col-md-12 col-form-label text-md-right">E-Mail Address</label>
                              <input type="email" placeholder="Enter Username" class="form-control " id="email_address" name="email"
                                  value="{{ old('email') }}" required name="email" required autofocus>
                                     @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif

  <label for="email_address" class="col-md-12 col-form-label text-md-right">Password</label>
                              <input  type="password" id="password" class="form-control" name="password" required autofocus>
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif

  <label for="email_address" class="col-md-12 col-form-label text-md-right">Confirm Password</label>
                              <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required autofocus>
                             @if ($errors->has('password_confirmation'))
                                      <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                  @endif


                              <button type="submit" class="b1">Reset Password</button>

                     
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
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3> Ready to get started ?<span></span></h3>
                        <button id="addb"> Add Buisness</button>

                        <div class="terms">Terms & Conditions &nbsp;Privacy Policy</div>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Pro Buid</h4>
                        <ul>
                            <li> <a href="#">About us</a></li>

                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Help</h4>
                        <ul>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">contact us</a></li>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="#">
                                    Browse category</a></li>
                            <li><a href="#">Serch business</a></li>
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
    </div>

</body>

</html>
