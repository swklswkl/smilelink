<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <link rel="stylesheet" href="{{asset('reception/Bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css')}}">

    <link href="{{asset('reception/Bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="{{asset('reception/css/casePublic.css')}}">
    <link rel="stylesheet" href="{{asset('reception/css/case3.css')}}">
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
<div class="part6">
    <div class="content">
        <div class="part5Title">
            <span class="span2">Part6</span>
            <span class="span3">矫正计划</span>
        </div>
        <div class="part5Text">
            <span>*</span>问题列表
            <div class="sel" id="click_event4">^</div>
        </div>
        <div class="part5Cont" id="hidden_enent4">
            <form action="">

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


                <div class="part6Text" style="border: 2px solid #c2c2c2 ;">
                    <span>*</span>治疗方案
                    <div class="sel" id="click_event7">^</div>
                </div>
                <div class="part6Cont1" id="hidden_enent7">
                    <input type="radio">待测量分析报告上传后再填写方案，请点击勾选。
                    <p>    方案1：</p>


                    <textarea name="" id="" cols="30" rows="10"></textarea>
                    <button>+ 添加新方案</button>
                </div>





            </form>

        </div>
    </div>
</div>


<footer>
    <div class="footT">
        <div class="content">
            <input type="radio">我已认真阅读并同意该 <a href="#">《法律条款》</a>

        </div>

    </div>
    <div class="content">
        <button class="pre">保存</button>
        <button class="sub">提交</button>
        <a href="{{url('caseTwo')}}"><button>上一页</button></a>

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


    $('#click_event7').click(function(){
        $('#hidden_enent7').slideToggle();
    });


</script>



</body>
</html>
