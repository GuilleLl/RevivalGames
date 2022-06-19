<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JuegosController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PremiumController;
use App\Http\Controllers\ContactaController;
use App\Http\Controllers\CriticasController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminJuegosController;
use App\Http\Controllers\Admin\AdminCriticasController;
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
    return view('home');
});
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//panel de administrador
Route::group(['middleware' => ['can:adminAccess']], function () {
    Route::get('admin',[AdminController::class,'index']);
    Route::resource('admin/users', UserController::class);
    Route::resource('admin/juegos', AdminJuegosController::class);
    Route::resource('admin/criticas', AdminCriticasController::class);
});

//listado de juegos
Route::group(['middleware' => ['can:userAccess']], function () {
    Route::get('juegos',[JuegosController::class, 'mostrarJuegos']);

    //listado de un juego con sus criticas
    Route::get('juegos/{id}', [JuegosController::class, 'mostrarJuego']);

    Route::get('contacta',[ContactaController::class,'index'])->name('contacta.index');
    Route::post('contacta',[ContactaController::class,'store'])->name('contacta.store');

});

// Paypal
Route::get('premium',[PremiumController::class,'index'])->name('premium');

Route::group(['middleware' => ['can:userPaypal']], function () {
    Route::get('processPaypal', [PaymentController::class, 'processPaypal'])->name('processPaypal');
    Route::get('processSuccess', [PaymentController::class, 'processSuccess'])->name('processSuccess');
    Route::get('processCancel', [PaymentController::class, 'processCancel'])->name('processCancel');
});

//premium
Route::group(['middleware' => ['can:userPremium']], function () {
    Route::get('criticas/create/{id}',[CriticasController::class,'createCritica']);
    Route::post('criticas/store/{idJuego}',[CriticasController::class,'store']);
    Route::get('misCriticas',[CriticasController::class,'index']);
});
