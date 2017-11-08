
function del (id)
{
    swal({
        title: "确认删除?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "确认",
        closeOnConfirm: false,
        cancelButtonText: "取消"
    },function(){
        $.ajax({
            method: 'post',
            url: '/api/odtcase/deleteOrthodontics',
            data: {
                orthodontics_id:id
            },
            success: function (data) {
                eval('var res = ' + data);
                $.pjax.reload('#pjax-container');
                    if (res['code'] == 200) {
                        swal('删除成功', '', 'success');
                    } else {
                        swal('删除失败', '', 'error');
                    }
            }
        });
    });
}

function cx (id)
{
    $.ajax({
        method: 'get',
        url: '/api/test',
        data: {
            orthodontics_id:id
        },
        success: function (data) {
            console.log(data);
            $("#goudan").html(data);
            $("#goudan").modal({

        })
        }
    });
}