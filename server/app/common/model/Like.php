<?php

namespace app\common\model;

use app\common\enum\YesNoEnum;

/**
 * 点赞模型
 * @author 段延庆
 * @date 2023-06-05
 */
class Like extends BaseModel
{
    protected $name = 'like';
    const VIDEO_TYPE = 10;
    public static $Types = [
        self::VIDEO_TYPE => "视频"
    ];

    /**
     * 是否点赞
     * @param int $userId 用户id
     * @param int $serviceId 业务id
     * @param int $type 点赞类型
     * @author 段延庆
     * @return boolean
     * @date 2023-06-05
     */
    public static function isLike(int $userId, int $serviceId, int $type = self::VIDEO_TYPE): bool
    {
        $like = self::where([
            "user_id" => $userId,
            "service_id" => $serviceId,
            "type" => $type,
            "status" => YesNoEnum::YES
        ])->findOrEmpty();
        return !$like->isEmpty();
    }

    /**
     * 根据业务统计点赞数
     * @author 段延庆
     * @return int 
     * @date 2023-06-05
    */
    public static function countForService(int $serviceId, int $type = self::VIDEO_TYPE): int
    {
        return self::where(["service_id" => $serviceId, "type" => $type, "status" => YesNoEnum::YES])->count();
    }
}
