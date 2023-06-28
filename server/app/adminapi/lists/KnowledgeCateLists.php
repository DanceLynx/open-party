<?php


namespace app\adminapi\lists;


use app\adminapi\lists\BaseAdminDataLists;
use app\common\model\KnowledgeCate;
use app\common\lists\ListsSearchInterface;


/**
 * KnowledgeCate列表
 * Class KnowledgeCateLists
 * @package app\adminapi\lists
 */
class KnowledgeCateLists extends BaseAdminDataLists implements ListsSearchInterface
{


    /**
     * @notes 设置搜索条件
     * @return \string[][]
     * @author 段延庆
     * @date 2023/06/03 16:12
     */
    public function setSearch(): array
    {
        return [
            '=' => ['title', 'sort'],
        ];
    }


    /**
     * @notes 获取列表
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     * @author 段延庆
     * @date 2023/06/03 16:12
     */
    public function lists(): array
    {
        return KnowledgeCate::where($this->searchWhere)
            ->field(['id', 'title', 'image', 'sort'])
            ->limit($this->limitOffset, $this->limitLength)
            ->order(['id' => 'desc'])
            ->select()
            ->toArray();
    }


    /**
     * @notes 获取数量
     * @return int
     * @author 段延庆
     * @date 2023/06/03 16:12
     */
    public function count(): int
    {
        return KnowledgeCate::where($this->searchWhere)->count();
    }
}
