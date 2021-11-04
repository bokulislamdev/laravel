<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


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


Route::get('/multi/select','HomeController@multiSelect')->name('multi.select');




Route::get('index','HomeController@index')->name('home');



Route::get('/user-dashboard','HomeController@user-dashboard')->name('user.dashboard');

//student
Route::get('/add-student','HomeController@addStudent')->name('add.student');
Route::post('/student/post','HomeController@studentPost')->name('student.post');
Route::get('/student/show','HomeController@studentShow')->name('student.show');
Route::post('/student/import','HomeController@studentImport')->name('student.import');
Route::get('/student/export','HomeController@export')->name('student.export');
Route::get('/student/export/pdf','HomeController@exportPdf')->name('student.pdf.export');



// for mail
Route::get('/add/mail','MailController@index')->name('index.mail');
Route::get('/mail/post','MailController@mailPost')->name('mail.post');


//liveware
Route::get('/liveware/form','HomeController@livewareForm')->name('liveware.form');
Route::get('/liveware/product','HomeController@product')->name('liveware.product');







