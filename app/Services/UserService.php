<?php
namespace App\Services;

use App\Repositories\RepositoryInterface\UserRepositoryInterface ;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserService implements UserServiceInterface
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }


    public function register(array $userData)
    {
        return $this->userRepository->create([
            'name' => $userData['name'],
            'email' => $userData['email'],
            'tel' => $userData['tel'],
            'password' => Hash::make($userData['password']),
        ]);
    }

    public function signin(array $credentials)
    {
        $user = $this->userRepository->findByEmail($credentials['email']);

        if ($user && Hash::check($credentials['password'], $user->password)) {
            Auth::login($user);
            return true;
        }

        return false;
    }

    public function logout()
    {
        Auth::logout();
    }
}