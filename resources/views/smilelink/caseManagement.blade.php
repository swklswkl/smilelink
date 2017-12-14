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
    <link href="{{asset('reception/Bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('reception/css/casePublic.css')}}">
    <link rel="stylesheet" href="{{asset('reception/css/caseManagement.css')}}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="{{asset('reception/js/jquery.1.8.3.js')}}"></script>
    <style>
        .aa{
            border-color: #58a51c;
            background-color: #69bd28;
            color: #fff;
        }
    </style>
</head>
<body>
<div class="search">
<div class="content">
    <div class="mySelect">
        <input type="text" placeholder="请选择病例状态" class="input">
        <ul>
            <li>治疗中</li>
            <li>分析报告已上传</li>
            <li>档案已指导</li>
            <li>资料已提交</li>

        </ul>



    </div>
    <div class="input1">
        <input type="text">
    </div>
    <div class="searchButton">
        <button id="search">查询</button>
    </div>
</div>
</div>
<form class="form-horizontal">
<div class="tableBox">
    <div class="content">
    <div class="table">
        <table class="table table-condensed table-hover" id="addList">
            <tr class="success">
                <td>病历号</td>
                <td>患者姓名</td>
                <td>创建日期</td>
                <td>病例状态</td>
                <td>服务类型</td>
                <td>病例操作</td>

            </tr>


        </table>

    </div>
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <nav aria-label="Page navigation">
                <ul class="pagination" >
                    <li>
                        <a id="first_page_url" aria-label="Previous">
                            <span aria-hidden="true">首页</span>
                        </a>
                    </li>
                    <li><a id="prev_page_url" style="background: #69be28">上一页</a></li>


                    <li><a id="next_page_url" >下一页</a></li>
                    <li>
                        <a id="last_page_url" aria-label="Next">
                            <span aria-hidden="true">尾页</span>
                        </a>
                    </li>
                    <li><a id="total" >共页</a></li>
                </ul>
            </nav>
        </div>
        <div class="col-lg-4"></div>
        <input type="hidden" name="doctor_id" value="{{session()->get('doctor.id')}}"/>
        <input type="hidden" name="page" value="1"/>

    </div>
</div>

</form>

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
            <button class="btn btn-default" type="button" onclick="nozhuanjia()"  data-toggle="tooltip" data-placement="left" data-original-title="不选择指定专家，让其他专家自己接单">不选择指定专家，让其他专家自己接单</button>
        </div>

    </div>
</div>
<input type="hidden" id="expert_id" name="expert_id" value="">
<input type="hidden" id="jine"  name="amount" value="">

<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="/reception/js/layer/2.1/layer.js"></script>
<script src="{{asset('reception/Bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js')}}"></script>
        <script>
            $('input').focus(function(){
                //alert(123);
                $(this).next().slideDown();

            });
            //给输入框赋值
            $('.mySelect li').click(function () {
                var value = $(this).html();//获取li的内容
                //找input
                $(this).parent().parent().find('input').val(value);//赋值
                $(this).parent().slideUp();//消失
            });

        </script>
<script>
    $('#motai').hide();
    $('#pay').hide();
    $('#selectzhuanjia').hide();
    $('#uul').hide();
    $('#amount').hide();
    $.ajax({
        type: 'get',
        url: '{{url('/api/doctor/findOrthdonicCase')}}',
        dataType: 'json',
        data: $('.form-horizontal').serialize(),
        success: function (data) {
            if (data.code == 200) {
                console.log(data.data)
                //遍历分页属性链接
                $.each(data.data,function(k,v){
                    console.log(k+'=='+v)
                    $('.pagination').append();
                });
                //遍历列表信息
                $.each(data.data.data,function(k,v){
                    var oid = v.id;
                    var status='';
                    var option_service='';
                    var perfect='';
                    if( v.status=='1' ){
                        status ='档案已建立';
                        option_service = '<a href="javascript:void(0);" data-id="'+oid+'"'+'onclick=selectfuwu(this.getAttribute("data-id"))>选择服务</a>';
                        perfect = '<a href="{{url('editCase1?orthodontics_id=')}}'+oid+'">完善档案</a>';
                    }else if(v.status=='2'){
                        status ='档案已提交';
                        perfect = '<a href="/editprogram?orthodontics_id='+oid+'">维护方案</a>';
                    }else if (v.status=='3')
                    {
                        status ='治疗中';
//                        perfect = '<a href="#">完善档案</a>';
                    } else{
                        status ='已完成';
                    }
                    var service='';
                    $.each(v.service,function(key,val){
                        service += val['service_name']+" ";
                    });
                    var id=v.id;
                    var content = "<tr class=\"active\">\n" +
                        "<td >"+v.id+"</td>\n" +
                        "<td >"+v.name+"</td>\n" +
                        "<td >"+v.create_time+"</td>\n" +
                        "<td>"+status+"</td>\n" +
                        "<td>"+service+"</td>"+
                        "<td ><a href='{{url('caseManage?orthodontics_id=')}}"+id+"'>查看</a> "+option_service+" "+perfect+"</td>\n" +
                        " </tr>";
                    $('#addList').append(content);


                })
            } else {
                if (data.code == 401) {
                    $.each(data.msg, function (key, val) {
                        layer.tips(val, '#' + key);
                    })
                }
                if (data.code == 402) {
                    layer.msg(data.msg);
                }
            }
        }
    })

    function selectfuwu (id)
    {
        layer.open({
            type: 1
            ,title: '选择服务' //不显示标题栏
            ,closeBtn: false
            ,area: '300px;'
            ,shade: 0.5
            ,id: 'LAY_layuipro' //设定一个id，防止重复弹出
            ,resize: false
            ,moveType: 1 //拖拽模式，0或者1
            ,content: '<div style="width:300px;height:450px;background-color:#fff;text-align:center;position:relative"><form id="oform"><div style="width:165px;text-align:center;margin:0 auto"><h4>基础服务</h4><span style="display:inline-block;width:72px;height:2px;background-color:#69be28;margin-bottom:5px"></span><span style="display:inline-block;width:165px;height:40px;text-align:center;line-height:40px;background:url(reception/img/yes3.png);margin-bottom:10px">正畸档案</span></div><div style="width:165px;text-align:center;margin:0 auto"><h4>影像资料分析</h4><span style="display:inline-block;width:110px;height:2px;background-color:#69be28;margin-bottom:5px"></span><input type="checkbox" name="service_id[]" value="3" s="0" zj="0" id="xginput" style="position:absolute;left:75px;top:128px;height:41px;width:150px;cursor:hand;opacity:0" onclick="dian(this,this.nextElementSibling)"><span id="xg" style="display:inline-block;width:165px;height:40px;text-align:center;line-height:40px;border:1px solid gray;margin-bottom:10px">X光片分析</span><input type="checkbox" name="service_id[]" value="4" s="0" zj="0" id="mbinput" style="position:absolute;left:75px;top:179px;height:41px;width:150px;cursor:hand;opacity:0" onclick="dian(this,this.nextElementSibling)"><span id="mb" style="display:inline-block;width:165px;height:40px;text-align:center;line-height:40px;border:1px solid gray;margin-bottom:10px">面部照片分析</span></div><div style="width:165px;text-align:center;margin:0 auto"><h4>专家指导服务</h4><span style="display:inline-block;width:110px;height:2px;background-color:#69be28;margin-bottom:5px"></span><input type="checkbox" name="service_id[]" id="zjinput" value="8" s="0" zj="1" style="position:absolute;left:75px;top:274px;height:41px;width:150px;cursor:hand;opacity:0" onclick="dian(this,this.nextElementSibling)"><span id="zjzd" style="display:inline-block;width:165px;height:40px;text-align:center;line-height:40px;border:1px solid gray;margin-bottom:10px">治疗计划专家指导</span></div><div style="margin-top:25px"><input type="hidden" name="id" value="\''+id+'\'"> <span class="tijiao" style="display:inline-block;width:100px;height:30px;background-color:#69be28;line-height:30px;color:#fff;cursor:hand;margin-right:2px" onclick="tijiao(\''+id+'\')">提交</span><span class="quxiao" style="display:inline-block;width:100px;height:30px;background-color:#69be28;line-height:30px;color:#fff;cursor:hand;margin-left:2px" onclick="guanbi()">取消</span></div></form></div>'
            ,success: function(layero)
            {
            }
        });
    }

    function guanbi ()
    {
        layer.closeAll();
    }

    function tijiao (id)
    {
        var xg = document.getElementById('xginput').checked.toString();
        var mb = document.getElementById('mbinput').checked.toString();
        var sj = document.getElementById('zjinput').checked.toString();
        var str = xg+mb+sj;

        if ( str=='falsefalsefalse' )
        {
            layer.msg('请选择服务', {
                icon: 5,
                time: 2000 //2秒关闭（如果不配置，默认是3秒）
            });
        }else{
            $.ajax({
                type: 'post',
                url:'{{url('/api/odtcase/optionService')}}',
                dataType:'json',
                data:$('#oform').serialize(),
                success: function(data) {
                    if (data['code'] == 200)
                    {
                        layer.msg(data['msg'], {
                            icon: 6,
                            time: 2000 //2秒关闭（如果不配置，默认是3秒）
                        }, function(){
                            layer.closeAll();
                            $('#motai').show();
                            $('#selectzhuanjia').attr('ocid',id);
                            $('#selectzhuanjia').show();
//                            window.location.href = 'caseManagement';
                        });
                    }else{
                        layer.msg(data['msg'], {
                            icon: 5,
                            time: 2000 //2秒关闭（如果不配置，默认是3秒）
                        })
                    }
                }
            });
        }

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
                next.style.border= '0px';
                document.getElementById('xg').style.background = '';
                document.getElementById('xg').style.border = '1px solid gray';
                document.getElementById('xginput').setAttribute('s',0);
                document.getElementById('xginput').checked = false;
                document.getElementById('mbinput').setAttribute('s',0);
                document.getElementById('mb').style.background = '';
                document.getElementById('mb').style.border = '1px solid gray';
                document.getElementById('mbinput').checked = false;
            }else{
                console.log(2222222);
                dq.setAttribute('s',1);
                next.style.background= 'url("reception/img/yes3.png")';
                next.style.border = '0px';
                document.getElementById('zjinput').setAttribute('s',0);
                document.getElementById('zjzd').style.background = '';
                document.getElementById('zjzd').style.border = '1px solid gray';
                document.getElementById('zjinput').checked = false;
            }
        }else {
            dq.setAttribute('s',0);
            next.style.background= '';
            next.style.border= '1px solid gray';
        }
    }

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
    function zhifu()
    {
        $.ajax({
            type: 'get',
            url:'/api/case/setOrder?ocid='+$('#selectzhuanjia').attr('ocid')+'&eid='+$('#expert_id').val()+'&amount='+$('#jine').val(),
            success: function(data) {
                console.log(data);
                eval('var data = '+data);
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
@endsection