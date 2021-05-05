<?php

use Illuminate\Support\Facades\Route;

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
    return view('Hotel/AddHotel');
});



// ====================== hotels Route =========================


Route::get('/AddHotel', function () {
    return view('Hotel/AddHotel');
});



Route::get('/HotelsList', function () {
    return view('Hotel/HotelsList');
});



Route::get('/EditHotel', function () {
    return view('Hotel/EditHotel');
});


Route::POST('insertHotel',"HotelController@insert")->name('insertHotel');
Route::POST('updateHotel/{id}',"HotelController@update")->name('updateHotel');

Route::get('Hotels',"HotelController@list")->name('Hotels');

Route::get('editHotel/{id}',"HotelController@edit")->name('editHotel');
Route::get('deleteHotel/{id}',"HotelController@delete")->name('deleteHotel');


// =================== hotel rate ============================

Route::get('/AddHotelRate', function () {
    return view('HotelRate/AddHotelRate');
});



Route::POST('insertHotelRate',"HotelRateController@insert")->name('insertHotelRate');

Route::get('addHotelRate',"HotelRateController@add")->name('addHotelRate');

Route::get('HotelRate',"HotelRateController@list")->name('HotelRate');
Route::get('EditHotelRate/{id}',"HotelRateController@edit")->name('EditHotelRate');
Route::post('updateHotelRate/{id}',"HotelRateController@update")->name('updateHotelRate');

Route::get('deleteHotelRate/{id}',"HotelRateController@delete")->name('deleteHotelRate');



// ======================== User Routes ===============================
Route::get('addUser',"UserController@add")->name('addUser');
Route::Post('insertUser',"UserController@insert")->name('insertUser');
Route::get('user',"UserController@list")->name('user');
Route::get('/HoteRates', function () {
    return view('User/HotelRateView');
});

