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
    
    // collaborators
    Route::resource('/collaborators', 'CollaboratorController')->names('collaborators');
    Route::put('change_status/collaborators/{collaborator}', 'CollaboratorController@change_status')->name('collaborators.change_status');
    Route::get('export/collaborators', 'CollaboratorController@export')->name('collaborators.export');

    // novelties Api
    Route::get('novelties/{collaborator}', 'NoveltyController@showRelation')->prefix('api');
    Route::put('novelties/actualizar/{novelty}', 'NoveltyController@update')->prefix('api');
    Route::post('novelties/guardar', 'NoveltyController@store')->prefix('api');
    Route::delete('novelties/borrar/{id}', 'NoveltyController@destroy')->prefix('api');
    Route::get('novelties/buscar/{novelty}', 'NoveltyController@edit')->prefix('api');
    
    // users
    Route::resource('/users', 'UserController')->except('show')->names('users');
    Route::resource('/roles', 'RoleController')->except('show')->names('roles');
});