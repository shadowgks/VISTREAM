<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    function medias()
    {
        return $this->belongsToMany(Media::class, 'genre_media')
            ->withTimestamps();
    }
}
