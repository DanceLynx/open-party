<?php


namespace app\adminapi\logic\archives;


use app\common\model\archives\Archives;
use app\common\logic\BaseLogic;
use think\facade\Db;


/**
 * Archives逻辑
 * Class ArchivesLogic
 * @package app\adminapi\logic\archives
 */
class ArchivesLogic extends BaseLogic
{


    /**
     * @notes 添加
     * @param array $params
     * @return bool
     * @author 段延庆
     * @date 2023/06/19 21:07
     */
    public static function add(array $params): bool
    {
        Db::startTrans();
        try {
            Archives::create([
                'name' => $params['name'],
                'user_id' => $params["user_id"],
                'idcard' => $params['idcard'],
                'gender' => $params['gender'],
                'birthday_time' => strtotime($params['birthday_time']),
                'nation' => $params['nation'],
                'native_place' => $params['native_place'],
                'address' => $params['address'],
                'education' => $params['education'],
                'college' => $params['college'],
                'archives_status' => $params['archives_status'],
                'department' => $params['department'],
                'contact' => $params['contact'],
                'is_flow' => $params['is_flow'],
                'is_merry' => $params['is_merry'],
                'join_time' => strtotime($params['join_time']),
                'real_time' => strtotime($params['real_time']),
                'see' => $params['see'],
                'situation' => $params['situation']
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
     * @date 2023/06/19 21:07
     */
    public static function edit(array $params): bool
    {

        Db::startTrans();
        try {
            Archives::where('id', $params['id'])->update([
                'name' => $params['name'],
                'user_id' => $params["user_id"],
                'idcard' => $params['idcard'],
                'gender' => $params['gender'],
                'birthday_time' => strtotime($params['birthday_time']),
                'nation' => $params['nation'],
                'native_place' => $params['native_place'],
                'address' => $params['address'],
                'education' => $params['education'],
                'college' => $params['college'],
                'archives_status' => $params['archives_status'],
                'department' => $params['department'],
                'contact' => $params['contact'],
                'is_flow' => $params['is_flow'],
                'is_merry' => $params['is_merry'],
                'join_time' => strtotime($params['join_time']),
                'real_time' => strtotime($params['real_time']),
                'see' => $params['see'],
                'situation' => $params['situation']
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
     * @date 2023/06/19 21:07
     */
    public static function delete(array $params): bool
    {
        return Archives::destroy($params['id']);
    }


    /**
     * @notes 获取详情
     * @param $params
     * @return array
     * @author 段延庆
     * @date 2023/06/19 21:07
     */
    public static function detail($params): array
    {
        return Archives::findOrEmpty($params['id'])->toArray();
    }
}
