<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{


    /**
     * 显示后台登陆模板
     * */
    public function showLoginForm()
    {
        return view('login');
    }
}
