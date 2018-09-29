<?php

return [

    // The default gateway to use
    'default'  => 'wechat',

    // Add in each gateway here
    'gateways' => [
        'wechat' => [
            'driver'  => 'WechatPay_Js',
            'options' => [
                'appId'     => 'XXXXXXXXXXXX',
                'mchId'     => 'XXXXXXXXXX',
                'apiKey'    => 'XXXXXXXXXXXXXXXX',
                'notifyUrl' => 'http://xxx.com/api/payment/wechat/notify',
            ],
        ]
    ]

];
