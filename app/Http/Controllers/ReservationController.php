<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function reserver($id){
        $checkreservation = Reservation::where('user_id',Auth::id())->where('voyage_id',$id)->first();
        if($checkreservation == null){
            $reservation = Reservation::create([
                'user_id' => Auth::id(),
                'voyage_id' => $id,
            ]);
            return redirect()->back()->with('success', 'Votre réservation a bien été prise en compte!');
        }
        return redirect()->back()->with('error', 'Vous avez déjà une réservation pour ce voyage!');

    }

    public function myReservation(){
        $reservations = Reservation::with('voyage')->where('user_id',Auth::id())->get();
        return view('myreservation',compact('reservations'));
    }

    public function reservationVoyage($id){
        $reservations = Reservation::with('user')->with('voyage')->where('voyage_id',$id)->get();
        return view('reservationVoyage',compact('reservations'));
    }
}
