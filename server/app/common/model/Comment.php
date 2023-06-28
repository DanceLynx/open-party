<?php

namespace app\common\model;

use app\common\model\user\User;
use think\model\relation\HasMany;
use think\model\relation\HasOne;

/**
 * 评论模型
 * @author 段延庆
 * @date 2023-06-05
 */
class Comment extends BaseModel
{
    protected $name = "comment";
    const TYPE_VIDEO = 10;

    public static $Types = [
        self::TYPE_VIDEO => "视频"
    ];
    /**
     * 一对一关联用户
     * @author 段延庆
     * @date 2023-06-05
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class, "id", "user_id");
    }
    /**
     * 一对多关联回复表
     * @author 段延庆
     * @date 2023-06-05
     */
    public function replies(): HasMany
    {
        return $this->hasMany(Reply::class, "comment_id");
    }
}
