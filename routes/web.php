<?php

use App\Http\Controllers\aboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogController;
use App\Http\Controllers\localCuisineController;
use App\Http\Controllers\servicesController;
use App\Http\Controllers\CEController;
use App\Http\Controllers\yurtController;
use App\Http\Controllers\HTController;
use App\Http\Controllers\locationController;
use App\Http\Controllers\experienceController;
use App\Http\Controllers\ContectUs;
use App\Http\Controllers\controllerNews;
use App\Http\Controllers\toursController;
use App\Http\Controllers\airTicketController;
use App\Http\Controllers\carRentalController;
use App\Http\Controllers\guestController;
use App\Http\Controllers\ourServicesController;

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
Route::get('yurts', [yurtController::class, 'showYurts']);
Route::get('hike and trek', [HTController::class, 'showHikeTrek']);
Route::get('locations', [locationController::class, 'showLocations']);
Route::get('experiences', [experienceController::class, 'showExperience']);
Route::get('contectUs', [ContectUs::class, 'showContectUs']);
Route::get('news', [controllerNews::class, 'showNews']);
Route::get('Ourservice', [ourServicesController::class, 'ShowOurService']);

Route::resource('reservation', guestController::class);
Route::resource('airTicketReservations', airTicketController::class);
Route::resource('vehicleReservations', carRentalController::class);
Route::resource('tourGuideReservations', toursController::class);

