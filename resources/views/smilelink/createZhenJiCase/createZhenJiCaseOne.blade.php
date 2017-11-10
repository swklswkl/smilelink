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
            <span ><a href="{{url('createCase')}}">新建病例</a></span>
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
            <form class="form-horizontal">
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
                    <p><input name="name" id="name" type="text" class="inputLong"></p>
                    <p><input name="sex" id="" type="radio" class="inputChe" value="0" name="sex">男 <input name="sex" id="" type="radio" class="inputChe" name="sex" value="1">女</p>
                    <p><input name="birthday" id="birthday" type="date" class="inputLong" > </p>
                    <p><input name="id_number" id="id_number" type="text" class="inputLong"></p>
                    <p><input name="mobilephone" id="mobilephone" type="number" class="inputLong"></p>
                    <p><input name="address" id="address" type="text" class="inputLong"></p>

                </div>
                </div>
                <div class="button1">
                    <a > <div onclick="submitForm()" class="buttonx" style="margin-left: 480px">下一步 </div></a>
                </div>
            </form>


        </div>

    </div>
</div>
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="{{asset('reception/js/layer/2.1/layer.js')}}"></script>
<script>
    function submitForm()
    {
        $.ajax({
            type: 'post',
            url:'{{url('/api/odtcase/addInformation')}}',
            dataType:'json',
            data:$('.form-horizontal').serialize(),
            success: function(data) {
                console.log(data);
                if (data.code == 200)
                {
                    window.location.href = "{{url('createZhenJiCaseTwo?orthodontics_id=')}}"+data.data;
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

