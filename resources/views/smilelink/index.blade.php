<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <link rel="stylesheet" href="{{asset('reception/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('reception/css/index.css')}}">
    <link rel="stylesheet" href="{{asset('reception/css/public.css')}}">
    <style>
        body{
            margin: 0 auto;
            overflow-x: hidden;
        }
        .swiper-container {
            margin-top: 28px;
            width: 445px;
            height: 282px;
            overflow: hidden;
        }
        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }
        .swiper-button-next, .swiper-button-prev{
            background-size: 27px 25px;
        }
        .swiper-pagination-bullet-active {
            opacity: 1;
            background: #faf2cc;}
    </style>
</head>
<body>
<header>
    <div class="content">
    <div class="nav-L">
        <img src="{{asset('reception/img/logo0.png')}}" alt="">

    </div>
        <div class="nav-C">
            <span class="nav-C1"> <a href="{{url('')}}">首页</a></span>
            <span class="nav-C1"> <a href="http://www.bonsmile.com">走进博思美</a></span>
            {{--<span  class="nav-C1"> <a href="">帮助中心</a></span>--}}
        </div>
    <div class="nav-R">
        <span class="nav-R1"><a href="{{url('login')}}">登录</a></span>
        <sapn class="nav-R2"><a href="{{url('registerTel')}}">注册</a></sapn>

    </div>
    </div>
</header>
<div class="banner">
    <div class="content">
        <div class="banner-L">
            <h3>正畸牙医联盟</h3>
            <p>汇集医德、技术、服务正畸精英的平台
            </p>
            <p>国内外十大名师倡议建立 、3行业杰出精英</p>
            <p>省级教学医院正畸主任 、名人推荐、联盟邀请</p>

            <p>联盟认证的“好牙医”</p>
            <div class="join">
                <a href="{{url('registerTel')}}"><img src="{{asset('reception/img/join.png')}}" alt="" ></a>

            </div>
        </div>
        <div class="banner-R">
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{asset('reception/img/banner3.png')}}" alt="" height="300px"  width="455px">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('reception/img/banner4.png')}}" alt=""  height="300px"  width="455px">

                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('reception/img/banner5.png')}}" alt=""  height="300px"  width="455px">

                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>

    </div>
</div>

<div class="joinUs">
    <img src="{{asset('reception/img/squ5.png')}}" alt="" class="lineX2">

    <div class="content">
        <div class="line1"><img src="{{asset('reception/img/shu.png')}}" alt=""></div>

        <div class="joinUsBg">
            <div class="joinUs-R">
            <p class="p1">WHY  CHOOSE  US</p>
                <h3>与smileLink合作优势</h3>
                <p class="p2">smileLink遵循"以顾客第一 医生第一"的服务宗旨</p>
                <p class="p3">倡导人和宣言、价值观、服务范围 <span>◆</span></p>
                <p class="p3">区域好牙医，认证正畸医，每个区域合作1-3名<span>◆</span></p>
                <p class="p3">名家推荐、客户推荐、医生简介、评价、公益案例<span>◆</span></p>
                <p class="p3">心得分享，牙医评价，推荐牙医。<span>◆</span></p>
                <p class="p3">每月四大名校名医案例直播教学<span>◆</span></p>
                <p class="p3">医生、家长上传数据，专家提供方案。 <span>◆</span></p>
            <h4> 01.</h4>
            </div>
        </div>
        <div ><img src="{{asset('reception/img/shu.png')}}" alt=""></div>

    </div>
</div>
<div class="advantage">
    <img src="{{asset('reception/img/squ5.png')}}" alt="" class="lineX1">

    <div class="content">
        <div class="advBg">
            <div class="adv-L">
                <p class="p1">SERVICE  CONTENT</p>
                <h3>指导基层好医生的工作流程</h3>

                <p class="p3"><span>◆</span>1、全面准确的诊断和最佳矫正方案； </p>
                <p class="p3"><span>◆</span>2、精准的托槽定位+全套矫正弓丝； </p>
                <p class="p3"><span>◆</span>3、全程跟踪治疗过程； </p>
                <p class="p3"><span>◆</span>4、解决治疗过程中的意外问题； </p>
                <p class="p3"><span>◆</span>5、定期病例讨论，会员病例共享 </p>
                <p class="p3"><span>◆</span>6、治疗结束病例资料整理，集结成册回寄医生。 </p>
                <h4> 02.</h4>
            </div>

        </div>
        <div class="lineY"><img src="{{asset('reception/img/shu.png')}}" alt=""></div>

    </div>
</div>
<div class="productAdv">


    <div class="content">
        <p class="p1">OUR PRODUCTS</p>

        <h3>smileLink产品优势！</h3>


    <img src="{{asset('reception/img/squ2.png')}}" alt=""  class="lineRight">


        <p class="p3">smileLink致力于为每个有需求的客户制定个性化的隐形矫正设计方案，带给他们时尚、舒适、美观、方便的口腔美容体验。</p>
        <div class="productAdv3Img">
            <div class="img3L">
                <img src="{{asset('reception/img/squ7.png')}}" alt="" >
                <div class="img3LCont">
                    <h4>美观、舒适</h4>
                    <p>矫正器透明、光滑的特质，隐蔽性很好，佩戴美观、
                    舒适，除了一个完成的牙套外没有其他多余的辅助治疗
                    器械，极大地减少了矫正过程中矫治器对口腔硬气的并发症。</p>
                </div>
            </div>
            <div class="img3C">
                <img src="{{asset('reception/img/squ4.png')}}" alt="" >
                <div class="img3CCont">
                    <h4>方便、卫生</h4>
                    <p>矫治器可以自行摘带，大幅缩短矫治时间，矫正牙齿同
                    时修正脸型，悄悄变美。与传统固定矫治相比，口腔卫
                    生易于维护，不影响进食、刷牙、社交活动等日常生活。</p>
                </div>


            </div>
            <div class="img3R">
                <img src="{{asset('reception/img/squ6.png')}}" alt="" >
                <div class="img3RCont">
                    <h4>可预测性</h4>
                    <p>在矫治开始前即可在计算机上模拟显示整个矫治过程中
                    患者牙颌的变化过程，实现了矫治过程的仿真预测，有利于医患交流。</p>

                </div>


            </div>

        </div>
    </div>

</div>
<footer>
    <div class="content">
        <div class="footL">
            <div>
                <img src="{{asset('reception/img/phone.png')}}" alt=""> 电话：100120119114
            </div>
            <div>
                <img src="{{asset('reception/img/youxiang.png')}}" alt="">邮箱：100120119114@163.com
            </div>
            <div>
                <img src="{{asset('reception/img/chunzhen.png')}}" alt="">传真：0592-88887777
            </div>
            <div>
                <img src="{{asset('reception/img/weibo.png')}}" alt="">微博： <a href="#"><span>官方微博</span></a>
            </div>
            <div>
                <img src="{{asset('reception/img/address.png')}}" alt="">地址：上海市XXXXXXXXX
            </div>
        </div>
        <div class="footR">
            <img src="{{asset('reception/img/erweima.png')}}" alt="">
        </div>
        <img src="{{asset('reception/img/long.png')}}" alt="" class="lineBottom">
        <p>
            COPYRIGHT © 2012-2017浙 ICP 备 14023781号 smileLink（中国）医疗科技有限公司版权所有
        </p>
    </div>
</footer>
</div>
<script src="{{asset('reception/js/swiper.min.js')}}"></script>
<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
</body>
</html>
