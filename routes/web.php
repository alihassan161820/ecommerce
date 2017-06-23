<?php


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

// home routes
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index');
Route::post('/','SearchController@search');
Route::get('/favorite','FavoriteController@index');

//filtered products routes 
Route::get('/p/{city}/{product?}','FilteredProduectController@show');
Route::get('/c/{category}/{subcategory?}','FilteredProduectController@showProductsByCategory');

// contact us routes
Route::get('/contact','ContactController@create');
Route::post('/contact','ContactController@store');

// help routes
Route::get('/help','HelpController@index');

// products routes
Route::get('createitem','ProductController@getCreate')->name('createitem');
Route::post('createitem','ProductController@storeItem')->name('storeitem');
Route::get('/productdetails','ProductController@show');


// auction routes
Route::get('/auctiondetails','AuctionProductController@index');
Route::get('/createauction','AuctionProductController@create');


//profile routes 
Route::get('/editprofile','ProfileController@edit');
Route::get('/profile','ProfileController@show');



