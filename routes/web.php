<?php

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
    return view('welcome');
});

/*Route::get('json_user', function () {
    $users=App\User::get()->toJson();
    return view('ejemplo', compact('users'));
});

Route::get('json_library', function () {
    $librerias=App\Libreria::get()->toJson();
    return view('librerias', compact('librerias'));
});

Route::get('json_library', function () {
    $librerias=App\Libreria::get()->toJson();
    return view('librerias', compact('librerias'));
});*/