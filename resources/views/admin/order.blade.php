<div class="modal-dialog" id="mmda" style="min-width: 1150px">
    <div class="modal-content" id="contenta">
        <div class="modal-body">
            <div class="container bs-docs-container" style="max-width: 700px;">
                <div class="row">
                    <div class="panel panel-default">
                        <!-- Default panel contents -->
                        <div class="panel-heading">
                            <h4>订单详情</h4>
                        </div>

                        <!-- Table -->
                        <table class="table">
                            <tr>
                                <th scope="row">订单编号</th>
                                <td>{{$data[0]['number']}}</td>
                            </tr>
                            <tr>
                                <th scope="row">病历编号</th>
                                <td>
                                    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" data-id="{{$data[0]['orthodontics_id']}}" title="点击查看病历详情" onclick="zjorder(this.getAttribute('data-id'))" >{{$data[0]['orthodontics_id']}}</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">服务内容</th>
                                <td>{{$service_name}}</td>
                            </tr>
                            <tr>
                                <th scope="row">订单状态</th>
                                <td>
                                    @if ($data[0]['status'] == '0')
                                        待支付
                                    @elseif($data[0]['status']=='1')
                                        已支付
                                    @elseif($data[0]['status']=='2')
                                        已接单
                                    @elseif($data[0]['status']=='3')
                                        已提交设计
                                    @else
                                        已完成
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">所属地区</th>
                                <td>{{$province[0]['province']}}</td>
                            </tr>
                            <tr>
                                <th scope="row">订单提交人</th>
                                <td><button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="点击查看医生资料" data-id="{{$province[0]['id']}}" onclick="yisheng(this.getAttribute('data-id'))" >{{$province[0]['name']}}</button></td>
                            </tr>
                            @if(intval($data[0]['status']) >= 2)
                                <tr>
                                    <th scope="row">订单接单人</th>
                                    <td><button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="点击查看专家资料" data-id="{{$expert_name[0]['id']}}" onclick="zhuanjia(this.getAttribute('data-id'))" >{{$expert_name[0]['name']}}</button></td>
                                </tr>
                            @endif
                            <tr>
                                <th scope="row">订单创建时间</th>
                                <td>{{date('Y-m-d H:i:s',$data[0]['create_time'])}}</td>
                            </tr>
                            <tr>
                                <th scope="row">订单支付时间</th>
                                <td>{{date('Y-m-d H:i:s',$data[0]['pay_time'])}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default"
                    data-dismiss="modal">关闭
            </button>
        </div>
    </div>
</div><!-- /.modal-content -->
<script>
    function zjorder (id)
    {
        $.ajax({
            method: 'get',
            url: '/api/test',
            data: {
                orthodontics_id:id
            },
            success: function (data) {
                $("#ymd").html(data);
                $("#ymd").modal({
                })
            }
        });
    }

    function yisheng (id)
    {
        $.ajax({
            method: 'get',
            url: '/api/yscx',
            data: {
                id:id
            },
            success: function (data) {
                $("#ymd").html(data);
                $("#ymd").modal({
                })
            }
        });
    }

    function zhuanjia (id)
    {
        $.ajax({
            method: 'get',
            url: '/api/zjcx',
            data: {
                id:id
            },
            success: function (data) {
                $("#ymd").html(data);
                $("#ymd").modal({
                })
            }
        });
    }
</script>