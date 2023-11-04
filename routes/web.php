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
Route::get('/design', function () {
    return view('design-system');
});

// Route::get('/home', function () {
//     return view('index');
// });

Route::get('/', 'App\Http\Controllers\IndexController@index')->name('index');


// Route::get('/crew', function () {
//     return view('crew');
// });
Route::get('/crew', 'App\Http\Controllers\CrewController@page')->name('crew.page');

// Route::get('/destination', function () {
//     return view('destination');
// });
Route::get('/destination', 'App\Http\Controllers\DestinationController@page')->name('destination.page');


Route::get('/technology', function () {
    return view('tech');
});
   