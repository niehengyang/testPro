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
Route::get('/','Admin\IndexController@index');

/* 登录页 */
Route::get('/login','Admin\LoginController@showLoginForm');
Route::get('/admin/login','Admin\LoginController@postLogin');

/* 登录后首页 */
Route::get('/admin/','Admin\AdminController@index');



Route::post('/email', 'email\TestController@sendEmail');//测试邮件
