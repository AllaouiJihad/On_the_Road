@extends('layouts.app')
@section('content')
<section class="w3l-about-breadcrumb text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container">
        <h2 class="title">Mes Reservation</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="/">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Mes Reservation </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
  <!--/pricing-->
  <section class="w3l-pricinghny">
    <div class="pricing-inner-info py-5">
      <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->

         
        </div>
      <div class="container py-lg-4">
        <!--/pricing-info-grids-->
        <div class="pricing-info-grids">
          <!--/box-->
          @foreach ($reservations as $reservation)
              
          
          <div class="price-box">
            <div class="grid grid-column-2">
              <div class="column pr-img-gd">
               <h6 class="pricehead"><span class="fa fa-delicious mr-2" aria-hidden="true"></span> {{ $reservation->voyage->titre}}
                </h6>
              </div>
              <div class="column text-lg-center">
                <p class="price-title">{{ \Carbon\Carbon::parse($reservation->voyage->date_depart)->format('M j') }} / {{ \Carbon\Carbon::parse($reservation->voyage->date_reteur)->format('M j') }}</p>
              </div>
              <div class="column price-number text-md-right">
                <h3 class="pricing"> <sup class="pri1"></sup> {{$reservation->voyage->prix - 1}} <sup class="pri"> 99 dh</sup>
                </h3>
                <a href="{{route('generate.ticket',$reservation->id)}}" class="btn btn-style btn-primary ml-lg-3">Ticket</a>
              </div>
            </div>
          </div>
          <!--/box-->
          @endforeach

        </div>
        <!--/pricing-info-grids-->
      </div>
    </div>
  </section>
  <!--//pricing-->
  <div style="margin: 8px auto; display: block; text-align:center;">

    <!---728x90--->
     
    </div>
@endsection