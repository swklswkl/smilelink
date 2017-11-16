@extends('smilelink.header')

@section('content')
<html>
<head>
<meta charset="UTF-8">
<title>我的订单</title>
<link rel="stylesheet" href="reception/Bootstrap/bootstrap-3.3.7-dist/css/bootstrap.css">
<link rel="stylesheet" href="reception/css/casePublic.css">
<link rel="stylesheet" href="reception/css/caseManagement.css">
<script type="text/javascript" src="reception/js/jquery.1.8.3.js"></script>
<script type="text/javascript" src="reception/js/jquery.SuperSlide.2.1.source.js"></script>
</head>
<style type="text/css">
    /* css 重置 */
    *{margin:0; padding:0; list-style:none; }
    body{ background:#fff; font:normal 16px/22px 微软雅黑;  }
    img{ border:0;  }
    a{ text-decoration:none; color:#333;  }
    a:hover{ color:#1974A1;  }
.content{}
    /* 本例子css */
    .slideTxtBox{ width:1201px;  text-align:left;  }
    .slideTxtBox .hd{ height:54px; line-height:54px; background:white; padding:0 10px 0 20px;    position:relative; }
    .slideTxtBox .hd ul{ float:left;  position:absolute; left:20px; top:-1px;   }
    .slideTxtBox .hd ul li{ float:left; padding:0 30px; cursor:pointer; font-size: 20px;color: #3c3c3c ;border-radius: 30px 30px 0 0; }
    .slideTxtBox .hd ul li.on{ height:55px;  background:#69be28; border-bottom:4px solid #69be28; font-size: 20px;color: #fff;}
    .slideTxtBox .bd ul{   zoom:1;  height: 650px;position: relative;border:1px solid #ddd;}
    .slideTxtBox .bd li{ height:24px; line-height:24px;   }
    .slideTxtBox .bd li .date{ float:right; }
    .pagination{;top: 400px;}
</style>
<body>
    {{--<div class="search">--}}
        {{--<div class="content">--}}
            {{--<div class="mySelect">--}}
                {{--<input type="text" placeholder="请选择病例状态" class="input">--}}
                {{--<ul>--}}
                    {{--<li>治疗中</li>--}}
                    {{--<li>分析报告已上传</li>--}}
                    {{--<li>档案已指导</li>--}}
                    {{--<li>资料已提交</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
            {{--<div class="input1">--}}
                {{--<input type="text">--}}
            {{--</div>--}}
            {{--<div class="searchButton">--}}
                {{--<button>查询</button>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="content">
        <div class="slideTxtBox">
            <div class="hd">
                <ul >
                    <li id="qbdd">全部订单（-）</li><li id="yjd">已接单（-）<li id="ytjsj">已提交设计（-）</li><li id="yjs">已结束（-）</li>
                </ul>
            </div>
            <div class="bd">
                <!--全部订单-->
                <ul class="u11">
                    <div class="tableBox">
                        <div class="content">
                            <div class="table">
                                <table class="table table-condensed table-hover">
                                    <tr class="success" style="text-align:center">
                                        <td style="padding-left: 31px;">订单编号</td>
                                        <td>病历编号</td>
                                        <td>服务内容</td>
                                        <td>金额</td>
                                        <td>创建日期</td>
                                        <td>操作</td>
                                    </tr>
                                    {{--{{dd($data)}}--}}
                                    @if($qbdd == null)
                                    <tr class="active">
                                        <td  style="text-align: center;padding-left: 31px;" colspan="6">暂无订单</td>
                                    </tr>
                                    @else
                                        @foreach($qbdd as $value)
                                        <tr class="active" style="text-align: center">
                                            <td  style="padding-left: 31px;">{{$value['number']}}</td>
                                            <td >{{$value['orthodontics_id']}}</td>
                                            <td >
                                                @foreach($value['service'] as $v)
                                                   {{$v['service_name']}}
                                                @endforeach
                                            </td>
                                            <td>{{$value['amount']}}</td>
                                            <td >{{date('Y-m-d H:i:s',$value['create_time'])}}</td>

                                            <td ><a href="caseManage2?orthodontics_id={{$value['orthodontics_id']}}" target="_blank">查看</a></td>

                                        </tr>
                                        @endforeach
                                    @endif
                                </table>
                            </div>
                            <div class="col-lg-4"></div>

                            <div class="col-lg-4"></div>
                        </div>
                    </div>
                </ul>
                <!--已接单-->
                <ul class="u11">
                    <div class="tableBox">
                        <div class="content">
                            <div class="table">
                                <table class="table table-condensed table-
hover">
                                    <tr class="success" style="text-align:center">
                                        <td style="padding-left: 31px;">订单编号
                                        </td>
                                        <td>病历编号</td>
                                        <td>服务内容</td>
                                        <td>金额</td>
                                        <td>创建日期</td>
                                        <td>病例操作</td>
                                    </tr>
                                    @if($yjd == null)
                                        <tr class="active">
                                            <td  style="text-align: center;padding-
left: 31px;" colspan="6">暂无订单</td>
                                        </tr>
                                    @else
                                        @foreach($yjd as $value)
                                            <tr class="active" style="text-align:
center">
                                                <td  style="padding-left: 31px;">
                                                    {{$value['number']}}</td>
                                                <td >{{$value['orthodontics_id']}}</td>
                                                <td >
                                                    @foreach($value['service'] as $v)
                                                        {{$v['service_name']}}
                                                    @endforeach
                                                </td>
                                                <td>{{$value['amount']}}</td>
                                                <td >{{date('Y-m-d H:i:s',$value['create_time'])}}</td>
                                                <td ><a href="caseManage2?
orthodontics_id={{$value['orthodontics_id']}}" target="_blank">查看
                                                    </a>
                                                    <a href="auditOpinion?orthodontics_id={{$value['orthodontics_id']}}" target="_blank">方案审核</a>
                                                    <a href="conceptualDesign?orthodontics_id={{$value['orthodontics_id']}}" target="_blank">提交设计方案</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </table>
                            </div>
                            <div class="col-lg-4"></div>

                            <div class="col-lg-4"></div>
                        </div>
                    </div>
                </ul>

                <ul class="u11">
                    <div class="tableBox">
                        <div class="content">
                            <div class="table">
                                <table class="table table-condensed table-
hover">
                                    <tr class="success" style="text-align:center">
                                        <td style="padding-left: 31px;">订单编号
                                        </td>
                                        <td>病历编号</td>
                                        <td>服务内容</td>
                                        <td>金额</td>
                                        <td>创建日期</td>
                                        <td>病例操作</td>
                                    </tr>
                                    @if($ytjsj == null)
                                        <tr class="active">
                                            <td  style="text-align: center;padding-
left: 31px;" colspan="6">暂无订单</td>
                                        </tr>
                                    @else
                                        @foreach($ytjsj as $value)
                                            <tr class="active" style="text-align:
center">
                                                <td  style="padding-left: 31px;">
                                                    {{$value['number']}}</td>
                                                <td >{{$value['orthodontics_id']}}</td>
                                                <td >
                                                    @foreach($value['service'] as $v)
                                                        {{$v['service_name']}}
                                                    @endforeach
                                                </td>
                                                <td>{{$value['amount']}}</td>
                                                <td >{{date('Y-m-d H:i:s',$value['create_time'])}}</td>
                                                <td ><a href="caseManage2?
orthodontics_id={{$value['orthodontics_id']}}" target="_blank">查看
                                                    </a></td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </table>
                            </div>
                            <div class="col-lg-4"></div>

                            <div class="col-lg-4"></div>
                        </div>
                    </div>
                </ul>
                <ul class="u11">
                    <div class="tableBox">
                        <div class="content">
                            <div class="table">
                                <table class="table table-condensed table-
hover">
                                    <tr class="success" style="text-align:center">
                                        <td style="padding-left: 31px;">订单编号
                                        </td>
                                        <td>病历编号</td>
                                        <td>服务内容</td>
                                        <td>金额</td>
                                        <td>创建日期</td>
                                        <td>病例操作</td>
                                    </tr>
                                    @if($yjs == null)
                                        <tr class="active">
                                            <td  style="text-align: center;padding-
left: 31px;" colspan="6">暂无订单</td>
                                        </tr>
                                    @else
                                        @foreach($yjs as $value)
                                            <tr class="active" style="text-align:
center">
                                                <td  style="padding-left: 31px;">
                                                    {{$value['number']}}</td>
                                                <td >{{$value['orthodontics_id']}}</td>
                                                <td >
                                                    @foreach($value['service'] as $v)
                                                        {{$v['service_name']}}
                                                    @endforeach
                                                </td>
                                                <td>{{$value['amount']}}</td>
                                                <td >{{date('Y-m-d H:i:s',$value['create_time'])}}</td>
                                                <td ><a href="caseManage2?
orthodontics_id={{$value['orthodontics_id']}}" target="_blank">查看
                                                    </a></td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </table>
                            </div>
                            <div class="col-lg-4"></div>
                            {{--<div class="col-lg-4">--}}
                                {{--<nav aria-label="Page navigation">--}}
                                    {{--<ul class="pagination" style="border: none">--}}
                                        {{--<li>--}}
                                            {{--<a href="#" aria-label="Previous">--}}
                                                {{--<span aria---}}
                                                      {{--hidden="true">&laquo;</span>--}}
                                            {{--</a>--}}
                                        {{--</li>--}}
                                        {{--<li><a href="#" style="background:--}}
{{--#69be28">1</a></li>--}}
                                        {{--<li><a href="#">2</a></li>--}}
                                        {{--<li><a href="#">3</a></li>--}}
                                        {{--<li><a href="#">4</a></li>--}}
                                        {{--<li><a href="#">5</a></li>--}}
                                        {{--<li>--}}
                                            {{--<a href="#" aria-label="Next">--}}
                                                {{--<span aria---}}
                                                      {{--hidden="true">&raquo;</span>--}}
                                            {{--</a>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                {{--</nav>--}}
                            {{--</div>--}}
                            <div class="col-lg-4"></div>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </div>
    <script>
        window.onload = function ()
        {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function ()
            {
                if (xhr.readyState == 4 && xhr.status == 200)
                {
                    eval('var data = ' + xhr.responseText);
                    document.getElementById('qbdd').innerHTML = '全部订单（'+data['data']['全部订单']+'）';
                    document.getElementById('ytjsj').innerHTML = '已提交设计（'+data['data']['已提交设计']+'）';
                    document.getElementById('yjs').innerHTML = '已结束（'+data['data']['已结束']+'）';
                    document.getElementById('yjd').innerHTML = '已接单（'+data['data']['已接单']+'）';
                }
            }
            xhr.open('get','/api/expert/findOrdersQuantity?expert_id={{session()->get('expert.id')}}',true);
            xhr.send();
        }
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
        jQuery(".slideTxtBox").slide({effect:"fold",trigger:"click"});
    </script>
</body>
</html>
@endsection