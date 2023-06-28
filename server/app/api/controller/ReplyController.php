<?php

namespace app\api\controller;

use app\api\logic\ReplyLogic;
use app\api\validate\ReplyValidate;
use app\common\model\Reply;
use think\response\Json;

/**
 * 回复评论控制器
 * @author 段延庆
 * @date 2023-06-06
 */
class ReplyController extends BaseApiController
{
    public array $notNeedLogin = [];

    /**
     * 添加回复
     * @return think\response\Json
     * @author 段延庆
     * @date 2023-06-06
     */
    public function add(): Json
    {
        $params = (new ReplyValidate())->post()->goCheck("add");
        ReplyLogic::addReply($this->userId, $params["comment_id"], $params["content"]);
        return $this->success("回复成功", [], 1, 1);
    }

    /**
     * 删除回复
     * @author 段延庆
     * @return think\response\Json
     * @date 2023-06-06
     */
    public function del(): Json
    {
        $replyId = $this->request->get("id/d", 0);
        ReplyLogic::delReply($this->userId, $replyId);
        return $this->success("删除成功", [], 1, 1);
    }
}
