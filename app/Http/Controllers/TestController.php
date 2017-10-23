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

        // 查询id为1的医生信息，并且查询该医生的所有订单，跟所有病历
        $data = Doctors::find(1)->with('orders')->with('casehistory')->get();
        echo json_encode($data);
    }
}
