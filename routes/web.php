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
//FRONT END DEO========================================================
Route::get('/', 'FrontendController@index')->name('index');
Route::get('/about','FrontendController@getAbout')->name('aboutpage');
Route::get('/offers','FrontendController@getOffers')->name('offers');
Route::get('/offers/{id}','FrontendController@getOffersFilter')->name('filterOffers');
Route::get('/contact','FrontendController@getContactPage')->name('contact');
Route::get('/search'.'FrontendController@search')->name('search');
//=====================================================================
//Listanje jednog hotela===============================================
Route::get('/single/{id}','HotelController@getSingle')->name('single');
//=====================================================================
//Prikaz registracije i logina sa f-jom registracije
Route::get('/login','FrontendController@getLoginPage')->name('login');
Route::get('/register','FrontendController@getRegisterPage')->name('register');
Route::post('/register',"UserController@registration");
//=====================================================================

//Logout i login logika
Route::get('/logout','UserController@logout')->name('logout');
Route::post('/login','UserController@login')->name('loginIn');
//=====================================================================

//Admin Panel
Route::get('/adminPanel','AdminController@index')->middleware('auth')->name('admin');
Route::get('/adminEditHotel/{id}','AdminController@editHotel')->middleware('auth')->name('editHotel');
Route::post('/adminUpdateHotel','HotelController@updateHotel')->middleware('auth')->name('updateHotel');
Route::post('/adminPanel','HotelController@insertHotel')->middleware('auth')->name('insertHotel');
Route::delete('/deleteHotel/{id}','HotelController@deleteHotel')->middleware('authAdmin')->name('deleteHotel');
Route::get('/adminUser','AdminController@getUsers')->middleware('auth')->name('adminUser');
Route::get('/adminSlide','AdminController@getNews')->middleware('auth')->name('homeNews');
Route::get('/adminUpdateSlide/{id}','AdminController@editNews')->middleware('auth')->name('editNews');
Route::post('/adminUpdateNews','AdminController@updateNews')->middleware('auth')->name('updateNews');
Route::post('/newNews','AdminController@insertNews')->middleware('auth')->name('insertNews');
Route::delete('/deleteNews/{id}','AdminController@deleteNews')->middleware('authAdmin')->name('deleteNews');
Route::post('/newRoom','HotelController@newRoom')->middleware('auth')->name('newRoom');
//=====================================================================

// User Page
Route::get('/reservations/{id}','UserController@getReservations')->middleware('auth')->name('reserve');
Route::get('/userPage/{id}','UserController@index')->middleware('auth')->name('userPage');
Route::post('/comment/{id}','UserController@addComment')->middleware('auth')->name('comment');
Route::get('/book/{idU}/{idH}','UserController@showBookPage')->middleware('auth')->name('bookPage');
Route::post('/book','UserController@reservation')->middleware('auth')->name('book');

//=====================================================================
Route::post('/contact','FrontendController@sendMessage')->name('contact');
