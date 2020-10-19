<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actors extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'desc',
    ];

    public function Movie()
    {
        return $this->hasMany('App\Movie');
    }
}
