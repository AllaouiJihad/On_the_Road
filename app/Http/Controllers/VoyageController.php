<?php

namespace App\Http\Controllers;

use App\Models\Voyage;
use App\Http\Requests\StoreVoyageRequest;
use App\Http\Requests\UpdateVoyageRequest;
use App\Models\category;
use App\Models\Destination;
use App\Models\Guide;
use App\Models\Reservation;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;

class VoyageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function listVoyage(){
        $voyages = Voyage::whereDate('date_depart', '>=', Carbon::now())->limit(6)->get();        
        return view('welcome',compact('voyages'));
    }

    public function index()
    {
        $destinations = Destination::all();
        $types = Type::all();
        $categories = category::all();
        $guides = Guide::with('user')->get();
        return view('addVoyage', compact('destinations','types','guides','categories'));
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
            'destination_id' => $request->input('destination'),
            'region' => $request->input('region'),
            'impact' => $request->input('impact'),
            'defecult' => $request->input('defecult'),
            'category_id' => $request->input('category'),
            'type_id' => $request->input('type'),
            'guide_id' => $request->input('guide'),
        ]);

        if ($voyage != NULL) {
            return redirect()->back()->with('success', 'Voyage ajouté avec succès !');
        } else {
            return redirect()->back()->withErrors(['error' => 'Une erreur s\'est produite lors de l\'ajout du voyage.']);
        }
    }

    public function getVoyages(){
        $voyages = Voyage::with('category')->with('type')->with('destination')->get();
        $destinations = Destination::all();
        $types = Type::all();
        $categories = category::all();
        return view('voyages',compact('voyages','types','categories','destinations'));
    }

    public function updateVoyage(Request $request, $id){
        $messages = [
            'titre.required' => 'Veuillez saisir le titre',
            'description.required' => 'Veuillez saisir la description',
            'date_depart.required' => 'Veuillez saisir la date de départ',
            'date_reteur.required' => 'Veuillez saisir la date de retour',
            'prix.required' => 'Veuillez saisir le prix',
            'nbr_places.required' => 'Veuillez saisir le nombre de places',
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
            'destination' =>'required',
            'region' =>'required',
            'impact' =>'required',
            'defecult' =>'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $voyage = Voyage::findOrFail($id);

        $voyage->update([
            'titre' => $request->input('titre'),
            'description' => $request->input('description'),
            'date_depart' => $request->input('date_depart'),
            'date_reteur' => $request->input('date_reteur'),
            'prix' => $request->input('prix'),
            'nbr_places' => $request->input('nbr_places'),
            'destination_id' => $request->input('destination'),
            'region' => $request->input('region'),
            'impact' => $request->input('impact'),
            'defecult' => $request->input('defecult'),
            'category_id' => $request->input('category'),
            'type_id' => $request->input('type'),
        ]);
        
        return redirect()->back()->with('success', 'Voyage mis à jour avec succès!');

    }

    public function destroyVoyage($id){
        $voyage = Voyage::find($id);
        $voyage->delete();
        return redirect()->back()->with('success', 'Voyage supprimé avec succès !');
    }


    public function getVoyage($id){
        $voyage = Voyage::with('type')->where('id', $id)->first();
        $reservation = Reservation::where('voyage_id',$id)->get();
        return view('detailsVoyage',compact('voyage','reservation'));
    }
}
