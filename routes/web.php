<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TipoMovimientoController;
use App\Http\Controllers\TipoPresentacionController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\UnidadMedidaController;
use App\Http\Controllers\AlmacenController;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware'=> ['auth']], function(){    // middleware es para asegurar que todos los controladores dentro estan protegidos y el usuario debe de estar autenticado para poder entrar 


    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/welcome', function () {
        return view('welcome');
    });
  
    Route::resource('tipomovimiento', TipoMovimientoController::class);
    Route::resource('marca', MarcaController::class);
    

});


