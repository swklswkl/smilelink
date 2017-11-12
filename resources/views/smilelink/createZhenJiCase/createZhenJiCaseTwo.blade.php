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
                <div class="formTop">
                    <span class="s1"> <input name="complained[]" value="1" id="" type="checkbox">牙齿排列不齐（拥挤）</span>
                    <span class="s1"><input name="complained[]" id="" value="2" type="checkbox">牙齿稀疏（间隙）</span>
                    <span class="s1"><input name="complained[]" id="" value="3" type="checkbox">牙齿龅牙（前突）</span>
                    <span class="s1"><input name="complained[]" id="" value="4" type="checkbox">前牙地包天（前牙反咬合）</span>
                </div>

                <div class="formTop">
                    <span class="s5"><input name="complained[]" id="" value="5" type="checkbox">前牙咬合不上（开牙合）</span>
                    <span class="s6"><input name="complained[]" id="" value="6" type="checkbox">前牙咬合过深（深覆合）</span>
                    <span class="s7"><input name="complained[]" id="" value="7" type="checkbox">深覆盖</span>
                    <span class="s8"><input name="complained[]" id="" value="8" type="checkbox">颞下颌关节症状</span>
                </div>



                <p>                其他主诉：
                </p>
                <textarea name="other_complained" id="" cols="30" rows="10"></textarea>

                <div class="part3Title">
                    <span class="span2">Part2</span>
                    <span class="span3">病史（健康信息）</span>
                </div>
                <p>
                    <span>身高：<input name="height" id="" type="text">cm</span>
                    <span>体重：<input name="weight" id="" type="text">kg</span>
                    <span>年龄：<input name="age" id="" type="text">岁</span>

                </p>
                <p>
                    <span>
                                            月经初潮年龄（针对18岁以下女性）：<input name="menarche_age" id="" type="text">岁

                    </span>
                </p>
                <p>  是否有病史：<input name="suffering_from_disease" id="" type="radio" value="0" name="bingShi">否<input name="suffering_from_disease" id="" type="radio" value="1" name="bingShi" style="margin-left: 30px">是
                </p>
                <br>
                <div class="formTop">
                    <span class="s1"> <input name="disease_options[]" value="1" id="" type="checkbox">心脏病</span>
                    <span class="s1"><input name="disease_options[]" value="2" id="" type="checkbox">高血压</span>
                    <span class="s1"><input name="disease_options[]" value="3" id="" type="checkbox">糖尿病</span>
                    <span class="s1"><input name="disease_options[]" value="4" id="" type="checkbox">精神病</span>
                    <span class="s9"><input name="disease_options[]" value="5" id="" type="checkbox">癫痫</span>

                </div>

                <div class="formTop">
                <span class="s10"><input name="disease_options[]" value="6" id="" type="checkbox">肝炎</span>
                <span class="s1"><input name="disease_options[]" value="7" id="" type="checkbox">艾滋病</span>
                <span class="s1"><input name="disease_options[]" value="8" id="" type="checkbox">肺结核</span>
                <span class="s13"><input name="disease_options[]" value="9" id="" type="checkbox">哮喘</span>
                <span class="s1"><input name="disease_options[]" value="10" id="" type="checkbox">血液系统感染</span>

            </div>
                <div class="formTop">
                    <span class="s15"><input name="disease_options[]" value="11" id="" type="checkbox">慢性鼻炎</span>
                    <span class="s16"><input name="disease_options[]" value="12" id="" type="checkbox">鼻甲肥大</span>
                    <span class="s17"><input name="disease_options[]" value="13" id="" type="checkbox">扁桃体肥大</span>
                    <span class="s18"><input name="disease_options[]" value="14" id="" type="checkbox">腺样体肥大</span>
                    <span class="s19"><input name="disease_options[]" value="15" id="" type="checkbox">打鼾</span>

                </div>
                其他主诉：
                <textarea name="other_disease" id="" cols="30" rows="10"></textarea>
                <p>
                    是否对以下各项过敏：<input name="allergy" id="" type="radio" value="0" name="guoMing">否<input name="allergy" id="" type="radio" value="1" name="guoMing" style="margin-left: 30px">是
                </p>

                <span class="s1"> <input name="allergy_options[]" value="1" id="" type="checkbox">青霉素</span>
                <span class="s1"> <input name="allergy_options[]" value="2" id="" type="checkbox">口腔局部麻药</span>
                <span class="s1"> <input name="allergy_options[]" value="3" id="" type="checkbox">金属</span>
                <span class="s1"> <input name="allergy_options[]" value="4" id="" type="checkbox">塑料</span>
                <span class="s1"> <input name="allergy_options[]" value="5" id="" type="checkbox">橡胶</span>
                <p style="margin-top: 20px">近几年是否一直在服用某种药物：<input name="keep_taking_medicine" id="" type="radio" value="0" name="yaoWu">否<input name="keep_taking_medicine" id="" type="radio" value="1" name="yaoWu" style="margin-left: 30px">是</p>

                <p class="grayP">药物名称：</p>
                <textarea name="drugs_name" id="" cols="30" rows="10"></textarea>
                <p>
                    是否准备或正在怀孕或哺乳（女性）：<input name="pregnancy" id="" type="radio" value="0" name="huaiYun">否<input name="pregnancy" id="" type="radio" value="1" name="huaiYun" style="margin-left: 30px">是
                </p>
                <p>
                    患者或患者家属是否能在较长时间。里一直配合医生治疗：<input name=coordination_treatment"" id="" type="radio" value="0" name="peiHe">否<input name="coordination_treatment" id="" type="radio" value="1" name="peiHe" style="margin-left: 30px">是
                </p>
                <p>
                    是否有过牙齿或颌面部外伤伤：<input name="tooth_trauma" id="" type="radio" value="0" name="waiShang">否<input name="tooth_trauma" id="" type="radio" value="1" name="waiShang" style="margin-left: 30px">是
                </p>
                <p>
                    患者的家族成员中是否有类似牙齿错牙合情况：：<input name="tooth_wrong_teeth" id="" type="radio" value="0" name="cuoYa">否<input name="tooth_wrong_teeth" id="" type="radio" value="1" name="cuoYa" style="margin-left: 30px">是
                </p>
                <p>
                    是否有或曾有以下口腔习惯：<input name="oral_cavity_habits" id="" type="radio" value="0" name="yaoWu">否<input name="oral_cavity_habits" id="" type="radio" value="1" name="yaoWu" style="margin-left: 30px">是
                </p>

                    <span class="s1" class="grayP"> <input name="oral_cavity_options[]" value="1" id="" type="checkbox">吮指</span>
                    <span class="s1" class="grayP"> <input name="oral_cavity_options[]" value="2" id="" type="checkbox">咬唇</span>
                    <span class="s1" class="grayP"> <input name="oral_cavity_options[]" value="3" id="" type="checkbox">口呼吸</span>
                    <span class="s1" class="grayP"> <input name="oral_cavity_options[]" value="4" id="" type="checkbox">咬物</span>
                    <span class="s1" class="grayP"> <input name="oral_cavity_options[]" value="5" id="" type="checkbox">偏侧咀嚼</span>
                    <span class="s1" class="grayP"> <input name="oral_cavity_options[]" value="6" id="" type="checkbox">吐舌</span>

                <p style="margin-top: 20px" class="grayP">其他口腔习惯</p>
                <textarea name="other_oral_cavity" id="" cols="30" rows="10"></textarea>
                <p>是否接受过正畸治疗：<input name="orthodontic_treatment" id="" type="radio" value="0" name="zhiLiao">否<input name="orthodontic_treatment" id="" type="radio" value="1" name="zhiLiao" style="margin-left: 30px">是</p>

                <p style="margin-top: 20px">备注：</p>
                <textarea name="orthodontic_treatment_remark" id="" cols="30" rows="10"></textarea>
                <p>患者或家长是否还有担心或要说明的情况：<input name="worry" id="" type="radio" value="0" name="zhiLiao">否<input name="worry" id="" type="radio" value="1" name="zhiLiao" style="margin-left: 30px">是</p>
                <p class="grayP">备注：</p>
                <textarea name="worry_remark" id="" cols="30" rows="10"></textarea>
                <p>
                    其他
                </p>
                <p class="grayP">备注</p>
                <textarea name="other" id="" cols="30" rows="10"></textarea>
                <input type="hidden" name="orthodontics_id" value="{{$_GET['orthodontics_id']}}"/>

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
                window.location.href = "{{url('createZhenJiCaseThree?orthodontics_id=')}}"+data.data;
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
