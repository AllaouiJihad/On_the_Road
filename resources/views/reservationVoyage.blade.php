@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                @if ($reservations->isNotEmpty())

                <div class="d-md-flex mb-3">
                    <h3 class="box-title mb-0">Les Reservation de <strong> {{$reservations[0]->voyage->titre}} </strong></h3>
                </div>
                <p class="counter">Nombre de place reservée : <strong> {{$reservations->count()}} | {{ $reservations[0]->voyage->nbr_places }} </strong></p>




                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table no-wrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">nom</th>
                                <th class="border-top-0">email</th>
                                <th class="border-top-0">telephone</th>
                                <th class="border-top-0">date reservation</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($reservations as $reservation)
                                <tr>
                                    <td class="txt-oflo">{{ $reservation->user->name }}</td>
                                    <td class="txt-oflo">{{ $reservation->user->email }}</td>
                                    <td class="txt-oflo">{{ $reservation->user->tel }}</td>

                                    <td class="txt-oflo">{{\Carbon\Carbon::parse($reservation->created_at)->format('M j')}} </td>
                                    


                                </tr>


                               
                            @endforeach


                        </tbody>
                    </table>
                </div>
                @else
                <div class="alert alert-danger">
                    Aucune Reservation 
                    </div>
                    @endif
            </div>
        </div>
    </div>
@endsection
