<?php


namespace app\adminapi\lists;


use app\adminapi\lists\BaseAdminDataLists;
use app\common\model\Member;
use app\common\lists\ListsSearchInterface;


/**
 * Member列表
 * Class MemberLists
 * @package app\adminapi\lists
 */
class MemberLists extends BaseAdminDataLists implements ListsSearchInterface
{


    /**
     * @notes 设置搜索条件
     * @return \string[][]
     * @author 段延庆
     * @date 2023/06/19 09:51
     */
    public function setSearch(): array
    {
        return [
            '=' => ['name', 'avatar', 'level', 'desc', 'is_show', 'sort'],
        ];
    }


    /**
     * @notes 获取列表
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     * @author 段延庆
     * @date 2023/06/19 09:51
     */
    public function lists(): array
    {
        return Member::where($this->searchWhere)
            ->field(['id', 'name', 'avatar', 'level', 'department', 'desc', 'is_show', 'sort'])
            ->limit($this->limitOffset, $this->limitLength)
            ->order(['id' => 'desc'])
            ->select()
            ->toArray();
    }


    /**
     * @notes 获取数量
     * @return int
     * @author 段延庆
     * @date 2023/06/19 09:51
     */
    public function count(): int
    {
        return Member::where($this->searchWhere)->count();
    }
}
