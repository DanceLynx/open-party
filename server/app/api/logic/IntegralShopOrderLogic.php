<?php

namespace app\api\logic;

use app\api\lists\IntegralShopOrderLists;
use app\common\logic\BaseLogic;
use app\common\model\integral\IntegralShopOrder;
use think\facade\Db;

/**
 * 积分商城订单逻辑层
 * @author 段延庆
 * @date 2023-06-25
 */
class IntegralShopOrderLogic extends BaseLogic
{
    /**
     * 获取用户积分商品订单分页
     * @author 段延庆
     * @date 2023-06-25
     */
    public static function userLists(int $userId)
    {
        $lists = new IntegralShopOrderLists();
        $lists->userId = $userId;
        return $lists;
    }
    /**
     * 添加订单
     * @author 段延庆
     * @date 2023-06-25
     */
    public static function addOrder(array $params): array
    {
        Db::startTrans();
        try {
            // 添加订单
            $order = IntegralShopOrder::create([
                'sn' => self::generateOrderSn(),
                "user_id" => $params['user_id'],
                "shop_id" => $params['shop_id'],
                "integral" => $params['integral'],
                "status" => IntegralShopOrder::STATUS_WAIT,
            ]);
            Db::commit();
            return $order->toArray();
        } catch (\Exception $e) {
            Db::rollback();
            self::$error = $e->getMessage();
            return [];
        }
    }

    /**
     * 生成订单号
     * @author 段延庆
     * @date 2023-06-25
     */
    protected static function generateOrderSn()
    {
        // 生成10位数字加字母的订单号
        $orderSn = date('YmdHis') . mt_rand(1000, 9999);
        return $orderSn;
    }
}
