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
