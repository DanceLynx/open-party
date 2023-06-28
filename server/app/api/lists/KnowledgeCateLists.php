<?php

namespace app\api\lists;

use app\common\model\KnowledgeCate;

class KnowledgeCateLists extends BaseApiDataLists
{

    /**
     * @notes 自定查询条件
     * @return array
     * @author 段延庆
     * @date 2023-06-04
     */
    public function queryWhere()
    {
        $where = [];
        if (!empty($this->params['keyword'])) {
            $where[] = ['title', 'like', '%' . $this->params['keyword'] . '%'];
        }
        return $where;
    }


    /**
     * @notes 获取党史知识类目列表
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     * @author 段延庆
     * @date 2023-06-04
     */
    public function lists(): array
    {
        $orderRaw = 'sort desc, id desc';
        $sortType = $this->params['sort'] ?? 'default';
        // 最新排序
        if ($sortType == 'new') {
            $orderRaw = 'id desc';
        }

        $field = 'id,title,image,create_time';
        $result = KnowledgeCate::field($field)
            ->where($this->queryWhere())
            ->where($this->searchWhere)
            ->orderRaw($orderRaw)
            ->limit($this->limitOffset, $this->limitLength)
            ->select()->toArray();

        return $result;
    }


    /**
     * @notes 获取党史知识类目数量
     * @return int
     * @author 段延庆
     * @date 2023-06-04
     */
    public function count(): int
    {
        return KnowledgeCate::where($this->queryWhere())
            ->count();
    }
}
