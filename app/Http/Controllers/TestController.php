<?php

namespace App\Http\Controllers;

use App\Model\Doctors;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    /**
     * Eloquent ORM 多表查询
     */
    public function Test()
    {
        // 查询id为1的医生信息，并且查询该医生的所有订单，跟所有病历
        $data = Doctors::select(['id','name'])->where(['id'=>1])->with(['orders'=>function ($query) {
            $query->select(['doctor_id','name']);
        },'casehistory'=>function ($query) {
            $query->select(['doctor_id','id_number']);
        }])->get();
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
    /**
     * 使用事物增加医生
     */
    public function Insert (Request $request)
    {
        $name = $request->post('name');
        $mobilephone = $request->post('mobilephone');
        $password = md5($request->post('password'));
        $sex = $request->post('sex');
        $birthday = $request->post('birthday');

        // 开启事物
        DB::beginTransaction();
        try{
            Doctors::insert([
                'name' => $name,
                'mobilephone' => $mobilephone,
                'password' => $password,
                'sex' => $sex,
                'birthday' => $birthday,
                'create_time' => time()
            ]);
            // 提交事务
            DB::commit();
            $return = array (
                'msg' => '注册成功',
                'data' => array()
            );
            echo json_encode($return);
        } catch (\Exception $e) {
            // 回滚
            DB::rollBack();
            $return = array (
                'msg' => '注册失败',
                'data' => array()
            );
            echo json_encode($return);
        }

    }
}
