<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>customer Home</title>


  {{-- Css from assets --}}
  <link href="{{ asset('assets/css/company_profile.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/vendor.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">

{{-- bootsnipp CDN link --}}


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">


<!------ Include the above in your HEAD tag ---------->

   {{-- toggle --}}
     <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="{{ asset('app-assets/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('app-assets/css/bootstrap-extended.min.css') }}" rel="stylesheet">
<link href="{{ asset('app-assets/css/colors.min.css') }}" rel="stylesheet">
<!-- <link href="{{ asset('app-assets/css/components.min.css') }}" rel="stylesheet"> -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">

    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>

  {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">

  {{-- boot icon --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" integrity="sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU" crossorigin="anonymous">


        {{-- google map --}}
<script src="https://api.tiles.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.js"></script>
<link
href="https://api.tiles.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.css"
rel="stylesheet" />

 
    <!-- Fontawsome icon CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


</head>
<body>




@include('Customer.customer_layout.header')




<div class  = "container ">

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

<div class = "filter_flex wishlist_title" style=" padding-top: 20px!important;">
                           
                           <h1>Wishlists</h1>
                           
</div>


<!-- 
                           </div>
                           </div> -->


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
                                                 <h2 class="title " >
                                                     <a href="#">{{ $val['business_title'] }} </a>
                                                     @if ($val['verified_vendor'] == 1)
                                                     <a href="" class="check">
                                                         <img
                                                             src="{{ asset('assets/images/verified_check.png') }}">
                                                     </a>
                                                 @endif
                                                 </h2>
                                                 <div class="rate" style=" padding-top: 20px!important;">
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
    

















</div>{{--container--}}




@include('Customer.customer_layout.footer')
  
</body>
</html>