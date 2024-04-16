@extends('layouts.app')
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<style>
    body {
  font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif; 
}
</style>
@if (session('success'))
<script>
    document.addEventListener('DOMContentLoaded', function () {
        Swal.fire({
            icon: 'success',
            title: 'Succès!',
            text: "{{ session('success') }}",
        });
    });
</script>
@endif

@if (session('error'))
<script>
    document.addEventListener('DOMContentLoaded', function () {
        Swal.fire({
            icon: 'error',
            title: 'Erreur!',
            text: "{{ session('error') }}",
        });
    });
</script>
@endif
    <!-- about breadcrumb -->
    <section class="w3l-about-breadcrumb text-left">
        <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
            <div class="container">
                <h2 class="title">VOTRE VOYAGE AU MAROC</h2>
                <ul class="breadcrumbs-custom-path mt-2">
                    <li><a href="#url">Home</a></li>
                    <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> {{ $voyage->titre }}
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //about breadcrumb -->
    <!--/blog-->
    <div class="py-5 w3l-homeblock1 text-center">
        <div class="container mt-md-3">
            <div style="margin: 8px auto; display: block; text-align:center;">

                <!---728x90--->


            </div>
            <div class="item">
                <div class="row">
                    <div class="col-lg-4">
                        <a href="blog-single.html">
                            <img class="card-img-bottom d-block radius-image "
                                src="{{ asset('storage/' . $voyage->media) }}" alt="Card image cap">
                        </a>
                    </div>
                    <div class="col-lg-6 blog-details align-self mt-lg-0 mt-4">
                        <h3 class="blog-desc-big text-center mb-4">{{ $voyage->titre }}</h3>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos blanditiis, odit non
                            asperiores
                            possimus voluptas sit nihil nam id explicabo saepe sapiente excepturi similique, dicta
                            officia odio natus nemo. Ratione ipsa distinctio explicabo esse quod autem
                            veritatis, in fugit odio.</p>

                        <div class="d-flex flex-wrap justify-content-between">
                            <div class="author w-50 align-items-start align-items-center mt-4 mb-1">
                                <img src="{{ asset('assets/images/icons8-voyage-24.png') }}" alt="">
                                Type : <a href="">{{ $voyage->type->type }}</a>
                            </div>
                            <div class="author w-50 align-items-start align-items-center mt-4 mb-1">
                                <img src="{{ asset('assets/images/icons8-niveau-30.png') }}" alt="">

                                Niveau : <a href="#">{{ $voyage->defecult }} </a>
                            </div>
                            <div class="author w-50 align-items-start align-items-center mt-4 mb-1">
                                <img src="{{ asset('assets/images/icons8-activité.gif') }}" alt="">

                                Activité : <a href="#"> {{ $voyage->category->category }}</a>
                            </div>
                            <div class="author w-50 align-items-start align-items-center mt-4 mb-1">
                                <img src="{{ asset('assets/images/icons8-touriste-homme-30.png') }}" alt="">

                                Guide : <a href="#"> {{ $voyage->guide->user->name }}</a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="blog-post-main w3l-homeblock1">
        <!--/blog-post-->
        <div class="blog-content-inf pb-5">
            <div class="container pb-lg-4">

                <div class="single-post-content">
                    <p class=" mb-4">{{ $voyage->description }} </p>

                    <blockquote class="blockquote my-5">
                        <div class="icon-quote"><span class="fa fa-quote-left" aria-hidden="true"></span></div>
                        À travers les chemins, les randonneurs écrivent l'histoire des villages qu'ils traversent.

                    </blockquote>
                    <h3 class="blog-desc-big m-0 mb-4">Influence de voyage</h3>
                    <p class="mb-4"> {{ $voyage->impact }} </p>

                    <div class="sing-post-thumb mb-5 row pt-3">
                        <div class="col-sm-6">
                            <a href="#url"><img src="assets/images/g8.jpg" class="img-fluid radius-image"
                                    alt=""></a>
                        </div>
                        <div class="col-sm-6 mt-sm-0 mt-3">
                            <a href="#url"><img src="assets/images/g9.jpg" class="img-fluid radius-image"
                                    alt=""></a>
                        </div>
                    </div>
                    <section class="w3l-stats py-5" id="stats">
                        <div class="gallery-inner container py-lg-0 py-3">
                            <div class="row stats-con pb-lg-3">
                                <div class="col-lg-3  stats_info counter_grid2 mt-lg-0 mt-5">
                                    <p class="counter">{{$reservation->count()}} |{{ $voyage->nbr_places }} </p>
                                    <h4>Nombre de place restée</h4>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="w3l-pricinghny">
                        <div class="pricing-inner-info py-5">
                            <div style="margin: 8px auto; display: block; text-align:center;">

                                <!---728x90--->


                            </div>
                            <div class="container py-lg-4">
                                <!--/pricing-info-grids-->
                                <div class="pricing-info-grids">
                                    <!--/box-->
                                    <div class="price-box">
                                        <div class="grid grid-column-2">
                                            <div class="column pr-img-gd">
                                                <h6 class=""><span class="fa fa-delicious mr-2"
                                                        aria-hidden="true"></span>
                                                    {{ $voyage->destination->destination }}
                                                </h6>
                                            </div>
                                            <div class="column text-lg-center">
                                                <p> {{ \Carbon\Carbon::parse($voyage->date_depart)->format('M j') }},
                                                    {{ \Carbon\Carbon::parse($voyage->date_reteur)->format('M j') }} </p>

                                            </div>
                                            <div class="column price-number text-md-right">
                                                <h3 class="pricing"> {{ $voyage->prix - 1 }}<sup
                                                        class="pri">99</sup><sup class="pri1">DH</sup>
                                                </h3>
                                                <form action="{{ route('voyage.reservation', $voyage->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-style btn-primary ml-lg-3">Book
                                                        Now</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>



                </div>
            </div>
            <!--//blog-post-->
    </section>
    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->

    </div>
@endsection
