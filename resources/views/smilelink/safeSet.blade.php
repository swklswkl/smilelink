@extends('smilelink.header')


@section('content')
        <!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Title</title>
<link rel="stylesheet" href="reception/css/casePublic.css">
<link rel="stylesheet" href="reception/css/safeSet.css">
<style>
    .li-top p .redSpan{color: #e47138}
    .li-top p .graySpan{color: #b9b9b9}
    .li-top p .blueSpan{color: #00a2ff;cursor: pointer}
    .li-top button{background: url("reception/img/写.png")no-repeat ;width: 20px;height: 20px;border: none;vertical-align: middle;margin-left: 10px;cursor: pointer}
    .bg{background-color: rgba(0,0,0,0.5);width: 100%;height: 100%;display: none;position: absolute;z-index: 999;padding-top: 260px}
    .bg .box{width: 450px;height: 300px;background: white;margin: 0 auto;border-radius: 10px;padding-top: 10px;position: relative;padding-bottom: 20px}
    .bg .box  p input{width: 270px;height: 35px;}
    .bg .box  p .input1{background: url("reception/img/tel.png") no-repeat 2px 2px;padding-left: 30px;border: 1px solid #ddd}
    .bg .box  p .input2{background: url("reception/img/tel.png") no-repeat 2px 2px;padding-left: 30px;border: 1px solid #ddd}
    .bg{}
    .bg .box  p{text-align: center;margin-bottom: 25px}
    .bg .box button{position: absolute;top: 146px;right: 90px;border: none;background: white;color: #69be28}
    .ensure {height: 40px;width: 300px;background: #69be28;text-align: center;line-height: 40px;color: white;font-size: 18px;margin: 0 auto;border-radius: 5px;margin-top: 40px}
</style>
<body>
<script src="/demos/googlegg.js"></script>
<div class="bg" id="zhiFuBao" >
    <input type="hidden" id="phppro" value="{{$data['province']}}">
    <div class="box">
        <p  style="text-align: right;margin-bottom: 40px"><sapn style="margin-right: 15px" id="cancelZhiFuBao">X</sapn></p>
        <p>
            <input type="text" placeholder="请输入新支付宝账号" class="input1">
        </p>
        <div class="ensure">
            确 &nbsp;&nbsp;&nbsp;定
        </div>
    </div>
</div>
<div class="bg" id="weiXin" >
    <div class="box">
        <p  style="text-align: right;margin-bottom: 40px"><sapn style="margin-right: 15px" id="cancelWeiXIn">X</sapn></p>
        <p>
            <input type="text" placeholder="请输入微信账号" class="input1">
        </p>
        <div class="ensure">
            确 &nbsp;&nbsp;&nbsp;定
        </div>
    </div>
</div>
<div class="bg" id="pw">
    <div class="box" >
        <p  style="text-align: right;margin-bottom: 40px"><sapn style="margin-right: 15px" id="cancelPw" >X</sapn></p>
        <p>
            <input type="password" placeholder="请输入原始密码" class="input1">
        </p>
        <p>
            <input type="password" placeholder="请输入新密码" class="input1">
        </p>
        <p>
            <input type="text" placeholder="请再次输入新密码" class="input2">
        </p>
        <div class="ensure">
            确 &nbsp;&nbsp;&nbsp;定
        </div>
    </div>
</div>
<div class="bg" id="tel">
    <div class="box">
        <p  style="text-align: right;margin-bottom: 40px"><sapn style="margin-right: 15px" id="cancelTel">X</sapn></p>
        <p>
            <input type="text" placeholder="请输入新的手机号" class="input1">
        </p>
        <p>
            <input type="text" placeholder="请输入验证码" class="input2">
        </p>
        <div class="ensure">
            确 &nbsp;&nbsp;&nbsp;定
        </div>
    </div>
</div>
<div class="content">
    <!--基本信息-->
    <p style="margin-top: 20px;margin-bottom: 20px;color:#979797;font-size: 16px">个人中心>>支付设置</p>
    <div class="o-m">
        <div class="ul-o">
            <ul style="border: 1px solid #d0d0d0">
                <li class="li-o" style="border:none;border-bottom: 1px solid #d0d0d0 "><span></span><p>我的资料&nbsp;&nbsp;&nbsp;></p><div class="clear"></div><b></b></li>
                <li class="li-t" style="border: none;border-bottom: 1px solid #d0d0d0"><span></span><p>安全设置&nbsp;&nbsp;&nbsp;></p><div class="clear"></div><b></b></li>
                <li class="li-s" style="border: none;"><span></span><p>支付设置&nbsp;&nbsp;&nbsp;></p><div class="clear"></div><b></b></li>

                <div class="li-mask"></div>
            </ul>
        </div>
        <div class="ul-t">
            <!--我的资料-->
            <li style="display:block">
                <div class="li-top">
                    <p style="color: #e47138">详细资料<button type="button" onclick="editinfo()"></button>
                    <p>
                        <input type="hidden" id="doctor_id" value="{{session()->get('doctor.id')}}">
                        姓名：<input type="text" name="name" id="name" value="{{$data['name']}}" style="width: 522px;height: 40px;font-size: 18px;padding-left: 10px;border: 1px solid gainsboro" disabled>
                    </p>
                    <p>性别：
                        <input type="hidden" id="sexall" value="{{$data['sex']}}">
                        <input type="radio" onclick="sexsex(this.value)" value="0" name="sex" id="sex1" {{$data['sex']==0 ? 'checked' : ''}} style="width: 16px;height: 16px" disabled>男
                        <input type="radio" onclick="sexsex(this.value)" value="1" name="sex" id="sex2" {{$data['sex']==1 ? 'checked' : ''}} style="margin-left: 50px;width: 16px;height: 16px" disabled>女
                    </p>
                    <p>生日：<input type="date" value="{{$data['birthday']}}" id="bir" style="width: 522px;height: 40px;font-size: 18px;padding-left: 10px;border: 1px solid gainsboro" disabled></p>
                    <p>
                        省市：<select name="province" id="province" onchange="provic(this)" style="width: 522px;height: 40px;font-size: 18px;padding-left: 10px ;border: 1px solid gainsboro" id="" disabled></select>
                    </p>
                    <p>
                        地区：<select name="city" id="city" style="width: 522px;height: 40px;font-size: 18px;padding-left: 10px ;border: 1px solid gainsboro" id="" disabled>
                            <option value="">{{$data['city']}}</option>
                        </select>
                    </p>
                    <span style="display:none;text-align:center;line-height:34px;background-color:#69be28;color:#fff;width:100px;height:34px;cursor: hand" id="save" onclick="saved()">保存</span>
                    <span style="display:none;text-align:center;line-height:34px;background-color:#69be28;color:#fff;width:100px;height:34px;cursor: hand" id="cance" onclick="canced()">取消</span>
                </div>
            </li>
            <!--安全设置-->
            <li>
                <div class="li-top">
                    <div class="safe">
                        <p><span class="redSpan" style="margin-right: 100px">登录密码</span> <span class="graySpan" style="margin-right: 100px">修改登录时的密码</span> <span class="blueSpan" onclick="restPw()">重置</span></p>
                        <p><span class="redSpan" style="margin-right: 82px">修改手机号</span> <span class="graySpan" style="margin-right: 82px">修改登录时的手机号</span> <span class="blueSpan" onclick="restTel()">修改</span></p>
                    </div>
                </div>
            </li>
            <!--支付设置-->
            <li>
                <div class="li-top">
                    <p><span class="redSpan" style="margin-right: 100px" >修改支付宝账户</span> <span class="graySpan" style="margin-right: 100px">修改已绑定的支付宝</span> <span class="blueSpan" onclick="restZhiFUBao()">修改</span></p>
                    <p><span class="redSpan" style="margin-right: 119px">修改微信账户</span> <span class="graySpan" style="margin-right: 118px">修改已绑定的微信</span> <span class="blueSpan" onclick="restWeiXin()">修改</span></p>
                </div>
            </li>
        </div>
        <div class="clear"></div>
    </div>
</div>
<script src="reception/js/jquery.1.8.3.js"></script>
<script>
    $.ajax({
        method: 'get',
        url: '/api/china/province',
        data: {
        },
        success: function (data) {
            var pro = $('#phppro').val();
            for (var i =0;i<data.length;i++)
            {
                $('#province').append((data[i]['text']==pro)?'<option'+' selected'+' value='+data[i]['id']+'>'+data[i]['text']+'</option>':'<option'+'tuom value='+data[i]['id']+'>'+data[i]['text']+'</option>');
            }
        }
    });

    $('.o-m .ul-o li').hover(function () {
        var linum = $(this).index()
        $('.o-m .ul-t li').eq(linum).stop().show().siblings().hide()
    })
    $(function () {
        var slip = $('.li-mask');
        var a = $('.o-m .ul-o li:first');
        //初始化滑块
        slip.css({
            'top': parseInt(a.position().top) + 'px'
        });
        $('.o-m .ul-o li').mouseenter(function () {
            //显示滑块
            if (slip.css('display') == 'none') {
                slip.show();
            };
            //移动滑块
            slip.stop().animate({
                top: parseInt($(this).position().top) + 'px'
            }, 300);
        });
    });
    //    重置登录密码
    function  restPw(){
        $('#pw').show();
        $('#cancelPw').click(function () {
            $(this).parent().parent().parent().fadeOut(function () {
                $(this).hide();
            })
        });
    }
    //修改手机号
    function  restTel(){
        $('#tel').show();
        $('#cancelTel').click(function () {
            $(this).parent().parent().parent().fadeOut(function () {
                $(this).hide();
            })
        });
    }
    //修改支付宝
    function  restZhiFUBao(){
        $('#zhiFuBao').show();
        $('#cancelZhiFuBao').click(function () {
            $(this).parent().parent().parent().fadeOut(function () {
                $(this).hide();
            })
        });
    }

    //修改微信号

    function  restWeiXin(){
        $('#weiXin').show();
        $('#cancelWeiXIn').click(function () {
            $(this).parent().parent().parent().fadeOut(function () {
                $(this).hide();
            })
        });
    }

    function provic (a)
    {
        var index = a.selectedIndex+2;

        $.ajax({
            method: 'get',
            url: '/api/china/city',
            data: {
                q:index
            },
            success: function (data) {
                $('#city').html('');
                for (var i =0;i<data.length;i++)
                {
                    $('#city').append('<option>'+data[i]['text']+'</option>');
                }
            }
        });
    }

    function editinfo ()
    {
        $('#name').removeAttr('disabled');
        $('#sex1').removeAttr('disabled');
        $('#sex2').removeAttr('disabled');
        $('#bir').removeAttr('disabled');
        $('#province').removeAttr('disabled');
        $('#city').removeAttr('disabled');
        $('#save').css('display','inline-block');
        $('#cance').css('display','inline-block');
    }

    function saved ()
    {
        $.ajax({
            method: 'post',
            url: '/api/doctor/updateInformation',
            data: {
                name:$('#name').val(),
                sex:$('#sexall').val(),
                birthday:$('#bir').val(),
                sex:$('#sex').val(),
                birthday:$('#birthday').val(),
                province:$('#province').find("option:selected").text(),
                city:$('#city').find("option:selected").text(),
            },
            success: function (data) {
                eval('var res = ' + data);
                if (res['code'] == 200) {
                    $('#name').attr('disabled');
                    $('#sex1').attr('disabled');
                    $('#sex2').attr('disabled');
                    $('#bir').attr('disabled');
                    $('#province').attr('disabled');
                    $('#city').attr('disabled');
                    $('#save').css('display','none');
                    $('#cance').css('display','none');
                } else {

                }
            }
        });
    }

    function sexsex(num)
    {
        $('#sexall').val(num);
    }
</script>
</body>
</html>
@endsection