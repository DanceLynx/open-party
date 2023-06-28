<?php

namespace app\api\logic;

use app\common\logic\BaseLogic;
use app\common\model\fee\PartyFeeOrder;
use think\facade\Db;

/**
 * 党费缴纳订单逻辑层
 * @author 段延庆
 * @date 2023-06-20
 */
class PartyFeeOrderLogic extends BaseLogic
{
    /**
     * 创建党费缴纳订单
     * @author 段延庆
     * @date 2023-06-20
     */
    public static function createOrder(int $userId, array $params)
    {
        Db::startTrans();
        try {
            // 查询当前订单是否创建
            $order = PartyFeeOrder::where(['user_id' => $userId, "month" => $params["month"]])->findOrEmpty();
            if ($order->isEmpty()) {
                $order = PartyFeeOrder::create([
                    'user_id' => $userId,
                    'month' => $params["month"],
                    'order_amount' => $params["amount"],
                    'status' => PartyFeeOrder::STATUS_PAYING,
                    'sn' => self::createOrderNo()
                ]);
            }
            Db::commit();
            return $order->toArray();
        } catch (\Exception $e) {
            Db::rollback();
            self::$error = $e->getMessage();
            return false;
        }
    }
    /**
     * 创建订单
     * @author 段延庆
     * @return array
     * @date 2023-06-20
     */
    protected static function createOrderNo(): string
    {
        // 创建以时间和随机字符串的订单号
        return date('YmdHis') . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
    }
}
