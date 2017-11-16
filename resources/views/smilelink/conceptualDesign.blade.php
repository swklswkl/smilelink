@extends('smilelink.header')

@section('content')
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>维护方案</title>
    <link rel="stylesheet" href="{{asset('reception/Bootstrap/bootstrap-3.3.7-dist/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('reception/css/casePublic.css')}}">
    <link rel="stylesheet" href="{{asset('reception/css/caseManagement.css')}}">
    <script type="text/javascript" src="{{asset('reception/js/jquery.1.8.3.js')}}"></script>
    <script type="text/javascript" src="{{asset('reception/js/jquery.SuperSlide.2.1.source.js')}}"></script>
</head>
<body>
<style type="text/css">
    /* css 重置 */
    *{margin:0; padding:0; list-style:none; }
    body{ background:#fff; font:normal 16px/20px 微软雅黑;  }
    img{ border:0;  }
    a{ text-decoration:none; color:#333;  }
    a:hover{ color:#1974A1;  }

    .crumbs{margin-top: 20px;margin-bottom: 20px;color:#979797;font-size: 16px }
    /* 本例子css */
    .slideTxtBox{ width:1201px;  text-align:left; border: 1px solid #cccccc;padding: 50px 30px 50px 30px }
    .slideTxtBox .hd{ height:54px; line-height:54px; background:white; padding:0 10px 0 20px;    margin-left: 100px;
        position:relative; }
    .slideTxtBox .hd ul{ float:left;  position:absolute; left:20px; top:-1px;   }
    .slideTxtBox .hd ul li{ float:left; padding:0 30px; cursor:pointer; font-size: 20px;color: #3c3c3c ;border-radius: 16px 16px 0 0;border: 1px  solid #ddd }
    .slideTxtBox .hd ul li.on{ height:55px;   border-bottom:4px solid #69be28; font-size: 20px;color: #5d5d5d;border: 1px  solid #ddd}
    .slideTxtBox .bd ul{   zoom:1;  height: 450px;position: relative;border:1px solid #69be28;border-radius: 20px;padding-left: 50px;padding-top: 40px;    margin-left: 45px;}
    .slideTxtBox .bd ul p{line-height: 30px}
    .slideTxtBox .bd ul p .px16{color:#3c3c3c;font-size: 16px;margin-right: 50px }
    .slideTxtBox .bd ul p .px18{color:#3c3c3c;font-size: 16px }
    .slideTxtBox .bd ul p .green{width: 10px;height: 10px;border-radius: 5px;background: #69be28;display: inline-block;margin-right: 30px}
    .slideTxtBox .bd li{ height:24px; line-height:24px;   }
    .slideTxtBox .bd li .date{ float:right; }
    .slideTxtBox .bd .button1{background: #69be28;border: none;border-radius: 4px;height: 38px;line-height: 38px;font-size: 16px;color: #fff;padding: 0 20px 0 20px;margin-left: 200px;margin-top: 40px}
    .title {background: url("{{url('reception/img/caseWrite.png')}}") no-repeat ;top: 10px;left: 5px;padding-left: 40px;margin-bottom: 20px;font-size: 20px;color: #69be28}
    .buttonBox {text-align: right;position: absolute;bottom: 60px;right: 80px}
    .buttonBox  button{background: #69be28;border: none;height: 38px;line-height: 38px;font-size: 16px;color: #fff;padding: 0 20px 0 20px;margin-right: 20px;}
    .ziZhuBox{margin-top: 20px;margin-bottom: 100px}
    .ziZhuBox .ziZhuBoxL{color: #e56424;float: left;margin-top: 18px}
    .ziZhuBox .ziZhuBoxR{height: 50px;width:100px ;background: #eaeaea;border: #adadad;border-radius: 6px;border:#adadad;text-align: center;line-height: 50px;float:left;position: relative;}
    .ziZhuBox .ziZhuBoxR input{display: inline-block;width: 93px;height: 50px;opacity: 0;position: absolute;top: 1px;left: 1px}
    .program_respone textarea{width: 100%;height: 100%;}
    .program_respone{width: 95%;height: 70%;}
</style>
{{--<header>--}}

    {{--<div class="content">--}}
        {{--<div class="head-L">--}}
            {{--<img src="{{asset('reception/img/bonsmilelogo.png')}}" alt="">--}}
        {{--</div>--}}
        {{--<div class="head-C">--}}
            {{--<span ><a href="#">新建病例</a></span>--}}
            {{--<span ><a href="#">病例管理</a></span>--}}
            {{--<span class="span1"><a href="#">我的订单</a></span>--}}
        {{--</div>--}}
        {{--<div class="head-R">--}}
            {{--<span><a href="#">个人中心</a></span>--}}
            {{--<span class="span2"><a href="#">退出</a></span>--}}
        {{--</div>--}}



    {{--</div>--}}
{{--</header>--}}

<div class=" crumbs">
    <div class="content"><p>病例管理&gt;&gt;维护方案</p></div>

</div>

<div class="content">
    <div class="slideTxtBox" >
        <div  class="title">治疗方案</div>
        <div class="hd">
            <ul id="treatment_title">
                <li class="fangan">治疗方案1</li>
                <li style="border: none;color: #e56424" id="ap" onclick="tianJia()">+添加治疗方案</li>
            </ul>
        </div>
        <div class="bd">
            <!--治疗方案1-->
            <ul >
               {{-- <p><span class="green"></span><span class="px16">2016/1/3</span> <span class="px18">临床医生提交方案</span></p>
                <p><span class="green"></span><span class="px16">2016/1/3</span> <span class="px18">专家指导建议</span></p>
                <p><span class="green"></span><span class="px16">2016/1/3</span> <span class="px18">x光治疗分析</span></p>

                <button type="button" class="button1">查看x光治疗分析</button>--}}
                <div class="program_respone">
                    <textarea></textarea>
                </div>
                <div class="buttonBox">
                    {{--<button type="button">保存</button>--}}
                    <button type="button">提交</button>
                    {{--<button type="button" style="background: white;color: #404040;border: 1px solid #a1a1a1">返回</button>--}}

                </div>

            </ul>

        </div>
        {{--<div  class="ziZhuBox" >--}}
            {{--<div class="ziZhuBoxL" >自主排牙：</div>--}}
            {{--<div class="ziZhuBoxR" > 浏览... <input type="file" >--}}
{{--</div>--}}

        {{--</div>--}}
    </div>
</div>

<script>

    function submitForm()
    {
//        alert($('.form'+a).serialize());
        $.ajax({
            type: 'post',
            url:'{{url('/api/expert/schemeAudit')}}',
            dataType:'json',
            data:$('.form').serialize(),
            success: function(data) {
                console.log(data);
                if (data.code == 200)
                {
                    layer.msg(data.msg);
                } else {
                    layer.msg(data.msg);
                }
            }
        });

    }
    $('.hd li:first').css('border-top','2px solid green');
    var i=2;
    function  tianJia(){
        var content = "<ul >\n" +
            "<div class=\"program_respone\">\n" +
            "<textarea></textarea>\n" +
            "</div>\n" +
            "<div class=\"buttonBox\">\n" +
            "<button type=\"button\">保存</button>\n" +
            "<button type=\"button\">提交</button>\n" +
            "<button type=\"button\" style=\"background: white;color: #404040;border: 1px solid #a1a1a1\">返回</button>\n" +
            "\n" +
            "</div>"
            "</ul> ";
        if(i<6)
        {
            var title='<li class="fangan">治疗方案'+i+'</li>';
            $("ul#treatment_title li:last").prev().after(title);
            $(".bd").append(content);
            i++;
        }
        //tab切换
        $('.bd ul').hide();
        $('.bd ul:first').show();
        $('.hd li').css('border-top','1px solid #ddd');
        $('.hd li:last').css('border-top','none');
        $('.hd li:first').css('border-top','2px solid green');
        $('li.fangan').bind('click',function(){
            $('.bd ul').hide();
            $('.bd ul').eq($(this).index()).show();
            $('.hd li').css('border-top','1px solid #ddd');
            $('.hd li:last').css('border-top','none');
            $('.hd li').eq($(this).index()).css('border-top','2px solid green');
        })
    }
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
</body>
</html>
@endsection