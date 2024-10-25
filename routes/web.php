<?php

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

// Dati dal db

Route::get('/', function () {
  $bikes = config('db.bikes');
  return view('pages.home', compact('bikes'));
})->name('home');

// Rotte per le singole show
Route::get('/{id}', function (string $bike_id) {
  $bike = config('db.bikes.' . $bike_id);
  return view('pages.show', compact('bike', 'bike_id'));
});

// final commit
