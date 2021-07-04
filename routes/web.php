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
    return view('auth.login');
    $obj = Hash::make('password', [
    'rounds' => 12,
]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('add','FranchiseController@addfranchise');
Route::POST('/save','FranchiseController@savefranchise');
Route::get('/view','FranchiseController@viewfranchise');
Route::get('/show/{id}','FranchiseController@showfranchise');
Route::get('edit/{id}','FranchiseController@editfranchise');
Route::POST('/update','FranchiseController@updatefranchise');
Route::get('delete/{id}','FranchiseController@deletefranchise');


Route::get('addstudent','StudentController@addstudent');
Route::POST('/savestudent','StudentController@savestudent');
Route::get('viewstudent','StudentController@viewstudent');
Route::get('editstudent/{id}','StudentController@editstudent');
Route::post('updatestudent','StudentController@updatestudent');
Route::get('deletestudent/{id}','StudentController@deletestudent');

Route::get('addfee','FeeController@addfee');
Route::get('addfeeform/{id}','FeeController@addfeeform');
Route::POST('addfeesubmit','FeeController@addfeesubmit');

Route::get('certificate','FranchiseController@certificate');
Route::get('addcertificate/{id}','FranchiseController@addcertificate');
Route::POST('updatecertificate','FranchiseController@updatecertificate');
Route::get('viewcertificate','FranchiseController@viewcertificate');
Route::get('/showcertificate/{id}','FranchiseController@showcertificate');

Route::get('/showcertificate/','StudentController@showcertificate');
// Route::get('/file/download/{id}','StudentController@showcertificate')->name('download');
Route::get('myprofile','StudentController@myprofile');


