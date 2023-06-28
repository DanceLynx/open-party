<?php


namespace app\adminapi\controller\setting\pay;


use app\adminapi\controller\BaseAdminController;
use app\adminapi\lists\setting\pay\PayConfigLists;
use app\adminapi\logic\setting\pay\PayConfigLogic;
use app\adminapi\validate\setting\PayConfigValidate;

/**
 * 支付配置
 * Class PayConfigController
 * @package app\adminapi\controller\setting\pay
 */
class PayConfigController extends BaseAdminController
{


    /**
     * @notes 设置支付配置
     * @return \think\response\Json
     * @author 段誉
     * @date 2023/2/23 16:14
     */
    public function setConfig()
    {
        $params = (new PayConfigValidate())->post()->goCheck();
        PayConfigLogic::setConfig($params);
        return $this->success('设置成功', [], 1, 1);
    }


    /**
     * @notes 获取支付配置
     * @return \think\response\Json
     * @author 段誉
     * @date 2023/2/23 16:14
     */
    public function getConfig()
    {
        $id = (new PayConfigValidate())->goCheck('get');
        $result = PayConfigLogic::getConfig($id);
        return $this->success('获取成功', $result);
    }


    /**
     * @notes
     * @return \think\response\Json
     * @author 段誉
     * @date 2023/2/23 16:15
     */
    public function lists()
    {
        return $this->dataLists(new PayConfigLists());
    }
}
