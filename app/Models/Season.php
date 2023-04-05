<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;
    protected $fillable = [
        'media_id',
        'num_season',
    ];

    function episodes()
    {
        return $this->hasMany(Episode::class);
    }
}
