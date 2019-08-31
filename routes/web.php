<?php

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
    return response()->json([
        'status' => 'ok',
        'message' => 'recipe-api-v1.0.0'
    ]);
})->name('index');

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/recipes', function () {
    return view('Welcome to le recipes');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
