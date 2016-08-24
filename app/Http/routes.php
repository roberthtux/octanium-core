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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'api/v1','namespace' => 'Api', 'middleware' => 'api'], function () {
//Route::group(['prefix' => 'api/v1','namespace' => 'Api'], function () { //Ruta sin validación de token

    //Routes Monedero
    Route::get('monedero/{id}', 'CardController@getCard');
    Route::get('monedero/{id}/transacciones', 'CardController@getTransactions');
    Route::post('monedero/retiro', 'CardController@addWithdrawals');

    

	

});

//Routes users
    Route::get('user/{login}','UserController@getUser');
    Route::get('profile/{user_id}','ProfileController@getProfile');
	//Route::get('user/{login}','UserController@getUserByLogin');
//Route::resource('user', 'UserController',
  //              ['only' => ['index', 'store', 'update', 'destroy', 'show']]);