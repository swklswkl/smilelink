<?php

return [
    'alipay' => [
        // 支付宝分配的 APPID
        'app_id' => '2017120700430446',

        // 支付宝异步通知地址
        'notify_url' => 'http://www.smilelink.cn/alipay/notify',

        // 支付成功后同步通知地址
        'return_url' => 'http://www.smilelink.cn/alipay/return',

        // 阿里公共密钥，验证签名时使用
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAqYsMc37QiUuXH1B1JpoKyY1xG0KYnALedEOyfvG8i9HFwLAB6T2TObmh3MX9JCYa1Qm3UoW6HYxIDdKc5YGmlNsUsUg2YzSFN+WwBt2deMVK2yQBv6eOKIkSFV3fHZgswTxf5JjEEAjP/Ziphiago1EzFEcq30TLEc0Z/ch56ATCUkrozy+ZaKW+F9Xe+KJHdNBMzwXM35FFuH/vequ99FjPThCovHAENQ0jzexC8d4/nlYwJJiZfp4/La7gcSlNd/rDzDbrIgxMtwOW2yo0eU7ris5SZjW4IMs7IxSOcTKGRbuASFzK9oNckRteOBv+SBosmW3UXpfUl8IAbptV+QIDAQAB',

        // 自己的私钥，签名时使用
        'private_key' => 'MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCMmF6WqL85U6IkenFJO49ImVypYLWvAfNMmWUX4oIyIp53z1ojobPc1QmdOidwLccy/Lz7Nh7JsYEkYOHUaphWQGTajgRT5IT1g/ehk02Dw+ZSF8xlhekxtgeFSoMIbMzsWsYejSKzCX3KZHGgHhWRw2Y82JoGkbo7O7/IPBmkNhBGt8LDDdZ7gNGFjON30a/qE0DmgflYVsYLpE9cocJ3QDuy7yVRuizm7MPpQip4HVrE9dQbZrept6ai0l/joyk2a9gSgHky+/UcYG0TVkk1ILbJjtvZWlZgCToAC6xKnNxOvBHegqmBtMPFJORREbjkuZMOm74Zwy9yBd+JV2JtAgMBAAECggEAG5wYhzGgS9u2rb813BHMM4+aeNC7HSEe7F37UlNzCfFueUzJANJShf14I941vHvg8IxdeF/KcAVhvQkhkBtWyyleJOVayDbKPYSq7poE0Ol5o4l05EMF5nM+ytg1H0RugcPZwEorFEm64DIVdkIyLivXOf+3T67yiYtUQDg9ONfyeqRBbzO1oa2670QhR/W4IfQmUvptcmV+mVuo8eyeNzBXTYWxUdP7u+NJRna921yvDabwPZPxao+jgKgC90D0Zg8TNPWuNW68spMck6SOg7ugv7xbyJV1VMHSJddoTt0mLDU2wmvzVa51jibE6SNxRekaaSMPQ2OSTu5yL7ryqQKBgQDJE7Tif0IcRSg43942kesawVNGl6VDfILOSezrHf9dugdEeHdvYfdZhDIau3Fyn0OH6Z7NQ7xbzwyl8vSZO1v/ikYVikyL3M68j+1e3SUR5D40AFqRxoHppmKhWG9M2OJMvYCy8pI35gynCjWwfKV0zvzJCZ5OITYr97Qqmpn9wwKBgQCy/3p15bo036w/HexoJvcCzlvM0HVY3umMw8eoFP2m0lX/RGS3vH7OdIgI0if+lAQ5NdhckDZpumxYFUgK2+rLfLy/tPDAR+A9QbO4ByWYspZv8RWB3qBLGtD8g+9Q9UKiy4aAJbBwTXLRpgrKVB4V1K+JAp0TjCCIa7Q5wzwsDwKBgQC/OaSOuqOuqv5jiFOV5hOGsFB4FAOxOJpVgOx1dWPESQRcU4ySOsK3OQdFcPmlHl1kxgKmB0L8tN28fF+t0kvdrCyWk53UbTuXC/GchAebCks1vRhlBjnKcNffxXCjzqb4gEgC5rmzu25Q9V615vSbL7YroqAQgXk5Oyr2UW0dbQKBgARb7GOKoKpA+DThSayPplxPIjUurmznoNBoxCf3uuWhIa8Bv2IqGPx2Ign09Dxi5mduREKc0HZqr9DFU+fPyzwBYadZhLNqDK/xNas5oVTCpJ89Q8TR4x1xHb3IiL9z+Zd1VWUxhcZ2XGF2pbSfr8vgThYMFj8vnms0FEOD2adJAoGATTzJHwP2OkevqHHrihOUjw3qUXOTD40Fqp+aYuz5sLi1f7jA5Evswb4bcKODDTqMjXo7evbgclWnmURnuUqPPAxSp3rZj2wN5eoVgl9PO2HidD5R09+hH7riTTSuZkQI/TiDjyVD5M1eBidL88aMCH5n3h2jqMG8H3XxH5laGpg=',
    ],

    'wechat' => [
        // 公众号APPID
        'app_id' => '',

        // 小程序APPID
        'miniapp_id' => '',

        // APP 引用的 appid
        'appid' => '',

        // 微信支付分配的微信商户号
        'mch_id' => '',

        // 微信支付异步通知地址
        'notify_url' => '',

        // 微信支付签名秘钥
        'key' => '',

        // 客户端证书路径，退款时需要用到。请填写绝对路径，linux 请确保权限问题。pem 格式。
        'cert_client' => '',

        // 客户端秘钥路径，退款时需要用到。请填写绝对路径，linux 请确保权限问题。pem 格式。
        'cert_key' => '',
    ],
];
