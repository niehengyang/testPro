<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
   |--------------------------------------------------------------------------
   | Login Controller
   |--------------------------------------------------------------------------
   |
   | This controller handles authenticating users for the application and
   | redirecting them to your home screen. The controller uses a trait
   | to conveniently provide its functionality to your applications.
   |
   */

    use AuthenticatesUsers;

    /*
        * 使用admin guard
        *
        * */
    protected function guard()
    {
        return Auth::guard('admin');
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/';
    protected $username;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest.admin')->except('logout');//冒号后面的admin作为参数传给中间件的$guard形参
    }

    /*
     * 显示后台登陆模板
     * */

    public function showLoginForm()
    {
        return view('admin.login');
    }

    /*
    * 重写验证时使用的用户名字段
    * */

    public function username()
    {
        return 'admin_name';
    }

    /**
     * 处理登录逻辑
     */
//    public function postLogin(Request $request) {
//        try {
//            $validatedData = $request->validate([
//                'admin_username' => 'required',
//                'admin_password' => 'required'
//            ]);
//
//            $adminCellphone = $request->get('admin_username');
//            $adminPassword = $request->get('admin_password');
//            $rememberMe = $request->get('rememberMe');
//
//            if($this->guard()->attempt(['admin_username'=>$adminCellphone, 'admin_password'=>$adminPassword],$rememberMe)) {
//                // 更新最后登录的IP地址与时间
//                $admin = Admin::where('admin_username',$adminCellphone)->first();
////                $admin->admin_lastloginip = $request->getClientIp();
//                $admin->updated_at = \date('Y-m-d H:i:s');
//                $admin->save();
//                // 保存正常登录日志的逻辑
//
//                return response()->json();
//            } else {
//                // 记录登录失败的日志的逻辑
//                throw new \Exception('用户名或密码错误');
//            }
//        } catch (\Exception $e) {
//            return response($e->getMessage(), 500);
//        }
//    }

      /**
    * 重写退出登录
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
        public function logout(Request $request)
        {
            $this->guard()->logout();
            $request->session()->forget($this->guard()->getName());
            $request->session()->regenerate();
            return redirect('/admin/');
        }

}
