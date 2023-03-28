<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname'
        ,'picture'
        ,'imdb_path'
        ,'date_birthday'
    ];

    function medias(){
        return $this->belongsToMany(Media::class, 'cast')
        ->withTimestamps();
    }
}
