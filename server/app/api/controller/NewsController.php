<?php

namespace app\api\controller;

use app\api\logic\ArticleLogic;
use app\api\logic\KnowledgeCateLogic;

/**
 * 学习手册控制器
 * @author 段延庆
 * @date 2023-06-03
 */
class NewsController extends BaseApiController
{
    public array $notNeedLogin = ["allData"];
    /**
     * 返回学习手册页面数据
     * @author 段延庆
     * @date 2023-06-04
     */
    public function allData()
    {
        $data = [];
        // 党史知识类目
        $data["knowledge_cate_list"] = KnowledgeCateLogic::getLastLimitedList(4);
        // 党政参阅
        $data["article_list"] = ArticleLogic::getArticleLimitedByCid(3);
        return $this->data($data);
    }
}
