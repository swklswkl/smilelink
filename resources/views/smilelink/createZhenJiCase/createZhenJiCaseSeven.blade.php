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
    <div class="content">
        <p>新建病例&gt;&gt;新增病例</p>

    </div>
</div>


<div class="part4">
    <div class="content">
        <div class="part2Title">
            <img src="{{asset('reception/img/7.png')}}" alt="" >

        </div>

        <div class="part4Cont" id="hidden_enent1" style="background-color: #e3f0e4;padding: 30px">
            <div class="part4Title" style="padding-bottom:0px ">
                <span class="span2" style="font-size: 28px;color: #e56424">Part1</span>
                <span class="span3" style="font-size: 20px;color: #e56424;">治疗进展</span>
            </div>
            <div style="text-align: right">
                <a href="{{url('createZhenJiCaseSeven/edit?orthodontics_id=').$_GET['orthodontics_id'].'&add=1'}}"> <button style="margin-right: 47px;background:#6abe28;color: white;font-size:18px;height: 50px;width: 150px;border-radius: 10px;border: 1px solid gainsboro;">新增治疗方案</button></a>
            </div>

            <div class="table" style="width: 1100px;margin-top: 20px">
                <table class="table table-condensed table-hover">
                    <tr class="active">
                        <td>治疗进展名称</td>
                        <td>提交时间</td>
                        <td>操作</td>
                    </tr>

                </table>

            </div>

            <div class="button1">
                 <a href="{{url('caseManagement ')}}"> <button >确认 </button></a>
            </div>
        </div>
    </div>

</div>

<script src="{{asset('reception/js/jquery.min.js')}}"></script>
<script src="{{asset('reception/Bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('reception/js/layer/2.1/layer.js')}}"></script>
<script>
    //加载治疗列表
   $(function(){
       $.ajax({
           type: 'get',
           url:'{{url('/api/odtcase/inquireTreatmentProcess')}}',
           dataType:'json',
           data:{orthodontics_id:"{{$_GET['orthodontics_id']}}"},
           success: function(data) {
               console.log(data);
               if (data.code == 200)
               {
                   $.each(data.data,function(key,val){
                   $('.table.table-condensed.table-hover').append('<tr class="success">\n' +
                            '                        <td >'+val.name+'</td>\n' +
                            '                        <td >'+val.create_time+'</td>\n' +
                            '                        <td ><a href="{{url('createZhenJiCaseSeven/edit?orthodontics_id=')}}'+val.orthodontics_id+'&id='+val.id+'">查看</a> <a href="{{url('createZhenJiCaseSeven/edit?orthodontics_id=')}}'+val.orthodontics_id+'&id='+val.id+'&edit=1">编辑</a> <a onclick="Delplan('+val.id+')">删除</a></td>\n' +
                            '                    </tr>');
                   })
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
   })
//删除
    function Delplan(a) {
        $.ajax({
            type: 'post',
            url: '{{url('/api/odtcase/deleteTreatmentProcess')}}',
            dataType: 'json',
            data: {id: a},
            success: function (data) {
                if (data.code == 200) {
                    window.location.href = "{{url('createZhenJiCaseSeven?orthodontics_id=').$_GET['orthodontics_id']}}";
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
        });
    }
</script>
</body>
</html>
