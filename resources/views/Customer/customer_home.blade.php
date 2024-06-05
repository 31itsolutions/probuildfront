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
<body class="showtender_request">




@include('Customer.customer_layout.header')




<div class  = "container ">


{{-- @include('flash::message') --}}

                                   <div class="row mt-3">
                                    <div class="col-md-12">
                                        <div class="">
                    
                                            @if (session('success'))
                    
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                    
                                                {{ session('success') }}
                    
                                            </div>
                                            @endif
                    
                                        </div>
                                    </div>
                                </div>


     <div class="row cu_body">
        <div class="col-md-12">



            
<div class = "body_tl body_home_cu">

    <div class = "body_header">
    <h1>My Profile</h1>
    <a class="cu_edit" href = "{{route('customer_profile_edit',$customer->id)}}">Edit Profile</a>
    </div>
    
    <hr>
    
    <div class = "body_form">
          
          <!-- <div class="row image_input">    
            <div class="col-md-12 ">  
                <label for="exampleInputEmail1">Profile Image </label>
    
                  {{-- <input type="file" class="form-control" name = "profile_image" readonly   value = "{{$customer->profile_image}}" id="exampleInputEmail1" placeholder="First Name" > --}}
                   @if($customer->profile_image == null)
                     <img class="logo-bottom" src="{{ asset('assets/images/default.png') }}" alt="" style="width: 75px;">
                    @else
                     <img class="logo-bottom" src="{{ asset('upload_images/customer_profile/'.$customer->profile_image) }}" alt="" style="width: 75px;">
                    @endif
            </div>
        </div>-->
        <br>
                                    
    
     <div class="form-group">
        <label for="exampleInputEmail1">Full Name</label>
        <input type="text" class="form-control"   value = "{{$customer->name}} {{$customer->lname}}" id="exampleInputEmail1" placeholder="Enter Full Name" readonly>
      </div>
    
    
    
     <div class="form-group">
        <label for="exampleInputEmail1">Email </label>
        <input type="email" class="form-control" value = "{{$customer->email}}" id="exampleInputEmail1" placeholder="Enter Email" readonly>
      </div>
    
    
    
     <div class="form-group mobile">
        <label for="exampleInputEmail1">Mobile No</label>
        <input type="text" class="form-control" value = "{{$customer->number}}"  id="exampleInputEmail1" placeholder="Enter Mobile.No" readonly>
      </div>
    
    
    
     <div class="form-group">
        <label for="exampleInputEmail1">Area</label>
        <input type="text" class="form-control" value = "{{$customer->address_1}}"  id="exampleInputEmail1" placeholder="Enter Area" readonly>
      </div>
    
    
    
     <div class="form-group">
        <label for="exampleInputEmail1">City</label>
        <input type="text" class="form-control" value = "{{$customer->address_2}}"  id="exampleInputEmail1" placeholder="Enter City" readonly>
      </div>
    
    
     <div class="form-group">
        <label for="exampleInputEmail1"> Province</label>
        <input type="text" class="form-control" value = "{{$customer->city}}"  id="exampleInputEmail1" placeholder="Enter Province" readonly>
      </div>
    
    
    
     <div class="form-group">
        <label for="exampleInputEmail1">Country</label>
        <input type="text" class="form-control" value = "{{$customer->state}}"  id="exampleInputEmail1" placeholder="Enter Country" readonly>
      </div>
    
    
    
    <br>
    
    
    
    </div>
    </div>
    










 <form action="{{ route('tender_req',$customer->id) }}" method="POST" enctype="multipart/form-data">
     @csrf
<div class = "body_tl tendor_body cu_tendor" id="tender_request">

    <div class = "body_header">
    <h1>Tender Request</h1>
    </div>
    
    <hr>
    
    <div class = "body_form">

        <br>
                                   
    
     <div class="form-group">
        <label for="exampleInputEmail1">Tender Title</label>
        <input type="text" class="form-control" name = "tendor_title"   value = "" id="exampleInputEmail1" required placeholder="Enter Tender Title" >
      </div>
    
    
    
      <div class="form-group">
    <label for="exampleFormControlSelect2">Tender Category</label>
    <select  class="form-control" name = "category" id="category" required>
                             <option value="0">--select Category--</option>

              @foreach ($category as $item)
                        <option value="{{ $item->id }}">{{ $item->category }}</option>
                    @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect2">Sub category</label>
    <select  class="form-control" name = "subcategory" id="subcategory" required>
     
    </select>
  </div>

    
     <div class="form-group">
    <label for="exampleFormControlTextarea1">Tender Description</label>
    <textarea class="form-control" name = "tendor_description" id="exampleFormControlTextarea1" rows="5" placeholder = "Enter Tender Description" required></textarea>
  </div>


      <div class="row image_input">    
            <div class="col-md-12 ">  
                <label for="exampleInputEmail1">Sample Image</label>
    
                  <input type="file" class="form-control " name = "sample_image"     id="exampleInputEmail1" placeholder="First Name" required>
            </div>
        </div>

    
    <br>
    
    
    <div class = "tendor_btn">
<button >Send Request</button>
</div>
    </div>
    </div>



    </form>



    <div class = "tendor_detail">

<h1>Previously Requested Tenders</h1>

    <div class ="tendor_body cu_card">

    @forelse ($tendor as $key => $item)
  




    <style>
  /* @media only screen and (max-width: 600px) {
    .accepted_tendor {
     height :150px!important;
    }
    .accepted_tendor .views {
      line-height: 1.5;
    }
    
  } */
  @media only screen and (max-width: 768px) {
  .tendor_inner {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .accepted_tendor {
    margin-bottom: 5px;
    
  }

  .tendor_dn {
    margin-top: 5px;
  }
  .heig {
     height :180px!important;
    }
}

</style>


<div class="card " style="margin-right: 5%;">
    <div class="card-header" id="heading{{$key}}">

    <div class = "accepted_tendor heig">
    <h5 class="mb-0 tendor_d">
    <h2 class="collapsed" data-toggle="collapse" data-target="#collapse{{$key}}" aria-expanded="false" aria-controls="collapse{{$key}}">
    <span class="views">
  {{$item->name}} {{$item->lname}} Accepted Your Tender Request<br><br>
  <span class="category">{{$item->sub_category}}</span>
</span>
 
      <p class="view">View Details</p>
    </h2>
  </h5>

     </div>
    </div>
    <div id="collapse{{$key}}" class="collapse" aria-labelledby="heading{{$key}}" data-parent="#accordion">
      <div class="card-body">



<div class = "tendor_inner">

<div class = "accepted_tendor">
<h1>{{$item->tendor_title}}</h1>
</div>

<p class = "tendor_dn">{{$item->tendor_description}}

</p>

<p class = "tendor_date req_date">Date Posted : {{  date('d-M-Y h:i:s',strtotime($item->tendorend))}}</p>

</div>

      </div>
    </div>
  </div>
    

    
  @empty
      <p    class="cu_prev">Currently Your tenders are not accepted...!</p>
  @endforelse

    </div>

    </div>
    



        </div>
     </div>



</div>{{--container--}}
<script>
$('div.alert').not('.alert-success').delay(3000).fadeOut(350);

</script>



@include('Customer.customer_layout.footer')

  
</body>
</html>