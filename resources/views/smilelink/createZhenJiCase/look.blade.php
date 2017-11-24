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
<form id="app" action="">


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
                <a href="{{url('createZhenJiCaseSeven?orthodontics_id=').$_GET['orthodontics_id']}}"> 返回
                </a>
            </div>
            <p>名称：@{{name}}</p>
            <p>内容：@{{content }}</p>



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
                            <img v-bin:src="side_photo" alt=""  width="200" height="200px" >
                            <!--<input type="file" class="file1"  onchange="c(this)" >-->

                        </div>
                        <div class="imgBox-T-C">
                            <img src="@{{ side_photo }}" alt=""  width="200" height="200px" >
                            <!--<input type="file" class="file2"  onchange="c(this)">-->

                        </div>
                        <div class="imgBox-T-R">
                            <img src="@{{ positive_smile_photo }}" alt=""  width="200" height="200px" >
                            <!--<input type="file" class="file3"  onchange="c(this)">-->
                        </div>
                    </div>
                    <p><span style="margin-right: 220px;margin-left: 65px">正面照</span> <span style="margin-right: 200px">侧面照</span> <span>正面微笑照</span></p>
                    <div class="imgBox-C">
                        <div class="imgBox-C-L">
                            <img src="@{{ upper_arch_photo }}" alt=""  width="200" height="200px" >
                            <!--<input type="file" class="file4"  onchange="c(this)">-->

                        </div>
                        <div class="imgBox-C-C">
                            <img src="@{{ positive_45_photo }}" alt=""  width="200" height="200px" >
                            <!--<input type="file" class="file5"  onchange="c(this)">-->
                        </div>
                        <div class="imgBox-C-R">
                            <img src="@{{ under_arch_photo }}" alt=""  width="200" height="200px" >
                            <!--<input type="file" class="file6"  onchange="c(this)">-->
                        </div>
                    </div>
                    <p><span style="margin-right: 160px;margin-left: 65px">上牙弓照</span> <span style="margin-right: 148px">正面咬合向上45度照</span> <span>下牙弓照</span></p>


                    <div class="imgBox-B">
                        <div class="imgBox-B-L">
                            <img src="@{{ right_bite_photo }}" alt=""  width="200" height="200px" >
                            <!--<input type="file" class="file7"  onchange="c(this)">-->
                        </div>
                        <div class="imgBox-B-C">
                            <img src="@{{ positive_bite_photo }}" alt=""  width="200" height="200px" >
                            <!--<input type="file" class="file8"  onchange="c(this)">-->
                        </div>
                        <div class="imgBox-B-R">
                            <img src="@{{ left_bite_photo }}" alt=""  width="200" height="200px" >
                            <!--<input type="file" class="file9"  onchange="c(this)">-->
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
                            <img src="@{{ panorama_photo }}" alt=""  width="200" height="200px" >
                            <!--<input type="file" class="file1"  onchange="c(this)">-->
                        </div>
                        <div class="imgBox-T-C">
                            <img src="@{{ side_x_photo }}" alt=""  width="200" height="200px" >
                            <!--<input type="file" class="file2"  onchange="c(this)">-->
                        </div>
                        <div class="imgBox-T-R">
                            <img src="@{{ positive_x_photo }}" alt=""  width="200" height="200px" >
                            <!--<input type="file" class="file3"  onchange="c(this)">-->
                        </div>
                    </div>
                    <p><span style="margin-right: 200px;margin-left: 65px">全景片</span> <span style="margin-right: 190px">侧面X光片</span> <span>正面X光片</span></p>

                    <div class="imgBox-C">
                        <div class="imgBox-C-L">
                            <img src="@{{ tooth_photo }}" alt=""  width="200" height="200px" >
                            <!--<input type="file" class="file4"  onchange="c(this)">-->
                        </div>
                        <div class="imgBox-C-C">
                            <img src="@{{ cbct_joint_sagittal }}" alt=""  width="200" height="200px" >
                            <!--<input type="file" class="file5"  onchange="c(this)">-->
                        </div>
                        <div class="imgBox-C-R">
                            <img src="@{{ cbct_coronary_joint }}" alt=""  width="200" height="200px" >
                            <!--<input type="file" class="file6"  onchange="c(this)">-->
                        </div>
                    </div>
                    <p><span style="margin-right: 200px;margin-left: 65px">牙片</span> <span style="margin-right: 140px">CBCT关节矢状位</span> <span>CBCT关节冠状位</span></p>


                    <div class="imgBox-B">
                        <div class="imgBox-B-L">
                            <img src="@{{ cbct_anterior_teeth }}" alt=""  width="200" height="200px" >
                            <!--<input type="file" class="file7"  onchange="c(this)">-->
                        </div>
                        <div class="imgBox-B-C">
                            <img src="@{{ cbct_under_teeth }}" alt=""  width="200" height="200px" >
                            <!--<input type="file" class="file8"  onchange="c(this)">-->
                        </div>
                        <div class="imgBox-B-R">
                            <img src="@{{ abnormal_teeth }}" alt=""  width="200" height="200px" >
                            <!--<input type="file" class="file9"  onchange="c(this)">-->
                        </div>
                    </div>
                    <p><span style="margin-right: 153px;margin-left: 54px">CBCT上前牙根</span> <span style="margin-right: 175px">CBCT下前牙根</span> <span>异常牙</span></p>
                    <div class="imgBox-B">
                        <div class="imgBox-B-L">
                            <img src="@{{ air_passage }}" alt=""  width="200" height="200px" >
                            <!--<input type="file" class="file10"  onchange="c(this)">-->
                        </div>
                        <div class="imgBox-B-C">
                            <img src="@{{ other }}" alt=""  width="200" height="200px" >
                            <!--<input type="file" class="file11"  onchange="c(this)">-->
                        </div>

                    </div>
                    <p><span style="margin-right: 230px;margin-left: 75px">气道</span> <span >其他</span> </p>

                </div>




        </div>
    </div>

</div>
</form>

{{--<footer>
    <a href="createZhenJiCaseSeven.blade.php">    <button>返回</button>
    </a>
</footer>--}}

<script src="{{asset('reception/js/jquery.min.js')}}"></script>
<script src="{{asset('reception/js/holder.min.js')}}"></script>
<script src="{{asset('reception/js/vue.min.js')}}"></script>
<script>
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
    $(function(){
        $.ajax({
            type: 'get',
            url:'{{url('/api/odtcase/inquireOnlyOneTreatmentProcess')}}',
            dataType:'json',
            data:{id:"{{$_GET['id']}}"},
            success: function(data) {
                console.log(data)
                if (data.code == 200)
                {
                    new Vue({
                        el: '#app',
                        data: data.data[0]
                    })
                } else {
                    if(data.code==402){
                        layer.msg(data.msg);
                    }

                }
            }
        });
    })

</script>



</body>
</html>
