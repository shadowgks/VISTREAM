<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'duration',
        'link_media',
        'link_imdb',
        'picture',
        'description',
        'released_year',
        'director',
        'production',
        'trailer',
        'status',
        'click',
        'country_id',
        'quality_id',
        'type_id',
    ];

    function countries()
    {
        return $this->belongsTo(Country::class);
    }

    function qualitie()
    {
        return $this->belongsTo(TypeQuality::class);
    }

    function types()
    {
        return $this->belongsTo(Type::class);
    }

    function actors()
    {
        return $this->belongsToMany(Actor::class, 'cast')
            ->withTimestamps();
    }
}
