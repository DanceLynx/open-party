<?php


namespace app\adminapi\controller;

use app\adminapi\logic\auth\AuthLogic;
use app\adminapi\logic\ConfigLogic;

/**
 * 配置控制器
 * Class ConfigController
 * @package app\adminapi\controller
 */
class ConfigController extends BaseAdminController
{
    public array $notNeedLogin = ['getConfig', 'dict'];


    /**
     * @notes 基础配置
     * @return \think\response\Json
     * @author 段誉
     * @date 2021/12/31 11:01
     */
    public function getConfig()
    {
        $data = ConfigLogic::getConfig();
        return $this->data($data);
    }


    /**
     * @notes 根据类型获取字典数据
     * @return \think\response\Json
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     * @author 段誉
     * @date 2022/9/27 19:10
     */
    public function dict()
    {
        $type = $this->request->get('type', '');
        $data = ConfigLogic::getDictByType($type);
        return $this->data($data);
    }
}
