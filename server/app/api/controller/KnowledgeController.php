<?php

namespace app\api\controller;

use app\api\lists\KnowledgeCateLists;
use app\api\lists\KnowledgeLists;
use app\api\logic\KnowledgeLogic;
use think\response\Json;

/**
 * 党史知识控制器
 * @author 段延庆
 * @date 2023-06-04
 */
class KnowledgeController extends BaseApiController
{
    public array $notNeedLogin = ["lists", "detail", "cates"];
    /**
     * 获取党史知识列表
     * @return think\Response\Json
     * @author 段延庆
     * @date 2023-06-04
     */
    public function lists(): Json
    {
        return $this->dataLists(new KnowledgeLists());
    }

    /**
     * 党政知识详情
     * @return think\response\Json
     * @author 段延庆
     * @date 2023-06-04
     */
    public function detail(): Json
    {
        $id = $this->request->get("id/d");
        $result = KnowledgeLogic::detail($id);
        return $this->data($result);
    }

    /**
     * 获取党史知识类目列表
     * @return think\response\Json
     * @author 段延庆
     * @date 2023-06-04
     */
    public function cates(): Json
    {
        return $this->dataLists(new KnowledgeCateLists());
    }
}
