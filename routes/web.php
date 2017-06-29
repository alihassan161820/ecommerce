<?php


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

// home routes
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index');
Route::post('/','SearchController@search');
Route::post('updataBidAmount', 'HomeController@updateBid');
Route::post('/{ti}/updataBidAmount', 'HomeController@updateBid');
Route::post('/{ti}/{p}/updataBidAmount', 'HomeController@updateBid');


// favorite routes
Route::post('addtowish', 'FavoriteController@store');
Route::post('removefromwish', 'FavoriteController@destroy');
Route::post('/{ti}/addtowish', 'FavoriteController@store');
Route::post('/{ti}/{c}/addtowish', 'FavoriteController@store');
Route::post('/{ti}/removefromwish', 'FavoriteController@destroy');
Route::post('/{ti}/{c}/removefromwish', 'FavoriteController@destroy');
Route::get('/favorite','FavoriteController@index');
Route::post('/favorite','FavoriteController@destroy');


//filtered products routes 
Route::get('/p/{city}/{product?}','FilteredProduectController@show');
Route::get('/ti/{cat}','FilteredProduectController@get');
Route::get('/p/{city}/{product?}','FilteredProduectController@show');

Route::get('/c/{category}/{subcategory?}','FilteredProduectController@showProductsByCategory');

// contact us routes
Route::get('/contact','ContactController@create');
Route::post('/contact','ContactController@store');

// help routes
Route::get('/help','HelpController@index');

// products routes
Route::get('/createitem','ProductController@getCreate')->name('createitem');
Route::post('/createitem','ProductController@storeItem')->name('storeitem');
Route::get('/item/{id}','ProductController@show')->name('item');


// auction routes
Route::post('bid','BidController@postData')->name('update');
Route::get('/createauction','AuctionProductController@getCreate');
Route::post('/createauction','AuctionProductController@storeItem')->name('store');
Route::get('/auction/{id}','AuctionProductController@show')->name('auctiondetails');

//profile routes 
Route::get('/editprofile','ProfileController@edit');
Route::post('/updateprofile','ProfileController@update');
Route::get('/profile','ProfileController@index')->name('profile');

