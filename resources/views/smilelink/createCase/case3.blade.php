<div id="motai" style="width: 100%;height: 100%;background-color: rgba(0,0,0,0.7);position: fixed;z-index: 999999;"></div>

@extends('smilelink.header')
        @section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    {{--<link rel="stylesheet" href="{{asset('reception/Bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css')}}">--}}

    {{--<link href="{{asset('reception/Bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css')}}" rel="stylesheet">--}}
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <!--<script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>-->
    <!--<script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>-->
    <![endif]-->
    <link rel="stylesheet" href="{{asset('reception/css/casePublic.css')}}">
    <link rel="stylesheet" href="{{asset('reception/css/case3.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        .col-md-1 {
            width: 9.333333%;
        }
        .row{margin-bottom: 10px}
        .lalala{padding-bottom: 5px;
            padding-top:5px;}
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
        <div class="part5Cont" id="hidden_enent4" style="position: relative;">
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
                    <div class="col-md-2">
                        <input type="radio" name="left_molar_fangs" value="3">中性偏近中

                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="left_molar_fangs" value="4">中性偏远中

                    </div>
                    {{--<div class="col-md-6"></div>--}}
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
                    <div class="col-md-2">
                        <input type="radio" name="right_molar_fangs" value="3">中性偏近中
                    </div>
                    <div class="col-md-2">
                        <input type="radio" name="right_molar_fangs" value="4">中性偏远中
                    </div>

                    {{--<div class="col-md-6"></div>--}}

                </div>
                其他目标:
                <textarea name="treatment_other_target" id="1" cols="30" rows="10" style="margin-bottom: 30px"></textarea>

                <input type="hidden" id="name" name="num" value="1">
                <div class="part6Text" style="border: 1px solid #ddd ;">
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
                    <div id="selectzhuanjia" style="width: 500px; min-height: 120px; background-color: #fff; position: fixed; top: 20%; left: 37%;z-index: 9999999;text-align: center">
                        <div style="width: 300px;margin:10px auto;">
                            <div class="form-group">
                                <label for="exampleInputEmail1">指定专家</label>
                                <input type="text" style="width: 300px; position: absolute; top: 34px; left: 100px;" onkeydown="cj(this.value)" onkeyup="cj(this.value)"  class="form-control" id="exampleInputEmail11111"  placeholder="请输入专家姓名">
                            </div>
                            <div id="amount" style="position: absolute; top: 77px;">
                                <span id="samount">订单金额：1000.00元</span>
                            </div>
                            <ul style="width: 300px; padding-top: 23px; text-align: left; border: 1px solid #ccd0d2;" id="uul">

                            </ul>
                            <div style="margin-top: 70px">
                                <button id="pay" style="width: 264px;margin-bottom: 10px" class="btn btn-default" type="button" onclick="zhifu()">支付</button>
                                {{--<button class="btn btn-default" type="button" onclick="nozhuanjia()"  data-toggle="tooltip" data-placement="left" data-original-title="不选择指定专家，让其他专家自己接单">不选择指定专家，让其他专家自己接单</button>--}}
                            </div>

                        </div>
                    </div>
                <input type="hidden" id="expert_id" name="expert_id" value="">
                <input type="hidden" id="jine"  name="amount" value="">
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

<script src="http://libs.baidu.com/jquery/2.1.4/jquery.min.js"></script>

<script src="{{asset('reception/js/layer/2.1/layer.js')}}"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
    $('#motai').hide();
    $('#pay').hide();
    $('#selectzhuanjia').hide();
    $('#uul').hide();
    $('#amount').hide();

    function submitForm(issub2) {
        $('#issub').val(issub2);
        if (issub2 == 2)
        {
            $('#motai').show();
            $('#selectzhuanjia').show();
        }else{
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

    function cj(a)
    {
        $('#amount').hide();
        $('#pay').hide();
        $('#uul').show();
        document.getElementById('uul').innerHTML = '查询中..';
        var pendingRequests = {};
        jQuery.ajaxPrefilter(function( options, originalOptions, jqXHR ) {
            var key = options.url;
            if (!pendingRequests[key]) {
                pendingRequests[key] = jqXHR;
            }else{
                pendingRequests[key].abort();   // 放弃先触发的提交，保留最后一次ajax请求
            }

            var complete = options.complete;
            options.complete = function(jqXHR, textStatus) {
                pendingRequests[key] = null;
                if (jQuery.isFunction(complete)) {
                    complete.apply(this, arguments);
                }
            };
        });
            $.ajax({
                type: 'get',
                url:'{{url('selectExperts')}}',
                dataType:'json',
                data:{
                    text:a
                },
                success: function(data) {
                    if (data['code'] == 200)
                    {
                        document.getElementById('uul').innerHTML = '';
                        for (var i =0;i<data['data'].length;i++)
                        {
                            var li = document.createElement('li');
                            li.innerHTML = '&nbsp;'+data['data'][i]['name']+'&nbsp;&nbsp;'+data['data'][i]['province']+'&nbsp;&nbsp;'+data['data'][i]['work_unit'];
                            li.setAttribute('data-id',data['data'][i]['id']);
                            li.setAttribute('name',data['data'][i]['name']);
                            li.setAttribute('amount',data['data'][i]['amount']);
                            li.setAttribute('onmousemove','lala(this)');
                            li.setAttribute('onmouseout','lalala(this)');
                            li.setAttribute('onclick','meme(this.getAttribute("name"),this.getAttribute("data-id"),this.getAttribute("amount"))');
                            li.setAttribute('class','lalala');
                            document.getElementById('uul').appendChild(li);
                        }
                    }else if(data['code'] == 402){
                        document.getElementById('uul').innerHTML = '';
                        var li = document.createElement('li');
                        li.innerHTML = data['msg'];
                        document.getElementById('uul').appendChild(li);
                    }
                }
            });
    }

    function lala (a)
    {
        a.style.color = '#fff';
        a.style.backgroundColor = '#1e90ff';
        a.style.cursor = 'hand';
    }

    function lalala (a)
    {
        a.style.color = '#636b6f';
        a.style.backgroundColor = '#fff';
        a.style.cursor = 'hand';
    }

    function meme (name,id,amount)
    {
        $('#uul').hide();
        $('#uul').html('');
        $('#samount').html('订单金额：'+amount+'元');
        $('#amount').show();
        document.getElementById('exampleInputEmail11111').value = name;
        document.getElementById('expert_id').value = id;
        document.getElementById('jine').value = amount;
        $('#pay').show();
    }

    function nozhuanjia()
    {
        document.getElementById('expert_id').value = '';
        document.getElementById('jine').value = '';
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

    function zhifu()
    {
        $.ajax({
            type: 'post',
            url:'{{url('/api/case/addCaseInformationPage3')}}',
            dataType:'json',
            data:$('#page3').serialize(),
            success: function(data) {
                console.log(data);
                if (data.code == 200)
                {
                    var base = new Base64();
                    var data = data.msg;
                    var res = base.encode(data);
                    window.location.href = "pay?dd="+res+"";
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
    function Base64() {

        // private property
        _keyStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";

        // public method for encoding
        this.encode = function (input) {
            var output = "";
            var chr1, chr2, chr3, enc1, enc2, enc3, enc4;
            var i = 0;
            input = _utf8_encode(input);
            while (i < input.length) {
                chr1 = input.charCodeAt(i++);
                chr2 = input.charCodeAt(i++);
                chr3 = input.charCodeAt(i++);
                enc1 = chr1 >> 2;
                enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
                enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
                enc4 = chr3 & 63;
                if (isNaN(chr2)) {
                    enc3 = enc4 = 64;
                } else if (isNaN(chr3)) {
                    enc4 = 64;
                }
                output = output +
                        _keyStr.charAt(enc1) + _keyStr.charAt(enc2) +
                        _keyStr.charAt(enc3) + _keyStr.charAt(enc4);
            }
            return output;
        }

        // public method for decoding
        this.decode = function (input) {
            var output = "";
            var chr1, chr2, chr3;
            var enc1, enc2, enc3, enc4;
            var i = 0;
            input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");
            while (i < input.length) {
                enc1 = _keyStr.indexOf(input.charAt(i++));
                enc2 = _keyStr.indexOf(input.charAt(i++));
                enc3 = _keyStr.indexOf(input.charAt(i++));
                enc4 = _keyStr.indexOf(input.charAt(i++));
                chr1 = (enc1 << 2) | (enc2 >> 4);
                chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
                chr3 = ((enc3 & 3) << 6) | enc4;
                output = output + String.fromCharCode(chr1);
                if (enc3 != 64) {
                    output = output + String.fromCharCode(chr2);
                }
                if (enc4 != 64) {
                    output = output + String.fromCharCode(chr3);
                }
            }
            output = _utf8_decode(output);
            return output;
        }

        // private method for UTF-8 encoding
        _utf8_encode = function (string) {
            string = string.replace(/\r\n/g,"\n");
            var utftext = "";
            for (var n = 0; n < string.length; n++) {
                var c = string.charCodeAt(n);
                if (c < 128) {
                    utftext += String.fromCharCode(c);
                } else if((c > 127) && (c < 2048)) {
                    utftext += String.fromCharCode((c >> 6) | 192);
                    utftext += String.fromCharCode((c & 63) | 128);
                } else {
                    utftext += String.fromCharCode((c >> 12) | 224);
                    utftext += String.fromCharCode(((c >> 6) & 63) | 128);
                    utftext += String.fromCharCode((c & 63) | 128);
                }

            }
            return utftext;
        }

        // private method for UTF-8 decoding
        _utf8_decode = function (utftext) {
            var string = "";
            var i = 0;
            var c = c1 = c2 = 0;
            while ( i < utftext.length ) {
                c = utftext.charCodeAt(i);
                if (c < 128) {
                    string += String.fromCharCode(c);
                    i++;
                } else if((c > 191) && (c < 224)) {
                    c2 = utftext.charCodeAt(i+1);
                    string += String.fromCharCode(((c & 31) << 6) | (c2 & 63));
                    i += 2;
                } else {
                    c2 = utftext.charCodeAt(i+1);
                    c3 = utftext.charCodeAt(i+2);
                    string += String.fromCharCode(((c & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
                    i += 3;
                }
            }
            return string;
        }
    }
</script>
</body>
</html>
@stop