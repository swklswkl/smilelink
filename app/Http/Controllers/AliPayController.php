<?php

namespace App\Http\Controllers;

use App\Model\Orders;
use Pay;
use Illuminate\Http\Request;

class AliPayController extends Controller
{
    public function pay (Request $request)
    {
        $number = $request->get('dd');
        $amount = Orders::select(['amount'])->where(['number'=>$number])->get()->toArray()[0]['amount'];
        $config_biz = [
            'out_trade_no' => $number,
            'total_amount' => $amount,
            'subject'      => 'SmileLink服务购买',
        ];

        return Pay::driver('alipay')->gateway()->pay($config_biz);
    }

    public function backURL(Request $request)
    {
        if (Pay::driver('alipay')->gateway()->verify($request->all()))
        {
            $data = Pay::driver('alipay')->gateway()->verify($request->all());
            if ($data)
            {
                $number = $data['out_trade_no'];
                $n = Orders::where(['number'=>$number])->update(['status'=>'1']);
                if ($n)
                {
                    return view('smilelink.paySuccess');
                }
            }else{
                echo '支付失败';
            }
        }
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
