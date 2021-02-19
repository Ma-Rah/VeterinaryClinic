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


Route::get('/home', 'HomeController@index');

Route::get('/owners', 'OwnersController@index');
Route::get('/owners/{id}', 'OwnersController@show');

Route::get('/pets', 'PetsController@index');
Route::get('/pets/{id}', 'PetsController@show');

Route::get('/pet-update', 'PetUpdateController@index')->name('pet-update');
Route::post('/pet-update', 'PetUpdateController@store');

Route::get('/owner-update', 'OwnerUpdateController@index');
Route::post('/owner-update', 'OwnerUpdateController@store');

Route::get('/owner-search-results', 'OwnersController@search');
Route::get('/pet-search-results', 'PetsController@search');

Route::get('/results', 'ResultsController@index');