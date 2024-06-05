

  

  <script type="text/javascript" src="{{ URL::asset('assets/js/styles.js') }}"></script>


    <script type="text/javascript" src="{{ URL::asset('assets/js/model_trigger.js') }}"></script>
    {{-- <script type="text/javascript" src="{{ URL::asset('assets/vendor/jquery/jquery.min.js') }}"></script> --}}
    <script type="text/javascript" src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/animation.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/imagesloaded.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/styles.js') }}"></script> 
  
  <footer id="footer" >

    <div class="footer-top" style="height: auto">
      <div class="container" >
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3> Ready to get started ?<span></span></h3>
             @if (Auth::guard('vendor')->check())




             @if($vendor_bl >= $business_listing) 
             <button id="addb"> <a href="{{route('vendor_package_monthly')}}">Add Business</a></button>
             @else
             <button id="addb"> <a href="{{route('add_business',$vendor->id)}}">Add Business</a></button>
             @endif 

                 
                 
                 @elseif(Auth::guard('customer')->check())
                 <button type = "submit" class = "review-btn mt-2" class = "" hidden="hidden"><a style="color: black" href="{{ route('customer_login') }}">customer</a></button>
                 @else
                 <button type = "submit" class = "review-btn mt-2" class = ""><a style="color: black" href="{{ route('customer_login') }}">login</a></button>
            @endif
                 
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4 >PROBUILD</h4>
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




 <style>

    #map {
    top: 0;
    bottom: 0;
    max-width: 100%;
    }
    .marker {
    background-image: url('mapbox-icon.png');
    background-size: cover;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    cursor: pointer;
    }
    .mapboxgl-popup {
    max-width: 200px;
    }
    .mapboxgl-popup-content {
    text-align: center;
    font-family: 'Open Sans', sans-serif;
    }


    </style>




<script>
$('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script>



     <script>
      $(function () {
          // flash auto hide
          $('#flash-msg .alert').not('.alert-danger, .alert-important').delay(6000).slideUp(500);
      })


      function change_status(id, name, check, column){
      var status = 0;
        if($(check).is(':checked')){
            var status = 1;
        }
      $.ajax({
          url: "{{ route('change_business_status') }}",
          type: 'POST',
          data: {"_token": '{{csrf_token()}}', status:status, id:id, name:name, column:column},
          success: function(response){
              if(response.status == 1){
                  toastr.success("Status Changed Successfully!", response.message);
              }else{
                  toastr.error("Error While changing Status", response.message);
              }

          },
          error:function(response){
              toastr.error("Error While changing Status","Please Refresh and Try!");
          }
      })
  }
  </script>

<script>
    var x = document.getElementById("read_more");
    var l = document.getElementById("less");
    var m = document.getElementById("more");
      l.classList.add("hide");

  x.classList.add("hide");
  function read_comment() {
    if (x.classList.contains("hide")) {
      x.classList.remove("hide");

      l.classList.remove("hide");
      m.classList.add("hide");

    } else {
      x.classList.add("hide");
         l.classList.add("hide");
      m.classList.remove("hide");
    }
  }


</script>


      <script type="text/javascript">
$(document).ready(function () {
$(' .dmenu').hover(function () {
        $(this).find('.menu').first().stop(true, true).slideDown(150);
    }, function () {
        $(this).find('.menu').first().stop(true, true).slideUp(105)
    });
});
</script>

    <script type="text/javascript" src="{{ URL::asset('assets/js/company_profile.js') }}"></script>
