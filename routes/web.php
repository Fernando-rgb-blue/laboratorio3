<?php

//use App\Http\Controllers\ServicioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Laravel 8 
Route::view('/', 'home')->name('home');
Route::view('nosotros', 'nosotros')->name('nosotros');

//Sintaxis Laravel 10:
//Route::get('servicios', [ServicioController::class, 'servicios']);

Route::get('servicios', 'Servicios2Controller@index')->name('servicios');
Route::view('contacto', 'contacto')->name('conatcto');
Route::get('prueba', 'PruebaController@index');

//Generarando las 7 rutas de los métodos del controlador 
//Route::resource('servicios', 'Servicios2Controller');

//Usando metodo Only
//Route::resource('servicios', 'Servicios2Controller')->only('index','show');

//Usando metodo except
//Route::resource('servicios', 'Servicios2Controller')->except('index','show');


