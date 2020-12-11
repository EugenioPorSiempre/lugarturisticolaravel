<?php

use App\Http\Controllers\CatalogosController;
use App\Http\Controllers\CombustibleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiAppsController;
use App\Http\Controllers\LugaresController;
use Illuminate\Http\Request;
use App\Http\Controllers\TipoLugarController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CalificacionController;
use App\Http\Controllers\ComentariosController;
use App\Http\Controllers\DetalleController;

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
})->middleware('auth');


Auth::routes(['register'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware('auth')->group(function(){

    Route::prefix('app')->group(function(){
        Route::prefix('lugares')->group(function(){
            Route::get('', [LugaresController::class, 'index'])->name('lugar');
            Route::get('add', [LugaresController::class, 'add'])->name('lugar.add');
            Route::get('edit/{model}', [LugaresController::class, 'edit'])->name('lugar.edit');
            Route::post('', [LugaresController::class, 'store'])->name('lugar.store');
            Route::patch('{model}', [LugaresController::class, 'update'])->name('lugar.update');
            Route::delete('{model}', [LugaresController::class, 'destroy'])->name('lugar.delete');
        });
    
        Route::prefix('detallesLugares')->group(function(){
            Route::get('', [DetalleController::class, 'index'])->name('detalleLugar');
            Route::get('add', [DetalleController::class, 'add'])->name('detalleLugar.add');
            Route::get('edit/{model}', [DetalleController::class, 'edit'])->name('detalleLugar.edit');
            Route::post('', [DetalleController::class, 'store'])->name('detalleLugar.store');
            Route::patch('{model}', [DetalleController::class, 'update'])->name('detalleLugar.update');
            Route::delete('{model}', [DetalleController::class, 'destroy'])->name('detalleLugar.delete');
        });
    });


    Route::prefix('catalogos')->group(function(){

        Route::prefix('tipos')->group(function () {
            Route::get('', [TipoLugarController::class, 'index'])->name('tipo');
            Route::get('add', [TipoLugarController::class, 'add'])->name('tipo.add');
            Route::get('edit/{model}', [TipoLugarController::class, 'edit'])->name('tipo.edit');
            Route::post('', [TipoLugarController::class, 'store'])->name('tipo.store');
            Route::patch('{model}', [TipoLugarController::class, 'update'])->name('tipo.update');
            Route::delete('{model}', [TipoLugarController::class, 'destroy'])->name('tipo.delete');
        });
        
        Route::prefix('catalogos')->group(function () {
            Route::get('combustible', [CatalogosController::class, 'getCombustibles']);
        });
    });


    Route::prefix('valoracion')->group(function(){

        Route::prefix('calificaciones')->group(function () {
            Route::get('', [CalificacionController::class, 'index'])->name('calificacion');
            Route::get('add', [CalificacionController::class, 'add'])->name('calificacion.add');
            Route::get('edit/{model}', [CalificacionController::class, 'edit'])->name('calificacion.edit');
            Route::post('', [CalificacionController::class, 'store'])->name('calificacion.store');
            Route::patch('{model}', [CalificacionController::class, 'update'])->name('calificacion.update');
            Route::delete('{model}', [CalificacionController::class, 'destroy'])->name('calificacion.delete');
        });


        Route::prefix('comentarios')->group(function () {
            Route::get('', [ComentariosController::class, 'index'])->name('comentario');
            Route::get('add', [ComentariosController::class, 'add'])->name('comentario.add');
            Route::get('edit/{model}', [ComentariosController::class, 'edit'])->name('comentario.edit');
            Route::post('', [ComentariosController::class, 'store'])->name('comentario.store');
            Route::patch('{model}', [ComentariosController::class, 'update'])->name('comentario.update');
            Route::delete('{model}', [ComentariosController::class, 'destroy'])->name('comentario.delete');
        });
        
        Route::prefix('catalogos')->group(function () {
            Route::get('combustible', [CatalogosController::class, 'getCombustibles']);
        });
    });
});


/*
Rutas para catalogos de la api
*/
Route::middleware('auth')->group(function(){
    Route::prefix('api-app')->group(function(){
        Route::get('colores', [ApiAppsController::class, 'colores']);
        Route::get('sexos', [ApiAppsController::class, 'sexos']);
        Route::get('cooperativas', [ApiAppsController::class, 'cooperativas']);
        Route::get('lugar', [ApiAppsController::class, 'lugar']);
        Route::get('tipos', [ApiAppsController::class, 'tipos']);
    });
});