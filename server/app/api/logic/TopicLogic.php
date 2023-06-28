<?php

namespace app\api\logic;

use app\common\logic\BaseLogic;
use app\common\model\answer\Topic;

/**
 * 题目逻辑层
 * @author 段延庆
 * @date 2023-06-13
 */
class TopicLogic extends BaseLogic
{
    /**
     * 根据条数随机返回题目
     * @author 段延庆
     * @param int $limit 条数
     * @return array
     * @date 2023-06-13
     */
    public static function getRandLimitList(int $limit = 5): array
    {
        $topics = Topic::orderRaw("RAND()")->limit($limit)->select();
        if ($topics->isEmpty()) {
            return [];
        }
        return $topics->toArray();
    }
}
