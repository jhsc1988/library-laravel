<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// All Listings
Route::get('/', [ListingController::class, 'index']);

/////////////////////////////////////////////// users

// Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

/////////////////////////////////////////////// listings

// Show Create Form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware(['auth','admin']);

// Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show'])->name('listings.show');

// Store Listing Data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

//// Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware(['auth','admin']);
//
//// Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware(['auth','admin']);
//
//// Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware(['auth','admin']);

/////////////////////////////////////////////// reservations

// Reserve Book
Route::post('/reserve/{listing}', [ReservationController::class, 'reserve'])->name('reserve')->middleware('auth');

// Get All Reservations
Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index')->middleware(['auth','admin']);

// Get My Reservations
Route::get('/my-reservations', [ReservationController::class, 'myReservations'])->name('my-reservations')->middleware('auth');

// Delete Reservation
Route::delete('/reservations/{reservation}', [ReservationController::class, 'destroy'])->name('reservations.destroy')->middleware('auth');
