<?php

namespace app\api\logic;

use app\common\logic\BaseLogic;
use app\common\model\question\UserAsk;

/**
 * 用户问卷调查答卷逻辑层
 * @author 段延庆
 * @date 2023-06-10
 */
class UserAskLogic extends BaseLogic
{

    /**
     * 添加答卷
     * @author 段延庆
     * @param int $userId 用户id
     * @param array $params 表单参数
     * @return void
     * @date 2023-06-10
     */
    public static function addUserAsk(int $userId, array $params): void
    {
        $result = UserAsk::where(["user_id" => $userId, "questionnaire_id" => $params["questionnaire_id"]])
            ->findOrEmpty();
        if ($result->isEmpty()) {
            UserAsk::create([
                "user_id" => $userId,
                "questionnaire_id" => $params["questionnaire_id"],
                "answer_json" => $params["answer_json"]
            ]);
        }
    }
}
