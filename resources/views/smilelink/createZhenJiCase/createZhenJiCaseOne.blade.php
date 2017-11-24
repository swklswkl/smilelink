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
            <span class="span1"><a href="{{url('caseManagement')}}">病例管理</a></span>
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
                    <p><input name="name" id="name" type="text" class="inputLong" value="@isset($data) {{$data[0]['name']}} @endisset"></p>
                    <p><input name="sex" id="" type="radio" class="inputChe" value="0"@isset($data[0]) @if($data[0]['sex']==0) checked @endif @endisset name="sex">男
                        <input name="sex" id="" type="radio" @isset($data[0])  @if($data[0]['sex']==1) checked @endif @endisset class="inputChe" name="sex" value="1">女</p>
                    <p><input name="birthday" type="date" id="birthday" value="<?= isset($data[0]['birthday']) ? $data[0]['birthday'] :  '' ?>" class="inputLong" > </p>
                    <p><input name="id_number" id="id_number" value="@isset($data[0]){{$data[0]['id_number']}} @endisset " type="text" class="inputLong"></p>
                    <p><input name="mobilephone" id="mobilephone" value="@isset($data[0]) {{$data[0]['mobilephone']}} @endisset " type="text" class="inputLong"></p>
                    <p><input name="address" id="address" value="@isset($data[0]){{$data[0]['address']}} @endisset " type="text" class="inputLong"></p>
                    @isset($data[0])
                        <input name="orthodontics_id" type="hidden" value="{{$_GET['orthodontics_id']}}"/>
                        <input name="edit" type="hidden" value="1"/>
                    @endisset
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
                    @empty($data[0])
                    window.location.href = "{{url('createZhenJiCaseTwo?orthodontics_id=')}}"+data.data;
                    @endempty
                    @isset($data[0])
                        window.location.href = "{{url('editCase2?orthodontics_id=').$_GET['orthodontics_id']}}";
                    @endisset
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

