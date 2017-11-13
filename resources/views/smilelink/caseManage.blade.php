@extends('smilelink.header')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="{{asset('reception/css/casePublic.css')}}">
    <link rel="stylesheet" href="{{asset('reception/css/caseManage.css')}}">
</head>
<body>
<div class="content">
    <!--基本信息-->
    <div class="messageBox">
        <div class="content">
            <p>病例管理>>我的病例</p>
            <div class="messageBorder">
                <div class="messageTop">
                    <div class="message-L">
                        基本信息
                    </div>
                    <div class="message-R">
                        <button>面部照片分析</button>
                        <button>X片分析</button>
                    </div>
                </div>
                <div class="messageBottom">
                    <div class="messageBottom1">
                        病例号：<span id="id">{{$data[0]['id']}}</span>
                    </div>
                    <div class="messageBottom1">
                        患者姓名：<span id="name">{{$data[0]['name']}}</span>
                    </div><div class="messageBottom1">
                    性别：<span id="sex">
                    @if($data[0]['sex']==='0')
                        男
                    @else
                        女
                    @endif
                        </span>
                </div><div class="messageBottom1">
                    出生日期：<span id="birthday">{{$data[0]['birthday']}}</span>
                </div>
                    <div class="messageBottom1">
                        手机号码：<span id="mobilephone">{{$data[0]['mobilephone']}}</span>
                    </div>
                    <div class="messageBottom1">
                        身份证：<span id="id_number">{{$data[0]['id_number']}}</span>
                    </div><div class="messageBottom1">
                    创建日期：<span id="create_time">
                            @if($data[0]['create_time']!=null)
                                {{$data[0]['create_time']}}
                            @endif
                        </span>
                </div><div class="messageBottom1">
                    现居住地址：<span id="address">{{$data[0]['address']}}</span>
                </div>

                </div>
            </div>
        </div>

    </div>
    <!--服务内容-->
    <div class="serverBox">
        <div class="content">
            <div class="server">
                <div class="serverL" id="serverL1">服务内容</div>
                <div class="serverR" id="serverR1">^</div>
            </div>
            <div class="serverCont" id="serverCont1">
                <div class="part1">


                        <div class="part1Cont">

                                <input class="c1 no1" type="checkbox" switch="0" >
                                <input  class="c1 no2" type="checkbox" switch="0" >
                                <input class="c1 no3" type="checkbox" switch="0" >
                                <input  class="c1 no4" type="checkbox" switch="0" >
                                <input class="c1 no5" type="checkbox" switch="0" >



                            <div class="tryBox">
                                <div class="try ">X片分析</div>
                                <div class="try">面部照片分析</div>
                                <div  class="try">正畸档案</div>
                                <div class="try">治疗计划专家指导</div>
                                <div class="try">隐适美矫治方案</div>


                            </div>







                    </div>
                </div>
            </div>

        </div>
    </div>
{{dump($data)}}
    <!--临床资料-->
    <div class="serverBox">
        <div class="content">
            <div class="server">
                <div class="serverL" id="serverL2">临床资料</div>
                <div class="serverR" id="serverR2">^</div>
            </div>
            <div class="serverCont" id="serverCont2">
                <div class="slideTxtBox">
                    <div class="hd">



                        <ul>
                            <li onclick="h(document.getElementById('zs'))">主诉和病史</li><li onclick="h(document.getElementById('tx'))">图像资料</li><li onclick="h(document.getElementById('zlc'))">主临床检查</li><li onclick="h(document.getElementById('xg'))">X片分析</li><li onclick="h(document.getElementById('zd'))">诊断设计</li>

                        </ul>
                    </div>
                    <div class="bd" >
                        <!--主诉和病史-->
                        <ul id="zs">
                            <div class="zhuSu">
                                <div class="zhuSuTitle">
                                    主诉
                                </div>
                                <div class="zhuSuDesc">
                                    <p> <span></span>牙齿排列不齐（拥挤）、牙齿稀疏（间隙）</p>
                                    <p> <span></span>其他主诉：</p>
                                </div>
                                <div class="historyTitle">病史</div>
                                <div class="historyDesc">
                                    <p><span></span>是否患有或曾患有以下疾病：</p>
                                    <p><span></span>是否对以下各项过敏：</p>
                                    <p><span></span>近几年是否一直在服用某种药物：</p>
                                    <p><span></span>是否准备或在怀孕或哺乳（女性）：</p>
                                    <p><span></span>患者或患者家长是否在较长时间里一致配合医生治疗：</p>
                                    <p><span></span>是否有过牙齿或颌面部外伤史：</p>
                                    <p><span></span>患者的家族成员中是否有类似牙齿错牙合情况：</p>
                                    <p><span></span>是否有或曾有以下口腔习惯：</p>
                                    <p><span></span>是否接受过正畸治疗：</p>
                                    <p><span></span>患者或家长是否还有担心或要说明的情况：</p>
                                    <p><span></span>患者或家长是否还有担心或要说明的情况：</p>
                                    <p><span></span>患者或家长是否还有担心或要说明的情况：</p>
                                    <p><span></span>患者或家长是否还有担心或要说明的情况：</p>
                                    <p><span></span>患者或家长是否还有担心或要说明的情况：</p>
                                    <p><span></span>患者或家长是否还有担心或要说明的情况：</p>
                                    <p><span></span>患者或家长是否还有担心或要说明的情况：</p>
                                </div>

                            </div>
                        </ul>
                        <!--图像资料-->
                        <ul id="tx">
                            <div class="imgData">
                                <!--面像照-->
                                <div class="faceImg">
                                    <h3>面像照</h3>
                                    <div class="imgBigBox">
                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{asset('reception/img/形状4.png')}}" alt="">

                                            </div>
                                            <p>正面照</p>
                                        </div>

                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{asset('reception/img/形状4拷贝.png')}}" alt="">

                                            </div>
                                            <p>正面微笑照</p>
                                        </div>

                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{asset('reception/img/形状4.png')}}" alt="">

                                            </div>
                                            <p>侧面照</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="mouseImg">
                                    <h3>口内照</h3>
                                    <div class="imgBigBox">
                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{asset('reception/img/形状4.png')}}" alt="">

                                            </div>

                                            <p>上牙弓像</p>
                                        </div>

                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{asset('reception/img/形状4拷贝5.png')}}" alt="">

                                            </div>
                                            <p>正面咬合向上45度像</p>
                                        </div>

                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{asset('reception/img/形状4.png')}}" alt="">

                                            </div>
                                            <p>下牙弓像</p>
                                        </div>
                                    </div>
                                    <div class="imgBigBox">
                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{asset('reception/img/形状4.png')}}" alt="">

                                            </div>
                                            <p>右咬合像</p>
                                        </div>

                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{asset('reception/img/形状4拷贝5.png')}}" alt="">

                                            </div>
                                            <p>正面咬合像</p>
                                        </div>

                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{asset('reception/img/形状4.png')}}" alt="">

                                            </div>
                                            <p>左咬合像</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="XImg">
                                    <h3>X光片</h3>
                                    <div class="imgBigBox">
                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{asset('reception/img/sfvcdf.png')}}" alt="">

                                            </div>
                                            <p>侧面X光片</p>
                                        </div>

                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{asset('reception/img/sfvcdf.png')}}" alt="">


                                            </div>
                                            <p>全景片</p>
                                        </div>

                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{asset('reception/img/形状4.png')}}" alt="">

                                            </div>
                                            <p>正面X光片</p>
                                        </div>
                                    </div>
                                    <div class="imgBigBox">
                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{asset('reception/img/形状4.png')}}" alt="">

                                            </div>
                                            <p>牙片</p>
                                        </div>

                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{asset('reception/img/形状4拷贝5.png')}}" alt="">

                                            </div>
                                            <p>CBCT关节矢状位</p>
                                        </div>

                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{asset('reception/img/形状4.png')}}" alt="">

                                            </div>
                                            <p>CBCT关节冠状位</p>
                                        </div>
                                    </div>
                                    <div class="imgBigBox">
                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{asset('reception/img/形状4.png')}}" alt="">

                                            </div>
                                            <p>CBCT上前牙牙根</p>
                                        </div>

                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{asset('reception/img/形状4拷贝5.png')}}" alt="">

                                            </div>
                                            <p>CBCT前牙牙根</p>
                                        </div>

                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{asset('reception/img/形状4.png')}}" alt="">

                                            </div>
                                            <p>异常牙</p>
                                        </div>
                                    </div>
                                    <div class="imgBigBox">
                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{asset('reception/img/形状4.png')}}" alt="">

                                            </div>
                                            <p>气道</p>
                                        </div>

                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{asset('reception/img/形状4拷贝5.png')}}" alt="">

                                            </div>
                                            <p>其他</p>
                                        </div>

                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{asset('reception/img/形状4.png')}}" alt="">

                                            </div>
                                            <p>其他</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </ul>
                        <!--主临床检查-->
                        <ul id="zlc">
                            <div class="zhuCheck">

                                <div class="checkTitle">
                                    <h3>面部分析：</h3>
                                </div>
                                <div class="checkCont">
                                    <p><span></span>正面</p>
                                    <p><span></span>侧面</p>
                                </div>

                                <div class="checkTitle">
                                    <h3>牙齿周围：</h3>
                                </div>
                                <div class="checkCont">
                                    <p><span></span>正面</p>
                                   <p> <span></span>侧面</p>
                                </div>

                                <div class="checkTitle">
                                    <h3>牙齿状态：</h3>
                                </div>
                                <div class="checkCont">
                                    <p><span></span>恒牙列</p>
                                    <p>31 32 12 31 32 13 13 13 13 13 12</p>
                                    <p>13 22 31 32 13 13 21 32 13 13 13 </p>
                                    <p><span></span>乳牙列</p>
                                    <p>31 32 12 31 32 13 13 13 13 13 12</p>
                                    <p>13 22 31 32 13 13 21 32 13 13 13 </p>
                                </div>

                                <div class="checkTitle">
                                    <h3>关节检查：</h3>
                                </div>
                                <div class="checkCont">
                                    <p><span></span>开口度：</p>
                                    <p><span></span>开口型：</p>
                                    <p><span></span>弹响：</p>
                                    <p>左侧：</p>
                                    <p>右侧：</p>
                                    <p><span></span>摩擦音</p>

                                    <p>左侧：</p>
                                    <p>右侧：</p>
                                    <p><span></span>疼痛</p>
                                    <p>左侧：</p>
                                    <p>右侧：</p>
                                </div>

                                <div class="checkTitle">
                                    <h3>牙列检查：</h3>
                                </div>
                                <div class="checkCont">
                                    <p><span></span>上下牙弓关系</p>
                                    <p>矢状关系：</p>
                                    <p>垂直关系</p>
                                    <p>横向关系</p>
                                    <p>拥挤度</p>
                                    <p>Bolton指数</p>

                                </div>


                            </div>

                        </ul>
                        <!--X片分析-->
                        <ul id="xg">
                            <div><img src="{{asset('reception/img/曲面断层片.png')}}" alt=""></div>
                        </ul>
                        <!--诊断设计-->
                        <ul id="zd">
                            <div class="zhuSu">
                                <div class="zhuSuTitle">
                                    问题列表
                                </div>
                                <div class="zhuSuDesc">
                                    <p> <span></span>面型：直面型</p>
                                    <p> <span></span>骨性：I类</p>
                                    <p> <span></span>生长型：均角</p>
                                    <p> <span></span>牙性（安氏）：II类I分类亚类</p>
                                    <p> <span></span>前牙覆牙合：深覆牙合II</p>
                                    <p> <span></span>前牙覆盖：深覆盖I</p>
                                    <p> <span></span>拥挤度：上颌2mm 下颌3mm</p>


                                </div>
                                <div class="historyTitle">诊断</div>
                                <div class="historyDesc">
                                    <p><span></span>是否患有或曾患有以下疾病：</p>
                                    <p><span></span>是否对以下各项过敏：</p>
                                    <p><span></span>近几年是否一直在服用某种药物：</p>
                                    <p><span></span>是否准备或在怀孕或哺乳（女性）：</p>
                                    <p><span></span>患者或患者家长是否在较长时间里一致配合医生治疗：</p>
                                    <p><span></span>是否有过牙齿或颌面部外伤史：</p>
                                    <p><span></span>患者的家族成员中是否有类似牙齿错牙合情况：</p>
                                    <p><span></span>是否有或曾有以下口腔习惯：</p>
                                    <p><span></span>是否接受过正畸治疗：</p>
                                    <p><span></span>患者或家长是否还有担心或要说明的情况：</p>






                                </div>

                            </div>
                        </ul>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--治疗方案-->
    <div class="serverBox">
        <div class="content">
            <div class="server">
                <div class="serverL" id="serverL3">治疗方案</div>
                <div class="serverR" id="serverR3">^</div>

            </div>
            <div class="serverCont" id="serverCont3">
               <div class="zhiliaofangan">
                   <div class="fanAn1">
                       <div class="fanAn1Title">
                           <h3>治疗方案1</h3>
                       </div>
                       <div class="fanAn1Cont">
                           <p>第1次内容：<span class="graySpan">（1）无托槽隐形矫治。。。。。。。。。。。</span></p>
                           <p>方案审核：<span class="redSpan">建议修改</span></p>
                           <p>理由：<span>基本同意，需要增加内容。。。</span></p>
                           <p>第2次内容：<span>（1）拔出四颗第三磨牙（2）无托槽隐形矫正。。。。。。。。。。。。。。。</span></p>
                           <p>方案审核：<span class="greenSpan">同意</span></p>
                           <p>目标位审核：<span class="greenSpan" style="margin-right: 20px"> 通过</span><span class="graySpan">2016-03-31</span></p>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </div>
    <!--流程进展-->
    <div class="serverBox">
        <div class="content">
            <div class="server">
                <div class="serverL" id="serverL4">流程进展</div>
                <div class="serverR" id="serverR4">^</div>
            </div>
            <div class="serverCont" id="serverCont4">



                <p><span class="rightSpan"></span><span>2016/03/31</span> <span>方案已提交</span></p>
                <p><span class="rightSpan"></span><span>2016/03/31</span> <span>方案已提交</span></p>

                <div class="wrong">
                    <p  ><span class="wrongSpan"></span><span>2016/03/31</span> <span>方案需修改</span></p>
                    <p class="wrongP">治疗方案未通过：</p>
                </div>
            </div>
        </div>
    </div>
</div>
<<<<<<< HEAD

=======
</body>
</html>
>>>>>>> 307dc6baf60dc9ab49474f3c6acf3a9d1a6ce189
<script src="{{asset('reception/js/jquery.1.8.3.js')}}"></script>
<script src="{{asset('reception/js/jquery.min.js')}}"></script>
<script src="{{asset('reception/js/jquery.SuperSlide.2.1.source.js')}}"></script>
<script>
   /* $.ajax({
        type: 'get',
        url:'{{url('/api/odtcase/inquire')}}',
        dataType:'json',
        data:{orthodontics_id:'{{$_GET['orthodontics_id']}}'},
        success: function(data) {
            console.log(data.data[0]);
            if (data.code == 200)
            {
                var result = data.data[0];
                $.each(result,function(k,v){
                    console.log(k+"--"+v)
                    //患者基本信息
                    $('#'+k).html(v);
                    $('#sex').html(function(){
                        if((k=='sex')&(v==0)){
                            return "男"
                        }else if((k=='sex')&(v==1)){
                            return "女"
                        }
                    });

                })



            }else {
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
    });*/
</script>
<script>
    $('#serverR1').click(function(){
        $('#serverCont1').slideToggle();
    });
    $('#serverR2').click(function(){
        $('#serverCont2').slideToggle();
    });
    $('#serverR3').click(function(){
        $('#serverCont3').slideToggle();
    });
    $('#serverR4').click(function(){
        $('#serverCont4').slideToggle();
    });

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
    jQuery(".slideTxtBox").slide({effect:"fold",trigger:"click"});
    window.onload = function ()
    {
        var odiv = document.getElementsByClassName('bd');
        var hh = $('#zs').height();
        odiv[0].style.height = (hh+100) + 'px';
    }
    function h (h)
    {
        var odiv = document.getElementsByClassName('bd');
        var hh = $(h).height();
//        console.log(hh)
        odiv[0].style.height = (hh+100) + 'px';
    }

</script>
</body>
</html>
@stop