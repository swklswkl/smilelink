<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <link href="Bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('reception/css/casePublic.css')}}">
    <link rel="stylesheet" href="{{asset('reception/css/caseManagement.css')}}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="{{asset('reception/js/jquery.1.8.3.js')}}"></script>

</head>
<body>
<header>

    <div class="content">
        <div class="head-L">
            <img src="{{asset('reception/img/bonsmilelogo.png')}}" alt="">
        </div>
        <div class="head-C">
            <span ><a href="#">新建病例</a></span>
            <span class="span1"><a href="#">病例管理</a></span>
            <span><a href="#">我的订单</a></span>
        </div>
        <div class="head-R">
            <span><a href="#">个人中心</a></span>
            <span class="span2"><a href="#">退出</a></span>
        </div>



    </div>
</header>
<div class="search">
<div class="content">
    <div class="mySelect">
        <input type="text" placeholder="请选择病例状态" class="input">
        <ul>
            <li>治疗中</li>
            <li>分析报告已上传</li>
            <li>档案已指导</li>
            <li>资料已提交</li>

        </ul>



    </div>
    <div class="input1">
        <input type="text">
    </div>
    <div class="searchButton">
        <button>查询</button>
    </div>
</div>
</div>

<div class="tableBox">
    <div class="content">
    <div class="table">
        <table class="table table-condensed table-hover">
            <tr class="success">
                <td>病历号</td>
                <td>患者姓名</td>
                <td>创建日期</td>
                <td>病例状态</td>
                <td>服务类型</td>
                <td>病例操作</td>


            </tr>
            <tr class="active">
                <td >XX10086</td>
                <td >小熊</td>
                <td >2017/8/8</td>
                <td>治疗中</td>
                <td >隐形正畸矫治</td>
                <td ><a href="#">查看</a></td>
            </tr>
            <tr class="active">
                <td >XX10010</td>
                <td >小雪</td>
                <td >2017/8/8</td>
                <td>分析报告已上传</td>
                <td >隐形正畸矫治</td>
                <td ><a href="#">查看</a> <a href="#">维护方案</a></td>
            </tr>
        </table>

    </div>
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <nav aria-label="Page navigation">
                <ul class="pagination" >
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li><a href="#" style="background: #69be28">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="col-lg-4"></div>



    </div>
</div>



<script>
    $('input').focus(function(){
        //alert(123);
        $(this).next().slideDown();

    });
    //给输入框赋值
    $('.mySelect li').click(function () {
        var value = $(this).html();//获取li的内容
        //找input
        $(this).parent().parent().find('input').val(value);//赋值
        $(this).parent().slideUp();//消失
    });

</script>
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="{{asset('reception/Bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js')}}"></script>

</body>
</html>
