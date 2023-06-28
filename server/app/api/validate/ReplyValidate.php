<?php

namespace app\api\validate;

use app\common\validate\BaseValidate;

/**
 * 回复评论验证器
 * @author 段延庆
 * @date 2023-06-06
 */
class ReplyValidate extends BaseValidate
{
    protected $rule = [
        "comment_id" => "require",
        "content" => "require|min:3|max:191"
    ];

    protected $field = [
        "comment_id" => "评论id",
        "content" => "回复内容"
    ];

    /**
     * 添加场景
     * @author 段延庆
     * @date 2023-06-06
     */
    public function sceneAdd()
    {
        return $this->only(["comment_id", 'content']);
    }
}
