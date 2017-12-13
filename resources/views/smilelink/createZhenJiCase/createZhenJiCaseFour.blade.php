<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Title</title>


    <link href="{{asset('reception/Bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="{{asset('reception/css/casePublic.css')}}">
    <link rel="stylesheet" href="{{asset('reception/css/createZhenJiCase/createZhenJiCase4.css')}}">
    <style>
        .row{margin-bottom: 8px}
    </style>
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
    <div class="content">
        <p>新建病例&gt;&gt;新增病例</p>

    </div>
</div>


<div class="part4">
    <div class="content">
        <div class="part2Title">
            <img src="{{asset('reception/img/4.png')}}" alt="" >

        </div>

        <div class="part4Cont" id="hidden_enent1">
            <div class="part4Title">
                <span class="span2">Part1</span>
                <span class="span3">面部分析</span>
            </div>

            <form class="form-horizontal">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-2"><h3>正面</h3></div>

                </div>

                <div class="row">
                    <div class="col-lg-2 text-right">对称性：</div>
                    <div class="col-lg-1"><input type="radio" name="symmetry" @isset($data[0]) @if($data[0]['symmetry']==0) checked @endif @endisset  value="0">对称</div>
                    <div class="col-lg-1"><input type="radio" name="symmetry" @isset($data[0]) @if($data[0]['symmetry']==1) checked @endif @endisset  value="1">不对称</div>
                </div>
                <div class="row">
                    <div class="col-lg-2 text-right">颏点：</div>
                    <div class="col-lg-1"><input type="radio" name="chin_point" @isset($data[0]) @if($data[0]['chin_point']==0) checked @endif @endisset  value="0">居中</div>
                    <div class="col-lg-1"><input type="radio" name="chin_point" @isset($data[0]) @if($data[0]['chin_point']==1) checked @endif @endisset  value="1">偏左</div>
                    <div class="col-lg-1"><input type="radio" name="chin_point" @isset($data[0]) @if($data[0]['chin_point']==2) checked @endif @endisset  value="2">偏右</div>
                </div>
                <div class="row">
                    <div class="col-lg-2 text-right">开唇露齿：</div>
                    <div class="col-lg-1"><input type="radio" name="teeth_open_lips" @isset($data[0]) @if($data[0]['teeth_open_lips']==0) checked @endif @endisset  value="0">否</div>
                    <div class="col-lg-1"><input type="radio" name="teeth_open_lips" @isset($data[0]) @if($data[0]['teeth_open_lips']==1) checked @endif @endisset  value="1">是</div>
                </div>
                <div class="row">
                    <div class="col-lg-2 text-right">微笑露根：</div>
                    <div class="col-lg-1"><input type="radio" name="smile_reveal_gums" @isset($data[0]) @if($data[0]['smile_reveal_gums']==0) checked @endif @endisset  value="0">否</div>
                    <div class="col-lg-1"><input type="radio" name="smile_reveal_gums" @isset($data[0]) @if($data[0]['smile_reveal_gums']==1) checked @endif @endisset  value="1">是</div>
                </div>
                <div class="row">
                    <div class="col-lg-2 text-right">平面：</div>
                    <div class="col-lg-1"><input type="radio" name="plane" @isset($data[0]) @if($data[0]['plane']==0) checked @endif @endisset  value="0">不偏斜</div>
                    <div class="col-lg-1"><input type="radio" name="plane" @isset($data[0]) @if($data[0]['plane']==1) checked @endif @endisset  value="1">偏斜</div>
                </div>

                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-2"><h3>侧面</h3></div>

                </div>
                <div class="row">
                    <div class="col-lg-2 text-right">侧面形态：</div>
                    <div class="col-lg-1"><input type="radio" name="side_shape" @isset($data[0]) @if($data[0]['side_shape']==0) checked @endif @endisset  value="0">直面型</div>
                    <div class="col-lg-1"><input type="radio" name="side_shape" @isset($data[0]) @if($data[0]['side_shape']==1) checked @endif @endisset  value="1">凹面型</div>
                    <div class="col-lg-1"><input type="radio" name="side_shape" @isset($data[0]) @if($data[0]['side_shape']==2) checked @endif @endisset  value="2">凸面型</div>

                </div>
                <div class="row">
                    <div class="col-lg-2 text-right">鼻唇角：</div>
                    <div class="col-lg-1"><input type="radio" name="nasolabial_angle" @isset($data[0]) @if($data[0]['nasolabial_angle']==0) checked @endif @endisset  value="0">正常</div>
                    <div class="col-lg-1"><input type="radio" name="nasolabial_angle" @isset($data[0]) @if($data[0]['nasolabial_angle']==1) checked @endif @endisset  value="1">偏大</div>
                    <div class="col-lg-1"><input type="radio" name="nasolabial_angle" @isset($data[0]) @if($data[0]['nasolabial_angle']==2) checked @endif @endisset  value="2">偏小</div>

                </div>
                <div class="row">
                    <div class="col-lg-2 text-right">颏部凸度：</div>

                    <div class="col-lg-1"><input type="radio" name="chin_point_view" @isset($data[0]) @if($data[0]['chin_point_view']==0) checked @endif @endisset  value="0">正常</div>
                    <div class="col-lg-1"><input type="radio" name="chin_point_view" @isset($data[0]) @if($data[0]['chin_point_view']==1) checked @endif @endisset  value="1">后缩</div>
                    <div class="col-lg-1"><input type="radio" name="chin_point_view" @isset($data[0]) @if($data[0]['chin_point_view']==2) checked @endif @endisset  value="2">前凸</div>

                </div>

                <div class="part4Title">
                    <span class="span2">Part2</span>
                    <span class="span3">牙周组织</span>
                </div>

                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-2"><input type="radio" name="periodontal_tissue" @isset($data[0]) @if($data[0]['periodontal_tissue']==0) checked @endif @endisset  value="0">正常</div>
                    <div class="col-lg-2"><input type="radio" name="periodontal_tissue" @isset($data[0]) @if($data[0]['periodontal_tissue']==1) checked @endif @endisset  value="1">牙龈红肿</div>
                    <div class="col-lg-2"><input type="radio" name="periodontal_tissue" @isset($data[0]) @if($data[0]['periodontal_tissue']==2) checked @endif @endisset  value="2">牙龈出血</div>

                </div>
                <div class="part4Title">
                    <span class="span2">Part3</span>
                    <span class="span3">牙周状态</span>
                </div>

                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-2"><h3>恒牙列</h3></div>

                </div>
                <div class="row">
                    <div class="col-lg-1 text-right"></div>

                    <div class="col-lg-2"><input type="radio" name="permanent_dentition" @isset($data[0]) @if($data[0]['permanent_dentition']==0) checked @endif @endisset  value="0">全部正常</div>
                    <div class="col-lg-2"><input type="radio" name="permanent_dentition" @isset($data[0]) @if($data[0]['permanent_dentition']==1) checked @endif @endisset  value="1">全部缺失</div>
                </div>


                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-2"><h3>乳牙列</h3></div>

                </div>
                <div class="row">
                    <div class="col-lg-1 text-right"></div>

                    <div class="col-lg-2"><input type="radio" name="deciduous_teeth" @isset($data[0]) @if($data[0]['deciduous_teeth']==0) checked @endif @endisset  value="0">全部正常</div>
                    <div class="col-lg-2"><input type="radio" name="deciduous_teeth" @isset($data[0]) @if($data[0]['deciduous_teeth']==1) checked @endif @endisset  value="1">全部缺失</div>
                </div>


<!--其他-->
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-2"><h3>其他</h3></div>

                </div>
                <div class="row">
                    <div class="col-lg-1"></div>

                    <textarea name="teeth_condition_other" id="" cols="30" rows="10" style="width: 900px">@isset($data[0]) {{$data[0]['teeth_condition_other']}} @endisset</textarea>

                </div>

                <div class="part4Title">
                    <span class="span2">Part4</span>
                    <span class="span3">关节检查</span>
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-2"><h3>开口度</h3></div>

                </div>

                <div class="row">
                    <div class="col-lg-2 text-right"><input type="radio" name="opening_degree" @isset($data[0]) @if($data[0]['opening_degree']==0) checked @endif @endisset  value="0">1指</div>
                    <div class="col-lg-1"><input type="radio" name="opening_degree" @isset($data[0]) @if($data[0]['opening_degree']==1) checked @endif @endisset  value="1">2指</div>
                    <div class="col-lg-1"><input type="radio" name="opening_degree" @isset($data[0]) @if($data[0]['opening_degree']==2) checked @endif @endisset  value="2">3指</div>
                    <div class="col-lg-1"><input type="radio" name="opening_degree" @isset($data[0]) @if($data[0]['opening_degree']==3) checked @endif @endisset  value="3">3指以上</div>

                </div>
<!--开口型-->
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-2"><h3>开口型</h3></div>

                </div>

                <div class="row">
                    <div class="col-lg-2 text-right"><input type="radio" name="opening_shape" @isset($data[0]) @if($data[0]['opening_shape']==0) checked @endif @endisset  value="0">正常</div>
                    <div class="col-lg-1"><input type="radio" name="opening_shape" @isset($data[0]) @if($data[0]['opening_shape']==1) checked @endif @endisset  value="1">左偏</div>
                    <div class="col-lg-1"><input type="radio" name="opening_shape" @isset($data[0]) @if($data[0]['opening_shape']==2) checked @endif @endisset  value="2">右偏</div>
                    <div class="col-lg-1"><input type="radio" name="opening_shape" @isset($data[0]) @if($data[0]['opening_shape']==3) checked @endif @endisset  value="3">偏摆</div>

                </div>
<!--弹响-->
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-2"><h3>弹响</h3></div>

                </div>

                <div class="row">
                    <div class="col-lg-2 text-right">左侧：</div>
                    <div class="col-lg-1"><input type="radio" name="left_sound" @isset($data[0]) @if($data[0]['left_sound']==0) checked @endif @endisset  value="0">无</div>
                    <div class="col-lg-1"><input type="radio" name="left_sound" @isset($data[0]) @if($data[0]['left_sound']==1) checked @endif @endisset  value="1">张口初</div>
                    <div class="col-lg-1"><input type="radio" name="left_sound" @isset($data[0]) @if($data[0]['left_sound']==2) checked @endif @endisset  value="2">张口末</div>
                    <div class="col-lg-1"><input type="radio" name="left_sound" @isset($data[0]) @if($data[0]['left_sound']==3) checked @endif @endisset  value="3">闭口初</div>
                    <div class="col-lg-1"><input type="radio" name="left_sound" @isset($data[0]) @if($data[0]['left_sound']==4) checked @endif @endisset  value="4">闭口末</div>
                </div>
                <div class="row">
                    <div class="col-lg-2 text-right">右侧：</div>
                    <div class="col-lg-1"><input type="radio" name="right_sound" @isset($data[0]) @if($data[0]['right_sound']==0) checked @endif @endisset  value="0">无</div>
                    <div class="col-lg-1"><input type="radio" name="right_sound" @isset($data[0]) @if($data[0]['right_sound']==1) checked @endif @endisset  value="1">张口初</div>
                    <div class="col-lg-1"><input type="radio" name="right_sound" @isset($data[0]) @if($data[0]['right_sound']==2) checked @endif @endisset  value="2">张口末</div>
                    <div class="col-lg-1"><input type="radio" name="right_sound" @isset($data[0]) @if($data[0]['right_sound']==3) checked @endif @endisset  value="3">闭口初</div>
                    <div class="col-lg-1"><input type="radio" name="right_sound" @isset($data[0]) @if($data[0]['right_sound']==4) checked @endif @endisset  value="4">闭口末</div>
                </div>
                <!--摩擦音-->
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-2"><h3>摩擦音</h3></div>

                </div>

                <div class="row">
                    <div class="col-lg-2 text-right">左侧：</div>
                    <div class="col-lg-1"><input type="radio" name="left_friction_sound" @isset($data[0]) @if($data[0]['left_friction_sound']==0) checked @endif @endisset  value="0">无</div>
                    <div class="col-lg-1"><input type="radio" name="left_friction_sound" @isset($data[0]) @if($data[0]['left_friction_sound']==1) checked @endif @endisset  value="1">张口</div>
                    <div class="col-lg-1"><input type="radio" name="left_friction_sound" @isset($data[0]) @if($data[0]['left_friction_sound']==2) checked @endif @endisset  value="2">闭口</div>
                </div>
                <div class="row">
                    <div class="col-lg-2 text-right">右侧：</div>
                    <div class="col-lg-1"><input type="radio" name="right_friction_sound" @isset($data[0]) @if($data[0]['right_friction_sound']==0) checked @endif @endisset  value="0">无</div>
                    <div class="col-lg-1"><input type="radio" name="right_friction_sound" @isset($data[0]) @if($data[0]['right_friction_sound']==1) checked @endif @endisset  value="1">张口</div>
                    <div class="col-lg-1"><input type="radio" name="right_friction_sound" @isset($data[0]) @if($data[0]['right_friction_sound']==2) checked @endif @endisset  value="2">闭口</div>
                </div>
                <!--疼痛-->
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-2"><h3>疼痛</h3></div>

                </div>
                <div class="row">
                    <div class="col-lg-2 text-right">左侧：</div>
                    <div class="col-lg-1"><input type="radio" name="left_pain" @isset($data[0]) @if($data[0]['left_pain']==0) checked @endif @endisset  value="0">无</div>
                    <div class="col-lg-1"><input type="radio" name="left_pain" @isset($data[0]) @if($data[0]['left_pain']==1) checked @endif @endisset  value="1">大张口</div>
                    <div class="col-lg-1"><input type="radio" name="left_pain" @isset($data[0]) @if($data[0]['left_pain']==2) checked @endif @endisset  value="2">左侧动</div>
                    <div class="col-lg-1"><input type="radio" name="left_pain" @isset($data[0]) @if($data[0]['left_pain']==3) checked @endif @endisset  value="3">右侧动</div>
                    <div class="col-lg-1"><input type="radio" name="left_pain" @isset($data[0]) @if($data[0]['left_pain']==4) checked @endif @endisset  value="4">前伸</div>
                    <div class="col-lg-1"><input type="radio" name="left_pain" @isset($data[0]) @if($data[0]['left_pain']==5) checked @endif @endisset  value="5">紧咬</div>

                </div>
                <div class="row">
                    <div class="col-lg-2 text-right">右侧：</div>
                    <div class="col-lg-1"><input type="radio" name="right_pain" @isset($data[0]) @if($data[0]['right_pain']==0) checked @endif @endisset  value="0">无</div>
                    <div class="col-lg-1"><input type="radio" name="right_pain" @isset($data[0]) @if($data[0]['right_pain']==1) checked @endif @endisset  value="1">大张口</div>
                    <div class="col-lg-1"><input type="radio" name="right_pain" @isset($data[0]) @if($data[0]['right_pain']==2) checked @endif @endisset  value="2">左侧动</div>
                    <div class="col-lg-1"><input type="radio" name="right_pain" @isset($data[0]) @if($data[0]['right_pain']==3) checked @endif @endisset  value="3">右侧动</div>
                    <div class="col-lg-1"><input type="radio" name="right_pain" @isset($data[0]) @if($data[0]['right_pain']==4) checked @endif @endisset  value="4">前伸</div>
                    <div class="col-lg-1"><input type="radio" name="right_pain" @isset($data[0]) @if($data[0]['right_pain']==5) checked @endif @endisset  value="5">紧咬</div>
                </div>

                <!--其他-->
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-2"><h3>其他</h3></div>

                </div>
                <div class="row">
                    <div class="col-lg-1"></div>

                    <textarea name="joint_examination_other" id="" cols="30" rows="10" style="width: 900px">@isset($data[0]) {{$data[0]['joint_examination_other']}} @endisset</textarea>

                </div>

                <!--Part5 牙列检查-->

                <div class="part4Title">
                    <span class="span2">Part5</span>
                    <span class="span3">牙列检查</span>
                </div>

                <!--错颌问题-->
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6"><h3>错颌问题（请用文字描述牙列错颌问题）</h3></div>

                </div>
                <div class="row">
                    <div class="col-lg-1"></div>

                    <textarea name="malocclusion_problem" id="" cols="30" rows="10" style="width: 900px">@isset($data[0]) {{$data[0]['malocclusion_problem']}} @endisset</textarea>

                </div>

                <!--上下牙弓关系-->
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-2"><h3>上下牙弓关系</h3></div>

                </div>
                <div class="row">
                    <div class="col-lg-2 text-right"></div>
                    <div class="2">矢状关系：</div>

                </div>
                <div class="row">
                    <div class="col-lg-2 text-right"></div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-1">前牙覆盖</div>
                    <div class="col-lg-1">正常</div>
                    <div class="col-lg-1"><input type="radio" name="anterior_teeth_covered" @isset($data[0]) @if($data[0]['anterior_teeth_covered']==0) checked @endif @endisset  value="0">正常</div>

                </div>
                <div class="row">
                    <div class="col-lg-2 text-right"></div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-1">深覆盖</div>
                    <div class="col-lg-1"><input type="radio" name="anterior_teeth_covered" @isset($data[0]) @if($data[0]['anterior_teeth_covered']==1) checked @endif @endisset  value="1">I度</div>
                    <div class="col-lg-1"><input type="radio" name="anterior_teeth_covered" @isset($data[0]) @if($data[0]['anterior_teeth_covered']==2) checked @endif @endisset  value="2">II度</div>
                    <div class="col-lg-1"><input type="radio" name="anterior_teeth_covered" @isset($data[0]) @if($data[0]['anterior_teeth_covered']==3) checked @endif @endisset  value="3">III度</div>

                </div>
                <div class="row">
                    <div class="col-lg-2 text-right"></div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-1">反覆盖</div>
                    <div class="col-lg-1"><input type="radio" name="anterior_teeth_covered" @isset($data[0]) @if($data[0]['anterior_teeth_covered']==4) checked @endif @endisset  value="4">I度</div>
                    <div class="col-lg-1"><input type="radio" name="anterior_teeth_covered" @isset($data[0]) @if($data[0]['anterior_teeth_covered']==5) checked @endif @endisset  value="5">II度</div>
                    <div class="col-lg-1"><input type="radio" name="anterior_teeth_covered" @isset($data[0]) @if($data[0]['anterior_teeth_covered']==6) checked @endif @endisset  value="6">III度</div>

                </div>

                <div class="row">
                    <div class="col-lg-2 text-right"></div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-1">尖牙关系</div>
                    <div class="col-lg-1">左侧</div>
                    <div class="col-lg-1"><input type="radio" name="left_fangs" @isset($data[0]) @if($data[0]['left_fangs']==0) checked @endif @endisset  value="0">中性</div>
                    <div class="col-lg-1"><input type="radio" name="left_fangs" @isset($data[0]) @if($data[0]['left_fangs']==1) checked @endif @endisset  value="1">近中</div>
                    <div class="col-lg-1"><input type="radio" name="left_fangs" @isset($data[0]) @if($data[0]['left_fangs']==2) checked @endif @endisset  value="2">远中</div>

                </div>

                <div class="row">
                    <div class="col-lg-2 text-right"></div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-1">右侧</div>
                    <div class="col-lg-1"><input type="radio" name="right_fangs" @isset($data[0]) @if($data[0]['right_fangs']==0) checked @endif @endisset  value="0">中性</div>
                    <div class="col-lg-1"><input type="radio" name="right_fangs" @isset($data[0]) @if($data[0]['right_fangs']==1) checked @endif @endisset  value="1">近中</div>
                    <div class="col-lg-1"><input type="radio" name="right_fangs" @isset($data[0]) @if($data[0]['right_fangs']==2) checked @endif @endisset  value="2">远中</div>

                </div>
                <div class="row">
                    <div class="col-lg-2 text-right"></div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-1">磨牙关系</div>
                    <div class="col-lg-1">左侧</div>
                    <div class="col-lg-1"><input type="radio" name="left_molar_fangs" @isset($data[0]) @if($data[0]['left_molar_fangs']==0) checked @endif @endisset  value="0">中性</div>
                    <div class="col-lg-1" ><input type="radio" name="left_molar_fangs" @isset($data[0]) @if($data[0]['left_molar_fangs']==1) checked @endif @endisset  value="1">远中</div>
                    <div class="col-lg-1" ><input type="radio" name="left_molar_fangs" @isset($data[0]) @if($data[0]['left_molar_fangs']==2) checked @endif @endisset  value="2">近中</div>
                    <div class="col-lg-2" style="width: 120px"><input type="radio" name="left_molar_fangs" @isset($data[0]) @if($data[0]['left_molar_fangs']==3) checked @endif @endisset  value="3">中性偏远中</div>
                    <div class="col-lg-2" style="width: 120px"><input type="radio" name="left_molar_fangs" @isset($data[0]) @if($data[0]['left_molar_fangs']==4) checked @endif @endisset  value="4">中性偏近中</div>

                    </div>



                <div class="row">
                    <div class="col-lg-2 text-right"></div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-1">右侧</div>
                    <div class="col-lg-1"><input type="radio" name="right_molar_fangs" @isset($data[0]) @if($data[0]['right_molar_fangs']==0) checked @endif @endisset  value="0">中性</div>
                    <div class="col-lg-1"><input type="radio" name="right_molar_fangs" @isset($data[0]) @if($data[0]['right_molar_fangs']==1) checked @endif @endisset  value="1">近中</div>
                    <div class="col-lg-1"><input type="radio" name="right_molar_fangs" @isset($data[0]) @if($data[0]['right_molar_fangs']==2) checked @endif @endisset  value="2">远中</div>
                    <div class="col-lg-2" style="width: 120px"><input type="radio" name="right_molar_fangs" @isset($data[0]) @if($data[0]['right_molar_fangs']==3) checked @endif @endisset  value="3">中性偏远中</div>
                    <div class="col-lg-2" style="width: 120px"><input type="radio" name="right_molar_fangs" @isset($data[0]) @if($data[0]['right_molar_fangs']==4) checked @endif @endisset  value="4">中性偏近中</div>


                </div>

                <!--垂直关系-->

                <div class="row">
                    <div class="col-lg-2 text-right"></div>
                    <div class="2">垂直关系：</div>

                </div>
                <div class="row">
                    <div class="col-lg-2 text-right"></div>
                    <div class="col-lg-1">Spee曲线</div>
                    <div class="col-lg-1"><input type="radio" name="speed_curve" @isset($data[0]) @if($data[0]['speed_curve']==0) checked @endif @endisset  value="0">正常</div>
                    <div class="col-lg-1"><input type="radio" name="speed_curve" @isset($data[0]) @if($data[0]['speed_curve']==1) checked @endif @endisset  value="1">反向</div>

                    <div class="col-lg-1"><input type="radio" name="speed_curve" @isset($data[0]) @if($data[0]['speed_curve']==2) checked @endif @endisset  value="2">过深</div>

                </div>

                <div class="row">
                    <div class="col-lg-1  "></div>
                    <div class="col-lg-2 text-right">前牙覆牙合</div>
                    <div class="col-lg-1">正常</div>
                    <div class="col-lg-1"><input type="radio" name="deep_bite" @isset($data[0]) @if($data[0]['deep_bite']==0) checked @endif @endisset  value="0">正常</div>

                </div>

                <div class="row">
                    <div class="col-lg-2 text-right"></div>
                    <div class="col-lg-1"></div>

                    <div class="col-lg-1">深覆牙合</div>
                    <div class="col-lg-1"><input type="radio" name="deep_bite" @isset($data[0]) @if($data[0]['deep_bite']==1) checked @endif @endisset  value="1">I度</div>
                    <div class="col-lg-1"><input type="radio" name="deep_bite" @isset($data[0]) @if($data[0]['deep_bite']==2) checked @endif @endisset  value="2">I度</div>
                    <div class="col-lg-1"><input type="radio" name="deep_bite" @isset($data[0]) @if($data[0]['deep_bite']==3) checked @endif @endisset  value="3">III度</div>

                </div>
                <div class="row">
                    <div class="col-lg-2 text-right"></div>
                    <div class="col-lg-1"></div>

                    <div class="col-lg-1">开颌</div>
                    <div class="col-lg-1"><input type="radio" name="deep_bite" @isset($data[0]) @if($data[0]['deep_bite']==4) checked @endif @endisset  value="4">I度</div>
                    <div class="col-lg-1"><input type="radio" name="deep_bite" @isset($data[0]) @if($data[0]['deep_bite']==5) checked @endif @endisset  value="5">I度</div>
                    <div class="col-lg-1"><input type="radio" name="deep_bite" @isset($data[0]) @if($data[0]['deep_bite']==6) checked @endif @endisset  value="6">III度</div>

                </div>

                <div class="row">
                    <div class="col-lg-1  "></div>
                    <div class="col-lg-2 text-right">后牙</div>
                    <div class="col-lg-1">正常</div>
                    <div class="col-lg-1"><input type="radio" name="posterior_teeth" @isset($data[0]) @if($data[0]['posterior_teeth']==0) checked @endif @endisset  value="0">正常</div>

                </div>

                <div class="row">
                    <div class="col-lg-2 "></div>
                    <div class="col-lg-1"></div>

                    <div class="col-lg-2 ">左侧开牙合</div>
                    <div class="col-lg-1"><input type="radio" name="posterior_teeth" @isset($data[0]) @if($data[0]['posterior_teeth']==1) checked @endif @endisset  value="1">I度</div>
                    <div class="col-lg-1"><input type="radio" name="posterior_teeth" @isset($data[0]) @if($data[0]['posterior_teeth']==2) checked @endif @endisset  value="2">I度</div>
                    <div class="col-lg-1"><input type="radio" name="posterior_teeth" @isset($data[0]) @if($data[0]['posterior_teeth']==3) checked @endif @endisset  value="3">III度</div>

                </div>

                <div class="row">
                    <div class="col-lg-2 text-right"></div>
                    <div class="col-lg-1"></div>

                    <div class="col-lg-2">右侧开牙合</div>
                    <div class="col-lg-1"><input type="radio" name="posterior_teeth" @isset($data[0]) @if($data[0]['posterior_teeth']==4) checked @endif @endisset  value="4">I度</div>
                    <div class="col-lg-1"><input type="radio" name="posterior_teeth" @isset($data[0]) @if($data[0]['posterior_teeth']==5) checked @endif @endisset  value="5">I度</div>
                    <div class="col-lg-1"><input type="radio" name="posterior_teeth" @isset($data[0]) @if($data[0]['posterior_teeth']==6) checked @endif @endisset  value="6">III度</div>

                </div>

                <div class="row">
                    <div class="col-lg-2 text-right"></div>
                    <div class="2">横向关系：</div>

                </div>

                <div class="row">
                    <div class="col-lg-2 text-right"></div>
                    <div class="col-lg-1">上颌弓牙:</div>
                    <div class="col-lg-1"><input type="radio" name="maxillary_arch_teeth	" @isset($data[0]) @if($data[0]['maxillary_arch_teeth']==0) checked @endif @endisset  value="0">正常</div>
                    <div class="col-lg-1"><input type="radio" name="maxillary_arch_teeth	" @isset($data[0]) @if($data[0]['maxillary_arch_teeth']==1) checked @endif @endisset  value="1">狭窄</div>
                    <div class="col-lg-1"><input type="radio" name="maxillary_arch_teeth	" @isset($data[0]) @if($data[0]['maxillary_arch_teeth']==2) checked @endif @endisset  value="2">过框</div>
                </div>
                <div class="row">
                    <div class="col-lg-2 text-right"></div>
                    <div class="col-lg-1">下颌弓牙:</div>
                    <div class="col-lg-1"><input type="radio" name="lower_dental_arch" @isset($data[0]) @if($data[0]['lower_dental_arch']==0) checked @endif @endisset  value="0">正常</div>
                    <div class="col-lg-1"><input type="radio" name="lower_dental_arch" @isset($data[0]) @if($data[0]['lower_dental_arch']==1) checked @endif @endisset  value="1">狭窄</div>
                    <div class="col-lg-1"><input type="radio" name="lower_dental_arch" @isset($data[0]) @if($data[0]['lower_dental_arch']==2) checked @endif @endisset  value="2">过宽</div>
                </div>
                <div class="row">
                    <div class="col-lg-2 text-right"></div>
                    <div class="col-lg-1">上颌中线:</div>
                    <div class="col-lg-1"><input type="radio" name="maxillary_midline" @isset($data[0]) @if($data[0]['maxillary_midline']==0) checked @endif @endisset  value="0">居中</div>
                    <div class="col-lg-2"><input type="radio" name="maxillary_midline" @isset($data[0]) @if($data[0]['maxillary_midline']==1) checked @endif @endisset  value="1">右偏斜 <input value="@isset($data[0]) {{$data[0]['maxillary_midline_right']}} @endisset" name="maxillary_midline_right" type="text" style="width: 50px">mm</div>
                    <div class="col-lg-2"><input type="radio" name="maxillary_midline" @isset($data[0]) @if($data[0]['maxillary_midline']==2) checked @endif @endisset  value="2">左偏斜 <input value="@isset($data[0]) {{$data[0]['maxillary_midline_left']}} @endisset" name="maxillary_midline_left" type="text" style="width: 50px">mm</div>


                </div>
                <div class="row">
                    <div class="col-lg-2 text-right"></div>
                    <div class="col-lg-1">下颌中线:</div>

                </div>
                <div class="row">
                    <div class="col-lg-1  "></div>
                    <div class="col-lg-2 text-right">后牙</div>
                    <div class="col-lg-1">正常</div>
                    <div class="col-lg-1"><input type="radio" name="mandibular_midline" @isset($data[0]) @if($data[0]['mandibular_midline']==0) checked @endif @endisset  value="0">正常</div>

                </div>

                <div class="row">
                    <div class="col-lg-2 text-right"></div>
                    <div class="col-lg-1"></div>

                    <div class="col-lg-1">左侧</div>
                    <div class="col-lg-1"><input type="radio" name="mandibular_midline" @isset($data[0]) @if($data[0]['mandibular_midline']==1) checked @endif @endisset  value="1">反咬合</div>
                    <div class="col-lg-2 text-center"><input type="radio" name="mandibular_midline" @isset($data[0]) @if($data[0]['mandibular_midline']==2) checked @endif @endisset  value="2">正锁咬合</div>
                    <div class="col-lg-2 text-center"><input type="radio" name="mandibular_midline" @isset($data[0]) @if($data[0]['mandibular_midline']==3) checked @endif @endisset  value="3">反锁咬合</div>

                </div>

                <div class="row">
                    <div class="col-lg-2 text-right"></div>
                    <div class="col-lg-1"></div>

                    <div class="col-lg-1">反覆盖</div>
                    <div class="col-lg-1"><input type="radio" name="mandibular_midline" @isset($data[0]) @if($data[0]['mandibular_midline']==4) checked @endif @endisset  value="4">反咬合</div>
                    <div class="col-lg-2 text-center "><input type="radio" name="mandibular_midline" @isset($data[0]) @if($data[0]['mandibular_midline']==5) checked @endif @endisset  value="5">正锁咬合</div>
                    <div class="col-lg-2 text-center"><input type="radio" name="mandibular_midline" @isset($data[0]) @if($data[0]['mandibular_midline']==6) checked @endif @endisset  value="6">反锁咬合</div>

                </div>

                <div class="row">
                    <div class="col-lg-1"></div>

                    <div class="col-lg-2 text-right">拥挤度</div>
                    <div class="col-lg-1 text-right">上颌 </div>
                    <div class="col-lg-3 "><input value="@isset($data[0]) {{$data[0]['crowd_degree_maxillary']}} @endisset"   name="crowd_degree_maxillary" type="text">mm </div>

                    <div class="col-lg-1 text-right">下颌 </div>
                    <div class="col-lg-3 "><input value="@isset($data[0]) {{$data[0]['crowded_degree_jaw']}} @endisset"  name="crowded_degree_jaw"  type="text">mm </div>


                </div>

                <div class="row">
                    <div class="col-lg-1"></div>

                    <div class="col-lg-2 text-right">Bolton</div>
                    <div class="col-lg-1 text-right">前牙比 </div>
                    <div class="col-lg-3 "><input name="bolton_anterior_teeth" value="@isset($data[0]) {{$data[0]['bolton_anterior_teeth']}} @endisset" type="text">% </div>

                    <div class="col-lg-1 text-right">全牙比 </div>
                    <div class="col-lg-3 "><input name="bolton_all_teeth" value="@isset($data[0]) {{$data[0]['bolton_all_teeth']}} @endisset" type="text">% </div>


                </div>
                    @isset($data[0])
                        <input name="edit" type="hidden" value="1"/>
                    @endisset
                    <input type="hidden" name="orthodontics_id"  value="{{$_GET['orthodontics_id']}}"/>
            </form>

            <div class="button1">
               {{-- <a href=""> <button>上一步 </button></a>--}}
                <a> <button type="button" onclick="submitForm()" >下一步 </button></a>
            </div>
        </div>




    </div>

</div>






<script src="{{asset('reception/js/jquery.min.js')}}"></script>
<script src="{{asset('reception/Bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('reception/js/layer/2.1/layer.js')}}"></script>
<script>
    function submitForm()
    {
        $.ajax({
            type: 'post',
            url:'{{url('/api/odtcase/addClinicalExamination')}}',
            dataType:'json',
            data:$('.form-horizontal').serialize(),
            success: function(data) {
                console.log(data);
                if (data.code == 200)
                {
                    @empty($data[0])
                        window.location.href = "{{url('createZhenJiCaseFif?orthodontics_id=')}}"+data.data;
                    @endempty
                            @isset($data[0])
                        window.location.href = "{{url('editCase5?orthodontics_id=').$_GET['orthodontics_id']}}";
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
</script>

</body>
</html>
