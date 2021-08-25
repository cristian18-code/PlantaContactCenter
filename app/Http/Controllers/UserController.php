<?php

namespace App\Http\Controllers;

use App\User;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

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

    public function store(Request $request)
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

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
