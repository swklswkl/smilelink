<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>新建病例二</title>
    <link rel="stylesheet" href="{{asset('reception/Bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css')}}">

    <link href="{{asset('reception/Bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="{{asset('reception/css/casePublic.css')}}">
    <link rel="stylesheet" href="{{asset('reception/css/case2.css')}}">
    <style>
        .col-md-1 {
            width: 9.333333%;

        }
        .row{margin-bottom: 10px}

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



<div class="part5">
    <div class="content">
        <div class="part2Title">
            <img src="{{asset('reception/img/6.png')}}" alt="" >

        </div>

    </div>
</div>

<div class="part6">
    <div class="content">


        <div class="part6Cont" id="hidden_enent5">
            <form action="">
                <div class="part6Title">
                    <span class="span2">Part1</span>
                    <span class="span3">问题列表</span>
                </div>
                <div class="row">
                    <div class="col-md-1 text-right">正面：</div>
                    <div class="col-md-2">
                        <input type="radio" name="face" value="0">直面型
                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="face" value="1">凹面型

                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="face" value="3">凸面型
                    </div>
                    <div class="col-md-4"></div>
                </div>
                <div class="row">
                    <div class="col-md-1 text-right">骨性：</div>
                    <div class="col-md-2">
                        <input type="radio" name="bone" value="0">I类
                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="bone" value="1">II类

                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="bone" value="3">III类
                    </div>
                    <div class="col-md-5"></div>
                </div>
                <div class="row">
                    <div class="col-md-1 text-right">生长型：</div>
                    <div class="col-md-2">
                        <input type="radio" name="grow" value="0">均角
                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="grow" value="1">高角

                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="grow" value="3">低角
                    </div>
                    <div class="col-md-5"></div>
                </div>
                <div class="row">
                    <div class="col-md-1 text-right">牙性(安氏:</div>
                    <div class="col-md-2">
                        <input type="radio" name="teeth" value="0">I类
                    </div>
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-5"></div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <input type="radio" name="teeth" value="1">II类I分类
                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="teeth" value="2">II类I分类亚类

                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="teeth" value="3">II类II分类
                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="teeth" value="4">II类II分类亚类

                    </div>
                    <div class="col-md-3">

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <input type="radio" name="teeth" value="5">III类
                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="teeth" value="6">III类亚类

                    </div>
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-2">


                    </div>
                    <div class="col-md-3">

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 text-right">前牙覆牙合:</div>
                    <div class="col-md-2">
                        <input type="radio" name="teeth1" value="0">正常
                    </div>
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-5"></div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <input type="radio" name="teeth1" value="1">深覆牙合I
                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="teeth1" value="2">深覆牙合II

                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="teeth1" value="3">深覆牙合III

                    </div>
                    <div class="col-md-5"></div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <input type="radio" name="teeth1" value="4">开牙合I
                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="teeth1" value="5">开牙合II

                    </div>
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-5"></div>
                </div>
                <div class="row">
                    <div class="col-md-1  text-right">前牙覆盖:</div>
                    <div class="col-md-2">
                        <input type="radio" name="teeth2" value="0">正常
                    </div>
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-5"></div>
                </div>
                <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <input type="radio" name="teeth2" value="1">深覆盖I
                </div>
                <div class="col-md-2">
                    <input type="radio" name="teeth2" value="2">深覆盖II

                </div>
                <div class="col-md-2">
                    <input type="radio" name="teeth2" value="3">深覆盖III

                </div>
                <div class="col-md-5"></div>
            </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <input type="radio" name="teeth2" value="4">反覆盖I
                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="teeth2" value="5">反覆盖II

                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="teeth2" value="6">反覆盖III

                    </div>
                    <div class="col-md-5"></div>
                </div>
                <div class="row">
                    <div class="col-md-1 text-right">拥挤度:</div>
                    <div class="col-md-3">
                        上颚 <input type="text" style="width: 42px">mm
                    </div>
                    <div class="col-md-3">
                        下颚 <input type="text" style="width: 42px">mm


                    </div>
                    <div class="col-md-2">


                    </div>
                    <div class="col-md-5"></div>
                </div>




                <div class="part6Title">
                    <span class="span2">Part2</span>
                    <span class="span3">诊断</span>
                </div>
                <div class="row">
                    <div class="col-md-1 text-right">骨性：</div>
                    <div class="col-md-2">
                        <input type="radio" name="bone1" value="0">I类
                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="bone1" value="1">II类

                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="bone1" value="3">III类
                    </div>
                    <div class="col-md-4"></div>
                </div>
                <div class="row">
                    <div class="col-md-1 text-right">性(安氏)：</div>
                    <div class="col-md-2">
                        <input type="radio" name="sex" value="0">I类

                    </div>
                    <div class="col-md-2">


                    </div>
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-5"></div>
                </div>

                <div class="row">
                    <div class="col-md-1 text-right"></div>
                    <div class="col-md-2">
                        <input type="radio" name="sex" value="1">II类I分类
                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="sex" value="2">II类I分类亚类

                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="sex" value="3">II类II分类
                    </div>
                    <div class="col-md-5"></div>
                </div>
                <div class="row">
                    <div class="col-md-1 text-right"></div>
                    <div class="col-md-2">
                        <input type="radio" name="teeth" value="4">III类
                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="teeth" value="5">II压类

                    </div>
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-5"></div>
                </div>

                <div class="row">
                    <div class="col-md-2">其他诊断：</div>

                    <textarea name="" id="s" cols="30" rows="10" style="margin-left: 25px"></textarea>

                    <div class="col-md-2">

                    </div>

                </div>
                <div class="part6Title">
                    <span class="span2">Part3</span>
                    <span class="span3">治疗目标</span>
                </div>

                <div class="row">
                    <div class="col-md-1 text-right">面型:</div>
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="face" value="0">维持
                    </div>

                    <div class="col-md-1">
                        <input type="radio" name="face" value="1">改善
                    </div>
                    <div class="col-md-6"></div>
                </div>
                <div class="row">
                    <div class="col-md-1 text-right">牙型:</div>

                    <div class="col-md-1">
                        上颌中线:
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="bone" value="1">居中

                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="bone" value="3">左偏斜
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="bone" value="3">右偏斜
                    </div>
                    <div class="col-md-6"></div>
                </div>
                <div class="row">
                    <div class="col-md-1 text-right"></div>
                    <div class="col-md-1">
                        下颌中线:
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="grow" value="1">居中

                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="grow" value="3">左偏斜
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="grow" value="3">右偏斜
                    </div>
                    <div class="col-md-7"></div>
                </div>
                <div class="row">
                    <div class="col-md-1 text-right"></div>
                    <div class="col-md-1">
                        前牙覆牙合:
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="teeth" value="1">正常

                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="teeth" value="1">III类亚类

                    </div>
                    <div class="col-md-5"></div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>

                    <div class="col-md-1">
                        <input type="radio" name="teeth" value="1">深覆牙合I
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="teeth" value="2">深覆牙合II

                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="teeth" value="3">深覆牙合III
                    </div>
                    <div class="col-md-6"></div>

                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>

                    <div class="col-md-1">
                        <input type="radio" name="teeth" value="1">开牙合I
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="teeth" value="2">开牙合II

                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="teeth" value="3">开牙合III
                    </div>
                    <div class="col-md-6"></div>

                </div>
                <div class="row">
                    <div class="col-md-1 text-right"></div>
                    <div class="col-md-1">
                        前牙覆盖:
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="teeth" value="1">正常

                    </div>

                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>

                    <div class="col-md-1">
                        <input type="radio" name="teeth" value="1">深覆盖I
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="teeth" value="2">深覆盖II

                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="teeth" value="3">深覆盖III
                    </div>
                    <div class="col-md-6"></div>

                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>

                    <div class="col-md-1">
                        <input type="radio" name="teeth" value="1">反覆盖I
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="teeth" value="2">反腐败II

                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="teeth" value="3">反覆盖III
                    </div>
                    <div class="col-md-6"></div>

                </div>
                <!---->
                <div class="row">
                    <div class="col-md-1 text-right"></div>
                    <div class="col-md-1">
                        尖牙覆盖:
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="teeth" value="1">左侧

                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="teeth" value="1">中性

                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="teeth" value="1">近中

                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="teeth" value="1">远中

                    </div>
                    <div class="col-md-6"></div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>

                    <div class="col-md-1">
                        <input type="radio" name="teeth" value="1">右侧
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="teeth" value="2">中性

                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="teeth" value="3">近中
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="teeth" value="3">远中
                    </div>

                    <div class="col-md-6"></div>

                </div>

                <div class="row">
                    <div class="col-md-1 text-right"></div>
                    <div class="col-md-1">
                        磨牙关系:
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="teeth" value="1">左侧

                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="teeth" value="1">中性

                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="teeth" value="1">近中

                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="teeth" value="1">远中

                    </div>
                    <div class="col-md-6"></div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>

                    <div class="col-md-1">
                        <input type="radio" name="teeth" value="1">右侧
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="teeth" value="2">中性

                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="teeth" value="3">近中
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="teeth" value="3">远中
                    </div>

                    <div class="col-md-6"></div>

                </div>
                其他目标:
                <textarea name="" id="1" cols="30" rows="10"></textarea>

                <div class="part6Title">
                    <span class="span2">Part4</span>
                    <span class="span3">治疗计划</span>
                </div>
                <p>                描述:
                </p>
                <textarea name="" id="1" cols="30" rows="10"></textarea>



            </form>
        </div>





    </div>
</div>
<footer>
    <div class="content">
        <a href="createZhenJiCaseFif.blade.php"><button class="pre" style="margin-left: 350px;">上一页</button></a>
        <a href="createZhenJiCaseSeven.blade.php"><button style="margin-right: 35px">下一页</button></a>
        <a href=""> <button>退出 </button></a>


    </div>

</footer>

<script src="{{asset('reception/js/jquery.min.js')}}"></script>


<script>





    $('#click_event4').click(function(){
        $('#hidden_enent4').slideToggle();
    })

;
    $('#click_event5').click(function(){
        $('#hidden_enent5').slideToggle();
    })
    ;


    $('#click_event6').click(function(){
        $('#hidden_enent6').slideToggle();
    });


</script>



</body>
</html>