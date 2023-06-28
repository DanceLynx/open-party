<?php

namespace app\api\controller;

use app\api\logic\UserAnswerLogic;
use app\api\validate\UserAnswerValidate;
use think\response\Json;

/**
 * 用户答案控制器
 * @author 段延庆
 * @date 2023-06-14
 */
class UserAnswerController extends BaseApiController
{
    /**
     * 返回用户答题记录
     * @author 段延庆
     * @return think\response\Json
     * @date 2023-06-24
     */
    public function lists(): Json
    {
        return $this->dataLists(UserAnswerLogic::lists($this->userId));
    }
    public function add()
    {
        // 接收参数
        $params = (new UserAnswerValidate)->post()->goCheck("add");
        $result = UserAnswerLogic::analysisUserAnswer($this->userId, $params);
        return $this->data($result);
    }
}
