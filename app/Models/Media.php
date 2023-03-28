<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $fillable = [
        ''
    ];

    function countries(){
        return $this->belongsTo(Country::class);
    }

    function actors(){
        return $this->belongsToMany(Actor::class, 'cast')
        ->withTimestamps();
    }
}
