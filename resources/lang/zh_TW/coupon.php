<?php

return [
    'labels' => [
        'Coupon' => '折扣碼',
        'coupon' => '折扣碼',
    ],
    'fields' => [
        'type' => '折扣類型',
        'discount' => '折扣金額/系数',
        'is_open' => '是否啟用',
        'coupon' => '折扣碼',
        'ret' => '剩余使用次數',
        'type_one_time' => '一次性使用',
        'type_repeat' => '重復使用',
        'type_percent' => '係數折扣 (0-1)',
        'type_fixed' => '固定金額',
        'goods_id' => '可用商品'
    ],
    'options' => [
    ],
    'helps' =>[
        'discount' => '系数折扣：价格在下单时会乘以这个数字，0.9就是九折。固定金额：下单时价格会直接减去它。'
    ]
];
