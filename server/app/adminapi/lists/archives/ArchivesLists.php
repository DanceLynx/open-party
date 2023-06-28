<?php


namespace app\adminapi\lists\archives;


use app\adminapi\lists\BaseAdminDataLists;
use app\common\model\archives\Archives;
use app\common\lists\ListsSearchInterface;


/**
 * Archives列表
 * Class ArchivesLists
 * @package app\adminapi\listsarchives
 */
class ArchivesLists extends BaseAdminDataLists implements ListsSearchInterface
{


    /**
     * @notes 设置搜索条件
     * @return \string[][]
     * @author 段延庆
     * @date 2023/06/19 21:07
     */
    public function setSearch(): array
    {
        return [
            '=' => ['name', 'idcard', 'gender', 'birthday_time', 'nation', 'native_place', 'address', 'education', 'college', 'archives_status', 'department', 'contact', 'is_flow', 'is_merry', 'join_time', 'real_time', 'see', 'situation'],
        ];
    }


    /**
     * @notes 获取列表
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     * @author 段延庆
     * @date 2023/06/19 21:07
     */
    public function lists(): array
    {
        return Archives::where($this->searchWhere)
            ->field(['id', 'user_id', 'name', 'idcard', 'gender', 'birthday_time', 'nation', 'native_place', 'address', 'education', 'college', 'archives_status', 'department', 'contact', 'is_flow', 'is_merry', 'join_time', 'real_time', 'see', 'situation'])
            ->limit($this->limitOffset, $this->limitLength)
            ->order(['id' => 'desc'])
            ->select()
            ->toArray();
    }


    /**
     * @notes 获取数量
     * @return int
     * @author 段延庆
     * @date 2023/06/19 21:07
     */
    public function count(): int
    {
        return Archives::where($this->searchWhere)->count();
    }
}
