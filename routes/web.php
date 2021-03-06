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

Route::get('/', 'App\Http\Controllers\Controller@accueil');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/meetings', 'App\Http\Controllers\MeetingController@show')->name('meeting');
Route::post('/dashboard/store', 'App\Http\Controllers\MeetingController@store')->name('meeting.store');
Route::get('/meetings/edit/{id}', ['as' => 'meeting.edit', 'uses' => 'App\Http\Controllers\MeetingController@edit']);
Route::post('/meetings/update/{id}', ['as' => 'meeting.update', 'uses' => 'App\Http\Controllers\MeetingController@update']);
Route::get('/meetings/{id}', ['as' => 'meeting.destroy', 'uses' => 'App\Http\Controllers\MeetingController@destroy']);
Route::get('/pari/{id}', 'App\Http\Controllers\PariController@show');
Route::get('/pari/edit/{id}/{meetingId}', 'App\Http\Controllers\PariController@edit')->name('paris.edit');
Route::get('/pari/destroy/{id}', 'App\Http\Controllers\PariController@destroy')->name('paris.destroy');
Route::post('/pari/update/{id}', 'App\Http\Controllers\PariController@update');
Route::post('/pari/store', 'App\Http\Controllers\PariController@store');


//Route::get('/', 'App\Http\Controllers\MeetingController@show')->name('pari.show');
//Route::post('/dashboard/store', 'App\Http\Controllers\MeetingController@store')->name('meeting.store');
// Route::get('/pari/edit/{id}', ['as' => 'pari.edit', 'uses' => 'App\Http\Controllers\PariController@edit']);
// Route::post('/meetings/update/{id}', ['as' => 'meeting.update', 'uses' => 'App\Http\Controllers\MeetingController@update']);
// Route::get('/meetings/{id}', ['as' => 'meeting.destroy', 'uses' => 'App\Http\Controllers\MeetingController@destroy']);
