<?php

namespace app\api\logic;

use app\common\enum\YesNoEnum;
use app\common\logic\BaseLogic;
use app\common\model\Knowledge;

/**
 * 党史知识逻辑层
 * @author 段延庆
 * @date 2023-06-04
 */
class KnowledgeLogic extends BaseLogic
{
    /**
     * 根据条数获取数据
     * @return array
     * @author 段延庆
     * @date 2023-06-04
     */
    public static function getLastLimitedList(int $limit = 4): array
    {
        return Knowledge::where("is_show", YesNoEnum::YES)->order("create_time", "DESC")->limit($limit)->select()->toArray();
    }

    public static function detail(int $id = 0): array
    {
        return Knowledge::getKnowledgeDetailArr($id);
    }
}
