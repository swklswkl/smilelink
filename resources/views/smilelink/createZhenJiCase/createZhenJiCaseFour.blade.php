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
            <span ><a href="{{url('createZhenJiCaseOne')}}">新建病例</a></span>
            <span class="span1"><a href="{{url('caseManage')}}">病例管理</a></span>
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

            <form action="">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-2"><h3>正面</h3></div>

                </div>
                <div class="row">
                    <div class="col-lg-2 text-right">对称性：</div>
                    <div class="col-lg-1"><input type="radio" name="symmetry" value="0">对称</div>
                    <div class="col-lg-1"><input type="radio" name="symmetry" value="1">不对称</div>
                </div>
                <div class="row">
                    <div class="col-lg-2 text-right">頦点：</div>
                    <div class="col-lg-1"><input type="radio" name="chin_point" value="0">居中</div>
                    <div class="col-lg-1"><input type="radio" name="chin_point" value="1">偏左</div>
                    <div class="col-lg-1"><input type="radio" name="chin_point" value="2">偏右</div>
                </div>
                <div class="row">
                    <div class="col-lg-2 text-right">开唇露齿：</div>
                    <div class="col-lg-1"><input type="radio" name="teeth_open_lips" value="0">否</div>
                    <div class="col-lg-1"><input type="radio" name="teeth_open_lips" value="1">是</div>
                </div>
                <div class="row">
                    <div class="col-lg-2 text-right">微笑露根：</div>
                    <div class="col-lg-1"><input type="radio" name="smile_reveal_gums" value="0">否</div>
                    <div class="col-lg-1"><input type="radio" name="smile_reveal_gums" value="1">是</div>
                </div>
                <div class="row">
                    <div class="col-lg-2 text-right">平面：</div>
                    <div class="col-lg-1"><input type="radio" name="plane" value="0">不偏斜</div>
                    <div class="col-lg-1"><input type="radio" name="plane" value="1">偏斜</div>
                </div>

                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-2"><h3>侧面</h3></div>

                </div>
                <div class="row">
                    <div class="col-lg-2 text-right">侧面形态：</div>
                    <div class="col-lg-1"><input type="radio" name="side_shape" value="0">直面型</div>
                    <div class="col-lg-1"><input type="radio" name="side_shape" value="1">凹面型</div>
                    <div class="col-lg-1"><input type="radio" name="side_shape" value="2">凸面型</div>

                </div>
                <div class="row">
                    <div class="col-lg-2 text-right">鼻唇角：</div>
                    <div class="col-lg-1"><input type="radio" name="nasolabial_angle" value="0">正常</div>
                    <div class="col-lg-1"><input type="radio" name="nasolabial_angle" value="1">偏大</div>
                    <div class="col-lg-1"><input type="radio" name="nasolabial_angle" value="2">偏小</div>

                </div>
                <div class="row">
                    <div class="col-lg-2 text-right">頦部凸度：</div>

                    <div class="col-lg-1"><input type="radio" name="chin_point_view" value="0">正常</div>
                    <div class="col-lg-1"><input type="radio" name="chin_point_view" value="1">后缩</div>
                    <div class="col-lg-1"><input type="radio" name="chin_point_view" value="2">前凸</div>

                </div>

                <div class="part4Title">
                    <span class="span2">Part2</span>
                    <span class="span3">牙周组织</span>
                </div>

                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-2"><input type="radio" name="periodontal_tissue" value="0">正常</div>
                    <div class="col-lg-2"><input type="radio" name="periodontal_tissue" value="1">牙龈红肿</div>
                    <div class="col-lg-2"><input type="radio" name="periodontal_tissue" value="2">牙龈出血</div>

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

                    <div class="col-lg-2"><input type="radio" name="permanent_dentition" value="1">牙龈红肿</div>
                    <div class="col-lg-2"><input type="radio" name="permanent_dentition" value="2">牙龈出血</div>
                </div>


                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-2"><h3>乳牙列</h3></div>

                </div>
                <div class="row">
                    <div class="col-lg-1 text-right"></div>

                    <div class="col-lg-2"><input type="radio" name="deciduous_teeth" value="1">全部正常</div>
                    <div class="col-lg-2"><input type="radio" name="deciduous_teeth" value="2">全部缺失</div>
                </div>


<!--其他-->
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-2"><h3>其他</h3></div>

                </div>
                <div class="row">
                    <div class="col-lg-1"></div>

                    <textarea name="teeth_condition_other" id="" cols="30" rows="10" style="width: 900px"></textarea>

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
                    <div class="col-lg-2 text-right"><input type="radio" name="opening_degree" value="0">1指</div>
                    <div class="col-lg-1"><input type="radio" name="opening_degree" value="0">2指</div>
                    <div class="col-lg-1"><input type="radio" name="opening_degree" value="1">3指</div>
                    <div class="col-lg-1"><input type="radio" name="opening_degree" value="2">3指以上</div>

                </div>
<!--开口型-->
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-2"><h3>开口型</h3></div>

                </div>

                <div class="row">
                    <div class="col-lg-2 text-right"><input type="radio" name="opening_shape" value="0">正常</div>
                    <div class="col-lg-1"><input type="radio" name="opening_shape" value="0">左偏</div>
                    <div class="col-lg-1"><input type="radio" name="opening_shape" value="1">右偏</div>
                    <div class="col-lg-1"><input type="radio" name="opening_shape" value="2">偏摆</div>

                </div>
<!--弹响-->
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-2"><h3>弹响</h3></div>

                </div>

                <div class="row">
                    <div class="col-lg-2 text-right">左侧：</div>
                    <div class="col-lg-1"><input type="radio" name="left_sound" value="0">无</div>
                    <div class="col-lg-1"><input type="radio" name="left_sound" value="1">张口初</div>
                    <div class="col-lg-1"><input type="radio" name="left_sound" value="2">张口末</div>
                    <div class="col-lg-1"><input type="radio" name="left_sound" value="2">闭口初</div>
                    <div class="col-lg-1"><input type="radio" name="left_sound" value="2">闭口末</div>
                </div>
                <div class="row">
                    <div class="col-lg-2 text-right">右侧：</div>
                    <div class="col-lg-1"><input type="radio" name="right_sound" value="0">无</div>
                    <div class="col-lg-1"><input type="radio" name="right_sound" value="1">张口初</div>
                    <div class="col-lg-1"><input type="radio" name="right_sound" value="2">张口末</div>
                    <div class="col-lg-1"><input type="radio" name="right_sound" value="2">闭口初</div>
                    <div class="col-lg-1"><input type="radio" name="right_sound" value="2">闭口末</div>
                </div>
                <!--摩擦音-->
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-2"><h3>摩擦音</h3></div>

                </div>

                <div class="row">
                    <div class="col-lg-2 text-right">左侧：</div>
                    <div class="col-lg-1"><input type="radio" name="left_friction_sound" value="0">无</div>
                    <div class="col-lg-1"><input type="radio" name="left_friction_sound" value="1">张口</div>
                    <div class="col-lg-1"><input type="radio" name="left_friction_sound" value="2">闭口</div>
                </div>
                <div class="row">
                    <div class="col-lg-2 text-right">右侧：</div>
                    <div class="col-lg-1"><input type="radio" name="right_friction_sound" value="0">无</div>
                    <div class="col-lg-1"><input type="radio" name="right_friction_sound" value="1">张口</div>
                    <div class="col-lg-1"><input type="radio" name="right_friction_sound" value="2">闭口</div>
                </div>

                <!--其他-->
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-2"><h3>其他</h3></div>

                </div>
                <div class="row">
                    <div class="col-lg-1"></div>

                    <textarea name="" id="" cols="30" rows="10" style="width: 900px"></textarea>

                </div>

            </form>

















            <div class="button1">
                <a href=""> <button>上一步 </button></a>
                <a href=""> <button>下一步 </button></a>



                <a href=""> <button>退出 </button></a>
            </div>
        </div>




    </div>

</div>






<script src="{{asset('reception/js/jquery.min.js')}}"></script>
<script src="{{asset('reception/')}}Bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="{{asset('reception/js/layer/2.1/layer.js')}}"></script>
<script>
    function submitForm()
    {
        $.ajax({
            type: 'post',
            url:'{{url('/api/odtcase/addChiefAndComplaint')}}',
            dataType:'json',
            data:$('.form-horizontal').serialize(),
            success: function(data) {
                console.log(data);
                if (data.code == 200)
                {
                    window.location.href = "{{url('createZhenJiCaseThree?orthodontics_id=')}}"+data.data;
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
