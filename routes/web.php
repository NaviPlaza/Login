<?php

use App\Http\Controllers\PacientesController;
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
/*
Route::get('/pacientes', function () {
    return view('Pacientes.index');
});

Route::get('/pacientes', function () {
    return view('Pacientes.index');
});

//Forma dos de acceder
Route::get('/pacientes/create',[PacientesController::class,'create']);
*/

//Forma para automatizar de manera automática el acceso a las rutas
Route::resource('pacientes', PacientesController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
