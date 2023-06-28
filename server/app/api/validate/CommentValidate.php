<?php

namespace app\api\validate;

use app\common\model\Comment;
use app\common\validate\BaseValidate;

/**
 * @author 段延庆
 * @date 2023-06-06
 */
class CommentValidate extends BaseValidate
{

    protected $rule = [
        "type" => "require|in:" . Comment::TYPE_VIDEO,
        "content" => "require|min:2|max:191",
        "service_id" => "require"
    ];

    protected $field = [
        "type" => "评论类型",
        "service_id" => "业务id",
        "content" => "评论内容"
    ];

    /**
     * 添加场景
     * @author 段延庆
     * @date 2023-06-06
     */
    public function sceneAdd()
    {
        return $this->only(["type", "content"]);
    }
}
