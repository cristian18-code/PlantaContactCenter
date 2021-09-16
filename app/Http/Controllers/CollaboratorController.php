<?php

namespace App\Http\Controllers;

use App\Collaborator;
use App\Exports\CollaboratorsExport;
use Illuminate\Http\Request;
Use App\Http\Requests\collaborators\StoreRequest;
use App\Http\Requests\collaborators\UpdateRequest;
use App\Inf_medical;
use Carbon\Carbon;
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
        // prepaparacion de datos
        $collaborator->Fnacimiento = Carbon::parse($collaborator->Fnacimiento)->toFormattedDateString();
        $collaborator->edad = Carbon::createFromDate($collaborator->Fnacimiento)->age;
        $collaborator->sueldo = number_format($collaborator->sueldo);
        $collaborator->inf_medical = $collaborator->inf_medical;
        $collaborator->familiers = $collaborator->familiers;
        foreach ($collaborator->familiers as $familier) {
            $familier->edad = Carbon::createFromDate($familier->fNacimiento)->age;
        }
        $collaborator->studies = $collaborator->studies;
        // dd($collaborator->studies);

        return view('collaborators.show', compact('collaborator'));
    }

    public function edit(Collaborator $collaborator)
    {
        return view('collaborators.edit', compact('collaborator'));
    }

    public function update(UpdateRequest $request, Collaborator $collaborator)
    {
        // dd($request->all());
        // requests
        $collaborator_request = $request->except('estado', 'nivel', 'titulo', 'nombre_familier', 'fNacimiento_familier', 'genero_familier', 'ocupacion_familier', 'celular_familier', 'parentesco_familier');
        // requests
        // registrar colaboreadores 
        if($request->hasFile('picture')){
            $file = $request->file('picture');
            $image_name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path("/archivos/image_collaborator"),$image_name);
            
            $collaborator->update($collaborator_request+[
                'image'=>$image_name,
            ]);
        } else {
            $collaborator->update($collaborator_request);
        }
        // registrar estudios
        if (isset($request->nivel)) {
            foreach ($request->nivel as $key => $studie) {
                $studies[] = array("nivel"=>$request->nivel[$key],
                "titulo"=>$request->titulo[$key], "estado"=>$request->estado[$key]);
            }
            $collaborator->studies()->createMany($studies); 
        }
        // registrar familiares
        if (isset($request->nombre_familier)) {
            foreach ($request->nombre_familier as $key => $familier) {
                $familiers[] = array("nombre"=>$request->nombre_familier[$key],
                "fNacimiento"=>$request->fNacimiento_familier[$key], "genero"=>$request->genero_familier[$key],
                "ocupacion"=>$request->ocupacion_familier[$key], "parentesco"=>$request->parentesco_familier[$key],
                "celular"=>$request->celular_familier[$key], "emergencia"=>$request->emergencia_familier[$key]);
            }
            $collaborator->familiers()->createMany($familiers); 
        }
        // registrar info medica
        if($collaborator->inf_medical == null){
            $collaborator->inf_medical()->create($request->all());
        } else {
            $collaborator->inf_medical->update($request->all());
        }

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