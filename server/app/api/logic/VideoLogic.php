<?php

namespace app\api\logic;

use app\common\logic\BaseLogic;
use app\common\model\Like;
use app\common\model\Video;

/**
 * 网上课程逻辑层
 * @author 段延庆
 * @date 2023-06-05
 */
class VideoLogic extends BaseLogic
{
    /**
     * 课程详情
     * @author 段延庆
     * @return array
     * @date 2023-06-05
     */
    public static function detail(int $id, int $userId): array
    {
        $video = Video::getVideoDetailArr($id);
        $video["isLike"] = Like::isLike($userId, $id,);
        $video["like_count"] = Like::countForService($id);
        $video["comments"] = CommentLogic::getCommentsByServiceId($id);
        return $video;
    }
}
