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

return redirect('/home');

});

Auth::routes();


// route for admin
Route::group(['middleware' => ['admin','web']], function () {

    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');


    Route::get('/package', [App\Http\Controllers\HomeController::class, 'package'])->name('package');
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
    Route::get('/admin/flights', [App\Http\Controllers\AdminController::class, 'showAllFlights'])->name('admin.flights');
    Route::get('/admin/users', [App\Http\Controllers\AdminController::class, 'showAllUsers'])->name('admin.users');
    Route::post('/add/places', [App\Http\Controllers\PlacesController::class, 'store'])->name('places.store');
    Route::get('/admin/places', [App\Http\Controllers\PlacesController::class, 'index'])->name('places.index');
    Route::get('/admin/places/create', [App\Http\Controllers\PlacesController::class, 'create'])->name('places.create');


    //routes for flight
//store flight
Route::post('/flights', [App\Http\Controllers\FlightController::class, 'store'])->name('flights.store');
//edit flight
Route::get('/flights/{flight}/edit', [App\Http\Controllers\FlightController::class, 'edit'])->name('flights.edit');
//update flight
Route::put('/flights/{flight}', [App\Http\Controllers\FlightController::class, 'update'])->name('flights.update');
//delete flight
Route::delete('/flights/{flight}', [App\Http\Controllers\FlightController::class, 'destroy'])->name('flights.destroy');
});

//rating
Route::get('/rating/{id}', [App\Http\Controllers\RatingController::class, 'show'])->name('rate.show');
Route::post('/ratingSave', [App\Http\Controllers\RatingController::class, 'save'])->name('rate.save');

//recommendation by sanish
Route::get('/calculateSimilarities', [App\Http\Controllers\UserSimilaritiesController::class, 'calculateUserSimilarities']);
Route::get('/generateRecommendation/{id}', [App\Http\Controllers\UserSimilaritiesController::class, 'generateRecommendations']);


//routes for user
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/history', [App\Http\Controllers\HomeController::class, 'history'])->name('history');
Route::get('/placetovisit', [App\Http\Controllers\HomeController::class, 'placetovisit'])->name('placetovisit');
Route::get('/package', [App\Http\Controllers\HomeController::class, 'package'])->name('package');



//to book a seat
Route::post('/flights/{flight}/book', [App\Http\Controllers\FlightController::class, 'book'])->name('flights.book');
//show flight
Route::get('/flights/{flight}', [App\Http\Controllers\FlightController::class, 'show'])->name('flights.show');

Route::post('/search/flights', [App\Http\Controllers\FlightController::class, 'search'])->name('flights.search');

Route::get('/travel', [App\Http\Controllers\HomeController::class, 'travel'])->name('travel');


Route::get('/invoice/{flight}', [App\Http\Controllers\FlightController::class, 'invoice'])->name('invoice.show');

