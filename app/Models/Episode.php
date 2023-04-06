<?php

namespace App\Models;

use Illuminate\Contracts\Session\Session;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;
    protected $fillable = [
        'num_ep',
        'url',
        'season_id',
    ];

    function seasons()
    {
        return $this->belongsTo(Season::class, 'season_id');
    }
}
