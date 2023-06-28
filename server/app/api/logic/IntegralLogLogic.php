<?php

namespace app\api\logic;

use app\api\lists\IntegralLogLists;
use app\common\logic\BaseLogic;
use app\common\model\IntegralLog;

/**
 * 积分记录逻辑层
 * @author 段延庆
 * @date 2023-06-24
 */
class IntegralLogLogic extends BaseLogic
{
    /**
     * 返回用户积分记录分页列表
     * @param int $userId
     * @author 段延庆
     * @date 2023-06-24
     */
    public static function lists(int $userId)
    {
        $lists = new IntegralLogLists();
        $lists->userId = $userId;
        return $lists;
    }
    /**
     * 添加积分记录
     * @author 段延庆
     * @return void
     * @date 2023-06-24
     */
    public static function add(int $userId, int $type, int $integral): void
    {
        IntegralLog::create([
            "user_id" => $userId,
            "type" => $type,
            "integral" => $integral,
            "status" => IntegralLog::STATUS_INCREMENT
        ]);
    }

    /**
     * 减去积分记录
     * @author 段延庆
     * @return void
     * @date 2023-06-24
     */
    public static function reduce(int $userId, int $type, int $integral): void
    {
        IntegralLog::create([
            "user_id" => $userId,
            "type" => $type,
            "integral" => $integral,
            "status" => IntegralLog::STATUS_DECREMENT
        ]);
    }
}
