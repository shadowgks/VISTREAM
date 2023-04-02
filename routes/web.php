<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\Media\HomeMediaController;
use App\Http\Controllers\Media\PlayingMediaController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\TypeQualityController;
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

Route::get('/', [HomeMediaController::class, 'index'])->name('home.index');
Route::get('/play-media/{slug}', [PlayingMediaController::class, 'show'])->name('play.show');

//Ressources Dashboard
Route::resource('/dashboard/country',CountryController::class);
Route::resource('/dashboard/actor',ActorController::class);
Route::resource('/dashboard/quality',TypeQualityController::class);
Route::resource('/dashboard/genre',GenreController::class);
Route::resource('/dashboard/media',MediaController::class);
Route::resource('/dashboard/user',UserController::class);
Route::resource('/dashboard/type',TypeController::class);
Route::resource('/dashboard/slider',SliderController::class);


//Auth
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
