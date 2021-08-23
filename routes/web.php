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

Route::get('/', function () {
    return view('layouts.index');
})->name('layouts');

Auth::routes();
Route::put('change_status/collaborators/{collaborator}', 'CollaboratorController@change_estatus')->name('collaborators.change_status');
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/collaborators', 'CollaboratorController')->names('collaborators');