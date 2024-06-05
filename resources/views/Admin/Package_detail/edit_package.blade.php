<!DOCTYPE html>
<!--
Template Name: Frest HTML Admin Template
Author: :Pixinvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://1.envato.market/pixinvent_portfolio
Renew Support: https://1.envato.market/pixinvent_portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<!-- Mirrored from www.pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/html/ltr/vertical-menu-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Aug 2021 13:05:15 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description"
        content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Admin-Home</title>

    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">
    <link href="{{ asset('app-assets/images/ico/apple-icon-120.html') }}" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon"
        href="https://www.pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link href="{{ asset('app-assets/vendors/css/vendors.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/vendors/css/charts/apexcharts.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/vendors/css/extensions/swiper.min.css') }}" rel="stylesheet">
    <!-- END: Vendor CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!-- BEGIN: Theme CSS-->
    <link href="{{ asset('app-assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/bootstrap-extended.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/colors.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/components.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/themes/dark-layout.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/themes/semi-dark-layout.min.css') }}" rel="stylesheet">

    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/pages/dashboard-ecommerce.min.css') }}" rel="stylesheet">

    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link href="{{ asset('assets/css/adminstyle.css') }}" rel="stylesheet">

    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
@include('Admin.admin_layout.header')




                    <div class="row">


                        <form action="{{ route('update_package', $edit_package->id) }}" method="POST">
                        @csrf

            

                            <!-- Detail Starts -->

                            <div class="col-md-12 card ">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="m-2">
                    
                                            @if (session('SuccessMsg'))
                    
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    
                                                {{ session('SuccessMsg') }}
                    
                                            </div>
                                            @endif
                    
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">

                             <div class = "back-option ml-1 mt-1">
                                
                                
                            <h1><a class="" href="{{ route('admin.home') }}">Home</a> <i class="fas fa-chevron-right"></i> <a class="" href="{{ route('PackageDetail') }}">back </a></h1>
                           
                            </div>

                                        <div class="row mt-3 ml-3">
                                            <div class="col-md-12">
                                                <h1 >Edit {{ $edit_package->package_name }}</h1>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                
                                <div class="row ml-3 mt-3">
                                    <div class="col-md-12">
                                        <div class="form-inline">
                                            <div class="form-group">
                                                <label for="inputPassword6">Package Name</label>
                                                <div class="ml-5 pl-5">
                                                    <input class="form-control ml-1" type="text" value="{{ $edit_package->package_name }}" name="package_name" id="inputState">                                                           
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-6">


                                        <div class="row m-3">
                                            <div class="col-md-12">
                                                <div class="form-inline">
                                                    <div class="form-group">
                                                        <label for="inputPassword6">Bussiness listing</label>
                                                        <div class="ml-5 pl-3">
                                                                    
                                                                <select name="bussiness_listing"  id="inputState"class="form-control">
                                                          
                                                                <option value="{{ $edit_package->bussiness_listing }}" selected>{{ $edit_package->bussiness_listing }}</option>
                                                                <option  value="0">Choose...</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                                <option>6</option>
                                                                <option>7</option>
                                                                <option>8</option>
                                                                <option>9</option>
                                                                <option>10</option>
                                                            </select>


                                                            <small id="passwordHelpInline" class="text-muted">
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="row m-3">
                                            <div class="col-md-12">

                                                <div class="form-inline">
                                                    <div class="form-group">
                                                        <label for="inputPassword6">Product/Service listing</label>
                                                        <div class="ml-5">
                                                            <select name="product_listing" id="inputState"
                                                                class="form-control">
                           
                                                                <option value="{{ $edit_package->product_listing }} "  selected>{{ $edit_package->product_listing }}</option>

                                                                <option  value="0">Choose...</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                                <option>6</option>
                                                                <option>7</option>
                                                                <option>8</option>
                                                                <option>9</option>
                                                                <option>10</option>
                                                            </select>
                                                            <small id="passwordHelpInline" class="text-muted">
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row m-3">
                                            <div class="col-md-12">
                                                <div class="form-inline">
                                                    <div class="form-group">
                                                        <label for="inputPassword6">Gallery images</label>
                                                        <div class="ml-5 pl-5">
                                                            <select name="gallery_image" id="inputState"
                                                                class="form-control">
                                                 
                                                                <option value="{{ $edit_package->gallery_image }}" selected>{{ $edit_package->gallery_image }}</option>

                                                                <option  value="0">Choose...</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                                <option>6</option>
                                                                <option>7</option>
                                                                <option>8</option>
                                                                <option>9</option>
                                                                <option>10</option>
                                                            </select>
                                                            <small id="passwordHelpInline" class="text-muted">
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row m-3">
                                            <div class="col-md-12">
                                                <div class="form-inline">
                                                    <div class="form-group">
                                                        <label for="inputPassword6">Company Profile </label>
                                                        <div class="ml-5 pl-4">
                                                            <select name="company_profile" id="inputState"
                                                                class="form-control ">
                              
                                                                <option value="{{ $edit_package->company_profile }}" selected>{{ $edit_package->company_profile }}</option>

                                                                <option  value="0">Choose...</option>
                                                                <option value="0">Inactive</option>
                                                                <option value="1">Acitve</option>
                                                            </select>
                                                            <small id="passwordHelpInline" class="text-muted">
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- contact --}}
                                        <div class="row m-3">
                                            <div class="col-md-12">
                                                <div class="form-inline">
                                                    <div class="form-group">
                                                        <label for="inputPassword6">Contact</label>
                                                        <div class="ml-5 pl-5">
                                                            <select name="contact" id="inputState"
                                                                class="form-control ml-3">
                       
                                                                <option value="{{ $edit_package->contact }}" selected>{{ $edit_package->contact }}</option>

                                                                <option  value="0"> Choose...</option>
                                                                <option value="0">InAcitve</option>
                                                                <option value="1">Acitve</option>
                                                            </select>
                                                            <small id="passwordHelpInline" class="text-muted">
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row m-3">
                                            <div class="col-md-12">
                                                <div class="form-inline">
                                                    <div class="form-group">
                                                        <label for="inputPassword6">Validity</label>
                                                        <div class="ml-5 pl-5">
                                                            <select name="validity" id="inputState"
                                                                class="form-control ml-3">
                              
                                                                <option value="{{ $edit_package->validity }}" selected>{{ $edit_package->validity }} Months</option>

                                                                <option  value="0">Choose...</option>
                                                                <option value="1">1 Month</option>
                                                                <option value="2">2 Months</option>
                                                                <option value="3">3 Months</option>
                                                                <option value="4">4 Months</option>
                                                                <option value="5">5 Months</option>
                                                                <option value="6">6 Months</option>
                                                                <option value="7">7 Months</option>
                                                                <option value="8">8 Months</option>
                                                                <option value="8">9 Months</option>
                                                                <option value="8">10 Months</option>
                                                            </select>
                                                            <small id="passwordHelpInline" class="text-muted">
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>




                                    </div>
                                    <div class="col-md-6">





                                        {{-- Location --}}
                                        <div class="row m-3">
                                            <div class="col-md-12">
                                                <div class="form-inline">
                                                    <div class="form-group">
                                                        <label for="inputPassword6">Location</label>
                                                        <div class="ml-5 pl-5">
                                                            <select name="location" id="inputState"
                                                                class="form-control ml-3">
                   
                                                                <option value="{{ $edit_package->location }}" selected>{{ $edit_package->location }}</option>

                                                                <option  value="0">Choose...</option>
                                                                <option value="1">Acitve</option>
                                                                <option value="0">Inactive</option>
                                                            </select>
                                                            <small id="passwordHelpInline" class="text-muted">
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row m-3">
                                            <div class="col-md-12">
                                                <div class="form-inline">
                                                    <div class="form-group">
                                                        <label for="inputPassword6"> Social Media</label>
                                                        <div class="ml-5 pl-5">
                                                            <select name="social_media" id="inputState"
                                                                class="form-control ml-2">
                                   
                                                                <option value="{{ $edit_package->social_media }}" selected>{{ $edit_package->social_media }}</option>

                                                                <option  value="0">Choose...</option>
                                                                <option value="1">Acitve</option>
                                                                <option value="0">Inactive</option>
                                                            </select>
                                                            <small id="passwordHelpInline" class="text-muted">
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row m-3">
                                            <div class="col-md-12">
                                                <div class="form-inline">
                                                    <div class="form-group">
                                                        <label for="inputPassword6">Priority in listing</label>
                                                        <div class="ml-5 pl-3">
                                                            <select name="priority_listing" id="inputState"
                                                                class="form-control">
         
                                                                <option value="{{ $edit_package->priority_listing }}" selected>{{ $edit_package->priority_listing }}</option>

                                                                <option  value="0"> Choose...</option>
                                                                <option value="1">Acitve</option>
                                                                <option value="0">Inactive</option>
                                                            </select>
                                                            <small id="passwordHelpInline" class="text-muted">
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row m-3">
                                            <div class="col-md-12">
                                                <div class="form-inline">
                                                    <div class="form-group">
                                                        <label for="inputPassword6">probuild Verified listing</label>
                                                        <div class="ml-5">
                                                            <select name="probuild_verify" id="inputState"
                                                                class="form-control">
                 
                                                                <option value="{{ $edit_package->probuild_verify }}" selected>{{ $edit_package->probuild_verify }}</option>

                                                                <option  value="0">Choose...</option>
                                                                <option value="1">Acitve</option>
                                                                <option value="0">Inactive</option>
                                                            </select>
                                                            <small id="passwordHelpInline" class="text-muted">
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row m-3">
                                            <div class="col-md-12">
                                                <div class="form-inline">
                                                    <div class="form-group">
                                                        <label for="inputPassword6">Tender Board</label>
                                                        <div class="ml-5 pl-5">
                                                            <select name="tendor_board" id="inputState"
                                                                class="form-control ml-1">
     
                                                                <option value="{{ $edit_package->tendor_board }}" selected>{{ $edit_package->tendor_board }}</option>

                                                                <option  value="0">Choose...</option>
                                                                <option value="1">Acitve</option>
                                                                <option value="0">Inactive</option>
                                                            </select>
                                                            <small id="passwordHelpInline" class="text-muted">
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row m-3">
                                            <div class="col-md-12">
                                                <div class="form-inline">
                                                    <div class="form-group">
                                                        <label for="inputPassword6">Price</label>
                                                        <div class="ml-5 pl-5">
                                                        
                                                        <input type="text" value="{{ $edit_package->price }}" name="price"  id="inputState"
                                                        class="form-control ml-1">
                                                     
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <div class="row m-3">
                                    <div class="col-12">
          
                                        <button type="submit" class="btn btn-primary">Update Details</button>


                                    </div>
                                </div>



                          
             


                            </div>

                        </form>
                    </div>
                </section>
                <!-- Dashboard Ecommerce ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Customizer-->
    <div class="customizer d-none d-md-block"><a class="customizer-toggle" href="javascript:void(0);"><i
                class="bx bx-cog bx bx-spin white"></i></a>
        <div class="customizer-content p-2">
            <h4 class="text-uppercase mb-0">Theme Customizer</h4>
            <small>Customize & Preview in Real Time</small>
            <a href="javascript:void(0)" class="customizer-close">
                <i class="bx bx-x"></i>
            </a>
            <hr>
            <!-- Theme options starts -->
            <h5 class="mt-1">Theme Layout</h5>
            <div class="theme-layouts">
                <div class="d-flex justify-content-start">
                    <div class="mx-50">
                        <fieldset>
                            <div class="radio">
                                <input type="radio" name="layoutOptions" value="false" id="radio-light"
                                    class="layout-name" data-layout="" checked>
                                <label for="radio-light">Light</label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="mx-50">
                        <fieldset>
                            <div class="radio">
                                <input type="radio" name="layoutOptions" value="false" id="radio-dark"
                                    class="layout-name" data-layout="dark-layout">
                                <label for="radio-dark">Dark</label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="mx-50">
                        <fieldset>
                            <div class="radio">
                                <input type="radio" name="layoutOptions" value="false" id="radio-semi-dark"
                                    class="layout-name" data-layout="semi-dark-layout">
                                <label for="radio-semi-dark">Semi Dark</label>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
            <!-- Theme options starts -->
            <hr>

            <!-- Menu Colors Starts -->
            <div id="customizer-theme-colors">
                <h5>Menu Colors</h5>
                <ul class="list-inline unstyled-list">
                    <li class="color-box bg-primary selected" data-color="theme-primary"></li>
                    <li class="color-box bg-success" data-color="theme-success"></li>
                    <li class="color-box bg-danger" data-color="theme-danger"></li>
                    <li class="color-box bg-info" data-color="theme-info"></li>
                    <li class="color-box bg-warning" data-color="theme-warning"></li>
                    <li class="color-box bg-dark" data-color="theme-dark"></li>
                </ul>
                <hr>
            </div>
            <!-- Menu Colors Ends -->
            <!-- Menu Icon Animation Starts -->
            <div id="menu-icon-animation">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="icon-animation-title">
                        <h5 class="pt-25">Icon Animation</h5>
                    </div>
                    <div class="icon-animation-switch">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" checked id="icon-animation-switch">
                            <label class="custom-control-label" for="icon-animation-switch"></label>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <!-- Menu Icon Animation Ends -->
            <!-- Collapse sidebar switch starts -->
            <div class="collapse-sidebar d-flex justify-content-between align-items-center">
                <div class="collapse-option-title">
                    <h5 class="pt-25">Collapse Menu</h5>
                </div>
                <div class="collapse-option-switch">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="collapse-sidebar-switch">
                        <label class="custom-control-label" for="collapse-sidebar-switch"></label>
                    </div>
                </div>
            </div>
            <!-- Collapse sidebar switch Ends -->
            <hr>

            <!-- Navbar colors starts -->
            <div id="customizer-navbar-colors">
                <h5>Navbar Colors</h5>
                <ul class="list-inline unstyled-list">
                    <li class="color-box bg-white border selected" data-navbar-default=""></li>
                    <li class="color-box bg-primary" data-navbar-color="bg-primary"></li>
                    <li class="color-box bg-success" data-navbar-color="bg-success"></li>
                    <li class="color-box bg-danger" data-navbar-color="bg-danger"></li>
                    <li class="color-box bg-info" data-navbar-color="bg-info"></li>
                    <li class="color-box bg-warning" data-navbar-color="bg-warning"></li>
                    <li class="color-box bg-dark" data-navbar-color="bg-dark"></li>
                </ul>
                <small><strong>Note :</strong> This option with work only on sticky navbar when you scroll page.</small>
                <hr>
            </div>
            <!-- Navbar colors starts -->
            <!-- Navbar Type Starts -->
            <h5>Navbar Type</h5>
            <div class="navbar-type d-flex justify-content-start">
                <div class="hidden-ele mx-50">
                    <fieldset>
                        <div class="radio">
                            <input type="radio" name="navbarType" value="false" id="navbar-hidden">
                            <label for="navbar-hidden">Hidden</label>
                        </div>
                    </fieldset>
                </div>
                <div class="mx-50">
                    <fieldset>
                        <div class="radio">
                            <input type="radio" name="navbarType" value="false" id="navbar-static">
                            <label for="navbar-static">Static</label>
                        </div>
                    </fieldset>
                </div>
                <div class="mx-50">
                    <fieldset>
                        <div class="radio">
                            <input type="radio" name="navbarType" value="false" id="navbar-sticky" checked>
                            <label for="navbar-sticky">Fixed</label>
                        </div>
                    </fieldset>
                </div>
            </div>
            <hr>
            <!-- Navbar Type Starts -->

            <!-- Footer Type Starts -->
            <h5>Footer Type</h5>
            <div class="footer-type d-flex justify-content-start">
                <div class="mx-50">
                    <fieldset>
                        <div class="radio">
                            <input type="radio" name="footerType" value="false" id="footer-hidden">
                            <label for="footer-hidden">Hidden</label>
                        </div>
                    </fieldset>
                </div>
                <div class="mx-50">
                    <fieldset>
                        <div class="radio">
                            <input type="radio" name="footerType" value="false" id="footer-static" checked>
                            <label for="footer-static">Static</label>
                        </div>
                    </fieldset>
                </div>
                <div class="mx-50">
                    <fieldset>
                        <div class="radio">
                            <input type="radio" name="footerType" value="false" id="footer-sticky">
                            <label for="footer-sticky" class="">Sticky</label>
                        </div>
                    </fieldset>
                </div>
            </div>
            <!-- Footer Type Ends -->
            <hr>

            <!-- Card Shadow Starts-->
            <div class="card-shadow d-flex justify-content-between align-items-center py-25">
                <div class="hide-scroll-title">
                    <h5 class="pt-25">Card Shadow</h5>
                </div>
                <div class="card-shadow-switch">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" checked id="card-shadow-switch">
                        <label class="custom-control-label" for="card-shadow-switch"></label>
                    </div>
                </div>
            </div>
            <!-- Card Shadow Ends-->
            <hr>

            <!-- Hide Scroll To Top Starts-->
            <div class="hide-scroll-to-top d-flex justify-content-between align-items-center py-25">
                <div class="hide-scroll-title">
                    <h5 class="pt-25">Hide Scroll To Top</h5>
                </div>
                <div class="hide-scroll-top-switch">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="hide-scroll-top-switch">
                        <label class="custom-control-label" for="hide-scroll-top-switch"></label>
                    </div>
                </div>
            </div>
            <!-- Hide Scroll To Top Ends-->
        </div>

    </div>
    <!-- End: Customizer-->

    {{-- <!-- Buynow Button-->
    <div class="buy-now"><a href="https://1.envato.market/frest_admin" target="_blank" class="btn btn-danger">Buy Now</a>

    </div> --}}
    <!-- demo chat-->
    <div class="widget-chat-demo">
        <!-- widget chat demo footer button start -->
        {{-- <button class="btn btn-primary chat-demo-button glow px-1"><i class="livicon-evo"
    data-options="name: comments.svg; style: lines; size: 24px; strokeColor: #fff; autoPlay: true; repeat: loop;"></i></button> --}}
        <!-- widget chat demo footer button ends -->
        <!-- widget chat demo start -->
        <div class="widget-chat widget-chat-demo d-none">
            <div class="card mb-0">
                <div class="card-header border-bottom p-0">
                    <div class="media m-75">
                        <a href="JavaScript:void(0);">
                            <div class="avatar mr-75">
                                <img src="../../../app-assets/images/portrait/small/avatar-s-2.jpg" alt="avtar images"
                                    width="32" height="32">
                                <span class="avatar-status-online"></span>
                            </div>
                        </a>
                        <div class="media-body">
                            <h6 class="media-heading mb-0 pt-25"><a href="javaScript:void(0);">Kiara Cruiser</a></h6>
                            <span class="text-muted font-small-3">Active</span>
                        </div>
                    </div>
                    <div class="heading-elements">
                        <i class="bx bx-x widget-chat-close float-right my-auto cursor-pointer"></i>
                    </div>
                </div>
                <div class="card-body widget-chat-container widget-chat-demo-scroll">
                    <div class="chat-content">
                        <div class="badge badge-pill badge-light-secondary my-1">today</div>
                        <div class="chat">
                            <div class="chat-body">
                                <div class="chat-message">
                                    <p>How can we help? 😄</p>
                                    <span class="chat-time">7:45 AM</span>
                                </div>
                            </div>
                        </div>
                        <div class="chat chat-left">
                            <div class="chat-body">
                                <div class="chat-message">
                                    <p>Hey John, I am looking for the best admin template.</p>
                                    <p>Could you please help me to find it out? 🤔</p>
                                    <span class="chat-time">7:50 AM</span>
                                </div>
                            </div>
                        </div>
                        <div class="chat">
                            <div class="chat-body">
                                <div class="chat-message">
                                    <p>Stack admin is the responsive bootstrap 4 admin template.</p>
                                    <span class="chat-time">8:01 AM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer border-top p-1">
                    <form class="d-flex" onsubmit="widgetChatMessageDemo();" action="javascript:void(0);">
                        <input type="text" class="form-control chat-message-demo mr-75" placeholder="Type here...">
                        <button type="submit" class="btn btn-primary glow px-1"><i
                                class="bx bx-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <!-- widget chat demo ends -->

    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-left d-inline-block">2021 &copy; PIXINVENT</span><span
                class="float-right d-sm-inline-block d-none">Crafted with<i
                    class="bx bxs-heart pink mx-50 font-small-3"></i>by<a class="text-uppercase"
                    href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i
                    class="bx bx-up-arrow-alt"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script type="text/javascript" src="{{ URL::asset('app-assets/vendors/js/vendors.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ URL::asset('app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js') }}">
    </script>

    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script type="text/javascript" src="{{ URL::asset('app-assets/vendors/js/extensions/swiper.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('app-assets/vendors/js/extensions/swiper.min.js') }}"></script>

    <!-- END: Page Vendor JS-->


    <!-- BEGIN: Theme JS-->
    <script type="text/javascript" src="{{ URL::asset('app-assets/js/scripts/configs/vertical-menu-light.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ URL::asset('app-assets/js/core/app-menu.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('app-assets/js/core/app.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('app-assets/js/scripts/components.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('app-assets/js/scripts/footer.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('app-assets/js/scripts/customizer.min.js') }}"></script>
    <!-- END: Theme JS-->
    <script type="text/javascript" src="{{ URL::asset('app-assets/js/scripts/pages/dashboard-ecommerce.min.js') }}">
    </script>

    <!-- BEGIN: Page JS-->

</body>
<!-- END: Body-->

<!-- Mirrored from www.pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/html/ltr/vertical-menu-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Aug 2021 13:05:18 GMT -->

</html>
