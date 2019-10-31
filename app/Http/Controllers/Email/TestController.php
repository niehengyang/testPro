<?php

namespace App\Http\Controllers\Email;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    /**
     * 发送邮件接口
     */

    public function sendEmail()
    {
//        $messageData = '您好，' . '什么什么设备' . '于' . '2019年20月18号' . '触发' . '温度大于20' . '告警，地点位于' . '知春路9号' . '，请尽快处理！';
//        $name = '我的第一封邮件';

        Mail::raw("什么什么设备", function ($message){
            $to = "niehengyang@ebupt.com";
            $message->to($to)->subject("我的第一封邮件");
        });

        // 返回的一个错误数组，利用此可以判断是否发送成功
        if (Mail::failures()) {
            \Log::debug('Mail not sent');
//            return 'fail';
            dd('fail');
        } else {
            \Log::debug('Mail sent successfully.');
//           return '发送成功!';
            dd('ok');
        }

    }
}
