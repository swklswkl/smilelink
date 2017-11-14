<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>登陆</title>
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
            <form class="form-horizontal">
                <div class="row">
                    <div class="form-group ">
                        <input name="mobilephone" type="text" class="form-control" id="mobilephone" placeholder="请输入手机号" style="padding-left: 40px">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group ">
                        <input name="password" type="password" class="form-control" id="password" placeholder="请输入密码" style="padding-left: 40px" >
                    </div>
                </div>
                <div class="row">
                    <div class="form-group ">
                        <select name="select" id="yisheng" class="form-control">
                            <option value="1">医生</option>
                            <option value="2">专家</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group ">
                        <div type="" onclick="submitForm()" class="btn btn-primary btn-lg btn-block" style="background: #69be28;border:none ">登录</div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-1 col-md-1"></div>
    </div>
</div>
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="{{asset('reception/Bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('reception/js/layer/2.1/layer.js')}}"></script>
<script>
    function submitForm()
    {
        $.ajax({
            type: 'post',
            url:'{{url('/api/doctor/login')}}',
            dataType:'json',
            data:$('.form-horizontal').serialize(),
            success: function(data) {
                console.log(data);
                if (data.code == 200)
                {
                    if (document.getElementById('yisheng').value==1)
                    {
                        window.location.href = "{{url('caseManagement')}}";
                    }else{
                        window.location.href = "{{url('orderReceiving')}}";
                    }
                } else {
                    if(data.code==401) {
                        $.each(data.msg, function (key, val) {
                            layer.tips(val, '#' + key);
                        })
                    }
                    if(data.code==402){
                        layer.msg(data.msg);
                    }
                }
            }
        });
    }
</script>
</body>
</html>