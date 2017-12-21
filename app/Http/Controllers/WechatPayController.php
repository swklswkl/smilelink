<?php
namespace App\Http\Controllers;
use App\Model\Orders;
use Yansongda\Pay\Pay;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class WechatPayController extends Controller
{
    protected $config = [
        'wechat' => [
            'app_id' => 'ww60453a86a96dcdcc',
            'mch_id' => '1491685292',
            'notify_url' => 'http://www.smilelink.cn/wechat/callback',
            'key' => 'e260daddf3cf6956a87fb55188d6cb8a',
            'cert_client' => './apiclient_cert.pem',
            'cert_key' => './apiclient_key.pem',
        ],
    ];

    public function payLink(Request $request)
    {
        $order_id = $request->input('order_id');
        $service_content = $request->input('service_content');
        $OrderInfo = Orders::where('number',$order_id)->get();
       // return $OrderInfo[0]->amount*100;
        $config_biz = [
            'out_trade_no' => $order_id,
            'total_fee' => $OrderInfo[0]->amount*100, // **单位：分**
            'body' => $service_content,
            'spbill_create_ip' =>  $request->getClientIp(),
            'product_id' => $OrderInfo[0]->orthodontics_id,
        ];
        $pay = new Pay($this->config);
        $payLink = $pay->driver('wechat')->gateway('scan')->pay($config_biz);
        $QrCode = QrCode::size(200)->generate($payLink);
        return view('smilelink.wechatpay')->with('QrCode',$QrCode)->with('payInfo',$config_biz);
    }

    public function notify(Request $request)
    {
        $pay = new Pay($this->config);
        $verify = $pay->driver('wechat')->gateway('scan')->verify($request->getContent());
        if ($verify) {
            file_put_contents('notify.txt', "收到来自微信的异步通知\r\n", FILE_APPEND);
            file_put_contents('notify.txt', '订单号：' . $verify['out_trade_no'] . "\r\n", FILE_APPEND);
            file_put_contents('notify.txt', '订单金额：' . $verify['total_fee'] . "\r\n\r\n", FILE_APPEND);
            Orders::where('number',$verify['out_trade_no'])->update(['status'=>'1','pay_time'=>time()]);
        } else {
            file_put_contents(storage_path('notify.txt'), "收到异步通知\r\n", FILE_APPEND);
        }
        echo "success";
    }

    public function payResult(Request $request)
    {
        $number = $request->input('number');
        $result = Orders::select('status')->where('number',$number)->get();
        if($result[0]['status']=='0')
        {
            $result = '支付失败';
        }else{
            $result = '支付成功';
        }
        return view('smilelink.wechatpayResult')->with('result',$result);
    }
}