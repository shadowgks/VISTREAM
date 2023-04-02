<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'picture',
        'media_id',
    ];

    function media(){
        return $this->belongsTo(Media::class, 'media_id');
    }
}
