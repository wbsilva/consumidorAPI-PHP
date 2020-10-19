<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{

    public function index()
    {
        return Director::all();
    }

    public function store(Request $request)
    {
        Director::create($request->all());
    }

    public function show($id)
    {
        return Director::findOrFail($id);
    }


    public function update(Request $request, $id)
    {
      $director = Director::findOrFail($id);
      $director->update($request->all());
    }

    public function destroy($id)
    {
      $director = Director::findOrFail($id);
      $director->delete();
    }
}
