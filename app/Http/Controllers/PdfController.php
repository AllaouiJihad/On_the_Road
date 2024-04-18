<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Voyage;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function index($id)
    {
        $reservation = Reservation::with('voyage')->with('user')->where('id', $id)->first();
        $destination = Voyage::with('destination')->where('id',$reservation->voyage->id)->first();
        $data = [
            'titre' => $reservation->voyage->titre,
            'date' => date('m/d/Y'),
            'date_depart' => $reservation->voyage->date_depart,
            'date_reteur' => $reservation->voyage->date_reteur,
            'prix' => $reservation->voyage->prix,
           'region' => $reservation->voyage->region,
           'nom' => $reservation->user->name,
           'email' => $reservation->user->email,
           'destination' => $destination->destination->destination,

        ];

        $pdf = PDF::loadView('ticketPdf', $data);
        return $pdf->download('ticket.pdf');
    }
}
