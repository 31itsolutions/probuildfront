<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Vendor Home</title>


   {{-- Css from assets --}}
  <link href="{{ asset('assets/css/company_profile.css') }}" rel="stylesheet">
  <!--<link href="{{ asset('assets/css/vendor.css') }}" rel="stylesheet">-->
  <link href="{{ asset('assets/css/vendor_1.css') }}" rel="stylesheet">
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
<body id="body_popup">



  <div id="ac-wrapper" style='display:none'>
    {{-- <input type="submit" name="submit" value="Submit" onClick="PopUp('hide')" /> --}}

<div id="popup">
<div class="my_plan">
<p>My Plan</p>
</div>
<div class="package_expired">
<p>Your Package has Expired, Please Upgrade</p>
<a href="{{ route('vendor_package') }}"class="btn-allign">
<button>Upgrade</button>
</a>
</div>

</div>
</div>

<div id="bg_expired">

@include('Vendor.vendor_layout.header')



<style>
    @media (max-width: 520px) {
     .profile_menu .dropdown-menu {
    margin-top: 4px !important;
    left: -48px !important;
}
}
</style>
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


     <div class="row">
        <div class="col-md-12">

  
   <div class = "req_header">
   <h1>Tender Board</h1>
   <p></p>
   </div>

 <div class = "req_body">
   <div class = "req_br">
 <div class = "react_title">
<h1>Current Tenders</h1>
</div>
<br>
@forelse ($tendor as $key => $item )

{{-- 
@if (empty($item->tendorend))
    Currently there is no Tenders Found
@endif --}}
<style>
  @media (max-width: 767px){
p.date_time {
    
    margin-right: 20px;
    margin: 5px 20px 10px!important;
}
a.close{
  margin-right: 20px;
  
}

}
  </style>
<div class="card">
    <div class="tendor_inner_header">
        <h1>Tender Request</h1>
        <p class="category_vendor" style="font-size: 12px!important;
    font-weight: 600!important;">{{$item->sub_category}}</p>
    </div>
    <div class="right_rq" >
        <p class="date_time" style="
    margin: 0 20px 10px;" >
            <?php echo date("d-m-Y", strtotime($item->tendorend)); ?>
        </p>
         <a  class="close" href="{{route('tendor_request_removed',$item->tendorId)}}"><i class="fas fa-times" style="font-size: 20px;"></i></a>
    </div>
    <style>
        @media only screen and (max-width: 768px) {
            .btnh {
                height: 17px!important;
            }
        }
    </style>
    <div class="card-header" id="headingTwo{{$key}}" style="padding: 12px 5px 80px;">
        <div class="mb-0 tendor_req_drop top_tendor" style="display: flex; justify-content: space-between; align-items: center;">
            <h2 style="margin: 0;font-size:17px;">{{$item->tendor_title}}</h2>
            @if($check_b['tendor_board'] == 1)
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo{{$key}}" aria-expanded="false" aria-controls="collapseTwo{{$key}}">
                    <p style="height:21px;" class="view btnh" >View Details</p>
                    <p><i class="fas fa-star"></i></p>
                </button>
            @else
                <a href="{{ route('vendor_package', $vendor->id) }}">
                    <button class="btn btn-link collapsed" style="top: 60%;">
                        <p class="view" >View Details</p>
                        <p><i class="fas fa-star"></i></p>
                    </button>
                </a>
            @endif
        </div>
    </div>

    <div id="collapseTwo{{$key}}" class="collapse" aria-labelledby="headingTwo{{$key}}" data-parent="#accordion">
        <div class="card-body">
            <div class="tendor_inner_req" style="padding-left: 10px;">
                <div class="cu_info">
                    <img class="" src="{{ asset('upload_images/customer_profile/'.$item->profile_image) }}" alt="">
                    <p>{{$item->name}} {{$item->lname}}</p>
                </div>
                <img class="" style="width: 130px; height: 80px;" src="{{ asset('upload_images/tendor_sample_image/'.$item->sample_image) }}" alt="">
                <p class="tebdor_dn">{{$item->tendor_description}}</p>
                <div class="action_btn">
                    <a type="submit" class="accept" href="{{ route('tendor_action_accepted', $item->tendorId) }}">Accept</a>
                    <a class="reject" href="{{ route('tendor_action_rejected', $item->tendorId) }}">Reject</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 
<div class="card"><br>
<div class = "tendor_inner_header">
<h1>Tender Request</h1>
<p class = "category_vendor">{{$item->sub_category}}</p>
</div>
      <div class = "right_rq">
      <p class = "date_time">
        
        <?php echo date("d-m-Y", strtotime($item->tendorend)); ?>
      <p>
      <a href = "{{route('tendor_request_removed',$item->tendorId)}}" ><i class="fas fa-times"></i></a>
      </p>
      </div>
<style>
   
                                    @media only screen and (max-width: 768px)  {
                                        .btnh {
                                          height:17px!important;
                                        }
                                     
                                        }
                                    
  </style>
      <div class="card-header" id="headingTwo{{$key}}" style="padding: 12px 5px 80px;">
  <div class="mb-0 tendor_req_drop top_tendor" style="display: flex; justify-content: space-between; align-items: center;">
    <h2 style="margin: 0;">{{$item->tendor_title}}</h2>
    @if($check_b['tendor_board'] == 1)
      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo{{$key}}" aria-expanded="false" aria-controls="collapseTwo{{$key}}">
        <p style="height:21px;" class="view btnh" >View Details</p>
        <p><i class="fas fa-star"></i></p>
      </button>
    @else
      <a href="{{ route('vendor_package', $vendor->id) }}">
        <button class="btn btn-link collapsed" style="top: 60%;">
          <p class="view" >View Details</p>
          <p><i class="fas fa-star"></i></p>
        </button>
      </a>
    @endif
  </div>
</div>

    <div id="collapseTwo{{$key}}" class="collapse" aria-labelledby="headingTwo{{$key}}" data-parent="#accordion">
      <div class="card-body">



<div class = "tendor_inner_req" style="padding-left: 10px;">

<div class = "cu_info" >
    <img  class="" src="{{ asset('upload_images/customer_profile/'.$item->profile_image) }}" alt="">           
<p >{{$item->name}} {{$item->lname}}</p>


</div>

         <img class=""  style="width: 130px;  height:80px;" src="{{ asset('upload_images/tendor_sample_image/'.$item->sample_image) }}" alt="">           


<p class = "tebdor_dn">{{$item->tendor_description}}

</p>


<div class = "action_btn">


<a type = "submit" class = "accept" href = "{{ route('tendor_action_accepted', $item->tendorId) }}">Accept</a>

<a class = "reject" href = "{{ route('tendor_action_rejected', $item->tendorId) }}">Reject</a>
</div>


</div>



      </div>
    </div>
  </div> -->

  
  @empty
  <p class="req_call_empty mt-4" style="">No Tender Request Found...!</p>

  @endforelse

<div class = "react_title">
<h1>Reacted Tenders</h1>
</div>
  {{-- actio tendor portion --}}
@forelse ( $tendor_action as $key => $item )



<div class="card">
  <div class="tendor_inner_header">
    <h1>Tender Request</h1>
    <p style="font-size: 12px!important;
    font-weight: 600!important;">{{$item->sub_category}}</p>
  </div>
  <div class="right_rq">
    <p class="date_time" style="margin: 0 20px 10px;">
      <?php echo date("d-m-Y", strtotime($item->tendorend)); ?>
    </p>
    <!-- Placing the fa-times icon within the card -->
    <a class="close" href="{{route('tendor_action_removed',$item->tendoractionId)}}">
      <i class="fas fa-times" style="font-size: 20px;"></i>
    </a>
  </div>

  <div class="card-header" id="headingTwo{{$item->id}}" style="padding: 25px 5px 120px;">
    <div class="mb-0 tendor_req_drop">
      <h2 style="padding: 45px 5px 90px;font-size:17px;">{{$item->tendor_title}}</h2>
        @if( $item->tendor_req_action ==  1)
        <p
         class = "accepted">Accepted</p>
        @else
        <p class = "rejected">Rejected</p>
        @endif

@if($check_b['tendor_board'] == 1)
        <button  style="top: 60%;" class="btn btn-link collapsed tendor_btn" data-toggle="collapse" data-target="#collapseTwo{{$item->id}}" aria-expanded="false" aria-controls="collapseTwo{{$item->id}}">
           <p   style="height:21px;" class="view btnh">View Details<p> <p><i class="fas fa-star"></i></p>
        </button>
        @else
        <a class="tendor_btn" href = "{{route('vendor_package',$vendor->id)}}">
  <button class="btn btn-link collapsed "  style="top: 60%;">
           <p  style="height:21px;" class="view btnh">View Details<p> <p><i class="fas fa-star"></i></p>
        </button>
        </a>
        @endif
      </div>
    </div>
    <div id="collapseTwo{{$item->id}}" class="collapse" aria-labelledby="headingTwo{{$item->id}}" data-parent="#accordion">
      <div class="card-body">



<div class = "tendor_inner_req">

<div class = "cu_info">
    <img class="" src="{{ asset('upload_images/customer_profile/'.$item->profile_image) }}" alt="">           
<p>{{$item->name}} {{$item->lname}}</p>

</div>
        @if( $item->tendor_req_action ==  1)

<div class = "cu_contact">
<h1><i class="fa fa-phone" aria-hidden="true"></i> {{$item->number}} </h1>

<h1><i class="far fa-envelope"></i> {{$item->email}}</h1>

<h1><i class="fas fa-map-marker-alt"></i> {{$item->area}}, {{$item->city}}, {{$item->province}}</h1>

</div>
@endif




         <img class="mt-3"  style="width: 130px; height:80px;" src="{{ asset('upload_images/tendor_sample_image/'.$item->sample_image) }}" alt="">           


<p class = "tebdor_dn">{{$item->tendor_description}}

</p>



</div>



      </div>
    </div>
  </div>

  @empty
  <p class="req_call_empty mt-4 " style="">No Tender Request Found...!</p>

  @endforelse

   </div>
   </div>












        </div>
     </div> 












 



</div>{{--container--}}




@include('Vendor.vendor_layout.footer')




@if(Auth::guard('vendor')->check())

    @if ($check_b['expired_popup'] == false)
        
    <script>
        $(document).ready(function() {
            $('.dropdown-submenu a.test').on("click", function(e) {
                $(this).next('ul').toggle();
                e.stopPropagation();
                e.preventDefault();
            });
        });



        function PopUp(hideOrshow) {
    if (hideOrshow == 'hide') document.getElementById('ac-wrapper').style.display = "none";
    else document.getElementById('ac-wrapper').removeAttribute('style');
}
window.onload = function () {
    setTimeout(function () {
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