<?php


namespace app\adminapi\logic\setting\pay;


use app\common\enum\PayEnum;
use app\common\logic\BaseLogic;
use app\common\model\pay\PayConfig;

/**
 * 支付配置
 * Class PayConfigLogic
 * @package app\adminapi\logic\setting\pay
 */
class PayConfigLogic extends BaseLogic
{

    /**
     * @notes 设置配置
     * @param $params
     * @return bool
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     * @author 段誉
     * @date 2023/2/23 16:16
     */
    public static function setConfig($params)
    {
        $payConfig = PayConfig::find($params['id']);

        $config = '';
        if ($payConfig['pay_way'] == PayEnum::WECHAT_PAY) {
            $config = [
                'interface_version' => $params['config']['interface_version'],
                'merchant_type' => $params['config']['merchant_type'],
                'mch_id' => $params['config']['mch_id'],
                'pay_sign_key' => $params['config']['pay_sign_key'],
                'apiclient_cert' => $params['config']['apiclient_cert'],
                'apiclient_key' => $params['config']['apiclient_key'],
            ];
        }
        if ($payConfig['pay_way'] == PayEnum::ALI_PAY) {
            $config = [
                'mode' => $params['config']['mode'],
                'merchant_type' => $params['config']['merchant_type'],
                'app_id' => $params['config']['app_id'],
                'private_key' => $params['config']['private_key'],
                'ali_public_key' => $params['config']['ali_public_key'],
            ];
        }

        $payConfig->name = $params['name'];
        $payConfig->icon = $params['icon'];
        $payConfig->sort = $params['sort'];
        $payConfig->config = $config;
        $payConfig->remark = $params['remark'] ?? '';
        return $payConfig->save();
    }


    /**
     * @notes 获取配置
     * @param $params
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     * @author 段誉
     * @date 2023/2/23 16:16
     */
    public static function getConfig($params)
    {
        $payConfig = PayConfig::find($params['id'])->toArray();
        $payConfig['domain'] = request()->domain();
        return $payConfig;
    }
}
