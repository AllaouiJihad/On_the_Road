<?php

namespace App\Http\Controllers;

use App\Models\Voyage;
use App\Http\Requests\StoreVoyageRequest;
use App\Http\Requests\UpdateVoyageRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;

class VoyageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function listVoyage(){
        $voyages = Voyage::whereDate('date_depart', '>=', Carbon::now())->get();        
        return view('welcome',compact('voyages'));
    }

    public function index()
    {
        return view('addVoyage');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {

        $messages = [
            'titre.required' => 'Veuillez saisir le titre',
            'description.required' => 'Veuillez saisir la description',
            'date_depart.required' => 'Veuillez saisir la date de départ',
            'date_reteur.required' => 'Veuillez saisir la date de retour',
            'prix.required' => 'Veuillez saisir le prix',
            'nbr_places.required' => 'Veuillez saisir le nombre de places',
            'media.image' => 'Le fichier doit être une image',
            'destination' => 'Veuillez saisir la destination',
            'region.required' => 'Veuillez saisir la region',
            'impact.required' => 'Veuillez saisir l\'impact',
            'defecult.required' => 'Veuillez saisir la defecult',
        ];
        $validator = Validator::make($request->all(), [
            'titre' => 'required|string',
            'description' => 'required|string',
            'date_depart' => 'required|date',
            'date_reteur' => 'required|date',
            'prix' => 'required',
            'nbr_places' => 'required',
            'media' => 'nullable|image|required',
            'destination' =>'required',
            'region' =>'required',
            'impact' =>'required',
            'defecult' =>'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $mediaPath = $request->file('media')->store('uploads', 'public');

        $voyage = Voyage::create([
            'titre' => $request->input('titre'),
            'description' => $request->input('description'),
            'date_depart' => $request->input('date_depart'),
            'date_reteur' => $request->input('date_reteur'),
            'prix' => $request->input('prix'),
            'nbr_places' => $request->input('nbr_places'),
            'media' => $mediaPath,
            'destination' => $request->input('destination'),
            'region' => $request->input('region'),
            'impact' => $request->input('impact'),
            'defecult' => $request->input('defecult'),
            'category' => $request->input('category'),
            'type' => $request->input('type'),
            'guide' => $request->input('guide'),
        ]);

        if ($voyage != NULL) {
            return redirect()->back()->with('success', 'Voyage ajouté avec succès !');
        } else {
            return redirect()->back()->withErrors(['error' => 'Une erreur s\'est produite lors de l\'ajout du voyage.']);
        }
    }

    
}
