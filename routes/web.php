<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DemandesController;
use App\Http\Controllers\RdvController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\SubUserController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/demandes', [DemandesController::class, 'authCheck'])->name('demande');
Route::get('/rds', [RdvController::class, 'authCheck'])->name('rdv');
Route::get('/verification', [VerificationController::class, 'authCheck'])->name('verif');

Route::get('/new_demande', function () {
    return view('user/new_demande');
});

Route::get('/recherche', function () {
    return view('user/recherche');
});

Route::post('/recherche', [DemandesController::class, 'search'])->name('search');

Route::get('/rechercheenfantmali', function () {
    return view('user/rechercheEnfantMali');
});

Route::post('/rechercheenfantmali', [DemandesController::class, 'searchEnfant'])->name('searchEnfant');


Route::get('/formulaire', function () {
    return view('user/formulairedemande');
});


/*------------------Start Admin Routes---------------*/

route::prefix('admin')->group(function (){
    Route::get('/login', [AdminController::class, 'Index'])->name('login_form');
    Route::post('/login/owner', [AdminController::class, 'Login'])->name('admin.login');
    Route::get('/dashboard', [AdminController::class, 'Dashboard'])->name('admin.dashboard')
    ->middleware('admin');
    Route::get('/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout')
    ->middleware('admin');
    Route::get('/register', [AdminController::class, 'AdminRegister'])->name('admin.register');
    Route::post('/register/create', [AdminController::class, 'AdminRegisterCreate'])->name('admin.register.create');
});

/*------------------End Admin Routes---------------*/





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
