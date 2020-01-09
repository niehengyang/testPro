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
    return view('/admin/');
});

/* Home 页 */
Route::get('/','HomeController@index');

/* 登录页 */
Route::get('/login','Admin\LoginController@showLoginForm');
Route::get('/admin/login','Admin\LoginController@login');
Route::post('/admin/logout','Admin\LoginController@logout');

/* 登录后主页*/
Route::get('/admin/','Admin\IndexController@index');



Route::post('/email', 'email\TestController@sendEmail');//测试邮件

Route::get('/video', 'Video\VideoController@index');//测试播放器
