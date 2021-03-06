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

Route::get('/home', 'HomeController@index');

Route::resource('/students', 'StudentController');
Route::resource('/teachers', 'TeacherController');
Route::resource('/grades', 'GradeController');
Route::resource('/subjects', 'SubjectController');
Route::resource('/classrooms', 'ClassroomController');
Route::get('/records/{subject}', 'StudentRecordController@show');
Route::get('/records/{subject}/{student}', 'StudentRecordController@record');
