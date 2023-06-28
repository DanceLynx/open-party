<?php

namespace app\api\controller;

use app\api\logic\LikeLogic;
use think\response\Json;

/**
 * 业务点赞控制器
 * @author 段延庆
 * @date 2023-06-05
 */
class LikeController extends BaseApiController
{
    /**
     * 业务点赞
     * @author 段延庆
     * @return think\response\Json
     * @date 2023-06-05
     */
    public function like(): Json
    {
        $formData = $this->request->post();
        LikeLogic::like($this->userId, $formData["service_id"], $formData["type"]);
        return $this->success();
    }

    /**
     * 取消点赞
     * @author 段延庆
     * @return think\response\Json
     * @date 2023-06-05
     */
    public function dislike(): Json
    {
        $formData = $this->request->post();
        LikeLogic::dislike($this->userId, $formData["service_id"], $formData["type"]);
        return $this->success();
    }
}
