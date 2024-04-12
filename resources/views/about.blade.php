@extends('layouts.app')
@section('content')
<!-- about breadcrumb -->
<section class="w3l-about-breadcrumb text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container py-2">
        <h2 class="title">About Us</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="/">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> About </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
  <!-- /about-6-->
  <section class="w3l-cta4 py-5">
      <div class="container py-lg-5">
        <div style="margin: 8px auto; display: block; text-align:center;">

          <!---728x90--->

           
          </div>
        <div class="ab-section text-center">
          <h6 class="sub-title">About Us</h6>
          <h3 class="hny-title">Travel to make memories all around the world.</h3>
          <p class="py-3 mb-3">At <strong>On The Road</strong> , we're passionate about creating unforgettable travel experiences for our customers. Whether you're embarking on a solo adventure, planning a romantic getaway, or organizing a group excursion, we're here to make your trip extraordinary.</p>
        </div>
        <div class="row mt-5">
          <div class="col-md-9 mx-auto">
            <img src="{{asset('assets/images/9.jpg')}}" class="img-fluid" alt="">
          </div>
        </div>
      </div>
  </section>
  <!-- //about-6-->
   <!-- /content-6-->
   <section class="w3l-content-6 py-5">
    <div class="container py-lg-5">
      <div class="row">
        <div class="col-lg-6 content-6-left pr-lg-5">
          <h6 class="sub-title">Why Choose Us</h6>
          <h3 class="hny-title">Life begins at the end of your comfort zone.</h3>
        </div>
        <div class="col-lg-6 content-6-right mt-lg-0 mt-4">
          <p class="mb-3"><strong>Expertise:</strong> Our team consists of seasoned travelers and destination experts who are passionate about sharing their knowledge and insights with you.</p>
            <p class="mb-3"><strong>Tailored Experiences:</strong> We understand that no two travelers are alike. That's why we take the time to understand your interests, preferences, and budget to create a customized itinerary just for you.</p>
              <p class="mb-3"><strong>Exceptional Service:</strong> From the moment you reach out to us to the day you return home, our dedicated team is here to ensure that every aspect of your trip exceeds your expectations.</p>
        </div>
      </div>
    </div>
</section>
<!-- //content-6-->
<div style="margin: 8px auto; display: block; text-align:center;">

  <!---728x90--->
   
  </div>
<section class="w3l-grids1">
  <div class="hny-three-grids py-5">
    <div class="container py-lg-5">
      <div class="row">
        <div class="col-md-4 col-sm-6 mt-0 grids5-info">
          <a href="#url"><img src="{{asset("assets/images/10.jpg")}}" class="img-fluid" alt=""></a>
          <h5>Lorem</h5>
          <h4><a href="#url">Investor Relations</a></h4>
        </div>
        <div class="col-md-4 col-sm-6 mt-sm-0 mt-5 grids5-info">
          <a href="#url"><img src="{{asset('assets/images/20.jpg')}}" class="img-fluid" alt=""></a>
          <h5>Lorem</h5>
          <h4><a href="#url"> 
            Partner With Care</a></h4>
        </div>
        <div class="col-md-4 col-sm-6 mt-md-0 mt-5 grids5-info">
          <a href="#url"><img src="{{asset('assets/images/55.jpg')}}" class="img-fluid" alt=""></a>
          <h5>Lorem</h5>
          <h4><a href="#url">Customer Care</a></h4>
        </div>
      </div>
    </div>
  </div>
</section>
  <!-- stats -->
  <section class="w3l-statshny py-5" id="stats">
    <div class="container py-lg-5 py-md-4">
      <div class="w3-stats-inner-info">
        <div class="row m-auto ">
          <div class="col-lg-4 m-auto col-6 stats_info counter_grid text-left">
            <span class="fa fa-smile-o m-auto "></span>
            <p class="counter">1730</p>
            <h4>Happy Customers</h4>
          </div>
          
        </div>
      </div>
    </div>
  </section>
  <!-- //stats -->
  <!-- team -->
  <section class="w3l-team" id="team">
    <div class="team-block py-5">
      <div class="container py-lg-5">
        <div style="margin: 8px auto; display: block; text-align:center;">

          <!---728x90--->
           
          </div>
        <div class="title-content text-center mb-lg-3 mb-4">
          <h6 class="sub-title">Our team</h6>
          <h3 class="hny-title">Meet our Guides</h3>
        </div>
        <div class="row">
          @foreach ($guides as $guide)
          <div class="col-lg-3 col-6 mt-lg-5 mt-4">
            <div class="box16">
              <a href="#url"><img src="{{asset('storage/' . $guide->media) }}" alt="" class="img-fluid"/></a>
              <div class="box-content">
                <h3 class="title"><a href="#url">{{$guide->user->name}} </a></h3>
                <span class="post"> {{$guide->specialty}} </span>
                <ul class="social">
                  <li>
                    <a href="#" class="facebook">
                      <span class="fa fa-facebook-f"></span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="twitter">
                      <span class="fa fa-twitter"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          @endforeach
          {{-- <div class="col-lg-3 col-6 mt-lg-5 mt-4">
            <div class="box16">
              <a href="#url"><img src="{{asset('assets/images/98.png')}}" alt="" class="img-fluid" /></a>
              <div class="box-content">
                <h3 class="title"><a href="#url">Khalid</a></h3>
                <span class="post">Description</span>
                <ul class="social">
                  <li>
                    <a href="#" class="facebook">
                      <span class="fa fa-facebook-f"></span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="twitter">
                      <span class="fa fa-twitter"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6 mt-lg-5 mt-4">
            <div class="box16">
              <a href="#url"><img src="{{asset('assets/images/44.png')}}" alt="" class="img-fluid" /></a>
              <div class="box-content">
                <h3 class="title"><a href="#url">Narjess</a></h3>
                <ul class="social">
                  <li>
                    <a href="#" class="facebook">
                      <span class="fa fa-facebook-f"></span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="twitter">
                      <span class="fa fa-twitter"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6 mt-lg-5 mt-4">
            <div class="box16">
              <a href="#url"><img src="{{asset('assets/images/58.png')}}" alt="" class="img-fluid" /></a>
              <div class="box-content">
                <h3 class="title"><a href="#url">Fahd</a></h3>
                <ul class="social">
                  <li>
                    <a href="#" class="facebook">
                      <span class="fa fa-facebook-f"></span>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="twitter">
                      <span class="fa fa-twitter"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
  </section>

  @endsection