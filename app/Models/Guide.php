<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guide extends User
{
    use HasFactory;

    protected $fillable = [
        'specialty',
        'user_id',
        'media',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
