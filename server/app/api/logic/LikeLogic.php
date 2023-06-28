<?php

namespace app\api\logic;

use app\common\enum\YesNoEnum;
use app\common\logic\BaseLogic;
use app\common\model\Like;

/**
 * 点赞逻辑层
 * @author 段延庆
 * @date 2023-06-05
 */
class LikeLogic extends BaseLogic
{
    /**
     * 业务点赞
     * @author 段延庆
     * @return void
     * @date 2023-06-05
     */
    public static function like(int $userId, $serviceId, int $type = Like::VIDEO_TYPE)
    {
        $where = ["user_id" => $userId, "service_id" => $serviceId, "type" => $type];
        $result = Like::where($where)->findOrEmpty();
        if ($result->isEmpty()) {
            Like::create([
                "user_id" => $userId,
                "service_id" => $serviceId,
                "type" => $type,
                "status" => YesNoEnum::YES
            ]);
        } else {
            Like::update(["status" => YesNoEnum::YES], [
                "user_id" => $userId,
                "service_id" => $serviceId,
                "type" => $type,
            ]);
        }
    }

    /**
     * 取消点赞
     * @author 段延庆
     * @return void
     * @date 2023-06-05
     */
    public static function dislike(int $userId, $serviceId, int $type = Like::VIDEO_TYPE)
    {
        Like::update(["status" => YesNoEnum::NO], [
            "user_id" => $userId,
            "service_id" => $serviceId,
            "type" => $type,
        ]);
    }
}
