<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Title</title>

    <link rel="stylesheet" href="{{asset('reception/css/casePublic.css')}}">
    <link rel="stylesheet" href="{{asset('reception/css/case1.css')}}">
</head>
<body>
<header>
    <div class="content">
        <div class="head-L">
            <img src="{{asset('reception/img/bonsmilelogo.png')}}" alt="">
        </div>
        <div class="head-C">
            <span class="span1"><a href="#">新建病例</a></span>
            <span><a href="#">病例管理</a></span>
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
<form class="form-horizontal"  action="">
<div class="part1">
    <div class="content">
        <div class="part1Title">
            <span class="span2">Part1</span>
            <span class="span3">服务内容</span>
            <span class="span4">（请点击选择）</span>
        </div>
        <div class="part1Cont">

                <input name="" id=""  value="1" class="c1 no1" type="checkbox" switch="0" >
                <input name="" id=""  value="2" class="c1 no2" type="checkbox" switch="0" >
                <input name="" id="" value="3" class="c1 no3" type="checkbox" switch="0" >
                <input name="" id="" value="4"  class="c1 no4" type="checkbox" switch="0" >

            <h3><span >|</span>基础服务</h3>
            <div  class="try">正畸档案</div>
            <h3><span >|</span>影像资料分析</h3>
            <div class="tryBox">
                <div class="try try0">X片分析</div>
                <div class="try try1">面部照片分析</div>
            </div>

            <h3><span >|</span>专家指导服务</h3>
            <div class="try">治疗计划专家指导</div>
            <p>&gt;&gt;面部照片分析、X片测量分析、专家建议、病例报告</p>
        </div>
    </div>
</div>
<div class="part2">
    <div class="content">
        <div class="part2Title">
            <span class="span2">Part2</span>
            <span class="span3">基本信息</span>
        </div>
        <div class="part2Cont">

                <div class="part2-L">
                <p>患者姓名：</p>
                    <p>性别：</p>
                    <p>出生年月日：</p>
                    <p style="margin-top: 18px">身份证号码：</p>
                    <p style="margin-top: 18px">手机号：</p>
                    <p style="margin-top: 18px">现居住地：</p>
                </div>
             <div class="part2-R">
                 <p><input name="" id="" type="text" class="inputLong"></p>
                 <p><input name="" id="" type="radio" class="inputChe" value="0" name="sex">男 <input name="" id="" type="radio" class="inputChe" name="sex" value="1">女</p>
                 <p><input name="" id="" type="date" class="inputLong" > </p>
                 <p><input name="" id="" type="text" class="inputLong"></p>
                 <p><input name="" id="" type="number" class="inputLong"></p>

             </div>



        </div>
    </div>
</div>
<div class="part3">
    <div class="content">
        <div class="part3Title">
            <span class="span2">Part3</span>
            <span class="span3">临床资料</span>
        </div>
        <div class="part3Text">
            <span>*</span>主诉
            <div class="sel" id="click_event">^</div>
        </div>

        <div class="part3Cont" id="hidden_enent">


                <div class="formTop">
                    <span class="s1"> <input name="" id="" type="checkbox">牙齿排列不齐（拥挤）</span>
                    <span class="s2"><input name="" id="" type="checkbox">牙齿稀疏（间隙）</span>
                    <span class="s3"><input name="" id="" type="checkbox">牙齿龅牙（前突）</span>
                    <span class="s4"><input name="" id="" type="checkbox">前牙地包天（前牙反咬合）</span>
            </div>

            <div class="formTop">
                <span class="s5"><input name="" id="" type="checkbox">前牙咬合不上（开牙合）</span>
                <span class="s6"><input name="" id="" type="checkbox">前牙咬合过深（深覆合）</span>
                <span class="s7"><input name="" id="" type="checkbox">深覆盖</span>
                <span class="s8"><input name="" id="" type="checkbox">颞下颌关节症状</span>
            </div>



                <p>                其他主诉：
                </p>
                <textarea name="" id="" cols="30" rows="10"></textarea>


        </div>
    </div>
</div>
<div class="part4">
    <div class="content">
        <div class="part4Title">
            <span class="span2">Part4</span>
            <span class="span3">上传资料照片</span>
        </div>
        <div class="part4Text">
            照片
            <div class="sel" id="click_event1">^</div>
        </div>

        <div class="part4Cont" id="hidden_enent1">




                <div class="imgBox">
                    <div class="imgBox-T">
                        <div class="imgBox-T-L">
                            <img src="{{asset('reception/holder.js/200x200?text=暂无图片')}}" alt=""  width="200" height="200px" >
                            <input name="" id="" type="file" class="file1"  onchange="c(this)" >

                        </div>
                        <div class="imgBox-T-C">
                            <img src="{{asset('reception/holder.js/200x200?text=暂无图片')}}" alt=""  width="200" height="200px" >
                            <input name="" id="" type="file" class="file2"  onchange="c(this)">

                        </div>
                        <div class="imgBox-T-R">
                            <img src="{{asset('reception/holder.js/200x200?text=暂无图片')}}" alt=""  width="200" height="200px" >
                            <input name="" id="" type="file" class="file3"  onchange="c(this)">
                        </div>
                    </div>
                    <p><span>第一排</span></p>
                    <div class="imgBox-C">
                        <div class="imgBox-C-L">
                            <img src="{{asset('reception/holder.js/200x200?text=暂无图片')}}" alt=""  width="200" height="200px" >
                            <input name="" id="" type="file" class="file4"  onchange="c(this)">
                        </div>
                        <div class="imgBox-C-C">
                            <img src="{{asset('reception/holder.js/200x200?text=暂无图片')}}" alt=""  width="200" height="200px" >
                            <input name="" id="" type="file" class="file5"  onchange="c(this)">
                        </div>
                        <div class="imgBox-C-R">
                            <img src="{{asset('reception/holder.js/200x200?text=暂无图片')}}" alt=""  width="200" height="200px" >
                            <input name="" id="" type="file" class="file6"  onchange="c(this)">
                        </div>
                    </div>
                    <p><span>第二排</span></p>

                    <div class="imgBox-B">
                        <div class="imgBox-B-L">
                            <img src="{{asset('reception/holder.js/200x200?text=暂无图片')}}" alt=""  width="200" height="200px" >
                            <input name="" id="" type="file" class="file7"  onchange="c(this)">
                        </div>
                        <div class="imgBox-B-C">
                            <img src="{{asset('reception/holder.js/200x200?text=暂无图片')}}" alt=""  width="200" height="200px" >
                            <input name="" id="" type="file" class="file8"  onchange="c(this)">
                        </div>
                        <div class="imgBox-B-R">
                            <img src="{{asset('reception/holder.js/200x200?text=暂无图片')}}" alt=""  width="200" height="200px" >
                            <input name="" id="" type="file" class="file9"  onchange="c(this)">
                        </div>
                    </div>
                    <p><span>第三排</span></p>

                </div>



        </div>

        <!--------------->

        <div class="part4Text">
            X光照
            <div class="sel" id="click_event2">^</div>
        </div>

        <div class="part4Cont" id="hidden_enent2">




                <div class="imgBox">
                    <div class="imgBox-T">
                        <div class="imgBox-T-L">
                            <img src="{{asset('reception/holder.js/200x200?text=暂无图片')}}" alt=""  width="200" height="200px" >
                            <input name="" id="" type="file" class="file1"  onchange="c(this)">
                        </div>
                        <div class="imgBox-T-C">
                            <img src="{{asset('reception/holder.js/200x200?text=暂无图片')}}" alt=""  width="200" height="200px" >
                            <input name="" id="" type="file" class="file2"  onchange="c(this)">
                        </div>
                        <div class="imgBox-T-R">
                            <img src="{{asset('reception/holder.js/200x200?text=暂无图片')}}" alt=""  width="200" height="200px" >
                            <input name="" id="" type="file" class="file3"  onchange="c(this)">
                        </div>
                    </div>
                    <p><span>第一排</span></p>
                    <div class="imgBox-C">
                        <div class="imgBox-C-L">
                            <img src="{{asset('reception/holder.js/200x200?text=暂无图片')}}" alt=""  width="200" height="200px" >
                            <input name="" id="" type="file" class="file4"  onchange="c(this)">
                        </div>
                        <div class="imgBox-C-C">
                            <img src="{{asset('reception/holder.js/200x200?text=暂无图片')}}" alt=""  width="200" height="200px" >
                            <input name="" id="" type="file" class="file5"  onchange="c(this)">
                        </div>
                        <div class="imgBox-C-R">
                            <img src="{{asset('reception/holder.js/200x200?text=暂无图片')}}" alt=""  width="200" height="200px" >
                            <input name="" id="" type="file" class="file6"  onchange="c(this)">
                        </div>
                    </div>
                    <p><span>第二排</span></p>

                    <div class="imgBox-B">
                        <div class="imgBox-B-L">
                            <img src="{{asset('reception/holder.js/200x200?text=暂无图片')}}" alt=""  width="200" height="200px" >
                            <input name="" id="" type="file" class="file7"  onchange="c(this)">
                        </div>
                        <div class="imgBox-B-C">
                            <img src="{{asset('reception/holder.js/200x200?text=暂无图片')}}" alt=""  width="200" height="200px" >
                            <input name="" id="" type="file" class="file8"  onchange="c(this)">
                        </div>
                        <div class="imgBox-B-R">
                            <img src="{{asset('reception/holder.js/200x200?text=暂无图片')}}" alt=""  width="200" height="200px" >
                            <input name="" id="" type="file" class="file9"  onchange="c(this)">
                        </div>
                    </div>
                    <p><span>第三排</span></p>

                </div>



        </div>
    </div>

</div>
</form>
<footer>
    <a href="{{url('caseTwo')}}"> <button>下一步 </button></a>
</footer>

<script src="{{asset('reception/js/jquery.min.js')}}"></script>
<script src="{{asset('reception/js/holder.min.js')}}"></script>

<script>
    var cbtn = document.getElementsByClassName('c1');
    var div = document.getElementsByClassName('try');

    for (var i =0;i<cbtn.length;i++) {
        (function (i) {
            cbtn[i].onclick = function () {
                if (cbtn[i].getAttribute('switch') == '0')
                {
                    div[i].style.background = ' url("{{asset('reception/img/yes3.png')}}")';
                    cbtn[i].setAttribute('switch','1');
                }else {
                    div[i].style.background = '';
                    cbtn[i].setAttribute('switch','0');
                }
            }
        })(i);
    }




    $('#click_event').click(function(){
        $('#hidden_enent').slideToggle();
    })

;
    $('#click_event1').click(function(){
        $('#hidden_enent1').slideToggle();
    })
    ;
    $('#click_event2').click(function(){
        $('#hidden_enent2').slideToggle();
    });

    function c (a) {
        var img = a.previousElementSibling;
        console.log(img);
        var r= new FileReader();
        f=a.files[0];

        r.readAsDataURL(f);
        r.onload=function  (e) {
            img.src=this.result;

        };
    }



</script>



</body>
</html>
