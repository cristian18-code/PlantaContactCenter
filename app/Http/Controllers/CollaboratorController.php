<?php

namespace App\Http\Controllers;

use App\Collaborator;
use App\Exports\CollaboratorsExport;
use Illuminate\Http\Request;
Use App\Http\Requests\collaborators\StoreRequest;
use App\Http\Requests\collaborators\UpdateRequest;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class CollaboratorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:collaborators.index')->only("index");
        $this->middleware('can:collaborators.show')->only("show");
        $this->middleware('can:collaborators.edit')->only(["edit", "update"]);
        $this->middleware('ValidationRol')->only(["edit", "update", 'show']);
        $this->middleware('can:collaborators.create')->only(["create", "store"]);
        $this->middleware('can:collaborators.destroy')->only("destroy");
        $this->middleware('can:collaborators.change_status')->only("change_status");
        $this->middleware('can:collaborators.export')->only("export");
    }

    public function index()
    {
        if (Auth::user()->roles[0]->name == 'Supervisor') {
            $collaborators = Collaborator::get()->where('supervisor', Auth::user()->name);    
        } else {
            $collaborators = Collaborator::get();
        }

        return view('collaborators.index', compact('collaborators'));
    }

    public function create()
    {
        return view('collaborators.create');
    }

    public function store(StoreRequest $request)
    {
        if($request->hasFile('picture')){
            $file = $request->file('picture');
            $image_name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path("/archivos/image_collaborator"),$image_name);

            $collaborator = Collaborator::create($request->all()+[
                'image'=>$image_name,
            ]);
        } else {
            $collaborator = Collaborator::create($request->all());
        }
        return redirect()->route('collaborators.index')->with('status', 'El colaborador ha sido registrado con exito');
    }

    public function show(Collaborator $collaborator)
    {
        return view('collaborators.show', compact('collaborator'));
    }

    public function edit(Collaborator $collaborator)
    {
        return view('collaborators.edit', compact('collaborator'));
    }

    public function update(UpdateRequest $request, Collaborator $collaborator)
    {
        $collaborator->update($request->all());
        return redirect()->route('collaborators.index')->with('status', 'El colaborador '.$collaborator->nombre.' ha sido actualizado con exito');
    }

    public function destroy(Collaborator $collaborator)
    {
        $collaborator->delete();
        return redirect()->route('collaborators.index')->with('status', 'El colaborador '.$collaborator->nombre.' ha sido eliminado con exito');
    }

    public function change_status(Request $request, Collaborator $collaborator){

        $collaborator->update(['estado'=>$request->estado]);
        return redirect()->back();
    }

    public function export() 
    {
        return Excel::download(new CollaboratorsExport, 'collaborators.xlsx');
    }
}
