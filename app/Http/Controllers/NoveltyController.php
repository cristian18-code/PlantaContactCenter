<?php

namespace App\Http\Controllers;

use App\Collaborator;
use App\Novelty;
use Illuminate\Http\Request;

class NoveltyController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('can:novelties')->except("index", 'show');
    }

    public function showRelation(Request $request)
    {   
        $novelties = Novelty::all();
        return response($novelties);
        //Esta función nos devolvera todas las novelties que tenemos en nuestra BD
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Novelty $novelty)
    {
        //
    }

    public function edit(Novelty $novelty)
    {
        //
    }

    public function update(Request $request, Novelty $novelty)
    {
        //
    }

    public function destroy(Novelty $novelty)
    {
        //
    }
}
