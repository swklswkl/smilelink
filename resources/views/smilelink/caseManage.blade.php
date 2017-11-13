
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="{{asset('reception/css/casePublic.css')}}">
    <link rel="stylesheet" href="{{asset('reception/css/caseManage.css')}}">
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
                                    <p> <span></span>
                                        <?php
                                        $a=explode(',',$data[0]['orthodontics_chief_complaint']['complained']) ;
//                                        dump(count($a));die;
                                        for($i=0;$i<count($a);$i++){
                                            switch ($a[$i]){
                                                case 1:
                                                    echo "牙齿排列不齐&ensp;";
                                                    break;
                                                case 2:
                                                    echo "牙齿稀疏&ensp;";
                                                    break;
                                                case 3:
                                                    echo "牙齿龅牙&ensp;";
                                                    break;
                                                case 4:
                                                    echo "牙齿地包天&ensp;";
                                                    break;
                                                case 5:
                                                    echo "前牙咬合不上&ensp;";
                                                    break;
                                                case 6:
                                                    echo "前牙咬合过深&ensp;";
                                                    break;
                                                case 7:
                                                    echo "深覆盖&ensp;";
                                                    break;
                                                case 8:
                                                    echo "颞下颌关节症状&ensp;";
                                                    break;
                                                default:
                                                    echo "&ensp;";
                                                    break;
                                            }
                                        }
                                        ?>
                                    </p>
                                    <p> <span></span>其他主诉：{{$data[0]['orthodontics_chief_complaint']['other_complained']}}</p>
                                </div>
                                <div class="historyTitle">病史</div>
                                <div class="historyDesc">
                                    <p><span></span>是否患有或曾患有以下疾病：
                                        @if($data[0]['orthodontics_chief_complaint']['suffering_from_disease']=='1')
                                            是
                                            @else
                                            否
                                        @endif
                                        <br/>
                                        <?php
                                        $a=explode(',',$data[0]['orthodontics_chief_complaint']['disease_options']) ;
                                        //                                        dump(count($a));die;
                                        for($i=0;$i<count($a);$i++){
                                            switch ($a[$i]){
                                                case 1:
                                                    echo "心脏病&ensp;";
                                                    break;
                                                case 2:
                                                    echo "高血压&ensp;";
                                                    break;
                                                case 3:
                                                    echo "糖尿病&ensp;";
                                                    break;
                                                case 4:
                                                    echo "精神病&ensp;";
                                                    break;
                                                case 5:
                                                    echo "癫痫&ensp;";
                                                    break;
                                                case 6:
                                                    echo "肝炎&ensp;";
                                                    break;
                                                case 7:
                                                    echo "艾滋病&ensp;";
                                                    break;
                                                case 8:
                                                    echo "肺结核&ensp;";
                                                    break;
                                                case 9:
                                                    echo "哮喘&ensp;";
                                                    break;
                                                case 10:
                                                    echo "血液系统疾病&ensp;";
                                                    break;
                                                case 11:
                                                    echo "慢性鼻炎&ensp;";
                                                    break;
                                                case 12:
                                                    echo "鼻甲肥大&ensp;";
                                                    break;
                                                case 13:
                                                    echo "扁桃体肥大&ensp;";
                                                    break;
                                                case 14:
                                                    echo "腺样体肥大&ensp;";
                                                    break;
                                                case 15:
                                                    echo "腺样体肥大&ensp;";
                                                    break;
                                                default:
                                                    echo "&ensp;";
                                                    break;
                                            }
                                        }
                                        ?>
                                        &ensp;{{$data[0]['orthodontics_chief_complaint']['other_disease']}}
                                    </p>
                                    <p><span></span>是否对以下各项过敏：
                                        @if($data[0]['orthodontics_chief_complaint']['allergy']=='1')
                                            是
                                        @else
                                            否
                                        @endif
                                        <br/>
                                        <?php
                                        $a=explode(',',$data[0]['orthodontics_chief_complaint']['allergy_options']) ;
                                        //                                        dump(count($a));die;
                                        for($i=0;$i<count($a);$i++){
                                            switch ($a[$i]){
                                                case 1:
                                                    echo "青霉素&ensp;";
                                                    break;
                                                case 2:
                                                    echo "口腔局麻药&ensp;";
                                                    break;
                                                case 3:
                                                    echo "金属&ensp;";
                                                    break;
                                                case 4:
                                                    echo "塑料&ensp;";
                                                    break;
                                                case 5:
                                                    echo "橡胶&ensp;";
                                                    break;
                                                default:
                                                    echo "&ensp;";
                                                    break;
                                            }
                                        }
                                        ?>
                                        &ensp;{{$data[0]['orthodontics_chief_complaint']['other_allergy']}}
                                    </p>
                                    <p><span></span>近几年是否一直在服用某种药物：
                                        @if($data[0]['orthodontics_chief_complaint']['keep_taking_medicine']=='1')
                                            是
                                        @else
                                            否
                                        @endif
                                        <br/>
                                        &ensp;{{$data[0]['orthodontics_chief_complaint']['drugs_name']}}
                                    </p>
                                    <p><span></span>是否准备或在怀孕或哺乳（女性）：
                                        @if($data[0]['orthodontics_chief_complaint']['pregnancy']=='1')
                                            是
                                        @else
                                            否
                                        @endif
                                    </p>
                                    <p><span></span>患者或患者家长是否在较长时间里一致配合医生治疗：
                                        @if($data[0]['orthodontics_chief_complaint']['coordination_treatment']=='1')
                                            是
                                        @else
                                            否
                                        @endif
                                    </p>
                                    <p><span></span>是否有过牙齿或颌面部外伤史：
                                        @if($data[0]['orthodontics_chief_complaint']['tooth_trauma']=='1')
                                            是
                                        @else
                                            否
                                        @endif
                                    </p>
                                    <p><span></span>患者的家族成员中是否有类似牙齿错牙合情况：
                                        @if($data[0]['orthodontics_chief_complaint']['tooth_wrong_teeth']=='1')
                                            是
                                        @else
                                            否
                                        @endif
                                    </p>
                                    <p><span></span>是否有或曾有以下口腔习惯：
                                        @if($data[0]['orthodontics_chief_complaint']['oral_cavity_habits']=='1')
                                            是
                                        @else
                                            否
                                        @endif
                                        <br/>
                                        <?php
                                        $a=explode(',',$data[0]['orthodontics_chief_complaint']['oral_cavity_options']) ;
                                        //                                        dump(count($a));die;
                                        for($i=0;$i<count($a);$i++){
                                            switch ($a[$i]){
                                                case 1:
                                                    echo "吮指&ensp;";
                                                    break;
                                                case 2:
                                                    echo "咬唇&ensp;";
                                                    break;
                                                case 3:
                                                    echo "口呼吸&ensp;";
                                                    break;
                                                case 4:
                                                    echo "咬物&ensp;";
                                                    break;
                                                case 5:
                                                    echo "偏侧咀嚼&ensp;";
                                                    break;
                                                case 6:
                                                    echo "吐舌&ensp;";
                                                    break;
                                                default:
                                                    echo "&ensp;";
                                                    break;
                                            }
                                        }
                                        ?>
                                        &ensp;{{$data[0]['orthodontics_chief_complaint']['other_oral_cavity']}}
                                    </p>
                                    <p><span></span>是否接受过正畸治疗：
                                        @if($data[0]['orthodontics_chief_complaint']['orthodontic_treatment']=='1')
                                            是
                                        @else
                                            否
                                        @endif
                                        <br/>
                                        &ensp;{{$data[0]['orthodontics_chief_complaint']['orthodontic_treatment_remark']}}
                                    </p>
                                    <p><span></span>患者或家长是否还有担心或要说明的情况：
                                        @if($data[0]['orthodontics_chief_complaint']['coordination_treatment']=='1')
                                            是
                                        @else
                                            否
                                        @endif
                                    </p>
                                    <p><span></span>患者或家长是否还有担心或要说明的情况：
                                        @if($data[0]['orthodontics_chief_complaint']['worry']=='1')
                                            是
                                        @else
                                            否
                                        @endif
                                        <br/>
                                        {{$data[0]['orthodontics_chief_complaint']['worry_remark']}}
                                    </p>
                                    <p><span></span>其它备注：<br/>
                                        {{$data[0]['orthodontics_chief_complaint']['other']}}
                                    </p>

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
                                                <img src="{{$data[0]['case_history_images']['positive_photo']}}" alt="">

                                            </div>
                                            <p>正面照</p>
                                        </div>

                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{$data[0]['case_history_images']['positive_smile_photo']}}" alt="">

                                            </div>
                                            <p>正面微笑照</p>
                                        </div>

                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{$data[0]['case_history_images']['side_photo']}}" alt="">

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
                                                <img src="{{$data[0]['case_history_images']['upper_arch_photo']}}" alt="">

                                            </div>

                                            <p>上牙弓像</p>
                                        </div>

                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{$data[0]['case_history_images']['positive_45_photo']}}" alt="">

                                            </div>
                                            <p>正面咬合向上45度像</p>
                                        </div>

                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{$data[0]['case_history_images']['under_arch_photo']}}" alt="">

                                            </div>
                                            <p>下牙弓像</p>
                                        </div>
                                    </div>
                                    <div class="imgBigBox">
                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{$data[0]['case_history_images']['right_bite_photo']}}" alt="">

                                            </div>
                                            <p>右咬合像</p>
                                        </div>

                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{$data[0]['case_history_images']['positive_bite_photo']}}" alt="">

                                            </div>
                                            <p>正面咬合像</p>
                                        </div>

                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{$data[0]['case_history_images']['left_bite_photo']}}" alt="">

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
                                                <img src="{{$data[0]['case_history_images']['side_x_photo']}}" alt="">

                                            </div>
                                            <p>侧面X光片</p>
                                        </div>

                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{$data[0]['case_history_images']['panorama_photo']}}" alt="">


                                            </div>
                                            <p>全景片</p>
                                        </div>

                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{$data[0]['case_history_images']['positive_x_photo']}}" alt="">

                                            </div>
                                            <p>正面X光片</p>
                                        </div>
                                    </div>
                                    <div class="imgBigBox">
                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{$data[0]['case_history_images']['tooth_photo']}}" alt="">

                                            </div>
                                            <p>牙片</p>
                                        </div>

                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{$data[0]['case_history_images']['cbct_joint_sagittal']}}" alt="">

                                            </div>
                                            <p>CBCT关节矢状位</p>
                                        </div>

                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{$data[0]['case_history_images']['cbct_coronary_joint']}}" alt="">

                                            </div>
                                            <p>CBCT关节冠状位</p>
                                        </div>
                                    </div>
                                    <div class="imgBigBox">
                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{$data[0]['case_history_images']['cbct_anterior_teeth']}}" alt="">

                                            </div>
                                            <p>CBCT上前牙牙根</p>
                                        </div>

                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{$data[0]['case_history_images']['cbct_under_teeth']}}" alt="">

                                            </div>
                                            <p>CBCT前牙牙根</p>
                                        </div>

                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{$data[0]['case_history_images']['abnormal_teeth']}}" alt="">

                                            </div>
                                            <p>异常牙</p>
                                        </div>
                                    </div>
                                    <div class="imgBigBox">
                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{$data[0]['case_history_images']['air_passage']}}" alt="">

                                            </div>
                                            <p>气道</p>
                                        </div>

                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{$data[0]['case_history_images']['other']}}" alt="">

                                            </div>
                                            <p>其他</p>
                                        </div>

                                        <div class="imgSmallBox">
                                            <div class="imgFixed">
                                                <img src="{{$data[0]['case_history_images']['positive_photo']}}" alt="">

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
                                    <p><span></span>正面<br/>
                                    @if($data[0]['orthodontics_clinical_examination']['symmetry']=1)
                                            对称性:不对称
                                        @else
                                            对称性:对称
                                    @endif
                                        &ensp;
                                    @if($data[0]['orthodontics_clinical_examination']['chin_point']=1)
                                                颏点:偏右
                                        @elseif($data[0]['orthodontics_clinical_examination']['chin_point']=2)
                                                颏点:偏左
                                        @else
                                                颏点:居中
                                    @endif
                                    &ensp;
                                    @if($data[0]['orthodontics_clinical_examination']['teeth_open_lips']=0)
                                                    开唇露齿 :否
                                        @else
                                                    开唇露齿 :是
                                    @endif
                                        &ensp;
                                    @if($data[0]['orthodontics_clinical_examination']['smile_reveal_gums']=0)
                                                        微笑露龈 :否
                                    @else
                                                        微笑露龈 :是
                                        @endif
                                        &ensp;
                                    @if($data[0]['orthodontics_clinical_examination']['plane']=0)
                                                            平面  :不偏斜
                                    @else
                                                            平面  :偏斜
                                        @endif
                                        &ensp;
                                    </p>
                                    <p><span></span>侧面<br/>
                                        @if($data[0]['orthodontics_clinical_examination']['side_shape']=1)
                                            侧面形态:凹面型
                                        @elseif($data[0]['orthodontics_clinical_examination']['side_shape']=2)
                                            侧面形态:凸面型
                                        @else
                                            侧面形态:直面型
                                            @endif
                                            &ensp;
                                        @if($data[0]['orthodontics_clinical_examination']['nasolabial_angle']=1)
                                            鼻唇角:偏大
                                        @elseif($data[0]['orthodontics_clinical_examination']['nasolabial_angle']=2)
                                            鼻唇角:偏小
                                        @else
                                            鼻唇角:正常
                                            @endif
                                            &ensp;
                                        @if($data[0]['orthodontics_clinical_examination']['nasolabial_angle']=1)
                                            颏部凸度:后缩
                                        @elseif($data[0]['orthodontics_clinical_examination']['nasolabial_angle']=2)
                                            颏部凸度:前凸
                                        @else
                                            颏部凸度:正常
                                            @endif
                                            &ensp;
                                    </p>
                                </div>

                                <div class="checkTitle">
                                    <h3>牙齿周围：

                                    </h3>
                                </div>
                                <div class="checkCont">
                                    <p><span></span>
                                        @if($data[0]['orthodontics_clinical_examination']['periodontal_tissue']=1)
                                            牙周组织:牙龈红肿
                                        @elseif($data[0]['orthodontics_clinical_examination']['periodontal_tissue']=2)
                                            牙周组织:牙龈出血
                                        @else
                                            牙周组织:正常
                                            @endif
                                            &ensp;
                                    </p>
                                </div>

                                <div class="checkTitle">
                                    <h3>牙齿状态：</h3>
                                </div>
                                <div class="checkCont">
                                    <p><span></span>恒牙列:
                                        @if($data[0]['orthodontics_clinical_examination']['permanent_dentition']=1)
                                            缺失
                                        @else
                                            正常
                                            @endif
                                            &ensp;
                                    </p>
                                    <p><span></span>乳牙列:
                                        @if($data[0]['orthodontics_clinical_examination']['deciduous_teeth']=1)
                                            缺失
                                        @else
                                            正常
                                            @endif
                                            &ensp;</p>
                                    <p><span></span>牙齿状态其它:</p>
                                    <p>{{$data[0]['orthodontics_clinical_examination']['teeth_condition_other']}}</p>
                                </div>

                                <div class="checkTitle">
                                    <h3>关节检查：</h3>
                                </div>
                                <div class="checkCont">
                                    <p><span></span>开口度：
                                        @if($data[0]['orthodontics_clinical_examination']['opening_degree']=0)
                                            一指
                                        @elseif($data[0]['orthodontics_clinical_examination']['opening_degree']=1)
                                            二指
                                        @elseif($data[0]['orthodontics_clinical_examination']['opening_degree']=2)
                                            三指
                                            @else
                                            三指以上
                                        @endif
                                            &ensp;
                                    </p>
                                    <p><span></span>开口型：
                                        @if($data[0]['orthodontics_clinical_examination']['opening_degree']=0)
                                            正常
                                        @elseif($data[0]['orthodontics_clinical_examination']['opening_degree']=1)
                                            左偏
                                        @elseif($data[0]['orthodontics_clinical_examination']['opening_degree']=2)
                                            右偏
                                        @else
                                            偏摆
                                            @endif
                                            &ensp;
                                    </p>
                                    <p><span></span>弹响：
                                    </p>
                                    <p>左侧：
                                        @switch($data[0]['orthodontics_clinical_examination']['left_sound'])
                                            @case(4)
                                            闭口末
                                            @break
                                            @case(1)
                                            张口初
                                            @break
                                            @case(2)
                                            张口末
                                            @break
                                            @case(3)
                                            闭口初
                                            @break
                                            @default
                                            无
                                        @endswitch
                                            &ensp;
                                    </p>
                                    <p>右侧：
                                        @switch($data[0]['orthodontics_clinical_examination']['right_sound'])
                                            @case(1)
                                            张口初
                                            @break
                                            @case(2)
                                            张口末
                                            @break
                                            @case(3)
                                            闭口初
                                            @break
                                            @case(4)
                                            闭口末
                                            @break
                                            @default
                                            无
                                        @endswitch
                                    </p>
                                    <p><span></span>摩擦音</p>

                                    <p>左侧：
                                        @switch($data[0]['orthodontics_clinical_examination']['left_friction_sound'])
                                            @case(1)
                                            张口
                                            @break
                                            @case(2)
                                            闭口
                                            @break
                                            @default
                                            无
                                        @endswitch
                                    </p>
                                    <p>右侧：
                                        @switch($data[0]['orthodontics_clinical_examination']['right_friction_sound'])
                                            @case(1)
                                            张口
                                            @break
                                            @case(2)
                                            闭口
                                            @break
                                            @default
                                            无
                                        @endswitch
                                    </p>
                                    <p><span></span>疼痛</p>
                                    <p>左侧：
                                        @switch($data[0]['orthodontics_clinical_examination']['left_pain'])
                                            @case(1)
                                            大张口
                                            @break
                                            @case(2)
                                            左侧动
                                            @break
                                            @case(3)
                                            右侧动
                                            @break
                                            @case(4)
                                            前伸
                                            @break
                                            @case(5)
                                            紧咬
                                            @break
                                            @default
                                            无
                                        @endswitch
                                    </p>
                                    <p>右侧：
                                        @switch($data[0]['orthodontics_clinical_examination']['right_pain'])
                                            @case(1)
                                            大张口
                                            @break
                                            @case(2)
                                            左侧动
                                            @break
                                            @case(3)
                                            右侧动
                                            @break
                                            @case(4)
                                            前伸
                                            @break
                                            @case(5)
                                            紧咬
                                            @break
                                            @default
                                            无
                                        @endswitch
                                    </p>
                                    <p>其它：{{$data[0]['orthodontics_clinical_examination']['joint_examination_other']}}</p>
                                </div>
                                <div class="checkTitle">
                                    <h3>错颌问题：</h3>
                                </div>
                                <div class="checkCont">
                                    <p>{{$data[0]['orthodontics_clinical_examination']['malocclusion_problem']}}</p>


                                </div>

                                <div class="checkTitle">
                                    <h3>牙列检查：</h3>
                                </div>
                                <div class="checkCont">
                                    <p><span></span>上下牙弓关系</p>
                                    <p>矢状关系：<br/> 前牙覆盖:
                                        @switch($data[0]['orthodontics_clinical_examination']['anterior_teeth_covered'])
                                            @case(1)
                                            深覆盖I度
                                            @break
                                            @case(2)
                                            深覆盖II度
                                            @break
                                            @case(3)
                                            深覆盖III度
                                            @break
                                            @case(4)
                                            反覆盖I度
                                            @break
                                            @case(5)
                                            反覆盖II度
                                            @break
                                            @case(6)
                                            反覆盖III度
                                            @break
                                            @default
                                            正常
                                        @endswitch
                                                <br/>
                                        尖牙关系&ensp;左侧:
                                            @switch($data[0]['orthodontics_clinical_examination']['left_fangs'])
                                                @case(1)
                                                近中
                                                @break
                                                @case(2)
                                                远中
                                                @break
                                                @default
                                                中性
                                                @endswitch
                                                &ensp;&ensp;右侧:
                                                @switch($data[0]['orthodontics_clinical_examination']['right_fangs'])
                                                    @case(1)
                                                    近中
                                                    @break
                                                    @case(2)
                                                    远中
                                                    @break
                                                    @default
                                                    中性
                                                    @endswitch
                                                    &ensp;<br/>
                                                磨牙关系&ensp;左侧:
                                                @switch($data[0]['orthodontics_clinical_examination']['left_molar_fangs'])
                                                    @case(1)
                                                    近中
                                                    @break
                                                    @case(2)
                                                    远中
                                                    @break
                                                    @default
                                                    中性
                                                    @endswitch
                                                    &ensp;&ensp;右侧:
                                                    @switch($data[0]['orthodontics_clinical_examination']['right_molar_fangs'])
                                                        @case(1)
                                                        近中
                                                        @break
                                                        @case(2)
                                                        远中
                                                        @break
                                                        @default
                                                        中性
                                                        @endswitch
                                                        &ensp;

                                    </p>
                                    <p>垂直关系:</p>
                                    <p>speed曲线:
                                    @switch($data[0]['orthodontics_clinical_examination']['speed_curve'])
                                            @case(1)
                                            反向
                                            @break
                                            @case(2)
                                            过深
                                            @break
                                            @default
                                            正常
                                            @endswitch
                                            &ensp;
                                    </p>
                                    <p>前牙覆牙合:
                                        @switch($data[0]['orthodontics_clinical_examination']['deep_bite'])
                                            @case(1)
                                            深覆牙合I度
                                            @break
                                            @case(2)
                                            深覆盖II度
                                            @break
                                            @case(3)
                                            深覆盖III度
                                            @break
                                            @case(4)
                                            开牙合I度
                                            @break
                                            @case(5)
                                            开牙合II度
                                            @break
                                            @case(6)
                                            开牙合III度
                                            @break
                                            @default
                                            正常
                                        @endswitch
                                    </p>
                                    <p>后牙:
                                        @switch($data[0]['orthodontics_clinical_examination']['posterior_teeth'])
                                            @case(1)
                                            左侧开牙合I度
                                            @break
                                            @case(2)
                                            左侧开牙合II度
                                            @break
                                            @case(3)
                                            左侧开牙合III度
                                            @break
                                            @case(4)
                                            右侧开牙合I度
                                            @break
                                            @case(5)
                                            右侧开牙合II度
                                            @break
                                            @case(6)
                                            右侧开牙合III度
                                            @break
                                            @default
                                            正常
                                        @endswitch
                                    </p>
                                    <p>横向关系:</p>
                                    <p>上颌弓牙:
                                        @switch($data[0]['orthodontics_clinical_examination']['maxillary_arch_teeth'])
                                            @case(1)
                                            狭窄
                                            @break
                                            @case(2)
                                            过宽
                                            @break
                                            @default
                                            正常
                                            @endswitch
                                    </p>
                                    <p>下颌弓牙:
                                        @switch($data[0]['orthodontics_clinical_examination']['maxillary_arch_teeth'])
                                            @case(1)
                                            狭窄
                                            @break
                                            @case(2)
                                            过宽
                                            @break
                                            @default
                                            正常
                                        @endswitch
                                    </p>
                                    <p>上颌中线:
                                        @switch($data[0]['orthodontics_clinical_examination']['maxillary_midline'])
                                            @case(1)
                                            右偏斜{{$data[0]['orthodontics_clinical_examination']['maxillary_midline_right']}}
                                            @break
                                            @case(2)
                                            左偏斜{{$data[0]['orthodontics_clinical_examination']['maxillary_midline_left']}}
                                            @break
                                            @default
                                            居中
                                        @endswitch
                                    </p>
                                    <p>下颌中线&ensp;后牙:
                                        @switch($data[0]['orthodontics_clinical_examination']['maxillary_midline'])
                                            @case(1)
                                            左侧反牙合
                                            @break
                                            @case(2)
                                            左侧正锁牙合
                                            @break
                                            @case(3)
                                            左侧反锁牙合
                                            @break
                                            @case(4)
                                            反覆盖反牙合
                                            @break
                                            @case(5)
                                            左侧反牙合
                                            @break
                                            @case(6)
                                            反覆盖正锁牙合
                                            @break
                                            @default
                                            正常
                                        @endswitch
                                    </p>
                                    <p>拥挤度:&ensp;上颌:{{$data[0]['orthodontics_clinical_examination']['crowd_degree_maxillary']}}&ensp;下颌:{{$data[0]['orthodontics_clinical_examination']['crowded_degree_jaw']}}</p>

                                    <p>Bolton指数:&ensp;前牙比:{{$data[0]['orthodontics_clinical_examination']['bolton_anterior_teeth']}}&ensp;全牙比:{{$data[0]['orthodontics_clinical_examination']['bolton_all_teeth']}}</p>

                                </div>


                            </div>

                        </ul>
                        <!--X片分析-->
                        <ul id="xg">
                            {{--<div class="zhuSuTitle">

                            </div>--}}
                            <div class="zhuSuDesc">
                                <p> <span></span>曲面断层片:</p>
                                <p>
                                    @switch($data[0]['orthodontic_x_analysis']['surface_fault_slice'])
                                        @case(1)
                                        恒牙列
                                        @break
                                        @case(2)
                                        混合牙列
                                        @break
                                        @default
                                        乳牙列
                                    @endswitch
                                </p>
                                <p> <span></span>其它目标</p>
                                <p>{{$data[0]['orthodontic_x_analysis']['other_target']}}</p>

                            </div>
                        </ul>
                        <!--诊断设计-->
                        <ul id="zd">
                            <div class="zhuSu">
                                <div class="zhuSuTitle">
                                    问题列表
                                </div>
                                <div class="zhuSuDesc">
                                    <p> <span></span>面型：
                                        @switch($data[0]['orthodontics_diagnostic_design']['positive'])
                                            @case(1)
                                            凹面型
                                            @break
                                            @case(2)
                                            凸面型
                                            @break
                                            @default
                                            直面型
                                        @endswitch
                                    </p>
                                    <p> <span></span>骨性：
                                        @switch($data[0]['orthodontics_diagnostic_design']['question_bone_nature'])
                                            @case(1)
                                            II类
                                            @break
                                            @case(2)
                                            III类
                                            @break
                                            @default
                                            I类
                                        @endswitch
                                    </p>
                                    <p> <span></span>生长型：
                                        @switch($data[0]['orthodontics_diagnostic_design']['growth_type'])
                                            @case(1)
                                            高角
                                            @break
                                            @case(2)
                                            低角
                                            @break
                                            @default
                                            均角
                                        @endswitch
                                    </p>
                                    <p> <span></span>牙性（安氏）：
                                        @switch($data[0]['orthodontics_diagnostic_design']['question_teeth_nature'])
                                            @case(1)
                                            II类I分类
                                            @break
                                            @case(2)
                                            II类I分类亚类
                                            @case(3)
                                            II类II分类
                                            @break
                                            @case(4)
                                            II类II分类亚类
                                            @case(5)
                                            III类
                                            @break
                                            @case(6)
                                            III类亚类
                                            @break
                                            @default
                                            I类
                                        @endswitch
                                    </p>
                                    <p> <span></span>前牙覆牙合：
                                        @switch($data[0]['orthodontics_diagnostic_design']['question_anterior_teeth_overbite'])
                                            @case(1)
                                            深覆牙合I
                                            @break
                                            @case(2)
                                            II深覆牙合II
                                            @case(3)
                                            深覆牙合III
                                            @break
                                            @case(4)
                                            开牙合I
                                            @case(5)
                                            开牙合II
                                            @break
                                            @case(6)
                                            开牙合III
                                            @break
                                            @default
                                            正常
                                        @endswitch
                                    </p>
                                    <p> <span></span>前牙覆盖：
                                        @switch($data[0]['orthodontics_diagnostic_design']['question_anterior_teeth_covered'])
                                            @case(1)
                                            深覆盖I
                                            @break
                                            @case(2)
                                            深覆盖II
                                            @case(3)
                                            深覆盖III
                                            @break
                                            @case(4)
                                            反覆盖I
                                            @case(5)
                                            反覆盖II
                                            @break
                                            @case(6)
                                            反覆盖III
                                            @break
                                            @default
                                            正常
                                        @endswitch
                                    </p>
                                    <p> <span></span>拥挤度：上颌{{$data[0]['orthodontics_diagnostic_design']['maxillary']}}mm 下颌{{$data[0]['orthodontics_diagnostic_design']['jaws']}}mm</p>

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
</body>
</html>
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

