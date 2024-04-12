<?php

namespace App\Http\Controllers;

use App\Models\Guide;
use App\Models\User;
use Illuminate\Http\Request;

class GuideController extends Controller
{
    //
    public function index(){
        return view('addGuide');
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire
        $messages = [
            'name.required' => 'Le champ nom est requis.',
            'email.required' => 'Le champ email est requis.',
            'email.email' => 'Veuillez saisir une adresse email valide.',
            'email.unique' => 'Cette adresse email est déjà utilisée.',
            'password.required' => 'Le champ mot de passe est requis.',
            'password.min' => 'Le mot de passe doit contenir au moins :min caractères.',
            'specialty.required' => 'Le champ spécialité est requis.',
            'tel.required' => 'Le champ telephone est requis.',
            'media.image' => 'Le fichier doit être une image',

        ];
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email', // Assure l'unicité de l'email dans la table users
            'password' => 'required|string|min:8',
            'specialty' => 'required|string',
            'tel' => 'required',
            'media' => 'nullable|image|required',
        ],$messages);

       
        $mediaPath = $request->file('media')->store('uploads', 'public');

        // $checkifexcite = User::where(email)
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'tel' => $validatedData['tel'],
            'password' => bcrypt($validatedData['password']),
        ]);

        $guide = new Guide([
            'specialty' => $validatedData['specialty'],
            'media' => $mediaPath,
        ]);
        $user->guide()->save($guide);

        return redirect()->back()->with('success', 'Guide ajouté avec succès!');
    }

    public function getAllGuides(){
        $guides = Guide::with('user')->get();
        return view('guides',compact('guides'));
    }

    public function update(Request $request, $id){
        $guide = Guide::with('user')->where('user_id',$id)->first();
        
        if ($guide) {
            $guide->user->update([
                'name' => $request->name,
                'email' => $request->email,
                'tel' => $request->tel,
            ]);
            Guide::where('user_id', $id)->update([
                'specialty' => $request->specialty,
            ]);
            return redirect()->back()->with('success', 'Guide mis à jour avec succès!');
        } 
                
    }

    public function destroy($id){
        $guide = Guide::with('user')->where('user_id',$id)->first();
        if ($guide) {
            $guide->user->delete();
            Guide::where('user_id', $id)->delete();
            return redirect()->back()->with('success', 'Guide supprimé avec succès!');
        } 
    }

    public function affichage(){
        $guides = Guide::with('user')->get();
        return view('about',compact('guides'));
    }
}
