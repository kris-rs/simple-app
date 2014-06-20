<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Do not enter login page if already logged in.
Route::get('/', array('as' => 'login', 'uses' => 'LoginController@getIndex'))->before('guest'); 
Route::post('/', array('uses' => 'LoginController@postData'))->before('csrf');

Route::get('/logout', array('as' => 'logout', 'uses' => 'HomeController@logout'));

// Do not enter sign up page if already logged in.
Route::get('/sign_up', array('as' => 'sign_up', 'uses' => 'SignUpController@getIndex'))->before('guest');
Route::post('/sign_up', array('uses' => 'SignUpController@postData'))->before('csrf');

// Enter only if there is already an active session
Route::get('/home', array('as' => 'home', 'uses' => 'HomeController@getIndex'))->before('auth');
Route::post('/home', array('uses' => 'HomeController@postPost'))->before('csrf');
