<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeetingController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::get('/meetings', function () {
//     return view('meeting');
// });

// Route::resource('/meetings', 'MeetingController');

Route::get('/meetings', 'App\Http\Controllers\MeetingController@show');
Route::get('/meeting', 'App\Http\Controllers\MeetingController@create');