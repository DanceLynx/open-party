<?php


namespace app\adminapi\logic;


use app\common\model\Member;
use app\common\logic\BaseLogic;
use think\facade\Db;


/**
 * Member逻辑
 * Class MemberLogic
 * @package app\adminapi\logic
 */
class MemberLogic extends BaseLogic
{


    /**
     * @notes 添加
     * @param array $params
     * @return bool
     * @author 段延庆
     * @date 2023/06/19 09:51
     */
    public static function add(array $params): bool
    {
        Db::startTrans();
        try {
            Member::create([
                'name' => $params['name'],
                'avatar' => $params['avatar'],
                'level' => $params['level'],
                'desc' => $params['desc'],
                'is_show' => $params['is_show'],
                'sort' => $params['sort']
            ]);

            Db::commit();
            return true;
        } catch (\Exception $e) {
            Db::rollback();
            self::setError($e->getMessage());
            return false;
        }
    }


    /**
     * @notes 编辑
     * @param array $params
     * @return bool
     * @author 段延庆
     * @date 2023/06/19 09:51
     */
    public static function edit(array $params): bool
    {
        Db::startTrans();
        try {
            Member::where('id', $params['id'])->update([
                'name' => $params['name'],
                'avatar' => $params['avatar'],
                'level' => $params['level'],
                'desc' => $params['desc'],
                'is_show' => $params['is_show'],
                'sort' => $params['sort']
            ]);

            Db::commit();
            return true;
        } catch (\Exception $e) {
            Db::rollback();
            self::setError($e->getMessage());
            return false;
        }
    }


    /**
     * @notes 删除
     * @param array $params
     * @return bool
     * @author 段延庆
     * @date 2023/06/19 09:51
     */
    public static function delete(array $params): bool
    {
        return Member::destroy($params['id']);
    }


    /**
     * @notes 获取详情
     * @param $params
     * @return array
     * @author 段延庆
     * @date 2023/06/19 09:51
     */
    public static function detail($params): array
    {
        return Member::findOrEmpty($params['id'])->toArray();
    }
}
