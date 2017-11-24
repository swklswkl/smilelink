<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonController extends Controller
{
    //
    public function uploadPictures(Request $request)
    {
        if ($request->hasFile('file') && $request->file('file')->isValid()) {
            $photo = $request->file('file');
            $store_result = \Storage::disk('public')->put('uploads',$photo);
            $output = [
                'image_url' => env('APP_URL').'/'.$store_result
            ];
            return $this->successResponse('ok',$output);
        }
        return $this->errorResponse('未获取到上传文件或上传过程出错');
    }

    public function upX(Request $request)
    {
        try
        {
            $X = $request->file('file');
            $store_result = \Storage::disk('public')->put('uploads',$X);
            $output = [
                'file' => env('APP_URL').'/'.$store_result
            ];
            return $this->successResponse('ok',$output);
        }catch (\Exception $e)
        {
            return $this->errorResponse('系统错误，请稍后重试');
        }
    }
}
