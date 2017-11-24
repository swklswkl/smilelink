<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Title</title>

    <link rel="stylesheet" href="{{asset('reception/css/casePublic.css')}}">
    <link rel="stylesheet" href="{{asset('reception/css/createZhenJiCase/createZhenJiCase2.css')}}">
</head>
<body>
<header>
    <div class="content">
        <div class="head-L">
            <img src="{{asset('reception/img/logo0.png')}}" alt="" style="height: 65px">
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



<div class="part3">
    <div class="content">
        <div class="part2Title">
            <img src="{{asset('reception/img/2.png')}}" alt="" >

        </div>

        <div class="part3Cont" id="hidden_enent">
            <div class="part3Title">
                <span class="span2">Part1</span>
                <span class="span3">主诉（就诊原因及目的）</span>
            </div>
            <form class="form-horizontal">
                @isset($data[0])
                <?php $a=explode(',',$data[0]['complained']) ?>
                @endisset
                <div class="formTop">
                    <span class="s1"> <input name="complained[]" value="1" @isset($data[0])  <?php if(in_array('1',$a) ){ ?>checked="checked"<?php } ?> @endisset id="" type="checkbox">牙齿排列不齐（拥挤）</span>
                    <span class="s1"><input name="complained[]" id="" @isset($data[0])  <?php if(in_array('2',$a) ){ ?>checked="checked"<?php } ?> @endisset value="2" type="checkbox">牙齿稀疏（间隙）</span>
                    <span class="s1"><input name="complained[]" id="" @isset($data[0])  <?php if(in_array('3',$a) ){ ?>checked="checked"<?php } ?> @endisset value="3" type="checkbox">牙齿龅牙（前突）</span>
                    <span class="s1"><input name="complained[]" id="chk1" @isset($data[0])  <?php if(in_array('4',$a) ){ ?>checked="checked"<?php } ?> @endisset value="4" type="checkbox"  onClick="sel1(this)">前牙地包天（前牙反咬合）</span>
                </div>

                <div class="formTop">
                    <span class="s5"><input name="complained[]" id="chk2" @isset($data[0])  <?php if(in_array('5',$a) ){ ?>checked="checked"<?php } ?> @endisset value="5" type="checkbox"  onClick="sel2(this)">前牙咬合不上（开牙合）</span>
                    <span class="s6"><input name="complained[]" id="chk11"u @isset($data[0])  <?php if(in_array('6',$a) ){ ?>checked="checked"<?php } ?> @endisset value="6" type="checkbox"  onClick="sel11(this)">前牙咬合过深（深覆合）</span>
                    <span class="s7"><input name="complained[]" id="" @isset($data[0])  <?php if(in_array('7',$a) ){ ?>checked="checked"<?php } ?> @endisset value="7" type="checkbox">深覆盖</span>
                    <span class="s8"><input name="complained[]" id="" @isset($data[0])  <?php if(in_array('8',$a) ){ ?>checked="checked"<?php } ?> @endisset value="8" type="checkbox">颞下颌关节症状</span>
                </div>



                <p>                其他主诉：
                </p>
                <textarea name="other_complained" id="" cols="30" rows="10">@isset($data[0]) {{$data[0]['other_complained']}} @endisset
                </textarea>

                <div class="part3Title">
                    <span class="span2">Part2</span>
                    <span class="span3">病史（健康信息）</span>
                </div>
                <p>
                    <span>身高：<input name="height" id="" value="@isset($data[0]) {{$data[0]['height']}} @endisset" type="text">cm</span>
                    <span>体重：<input name="weight" id="" value="@isset($data[0]) {{$data[0]['weight']}} @endisset" type="text">kg</span>
                    <span>年龄：<input name="age" id="" value="<?=isset($bir[0]) ? substr(date('Y-m-d',time()),0,4) - substr($bir[0]['birthday'],0,4) : $age ?>" type="text">岁</span>
                </p>
                <p>
                    <span>
                                            月经初潮年龄（针对18岁以下女性）：<input value="@isset($data[0]) {{$data[0]['menarche_age']}} @endisset" name="menarche_age" id="" type="text">岁

                    </span>
                </p>
                <p>  是否有病史：<input name="suffering_from_disease" id="" type="radio" value="0" @isset($data[0]) @if($data[0]['suffering_from_disease']==0) checked @endif @endisset name="bingShi">否<input name="suffering_from_disease" id="" @isset($data[0]) @if($data[0]['suffering_from_disease']==1) checked @endif @endisset type="radio" value="1" name="bingShi" style="margin-left: 30px">是
                </p>
                <br>
                    @isset($data[0])
                        <?php $a=explode(',',$data[0]['disease_options']) ?>
                    @endisset
                <div class="formTop">
                    <span class="s1"> <input name="disease_options[]" value="1" @isset($data[0])  <?php if(in_array('1',$a) ){ ?>checked="checked"<?php } ?> @endisset id="" type="checkbox">心脏病</span>
                    <span class="s1"><input name="disease_options[]" value="2" @isset($data[0])  <?php if(in_array('2',$a) ){ ?>checked="checked"<?php } ?> @endisset id="" type="checkbox">高血压</span>
                    <span class="s1"><input name="disease_options[]" value="3" @isset($data[0])  <?php if(in_array('3',$a) ){ ?>checked="checked"<?php } ?> @endisset id="" type="checkbox">糖尿病</span>
                    <span class="s1"><input name="disease_options[]" value="4" @isset($data[0])  <?php if(in_array('4',$a) ){ ?>checked="checked"<?php } ?> @endisset id="" type="checkbox">精神病</span>
                    <span class="s9"><input name="disease_options[]" value="5" @isset($data[0])  <?php if(in_array('5',$a) ){ ?>checked="checked"<?php } ?> @endisset id="" type="checkbox">癫痫</span>

                </div>

                <div class="formTop">
                <span class="s10"><input name="disease_options[]" value="6" @isset($data[0])  <?php if(in_array('6',$a) ){ ?>checked="checked"<?php } ?> @endisset id="" type="checkbox">肝炎</span>
                <span class="s1"><input name="disease_options[]" value="7" @isset($data[0])  <?php if(in_array('7',$a) ){ ?>checked="checked"<?php } ?> @endisset id="" type="checkbox">艾滋病</span>
                <span class="s1"><input name="disease_options[]" value="8" @isset($data[0])  <?php if(in_array('8',$a) ){ ?>checked="checked"<?php } ?> @endisset id="" type="checkbox">肺结核</span>
                <span class="s13"><input name="disease_options[]" value="9" @isset($data[0])  <?php if(in_array('9',$a) ){ ?>checked="checked"<?php } ?> @endisset id="" type="checkbox">哮喘</span>
                <span class="s1"><input name="disease_options[]" value="10" @isset($data[0])  <?php if(in_array('10',$a) ){ ?>checked="checked"<?php } ?> @endisset id="" type="checkbox">血液系统感染</span>

            </div>
                <div class="formTop">
                    <span class="s15"><input name="disease_options[]" value="11" @isset($data[0])  <?php if(in_array('11',$a) ){ ?>checked="checked"<?php } ?> @endisset id="" type="checkbox">慢性鼻炎</span>
                    <span class="s16"><input name="disease_options[]" value="12" @isset($data[0])  <?php if(in_array('12',$a) ){ ?>checked="checked"<?php } ?> @endisset id="" type="checkbox">鼻甲肥大</span>
                    <span class="s17"><input name="disease_options[]" value="13" @isset($data[0])  <?php if(in_array('13',$a) ){ ?>checked="checked"<?php } ?> @endisset id="" type="checkbox">扁桃体肥大</span>
                    <span class="s18"><input name="disease_options[]" value="14" @isset($data[0])  <?php if(in_array('14',$a) ){ ?>checked="checked"<?php } ?> @endisset id="" type="checkbox">腺样体肥大</span>
                    <span class="s19"><input name="disease_options[]" value="15" @isset($data[0])  <?php if(in_array('15',$a) ){ ?>checked="checked"<?php } ?> @endisset id="" type="checkbox">打鼾</span>

                </div>
                其他主诉：
                <textarea name="other_disease"  id="" cols="30" rows="10">@isset($data[0]) {{$data[0]['other_disease']}} @endisset</textarea>
                <p>
                    是否对以下各项过敏：<input name="allergy" id="" type="radio" value="0"  @isset($data[0]) @if($data[0]['allergy']==0) checked @endif @endisset name="guoMing">否<input name="allergy" id="" type="radio" value="1"  @isset($data[0]) @if($data[0]['allergy']==1) checked @endif @endisset name="guoMing" style="margin-left: 30px">是
                </p>
                    @isset($data[0])
                        <?php $a=explode(',',$data[0]['allergy_options']) ?>
                    @endisset
                <span class="s1"> <input name="allergy_options[]"  @isset($data[0])  <?php if(in_array('1',$a) ){ ?>checked="checked"<?php } ?> @endisset value="1" id="" type="checkbox">青霉素</span>
                <span class="s1"> <input name="allergy_options[]" value="2" id=""  @isset($data[0])  <?php if(in_array('2',$a) ){ ?>checked="checked"<?php } ?> @endisset type="checkbox">口腔局部麻药</span>
                <span class="s1"> <input name="allergy_options[]" value="3" id=""  @isset($data[0])  <?php if(in_array('3',$a) ){ ?>checked="checked"<?php } ?> @endisset type="checkbox">金属</span>
                <span class="s1"> <input name="allergy_options[]" value="4" id=""  @isset($data[0])  <?php if(in_array('4',$a) ){ ?>checked="checked"<?php } ?> @endisset type="checkbox">塑料</span>
                <span class="s1"> <input name="allergy_options[]" value="5" id=""  @isset($data[0])  <?php if(in_array('5',$a) ){ ?>checked="checked"<?php } ?> @endisset type="checkbox">橡胶</span>
                <p style="margin-top: 20px">近几年是否一直在服用某种药物：<input name="keep_taking_medicine" id="" type="radio" value="0" @isset($data[0]) @if($data[0]['keep_taking_medicine']==0) checked @endif @endisset name="yaoWu">否<input name="keep_taking_medicine" id="" type="radio" value="1" @isset($data[0]) @if($data[0]['keep_taking_medicine']==1) checked @endif @endisset name="yaoWu" style="margin-left: 30px">是</p>

                <p class="grayP">药物名称：</p>
                <textarea name="drugs_name" id=""  cols="30" rows="10">@isset($data[0]) {{$data[0]['drugs_name']}} @endisset</textarea>
                <p>
                    是否准备或正在怀孕或哺乳（女性）：<input name="pregnancy" id="" type="radio" value="0"  @isset($data[0]) @if($data[0]['pregnancy']==0) checked @endif @endisset name="huaiYun">否<input name="pregnancy" id="" type="radio" value="1"  @isset($data[0]) @if($data[0]['pregnancy']==1) checked @endif @endisset name="huaiYun" style="margin-left: 30px">是
                </p>
                <p>
                    患者或患者家属是否能在较长时间。里一直配合医生治疗：<input name=coordination_treatment"" id="" type="radio" value="0" @isset($data[0]) @if($data[0]['coordination_treatment']==0) checked @endif @endisset name="peiHe">否<input name="coordination_treatment" id="" type="radio" value="1" @isset($data[0]) @if($data[0]['coordination_treatment']==1) checked @endif @endisset name="peiHe" style="margin-left: 30px">是
                </p>
                <p>
                    是否有过牙齿或颌面部外伤伤：<input name="tooth_trauma" id="" type="radio" value="0" @isset($data[0]) @if($data[0]['tooth_trauma']==0) checked @endif @endisset name="waiShang">否<input name="tooth_trauma" id="" type="radio" value="1" @isset($data[0]) @if($data[0]['tooth_trauma']==1) checked @endif @endisset name="waiShang" style="margin-left: 30px">是
                </p>
                <p>
                    患者的家族成员中是否有类似牙齿错牙合情况：：<input name="tooth_wrong_teeth" id="" type="radio" value="0" @isset($data[0]) @if($data[0]['tooth_wrong_teeth']==0) checked @endif @endisset name="cuoYa">否<input name="tooth_wrong_teeth" id="" type="radio" value="1" @isset($data[0]) @if($data[0]['tooth_wrong_teeth']==1) checked @endif @endisset name="cuoYa" style="margin-left: 30px">是
                </p>
                <p>
                    是否有或曾有以下口腔习惯：<input name="oral_cavity_habits" id="" type="radio" @isset($data[0]) @if($data[0]['oral_cavity_habits']==0) checked @endif @endisset value="0" name="yaoWu">否<input name="oral_cavity_habits" id="" type="radio" value="1" @isset($data[0]) @if($data[0]['oral_cavity_habits']==1) checked @endif @endisset name="yaoWu" style="margin-left: 30px">是
                </p>
                    @isset($data[0])
                        <?php $a=explode(',',$data[0]['oral_cavity_options']) ?>
                    @endisset
                    <span class="s1" class="grayP"> <input name="oral_cavity_options[]"  @isset($data[0])  <?php if(in_array('1',$a) ){ ?>checked="checked"<?php } ?> @endisset value="1" id="" type="checkbox">吮指</span>
                    <span class="s1" class="grayP"> <input name="oral_cavity_options[]"  @isset($data[0])  <?php if(in_array('2',$a) ){ ?>checked="checked"<?php } ?> @endisset value="2" id="" type="checkbox">咬唇</span>
                    <span class="s1" class="grayP"> <input name="oral_cavity_options[]"  @isset($data[0])  <?php if(in_array('3',$a) ){ ?>checked="checked"<?php } ?> @endisset value="3" id="" type="checkbox">口呼吸</span>
                    <span class="s1" class="grayP"> <input name="oral_cavity_options[]"  @isset($data[0])  <?php if(in_array('4',$a) ){ ?>checked="checked"<?php } ?> @endisset value="4" id="" type="checkbox">咬物</span>
                    <span class="s1" class="grayP"> <input name="oral_cavity_options[]"  @isset($data[0])  <?php if(in_array('5',$a) ){ ?>checked="checked"<?php } ?> @endisset value="5" id="" type="checkbox">偏侧咀嚼</span>
                    <span class="s1" class="grayP"> <input name="oral_cavity_options[]"  @isset($data[0])  <?php if(in_array('6',$a) ){ ?>checked="checked"<?php } ?> @endisset value="6" id="" type="checkbox">吐舌</span>

                <p style="margin-top: 20px" class="grayP">其他口腔习惯</p>
                <textarea name="other_oral_cavity" id="" cols="30" rows="10">@isset($data[0]) {{$data[0]['other_oral_cavity']}} @endisset</textarea>
                <p>是否接受过正畸治疗：<input name="orthodontic_treatment" id="" type="radio" @isset($data[0]) @if($data[0]['orthodontic_treatment']==0) checked @endif @endisset value="0" name="zhiLiao">否<input name="orthodontic_treatment" id="" type="radio" value="1" @isset($data[0]) @if($data[0]['orthodontic_treatment']==1) checked @endif @endisset name="zhiLiao" style="margin-left: 30px">是</p>

                <p style="margin-top: 20px">备注：</p>
                <textarea name="orthodontic_treatment_remark" id="" cols="30" rows="10">@isset($data[0]) {{$data[0]['orthodontic_treatment_remark']}} @endisset</textarea>
                <p>患者或家长是否还有担心或要说明的情况：<input name="worry" id="" type="radio" @isset($data[0]) @if($data[0]['worry']==0) checked @endif @endisset value="0" name="zhiLiao">否<input name="worry" id="" type="radio" @isset($data[0]) @if($data[0]['worry']==1) checked @endif @endisset value="1" name="zhiLiao" style="margin-left: 30px">是</p>
                <p class="grayP">备注：</p>
                <textarea name="worry_remark" id="" cols="30" rows="10">@isset($data[0]) {{$data[0]['worry_remark']}} @endisset</textarea>
                <p>
                    其他
                </p>
                <p class="grayP">备注</p>
                <textarea name="other" id="" cols="30" rows="10">@isset($data[0]) {{$data[0]['other']}} @endisset</textarea>
                <input type="hidden" name="orthodontics_id" value="{{$_GET['orthodontics_id']}}"/>
                @isset($data[0])
                    <input name="edit" type="hidden" value="1"/>
                @endisset

            </form>
            <div class="button1">
                {{--<a href=""> <button>上一步 </button></a>--}}
                <a> <button onclick="submitForm()" type="button">下一步 </button></a>


            </div>
        </div>
    </div>
</div>
<script src="{{asset('reception/js/jquery.min.js')}}"></script>
<script src="{{asset('reception/js/layer/2.1/layer.js')}}"></script>
<script>
    function submitForm()
    {
        $.ajax({
        type: 'post',
        url:'{{url('/api/odtcase/addChiefAndComplaint')}}',
        dataType:'json',
        data:$('.form-horizontal').serialize(),
        success: function(data) {
            console.log(data);
            if (data.code == 200)
            {
                @empty($data[0])
                    window.location.href = "{{url('createZhenJiCaseThree?orthodontics_id=')}}"+data.data;
                @endempty
                        @isset($data[0])
                    window.location.href = "{{url('editCase3?orthodontics_id=').$_GET['orthodontics_id']}}";
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
    function sel1(obj){
        if(obj.checked){
            document.all.chk2.checked=false
        }
    }
    function sel2(obj){
        if(obj.checked){
            document.all.chk1.checked=false;
            document.all.chk11.checked=false
        }
    }
    function sel11(obj){
        if(obj.checked){
            document.all.chk2.checked=false
        }
    }

</script>
</body>
</html>
