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

//    use AuthenticatesUsers;

    /**
     * 处理登录逻辑
     */
    public function postLogin(Request $request) {
        try {
            $validatedData = $request->validate([
                'admin_username' => 'required',
                'admin_password' => 'required'
            ]);

            $adminCellphone = $request->get('admin_username');
            $adminPassword = $request->get('admin_password');
            $rememberMe = $request->get('rememberMe');

            if($this->guard()->attempt(['admin_username'=>$adminCellphone, 'admin_password'=>$adminPassword],$rememberMe)) {
                // 更新最后登录的IP地址与时间
                $admin = Admin::where('admin_username',$adminCellphone)->first();
//                $admin->admin_lastloginip = $request->getClientIp();
                $admin->updated_at = \date('Y-m-d H:i:s');
                $admin->save();
                // 保存正常登录日志的逻辑
//                LogUser::saveLog($request,LogUser::$LOGIN,"{$request->ip()}");
                return response()->json();
            } else {
                // 记录登录失败的日志的逻辑
                throw new \Exception('用户名或密码错误');
            }
        } catch (\Exception $e) {
            return response($e->getMessage(), 500);
        }
    }

    /**
     * 退出登录
     */
    public function logout(Request $request) {
        $user = $request['user'];
        // 记录退出登录的日志信息
        //  LogUser::saveLog($request,LogUser::$LOGOUT);
        Auth::logout();
        return redirect('/login');
    }


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/helloadmin';
    protected $username;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest.admin')->except('logout');
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
        return 'admin_username';
    }


    /*
     * 使用admin guard
     *
     * */
    protected function guard()
    {
        return Auth::guard('admin');
    }


}
