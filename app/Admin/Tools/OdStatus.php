<?php

namespace App\Admin\Tools;

use Encore\Admin\Admin;
use Encore\Admin\Grid\Tools\AbstractTool;
use Illuminate\Support\Facades\Request;

class OdStatus extends AbstractTool
{
    public function script()
    {
        $url = Request::fullUrlWithQuery(['status' => '_status_']);

        return <<<EOT
$('input:radio.user-gender').change(function () {
    var url = "$url".replace('_status_', $(this).val());
    $.pjax({container:'#pjax-container', url: url });
});
EOT;
    }

    public function render()
    {
        Admin::script($this->script());
        $options = [
            'all'   => '全部',
            '0'     => '待付款',
            '1'     => '已付款',
            '2'     => '已接单',
            '3'     => '已提交设计',
            '4'     => '已结束'
        ];
//        dd($options);die;
        return view('admin.tools.gender2', compact('options'));
    }
}
