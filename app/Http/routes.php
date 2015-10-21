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


Route::get ( '/ws/genesystel_pdf', ['as' => 'genesystel_pdf', function () {
	
// 		$name = Request::input('name');
// 		$email = Request::input('email');
// 		$send_message = Request::input('message');
	
	    error_log("enter");
			return "success";
}]);