<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>注册</title>
    <link href="{{asset('reception/Bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>

    </style>
</head>
<body>
<div class="row">
    <div style="margin-left: 10%;margin-bottom: 200px">
        <img src="{{asset('reception/img/log.jpg')}}" alt="">
    </div>
</div>
<div class="row center-block" style="width: 45%">
<form class="form-horizontal" >
    <div class="form-group"  style="margin-bottom: 40px" >
        <label for="inputName1" class="col-sm-2 control-label" style="font-size: 20px">手机号</label>
        <div class="col-sm-10">
            <input name="mobilephone" type="text" class="form-control" id="mobilephone" placeholder="请输入手机号"style="height: 50px;font-size: 20px">
        </div>
    </div>

    <div class="form-group" style="margin-bottom: 50px">
        <label for="inputName2" class="col-sm-2 control-label" style="font-size: 20px">验证码</label>
        <div class="col-sm-7">
            <input name="code_number" type="text" class="form-control" id="code_number" placeholder="请输入验证码" style="height: 50px;font-size: 20px" >
        </div>
        <div class="col-sm-3">
            <button  type="button" onclick="send_code()"  class="btn btn-success col-sm-12"  style="height: 50px;font-size: 20px">获取验证码</button>
        </div>
    </div>

    <div class="form-group" style="margin-bottom: 50px">
        <label for="inputName2" class="col-sm-2 control-label" style="font-size: 20px">密码</label>
        <div class="col-sm-10">
            <input name="password" type="password" class="form-control" id="password" placeholder="请输入密码" style="height: 50px;font-size: 20px" >
        </div>
    </div>
    <div class="form-group" style="margin-bottom: 50px">
        <label for="inputName2" class="col-sm-2 control-label" style="font-size: 20px">重输密码</label>
        <div class="col-sm-10">
            <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" placeholder="请再次输入密码" style="height: 50px;font-size: 20px" >
        </div>
    </div>
    <div class="form-group">
        <div style="text-align: center">
            <div   class="btn btn-success" onclick="submitForm()"  style="width: 180px;height: 60px;font-size: 20px;line-height: 51px">下一步</div>
        </div>
    </div>

</form>
</div>

<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="{{asset('reception/Bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('reception/js/layer/2.1/layer.js')}}"></script>
<script>
    function submitForm()
    {
        $.ajax({
            type: 'post',
            url:'{{url('/api/doctor/registerTel')}}',
            dataType:'json',
            data:$('.form-horizontal').serialize(),
            success: function(data) {
                console.log(data);
                if (data.code == 200)
                {
                    layer.msg(data.msg);
                    setTimeout(function(){
                        var mobilephone = $('#mobilephone').val();
                        window.location.href = "{{url('register?mobilephone=')}}"+mobilephone;
                    },3000)

                } else if(data.code==401) {
                    $.each(data.msg,function(key,val){
                        layer.tips(val,'#'+key);
                    })
                }else{
                    layer.msg(data.msg);
                }
            }
        });
    }
    //发送短信验证码
    function send_code()
    {
        $.ajax({
            type: 'post',
            url:'{{url('/api/doctor/registerTel/sendCode')}}',
            dataType:'json',
            data:{'mobilephone':$('#mobilephone').val()},
            success: function(data) {
                console.log(data);
                if (data.code == 200)
                {
                    layer.msg(data.msg);

                } else {
                    $.each(data.msg,function(key,val){
                        layer.tips(val,'#'+key);
                    })
                }
            }
        });
    }

</script>
</body>
</html>
