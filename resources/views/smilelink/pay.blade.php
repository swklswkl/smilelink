<div class="bg">
    <div class="box" id="addBox">

        <h3>距离成功只有一步了，</h3>
        <h3>您确认放弃吗？</h3>
        <div class="pay-cancel " >
            <button style="margin-right: 20px" class="close">继续支付</button>
            <button >确认取消</button>
        </div>



    </div>
</div>
@extends('smilelink.header')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/casePublic.css">
    <link rel="stylesheet" href="css/caseManage.css">
    <style>
        .messageBox h3{font-size: 20px;color: #69be28;font-weight: normal;margin-top: 50px;margin-bottom: 34px}
        .messageBox p{font-size: 16px;color: #717171;margin-bottom: 25px}
        .payWays{margin-bottom: 116px;}
        .payWays span img{border: 1px solid white}
        .ensureAndCancel button{width: 150px;height: 50px;background: #cccccc;border: none;border-radius: 10px;font-size: 20px;color: #ffffff}
        .ensureAndCancel button:hover{background: #69be28;cursor: pointer}
        .input1{width: 281px;height: 109px;position: absolute;top: 472px;left: 653px;opacity: 0;z-index: 100}
        .input2{width: 281px;height: 109px;position: absolute;top: 472px;  left: 977px;opacity: 0;z-index: 100}
        .C1{border: 2px solid red}
        .C2{border: 2px solid blue}
/*第一个弹窗*/
        .bg{background: rgba(0,0,0,.5);height: 100%;width:100%;position: absolute;display:none ;z-index: 999}
        .box{background: white;text-align: center;border-radius:10px;width: 450px;padding-bottom: 10px ;padding-top: 20px;
            position: absolute;left: 50%;top: 50%;margin-left: -225px;margin-top: -135px}
        .box span{color: #ff0000;}
        .pay-cancel button{width: 112px;height: 38px;border-radius: 10px;color: white;background: #cccccc;border: none;margin-top: 22px;cursor: pointer;margin-bottom: 50px}
        .pay-cancel button:hover{background: #69be28}
/*第二个弹窗*/
        .bg1{background: rgba(0,0,0,.5);height: 100%;width:100%;position: absolute;display: none;z-index: 999}
        .box1{background: white;text-align: center;border-radius:10px;width: 450px;padding-bottom: 10px ;
            position: absolute;left: 50%;top: 50%;margin-left: -225px;margin-top: -164px;}


        .box1 span{color: #ff0000}
    </style>
</head>
<body>
<!--弹出层1-->

<!--弹出层2-->
<div class="bg1">
    <div class="box1" id="addBox1">
        <div class="close1">
            <div class="x" style="text-align: right;margin-right: 20px;margin-top: 10px">X</div>
        </div>
        <h3>支付宝扫描支付</h3>

        <div class="img">
            <img src="images/timg.png" alt="">
        </div>
        <p><span id="time"></span><span>￥2000</span></p>
    </div>
</div>

<div class="content">
    <!--基本信息-->
    <div class="messageBox">
        <div class="content">
            <p>病例管理>>付款</p>

            <h3>订单信息</h3>
            <p>订单编号：<span id="ddbh">{{$data[3]}}</span></p>
            <p>指定专家：<span>{{$data[0]}}</span></p>
            <p>服务内容：<span>{{$data[1]}}</span></p>
            <p>服务金额：<span>{{$data[2]}}</span></p>
            <h3>选择支付方式</h3>
            <div class="payWays" style="text-align: center">
                <span style="display: inline-block;position: relative">
                    <img sw="0" fg="alipay" src="images/al.png" alt="" id="CC1" onclick="pay(this)">
                    <img aa="0" id="zfbtp" src="images/yes.png" alt="" style="width: 40px;height: 40px;position: absolute;bottom: 10px;right: 10px;display: none">
                </span>
                <span style="display: inline-block;position: relative">
                    <img sw="0" fg="wechat" src="images/wx.png" id="CC2" alt="" onclick="pay(this)">
                    <img id="wxtp" aa="0" src="images/yes.png" alt="" style="width: 40px;height: 40px;position: absolute;bottom: 10px;right: 10px;display: none">
                </span>
            </div>
            <div class="ensureAndCancel">
                <button id="b1" sw="0" onclick="zhifu()" style="margin-left: 423px;margin-right: 57px">确认支付</button>
                <button onclick="aa()">放弃支付</button>
            </div>
        </div>

    </div>

</div>
<script src="js/jquery.1.8.3.js"></script>
<script src="js/jquery.min.js"></script>
<script src="reception/js/layer/2.1/layer.js"></script>


<script>
    var flag;
    function fn(b){
//        if (b.getAttribute('aa') == 0)
//        {
//            b.setAttribute('aa',1);
//            $('#b1').attr('sw',1);
//            b.style.border='1px solid red';
//
//        }else{
//            b.setAttribute('aa',0);
//            $('#b1').attr('sw',0);
//            b.style.border='0px solid red';
//        }
    }
    function  aa(){

        $('.bg').show();
        $('.close').click(function () {
            $(this).parent().parent().parent().fadeOut(function () {
                $(this).hide();
            })
        });
    }
    function  bb(a){
        if(a.getAttribute('sw')==0)
        {
            return false;
        }else{
            $('.bg1').show();
            $('.close1').click(function () {
                $(this).parent().parent().fadeOut(function () {
                    $(this).hide();
                })
            });
        }
    }
    function pay(obj)
    {
        var num = obj.getAttribute('sw');
        var payn = obj.getAttribute('fg');
        if (payn == 'alipay')
        {
            obj.nextElementSibling.style.display = 'block';
            document.getElementById('wxtp').style.display = 'none';
            flag = 1; // 1 支付宝
        }else{
            obj.nextElementSibling.style.display = 'block';
            document.getElementById('zfbtp').style.display = 'none';
            flag = 2; // 2 微信
        }
    }
    function zhifu ()
    {
        if (flag == undefined)
        {
            layer.msg('请选择支付方式');
        }else if(flag == 1)
        {
            //支付宝支付
            var number = document.getElementById('ddbh').innerHTML;
            window.location.href = 'alipay?dd='+number;
        }else if(flag == 2)
        {
            // 这里写微信支付的逻辑
        }
    }
</script>

</body>
</html>
@endsection