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
    </style>
</head>
<body>
<header>
    <div class="content">
    <div class="nav-L">
        <img src="{{asset('reception/img/bonsmilelogo.png')}}" alt="">

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
            <h3>Bonsmile,一个专业的正畸平台</h3>
            <p>更舒适的体验佩戴无形让笑容无所畏惧</p>
            <p>更少复诊次数平均减少8次复诊</p>
            <p>更精确的治疗效果美丽与健康共享</p>
            <p>3D动画演示牙齿移动过程遇见未来美丽笑容</p>
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
            <h3>与Bonsmile博思美合作优势</h3>
            <p class="p2">Bonsmile博思美遵循"以顾客第一 医生第一"的服务宗旨</p>
            <p class="p3">超短的交货期:一般交货期为13个工作日 <span>◆</span></p>
            <p class="p3">快捷的快递:全面使用顺丰快递,保证您能最快速收获 <span>◆</span></p>
            <p class="p3">周到的服务:告知医生如何操作;出货前后温馨短信提示通知 <span>◆</span></p>
            <p class="p3">专业的客服:专业客户服务电话 <span>◆</span></p>
            <p class="p3">市场的支持:免费提供多种市场宣传用品、定制授权牌和授权证书等 <span>◆</span></p>
            <p class="p3">免费的工具：免费提供邻面去釉工具 <span>◆</span></p>
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
                <p class="p1">OUR ADVANTAGE</p>
                <h3>Bonsmile博思美技术力量优势</h3>
                <p class="p2">Ravindra Nanda教授</p>
                <p class="p3"><span>◆</span> 美国康涅狄格州立大学校友会主席、美国康涅狄格州立大学牙学院正畸科主任、《临床正畸学》（Journal of Chinial Orthodntics）</p>
               <p class="p3">&nbsp;&nbsp;&nbsp;杂志的副编辑、正畸专科书籍五本，正畸主流期刊上发表科研及临床论文百余篇、《保持与稳点》的共同作者。</p>
                <p class="p2" id="p2">卓瑞堂医师</p>
                <img src="{{asset('reception/img/squ5.png')}}" alt="">
                <p class="p3"> <span>◆</span>台北医学大学口腔医学院牙医系毕业、长庚医学中心牙医师、台北医学大学牙医再教育课程讲师、台湾BenQ集团口腔3D数位</p>
                <p class="p3">&nbsp;&nbsp;&nbsp;技术研发顾问、台湾隐形矫正学会理事。</p>
                <h4> 02.</h4>
            </div>

        </div>
        <div class="lineY"><img src="{{asset('reception/img/shu.png')}}" alt=""></div>

    </div>
</div>
<div class="productAdv">


    <div class="content">
        <p class="p1">OUR PRODUCTS</p>

        <h3>Bonsmile博思美产品优势！</h3>


    <img src="{{asset('reception/img/squ2.png')}}" alt=""  class="lineRight">


        <p class="p3">博思美致力于为每个有需求的客户制定个性化的隐形矫正设计方案，带给他们时尚、舒适、美观、方便的口腔美容体验。</p>
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
            COPYRIGHT © 2012-2017浙 ICP 备 14023781号 Bonsmile博思美（中国）医疗科技有限公司版权所有
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
