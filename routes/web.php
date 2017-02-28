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
Route::get('/','CustormerController@index');
Route::get('/custormerlist','CustormerController@home');
Route::post('/custormerinput','CustormerController@input');
Route::post('/deletecustormer','CustormerController@delete');

Route::get('/countrylist','CountryController@index');
Route::post('/countryinput','CountryController@input');
Route::post('/deletecountry','CountryController@delete');

Route::get('/agency','AgencyController@index');
Route::post('/agencyinput','AgencyController@input');



Route::get('/profile','ProfileController@getYear');

Route::get('/{id}/name','ProfileController@getName');