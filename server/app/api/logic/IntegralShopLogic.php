<?php

namespace app\api\logic;

use app\common\logic\BaseLogic;
use app\common\model\integral\IntegralShop;
use app\common\model\IntegralLog;
use think\facade\Db;

class IntegralShopLogic extends BaseLogic
{
    /**
     * 获取商品详情
     * @author 段延庆
     * @return array
     * @date 2023-06-25
     */
    public static function detail(int $id): array
    {
        $integralShop = IntegralShop::findOrEmpty($id);
        if ($integralShop->isEmpty()) {
            return [];
        }
        return $integralShop->toArray();
    }

    /**
     * 积分兑换
     * @author 段延庆
     * @return array
     * @date 2023-06-25
     */
    public static function exchange(int $id, int $userId): array
    {
        Db::startTrans();
        try {
            $detail = self::detail($id);
            $integral = intval($detail['integral']);
            $userIntegral = UserLogic::getIntegral($userId);
            if ($userIntegral < $integral) {
                self::$error = '积分不足';
                return [];
            }
            $userIntegral = $userIntegral - $integral;

            // 添加订单
            $order = IntegralShopOrderLogic::addOrder(["user_id" => $userId, "shop_id" => $id, "integral" => $integral]);

            if (empty($order)) {
                self::$error = '订单生成失败';
                return [];
            }
            // 扣除用户积分
            UserLogic::setIntegral($userId, $userIntegral);
            // 记录用户积分
            IntegralLogLogic::reduce($userId, IntegralLog::TYPE_EXCHANGE, $integral);
            Db::commit();
            return $order;
        } catch (\Exception $e) {
            Db::rollback();
            self::$error = $e->getMessage();
            return [];
        }
    }
}
