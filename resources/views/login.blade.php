<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="renderer" content="webkit">
    <title>测试登录</title>
    <link rel="stylesheet" href="{{mix('css/login.css')}}">
    <style>
        body{
            margin: unset;
            overflow-x: hidden;
        }
        .el-input--prefix .el-input__inner{
            border: unset;
        }
    </style>
</head>
<body>
<div id="login"></div>
<script src="{{mix('js/manifest.js')}}"></script>
<script src="{{mix('js/vendor.js')}}"></script>
<script src="{{mix('js/login.js')}}"></script>
</body>
</html>