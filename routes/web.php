<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','FrontEnd\FrontendController@index')->name('index');


Auth::routes();

//Backend Routes groups
Route::group(['middleware'=>'auth'],function(){

  Route::prefix('users')->group(function(){
    Route::get('/view','Backend\UserController@index')->name('users.view');
    Route::get('/add','Backend\UserController@add')->name('users.add');
    Route::get('/edit/{id}','Backend\UserController@edit')->name('users.edit');
    Route::post('/store','Backend\UserController@store')->name('users.store');
    Route::post('/update/{id}','Backend\UserController@update')->name('users.update');
    Route::get('/delete/{id}','Backend\UserController@delete')->name('users.delete');
  });

  //profiles Route
  Route::prefix('profile')->group(function(){
    Route::get('/view','Backend\ProfileController@index')->name('profiles.view');
    Route::get('/edit','Backend\ProfileController@edit')->name('profiles.edit');
    Route::post('/update','Backend\ProfileController@update')->name('profiles.update');
    Route::get('/password/view','Backend\ProfileController@passwordView')->name('profiles.password.view');
    Route::post('/password/update','Backend\ProfileController@passwordUpdate')->name('profiles.password.update');
  });

// Dish Route
Route::prefix('dishes')->group(function(){

  Route::get('/view','Backend\DishController@index')->name('dishes.view');
  Route::get('/add','Backend\DishController@add')->name('dishes.add');
  Route::post('/store','Backend\DishController@store')->name('dishes.store');
  Route::get('/edit{id}','Backend\DishController@edit')->name('dishes.edit');
  Route::post('/update{id}','Backend\DishController@update')->name('dishes.update');
  Route::get('/delete{id}','Backend\DishController@delete')->name('dishes.delete');

});

//frontend reserve store
Route::post('reservation/store','ReservationController@reserve')->name('reservation.store');



Route::get('/show','Backend\ReservationController@index')->name('reservation.show');
Route::get('/status{id}','Backend\ReservationController@editstatus')->name('reservations.edit');

Route::get('/reservation/delete{id}','Backend\ReservationController@delete')->name('reservation.delete');

});


// Route::get('/home', 'HomeController@index')->name('home');
