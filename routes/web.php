<?php

use App\Http\Controllers\CarsController;
use App\Http\Controllers\RentController;
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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/cars', [CarsController::class, 'getCars']);
Route::get('/cars/{id}', [CarsController::class, 'getCar'])->name('route.car');
Route::get('/cars/{id}/rent', [CarsController::class, 'rentCar'])->name('rent.car');
Route::get('/cars/{id}/rented', [CarsController::class, 'carRented'])->name('rented.car');
