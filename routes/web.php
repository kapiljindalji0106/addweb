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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'Crud\HomeController@index')->name('home');

//student operation routes start//
Route::get('/regsform', 'Crud\StudentController@registrationForm');
Route::post('/savedetails','Crud\StudentController@saveStudentDetails');

Route::get('/alldetails', 'Crud\StudentController@studentDetailsPage');
Route::get('/users-list', 'Crud\StudentController@allStudentDetails');
//student operation routes end//
