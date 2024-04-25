<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\RepositoryInterface\UserRepositoryInterface;
use App\Services\UserServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    protected $userRepository;
    protected $userService;

    public function __construct(UserRepositoryInterface $userRepository, UserServiceInterface $userService)
    {
        $this->userRepository = $userRepository;
        $this->userService = $userService;
    }

    
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
        $userData = $request->only(['name', 'email', 'tel', 'password']);

        $user = $this->userService->register($userData);

        if ($user) {
            return redirect()->route('login');
        } else {
            return back()->withErrors(['error' => 'Une erreur s\'est produite lors de la création de votre compte. Veuillez réessayer.'])->withInput();
        }
    }

    public function signin(Request $request)
    {
        $messages =  [
            'email.required' => 'Le champ adresse e-mail est requis.',
            'email.email' => 'Le champ adresse e-mail doit être une adresse e-mail valide.',
            'password.required' => 'Le champ mot de passe est requis.',
        ];
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], $messages);
        $credentials = $request->only('email', 'password');

        if ($this->userService->signin($credentials)) {
            return redirect()->route('home');
        } else {
            $errors = ['email' => 'Les informations fournies ne correspondent pas à nos enregistrements.'];
            return back()->withErrors($errors)->withInput();
        }
    }

    public function logout(Request $request)
    {
        $this->userService->logout();
        return redirect()->route('signin')->with('success', 'Vous avez été déconnecté avec succès.');
    }
}
