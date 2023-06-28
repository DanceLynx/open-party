<?php

namespace app\api\logic;

use app\common\logic\BaseLogic;
use app\common\model\Reply;

/**
 * 评论回复逻辑层
 * @author 段延庆
 * @date 2023-06-06
 */
class ReplyLogic extends BaseLogic
{
    /**
     * 添加恢复
     * @return void
     * @param int $userId 用户id
     * @param int $commentId 评论id
     * @param string $content 回复内容
     * @author 段延庆
     * @date 2023-06-06
     */
    public static function addReply(int $userId, int $commentId, string $content): void
    {
        Reply::create([
            "user_id" => $userId,
            "comment_id" => $commentId,
            "content" => $content
        ]);
    }

    /**
     * 删除回复
     * @author 段延庆
     * @param int $userId 用户id
     * @param int $replyId 回复id
     * @return void
     * @date 2023-06-06
     */
    public static function delReply(int $userId, int $replyId): void
    {
        Reply::where(["user_id" => $userId, "id" => $replyId])->delete();
    }
}
