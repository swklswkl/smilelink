<?php

namespace App\Http\Controllers;

use App\Model\Doctors;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function test(Request $request)
    {
        $data['id'] =  $request->input('id');
        $data['name'] =  $request->input('name');
        $data['mmm'] =  $request->input('mmm');
        $mdkey = $request->input('mdkey');
        $authEnd =  $this->auth($data,$mdkey);
        return $authEnd;
    }
}
