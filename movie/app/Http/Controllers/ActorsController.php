<?php

namespace App\Http\Controllers;

use App\Models\Actors;
use Illuminate\Http\Request;

class ActorsController extends Controller
{

    public function index()
    {
        return Actors::all();
    }

    public function store(Request $request)
    {
        Actors::create($request->all());
    }

    public function show($id)
    {
        return Actors::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $actors = Actors::findOrFail($id);
        $actors->update($request->all());
    }

    public function destroy($id)
    {
      $actors = Actors::findOrFail($id);
      $actors->delete();
    }
}
