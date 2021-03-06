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


//setup
Route::get('/setup', 'ProfileSetupController@index')->name('setup');
Route::get('/avatar-setup', 'AvatarSetupController@index')->name('setup.avatar');

Route::match(['put', 'patch'], 'setup/{profile}', 'ProfileSetupController@update')->name('setup.update');
Route::match(['put', 'patch'], 'avatar-setup/{profile}', 'AvatarSetupController@update')->name('setup.avatar.update');

//profile
Route::get('/profile/{user_id?}', 'ProfileController@index');
Route::get('/profile-edit', 'ProfileController@edit')->name('profile.edit');
Route::match(['put', 'patch'], 'profile/{profile}', 'ProfileController@update')->name('profile.update');

//change password
Route::get('/password-change', 'Auth\UpdatePasswordController@index');
Route::match(['put', 'patch'], '/password-change', 'Auth\UpdatePasswordController@update')->name('auth.password-change');

//settings
Route::get('/settings', 'SettingController@index');
Route::match('put', '/privacy-settings', 'PrivacySettingsController@update')->name('privacy_settings');

//gallery
Route::get('/gallery', 'GalleryController@index');
Route::post('/gallery' , 'GalleryController@upload')->name('gallery.upload');
Route::get('/gallery/delete/{id?}', 'GalleryController@delete');
Route::get('/gallery/stat/{id?}/{stat?}', 'GalleryController@update');

//interest
Route::get('/interests', 'InterestController@index');
Route::get('/requests/sent', 'InterestController@requests_sent');
Route::get('/requests/received', 'InterestController@requests_received');
Route::post('/interest/create', 'InterestController@create');
Route::post('/interest/delete', 'InterestController@delete');
Route::post('/interest/update', 'InterestController@update');

//notification
Route::get('/notifications', 'NotificationController@index');
Route::get('/notifications/count', 'NotificationController@count');


//search
Route::get('/search', 'SearchController@index');