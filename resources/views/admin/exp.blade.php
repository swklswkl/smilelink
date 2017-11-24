<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <img style="height: 600px;" id="motaiimg" src="" alt="">
            {{--<div class="modal-footer">--}}
                {{--<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>--}}
            {{--</div>--}}
        </div>
    </div>
</div>

<div class="modal-dialog" id="mmda" style="min-width: 1150px">
    <div class="modal-content" id="contenta">
        <div class="modal-body">
            <div class="container bs-docs-container" style="max-width: 700px;">
                <div class="row">
                    <div class="form-group">
                        <div class="col-sm-10" style="width: 100%;">
                            <div style="width: 200px;height:200px;margin: 0 auto">
                                @if ($data[0]['certificate'])
                                    <input id="upfile" onchange="upfile(this)" style="position: absolute; top: 2px; width: 199px; height: 196px; opacity: 0;" type="file" name="certificate">
                                    <div id="maska" style="width: 200px;height: 200px;background-color: rgba(0,0,0,0.5);text-align:center;position: absolute;line-height: 200px;color:white;">点击查看资格证</div>
                                    <img id="zgz"  style="width: 200px;height: 200px;"  src="{{$data[0]['certificate']}}" alt="..." class="img-thumbnail">
                                @else
                                    <input id="upfile" onchange="upfile(this)" style="position: absolute; top: 2px; width: 199px; height: 196px; opacity: 0;" type="file" name="certificate">
                                    <img id="zgz" style="width: 200px;height: 200px;"  src="holder.js/200x200?text=暂无资格证"  class="img-thumbnail">
                                @endif
                            </div>
                            <input type="hidden" value="" id="zgzgz">
                        </div>
                    </div>
                    <div class="form-horizontal">
                        <div class="form-group">
                            &ensp;
                            &ensp;
                        </div>
                        <form id="oForm">
                            <input type="hidden" name="id" id="did" value="{{$data[0]['id']}}">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">姓名</label>
                                <div class="col-sm-9">
                                    <input type="text" id="name" class="form-control"  value="{{$data[0]['name']}}" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">手机号码</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="mobilephone" value="{{$data[0]['mobilephone']}}" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">邮箱</label>
                                <div class="col-sm-9">
                                    <input type="email" id="email" class="form-control" name="email" value="{{$data[0]['email']}}" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">性别</label>
                                <div class="col-sm-9">
                                    <select style="cursor: default;" name="sex" class="form-control" id="sex" disabled>
                                        <option value="0" {{$data[0]['sex']=='0'?'selected' :''}}>男</option>
                                        <option value="1" {{$data[0]['sex']=='1'?'selected' :''}}>女</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">价格</label>
                                <div class="col-sm-9">
                                    <input type="text" id="amount" class="form-control" name="amount" value="{{$data[0]['amount']}}" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">出生日期</label>
                                <div class="col-sm-9">
                                    <input type="date" id="birthday" class="form-control" name="birthday" value="{{$data[0]['birthday']}}" readonly>
                                </div>
                            </div>
                            <input type="hidden" id="phppro" value="{{$data[0]['province']}}">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">省份</label>
                                <div class="col-sm-9">
                                    <select id="province" style="cursor: default;" name="province" class="form-control" onchange="provic(this)" disabled>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">市/区</label>
                                <div class="col-sm-9">
                                    <select id="city" style="cursor: default;" name="city" class="form-control" disabled>
                                        <option selected>{{$data[0]['city']}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">现工作单位</label>
                                <div class="col-sm-9">
                                    <input type="text" id="work_unit" name="work_unit" class="form-control" value="{{$data[0]['work_unit']}}" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">工作年限</label>
                                <div class="col-sm-9">
                                    <input type="number" id="working_years" name="working_years" class="form-control" value="{{$data[0]['working_years']}}" readonly>
                                </div>
                            </div>
                            {{--<div class="form-group">--}}
                                {{--<label for="inputEmail3" class="col-sm-2 control-label">状态</label>--}}
                                {{--<div class="col-sm-9">--}}
                                    {{--<select style="cursor: default;" name="status" id="status" class="form-control" disabled>--}}
                                        {{--<option value="0" {{$data[0]['status']=='0'?'selected' :''}}>禁用</option>--}}
                                        {{--<option value="1" {{$data[0]['status']=='1'?'selected' :''}}>激活</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <div class="modal-footer">
            <button id="bj" switch="0" onclick="edit(this)" data-id="{{$data[0]['id']}}" type="button" class="btn btn-default">
                编辑
            </button>
            <button type="button" class="btn btn-default"
                    data-dismiss="modal">关闭
            </button>
        </div>
    </div>
</div><!-- /.modal-content -->
<script src="/js/holder.js"></script>
<script src="/js/app.js"></script>
<script>
    $('#upfile').hide();
    $('#motaikuang').hide();
    $.ajax({
        method: 'get',
        url: '/api/china/province',
        data: {
        },
        success: function (data) {
            var pro = $('#phppro').val();
            for (var i =0;i<data.length;i++)
            {
                $('#province').append((data[i]['text']==pro)?'<option'+' selected'+' value='+data[i]['id']+'>'+data[i]['text']+'</option>':'<option'+' value='+data[i]['id']+'>'+data[i]['text']+'</option>');
            }
        }
    });
    function edit (a) {
        if (a.getAttribute('switch') == 0) {
            a.setAttribute('switch', 1);
            a.innerHTML = '保存';
            a.setAttribute('class', 'btn btn-info');
            $('#name').removeAttr('readonly');
            $('#mobilephone').removeAttr('readonly');
            $('#email').removeAttr('readonly');
            $('#sex').removeAttr('disabled');
            $('#birthday').removeAttr('readonly');
            $('#amount').removeAttr('readonly');
            $('#province').removeAttr('disabled');
            $('#city').removeAttr('disabled');
            $('#certificate').removeAttr('disabled');
            $('#work_unit').removeAttr('readonly');
            $('#working_years').removeAttr('readonly');
            $('#zgz').attr('src','/images/clickup.svg');
            $('#upfile').show();
            $('#maska').hide();
//            $('#status').removeAttr('disabled');

        } else {
            $.ajax({
                method: 'post',
                url: '/api/expert/updateInformation',
                data: {
                    id: $('#did').val(),
                    name:$('#name').val(),
                    mobilephone:$('#mobilephone').val(),
                    email:$('#email').val(),
                    sex:$('#sex').val(),
                    birthday:$('#birthday').val(),
                    province:$('#province').find("option:selected").text(),
                    city:$('#city').find("option:selected").text(),
                    certificate:$('#certificate').val(),
                    work_unit:$('#work_unit').val(),
                    working_years:$('#working_years').val(),
                    certificate:$('#zgzgz').val(),
                    amount:$('#amount').val(),
//                    status:$('#status').val(),
                },
                success: function (data) {
                    eval('var res = ' + data);
                    if (res['code'] == 200) {
                        swal('保存成功', '', 'success');
                        $('#name').attr('readonly','true');
                        $('#mobilephone').attr('readonly','true');
                        $('#email').attr('readonly','true');
                        $('#sex').attr('disabled','true');
                        $('#birthday').attr('readonly','true');
                        $('#province').attr('disabled','true');
                        $('#city').attr('disabled','true');
                        $('#certificate').attr('disabled','true');
                        $('#work_unit').attr('readonly','true');
                        $('#working_years').attr('readonly','true');
                        $('#amount').attr('readonly','true');
                        $('#upfile').hide();
//                        $('#status').attr('readonly','true');
                        a.setAttribute('switch', 0);
                        a.innerHTML = '编辑';
                        a.setAttribute('class', 'btn btn-default');
                    } else {
                        swal('保存失败', '', 'error');
                    }
                }
            });
        }
    }

    function provic (a)
    {
        var index = a.selectedIndex+2;

        $.ajax({
            method: 'get',
            url: '/api/china/city',
            data: {
                q:index
            },
            success: function (data) {
                $('#city').html('');
                for (var i =0;i<data.length;i++)
                {
                    $('#city').append('<option>'+data[i]['text']+'</option>');
                }
            }
        });
    }

    function upfile (imgFile)
    {
        var oMyForm = new FormData();
        oMyForm.append("file", imgFile.files[0]);
        $.ajax({
            type: 'post',
            url:'{{url('/api/file/upload')}}',
            dataType:'json',
            data:oMyForm,
            processData: false,
            contentType: false,
            async: false,
        }).done(function(res) {
            document.getElementById('zgz').src = res.data.image_url;
            document.getElementById('zgzgz').value = res.data.image_url;
        }).fail(function(res) {});
    }

    document.getElementById('maska').onmouseover = function ()
    {
        $('#maska').css('background-color','rgba(0,0,0,0.6)');
    }

    document.getElementById('maska').onmouseout = function ()
    {
        $('#maska').css('background-color','rgba(0,0,0,0.5)');
    }

    document.getElementById('maska').onclick = function ()
    {
        $('#motaiimg').attr('src',$('#zgz').attr('src'));
        $('#myModal2').modal();
    }

</script>