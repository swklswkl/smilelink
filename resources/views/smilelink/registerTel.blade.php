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
</head>
<body>
<div class="row">
    <div style="margin-left: 10%;margin-bottom: 200px">
        <img src="img/log.jpg" alt="">
    </div>
</div>
<div class="row center-block" style="width: 45%">
<form class="form-horizontal">
    <div class="form-group"  style="margin-bottom: 40px" >
        <label for="inputName1" class="col-sm-2 control-label" style="font-size: 20px">手机号</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputName1" placeholder="请输入手机号"style="height: 50px;font-size: 20px" required>
        </div>
    </div>
    <div class="form-group" style="margin-bottom: 50px">
        <label for="inputName2" class="col-sm-2 control-label" style="font-size: 20px">验证码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputName2" placeholder="请输入验证码" style="height: 50px;font-size: 20px" required>
        </div>
    </div>

    <div class="form-group" style="margin-bottom: 50px">
        <label for="inputName2" class="col-sm-2 control-label" style="font-size: 20px">密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputName2" placeholder="请输入密码" style="height: 50px;font-size: 20px" required>
        </div>
    </div>
    <div class="form-group" style="margin-bottom: 50px">
        <label for="inputName2" class="col-sm-2 control-label" style="font-size: 20px">密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputName2" placeholder="请再次输入密码" style="height: 50px;font-size: 20px" required>
        </div>
    </div>
    <div class="form-group">
        <div  style="text-align: center">
            <button type="submit" class="btn btn-success" style="width: 180px;height: 60px;font-size: 20px">下一步</button>
        </div>
    </div>
</form>
</div>

<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="{{asset('reception/Bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js')}}"></script>

</body>
</html>
