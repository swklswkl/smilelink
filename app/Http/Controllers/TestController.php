<?php

namespace App\Http\Controllers;

use App\Model\Doctors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function Test()
    {
//        $list = DB::table('sl_area')->get();
//        dump($list);
        // 查询id为1的医生信息，并且查询该医生的所有订单
        $data = Doctors::whereHas('orders',function ($q) {
            $q->where('doctor_id',1);
        })->with('orders')->get();
        echo json_encode($data);
    }
}
