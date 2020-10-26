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
    return view('home');
});
Route::get('/produit-tarifs', function () {
    return view('produit-tarifs');
});
Route::get('/services', function () {
    return view('services');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/mentions-legales', function () {
    return view('mentions-legales');
});

Route::get('/conditions-generales', function () {
    return view('conditions_generales');
});

Route::get('/contact-us', [\App\Http\Controllers\ContactController::class,"index"]);
Route::post('/contact-us', [\App\Http\Controllers\ContactController::class,"store"]);

Route::get('/dernieres-realisations',[\App\Http\Controllers\DernieresRealisation::class,"index"]);
Route::get('/devis-immediat', [\App\Http\Controllers\DevisController::class, "index"]);

//login routes
Route::get("/login",[\App\Http\Controllers\AuthController::class,"index"])->name("login");
Route::get("/logout",[\App\Http\Controllers\AuthController::class,"logout"]);
Route::post("/login",[\App\Http\Controllers\AuthController::class,"login"]);
Route::post("/signup",[\App\Http\Controllers\AuthController::class,"signup"]);

Route::post("/devis",[\App\Http\Controllers\DevisController::class,"storeDevis"]);
Route::get("/devis/{devis}",[\App\Http\Controllers\DevisController::class,"merciPage"]);
Route::get("/devisPDF/{devis}",[\App\Http\Controllers\DevisController::class,"getDevisPdf"]);
Route::get("/devisPDF64/{devis}",[\App\Http\Controllers\DevisController::class,"getDevisPdfBase64"]);

Route::post("/devis_interest/{devis}/{state}",[\App\Http\Controllers\DevisController::class,"devis_interest"])
    ->where("state",'^(0|1){1}$');

Route::group(['prefix' => 'dashboard'], function () {
    Voyager::routes();
});
