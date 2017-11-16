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
        layer.close(layer.index);
    }

    function tijiao (id)
    {
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
                        time: 3000 //2秒关闭（如果不配置，默认是3秒）
                    }, function(){
                        window.location.href = 'caseManagement';
                    });
                }else{
                    layer.msg(data['msg'], {
                        icon: 5,
                        time: 3000 //2秒关闭（如果不配置，默认是3秒）
                    })
                }
            }
        });
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
</script>
</body>
</html>
@endsection