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
    return view('welcome');
});

Route::get('/login', function () {
    return view('users.login');
});
Route::post('/login', function () {
    return view('events');
});

Route::get('/register', function () {
    return view('users.register');
});

Route::resource('events', 'EventsController');
Route::get('/refresh', 'EventsController@refresh');
// Route::get('/events/{event}/buy', 'TicketController@update')
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
