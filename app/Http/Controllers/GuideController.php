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

        ];
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email', // Assure l'unicité de l'email dans la table users
            'password' => 'required|string|min:8',
            'specialty' => 'required|string',
            'tel' => 'required',
        ],$messages);

        // Créer un nouvel utilisateur avec les données validées
        // Créer un nouvel utilisateur
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'tel' => $validatedData['tel'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Créer un nouveau guide associé à l'utilisateur
        $guide = new Guide([
            'specialty' => $validatedData['specialty'],
        ]);
        $user->guide()->save($guide);

        // Rediriger l'utilisateur vers une page de confirmation ou une autre action
        return redirect()->back()->with('success', 'Guide ajouté avec succès!');
    }
}
