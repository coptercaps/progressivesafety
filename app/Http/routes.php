<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// --------------------------- IN HEADER ----//

Route::get('/', function () {
    return view('home');
});

Route::get('/produkter', function() {
	return view('produkter');
});

Route::get('/how-it-works', function() {
	return view('how-it-works');
});

Route::get('/customers', function() {
	return view('customers');
});

// Using controller to handle post
Route::get('/kontakt', 'ContactController@index');
Route::post('/kontakt', 'ContactController@send');

// Using controller to handle post
Route::get('/bestall', 'OrderController@index');
Route::post('/bestall', 'OrderController@send');



// --------------------------- IN FOOTER ----//
Route::get('/company', function() {
	return view('company');
});

Route::get('/team', function() {
	return view('team');
});

Route::get('/our-story', function() {
	return view('our-story');
});

Route::get('/media', function() {
	return view('media');
});

Route::get('/resellers', function() {
	return view('resellers');
});
Route::get('/kontakt', function() {
	return view('kontakt');
});
