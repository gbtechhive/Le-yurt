<?php

use App\Http\Controllers\aboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogController;
use App\Http\Controllers\localCuisineController;
use App\Http\Controllers\servicesController;
use App\Http\Controllers\CEController;

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
    return view('indux');
});

Route::get('blog', [blogController::class, 'showBlog']);
Route::get('cuisine', [localCuisineController::class, 'ShowLocalCuisine']);
Route::get('about', [aboutController::class, 'showAbout']);
Route::get('services', [servicesController::class, 'showServices']);
Route::get('cultural experience', [CEController::class, 'showCE']);
