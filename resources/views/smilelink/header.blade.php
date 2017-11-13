
<header>
    <div class="content">
        <div class="head-L">
            <img src="{{asset('reception/img/bonsmilelogo.png')}}" alt="">
        </div>
       @if(empty(session('expert')))
        <div class="head-C">
            <span ><a href="{{url('createCase')}}">新建病例</a></span>
            <span class="span1"><a href="{{url('caseManagement')}}">病例管理</a></span>
            <span><a href="{{url('myOrders')}}">我的订单</a></span>
        </div>
        <div class="head-R">
            <span><a href="#">个人中心</a></span>
            <span onclick="loginout()" class="span2"><a href="javascript:void(0);">退出</a></span>
        </div>
        @else
            <div class="head-C">
                <span ><a href="">接单</a></span>
                <span class="span1"><a href="">我的订单</a></span>
            </div>
            <div class="head-R">
                <span><a href="#">个人中心</a></span>
                <span onclick="loginout()" class="span2"><a href="javascript:void(0);">退出</a></span>
            </div>
        @endif
    </div>
</header>
<script>
    function loginout ()
    {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function ()
        {
            if (xhr.readyState == 4 && xhr.status == 200)
            {
                eval('var data = ' + xhr.responseText);
               if (data['msg'] == '退出成功')
               {
                   window.location.href = '/';
               }
            }
        }
        xhr.open('post','/api/doctor/loginOut',true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send();
    }
</script>
@section('content')
@endsection


