<?php

namespace App\Http\Controllers;

use App\Model\Experts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class ExpertController extends Controller
{
    /**
     * TODO:查询专家信息
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function information (Request $request)
    {
        try
        {
            $data = Experts::where(['id'=>$request->get('id')])->get()->toArray();
            if (sizeof($data))
            {
                return $this->successResponse('查询成功',$data);
            }else{
                return $this->errorResponse('查询失败');
            }
        }catch (\Exception $e)
        {
            return $this->errorResponse('操作有误');
        }
    }

    /**
     * TODO:修改专家信息(个人资料)
     * @param Request $request
     * @return string
     */
    public function updateInformation (Request $request)
    {
        DB::beginTransaction();
        try
        {
            $data = Experts::where(['id' => $request->post('id')])
                ->update([
                    'name' => $request->post('name'),
                    'sex' => $request->post('sex'),
                    'email' => $request->post('email'),
                    'birthday' => $request->post('birthday'),
                    'province' => $request->post('province'),
                    'city' => $request->post('city'),
                    'work_unit' => $request->post('work_unit'),
                    'certificate' => $request->post('certificate'),
                    'working_years' => $request->post('working_years'),
                    'status' => $request->post('status')
                ]);
            DB::commit();
            if ($data)
            {
                return $this->successResponse('更新成功');
            }else{
                return $this->errorResponse('更新失败');
            }
        }catch (\Exception $e)
        {
            DB::rollBack();
            return $this->errorResponse('操作有误');
        }
    }
}