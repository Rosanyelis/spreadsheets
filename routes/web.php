<?php

use App\Http\Controllers\ReportesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ConfiController;
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
require __DIR__.'/auth.php';
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::post('/reporte-detallado-generar', [ReportesController::class, 'store']);

Route::get('/usuarios', [UserController::class, 'index']);
Route::get('/usuarios/crear-usuario', [UserController::class, 'create']);
Route::post('/usuarios/guardar-usuario', [UserController::class, 'store']);
Route::get('/usuarios/{id}/editar-usuario', [UserController::class, 'edit']);
Route::post('/usuarios/{id}/actualizar-usuario', [UserController::class, 'update']);
Route::delete('/usuarios/{id}/desactivar-usuario', [UserController::class, 'destroy']);
Route::post('/usuarios/{id}/activar-usuario', [UserController::class, 'activar']);

Route::get('/configuracion', [ConfiController::class, 'index']);
Route::post('/configuracion/actualizar-mis-datos', [ConfiController::class, 'store']);