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
        "destination_id",
        "region",
        "impact",
        "defecult",
        "category_id",
        "type_id",
        "guide_id",
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function destination(){
        return $this->belongsTo(Destination::class);
    }

    public function guide(){
        return $this->belongsTo(Guide::class);
    }
}
