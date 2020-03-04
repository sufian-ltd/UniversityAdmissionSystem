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

Route::get('/','MyController@index')->name('index');
Route::get('/result','MyController@result')->name('result');
Route::get('/sscResult','MyController@sscResult')->name('sscResult');
Route::get('/hscResult','MyController@hscResult')->name('hscResult');
Route::get('/unitInfo/{id}','MyController@unitInfo')->name('unitInfo');
//Route::get('/hscResult','MyController@hscResult')->name('hscResult');
Route::get('/universityInfo','MyController@universityInfo')->name('universityInfo');
Route::get('/university/{ssc_roll}/{hsc_roll}','MyController@university')->name('university');
Route::get('/unit/{ssc_roll}/{hsc_roll}/{id}','MyController@unit')->name('unit');

Route::get('/adminLogin','AdminController@adminLogin')->name('adminLogin');
Route::get('/login','AdminController@login')->name('login');
Route::get('/adminSection','AdminController@adminSection')->name('adminSection');

Route::get('/student','AdminController@student')->name('student');
Route::get('/addStudent','AdminController@addStudent')->name('addStudent');
Route::get('/saveStudent','AdminController@saveStudent')->name('saveStudent');
Route::get('/editStudent/{roll_no}','AdminController@editStudent')->name('editStudent');
Route::get('/updateStudent/{roll_no}','AdminController@updateStudent')->name('updateStudent');
Route::get('/deleteStudent/{roll_no}','AdminController@deleteStudent')->name('deleteStudent');

Route::get('/addStudentResult/{roll_no}','AdminController@addStudentResult')->name('addStudentResult');
Route::get('/viewStudentResult/{roll_no}','AdminController@viewStudentResult')->name('viewStudentResult');
Route::get('/saveSSCResultData','AdminController@saveSSCResultData')->name('saveSSCResultData');
Route::get('/saveHSCResultData','AdminController@saveHSCResultData')->name('saveHSCResultData');


Route::get('/viewUniversity','AdminController@viewUniversity')->name('viewUniversity');
Route::get('/addUniversity','AdminController@addUniversity')->name('addUniversity');
Route::get('/saveUniversity','AdminController@saveUniversity')->name('saveUniversity');
Route::get('/editUniversity/{id}','AdminController@editUniversity')->name('editUniversity');
Route::get('/updateUniversity/{id}','AdminController@updateUniversity')->name('updateUniversity');
Route::get('/deleteUniversity/{id}','AdminController@deleteUniversity')->name('deleteUniversity');

Route::get('/viewUnit/{id}','AdminController@viewUnit')->name('viewUnit');
Route::get('/addUnit/{id}','AdminController@addUnit')->name('addUnit');
Route::get('/saveUnit/{id}','AdminController@saveUnit')->name('saveUnit');

Route::get('/editUnit/{id}/{uni_id}','AdminController@editUnit')->name('editUnit');
Route::get('/deleteUnit/{id}/{uni_id}','AdminController@deleteUnit')->name('deleteUnit');
Route::get('/updateUnit/{id}/{uni_id}','AdminController@updateUnit')->name('updateUnit');

Route::get('/applicationForm/{ssc_roll}/{hsc_roll}/{id}/{uni_id}','MyController@applicationForm')->name('applicationForm');


