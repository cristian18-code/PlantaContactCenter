<?php

namespace App\Http\Controllers;

use App\Collaborator;
use App\Novelty;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NoveltyController extends Controller
{


    public function showRelation(Request $request, Collaborator $collaborator)
    {           
        $novelties = $collaborator->novelties;
        return response()->json($novelties, 200);
        //Esta función nos devolvera todas las novelties que tenemos en nuestra BD
    }

    public function store(Request $request)
    {
        // return Carbon::parse();
        $novelty = new Novelty();
        $novelty->collaborator_id = $request->collaborator_id;
        $novelty->novedad = $request->novedad;
        $novelty->Finicio = Carbon::parse($request->Finicio);
        $novelty->Ffin = Carbon::parse($request->Finicio);;
        $novelty->observaciones = $request->observaciones;
        $novelty->save();
        return response()->json($novelty, 201);
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
