<?php

namespace App\Http\Controllers;

use App\Model\Doctors;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function Test()
    {
//        $list = DB::table('sl_area')->get();
//        dump($list);

        // 查询id为1的医生信息，并且查询该医生的所有订单，跟所有病历
        $data = Doctors::find(1)->with('orders')->with('casehistory')->get();
        echo json_encode($data);
    }


    /**
     *  TODO:注册Demo
     * @param Request $request
     */
    public function Demo(Request $request){
        /*开启事务*/
      /*  DB::beginTransaction();
        try{*/
            //数据验证
            return $this->validate($request,[
                'mobilephone' => 'required|unique:sl_doctors',
                'password'=>'required|min:6|confirmed',
                'password_confirmation' => 'required|min:6',
                'code_number' => 'required',
                'province' => 'required'
            ]);

            /*if($validation->fail()){
                throw new Exception($this->error_msg('验证失败',401));
            }*/
       /*     DB::commit();
        }catch (Exception $e){
            DB::rollBack();
            $this->errorResponse($e->getMessage());
        }*/
    }
}
