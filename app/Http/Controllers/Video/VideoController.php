<?php

namespace App\Http\Controllers\Video;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    public function index(){
        $data = [
            [
                'name' => '香港财经',
                'url' => 'rtmp://202.69.69.180:443/webcast/bshdlive-pc'
            ],
            [
                'name' => '香港财经',
                'url' => 'rtmp://202.69.69.180:443/webcast/bshdlive-pc'
            ],
            [
                'name' => '韩国GoodTV',
                'url' => 'rtmp://mobliestream.c3tv.com:554/live/goodtv.sdp'
            ],
            [
                'name' => '韩国朝鲜日报',
                'url' => 'rtmp://live.chosun.gscdn.com/live/tvchosun1.stream'
            ],
            [
                'name' => '美国1',
                'url' => 'rtmp://ns8.indexforce.com/home/mystream'
            ],
            [
                'name' => '美国2',
                'url' => 'rtmp://media3.scctv.net/live/scctv_800'
            ],
            [
                'name' => '湖南卫视',
                'url' => 'rtmp://58.200.131.2:1935/livetv/hunantv'
            ]
        ];

        return $data;
    }
}
