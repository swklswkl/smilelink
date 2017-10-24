<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>、
    <link rel="stylesheet" href="{{url('css/app.css')}}">
</head>
<body>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form class="form-horizontal" id="form">
            <input type="hidden" name="createtime" value="{{time()}}}">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="name" placeholder="Name">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Phone</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" name="mobilephone" placeholder="Phone">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Sex</label>
                <div class="col-sm-10">
                    <label class="checkbox-inline">
                        <input type="radio" id="inlineCheckbox2" name="sex" value="0"> Man
                    </label>
                    <label class="checkbox-inline">
                        <input type="radio" id="inlineCheckbox3" name="sex" value="1"> Male
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Birthday</label>
                <div class="col-sm-10">
                        <input type="date" id="inlineCheckbox2" name="birthday" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="button" class="btn btn-default" onclick="register()">Register</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    function register ()
    {
        var xhr = new XMLHttpRequest();
        var data = new FormData(document.getElementById('form'));
        xhr.onreadystatechange = function ()
        {
            if (xhr.readyState == 4 && xhr.status == 200)
            {
                eval('var data = ' + xhr.responseText);
                alert(data['msg']);
            }
        }
        xhr.open('post','/api/register',true);
        xhr.send(data);
    }
</script>
</body>
</html>