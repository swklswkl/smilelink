@extends('smilelink.header')
        @section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <link rel="stylesheet" href="{{asset('reception/Bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css')}}">

    <link href="{{asset('reception/Bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="{{asset('reception/css/casePublic.css')}}">
    <link rel="stylesheet" href="{{asset('reception/css/case2.css')}}">
    <style>
        .col-md-1 {
            width: 9.333333%;

        }
        .row{margin-bottom: 10px}

    </style>
</head>
<body>
<div class=" crumbs">
    <div class="content">
        <p>新建病例&gt;&gt;新增病例</p>

    </div>
</div>
<form id="oform">
    <input type="hidden" name="orthodontics_id" value="{{$_GET['orthodontics_id']}}">
    <div class="part5">
        <div class="content">
            <div class="part5Title">
                <span class="span2">Part5</span>
                <span class="span3">病史</span>
            </div>
            <div class="part5Text">
                病史
                <div class="sel" id="click_event4">^</div>
            </div>
            <div class="part5Cont" id="hidden_enent4">
                <p>                内容：
                </p>
                <textarea name="medical_history" id="" cols="30" rows="10"></textarea>
            </div>
        </div>
    </div>

    <div class="part6">
        <div class="content">
            <div class="part6Title">
                <span class="span2">Part6</span>
                <span class="span3">检查情况</span>
            </div>
            <div class="part6Text">
                <span>*</span>问题列表
                <div class="sel" id="click_event5">^</div>
            </div>
            <div class="part6Cont" id="hidden_enent5">
                <div class="row">
                    <div class="col-md-1 text-right">面型：</div>
                    <div class="col-md-2">
                        <input type="radio" name="positive" value="0">直面型
                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="positive" value="1">凹面型

                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="positive" value="2">凸面型
                    </div>
                    <div class="col-md-4"></div>
                </div>
                <div class="row">
                    <div class="col-md-1 text-right">骨性：</div>
                    <div class="col-md-2">
                        <input type="radio" name="question_bone_nature" value="0">I类
                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="question_bone_nature" value="1">II类

                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="question_bone_nature" value="2">III类
                    </div>
                    <div class="col-md-5"></div>
                </div>
                <div class="row">
                    <div class="col-md-1 text-right">生长型：</div>
                    <div class="col-md-2">
                        <input type="radio" name="growth_type" value="0">均角
                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="growth_type" value="1">高角

                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="growth_type" value="2">低角
                    </div>
                    <div class="col-md-5"></div>
                </div>
                <div class="row">
                    <div class="col-md-1 text-right">牙性(安氏:</div>
                    <div class="col-md-2">
                        <input type="radio" name="question_teeth_nature" value="0">I类
                    </div>
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-5"></div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <input type="radio" name="question_teeth_nature" value="1">II类I分类
                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="question_teeth_nature" value="2">II类I分类亚类

                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="question_teeth_nature" value="3">II类II分类
                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="question_teeth_nature" value="4">II类II分类亚类

                    </div>
                    <div class="col-md-3">

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <input type="radio" name="question_teeth_nature" value="5">III类
                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="question_teeth_nature" value="6">III类亚类

                    </div>
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-2">


                    </div>
                    <div class="col-md-3">

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 text-right">前牙覆牙合:</div>
                    <div class="col-md-2">
                        <input type="radio" name="question_anterior_teeth_overbite	" value="0">正常
                    </div>
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-5"></div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <input type="radio" name="question_anterior_teeth_overbite	" value="1">深覆牙合I
                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="question_anterior_teeth_overbite	" value="2">深覆牙合II

                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="question_anterior_teeth_overbite	" value="3">深覆牙合III

                    </div>
                    <div class="col-md-5"></div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <input type="radio" name="question_anterior_teeth_overbite	" value="4">开牙合I
                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="question_anterior_teeth_overbite	" value="5">开牙合II

                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="question_anterior_teeth_overbite	" value="6">开牙合III
                    </div>
                    <div class="col-md-5"></div>
                </div>
                <div class="row">
                    <div class="col-md-1  text-right">前牙覆盖:</div>
                    <div class="col-md-2">
                        <input type="radio" name="question_anterior_teeth_covered	" value="0">正常
                    </div>
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-5"></div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <input type="radio" name="question_anterior_teeth_covered	" value="1">深覆盖I
                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="question_anterior_teeth_covered	" value="2">深覆盖II

                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="question_anterior_teeth_covered	" value="3">深覆盖III

                    </div>
                    <div class="col-md-5"></div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <input type="radio" name="question_anterior_teeth_covered	" value="4">反覆盖I
                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="question_anterior_teeth_covered	" value="5">反覆盖II

                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="question_anterior_teeth_covered	" value="6">反覆盖III

                    </div>
                    <div class="col-md-5"></div>
                </div>
                <div class="row">
                    <div class="col-md-1 text-right">拥挤度:</div>
                    <div class="col-md-3">
                        上颚 <input type="text" name="maxillary" style="width: 42px">mm
                    </div>
                    <div class="col-md-3">
                        下颚 <input type="text" name="jaws" style="width: 42px">mm


                    </div>
                    <div class="col-md-2">


                    </div>
                    <div class="col-md-5"></div>
                </div>
            </div>
            <div class="part6Text">
                <span>*</span>诊断
                <div class="sel" id="click_event6">^</div>
            </div>
            <div class="part6Cont" id="hidden_enent6">
                <div class="row">
                    <div class="col-md-1 text-right">骨性：</div>
                    <div class="col-md-2">
                        <input type="radio" name="diagnosis_bone_nature" value="0">I类
                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="diagnosis_bone_nature" value="1">II类

                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="diagnosis_bone_nature" value="2">III类
                    </div>
                    <div class="col-md-4"></div>
                </div>
                <div class="row">
                    <div class="col-md-1 text-right">牙性(安氏)：</div>
                    <div class="col-md-2">
                        <input type="radio" name="diagnosis_teeth_nature" value="0">I类

                    </div>
                    <div class="col-md-2">


                    </div>
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-5"></div>
                </div>

                <div class="row">
                    <div class="col-md-1 text-right"></div>
                    <div class="col-md-2">
                        <input type="radio" name="diagnosis_teeth_nature" value="1">II类I分类
                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="diagnosis_teeth_nature" value="2">II类I分类亚类

                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="diagnosis_teeth_nature" value="3">II类II分类
                    </div>
                    <div class="col-md-5"></div>
                </div>
                <div class="row">
                    <div class="col-md-1 text-right"></div>
                    <div class="col-md-2">
                        <input type="radio" name="diagnosis_teeth_nature" value="4">III类
                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="diagnosis_teeth_nature" value="5">II压类

                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="diagnosis_teeth_nature" value="6">III类亚类
                    </div>
                    <div class="col-md-5"></div>
                </div>

                <div class="row">
                    <div class="col-md-2">其他诊断：</div>

                    <textarea name="other_diagnosis" id="s" cols="30" rows="10" style="margin-left: 25px"></textarea>

                    <div class="col-md-2">

                    </div>


                </div>
            </div>
        </div>
    </div>
</form>


<footer>
    <div class="content">
        {{--<a href="{{url('caseOne')}}"><button class="pre">上一页</button></a>--}}
        <button onclick="submitForm()">下一页</button>
    </div>

</footer>

<script src="{{asset('reception/js/jquery.min.js')}}"></script>


<script>


    function submitForm()
    {

        $.ajax({
            type: 'post',
            url:'{{url('/api/case/addCaseInformationPage2')}}',
            dataType:'json',
            data:$('#oform').serialize(),
            success: function(data) {
                console.log(data);
                if (data.code == 200)
                {
                    window.location.href = "{{url('caseThree?orthodontics_id=')}}"+data.data;
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


    $('#click_event4').click(function(){
        $('#hidden_enent4').slideToggle();
    })

;
    $('#click_event5').click(function(){
        $('#hidden_enent5').slideToggle();
    })
    ;


    $('#click_event6').click(function(){
        $('#hidden_enent6').slideToggle();
    });


</script>



</body>
</html>
@stop