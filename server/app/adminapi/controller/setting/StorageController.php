<?php


namespace app\adminapi\controller\setting;


use app\adminapi\controller\BaseAdminController;
use app\adminapi\logic\setting\StorageLogic;
use app\adminapi\validate\setting\StorageValidate;
use think\response\Json;


/**
 * 存储设置控制器
 * Class StorageController
 * @package app\adminapi\controller\setting\shop
 */
class StorageController extends BaseAdminController
{

    /**
     * @notes 获取存储引擎列表
     * @return Json
     * @author 段誉
     * @date 2022/4/20 16:13
     */
    public function lists()
    {
        return $this->success('获取成功', StorageLogic::lists());
    }


    /**
     * @notes 存储配置信息
     * @return Json
     * @author 段誉
     * @date 2022/4/20 16:19
     */
    public function detail()
    {
        $param = (new StorageValidate())->get()->goCheck('detail');
        return $this->success('获取成功', StorageLogic::detail($param));
    }


    /**
     * @notes 设置存储参数
     * @return Json
     * @author 段誉
     * @date 2022/4/20 16:19
     */
    public function setup()
    {
        $params = (new StorageValidate())->post()->goCheck('setup');
        $result = StorageLogic::setup($params);
        if (true === $result) {
            return $this->success('配置成功', [], 1, 1);
        }
        return $this->success($result, [], 1, 1);
    }


    /**
     * @notes 切换存储引擎
     * @return Json
     * @author 段誉
     * @date 2022/4/20 16:19
     */
    public function change()
    {
        $params = (new StorageValidate())->post()->goCheck('change');
        StorageLogic::change($params);
        return $this->success('切换成功', [], 1, 1);
    }
}
