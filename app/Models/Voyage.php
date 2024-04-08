<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    use HasFactory;

    protected $fillable = [
        "titre",
        "description",
        "date_depart",
        "date_reteur",
        "prix",
        "disbonibilite",
        "nbr_places",
        "media",
        "destination",
    ];
}
