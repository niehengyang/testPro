<?php
/**
 * Created by PhpStorm.
 * User: NHY
 * Date: 2019/2/14 0014
 * Time: 17:41
 */



//Route::get('/admin', function () {
//    return view('admin.admin');
//});

Route::group(['prefix' => 'admin','namespace'=> 'Admin'], function () {
     Route::group(['middleware' => 'auth.admin'], function () {
         Route::get('/', 'IndexController@index');
     });

     Route::get('login', 'LoginController@showLoginForm')->name('admin.login');
     Route::post('login', 'LoginController@postLogin');
     Route::post('logout', 'LoginController@logout');
});