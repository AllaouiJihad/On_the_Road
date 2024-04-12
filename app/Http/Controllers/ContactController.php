<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;


class ContactController extends Controller
{
    //
    public function submitForm(Request $request)
    {
        // Valider les données du formulaire
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);
    
        // Si la validation échoue, rediriger avec les erreurs de validation
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // Si la validation réussit, envoyer l'e-mail
        Mail::to('allaouijihad05@email.com')->send(new WelcomeMail($request->all()));
    
        // Rediriger l'utilisateur après la soumission du formulaire avec un message de succès
        return redirect()->route('contact.form')->with('success', 'Votre message a été envoyé avec succès.');
    }

    public function showForm(){
        return view('contact');
    }
}
