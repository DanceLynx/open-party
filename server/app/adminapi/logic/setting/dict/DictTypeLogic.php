<?php


namespace app\adminapi\logic\setting\dict;

use app\common\enum\YesNoEnum;
use app\common\logic\BaseLogic;
use app\common\model\dict\DictData;
use app\common\model\dict\DictType;


/**
 * 字典类型逻辑
 * Class DictTypeLogic
 * @package app\adminapi\logic\dict
 */
class DictTypeLogic extends BaseLogic
{

    /**
     * @notes 添加字典类型
     * @param array $params
     * @return DictType|\think\Model
     * @author 段誉
     * @date 2022/6/20 16:08
     */
    public static function add(array $params)
    {
        return DictType::create([
            'name' => $params['name'],
            'type' => $params['type'],
            'status' => $params['status'],
            'remark' => $params['remark'] ?? '',
        ]);
    }


    /**
     * @notes 编辑字典类型
     * @param array $params
     * @author 段誉
     * @date 2022/6/20 16:10
     */
    public static function edit(array $params)
    {
        DictType::update([
            'id' => $params['id'],
            'name' => $params['name'],
            'type' => $params['type'],
            'status' => $params['status'],
            'remark' => $params['remark'] ?? '',
        ]);

        DictData::where(['type_id' => $params['id']])
            ->update(['type_value' => $params['type']]);
    }


    /**
     * @notes 删除字典类型
     * @param array $params
     * @author 段誉
     * @date 2022/6/20 16:23
     */
    public static function delete(array $params)
    {
        DictType::destroy($params['id']);
    }


    /**
     * @notes 获取字典详情
     * @param $params
     * @return array
     * @author 段誉
     * @date 2022/6/20 16:23
     */
    public static function detail($params): array
    {
        return DictType::findOrEmpty($params['id'])->toArray();
    }


    /**
     * @notes 角色数据
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     * @author 段誉
     * @date 2022/10/13 10:44
     */
    public static function getAllData()
    {
        return DictType::where(['status' => YesNoEnum::YES])
            ->order(['id' => 'desc'])
            ->select()
            ->toArray();
    }
}
