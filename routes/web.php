<?php

// Rutas del controlador

use App\Http\Controllers\SolicitudController;
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

Route::get('/', function () {
    return view('/solicitudes/login');
});

Route::get('/solicitudes/showLoginForm', [SolicitudController::class, 'showLoginForm'])->name('showLoginForm');
Route::get('/solicitudes/login', [SolicitudController::class, 'showLogin'])->name('solicitudes.showLogin');
Route::get('/solicitudes/nuevousuario', [SolicitudController::class, 'showRegistrationForm'])->name('solicitudes.showRegistrationForm');
Route::post('/solicitudes/logincheck', [SolicitudController::class, 'logincheck'])->name('solicitudes.logincheck');
Route::get('/solicitud/registro', [SolicitudController::class, 'registro'])->name('solicitudes.registro');
Route::post('/solicitudes/register', [SolicitudController::class, 'register'])->name('solicitudes.register');
Route::get('/solicitudes/editar/{id}',  [SolicitudController::class, 'showEditForm'])->name('editar_registro');
Route::post('/actualizar-registro/{id}', [SolicitudController::class, 'update'])->name('actualizar_registro');
Route::get('/eliminar-registro/{id}', [SolicitudController::class, 'eliminarRegistro'])->name('eliminar_registro');

Route::get('/solicitudes/password', [SolicitudController::class, 'showPasswordResetForm'])->name('password.reset');
Route::post('password/email', [SolicitudController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [SolicitudController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [SolicitudController::class, 'reset'])->name('password.update');
