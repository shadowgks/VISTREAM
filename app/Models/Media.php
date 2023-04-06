<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
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
        return $this->belongsTo(Country::class, 'country_id');
    }

    function qualitie()
    {
        return $this->belongsTo(TypeQuality::class, 'quality_id');
    }

    function types()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }

    function series()
    {
        return $this->hasMany(Season::class);
    }

    function sliders()
    {
        return $this->hasOne(Slider::class);
    }

    function actors()
    {
        return $this->belongsToMany(Actor::class, 'cast')
            ->withTimestamps();
    }

    function genres()
    {
        return $this->belongsToMany(Genre::class, 'genre_media')
            ->withTimestamps();
    }
}
