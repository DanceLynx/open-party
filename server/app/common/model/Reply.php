<?php

namespace app\common\model;

use app\common\model\user\User;
use think\model\relation\HasOne;

class Reply extends BaseModel
{
    protected $name = "reply";
    /**
     * 一对一关联用户
     * @author 段延庆
     * @date 2023-06-05
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class, "id", "user_id");
    }
}
