<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IncidentHistoryController;
use App\Http\Controllers\AlertController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/alerts', [App\Http\Controllers\AlertController::class, 'store']);
Route::post('/alerts/store', [AlertController::class, 'store'])->name('alerts.store');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');


Route::get('/signup', [SignupController::class, 'showSignupForm'])->name('signup');
Route::post('/signup', [SignupController::class, 'signup']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/profile', [ProfileController::class, 'show'])->name('profile');

// Display incident history for a specific alert
Route::get('/alerts/{alertId}/incident-history', [IncidentHistoryController::class, 'index'])->name('incident-history.index');

// Store a new incident history record for a specific alert
Route::post('/alerts/{alertId}/incident-history', [IncidentHistoryController::class, 'store'])->name('incident-history.store');
Route::post('/upload-alerts', 'AlertController@upload')->name('upload.alerts');

Route::post('/store-email', 'EmailController@store')->name('store.email');
