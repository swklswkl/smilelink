<?php
return [
	'yun'=>[//阿里云短信
		'access_key_id'        => 'LTAIo9cnIaKi0S2f',//
		'access_key_secret'    => '5NOK1tVRxQSiSWrxnWgOzUp6HKETlr',//
		'common_sign_name'     => '支付宝',//普通模板签名
		'spread_sign_name'     => '支付宝',//推广模板签名
		'template_code'        => [
			'register' => 'SMS_117600150',//模板code让一个变量来替换
		]
	],
	'api'=>[//云市场短信
		'api_app_key'           => '',//
		'api_app_secret'        => '',//
		'api_sign_name'         => '',//普通模板签名
		'api_template_code'     => [
			'register' => 'SMS_35650882',//模板code让一个变量来替换
		]
	],
	'note'=>[//短信发送API
		'access_key_id'        => 'LTAIo9cnIaKi0S2f',//
		'access_key_secret'    => '5NOK1tVRxQSiSWrxnWgOzUp6HKETlr',//
		'common_sign_name'     => '苏州博思美',//普通模板签名
		'template_code'        => [
			'register' => 'SMS_117600150',//模板code让一个变量来替换
            'forgetPassword' => 'SMS_117600148',//模板code让一个变量来替换
		],
		'enable_http_proxy'     => false,//是否开始代理
		'http_proxy_ip'         => '127.0.0.1',
		'http_proxy_port'       => '8888'
	]
];