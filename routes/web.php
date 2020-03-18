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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/view-course', 'AuthorizationController@viewCourses');
Route::get('/create-course', 'AuthorizationController@createCourses');
Route::get('/course/add', 'AuthorizationController@editCourses');
Route::get('/course/update/{id}', 'AuthorizationController@updateCourses');
Route::get('/course/delete/{id}', 'AuthorizationController@deleteCourses');
Route::post('/course/store', 'AuthorizationController@store');
Route::post('/course/ubah', 'AuthorizationController@ubahCourses');


