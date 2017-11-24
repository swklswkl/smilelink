<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Title</title>


    <link rel="stylesheet" href="{{asset('reception/css/casePublic.css')}}">
    <link rel="stylesheet" href="{{asset('reception/css/createZhenJiCase/createZhenJiCase3.css')}}">
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
            <img src="{{asset('reception/img/3.png')}}" alt="" >

        </div>

        <div class="part4Cont" id="hidden_enent1">
            <div class="part4Title" style="margin-left: -70px;">
                <span class="span2">Part1</span>
                <span class="span3">面像照</span>
            </div>
            <form class="form-horizontal">

                <div class="imgBox">
                    <div class="imgBox-T">
                        <div class="imgBox-T-L">
                            <img src="@isset($data[0]) {{$data[0]['positive_photo']}} @endisset" alt=""  width="200" height="200px" >

                            <input name="file"  type="file" class="file1"  onchange="c(this)" >
                            <input name="positive_photo" class="imgurl" type="hidden" value="@isset($data[0]) {{$data[0]['positive_photo']}} @endisset"/>

                        </div>
                        <div class="imgBox-T-C">
                            <img src="@isset($data[0]) {{$data[0]['side_photo']}} @endisset" alt=""  width="200" height="200px" >

                            <input name="file"  type="file" class="file2"  onchange="c(this)">
                            <input name="side_photo" class="imgurl" type="hidden" value="@isset($data[0]) {{$data[0]['side_photo']}} @endisset"/>

                        </div>
                        <div class="imgBox-T-R">
                            <img src="@isset($data[0]) {{$data[0]['positive_smile_photo']}} @endisset" alt=""  width="200" height="200px" >

                            <input name="file"  type="file" class="file3"  onchange="c(this)">
                            <input name="positive_smile_photo" class="imgurl" type="hidden" value="@isset($data[0]) {{$data[0]['positive_smile_photo']}} @endisset"/>
                        </div>
                    </div>
                    <p> <span style="margin-left: 73px;margin-right: 176px">正面照</span> <span style="margin-left: 30px;margin-right: 50px">侧面照</span> <span style="margin-left: 166px;margin-right: 50px">正面微笑照</span></p>


                    <div class="part4Title" style="margin-left: -70px;">
                        <span class="span2">Part2</span>
                        <span class="span3">口内照</span>
                    </div>
                    <div class="imgBox-C">
                        <div class="imgBox-C-L">
                            <img src="@isset($data[0]) {{$data[0]['upper_arch_photo']}} @endisset" alt=""  width="200" height="200px" >

                            <input name="file"  type="file" class="file4"   onchange="c(this)">
                            <input name="upper_arch_photo" class="imgurl" type="hidden" value="@isset($data[0]) {{$data[0]['upper_arch_photo']}} @endisset"/>
                        </div>
                        <div class="imgBox-C-C">
                            <img src="@isset($data[0]) {{$data[0]['positive_45_photo']}} @endisset" alt=""  width="200" height="200px" >

                            <input name="file"  type="file" class="file5"  onchange="c(this)">
                            <input name="positive_45_photo" class="imgurl" type="hidden" value="@isset($data[0]) {{$data[0]['positive_45_photo']}} @endisset"/>
                        </div>
                        <div class="imgBox-C-R">
                            <img src="@isset($data[0]) {{$data[0]['under_arch_photo']}} @endisset" alt=""  width="200" height="200px" >

                            <input name="file"  type="file" class="file6"  onchange="c(this)">
                            <input name="under_arch_photo" class="imgurl" type="hidden" value="@isset($data[0]) {{$data[0]['under_arch_photo']}} @endisset"/>
                        </div>
                    </div>
                    <p>                    <span style="margin-left: 73px;margin-right: 116px">上牙弓照</span> <span style="margin-left: 30px;margin-right: 50px">正面咬合向上45度照</span> <span style="margin-left: 106px;margin-right: 50px">下牙弓照</span>
                    </p>



                    <div class="imgBox-B">
                        <div class="imgBox-B-L">
                            <img src="@isset($data[0]) {{$data[0]['right_bite_photo']}} @endisset" alt=""  width="200" height="200px" >

                            <input name="file"  type="file" class="file7"  onchange="c(this)">
                            <input name="right_bite_photo" class="imgurl" type="hidden" value="@isset($data[0]) {{$data[0]['right_bite_photo']}} @endisset"/>
                        </div>
                        <div class="imgBox-B-C">
                            <img src="@isset($data[0]) {{$data[0]['positive_bite_photo']}} @endisset" alt=""  width="200" height="200px" >

                            <input name="file"  type="file" class="file8"  onchange="c(this)">
                            <input name="positive_bite_photo" class="imgurl" type="hidden" value="@isset($data[0]) {{$data[0]['positive_bite_photo']}} @endisset"/>
                        </div>
                        <div class="imgBox-B-R">
                            <img src="@isset($data[0]) {{$data[0]['left_bite_photo']}} @endisset" alt=""  width="200" height="200px" >

                            <input name="file"  type="file" class="file9"  onchange="c(this)">
                            <input name="left_bite_photo" class="imgurl" type="hidden" value="@isset($data[0]) {{$data[0]['left_bite_photo']}} @endisset"/>
                        </div>
                    </div>
                    <p>                    <span style="margin-left: 73px;margin-right: 176px">右咬合照</span> <span style="margin-left: 30px;margin-right: 50px">正面咬合照</span> <span style="margin-left: 166px;margin-right: 50px">左咬合照</span>
                    </p>



                </div>
                <div class="part4Title" style="margin-left: -70px;">
                    <span class="span2">Part3</span>
                    <span class="span3">X光片</span>
                </div>

                <div class="imgBox">
                    <div class="imgBox-T">
                        <div class="imgBox-T-L">
                            <img src="@isset($data[0]) {{$data[0]['side_x_photo']}} @endisset" alt=""  width="200" height="200px" >

                            <input name="file"  type="file" class="file10"  onchange="c(this)">
                            <input name="side_x_photo" class="imgurl" type="hidden" value="@isset($data[0]) {{$data[0]['side_x_photo']}} @endisset"/>
                        </div>
                        <div class="imgBox-T-C">
                            <img src="@isset($data[0]) {{$data[0]['positive_x_photo']}} @endisset" alt=""  width="200" height="200px" >

                            <input name="file"  type="file" class="file11"  onchange="c(this)">
                            <input name="positive_x_photo" class="imgurl" type="hidden" value="@isset($data[0]) {{$data[0]['positive_x_photo']}} @endisset"/>
                        </div>
                        <div class="imgBox-T-R">
                            <img src="@isset($data[0]) {{$data[0]['tooth_photo']}} @endisset" alt=""  width="200" height="200px" >

                            <input name="file"  type="file" class="file12"  onchange="c(this)">
                            <input name="tooth_photo" class="imgurl" type="hidden" value="@isset($data[0]) {{$data[0]['tooth_photo']}} @endisset"/>
                        </div>
                    </div>
                    <p>                    <span style="margin-left: 73px;margin-right: 176px">侧面X照</span> <span style="margin-left: 30px;margin-right: 50px">正面X光照</span> <span style="margin-left: 166px;margin-right: 50px">牙片</span>
                    </p>


                    <div class="imgBox-C">
                        <div class="imgBox-C-L">
                            <img src="@isset($data[0]) {{$data[0]['cbct_joint_sagittal']}} @endisset" alt=""  width="200" height="200px" >

                            <input name="file"  type="file" class="file13"  onchange="c(this)">
                            <input name="cbct_joint_sagittal" class="imgurl" type="hidden" value="@isset($data[0]) {{$data[0]['cbct_joint_sagittal']}} @endisset"/>
                        </div>
                        <div class="imgBox-C-C">
                            <img src="@isset($data[0]) {{$data[0]['cbct_coronary_joint']}} @endisset" alt=""  width="200" height="200px" >

                            <input name="file"  type="file" class="file14"  onchange="c(this)">
                            <input name="cbct_coronary_joint" class="imgurl" type="hidden" value="@isset($data[0]) {{$data[0]['cbct_coronary_joint']}} @endisset"/>
                        </div>
                        <div class="imgBox-C-R">
                            <img src="@isset($data[0]) {{$data[0]['cbct_anterior_teeth']}} @endisset" alt=""  width="200" height="200px" >

                            <input name="file"  type="file" class="file15"  onchange="c(this)">
                            <input name="cbct_anterior_teeth" class="imgurl" type="hidden" value="@isset($data[0]) {{$data[0]['cbct_anterior_teeth']}} @endisset"/>
                        </div>
                    </div>
                    <p>                    <span style="margin-left: 44px;margin-right: 176px">CBCT关节矢状位</span> <span style="margin-left: -40px;margin-right: 50px">CBCT关节冠状位</span> <span style="margin-left: 88px;margin-right: 50px">CBCT上前牙牙根</span>
                    </p>



                    <div class="imgBox-B">
                        <div class="imgBox-B-L">
                            <img src="@isset($data[0]) {{$data[0]['cbct_under_teeth']}} @endisset" alt=""  width="200" height="200px" >

                            <input name="file"  type="file" class="file16"  onchange="c(this)">
                            <input name="cbct_under_teeth" class="imgurl" type="hidden" value="@isset($data[0]) {{$data[0]['cbct_under_teeth']}} @endisset"/>
                        </div>
                        <div class="imgBox-B-C">
                            <img src="@isset($data[0]) {{$data[0]['abnormal_teeth']}} @endisset" alt=""  width="200" height="200px" >
                            <input name="file"  type="file" class="file17"  onchange="c(this)">
                            <input name="abnormal_teeth" class="imgurl" type="hidden" value="@isset($data[0]) {{$data[0]['abnormal_teeth']}} @endisset"/>
                        </div>
                        <div class="imgBox-B-R">
                            <img src="@isset($data[0]) {{$data[0]['air_passage']}} @endisset" alt=""  width="200" height="200px" >
                            <input name="file"  type="file" class="file18"  onchange="c(this)">
                            <input name="air_passage" class="imgurl" type="hidden" value="@isset($data[0]) {{$data[0]['air_passage']}} @endisset"/>
                        </div>
                    </div>
                    <p>                    <span style="margin-left: 73px;margin-right: 100px">CBCT下前牙根</span> <span style="margin-left: 30px;margin-right: 50px">异常牙</span> <span style="margin-left: 166px;margin-right: 50px">气道</span>
                    </p>


                    <div class="imgBox-B">
                        <div class="imgBox-B-L">
                            <img src="@isset($data[0]) {{$data[0]['other']}} @endisset" alt=""  width="200" height="200px" >

                            <input name="file"  type="file" class="file19"  onchange="c(this)">
                            <input name="other" class="imgurl" type="hidden" value="@isset($data[0]) {{$data[0]['other']}} @endisset" />
                        </div>

                    </div>
                    <p>                    <span style="margin-left: 73px;margin-right: 176px">其他照</span>
                    </p>
                    <input name="orthodontics_id" class="imgurl" value="{{$_GET['orthodontics_id']}}" type="hidden"/>
                    @isset($data[0])
                        <input name="edit" type="hidden" value="1"/>
                    @endisset

                </div>

            </form>
            <div class="button1">
                <a > <button type="button" onclick="submitForm()" style="margin-left: -95px">下一步 </button></a>
            </div>
        </div>
    </div>

</div>


<script src="{{asset('reception/js/jquery.min.js')}}"></script>
<script src="{{asset('reception/js/holder.min.js')}}"></script>

<script>


    //图片上传
$('input[name=file]').change(function(){
        var oMyForm = new FormData();
        oMyForm.append("file", $(this)[0].files[0]);
        var objectThis = $(this);
        $.ajax({
            type: 'post',
            url:'{{url('/api/file/upload')}}',
            dataType:'json',
            data:oMyForm,
            processData: false,
            contentType: false,
            async: false,
        }).done(function(res) {
            objectThis.next().val(res.data.image_url);
        }).fail(function(res) {});

})

//提交所有图片信息
    function submitForm()
    {

        $.ajax({
            type: 'post',
            url:'{{url('/api/odtcase/addImages')}}',
            dataType:'json',
            data:$('.form-horizontal').serialize(),
            success: function(data) {
                console.log(data);
                if (data.code == 200)
                {
                    @empty($data[0])
                        window.location.href = "{{url('createZhenJiCaseFour?orthodontics_id=')}}"+data.data;
                    @endempty
                            @isset($data[0])
                        window.location.href = "{{url('editCase4?orthodontics_id=').$_GET['orthodontics_id']}}";
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

    var cbtn = document.getElementsByClassName('c1');
    var div = document.getElementsByClassName('try');

    for (var i =0;i<cbtn.length;i++) {
        (function (i) {
            cbtn[i].onclick = function () {
                if (cbtn[i].getAttribute('switch') == '0')
                {
                    div[i].style.background = ' url("img/yes3.png")';
                    cbtn[i].setAttribute('switch','1');
                }else {
                    div[i].style.background = '';
                    cbtn[i].setAttribute('switch','0');
                }
            }
        })(i);
    }





    function c (a) {
        var img = a.previousElementSibling;
        console.log(img);
        var r= new FileReader();
        f=a.files[0];

        r.readAsDataURL(f);
        r.onload=function  (e) {
            img.src=this.result;

        };
    }


</script>



</body>
</html>
