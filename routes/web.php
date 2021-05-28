<?php

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
    return view('login');
});

Route::get("/login",[\App\Http\Controllers\ConnexionController::class,'index'])->name('login');

Route::post("/login",[\App\Http\Controllers\ConnexionController::class,'userLogin'])->name('login.api');

Route::get("/logout",[\App\Http\Controllers\ConnexionController::class,'logout'])->name('logout');

Route::middleware(['connexion'])->group(function(){
    Route::post("/rental/add",[\App\Http\Controllers\RentalController::class, 'store'])->name('rentalAdd');
    Route::get("/tableauDeBord",[\App\Http\Controllers\RentalController::class,'index'])->name('tableauDeBord');
    Route::get("/formulaireReservation",[\App\Http\Controllers\AgencyController::class,'index'])->name('formulaireReservation');
    Route::get("/profil",[\App\Http\Controllers\UsersController::class,'profil'])->name('profil');

});


//Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

