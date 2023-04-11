<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AccueilController;
use App\Http\Controllers\Admin\AproposController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ParametreController;
use App\Http\Controllers\Admin\ProjetController;
use App\Http\Controllers\Admin\RappelleController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UserController;


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

//Route public de redirection pour la conexion
Route::middleware('guest')->group(function () {
    Route::get('/connexion/login/auth', function () {
        return redirect(route('login.get'));
    });
});

//Route public pour la page d'accueil
Route::get('/', function () {
    return redirect(route('get.accueil.index'));
});

Route::get('/admin', function () {
    return redirect(route('get.accueil.index'));
});

Route::get('/login', function () {
    return redirect(route('get.accueil.index'));
});

Route::get('/accueil', [
    AccueilController::class,
    'index',
])->name('get.accueil.index');

//Route public pour la page à propos
Route::get('/apropos', [
    AproposController::class,
    'index',
])->name('get.apropos.index');

//Route public pour la page contact
Route::get('/contact', [
    ContactController::class,
    'index',
])->name('get.contact.index');

//Route public pour la page projet
Route::get('/projet', [
    ProjetController::class,
    'index',
])->name('get.projet.index');

//Route public pour la page service
Route::get('/service', [
    ServiceController::class,
    'index',
])->name('get.service.index');
