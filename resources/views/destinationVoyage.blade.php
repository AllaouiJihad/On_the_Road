@extends('layouts.app')
@section('content')
<!-- about breadcrumb -->
<section class="w3l-about-breadcrumb text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container">
        <h2 class="title">Destinations </h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="/">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Destinations </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
 <!--  Work gallery section -->
 <section class="grids-1 py-5">
  <div class="grids py-lg-5 py-md-4">
      <div class="container">
        <div style="margin: 8px auto; display: block; text-align:center;">

          <!---728x90--->

           
          </div>
          <h3 class="hny-title mb-5">Destinations</h3>

          <div class="row">
            @if ($voyages->isNotEmpty())
              @foreach ($voyages as $voyage)
                  
              
              <div class="col-lg-4 col-md-4 col-6 mt-lg-5 mt-4">
                  <div class="column">
                      <a href="blog-single.html"><img src="{{ asset('storage/' . $voyage->media) }} " alt="" class="img-fluid"></a>
                      <div class="info">
                          <h4><a href="{{route('voyage.details',$voyage->id)}} ">{{$voyage->titre}} </a></h4>
                          <p> {{ \Carbon\Carbon::parse($voyage->date_depart)->format('M j') }},
                            {{ \Carbon\Carbon::parse($voyage->date_reteur)->format('M j') }}</p>
                          <div class="dst-btm">
                            <h6 class=""> Price : </h6>
                            <span>{{$voyage->prix}} dh </span>
                          </div>
                      </div>
                  </div>
              </div>  
              @endforeach
            @else
            <p>Aucun voyage disponible pour le moment</p>
            @endif
          </div>
      </div>
</div></section>
<!--  //Work gallery section -->
<!-- grids block 5 -->
<div style="margin: 8px auto; display: block; text-align:center;">

  <!---728x90--->
   
  </div>
  
@endsection