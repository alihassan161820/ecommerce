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
    return view('website.index');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index');
    Route::get('/profile', 'ProfileController@index');
    Route::get('/editProfile','ProfileController@editProfileForm' );

    Route::post('/updateProfile', 'ProfileController@updateProfile');
    // Route::get('/profile/{slug}', 'ProfileController@index');
    // Route::get('/changePhoto', function() {
    //     return view('profile.pic');
    });

