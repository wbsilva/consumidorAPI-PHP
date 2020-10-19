<?php

use Illuminate\Http\Request;

Route::apiResource('/actors', 'App\Http\Controllers\ActorsController');
Route::apiResource('/directors', 'App\Http\Controllers\DirectorController');
Route::apiResource('/classmovies', 'App\Http\Controllers\ClassMoviesController');
Route::apiResource('/movies', 'App\Http\Controllers\MoviesController');
