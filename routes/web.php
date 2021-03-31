<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Informacion;

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
//ruta mision vision
Route::get('cootranur/informacion/mision-vision', [Informacion::class, 'informa'])->name('dat');
//ruta descarga
Route::get('cootranur/informacion/financiera', [Informacion::class, 'finan'])->name('financiera');
//ruta de inicio
Route::get('cootranur/inicio', [Informacion::class, 'ini'])->name('inicio');