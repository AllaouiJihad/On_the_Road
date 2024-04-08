<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guide extends User
{
    use HasFactory;

    protected $fillable = [
        'specialty',
    ];
}
