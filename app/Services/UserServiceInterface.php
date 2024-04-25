<?php
namespace App\Services;

interface UserServiceInterface
{
    public function register(array $userData);

    public function signin(array $credentials);
    public function logout();
}