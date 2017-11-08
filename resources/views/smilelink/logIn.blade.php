<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <link href="{{asset('reception/Bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body{background: url("{{asset('reception/img/NOFORE.png')}}" )  no-repeat;}
        .content{width: 1400px;margin: 0 auto;height: auto}
        .logImg{margin-top: 300px;margin-bottom: 20px;}
        .form-control{height: 50px;font-size: 18px;margin-bottom: 30px;color: #9a9a9a;color: #9a9a9a}
        #exampleInputEmail1{background-image: url("{{asset('reception/img/tel.png')}}");background-repeat: no-repeat;background-position: 10px}
        #exampleInputPassword1{background-image: url("{{asset('reception/img/pass.png')}}");background-repeat: no-repeat;background-position: 10px}
    </style>
</head>
<body>
<div class="content">

    <div class="row">
        <div class="col-lg-3 col-md-3"></div>
        <div class="col-lg-4 col-md-3"></div>
        <div class="col-lg-4  col-md-4 logImg">
            <img src="{{asset('reception/img/bonsmilelogo.png')}}" alt="" >
        </div>
        <div class="col-lg-1  col-md-2"></div>




    </div>
    <div class="box">
        <div class="col-lg-3  col-md-3"></div>
        <div class="col-lg-4 col-md-4"></div>
        <div class="col-lg-4 col-md-4">
            <form>
                <div class="row">
                    <div class="form-group ">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="请输入手机号" style="padding-left: 40px">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group ">

                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="请输入密码" style="padding-left: 40px" >
                    </div>
                </div>

                <div class="row">
                    <div class="form-group ">
                        <button type="button" class="btn btn-primary btn-lg btn-block" style="background: #69be28;border:none ">登录</button>
                    </div>

                </div>
            </form>
        </div>
        <div class="col-lg-1 col-md-1"></div>
    </div>






</div>



<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="{{asset('reception/Bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js')}}"></script>

</body>
</html>
