<?php

namespace app\api\lists;

use app\common\lists\ListsExtendInterface;
use app\common\model\dict\DictData;
use app\common\model\Member;

class MemberLists extends BaseApiDataLists implements ListsExtendInterface
{

    /**
     * 扩展字段
     * @author 段延庆
     * @date 2023-06-19
     */
    public function extend(): array
    {
        $extend = [];
        // 查询出字典数据
        $levels = DictData::where("type_value", "member_level")->order(["sort" => "desc"])->select();
        $departments = DictData::where("type_value", "department")->order(["sort" => "desc"])->select();
        $extend["levels"] = $levels->isEmpty() ? [] : $levels->toArray();
        $extend["departments"] = $departments->isEmpty() ? [] : $departments->toArray();
        return $extend;
    }
    /**
     * 搜索条件
     * @return array
     * @author 段延庆
     * @date 2023-06-19
     */
    public function setSearch(): array
    {
        return [
            '=' => ['name']
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
        if (!empty($this->params["level"])) {
            $where[] = ["level", "=", $this->params["level"]];
        }
        if (!empty($this->params['keyword'])) {
            $where[] = ['desc', 'like', '%' . $this->params['keyword'] . '%'];
        }
        return $where;
    }


    /**
     * @notes 获取党员列表
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

        $field = 'id,name,avatar,level,department,desc,sort,create_time';
        $result = Member::field($field)
            ->where($this->queryWhere())
            ->where($this->searchWhere)
            ->orderRaw($orderRaw)
            ->limit($this->limitOffset, $this->limitLength)
            ->select()->toArray();

        return $result;
    }


    /**
     * @notes 获取党员数量
     * @return int
     * @author 段延庆
     * @date 2023-06-19
     */
    public function count(): int
    {
        return Member::where($this->searchWhere)
            ->where($this->queryWhere())
            ->count();
    }
}
