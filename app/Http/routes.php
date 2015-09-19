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

Route::get('/contact', function () {
	return view('site.contact.contact');
});

Route::get('/dashboard/themes/contact', 'ContactThemeController@getThemes');
Route::post('/dashboard/themes/contact', 'ContactThemeController@postThemes');

Route::post('contactSendMessage', 'ContactController@send');

Route::get('/dashboard', function () {
	return view('admin.index');
});

Route::get('/dashboard/contact', 'ContactInfoController@edit');

Route::get('/dashboard/ajaxGetContent', 'AjaxContentController@getPage');
