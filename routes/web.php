<?php

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index');
Route::post('/','SearchController@search');
Route::get('/favorite','FavoriteController@index');
Route::get('/p/{city}/{product?}','FilteredProduectController@show');
Route::get('/xxx',function (){
     dd(Search::search(
        "Product",
        ['Name', 'Description','City'],
        'المنت',
        ['Name'],
        ['Name','asc'],
        true
        ));
});

Route::get('/c/{category}/{subcategory?}','FilteredProduectController@showProductsByCategory');


Route::get('/contact','ContactController@create');
Route::post('/contact','ContactController@store');


Route::get('/help','HelpController@index');


Route::get('createitem','ProductController@getCreate')->name('createitem');
Route::post('createitem','ProductController@storeItem')->name('storeitem');

Route::get('/xxxx',function(){
    return view('layouts.app');
});