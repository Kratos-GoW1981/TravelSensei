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

// use App\Http\Controllers\EmotionController;

Route::get('/', function () {

    return redirect('/home');
});

Auth::routes();
// Route::get('/analyze-sentiment', [SentimentController::class, 'analyzeSentimentForm']);

Route::post('/analyze-emotion', [App\Http\Controllers\EmotionController::class, 'analyzeEmotion'])->name('analyzeEmotion');


// Route::get('/analyze-emotion', [EmotionController::class, 'analyzeEmotion'])->name('analyze-emotion');

// route for admin
Route::group(['middleware' => ['admin', 'web']], function () {

    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');

    // Route::post('/analyze', [App\Http\Controllers\EmotionController::class, 'analyzeEmotion']);


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






//stripe
//Payment
Route::get('stripe', [App\Http\Controllers\FlightController::class, 'paymentStripe'])->name('addmoney.paymentstripe');
Route::post('add-money-stripe', [App\Http\Controllers\FlightController::class, 'postPaymentStripe'])->name('addmoney.stripe');
Route::get('/payment', [App\Http\Controllers\PaymentController::class, 'index'])->name('payment.index');
Route::post('/payment/process', [App\Http\Controllers\PaymentController::class, 'process'])->name('payment.process');


Route::post('/update-default-payment-method', [App\Http\Controllers\PaymentController::class, 'updateDefaultPaymentMethod']);

Route::post('/process-payment', [App\Http\Controllers\PaymentController::class, 'processPayment']);


Route::get('/flights-with-sentiment', [App\Http\Controllers\FlightController::class, 'showFlightsWithSentiment']);



Route::get('/payment/success', [App\Http\Controllers\PaymentController::class, 'success'])->name('payment.success');


Route::post('/saveEmotionData', [App\Http\Controllers\EmotionController::class, 'saveEmotionData']);



Route::get('/positive-emotion-flights', [App\Http\Controllers\EmotionController::class, 'getFlightDetailsForPositiveEmotionReviews'])
    ->name('positive.emotion.flights');


// Route::get('/emotion-result', [App\Http\Controllers\EmotionController::class, 'shouEmotionResult'])->name('emotion-result');


// Route::get('/tsp', [App\Http\Controllers\TSPController::class, 'nearestNeighborTSP'])->name('result');
