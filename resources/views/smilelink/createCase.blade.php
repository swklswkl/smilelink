<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Title</title>

    <link rel="stylesheet" href="{{asset('reception/css/casePublic.css')}}">
    <link rel="stylesheet" href="{{asset('reception/css/createCase.css')}}">
</head>
<body>
<header>
    <div class="content">
        <div class="head-L">
            <img src="{{asset('reception/img/bonsmilelogo.png')}}" alt="">
        </div>
        <div class="head-C">
            <span class="span1"><a href="#">新建病例</a></span>
            <span><a href="#">病例管理</a></span>
            <span><a href="#">我的订单</a></span>
        </div>
        <div class="head-R">
            <span><a href="#">个人中心</a></span>
            <span class="span2"><a href="#">退出</a></span>
        </div>



    </div>
</header>

<div class="Box">
    <div class="content">
        <div class="left">
            <div class="leftImg">
                <img src="{{asset('reception/img/caseLog.png')}}" alt="">
            </div>
            <p>新增病例</p>
        </div>
        <div class="right">
            <div class="leftImg">
                <img src="{{asset('reception/img/fileLog.png')}}" alt="">
            </div>
            <p>新增正畸档案</p>
        </div>

    </div>
</div>



</body>
</html>
