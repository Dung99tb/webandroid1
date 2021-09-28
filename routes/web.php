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
//Frontend
Route::get('/','HomeController@index');
Route::get('/trang-chu','HomeController@index');




//Backend
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::get('/logout','AdminController@logout');
Route::post('/admin-dashboard','AdminController@dashboard');

//User
Route::get('/User','UserController@User');
Route::get('/edit_user','UserController@edit_user');
//Notice
Route::get('/notification','NoticeController@notification');
Route::get('/write_notice','NoticeController@write_notice');

//Mail
Route::get('/inbox_mail','MailController@inbox_mail');
Route::get('/compose_mail','MailController@compose_mail');

//Album
Route::get('/Album','AlbumController@Album');


//Xin nghỉ
Route::get('/xin_nghi','XinnghiController@xin_nghi');

//Sức khỏe
Route::get('/health','HealthController@health');

//Dặn thuốc
Route::get('/dan_thuoc','DanthuocController@dan_thuoc');

//Đăng nhập web
Route::get('/welcome','HomeController@welcome');