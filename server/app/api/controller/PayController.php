<?php


namespace app\api\controller;


use app\api\validate\PayValidate;
use app\common\enum\user\UserTerminalEnum;
use app\common\logic\PaymentLogic;
use app\common\service\pay\WeChatPayService;

/**
 * 支付
 * Class PayController
 * @package app\api\controller
 */
class PayController extends BaseApiController
{

    public array $notNeedLogin = ['notifyMnp', 'notifyOa'];

    /**
     * @notes 支付方式
     * @return \think\response\Json
     * @author 段誉
     * @date 2023/2/24 17:54
     */
    public function payWay()
    {
        $params = (new PayValidate())->goCheck('payway');
        $result = PaymentLogic::getPayWay($this->userId, $this->userInfo['terminal'], $params);
        if ($result === false) {
            return $this->fail(PaymentLogic::getError());
        }
        return $this->data($result);
    }


    /**
     * @notes 预支付
     * @return \think\response\Json
     * @author 段誉
     * @date 2023/2/28 14:21
     */
    public function prepay()
    {
        $params = (new PayValidate())->post()->goCheck();
        //订单信息
        $order = PaymentLogic::getPayOrderInfo($params);
        if (false === $order) {
            return $this->fail(PaymentLogic::getError(), $params);
        }
        //支付流程
        $redirectUrl = $params['redirect'] ?? '/pages/payment/payment';
        $result = PaymentLogic::pay($params['pay_way'], $params['from'], $order, $this->userInfo['terminal'], $redirectUrl);
        if (false === $result) {
            return $this->fail(PaymentLogic::getError(), $params);
        }
        return $this->success('', $result);
    }


    /**
     * @notes 获取支付状态
     * @return \think\response\Json
     * @author 段誉
     * @date 2023/3/1 16:23
     */
    public function payStatus()
    {
        $params = (new PayValidate())->goCheck('status', ['user_id' => $this->userId]);
        $result = PaymentLogic::getPayStatus($params);
        if ($result === false) {
            return $this->fail(PaymentLogic::getError());
        }
        return $this->data($result);
    }


    /**
     * @notes 小程序支付回调
     * @return \Psr\Http\Message\ResponseInterface
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidArgumentException
     * @throws \EasyWeChat\Kernel\Exceptions\RuntimeException
     * @throws \ReflectionException
     * @throws \Throwable
     * @author 段誉
     * @date 2023/2/28 14:21
     */
    public function notifyMnp()
    {
        return (new WeChatPayService(UserTerminalEnum::WECHAT_MMP))->notify();
    }


    /**
     * @notes 公众号支付回调
     * @return \Psr\Http\Message\ResponseInterface
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidArgumentException
     * @throws \EasyWeChat\Kernel\Exceptions\RuntimeException
     * @throws \ReflectionException
     * @throws \Throwable
     * @author 段誉
     * @date 2023/2/28 14:21
     */
    public function notifyOa()
    {
        return (new WeChatPayService(UserTerminalEnum::WECHAT_OA))->notify();
    }
}
