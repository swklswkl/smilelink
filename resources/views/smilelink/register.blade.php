<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <link href="{{asset('reception/Bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        *{font-size: 20px}
        label{font-weight: normal}
    </style>
</head>
<body>
<div style="background: #69bd27;margin-bottom: 40px" >
    <img src="{{asset('reception/img/log.jpg')}}" alt="" >
</div>

<div class="container bs-docs-container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <br>
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">姓名:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Email" style="background: #cce8cf">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inlineRadio2" class="col-sm-4 control-label">性别:</label>
                    <div class="col-sm-8">
                        <label class="radio-inline">
                            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" style="background: #cce8cf;height: 18px;width: 18px;"> 男
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" style="background: #cce8cf;height: 18px;width: 18px;"> 女
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEamil" class="col-sm-4 control-label">电子邮箱:</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="inputEamil" placeholder="请输入电子邮箱" style="background: #cce8cf">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputTel" class="col-sm-4 control-label">手机号:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputTel" placeholder="请输入手机号码" style="background: #cce8cf">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">出生年月日:</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="inputDate" placeholder="" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inlineRadio2" class="col-sm-4 control-label">是否具备医师资格证:</label>
                    <div class="col-sm-8">
                        <label class="radio-inline">
                            <input type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option2" style="background: white;height: 18px;width: 18px;"> 是
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option3" style="background: #cce8cf;height: 18px;width: 18px"> 否
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">现工作单位:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputWork" placeholder="请输入您的工作单位" style="background: #cce8cf">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">从事正畸年限:</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <input type="number" class="form-control" id="inputAge" placeholder="请填写工作年限" style="background: #cce8cf">
                            <div class="input-group-addon " style="background: white;border: none">年</div>
                        </div>
                    </div>
                </div>



                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-10">
                        <div class="checkbox">
                            <label class="radio-inline">
                                <input type="checkbox" style="height: 19px;width: 19px; " > <span style="font-size: 17px;">阅读并接受</span> <a href="" style="font-size: 17px">《博思美协议》</a>
                            </label>
                        </div>
                    </div>
                </div>



                <div class="form-group">

                    <div class="col-sm-6 col-sm-offset-4">
                        <button type="button" class="btn btn-success btn-lg btn-block" style="background:#69b27d ;width: 400px;height: 40px;margin-top: 10px;">提交</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-2"></div>

    </div>
</div>



<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="{{asset('reception/Bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js')}}"></script>

</body>
</html>
