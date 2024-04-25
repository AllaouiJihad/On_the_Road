<?php

namespace App\Repositories\RepositoryInterface;

interface UserRepositoryInterface
{
    public function create(array $data);
    public function findByEmail(string $email);
}