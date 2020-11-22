<?php

use App\Http\Controllers\CitiesController;
use App\Http\Controllers\ProfilsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\InfosController;

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

Route::get('', [ProfilsController::class, 'index']);

Route::resources([
    'profils' => ProfilsController::class,
    'cities' => CitiesController::class,
    'homes' => MainController::class,
    'infos' => InfosController::class,


]);