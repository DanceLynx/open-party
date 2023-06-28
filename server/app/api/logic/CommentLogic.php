<?php

namespace app\api\logic;

use app\common\logic\BaseLogic;
use app\common\model\Comment;

/**
 * 评论逻辑层
 * @author 段延庆
 * @date 2023-06-05
 */
class CommentLogic extends BaseLogic
{
    /**
     * 添加评论
     * @param int $userId 用户id
     * @param string $content 内容
     * @param int $serviceId 业务id
     * @param int $type 类型
     * @author 段延庆
     * @return void
     * @date 2023-06-05
     */
    public static function addComment(int $userId, string $content, int $serviceId, int $type = Comment::TYPE_VIDEO)
    {
        Comment::create([
            "user_id" => $userId,
            "service_id" => $serviceId,
            "content" => $content,
            "type" => $type
        ]);
    }

    /**
     * 根据业务id获取列表数据
     * @param int $serviceId 业务id
     * @return array
     * @author 段延庆
     * @date 2023-06-06
     */
    public static function getCommentsByServiceId(int $serviceId): array
    {
        return Comment::with(["user" => function ($query) {
            $query->withField(["id", "nickname", "avatar"]);
        }, "replies" => function ($query) {
            $query->with(["user" => function ($query) {
                $query->withField(["id", "nickname", "avatar"]);
            }]);
        }])
            ->where("service_id", $serviceId)
            ->select()
            ->toArray();
    }

    /**
     * 删除单条数据
     * @author 段延庆
     * @param int $userId 用户id
     * @param int $id 主键id
     * @return void
     * @date 2023-06-06
     */
    public static function delComment(int $userId, int $id)
    {
        Comment::where(["user_id" => $userId, "id" => $id])->delete();
    }
}
