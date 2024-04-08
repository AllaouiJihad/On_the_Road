<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function showRegister()
    {
        return view('register');
    }

    public function showLogin()
    {
        return view('signin');
    }
    
    
    public function register(Request $request)
    {
        $messages = [
            'name.required' => 'Le nom est requis.',
            'email.required' => 'L\'adresse e-mail est requise.',
            'email.email' => 'L\'adresse e-mail doit être une adresse valide.',
            'email.unique' => 'Cette adresse e-mail est déjà utilisée.',
            'password.required' => 'Le mot de passe est requis.',
            'password.min' => 'Le mot de passe doit avoir au moins :min caractères.',
            'tel.required' => 'Le numéro de téléphone est requis.',
        ];
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|min:8',
            'tel' => 'required',
        ], $messages);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'tel' => $request->input('tel'),
            'password' => Hash::make($request->input('password')),
        ]);
        
        if ($user) {
            return redirect()->route('signin');
        } else {
            return redirect()->back()->withErrors([
                'email' => 'Les informations fournies ne correspondent pas à nos enregistrements.',
            ]);
        }
        
    }

    
    public function signin(Request $request)
{
    // Valider les données du formulaire
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ], [
        'email.required' => 'Le champ adresse e-mail est requis.',
        'email.email' => 'Le champ adresse e-mail doit être une adresse e-mail valide.',
        'password.required' => 'Le champ mot de passe est requis.',
    ]);

    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->route('home');
    } else {
        $errors = ['email' => 'Les informations fournies ne correspondent pas à nos enregistrements.'];
        return back()->withErrors($errors)->withInput();
    }
}

    public function logout(Request $request)
    {
        Auth::logout();
        // dd($request->session());
        $request->session()->invalidate();
        return redirect()->route('signin');
    }

}
