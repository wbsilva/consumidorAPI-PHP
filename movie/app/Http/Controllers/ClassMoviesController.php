<?php

namespace App\Http\Controllers;

use App\Models\ClassMovie;
use Illuminate\Http\Request;

class ClassMoviesController extends Controller
{

    public function index()
    {
        return ClassMovie::all();
    }

    public function store(Request $request)
    {
        ClassMovie::create($request->all());
    }

    public function show($id)
    {
        return ClassMovie::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
      $classmovie = ClassMovie::findOrFail($id);
      $classmovie->update($request->all());
    }

    public function destroy($id)
    {
      $classmovie = ClassMovie::findOrFail($id);
      $classmovie->delete();
    }
}
