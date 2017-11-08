<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="{{asset('reception/js/jquery.min.js')}}"></script>
    <style>
        .bg{background: rgba(0,0,0,.5);height: 1000px;position: relative}
        .box{background: white;text-align: center;border-radius:10px;width: 450px;padding-bottom: 40px ;
            position: absolute;left: 50%;top: 50%;margin-left: -225px;margin-top: -164px;display: none}
        .img{padding-top: 40px;margin-bottom: 20px}
        .box h3{margin-bottom: 30px;}
        .box span{color: #ff0000}
    </style>
</head>
<body>
<div class="bg">
    <div class="box" id="addBox">
        <div class="img">
            <img src="{{asset('reception/img/yes.png')}}" alt="">
        </div>
        <h3>恭喜你,注册成功！</h3>
        <p><span id="time"></span><span>秒</span>后自动跳转到登录页面</p>
    </div>
</div>
<script>
    setTimeout(function(){
        $('#addBox').show(); //将DIV标签显示出来。
        setTimeout(function(){
            $('#addBox').hide(); //将DIV标签隐藏。
        }, 3000);
    }, 1000);
    var i = 3;
    var timer = setInterval(function(){
        if(i== -1){
            clearInterval(timer);
        }else{
            document.getElementById('time').innerHTML = i;
            --i;
        }
    },1000);
</script>
</body>
</html>
