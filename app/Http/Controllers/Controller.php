<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * TODO:成功时JSON返回
     * @param $msg
     * @param $data
     * @return string
     */
    public function successResponse($msg = 'OK',$data = array())
    {
        $return = array(
            'msg' => $msg,
            'code' => 200,
            'data' => $data
        );

        return json_encode($return);
    }
    /**
     * TODO:失败时JSON返回
     * @param $msg
     * @return string
     */
    public function errorResponse($msg, $code = '401')
    {
        return json_encode(array('msg' => $msg, 'code' => $code));
    }

    /**
     * TODO:验签
     * @param $data
     * @return string
     * @result $data
     */
    public function auth($data,$mdkey)
    {
        $string = $this->createLinkstring($this->argSort($this->paraFilter($data)), '');//mdkey $
        $md5Result = md5($string . 'helloYya');
        if ($md5Result != $mdkey)
        {
            if ($_SERVER["REMOTE_ADDR"] == '127.0.0.1')
            {
                var_dump($data);
                var_dump($string);
                var_dump($md5Result);
                var_dump($mdkey);
            }
            //log_message('debug', 'Customer: Theirs:' . $getInfo['mdkey'] . '; Ours:' . $md5Result);
            return $this->errorResponse($this->error_msg('验签失败', '100001'));
        } else {
            return $data;
        }
        return $data;

    }

    /**
     * TODO:过虑空值
     * @param $para
     * @return array
     */
    function paraFilter($para) {
        $para_filter = array();
        foreach ($para as $key => $val) {
            if($key == "mdkey" || ($val == "" && $val !== "0") || (empty($val) && $val !== "0"))continue;
            else	$para_filter[$key] = $para[$key];
        }
        return $para_filter;
    }

    /**
     * TODO:对数组排序
     * @param $para
     * @return mixed
     */
    function argSort($para) {
        ksort($para);
        reset($para);
        return $para;
    }

    /**
     * TODO:把数组所有元素，按照“参数=参数值”的模式用“&”字符拼接成字符
     * @param $para
     * @param string $type
     * @param string $platform
     * @return bool|string
     */
    function createLinkstring($para, $type = '', $platform = '')
    {
        $arg = "";
        foreach ($para as $key => $val) {
            if (is_array($val)) {
                $arg .= $key . "={" . urldecode("%0A%20%20%20%20");
                $i = 0;
                foreach ($val as $valKey => $item) {
                    $arg .= $valKey . '=' . $item . ";" . ($i == count($val) - 1 ? urldecode("%0A") : urldecode("%0A%20%20%20%20"));
                    $i++;
                }
                $arg .= '}&';
            } else {
                if (!empty($type) && preg_match("/[\x7f-\xff]/", $val)) {
                    $arg .= $key . "=" . unicode_encode($val) . "&";
                } else {
                    $arg .= $key . "=" . $val . "&";

                }
            }
        }
        //去掉最后一个&字符
        $arg = substr($arg, 0, count($arg) - 2);
        //如果存在转义字符，那么去掉转义
        if (get_magic_quotes_gpc()) {
            $arg = stripslashes($arg);
        }
        return $arg;
    }

    /**
     * TODO:生成档案编号
     *
     */
    public function createArchivesNum()
    {
        $ArchivesNum = DB::table('sl_case_history')->select('id')->orderBy('id','desc')->first();
        if($ArchivesNum != null ) {
            $ArchivesNum = $ArchivesNum->id;
            $ArchivesNum = "C".str_pad(intval(substr($ArchivesNum, -9))+1, 9, '0',STR_PAD_LEFT);
        } else {
            $ArchivesNum = 'C000000001';
        }
        return $ArchivesNum;
    }



}

