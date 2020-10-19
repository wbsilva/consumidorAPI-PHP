<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'desc',
        'classmovies_id',
        'actors_id',
        'directors_id',
    ];

    public function Actors()
    {
        return $this->hasMany('App\Actors');
    }

    public function Director()
    {
        return $this->hasMany('App\Director');
    }

    public function ClassMovie()
    {
        return $this->hasMany('App\ClassMovie');
    }
}
