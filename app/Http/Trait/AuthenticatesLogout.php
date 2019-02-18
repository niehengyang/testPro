<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/18 0018
 * Time: 10:00
 */

use Illuminate\Http\Request;

trait AuthenticatesLogout
{
    public function logout(Request $request){
        $this->guard()->logout();
        $request->session()->forget($this->guard()->getName());
        $request->session()->regenerate();
        return redirect('/');
    }
}