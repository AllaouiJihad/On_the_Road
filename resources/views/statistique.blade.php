@extends('layouts.main')
@section('content')
<style>

.order-card {
    color: #fff;
}

.bg-c-blue {
    background: linear-gradient(45deg,#4099ff,#73b4ff);
}

.bg-c-green {
    background: linear-gradient(45deg,#2ed8b6,#59e0c5);
}

.bg-c-yellow {
    background: linear-gradient(45deg,#FFB64D,#ffcb80);
}

.bg-c-pink {
    background: linear-gradient(45deg,#FF5370,#ff869a);
}


.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    border: none;
    margin-bottom: 30px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.card .card-block {
    padding: 25px;
}

.order-card i {
    font-size: 26px;
}

.f-left {
    float: left;
}

.f-right {
    float: right;
}
</style>
<div class="container bootstrap snippets bootdey">
    <div class="row">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Les voyages</h6>
                    <h2 class="text-right"><i class="fa-solid fa-suitcase"></i></h2>
                    <p class="m-b-0">Total voyages : <span class="f-right">{{$voyages}} </span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Les guides</h6>
                    <h2 class="text-right"><i class="fa-solid fa-users"></i></h2>
                    <p class="m-b-0">Completed guides<span class="f-right">{{$guides}} </span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Les users</h6>
                    <h2 class="text-right"><i class="fa-solid fa-users"></i></h2>
                    <p class="m-b-0">Completed users<span class="f-right">{{$users}} </span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-pink order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Les Destinations</h6>
                    <h2 class="text-right"><i class="fa-solid fa-location-dot"></i></h2>
                    <p class="m-b-0">Completed destinations<span class="f-right">{{$destination}} </span></p>
                </div>
            </div>
        </div>
	</div>
</div>
	</div>
    
</div>
@endsection