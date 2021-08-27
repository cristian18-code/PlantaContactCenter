<?php

namespace App\Http\Controllers;

use App\Http\Requests\users\StoreRequest;
use App\Http\Requests\users\UpdateRequest;
use App\User;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:users.index')->only('index');
        // $this->middleware('can:users.show')->only('show');
        $this->middleware('can:users.create')->only(['create', 'store']);
        $this->middleware('can:users.edit')->only(['edit', 'update']);
        $this->middleware('can:users.destroy')->only('destroy');
    }

    public function index()
    {
        $users = User::get();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::get();
        return view('users.create', compact('roles'));
    }

    public function store(StoreRequest $request)
    {
        $user = User::create($request->all());
        $user->update(['password'=>Hash::make($request->password)]);

        $user->roles()->sync($request->get('roles'));
        return redirect()->route('users.index')->with('status', 'El usuario ha sido registrado con exito');
    }

    public function show($id)
    {
        //
    }

    public function edit(User $user)
    {
        $roles = Role::get();
        return view('users.edit', compact('user', 'roles'));
    }

    public function update(UpdateRequest $request, User $user)
    {
        if(isset($request->password)) {
            $user->update($request->all());
            $user->update(['password'=>Hash::make($request->password)]);
        } else {
            $user->update($request->except('password'));
        }
        $user->roles()->sync($request->get('roles'));
        return redirect()->route('users.index')->with('status', 'El usuario '.$user->username.' se ha actualizado con exito');
    }

    public function destroy(User $user)
    {
        if ($user->id == 1) {
            return redirect()->route('users.index')->with('status', 'Este usuario no puede ser eliminado');
        } else {
            $user->delete();
            return redirect()->route('users.index')->with('status', 'El usuario '.$user->username.' se ha eliminado con exito');
        }
    }
}
