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

//para realizar rutas automaticas : carpeta citas, y controlador
route::resource('/citas', 'CitasController');

route::resource('/pacientes', 'PacientesController');


Route::get('/', function () {
    return view('welcome');
});

