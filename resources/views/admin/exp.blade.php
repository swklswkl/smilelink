<div class="modal-dialog" id="mmda" style="min-width: 1150px">
    <div class="modal-content" id="contenta">
        <div class="modal-body">
            <div class="container bs-docs-container" style="max-width: 700px;">
                <div class="row">
                    <div class="form-group">
                        <div class="col-sm-10" style="width: 100%;">
                            <div style="width: 150px;height: 150px;margin: 0 auto">
                                <img  src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1510756939&di=26504912dbd3c396f578b4a6f00f2ad7&imgtype=jpg&er=1&src=http%3A%2F%2Fimg2.duitang.com%2Fuploads%2Fitem%2F201301%2F23%2F20130123223541_V2vMk.thumb.200_0.gif" alt="..." class="img-thumbnail">
                            </div>
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
                                <label for="inputEmail3" class="col-sm-2 control-label">医师资格证</label>
                                <div class="col-sm-9">
                                    <select style="cursor: default;" name="certificate" id="certificate" class="form-control" disabled>
                                        <option value="0" {{$data[0]['certificate']=='0'?'selected' :''}}>无</option>
                                        <option value="1" {{$data[0]['certificate']=='1'?'selected' :''}}>有</option>
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
<script>
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
            $('#province').removeAttr('disabled');
            $('#city').removeAttr('disabled');
            $('#certificate').removeAttr('disabled');
            $('#work_unit').removeAttr('readonly');
            $('#working_years').removeAttr('readonly');
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
</script>