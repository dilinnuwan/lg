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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('emailVerificationChecker/{email}/{token}','Auth\RegisterController@emailVerificationChecker')->name('emailVerificationChecker');

Route::get('/setup', 'ProfileSetupController@index')->name('setup');

Route::match(['put', 'patch'], 'setup/{profile}', 'ProfileSetupController@update')->name('setup.update');