<?php

namespace app\adminapi\controller\decorate;

use app\adminapi\controller\BaseAdminController;
use app\adminapi\logic\decorate\DecorateDataLogic;


/**
 * 装修-数据
 * Class DataController
 * @package app\adminapi\controller\decorate
 */
class DataController extends BaseAdminController
{


    /**
     * @notes 文章列表
     * @return \think\response\Json
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     * @author 段誉
     * @date 2022/9/22 16:50
     */
    public function article()
    {
        $limit = $this->request->get('limit/d', 10);
        $result = DecorateDataLogic::getArticleLists($limit);
        return $this->success('获取成功', $result);
    }
}
