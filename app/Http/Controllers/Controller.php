<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * TODO:成功时JSON返回
     * @param $msg
     * @param $data
     * @return string
     */
    public function successResponse($msg = 'OK' , $data = array())
    {
        $return = array(
            'msg' => $msg,
            'code' => 200,
            'data' => $data
        );

        return json_encode($return);
    }

    /**
     * TODO:抛出的Json异常
     * @param $getMessage
     * @return string
     */
    public function errorResponse($getMessage)
    {
        $data = json_decode($getMessage, true);
        $return = array(
            'msg' => $data['msg'],
            'code' => $data['code']
        );
        return json_encode($return);
    }

    public function error_msg($msg, $code = '')
    {
        return json_encode(array('msg' => $msg, 'code' => $code));
    }
}
