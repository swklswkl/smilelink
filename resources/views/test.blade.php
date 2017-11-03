<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<div class="container bs-docs-container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <br>
            <form class="form-horizontal" action="api/odtase/addChiefAndComplaint" method="post">
                <label class="checkbox-inline">
                    <input type="checkbox" id="inlineCheckbox1" name="complained[]" value="1"> 1
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" id="inlineCheckbox2" name="complained[]" value="2"> 2
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" id="inlineCheckbox3" name="complained[]" value="3"> 3
                </label>
                <input type="text" name="other_complained">
                <input type="text" name="orthodontics_id">
                <input type="submit">
                {{--<div class="form-group">--}}
                    {{--<label for="inputEmail3" class="col-sm-4 control-label">是否具备医师资格证：</label>--}}
                    {{--<div class="col-sm-8">--}}
                        {{--<input type="email" class="form-control" id="inputEmail3" placeholder="Email">--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<label for="inputPassword3" class="col-sm-4 control-label">Password</label>--}}
                    {{--<div class="col-sm-8">--}}
                        {{--<input type="password" class="form-control" id="inputPassword3" placeholder="Password">--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<label for="inputPassword3" class="col-sm-4 control-label">Password</label>--}}
                    {{--<div class="col-sm-8">--}}
                        {{--<input type="password" class="form-control" id="inputPassword3" placeholder="Password">--}}
                    {{--</div>--}}
                {{--</div>--}}
            </form>
        </div>
        <div class="col-md-3"></div>

    </div>
</div>
</body>
</html>