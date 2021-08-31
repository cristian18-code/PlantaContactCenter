<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes(['register'=>false]);

Route::middleware(['auth'])->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/collaborators', 'CollaboratorController')->names('collaborators');

    // collaborators
    Route::put('change_status/collaborators/{collaborator}', 'CollaboratorController@change_status')->name('collaborators.change_status');
    Route::get('export/collaborators', 'CollaboratorController@export')->name('collaborators.export');
    // users
    Route::resource('/users', 'UserController')->names('users');
    Route::resource('/roles', 'RoleController')->names('roles');
});