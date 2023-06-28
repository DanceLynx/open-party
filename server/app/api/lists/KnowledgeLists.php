<?php

namespace app\api\lists;

use app\common\model\Knowledge;

class KnowledgeLists extends BaseApiDataLists
{

    /**
     * 搜索条件
     * @return array
     * @author 段延庆
     * @date 2023-06-04
     */
    public function setSearch(): array
    {
        return [
            '=' => ['cid']
        ];
    }


    /**
     * @notes 自定查询条件
     * @return array
     * @author 段延庆
     * @date 2023-06-04
     */
    public function queryWhere()
    {
        $where[] = ['is_show', '=', 1];
        if ($this->params["cid"]) {
            $where[] = ["cid", "=", $this->params["cid"]];
        }
        if (!empty($this->params['keyword'])) {
            $where[] = ['title', 'like', '%' . $this->params['keyword'] . '%'];
        }
        return $where;
    }


    /**
     * @notes 获取文章列表
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
        // 最热排序
        if ($sortType == 'hot') {
            $orderRaw = 'click desc, id desc';
        }

        $field = 'id,cid,title,desc,image,click,create_time';
        $result = Knowledge::field($field)
            ->where($this->queryWhere())
            ->where($this->searchWhere)
            ->orderRaw($orderRaw)
            ->limit($this->limitOffset, $this->limitLength)
            ->select()->toArray();

        return $result;
    }


    /**
     * @notes 获取文章数量
     * @return int
     * @author 段延庆
     * @date 2023-06-04
     */
    public function count(): int
    {
        return Knowledge::where($this->searchWhere)
            ->where($this->queryWhere())
            ->count();
    }
}
