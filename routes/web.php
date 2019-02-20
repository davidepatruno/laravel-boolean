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

Route::get('/', 'controllerHome@index')->name('home');
Route::get('/about-us', 'staticpageController@aboutUs')->name('about_us');

Route::get('/studenti', 'studentController@allStudents')->name('studenti_index');
Route::get('/studenti/{slug}', 'studentController@oneStudent')->name('studenti_show');
