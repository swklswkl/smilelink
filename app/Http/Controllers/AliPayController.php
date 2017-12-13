<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yansongda\LaravelPay\Facades\Pay;

class AliPayController extends Controller
{
    public function pay ()
    {
        $config_biz = [
            'out_trade_no' => time(),
            'total_amount' => '0.01',
            'subject'      => '测试订单',
        ];

        return Pay::driver('alipay')->gateway()->pay($config_biz);
    }

    public function return(Request $request)
    {
        return Pay::driver('alipay')->gateway()->verify($request->all());
    }

    public function notify(Request $request)
    {
        if (Pay::driver('alipay')->gateway()->verify($request->all())) {
            file_put_contents(storage_path('notify.txt'), "收到来自支付宝的异步通知\r\n", FILE_APPEND);
            file_put_contents(storage_path('notify.txt'), '订单号：' . $request->out_trade_no . "\r\n", FILE_APPEND);
            file_put_contents(storage_path('notify.txt'), '订单金额：' . $request->total_amount . "\r\n\r\n", FILE_APPEND);
        } else {
            file_put_contents(storage_path('notify.txt'), "收到异步通知\r\n", FILE_APPEND);
        }

        echo "success";
    }
}
