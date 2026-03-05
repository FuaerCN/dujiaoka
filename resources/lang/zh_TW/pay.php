<?php

return [
    'labels' => [
        'Pay' => '支付通道',
        'pay' => '支付通道',
    ],
    'fields' => [
        'merchant_id' => '商戶 ID',
        'merchant_key' => '商戶 KEY',
        'merchant_pem' => '商戶金鑰',
        'pay_check' => '支付標識',
        'pay_client' => '支付場景',
        'pay_fee' => '通道費率',
        'pay_handleroute' => '支付處理路由',
        'pay_method' => '支付方式',
        'pay_name' => '支付名稱',
        'is_open' => '是否啟用',
        'method_jump' => '跳躍',
        'method_scan' => '掃碼',
        'pay_client_pc' => '計算機PC',
        'pay_client_mobile' => '行動電話',
        'pay_client_all' => '通用',
    ],
    'options' => [
    ],
    'helps' =>[
        'pay_fee' => '單位百分比。如填寫0.38，代表0.38%的通道手續費，下單時價格會自動加上這筆手續費。'
    ]
];
