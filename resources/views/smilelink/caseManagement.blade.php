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
        <button>查询</button>
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
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="{{asset('reception/Bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js')}}"></script>
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
                        option_service = '<a href="#">选择服务</a>';
                        perfect = '<a href="/">完善档案</a>';
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
                    $.each(v.service_name,function(key,val){
                        service += val[key]+" ";
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
</script>
</body>
</html>
@stop