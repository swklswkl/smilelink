<?php

namespace App\Admin\Tools;

use Encore\Admin\Admin;
use Encore\Admin\Grid\Tools\AbstractTool;
use Illuminate\Support\Facades\Request;

class UserGender extends AbstractTool
{
    public function script()
    {
        $url = Request::fullUrlWithQuery(['status' => '_gender_']);

        return <<<EOT
$('input:radio.user-gender').change(function () {
    var url = "$url".replace('_gender_', $(this).val());
    $.pjax({container:'#pjax-container', url: url });
});
EOT;
    }

    public function render()
    {
        Admin::script($this->script());

        $options = [
            'all'   => '全部',
            '1'     => '档案已建立',
            '2'     => '治疗中',
        ];
//        dd($options);die;
        return view('admin.tools.gender', compact('options'));
    }
}
