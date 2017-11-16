@extends('smilelink.header')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Title</title>

    <link rel="stylesheet" href="{{asset('reception/css/casePublic.css')}}">
    <link rel="stylesheet" href="{{asset('reception/css/case1.css')}}">
</head>
<body>
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

            <h3><span >|</span>基础服务</h3>
            <div  class="try" style='background: url("reception/img/yes3.png");'>正畸档案</div>
            <h3><span >|</span>影像资料分析</h3>
            <div class="tryBox">
                <input type="checkbox" s="0" zj="0" id="xginput" name="service_id[]" value="3" style="position: absolute;left: 27px;top: 198px;width: 155px;height: 42px;opacity: 0" onclick="dian(this,this.nextElementSibling)">
                <div class="try try0" id="xg">X片分析</div>
                <input type="checkbox" s="0" zj="0" id="mbinput" name="service_id[]" value="4" style="position: absolute;left: 243px;top: 198px;width: 155px;height: 42px;opacity: 0" onclick="dian(this,this.nextElementSibling)">
                <div class="try try1" id="mb">面部照片分析</div>
            </div>

            <h3><span >|</span>专家指导服务</h3>
            <input type="checkbox" id="zjinput" s="0" zj="1" name="service_id[]" value="8" style="position: absolute;left: 27px;top: 318px;width: 155px;height: 42px;opacity: 0" onclick="dian(this,this.nextElementSibling)">
            <div class="try" id="zjzd">治疗计划专家指导</div>
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
                 <p><input name="name" id="" type="text" class="inputLong"></p>
                 <p><input name="sex" id="" type="radio" class="inputChe" value="0" name="sex">男 <input name="sex" id="" type="radio" class="inputChe" name="sex" value="1">女</p>
                 <p><input name="birthday" id="" type="date" class="inputLong" > </p>
                 <p><input name="id_number" id="" type="text" class="inputLong"></p>
                 <p><input name="mobilephone" id="" type="number" class="inputLong"></p>
                <p><input name="address" type="text"></p>
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
                    <span class="s1"> <input name="complained[]" id="" type="checkbox" value="1">牙齿排列不齐（拥挤）</span>
                    <span class="s2"><input name="complained[]" id="" type="checkbox" value="2">牙齿稀疏（间隙）</span>
                    <span class="s3"><input name="complained[]" id="" type="checkbox" value="3">牙齿龅牙（前突）</span>
                    <span class="s4"><input name="complained[]" id="" type="checkbox" value="4">前牙地包天（前牙反咬合）</span>
            </div>

            <div class="formTop">
                <span class="s5"><input name="complained[]" id="" type="checkbox" value="5">前牙咬合不上（开牙合）</span>
                <span class="s6"><input name="complained[]" id="" type="checkbox" value="6">前牙咬合过深（深覆合）</span>
                <span class="s7"><input name="complained[]" id="" type="checkbox" value="7">深覆盖</span>
                <span class="s8"><input name="complained[]" id="" type="checkbox" value="8">颞下颌关节症状</span>
            </div>



                <p>                其他主诉：
                </p>
                <textarea name="other_complained" id="" cols="30" rows="10"></textarea>


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
                        <img src="{{asset('/js/holder.js/200x200?text=暂无图片')}}" alt=""  width="200" height="200px" >

                        <input name="file"  type="file" class="file1"  onchange="c(this)" >
                        <input name="positive_photo" class="imgurl" type="hidden" value=""/>

                    </div>
                    <div class="imgBox-T-C">
                        <img src="{{asset('/js/holder.js/200x200?text=暂无图片')}}" alt=""  width="200" height="200px" >

                        <input name="file"  type="file" class="file2"  onchange="c(this)">
                        <input name="side_photo" class="imgurl" type="hidden" value=""/>

                    </div>
                    <div class="imgBox-T-R">
                        <img src="{{asset('/js/holder.js/200x200?text=暂无图片')}}" alt=""  width="200" height="200px" >

                        <input name="file"  type="file" class="file3"  onchange="c(this)">
                        <input name="positive_smile_photo" class="imgurl" type="hidden" value=""/>
                    </div>
                </div>
                <p> <span style="margin-left: 73px;margin-right: 176px">正面照</span> <span style="margin-left: 30px;margin-right: 50px">侧面照</span> <span style="margin-left: 166px;margin-right: 50px">正面微笑照</span></p>


                <div class="imgBox-C">
                    <div class="imgBox-C-L">
                        <img src="{{asset('/js/holder.js/200x200?text=暂无图片')}}" alt=""  width="200" height="200px" >

                        <input name="file"  type="file" class="file4"   onchange="c(this)">
                        <input name="upper_arch_photo" class="imgurl" type="hidden" value=""/>
                    </div>
                    <div class="imgBox-C-C">
                        <img src="{{asset('/js/holder.js/200x200?text=暂无图片')}}" alt=""  width="200" height="200px" >

                        <input name="file"  type="file" class="file5"  onchange="c(this)">
                        <input name="positive_45_photo" class="imgurl" type="hidden" value=""/>
                    </div>
                    <div class="imgBox-C-R">
                        <img src="{{asset('/js/holder.js/200x200?text=暂无图片')}}" alt=""  width="200" height="200px" >

                        <input name="file"  type="file" class="file6"  onchange="c(this)">
                        <input name="under_arch_photo" class="imgurl" type="hidden" value=""/>
                    </div>
                </div>
                <p>                    <span style="margin-left: 73px;margin-right: 116px">上牙弓照</span> <span style="margin-left: 30px;margin-right: 50px">正面咬合向上45度照</span> <span style="margin-left: 106px;margin-right: 50px">下牙弓照</span>
                </p>



                <div class="imgBox-B">
                    <div class="imgBox-B-L">
                        <img src="{{asset('/js/holder.js/200x200?text=暂无图片')}}" alt=""  width="200" height="200px" >

                        <input name="file"  type="file" class="file7"  onchange="c(this)">
                        <input name="right_bite_photo" class="imgurl" type="hidden" value=""/>
                    </div>
                    <div class="imgBox-B-C">
                        <img src="{{asset('/js/holder.js/200x200?text=暂无图片')}}" alt=""  width="200" height="200px" >

                        <input name="file"  type="file" class="file8"  onchange="c(this)">
                        <input name="positive_bite_photo" class="imgurl" type="hidden" value=""/>
                    </div>
                    <div class="imgBox-B-R">
                        <img src="{{asset('/js/holder.js/200x200?text=暂无图片')}}" alt=""  width="200" height="200px" >

                        <input name="file"  type="file" class="file9"  onchange="c(this)">
                        <input name="left_bite_photo" class="imgurl" type="hidden" value=""/>
                    </div>
                </div>
                <p>                    <span style="margin-left: 73px;margin-right: 176px">右咬合照</span> <span style="margin-left: 30px;margin-right: 50px">正面咬合照</span> <span style="margin-left: 166px;margin-right: 50px">左咬合照</span>
                </p>



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
                        <img src="{{asset('/js/holder.js/200x200?text=暂无图片')}}" alt=""  width="200" height="200px" >

                        <input name="file"  type="file" class="file10"  onchange="c(this)">
                        <input name="side_x_photo" class="imgurl" type="hidden" value=""/>
                    </div>
                    <div class="imgBox-T-C">
                        <img src="{{asset('/js/holder.js/200x200?text=暂无图片')}}" alt=""  width="200" height="200px" >

                        <input name="file"  type="file" class="file11"  onchange="c(this)">
                        <input name="positive_x_photo" class="imgurl" type="hidden" value=""/>
                    </div>
                    <div class="imgBox-T-R">
                        <img src="{{asset('/js/holder.js/200x200?text=暂无图片')}}" alt=""  width="200" height="200px" >

                        <input name="file"  type="file" class="file12"  onchange="c(this)">
                        <input name="tooth_photo" class="imgurl" type="hidden" value=""/>
                    </div>
                </div>
                <p>                    <span style="margin-left: 73px;margin-right: 176px">侧面X照</span> <span style="margin-left: 30px;margin-right: 50px">正面X光照</span> <span style="margin-left: 166px;margin-right: 50px">牙片</span>
                </p>


                <div class="imgBox-C">
                    <div class="imgBox-C-L">
                        <img src="{{asset('/js/holder.js/200x200?text=暂无图片')}}" alt=""  width="200" height="200px" >

                        <input name="file"  type="file" class="file13"  onchange="c(this)">
                        <input name="cbct_joint_sagittal" class="imgurl" type="hidden" value=""/>
                    </div>
                    <div class="imgBox-C-C">
                        <img src="{{asset('/js/holder.js/200x200?text=暂无图片')}}" alt=""  width="200" height="200px" >

                        <input name="file"  type="file" class="file14"  onchange="c(this)">
                        <input name="cbct_coronary_joint" class="imgurl" type="hidden" value=""/>
                    </div>
                    <div class="imgBox-C-R">
                        <img src="{{asset('/js/holder.js/200x200?text=暂无图片')}}" alt=""  width="200" height="200px" >

                        <input name="file"  type="file" class="file15"  onchange="c(this)">
                        <input name="cbct_anterior_teeth" class="imgurl" type="hidden" value=""/>
                    </div>
                </div>
                <p>                    <span style="margin-left: 44px;margin-right: 176px">CBCT关节矢状位</span> <span style="margin-left: -40px;margin-right: 50px">CBCT关节冠状位</span> <span style="margin-left: 88px;margin-right: 50px">CBCT上前牙牙根</span>
                </p>



                <div class="imgBox-B">
                    <div class="imgBox-B-L">
                        <img src="{{asset('/js/holder.js/200x200?text=暂无图片')}}" alt=""  width="200" height="200px" >

                        <input name="file"  type="file" class="file16"  onchange="c(this)">
                        <input name="cbct_under_teeth" class="imgurl" type="hidden" value=""/>
                    </div>
                    <div class="imgBox-B-C">
                        <img src="{{asset('/js/holder.js/200x200?text=暂无图片')}}" alt=""  width="200" height="200px" >
                        <input name="file"  type="file" class="file17"  onchange="c(this)">
                        <input name="abnormal_teeth" class="imgurl" type="hidden" value=""/>
                    </div>
                    <div class="imgBox-B-R">
                        <img src="{{asset('/js/holder.js/200x200?text=暂无图片')}}" alt=""  width="200" height="200px" >
                        <input name="file"  type="file" class="file18"  onchange="c(this)">
                        <input name="air_passage" class="imgurl" type="hidden" value=""/>
                    </div>
                </div>
                <p>                    <span style="margin-left: 73px;margin-right: 100px">CBCT下前牙根</span> <span style="margin-left: 30px;margin-right: 50px">异常牙</span> <span style="margin-left: 166px;margin-right: 50px">气道</span>
                </p>
                <div class="imgBox-B">
                    <div class="imgBox-B-L">
                        <img src="{{asset('/js/holder.js/200x200?text=暂无图片')}}" alt=""  width="200" height="200px" >

                        <input name="file"  type="file" class="file19"  onchange="c(this)">
                        <input name="other" class="imgurl" type="hidden" value="" />
                    </div>

                </div>
                <p>                    <span style="margin-left: 73px;margin-right: 176px">其他照</span>
                </p>



            </div>



        </div>
    </div>

</div>
</form>
<footer>
     <button onclick="submitForm()">下一步 </button>
</footer>

<script src="{{asset('reception/js/jquery.min.js')}}"></script>
<script src="reception/js/layer/2.1/layer.js"></script>
<script src="{{asset('/js/holder.js')}}"></script>

<script>
    var cbtn = document.getElementsByClassName('c1');
    var div = document.getElementsByClassName('try');

    {{--for (var i =0;i<cbtn.length;i++) {--}}
        {{--(function (i) {--}}
            {{--cbtn[i].onclick = function () {--}}
                {{--if (cbtn[i].getAttribute('switch') == '0')--}}
                {{--{--}}
                    {{--div[i].style.background = ' url("{{asset('reception/img/yes3.png')}}")';--}}
                    {{--cbtn[i].setAttribute('switch','1');--}}
                {{--}else {--}}
                    {{--div[i].style.background = '';--}}
                    {{--cbtn[i].setAttribute('switch','0');--}}
                {{--}--}}
            {{--}--}}
        {{--})(i);--}}
    {{--}--}}

    //图片上传
    $('input[name=file]').change(function(){
        var oMyForm = new FormData();
        oMyForm.append("file", $(this)[0].files[0]);
        var objectThis = $(this);
        $.ajax({
            type: 'post',
            url:'{{url('/api/file/upload')}}',
            dataType:'json',
            data:oMyForm,
            processData: false,
            contentType: false,
            async: false,
        }).done(function(res) {
            objectThis.next().val(res.data.image_url);
        }).fail(function(res) {});

    })

    function submitForm()
    {

        $.ajax({
            type: 'post',
            url:'{{url('/api/case/addCaseInformationPage1')}}',
            dataType:'json',
            data:$('.form-horizontal').serialize(),
            success: function(data) {
                var message = '';
                if (data.code == 200)
                {
                    window.location.href = "{{url('caseTwo?orthodontics_id=')}}"+data.data;
                } else if(data.code==401) {
                        $.each(data.msg, function (key, val) {
                            layer.tips(val, '#' + key);
                        })

                }else if(data.code==402){
                        $.each(data.msg,function (k,v) {
                            message += v[0]+'</br>';
                        });
                    layer.msg(message);
                    document.getElementById('layui-layer1').style.top = '300px';
                }

            }
        });

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
//        console.log(img);
        var r= new FileReader();
        f=a.files[0];

        r.readAsDataURL(f);
        r.onload=function  (e) {
            img.src=this.result;

        };
    }

    function dian (dq,next)
    {
        var s = dq.getAttribute('s');
        var zj = dq.getAttribute('zj');
        if (s == 0)
        {
            if (zj==1)
            {
                console.log(1111111);
                dq.setAttribute('s',1);
                next.style.background= 'url("reception/img/yes3.png")';
                document.getElementById('xg').style.background = '';
                document.getElementById('xginput').setAttribute('s',0);
                document.getElementById('xginput').checked = false;
                document.getElementById('mbinput').setAttribute('s',0);
                document.getElementById('mb').style.background = '';
                document.getElementById('mbinput').checked = false;
            }else{
                console.log(2222222);
                dq.setAttribute('s',1);
                next.style.background= 'url("reception/img/yes3.png")';
                document.getElementById('zjinput').setAttribute('s',0);
                document.getElementById('zjzd').style.background = '';
                document.getElementById('zjinput').checked = false;
            }

        }else {
            dq.setAttribute('s',0);
            next.style.background= '';
        }

    }

</script>



</body>
</html>
@stop