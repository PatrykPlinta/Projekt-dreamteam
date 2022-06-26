<?php

use App\Http\Controllers\DreamteamController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlayerAddController;
use App\Http\Controllers\UserRemoveController;
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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/dreamteam', [DreamteamController::class,"getDreamteam"])->name('dreamteam.index');
Route::post('/createdreamteam', [DreamteamController::class,"createDreamteam"])->name('dreamteam.create');
Route::post('/deletedreamteam', [DreamteamController::class,"deleteDreamteam"])->name('dreamteam.delete');

Route::get('/addplayer', [PlayerAddController::class,"playerAdd"])->name('playeradd.index');
Route::post('/createplayer', [PlayerAddController::class,"createPlayer"])->name('playeradd.create');

Route::get('/userremove', [UserRemoveController::class,"userRemoveIndex"])->name('userremove.index');
Route::post('/userremovedone', [UserRemoveController::class,"userRemove"])->name('userremove.remove');
