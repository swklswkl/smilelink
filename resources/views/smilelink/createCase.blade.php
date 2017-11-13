@extends('smilelink.header')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="{{asset('reception/css/casePublic.css')}}">
    <link rel="stylesheet" href="{{asset('reception/css/createCase.css')}}">
</head>
<body>
<div class="Box">
    <div class="content">
        <a href="{{url('caseOne')}}">
        <div class="left">
            <div class="leftImg">
                <img src="{{asset('reception/img/caseLog.png')}}" alt="">
            </div>
            <p>新增病例</p>
        </div>
        </a>
        <a href="{{url('createZhenJiCaseOne')}}">
        <div class="right">
            <div class="leftImg">
                <img src="{{asset('reception/img/fileLog.png')}}" alt="">
            </div>
            <p>新增正畸档案</p>
        </div>
        </a>

    </div>
</div>
</body>
</html>
@endsection