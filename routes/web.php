<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});


Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//player ar route
Route::get('showplayerinfo',[\App\Http\Controllers\PlayerController::class,'teamId'])->name('playerForm.show');
Route::post('infosave',[\App\Http\Controllers\PlayerController::class,'playerinformation'])->name('player.store');

//Team ar route
Route::get('infoshow',[\App\Http\Controllers\TeamController::class,'team'])->name('teamForm.show');
Route::post('teamsave',[\App\Http\Controllers\TeamController::class,'teamInformation'])->name('team.store');

//Dashboard ar route
Route::get('dashboard',[\App\Http\Controllers\DashboardController::class,'dashboard'])->name('dashboard');

Route::get('showdata',[\App\Http\Controllers\PlayerController::class,'ajax'])->name('ajax');
