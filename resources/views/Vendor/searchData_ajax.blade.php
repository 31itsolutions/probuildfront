@foreach($data as $key => $val)
              <div class="col-md-3" data-aos="fade-up" data-aos-delay="50">
                <div class="about-col">
                  <div class="img">
                    <img src="{{asset('assets/images/man.png')}}" alt="" class="img-fluid zoom_img">
                    <div class="icon"><i class="bi bi-brightness-high"></i></div>
                  </div>
                  <h2 class="title"><a href="#">{{ $val['business_title'] }}</a></h2>
                            <div class="rate">
                                                                          <div id="stars-existing" class="starrr" data-rating='5'></div>

                            </div>
                            <br>
                            <div class="location">{{ $val['city'] }},{{ $val['location'] }},{{ $val['country'] }}</div>
                          @if (Auth::guard('customer')->check())
                          <p> <b><a href="#">views</a></b></p>
                          @else
                          <p> <b><a href="{{ route('customer_login') }}">view</a></b></p>
                          @endif
                </div>
              </div>
              @endforeach