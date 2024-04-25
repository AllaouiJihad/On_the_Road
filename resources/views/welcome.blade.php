@extends('layouts.app')
@section('content')
    <!--banner-slider-->
    <!-- main-slider -->
    <section class="w3l-main-slider " id="home">
    <section class="w3l-main-slider " id="home">
        <div class="banner-content">
            <div id="demo-1"
                data-zs-src='["assets/images/banner1.jpg", "assets/images/banner2.jpg","assets/images/banner3.jpg", "assets/images/banner4.jpg"]'
                data-zs-overlay="dots">
                <div class="demo-inner-content">
                    <div class="container ">
                        <div class="banner-infhny ">
                            <h3>You don't need to go far to find what matters.</h3>
                            <h6 class="mb-3">Discover your next adventure</h6>
                            <div class="flex-wrap search-wthree-field m-auto mt-md-5 mt-4">
                                <div aclass="booking-form">
                                    <div class="row book-form">
                                        <form class="form-input col-md-3 mt-md-0 mt-3">

                                            <select name="destination" id="search_destination" class="form-control">
                                                <option value="">Destination</option>

                                                @foreach ($destinations as $destination)
                                                    <option value="{{ $destination->id }}">{{ $destination->destination }}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </form>
                                        <div class="form-input col-md-3 mt-md-0 mt-3">

                                            <select name="type" id="search_type" class="form-control">
                                                <option value="">Type</option>

                                                @foreach ($types as $type)
                                                    <option value="{{ $type->id }}">{{ $type->type }} </option>
                                                @endforeach
                                            </select>

                                        </div>
                                       
                                        <div class="form-input col-md-3 mt-md-0 mt-3">

                                            <input type="date" id="search_date" name="" class="form-control" placeholder="Date" required="">
                                        </div>
                                        <div class="bottom-btn col-md-3 ms-5 mt-md-0 mt-3">
                                            <button class="btn btn-style btn-secondary " id="search_button"><span class="fa fa-search mr-3"
                                                    aria-hidden="true"></span>
                                                </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /main-slider -->
    <!-- //banner-slider-->

    <!--/grids-->
    <section class="w3l-grids-3 py-5">
        <div class="container py-md-5">
            <div style="margin: 8px auto; display: block; text-align:center;">

                <!---728x90--->


            </div>
            <div class="title-content text-left mb-lg-5 mb-4">
                <h6 class="sub-title">Visit</h6>
                <h3 class="hny-title">Popular Destinations</h3>
            </div>
            <div style="margin: 8px auto; display: block; text-align:center;">

                <!---728x90--->

            </div>
            <div class="row bottom-ab-grids" id="search_result">
                <!--/row-grids-->

                @foreach ($voyages as $voyage)
                    <div class="col-lg-6 subject-card mt-lg-0 mt-4">
                        <div class="subject-card-header p-4">
                            <a href="{{ route('voyage.details', $voyage->id) }}" class="card_title p-lg-4d-block">
                                <div class="row align-items-center">
                                    <div class="col-sm-5 subject-img">
                                        <img src="{{ asset('storage/' . $voyage->media) }}" alt="Nom de l'image"
                                            class="img-fluid">
                                    </div>
                                    <div class="col-sm-7 subject-content mt-sm-0 mt-4">
                                        <h4>{{ $voyage->titre }}</h4>
                                        <p> {{ \Carbon\Carbon::parse($voyage->date_depart)->format('M j') }},
                                            {{ \Carbon\Carbon::parse($voyage->date_reteur)->format('M j') }} </p>
                                        <div class="dst-btm">
                                            <h6 class=""> Price </h6>
                                            <span> {{ $voyage->prix }} DH </span>
                                        </div>
                                        <p class="sub-para">Per person on twin sharing</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
    <!--//grids-->
    <!-- stats -->
    <section class="w3l-stats py-5 " id="stats">
        <div class="gallery-inner container  py-lg-0 py-3">
            <div class="row stats-con pb-lg-3 m-auto">
                
                <div class="col-lg-3 col-6 stats_info counter_grid1">
                    <p class="counter">{{$guide->count()}} </p>
                    <h4>Travel Guides</h4>
                </div>
                <div class="col-lg-3 col-6 stats_info counter_grid mt-lg-0 mt-5">
                    <p class="counter">{{$users->count()}} </p>
                    <h4>Happy Customers</h4>
                </div>
               
            </div>
        </div>
    </section>
    <!-- //stats -->
    <!--/-->
    <div class="best-rooms py-5">
        <div class="container py-md-5">
            <div class="ban-content-inf row">
                <div class="maghny-gd-1 col-lg-6">
                    <div class="maghny-grid">
                        <figure class="effect-lily border-radius  m-0">
                            <img class="img-fluid" src="{{asset('assets/images/999.jpg')}}" alt="" />
                            <figcaption>
                                <div>
                                    <h4>middle atlas</h4>
                                </div>

                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="maghny-gd-1 col-lg-6 mt-lg-0 mt-4">
                    <div class="row">
                        <div class="maghny-gd-1 col-6">
                            <div class="maghny-grid">
                                <figure class="effect-lily border-radius">
                                    <img class="img-fluid" src="{{asset('assets/images/55.jpg')}} " alt="" />
                                    <figcaption>
                                        <div>
                                            <h4>North RIF</h4>
                                        </div>

                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="maghny-gd-1 col-6">
                            <div class="maghny-grid">
                                <figure class="effect-lily border-radius">
                                    <img class="img-fluid" src="{{asset('assets/images/20.jpg')}}" alt="" />
                                    <figcaption>
                                        <div>
                                            <h4>Anti Atlas</h4>
                                        </div>

                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="maghny-gd-1 col-6 mt-4">
                            <div class="maghny-grid">
                                <figure class="effect-lily border-radius">
                                    <img class="img-fluid" src="{{asset('assets/images/2.jpg')}}" alt="" />
                                    <figcaption>
                                        <div>
                                            <h4>3Days, 4 Nights</h4>
                                            <p>From 1820$ </p>
                                        </div>

                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="maghny-gd-1 col-6 mt-4">
                            <div class="maghny-grid">
                                <figure class="effect-lily border-radius">
                                    <img class="img-fluid" src="{{asset('assets/images/8.jpg')}}" alt="" />
                                    <figcaption>
                                        <div>
                                            <h4>3Days, 4 Nights</h4>
                                            <p>From 1520$ </p>
                                        </div>

                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //stats -->
    <!--/w3l-bottom-->
    <section class="w3l-bottom py-5">
        <div class="container py-md-4 py-3 text-center">
            <div class="row my-lg-4 mt-4">
                <div class="col-lg-9 col-md-10 ml-auto">
                    <div class="bottom-info ml-auto">
                        <div class="header-section text-left">
                            <h3 class="hny-title two">Traveling makes a man wiser, but less happy.</h3>
                            <p class="mt-3 pr-lg-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit
                                beatae laudantium
                                voluptate rem ullam dolore nisi voluptatibus esse quasi. Integer sit amet .Lorem
                                ipsum dolor sit
                                amet adipisicing elit.</p>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//w3l-bottom-->
    <!-- testimonials -->
    <section class="w3l-clients" id="clients">
        <!-- /grids -->
        <div class="cusrtomer-layout py-5">
            <div class="container py-lg-4 py-md-3 pb-lg-0">
                <div class="heading text-center mx-auto">
                    <h6 class="sub-title text-center">Here’s what they have to say</h6>
                    <h3 class="hny-title mb-md-5 mb-4">our clients do the talking</h3>
                </div>
                <!-- /grids -->
                <div class="testimonial-width">
                    <div id="owl-demo1" class="owl-two owl-carousel owl-theme">
                        @foreach ($avis as $avi)
                            
                        
                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonial">
                                    <blockquote>
                                        <span class="fa fa-quote-left" aria-hidden="true"></span>
                                        {{$avi->description}}
                                    </blockquote>
                                    <div class="testi-des">
                                       
                                        <div class="peopl align-self">
                                            <h3>{{$avi->user->name}} </h3>
                                            <p class="indentity">Example City</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- /grids -->
        </div>
        <!-- //grids -->
    </section>
    <!-- //testimonials -->
    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->

    </div>
    <!--/w3l-footer-29-main-->
    <script src="{{asset('assets/js/search.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@endsection
