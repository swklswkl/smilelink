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
    <link rel="stylesheet" href="{{asset('reception/css/case3.css')}}">
    <style>
        .col-md-1 {
            width: 9.333333%;
        }
        .row{margin-bottom: 10px}

    </style>
</head>
<body>
<div class=" crumbs">
    <div class="content"><p>新建病例&gt;&gt;新增病例</p></div>

</div>
<div class="part6">
    <div class="content">
        <div class="part5Title">
            <span class="span2">Part6</span>
            <span class="span3">矫正计划</span>
        </div>
        <div class="part5Text">
            <span>*</span>问题列表
            <div class="sel" id="click_event4">^</div>
        </div>
        <div class="part5Cont" id="hidden_enent4">
            <form id="page3">
                <input type="hidden" name="orthodontics_id" value="{{$_GET['orthodontics_id']}}">
                <div class="row">
                    <div class="col-md-1 text-right">面型:</div>
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="face_type" value="0">维持
                    </div>

                    <div class="col-md-1">
                        <input type="radio" name="face_type" value="1">改善
                    </div>
                    <div class="col-md-6"></div>
                </div>
                <div class="row">
                    <div class="col-md-1 text-right">牙型:</div>

                    <div class="col-md-1">
                       上颌中线:
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="maxillary_midline" value="0">居中

                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="maxillary_midline" value="1">左偏斜
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="maxillary_midline" value="2">右偏斜
                    </div>
                    <div class="col-md-6"></div>
                </div>
                <div class="row">
                    <div class="col-md-1 text-right"></div>
                    <div class="col-md-1">
                       下颌中线:
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="mandibular_midline" value="0">居中

                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="mandibular_midline" value="1">左偏斜
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="mandibular_midline" value="2">右偏斜
                    </div>
                    <div class="col-md-7"></div>
                </div>
                <div class="row">
                    <div class="col-md-1 text-right"></div>
                    <div class="col-md-1">
                       前牙覆牙合:
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="target_anterior_teeth_overbite	" value="0">正常

                    </div>
                    <div class="col-md-5"></div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>

                    <div class="col-md-1">
                        <input type="radio" name="target_anterior_teeth_overbite	" value="1">深覆牙合I
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="target_anterior_teeth_overbite	" value="2">深覆牙合II

                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="target_anterior_teeth_overbite	" value="3">深覆牙合III
                    </div>
                    <div class="col-md-6"></div>

                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>

                    <div class="col-md-1">
                        <input type="radio" name="target_anterior_teeth_overbite	" value="4">开牙合I
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="target_anterior_teeth_overbite	" value="5">开牙合II

                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="teeth" value="6">开牙合III
                    </div>
                    <div class="col-md-6"></div>

                </div>
                <div class="row">
                    <div class="col-md-1 text-right"></div>
                    <div class="col-md-1">
                        前牙覆盖:
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="target_anterior_teeth_covered	" value="0">正常

                    </div>

                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>

                    <div class="col-md-1">
                        <input type="radio" name="target_anterior_teeth_covered	" value="1">深覆盖I
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="target_anterior_teeth_covered	" value="2">深覆盖II

                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="target_anterior_teeth_covered	" value="3">深覆盖III
                    </div>
                    <div class="col-md-6"></div>

                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>

                    <div class="col-md-1">
                        <input type="radio" name="target_anterior_teeth_covered	" value="4">反覆盖I
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="target_anterior_teeth_covered	" value="5">反腐败II

                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="target_anterior_teeth_covered	" value="6">反覆盖III
                    </div>
                    <div class="col-md-6"></div>

                </div>
<!---->
                <div class="row">
                    <div class="col-md-1 text-right"></div>
                    <div class="col-md-1">
                        尖牙关系:
                    </div>
                    <div class="col-md-1">
                        左侧

                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="left_fangs" value="0">中性

                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="left_fangs" value="1">近中

                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="left_fangs" value="2">远中

                    </div>
                    <div class="col-md-6"></div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>

                    <div class="col-md-1">
                        右侧
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="right_fangs" value="0">中性

                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="right_fangs" value="1">近中
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="right_fangs" value="2">远中
                    </div>

                    <div class="col-md-6"></div>

                </div>

                <div class="row">
                    <div class="col-md-1 text-right"></div>
                    <div class="col-md-1">
                        磨牙关系:
                    </div>
                    <div class="col-md-1">
                        左侧

                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="left_molar_fangs" value="0">中性

                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="left_molar_fangs" value="1">近中

                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="left_molar_fangs" value="2">远中

                    </div>
                    <div class="col-md-6"></div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>

                    <div class="col-md-1">
                        右侧
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="right_molar_fangs" value="0">中性

                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="right_molar_fangs" value="1">近中
                    </div>
                    <div class="col-md-1">
                        <input type="radio" name="right_molar_fangs" value="2">远中
                    </div>

                    <div class="col-md-6"></div>

                </div>
                其他目标:
                <textarea name="treatment_other_target" id="1" cols="30" rows="10"></textarea>

                <input type="hidden" id="name" name="num" value="1">
                <div class="part6Text" style="border: 2px solid #c2c2c2 ;">
                    <span>*</span>治疗方案
                    <div class="sel" id="click_event7">^</div>
                </div>
                <div class="part6Cont1" id="hidden_enent7">
                        <p>    方案1：</p>
                    <input type="hidden" name="program_name1" value="方案1">
                        <textarea name="content1" id="" cols="30" rows="10"></textarea>
                    {{--<input type="radio">待测量分析报告上传后再填写方案，请点击勾选。--}}
                </div>
                <button type="button" onclick="add()" style="    width: 200px;height: 52px;background: #e3f0e4;border: 1px solid darkgray;margin-top: 30px;">+ 添加新方案</button>
                <input type="hidden" name="issub" id="issub" value="1">
            </form>

        </div>
    </div>
</div>


<footer>
    <div class="footT">
        {{--<div class="content">--}}
            {{--<input type="radio">我已认真阅读并同意该 <a href="#">《法律条款》</a>--}}

        {{--</div>--}}

    </div>
    <div class="content">
        <button class="pre" onclick="submitForm(1)">保存</button>
        <button class="sub" onclick="submitForm(2)">提交</button>
        {{--<a href="{{url('caseTwo')}}"><button>上一页</button></a>--}}

    </div>

</footer>

<script src="{{asset('reception/js/jquery.min.js')}}"></script>

<script>


    function submitForm(issub2)
    {
        $('#issub').val(issub2);
        $.ajax({
            type: 'post',
            url:'{{url('/api/case/addCaseInformationPage3')}}',
            dataType:'json',
            data:$('#page3').serialize(),
            success: function(data) {
                console.log(data);
                if (data.code == 200)
                {
                    window.location.href = "{{url('caseManagement')}}";
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
   function add ()
   {
       var num = document.getElementById('name').value;
       if (num < 5)
       {
           parseInt(num);
           ++num;
           var odiv = document.createElement('div');
           var div = document.getElementById('hidden_enent7');
           var hr = document.createElement('hr');
           var p = document.createElement('p');
           p.innerHTML = '方案'+num;
           var input = document.createElement('textarea');
           var input2 = document.createElement('input');
           input2.setAttribute('type','hidden');
           input2.setAttribute('name','program_name'+num);
           input2.setAttribute('value','方案'+num);
           input.setAttribute('name','content'+num);
           input.setAttribute('cols',30);
           input.setAttribute('rows',10);
           document.getElementById('name').setAttribute('value',num);
           odiv.appendChild(hr);
           odiv.appendChild(p);
           odiv.appendChild(input2);
           odiv.appendChild(input);
           odiv.setAttribute('id','jlgl'+num);
           div.appendChild(odiv);
       }
   }
    $('#click_event4').click(function(){
        $('#hidden_enent4').slideToggle();
    })

    ;
    $('#click_event5').click(function(){
        $('#hidden_enent5').slideToggle();
    })
    ;


    $('#click_event7').click(function(){
        $('#hidden_enent7').slideToggle();
    });
</script>
</body>
</html>
@stop