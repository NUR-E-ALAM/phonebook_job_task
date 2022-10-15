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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function(){
        Route::resource('phonebook', \App\Http\Controllers\PhoneBookController::class);
        Route::post('phonebook/store', '\App\Http\Controllers\PhoneBookController@store');
        Route::post('phonebook/destroy/{id}', '\App\Http\Controllers\PhoneBookController@destroy');
        // Route::post('/phonebook/favorite/{$id}', [\App\Http\Controllers\PhoneBookController::class, 'favorite'])->name('phonebook.favorite');
        Route::match(['put', 'patch'], '/phonebook/favorite/{id}','\App\Http\Controllers\PhoneBookController@favorite');
});

require __DIR__.'/auth.php';
