<?php

namespace app\common\model;

/**
 * 用户积分记录
 * @author 段延庆
 * @date 2023-06-24
 */
class IntegralLog extends BaseModel
{
    protected $name = 'integral_log';
    const TYPE_LOGIN = 10;
    const TYPE_ANSWER = 20;
    const TYPE_EXCHANGE = 30;

    const STATUS_INCREMENT = 1;
    const STATUS_DECREMENT = 0;

    public static $Types = [
        self::TYPE_LOGIN => '每日登录',
        self::TYPE_ANSWER => '党史答题',
        self::TYPE_EXCHANGE => '商品兑换',
    ];

    public function getTypeTextAttr($value, $data): string
    {
        return self::$Types[$data['type']];
    }
}
