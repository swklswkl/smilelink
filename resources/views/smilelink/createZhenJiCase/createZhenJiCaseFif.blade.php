<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Title</title>


    <link href="{{asset('reception/Bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="{{asset('reception/css/casePublic.css')}}">
    <link rel="stylesheet" href="{{asset('reception/css/createZhenJiCase/createZhenJiCase4.css')}}">
    <style>
        .row{margin-bottom: 8px}
    </style>
</head>
<body>
<header>
    <div class="content">
        <div class="head-L">
            <img src="{{asset('reception/img/bonsmilelogo.png')}}" alt="">
        </div>
        <div class="head-C">
            <span ><a href="{{url('createZhenJiCaseOne')}}">新建病例</a></span>
            <span class="span1"><a href="{{url('caseManage')}}">病例管理</a></span>
            <span><a href="#">我的订单</a></span>
        </div>
        <div class="head-R">
            <span><a href="#">个人中心</a></span>
            <span class="span2"><a href="#">退出</a></span>
        </div>


    </div>
</header>
<div class=" crumbs">
    <div class="content">
        <p>新建病例&gt;&gt;新增病例</p>

    </div>
</div>


<div class="part4">
    <div class="content">
        <div class="part2Title">
            <img src="{{asset('reception/img/5.png')}}" alt="" >

        </div>

        <div class="part4Cont" id="hidden_enent1">
            <div class="part4Title">
                <span class="span2">Part1</span>
                <span class="span3">曲面断层</span>
            </div>

            <form action="">
                <div class="row">
                    <div class="col-lg-1"><input type="radio">乳牙列</div>
                    <div class="col-lg-1"><input type="radio">恒牙列</div>
                    <div class="col-lg-2"><input type="radio">混合牙列</div>

                </div>

                <div class="row">
                    <div class="col-lg-1 text-right">其他目标</div>
                    <div class="col-lg-1">
                        <textarea name="" id="" cols="30" rows="10" style="width: 900px"></textarea>
                    </div>


                </div>



                <div class="part4Title">
                    <span class="span2">Part2</span>
                    <span class="span3">头颅侧位片</span>
                </div>
                <div>
                    <img src="{{asset('reception/img/矩形3拷.png')}}" alt="">
                </div>





            </form>

















            <div class="button1">
                <a href=""> <button>上一步 </button></a>
                <a href=""> <button>下一步 </button></a>



                <a href=""> <button>退出 </button></a>
            </div>
        </div>




    </div>

</div>






<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="{{asset('reception/Bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js')}}"></script>
</body>
</html>
