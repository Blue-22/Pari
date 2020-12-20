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
//     return view('meetings.show');
// });

// Route::resource('/meetings', 'MeetingController');

Route::get('/meetings', 'App\Http\Controllers\MeetingController@show')->name('meeting');
//Route::get('/dashboard', 'App\Http\Controllers\MeetingController@create')->name('meeting');

Route::post('/dashboard/store', 'App\Http\Controllers\MeetingController@store')->name('meeting.store');

Route::get('/meetings/edit/{id}', ['as' => 'meeting.edit', 'uses' => 'App\Http\Controllers\MeetingController@edit']);
Route::post('/meetings/update/{id}', ['as' => 'meeting.update', 'uses' => 'App\Http\Controllers\MeetingController@update']);


Route::get('/meetings/{id}', ['as' => 'meeting.destroy', 'uses' => 'App\Http\Controllers\MeetingController@destroy']);