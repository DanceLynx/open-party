<?php


namespace app\adminapi\logic;


use app\common\model\KnowledgeCate;
use app\common\logic\BaseLogic;
use app\common\enum\YesNoEnum;
use think\facade\Db;


/**
 * KnowledgeCate逻辑
 * Class KnowledgeCateLogic
 * @package app\adminapi\logic
 */
class KnowledgeCateLogic extends BaseLogic
{


    /**
     * @notes 添加
     * @param array $params
     * @return bool
     * @author 段延庆
     * @date 2023/06/03 16:12
     */
    public static function add(array $params): bool
    {
        Db::startTrans();
        try {
            KnowledgeCate::create([
                'title' => $params['title'],
                'image' => $params['image'],
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
     * @date 2023/06/03 16:12
     */
    public static function edit(array $params): bool
    {
        Db::startTrans();
        try {
            KnowledgeCate::where('id', $params['id'])->update([
                'title' => $params['title'],
                'image' => $params['image'],
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
     * @date 2023/06/03 16:12
     */
    public static function delete(array $params): bool
    {
        return KnowledgeCate::destroy($params['id']);
    }


    /**
     * @notes 获取详情
     * @param $params
     * @return array
     * @author 段延庆
     * @date 2023/06/03 16:12
     */
    public static function detail($params): array
    {
        return KnowledgeCate::findOrEmpty($params['id'])->toArray();
    }
    /**
     * @notes 文章分类数据
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     * @author 段延庆
     * @date 2023/05/30 10:53
     */
    public static function getAllData()
    {
        return KnowledgeCate::order(['sort' => 'desc', 'id' => 'desc'])
            ->select()
            ->toArray();
    }
}
