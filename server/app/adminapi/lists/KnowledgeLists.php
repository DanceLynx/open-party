<?php


namespace app\adminapi\lists;


use app\adminapi\lists\BaseAdminDataLists;
use app\common\model\Knowledge;
use app\common\lists\ListsSearchInterface;


/**
 * Knowledge列表
 * Class KnowledgeLists
 * @package app\adminapi\lists
 */
class KnowledgeLists extends BaseAdminDataLists implements ListsSearchInterface
{


    /**
     * @notes 设置搜索条件
     * @return \string[][]
     * @author 段延庆
     * @date 2023/06/03 16:29
     */
    public function setSearch(): array
    {
        return [
            '=' => ['cid', 'title', 'desc', 'abstract', 'image', 'author', 'content', 'click', 'is_show', 'sort'],
        ];
    }


    /**
     * @notes 获取列表
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     * @author 段延庆
     * @date 2023/06/03 16:29
     */
    public function lists(): array
    {
        return Knowledge::where($this->searchWhere)
            ->field(['id', 'cid', 'title', 'desc', 'abstract', 'image', 'author', 'content', 'click', 'is_show', 'sort'])
            ->append(["cate_name"])
            ->limit($this->limitOffset, $this->limitLength)
            ->order(['id' => 'desc'])
            ->select()
            ->toArray();
    }


    /**
     * @notes 获取数量
     * @return int
     * @author 段延庆
     * @date 2023/06/03 16:29
     */
    public function count(): int
    {
        return Knowledge::where($this->searchWhere)->count();
    }
}
