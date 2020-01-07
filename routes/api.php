<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$api = app('Dingo\Api\Routing\Router');
$api->version('v1',['namespace'=>"App\Http\Controllers\Api\V1"],function($api) {
    $api->get('auth/captcha','AuthController@getCaptcha');//获取验证码
    $api->post('auth/login','AuthController@login');//本地账号登录
});


$api->version('v1', ['middleware' => 'api.auth','namespace'=>"App\Http\Controllers\Api\V1"], function($api) {

    global $__apiInstance ;
    $__apiInstance = $api;

    /* 认证 */
    include_once 'fragment/api/auth.php';

});