<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function Test()
    {
        $list = DB::table('sl_area')->get();
        dump($list);
    }

}
