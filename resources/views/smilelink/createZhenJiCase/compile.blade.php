<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>新建病例一</title>

    <link rel="stylesheet" href="{{asset('reception/css/casePublic.css')}}">
    <link rel="stylesheet" href="{{asset('reception/css/createZhenJiCase/look.css')}}">
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
<form id="api" class="form-horizontal" >


<div class="part2">
    <div class="content">
        <div class="ImgTop">
            <img src="{{asset('reception/img/7.png')}}" alt="" >
        </div>
        <div class="part2Cont">

            <div class="part2Title">

                <span class="span3">查看治疗进展</span>
            </div>
            <div style="text-align: right" class="rButton">
               {{-- <a href="#">确定</a>--}}
                <a href="{{url('createZhenJiCaseSeven?orthodontics_id=').$_GET['orthodontics_id']}}"> 返回
                </a>
            </div>
            <p>名称：<input name="name"   type="text" style="width: 1000px;height: 35px;margin-left: 10px;margin-top: 20px;font-size: 17px"></p>
            <p>  内容：</p>
            <textarea name="content"  value="" id="" cols="30" rows="10" style="width: 1000px;margin-left: 60px;font-size: 17px"></textarea>



        </div>
    </div>
</div>

<div class="part4">
    <div class="content">

        <div class="part4Text">
            照片
            <div class="sel" id="click_event1">^</div>
        </div>

        <div class="part4Cont" id="hidden_enent1">




                <div class="imgBox">
                    <div class="imgBox-T">
                        <div class="imgBox-T-L">
                            <img src="{{asset('reception/js/holder.min.js/200x200?text=暂无图片')}}"    alt=""  width="200" height="200px" >
                            <input type="file" name="file" class="file1"  onchange="c(this)">
                            <input type="hidden"  name="positive_photo"/>

                        </div>
                        <div class="imgBox-T-C">
                            <img src="{{asset('reception/js/holder.min.js/200x200?text=暂无图片')}}"   alt=""  width="200" height="200px" >
                            <input type="file" name="file" class="file2"  onchange="c(this)">
                            <input type="hidden" id="side_photo" name="side_photo"/>

                        </div>
                        <div class="imgBox-T-R">
                            <img src="{{asset('reception/js/holder.min.js/200x200?text=暂无图片')}}"   alt=""  width="200" height="200px" >
                            <input type="file" name="file" class="file3"  onchange="c(this)">
                            <input type="hidden" id="positive_smile_photo" name="positive_smile_photo"/>
                        </div>
                    </div>
                    <p><span style="margin-right: 220px;margin-left: 65px">正面照</span> <span style="margin-right: 200px">侧面照</span> <span>正面微笑照</span></p>
                    <div class="imgBox-C">
                        <div class="imgBox-C-L">
                            <img src="{{asset('reception/js/holder.min.js/200x200?text=暂无图片')}}"   alt=""  width="200" height="200px" >
                            <input type="file" name="file" class="file4"  onchange="c(this)">
                            <input type="hidden" id="upper_arch_photo" name="upper_arch_photo"/>

                        </div>
                        <div class="imgBox-C-C">
                            <img src="{{asset('reception/js/holder.min.js/200x200?text=暂无图片')}}"   alt=""  width="200" height="200px" >
                            <input type="file" name="file" class="file5"  onchange="c(this)">
                            <input type="hidden" id="positive_45_photo" name="positive_45_photo"/>
                        </div>
                        <div class="imgBox-C-R">
                            <img src="{{asset('reception/js/holder.min.js/200x200?text=暂无图片')}}"   alt=""  width="200" height="200px" >
                            <input type="file" name="file" class="file6"  onchange="c(this)">
                            <input type="hidden" id="under_arch_photo" name="under_arch_photo"/>
                        </div>
                    </div>
                    <p><span style="margin-right: 160px;margin-left: 65px">上牙弓照</span> <span style="margin-right: 148px">正面咬合向上45度照</span> <span>下牙弓照</span></p>


                    <div class="imgBox-B">
                        <div class="imgBox-B-L">
                            <img src="{{asset('reception/js/holder.min.js/200x200?text=暂无图片')}}"   alt=""  width="200" height="200px" >
                            <input type="file" name="file" class="file7"  onchange="c(this)">
                            <input type="hidden" id="right_bite_photo" name="right_bite_photo"/>
                        </div>
                        <div class="imgBox-B-C">
                            <img src="{{asset('reception/js/holder.min.js/200x200?text=暂无图片')}}"   alt=""  width="200" height="200px" >
                            <input type="file" name="file" class="file8"  onchange="c(this)">
                            <input type="hidden" id="positive_bite_photo" name="positive_bite_photo"/>
                        </div>
                        <div class="imgBox-B-R">
                            <img src="{{asset('reception/js/holder.min.js/200x200?text=暂无图片')}}"   alt=""  width="200" height="200px" >
                            <input type="file" name="file" class="file9"  onchange="c(this)">
                            <input type="hidden" id="left_bite_photo" name="left_bite_photo"/>
                        </div>
                    </div>
                    <p><span style="margin-right: 178px;margin-left: 65px">右咬合照</span> <span style="margin-right: 160px">正面咬合向上照</span> <span>左咬合照</span></p>


                </div>



        </div>

        <!--------------->

        <div class="part4Text">
            X光片
            <div class="sel" id="click_event2">^</div>
        </div>

        <div class="part4Cont" id="hidden_enent2">




                <div class="imgBox">
                    <div class="imgBox-T">
                        <div class="imgBox-T-L">
                            <img src="{{asset('reception/js/holder.min.js/200x200?text=暂无图片')}}"   alt=""  width="200" height="200px" >
                            <input type="file" name="file" class="file1"  onchange="c(this)">
                            <input type="hidden" id="panorama_photo" name="panorama_photo"/>
                        </div>
                        <div class="imgBox-T-C">
                            <img src="{{asset('reception/js/holder.min.js/200x200?text=暂无图片')}}"   alt=""  width="200" height="200px" >
                            <input type="file" name="file" class="file2"  onchange="c(this)">
                            <input type="hidden" id="side_x_photo" name="side_x_photo"/>
                        </div>
                        <div class="imgBox-T-R">
                            <img src="{{asset('reception/js/holder.min.js/200x200?text=暂无图片')}}"   alt=""  width="200" height="200px" >
                            <input type="file" name="file" class="file3"  onchange="c(this)">
                            <input type="hidden" id="positive_x_photo" name="positive_x_photo"/>
                        </div>
                    </div>
                    <p><span style="margin-right: 200px;margin-left: 65px">全景片</span> <span style="margin-right: 190px">侧面X光片</span> <span>正面X光片</span></p>

                    <div class="imgBox-C">
                        <div class="imgBox-C-L">
                            <img src="{{asset('reception/js/holder.min.js/200x200?text=暂无图片')}}"   alt=""  width="200" height="200px" >
                            <input type="file" name="file" class="file4"  onchange="c(this)">
                            <input type="hidden" id="tooth_photo" name="tooth_photo"/>
                        </div>
                        <div class="imgBox-C-C">
                            <img src="{{asset('reception/js/holder.min.js/200x200?text=暂无图片')}}"   alt=""  width="200" height="200px" >
                            <input type="file" name="file" class="file5"  onchange="c(this)">
                            <input type="hidden" id="cbct_joint_sagittal" name="cbct_joint_sagittal"/>
                        </div>
                        <div class="imgBox-C-R">
                            <img src="{{asset('reception/js/holder.min.js/200x200?text=暂无图片')}}"   alt=""  width="200" height="200px" >
                            <input type="file" name="file" class="file6"  onchange="c(this)">
                            <input type="hidden" id="cbct_coronary_joint" name="cbct_coronary_joint"/>
                        </div>
                    </div>
                    <p><span style="margin-right: 200px;margin-left: 65px">牙片</span> <span style="margin-right: 140px">CBCT关节矢状位</span> <span>CBCT关节冠状位</span></p>


                    <div class="imgBox-B">
                        <div class="imgBox-B-L">
                            <img src="{{asset('reception/js/holder.min.js/200x200?text=暂无图片')}}"     alt=""  width="200" height="200px" >
                            <input type="file" name="file" class="file7"  onchange="c(this)">
                            <input type="hidden" id="cbct_anterior_teeth" name="cbct_anterior_teeth"/>
                        </div>
                        <div class="imgBox-B-C">
                            <img src="{{asset('reception/js/holder.min.js/200x200?text=暂无图片')}}"   alt=""  width="200" height="200px" >
                            <input type="file" name="file" class="file8"  onchange="c(this)">
                            <input type="hidden" id="cbct_under_teeth" name="cbct_under_teeth"/>
                        </div>
                        <div class="imgBox-B-R">
                            <img src="{{asset('reception/js/holder.min.js/200x200?text=暂无图片')}}"   alt=""  width="200" height="200px" >
                            <input type="file" name="file" class="file9"  onchange="c(this)">
                            <input type="hidden" id="abnormal_teeth" name="abnormal_teeth"/>
                        </div>
                    </div>
                    <p><span style="margin-right: 153px;margin-left: 54px">CBCT上前牙根</span> <span style="margin-right: 175px">CBCT下前牙根</span> <span>异常牙</span></p>
                    <div class="imgBox-B">
                        <div class="imgBox-B-L">
                            <img src="{{asset('reception/js/holder.min.js/200x200?text=暂无图片')}}"   alt=""  width="200" height="200px" >
                            <input type="file" name="file" class="file10" onchange="c(this)" />
                            <input type="hidden" id="air_passage" name="air_passage"/>
                        </div>
                        <div class="imgBox-B-C">
                            <img src="{{asset('reception/js/holder.min.js/200x200?text=暂无图片')}}"   alt=""  width="200" height="200px" >
                            <input type="file" name="file" class="file11" onchange="c(this)"/>
                            <input type="hidden" id="other" name="other"/>
                        </div>

                    </div>
                    <p><span style="margin-right: 230px;margin-left: 75px">气道</span> <span >其他</span> </p>
                    <input type="hidden" name="orthodontics_id" value="{{$_GET['orthodontics_id']}}"/>
                    @isset($_GET['edit'])
                    <input type="hidden" name="edit" value="1"/>
                    <input type="hidden" name="id" value="{{$_GET['id']}}"/>
                    @endisset
                </div>



        </div>
    </div>

</div>
</form>
@isset($_GET['edit'])
<footer>
    <a>    <button type="button" onclick="submitForm()">确定</button>
    </a>
</footer>
@endisset
@isset($_GET['add'])
    <footer>
        <a>    <button type="button" onclick="submitForm()">确定</button>
        </a>
    </footer>
@endisset
{{--<script src="{{asset('reception/js/vue.min.js')}}"></script>--}}
<script src="{{asset('reception/js/jquery.min.js')}}"></script>
<script src="{{asset('reception/js/holder.min.js')}}"></script>

<script>
    //图片上传
//    $(function(){

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
    {{--})--}}
    //api添加/修改
    function submitForm()
    {
//        alert($('.form-horizontal').serialize())
        $.ajax({
            type: 'post',
            @isset($_GET['edit'])
            url:'{{url('/api/odtcase/editTreatmentProcess')}}',
            @endisset
            @isset($_GET['add'])
            url:'{{url('/api/odtcase/addTreatmentProcess')}}',
            @endisset
            dataType:'json',
            data:$('.form-horizontal').serialize(),
            success: function(data) {
                console.log(data);
                if (data.code == 200)
                {
                    window.location.href = "{{url('createZhenJiCaseSeven?orthodontics_id=')}}"+data.data;
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

//    for (var i =0;i<cbtn.length;i++) {
//        (function (i) {
//            cbtn[i].onclick = function () {
//                if (cbtn[i].getAttribute('switch') == '0')
//                {
//                    div[i].style.background = ' url("img/yes3.png")';
//                    cbtn[i].setAttribute('switch','1');
//                }else {
//                    div[i].style.background = '';
//                    cbtn[i].setAttribute('switch','0');
//                }
//            }
//        })(i);
//    }




    $('#click_event').click(function(){
        $('#hidden_enent').slideToggle();
    })

;
    $('#click_event1').click(function(){
        $('#hidden_enent1').slideToggle();
    })
    ;
    $('#click_event2').click(function(){
        $('#hidden_enent2').slideToggle();
    });

//    function c (a) {
//        var img = a.previousElementSibling;
//        console.log(img);
//        var r= new FileReader();
//        f=a.files[0];
//
//        r.readAsDataURL(f);
//        r.onload=function  (e) {
//            img.src=this.result;
//
//        };
//    }

    //数据接口
    @isset($_GET['id'])
    $(function(){
        $.ajax({
            type: 'get',
            url:'{{url('/api/odtcase/inquireOnlyOneTreatmentProcess')}}',
            dataType:'json',
            data:{id:"{{$_GET['id']}}"},
            success: function(data) {
                if (data.code == 200)
                {
                    $('textarea[name=content]').val(data.data[0].content);
                    $.each(data.data[0],function(key,val){
                       // console.log(key+'=='+val)
                        $('input[name='+key+']').prev().prev('img').attr('src',val);
                        $('input[name='+key+']').val(val);
                    })

                } else {
                    if(data.code==402){
                        layer.msg(data.msg);
                    }

                }

//                for (var i =0;i<data.length;i++)
//                {
//                    if (data[i] != 'name' || data[i] != 'content' || data[i] != 'id' || data[i]['create_time'])
//                    {
//
//                    }
//                }
            }
        });
    })
@endisset


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
