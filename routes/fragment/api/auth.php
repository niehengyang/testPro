<?php
/**
 * Created by PhpStorm.
 * User: NHY
 * Date: 2019/11/8 0008
 * Time: 上午 09:54
 */

global $__apiInstance ;

$__apiInstance->get("/users",'AuthController@index');
$__apiInstance->post("/loginAs",'AuthController@loginAs');