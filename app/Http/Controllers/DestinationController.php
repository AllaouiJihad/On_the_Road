<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DestinationController extends Controller
{
    
    public function showDestinations(){
        $destinations = Destination::all();
        return view('destination', compact('destinations'));
    }

    public function addDestination(Request $request){
        $messages = [
            'destination.required' => 'La destination est requis.',
        ];
        $validateData = Validator::make($request->all(), [
            'destination' => 'required|string'
        ],$messages);
        
        if ($validateData->fails()) {
            
            return redirect()->back()->withErrors($validateData)->withInput();
        }
        
        $destination = Destination::create([
            'destination' => $request->input('destination'),
        ]);
        if ($destination!= NULL) {
            return redirect()->back()->with('success', 'destination ajouté avec succès !');
        } else {
            return redirect()->back()->withErrors(['error' => 'Une erreur s\'est produite lors de l\'ajout de la destination.']);
        }
    }


    public function updateDestination(Request $request, $id){
        
        $messages = [
            'destination.required' => 'Le destination est requis.',
        ];
        $validateData = Validator::make($request->all(), [
            'destination' => 'required|string'
        ],$messages);
        if ($validateData->fails()) {
            
            return redirect()->back()->withErrors($validateData)->withInput();
        }

        $destination = Destination::where('id', $id)->first();
        if ($destination!= NULL) {
            $destination->destination = $request->input('destination');
            $destination->save();
            return redirect()->back()->with('success', 'destination mis à jour avec succès !');
        }
    }

    public function deleteDestination($id){
        $destination = Destination::where('id', $id)->first();
        if ($destination!= NULL) {
            $destination->delete();
            return redirect()->back()->with('success', 'destination supprimé avec succès !');
        }
    }
}
