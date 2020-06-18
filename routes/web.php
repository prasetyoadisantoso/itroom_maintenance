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


//use App\Http\Controllers\IptvController;

Auth::routes();

Route::group(['middleware' => ['auth']], function () {

    Route::get('/', function () {
        return redirect('/room');
    });

    //Routing Main Home

Route::get('/room', 'Home@room')->name('room');
Route::get('/room/getalliptv', 'Home@getAllIptv');
Route::get('/room/getallonity', 'Home@getAllOnity');
Route::get('/room/{id}', 'Home@getRoom');
Route::get('/room2/{id}', 'Home@getRoom2');
Route::get('/room/getalliptv/search','Home@search');
Route::get('/room/getallonity/search','Home@searchonity');
Route::get('/room/getallrooms/search','Home@searchrooms');

//Routing IPTV
Route::get('/createiptv','IptvController@create');
Route::get('/createiptv/edit/{id}','IptvController@edit');
Route::patch('/createiptv/edit/{id}','IptvController@update');
Route::post('/createiptv/store','IptvController@store');
Route::delete('/createiptv/delete/{id}', 'IptvController@destroy' );


//Routing Onity
Route::get('/createonity','OnityController@create');
Route::get('/createonity/edit/{id}','OnityController@edit');
Route::patch('/createonity/edit/{id}','OnityController@update');
Route::post('/createonity/store','OnityController@store');
Route::delete('/createonity/delete/{id}', 'OnityController@destroy' );

});

Route::get('/exportiptv', 'Home@laporanexcel');
Route::get('/exportonity', 'Home@laporanexcel2');


//Buka tutup Register
// Route::get('/register', function () {
//     return redirect('/');
// });


