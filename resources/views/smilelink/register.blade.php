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
        *{font-size: 20px}
        label{font-weight: normal}
         .bg{height: 1000px;position: relative;background-color:rgba(0,0,0,0.5)}
        .box{background: white;text-align: center;border-radius:10px;width: 450px;padding-bottom: 40px ;
            position: absolute;left: 50%;top: 50%;margin-left: -225px;margin-top: -164px;}
        .img{padding-top: 40px;margin-bottom: 20px}
        .box h3{margin-bottom: 30px;}
        .box span{color: #ff0000}
    </style>
</head>
<body>
<div id="addBox" class="bg" style="width: 100%;height: 100%;display: none;position: absolute;z-index: 999;">
    <div class="box" >
        <div class="img">
            <img src="img/yes.png" alt="">
        </div>
        <h3>恭喜你,注册成功！</h3>
        <p><span id="time">3</span><span>秒</span>后自动跳转到登录页面</p>
    </div>
</div>
<div style="background: #69bd27;margin-bottom: 40px" >
    <img src="{{asset('reception/img/log.jpg')}}" alt="" >
</div>

<div class="container bs-docs-container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <br>
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">姓名:</label>
                    <div class="col-sm-8">
                        <input name="name" type="text" class="form-control" id="name" placeholder="请输入真实姓名" style="background: #cce8cf">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inlineRadio2" class="col-sm-4 control-label">性别:</label>
                    <div class="col-sm-8">
                        <label class="radio-inline">
                            <input name="sex" type="radio" name="inlineRadioOptions" id="sex" value="0" style="background: #cce8cf;height: 18px;width: 18px;"> 男
                        </label>
                        <label class="radio-inline">
                            <input name="sex" type="radio" name="inlineRadioOptions" id="sex" value="1" style="background: #cce8cf;height: 18px;width: 18px;"> 女
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEamil" class="col-sm-4 control-label">电子邮箱:</label>
                    <div class="col-sm-8">
                        <input name="email" type="email" class="form-control" id="email" placeholder="请输入电子邮箱" style="background: #cce8cf">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">出生年月日:</label>
                    <div class="col-sm-8">
                        <input name="birthday" type="date" class="form-control" id="birthday" placeholder="" >
                    </div>
                </div>
                <div class="form-group">
                        <label class="col-sm-4 control-label">选择地区:</label>
                    <div class="col-sm-8">
                        <select name="province" onchange="city1(this)" class="col-sm-3 control-label" id="province" style="border-radius: 4px;">
                            <option value="">省份</option>
                        </select>
                        <select name="city" class=" col-sm-3 control-label" id="city" style="border-radius: 4px;">
                            <option value="">地级市</option>
                        </select>
                    </div>

                </div>
                <div class="form-group">
                    <label for="inlineRadio2" class="col-sm-4 control-label">是否具备医师资格证:</label>
                    <div class="col-sm-8">
                        <label class="radio-inline">
                            <input name="certificate" type="radio" name="inlineRadioOptions" id="certificate" value="1" style="background: white;height: 18px;width: 18px;"> 是
                        </label>
                        <label class="radio-inline">
                            <input name="certificate" type="radio" name="inlineRadioOptions" id="certificate" value="0" style="background: #cce8cf;height: 18px;width: 18px"> 否
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">现工作单位:</label>
                    <div class="col-sm-8">
                        <input name="work_unit" type="text" class="form-control" id="work_unit" placeholder="请输入您的工作单位" style="background: #cce8cf">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">从事正畸年限:</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <input name="working_years" type="number" class="form-control" id="working_years" placeholder="请填写工作年限" style="background: #cce8cf">
                            <div class="input-group-addon " style="background: white;border: none">年</div>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-10">
                        <div class="checkbox">
                            <label class="radio-inline">
                                <input name="" type="checkbox" style="height: 19px;width: 19px; " > <span style="font-size: 17px;">阅读并接受</span> <a href="" style="font-size: 17px">《博思美协议》</a>
                            </label>
                        </div>
                    </div>
                </div>
{{--隐藏域--}}
                <input name="mobilephone" value="{{$_GET['mobilephone']}}" type="hidden" class="form-control" id="mobilephone" placeholder="请输入真实姓名" style="background: #cce8cf">

                <div class="form-group">

                    <div class="col-sm-6 col-sm-offset-4">
                        <div type="" onclick="submitForm()" class="btn btn-success btn-lg btn-block" style="background:#69b27d ;width: 400px;height: 40px;margin-top: 10px;">提交</div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-2"></div>

    </div>
</div>



<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="{{asset('reception/Bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('reception/js/layer/2.1/layer.js')}}"></script>
<script>
    function city1(a){
        $(function(){
            $.ajax({
                type: 'get',
                url:'{{url('/api/china/city')}}',
                dataType:'json',
                data:{q:a.selectedIndex+1},
                success: function(data) {
                    $('#city').html('');
                    $.each(data,function(key,val){
                        $('#city').append('<option>'+val.text+'</option>');
                    })

                }
            });
        })
    }
    function submitForm()
    {
        $.ajax({
            type: 'post',
            url:'{{url('/api/doctor/registerInfo')}}',
            dataType:'json',
            data:$('.form-horizontal').serialize(),
            success: function(data) {
                console.log(data);
                if (data.code == 200)
                {
                    aa();
                    {{--layer.msg(data.msg);--}}

                } else {
                    $.each(data.msg,function(key,val){
                        layer.tips(val,'#'+key);
                    })
                }
            }
        });
    }
/*页面加载查询省份*/
    $(function(){
        $.ajax({
            type: 'get',
            url:'{{url('/api/china/province')}}',
            dataType:'json',
            success: function(data) {
                    $.each(data,function(key,val){
                        $('#province').append("<option  data-id="+val.id+">"+val.text+'</option>');
                    })
            }
        });
    })
    function aa ()
    {
        $('#addBox').show(); //将DIV标签显示出来。
        setTimeout(function(){
            $('#addBox').hide(); //将DIV标签隐藏。
        }, 4000);
        var i = 3;
        var timer = setInterval(function(){
            if(i== -1){
                clearInterval(timer);
                window.location.href = '{{url('login')}}';
            }else{
                --i;
                document.getElementById('time').innerHTML = i;
            }
        },1000);
    }
</script>
</body>
</html>
