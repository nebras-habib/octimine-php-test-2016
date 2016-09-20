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

Route::get('/','TeacherController@viewTeacher');

Route::post('addteacher','TeacherController@addTeacher');

Route::get('teachers/{teacher}/delete','TeacherController@deleteTeacher');

Route::get('teachers/{teacher}/edit','TeacherController@editTeacher');

Route::post('teachers/{teacher}/update','TeacherController@updateTeacher');
