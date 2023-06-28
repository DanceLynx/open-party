<?php

namespace app\api\logic;

use app\common\logic\BaseLogic;
use app\common\model\KnowledgeCate;

/**
 * 党史知识类目逻辑层
 * @author 段延庆
 * @date 2023-06-04
 */
class KnowledgeCateLogic extends BaseLogic
{
    /**
     * 限制条数获取类目数据
     * @author 段延庆
     * @return array
     * @date 2023-06-04
     */
    public static function getLastLimitedList(int $limit = 4): array
    {
        return KnowledgeCate::order(["sort" => "desc", "create_time" => "desc"])
            ->limit($limit)
            ->select()
            ->toArray();
    }
}
