
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" integrity="sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  

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
        <div class="row footer_module">

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
<script type="text/javascript">
    $(document).ready(function () {
    $(' .dmenu').hover(function () {
            $(this).find('.menu').first().stop(true, true).slideDown(150);
        }, function () {
            $(this).find('.menu').first().stop(true, true).slideUp(105)
        });
    });
    </script>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type="text/javascript" src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script>
         $(document).ready(function() {
        $('#category').on('change', function() {
            // var stateID = $(this).val();
            var stateID = $('#category').val();
            // alert(stateID)
            if(stateID) {
                $.ajax({
                    // url: '/sub_category_load/'+stateID,
                    url: '{{ url('sub_category_load') }}',
                    type: "GET",
                    data : {"_token":"{{ csrf_token() }}","id":stateID},
                    dataType: "json",
                    success:function(data) {
                        console.log(data);
                      if(data){
                        $('#subcategory').empty();
                        $('#subcategory').focus;
                        $('#subcategory').append('<option value="">-- Select Sub Category --</option>'); 
                        $.each(data, function(key, value){
                        $('select[name="subcategory"]').append('<option value="'+ value.id +'">' + value.sub_category+ '</option>');
                    });
                  }else{
                    $('#subcategory').empty();
                  }
                  }
                });
            }else{
              $('#subcategory').empty();
            }
        });
    });
    </script>
    <script type="text/javascript">
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

    {{-- <script type="text/javascript" src="{{ URL::asset('assets/js/company_profile.js') }}"></script> --}}

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
{{-- <script type="text/javascript" src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script> --}}