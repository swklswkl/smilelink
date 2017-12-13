
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
            <img src="{{asset('reception/img/5.png')}}" alt="" >

        </div>

        <div class="part4Cont" id="hidden_enent1">
            <div class="part4Title">
                <span class="span2">Part1</span>
                <span class="span3">曲面断层</span>
            </div>
            <form class="form-horizontal">
                <div class="row">
                    <div class="col-lg-1"><input name="surface_fault_slice" @isset($data[0]) @if($data[0]['surface_fault_slice']==0) checked @endif @endisset value="0" type="radio">乳牙列</div>
                    <div class="col-lg-1"><input name="surface_fault_slice" value="1" @isset($data[0]) @if($data[0]['surface_fault_slice']==1) checked @endif @endisset type="radio">恒牙列</div>
                    <div class="col-lg-2"><input name="surface_fault_slice" value="2" @isset($data[0]) @if($data[0]['surface_fault_slice']==2) checked @endif @endisset type="radio">混合牙列</div>

                </div>

                <div class="row">
                    <div class="col-lg-1 text-right">其他目标</div>
                    <div class="col-lg-1">
                        <textarea name="other_target" id="" cols="30" rows="10" style="width: 900px">@isset($data[0]) {{$data[0]['other_target']}} @endisset</textarea>
                    </div>
                    <input type="hidden" name="orthodontics_id" value="{{$_GET['orthodontics_id']}}"/>
                    @isset($data[0])
                        <input name="edit" type="hidden" value="1"/>
                    @endisset
                    <input type="hidden" id="xfenxi" name="x_file" value="@isset($data) {{$data[0]['x_file']}} @endisset">
                </div>
            </form>
            <div style="width: 300px;position: relative">
                @if (isset($data))
                    @if($data[0]['x_file'])
                        <input type="hidden" id="flag" value="1">
                        <a id="xzx" href="{{$data[0]['x_file']}}" class="btn btn-success" target="_blank">下载X光</a>
                        <a id="cxsc" href="javascript:void(0);" onclick="reup()" class="btn btn-success" target="_blank">重新上传</a>
                    @else
                        <input type="hidden" id="flag" value="0">
                    @endif
                @endif
                <form id="upX">
                    上传X光：<input id="xg" onchange="upX(this)" type="file" name="file">
                </form>
                <div id="jdt1" style="margin-top: 6px;width: 100.67%;height: 15px;border: 1px solid black;opacity: 0.3;display: none"></div>
                <div id="jdt2" style="margin-top: 6px;width: 0%;height: 13px;background-color: rgb(105, 190, 40);position: absolute;top: 46px;left: 1px;"></div>
                <span id="jindutiao"></span>
                <span id="jindutiao2"></span>
                <button style="position: absolute;left: 200px;z-index: 9999999999"  onclick="haha(this.innerHTML)" id="yichu" type="button"></button>
            </div>
                {{--<div class="part4Title">--}}
                    {{--<span class="span2">Part2</span>--}}
                    {{--<span class="span3">头颅侧位片</span>--}}
                {{--</div>--}}
                {{--<div>--}}
                    {{--<img src="{{asset('reception/img/矩形3拷.png')}}" alt="">--}}
                {{--</div>--}}

            <div class="button1">
                <a> <button type="button" onclick="submitForm()">下一步 </button></a>
            </div>
        </div>
    </div>

</div>






<script src="{{asset('reception/js/jquery.min.js')}}"></script>
<script src="{{asset('reception/Bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('reception/js/layer/2.1/layer.js')}}"></script>
<script>
    if (document.getElementById('flag').value == 1)
    {
        $('#jdt1').hide();
        $('#jdt2').hide();
        $('#yichu').hide();
        $('#upX').hide();
    }else{
        $('#jdt1').hide();
        $('#jdt2').hide();
        $('#yichu').hide();
    }

    function submitForm()
    {
        $.ajax({
            type: 'post',
            url:'{{url('/api/odtcase/addXRayAnalysis')}}',
            dataType:'json',
            data:$('.form-horizontal').serialize(),
            success: function(data) {
                console.log(data);
                if (data.code == 200)
                {
                    @empty($data[0])
                        window.location.href = "{{url('createZhenJiCaseSix?orthodontics_id=')}}"+data.data;
                    @endempty
                    @isset($data[0])
                        window.location.href = "{{url('editCase6?orthodontics_id=').$_GET['orthodontics_id']}}";
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

    function upX()
    {

        var index = layer.load();
        $('#jindutiao').show();
        $('#jindutiao').html('');
        $('#jdt1').show();
        $('#jdt2').show();
        var data = new FormData(document.getElementById('upX'));
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function ()
        {
            if (xhr.readyState == 4 && xhr.status == 200)
            {
                eval('var data = '+xhr.responseText);
                if (data['code'] !== 200 )
                {
                    document.getElementById('jdt2').style.width = '0%';
                    layer.msg(data['msg']);
                    $('#yichu').text('移除文件');
                    layer.close(index);
                }else{
                    layer.close(index);
                    $('#jindutiao2').hide();
                    layer.msg('上传X光成功');
//                    document.getElementById('jindutiao').style.color = '';
                    document.getElementById('jindutiao').innerHTML = '上传成功';
                    document.getElementById('xfenxi').value = data['data']['file'];
                    $('#yichu').show();
                    $('#yichu').text('移除文件');
                }

            }

            if (xhr.readyState == 4 && xhr.status != 200)
            {
                if (xhr.status == 413)
                {
                    document.getElementById('jdt2').style.width = '0%';
                    layer.close(index);
                    $('#jindutiao').hide();
                    $('#jindutiao2').show();
                    document.getElementById('jindutiao2').style.color = 'red';
                    document.getElementById('jindutiao2').innerHTML = '上传失败，文件不能超过100MB';
                    $('#yichu').show();
                    $('#yichu').text('移除文件');
                    layer.msg('上传X光失败');
                }else{
                    document.getElementById('jdt2').style.width = '0%';
                    layer.close(index);
                    $('#jindutiao').hide();
                    $('#jindutiao2').show();
                    document.getElementById('jindutiao2').style.color = 'red';
                    document.getElementById('jindutiao2').innerHTML = '上传失败，请重新上传';
                    $('#yichu').show();
                    $('#yichu').text('移除文件');
                    layer.msg('上传X光失败');
                }

            }
        }
        xhr.upload.onprogress = function (e)
        {
            if (window.navigator.onLine == true)
            {
                e = e || event;
                var scale = (e.loaded / e.total) * 100;
                var scale = scale.toFixed(2);
                document.getElementById('jdt2').style.width = scale+ '%';
                document.getElementById('jindutiao').style.color = '';
                document.getElementById('jindutiao').innerHTML = '正在上传：'+ document.getElementById('jdt2').style.width;
            }else{
                $('#jindutiao2').hide();
                document.getElementById('jindutiao').style.color = 'red';
                document.getElementById('jindutiao').innerHTML = '网络错误';
                $('#yichu').show();
                $('#yichu').text('移除文件');
            }

        }
        xhr.open('post','/api/file/upX',true);
        xhr.send(data);
    }

    function haha(a)
    {
        if (a == '取消上传')
        {
            xhr.abort();
        }

        if (a == '移除文件')
        {
            $('#yichu').hide();
            document.getElementById('xfenxi').value = '';
            $('#upX').html('上传X光：<input id="xg" onchange="upX(this)" type="file" name="file">');
            $('#jdt1').hide();
            $('#jdt2').hide();
            $('#jindutiao2').hide();
            $('#jindutiao').hide();
        }
    }

    function reup ()
    {
        $('#xzx').hide();
        $('#cxsc').hide();
        $('#upX').show();
    }
</script>
</body>
</html>
