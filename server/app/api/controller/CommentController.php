<?php

namespace app\api\controller;

use app\api\logic\CommentLogic;
use app\api\validate\CommentValidate;
use think\response\Json;

/**
 * 评论控制器
 * @author 段延庆
 * @date 2023-06-06
 */
class CommentController extends BaseApiController
{
    public array $notNeedLogin = [];

    /**
     * 添加评论
     * @return think\response\Json
     * @author 段延庆
     * @date 2023-06-06
     */
    public function add(): Json
    {
        $params = (new CommentValidate())->post()->goCheck("add");
        CommentLogic::addComment($this->userId, $params["content"], $params["service_id"]);
        return $this->success("评论成功", [], 1, 1);
    }

    /**
     * 删除评论
     * @author 段延庆
     * @return think\response\Json
     * @date 2023-06-06
     */
    public function del(): Json
    {
        $commentId = $this->request->get("id/d", 0);
        CommentLogic::delComment($this->userId, $commentId);
        return $this->success("删除成功", [], 1, 1);
    }
}
