<?php


namespace app\adminapi\controller\notice;

use app\adminapi\controller\BaseAdminController;
use app\adminapi\logic\notice\SmsConfigLogic;
use app\adminapi\validate\notice\SmsConfigValidate;

/**
 * 短信配置控制器
 * Class SmsConfigController
 * @package app\adminapi\controller\notice
 */
class SmsConfigController extends BaseAdminController
{

    /**
     * @notes 获取短信配置
     * @return \think\response\Json
     * @author 段誉
     * @date 2022/3/29 11:36
     */
    public function getConfig()
    {
        $result = SmsConfigLogic::getConfig();
        return $this->data($result);
    }


    /**
     * @notes 短信配置
     * @return \think\response\Json
     * @author 段誉
     * @date 2022/3/29 11:36
     */
    public function setConfig()
    {
        $params = (new SmsConfigValidate())->post()->goCheck('setConfig');
        SmsConfigLogic::setConfig($params);
        return $this->success('操作成功', [], 1, 1);
    }


    /**
     * @notes 查看短信配置详情
     * @return \think\response\Json
     * @author 段誉
     * @date 2022/3/29 11:36
     */
    public function detail()
    {
        $params = (new SmsConfigValidate())->goCheck('detail');
        $result = SmsConfigLogic::detail($params);
        return $this->data($result);
    }
}
