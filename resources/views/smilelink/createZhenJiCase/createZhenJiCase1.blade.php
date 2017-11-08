<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Title</title>

    <link rel="stylesheet" href="{{asset('reception/css/casePublic.css')}}">
    <link rel="stylesheet" href="{{asset('reception/css/createZhenJiCase/createZhenJiCase1.css')}}">
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
<div class=" crumbs">
    <div class="content"><p>新建病例&gt;&gt;新增病例</p></div>

</div>

<div class="part2">
    <div class="content">
        <div class="part2Title">
            <img src="{{asset('reception/img/one.png')}}" alt="" >

        </div>
        <div class="part2Cont">
            <div class="part2Title">
                <span class="span2">Part1</span>
                <span class="span3">基本信息</span>
            </div>
            <form action="">
                <div class="over">
                <div class="part2-L">
                    <p>患者姓名：</p>
                    <p>性别：</p>
                    <p>出生年月日：</p>
                    <p style="margin-top: 18px">身份证号码：</p>
                    <p style="margin-top: 18px">手机号：</p>
                    <p style="margin-top: 18px">现居住地：</p>
                </div>
                <div class="part2-R">
                    <p><input type="text" class="inputLong"></p>
                    <p><input type="radio" class="inputChe" value="0" name="sex">男 <input type="radio" class="inputChe" name="sex" value="1">女</p>
                    <p><input type="date" class="inputLong" > </p>
                    <p><input type="text" class="inputLong"></p>
                    <p><input type="number" class="inputLong"></p>

                </div>
                </div>
                <div class="button1">
                    <a href="{{url()}}"> <button>下一步 </button></a>
                    <a href="#"> <button>退出 </button></a>
                </div>
            </form>


        </div>

    </div>
</div>








</body>
</html>
