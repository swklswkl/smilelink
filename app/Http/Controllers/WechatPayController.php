<?php

namespace App\Http\Controllers;

use Yansongda\Pay\Pay;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
class WechatPayController extends Controller
{
    protected $config = [
        'wechat' => [
            'app_id' => 'ww60453a86a96dcdcc',
            'mch_id' => '1491685292',
            'notify_url' => 'http://www.smilelink.cn/wechat/notify',
            'key' => 'e260daddf3cf6956a87fb55188d6cb8a',
            'cert_client' => './apiclient_cert.pem',
            'cert_key' => './apiclient_key.pem',
        ],
    ];

    public function payLink()
    {
        $config_biz = [
            'out_trade_no' => '20170806125346',
            'total_fee' => '1', // **单位：分**
            'body' => 'test body',
            'spbill_create_ip' => '114.84.253.88',
            'product_id' => 'S00001',
        ];
        $pay = new Pay($this->config);
        $payLink = $pay->driver('wechat')->gateway('scan')->pay($config_biz);
        return QrCode::size(200)->generate($payLink);
    }

    public function payQrCode()
    {
        return QrCode::size(200)->generate($this->payLink());
    }
    public function notify(Request $request)
    {
        $pay = new Pay($this->config);
        $verify = $pay->driver('wechat')->gateway('scan')->verify($request->getContent());
        if ($verify) {
            file_put_contents('notify.txt', "收到来自微信的异步通知\r\n", FILE_APPEND);
            file_put_contents('notify.txt', '订单号：' . $verify['out_trade_no'] . "\r\n", FILE_APPEND);
            file_put_contents('notify.txt', '订单金额：' . $verify['total_fee'] . "\r\n\r\n", FILE_APPEND);
        } else {
            file_put_contents(storage_path('notify.txt'), "收到异步通知\r\n", FILE_APPEND);
        }

        echo "success";
    }


}