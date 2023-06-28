<?php


namespace app\adminapi\logic;


use app\common\model\Knowledge;
use app\common\logic\BaseLogic;
use think\facade\Db;


/**
 * Knowledge逻辑
 * Class KnowledgeLogic
 * @package app\adminapi\logic
 */
class KnowledgeLogic extends BaseLogic
{


    /**
     * @notes 添加
     * @param array $params
     * @return bool
     * @author 段延庆
     * @date 2023/06/03 16:29
     */
    public static function add(array $params): bool
    {
        Db::startTrans();
        try {
            Knowledge::create([
                'cid' => $params['cid'],
                'title' => $params['title'],
                'desc' => $params['desc'],
                'abstract' => $params['abstract'],
                'image' => $params['image'],
                'author' => $params['author'],
                'content' => $params['content'],
                'click' => $params['click'],
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
     * @date 2023/06/03 16:29
     */
    public static function edit(array $params): bool
    {
        Db::startTrans();
        try {
            Knowledge::where('id', $params['id'])->update([
                'cid' => $params['cid'],
                'title' => $params['title'],
                'desc' => $params['desc'],
                'abstract' => $params['abstract'],
                'image' => $params['image'],
                'author' => $params['author'],
                'content' => $params['content'],
                'click' => $params['click'],
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
     * @date 2023/06/03 16:29
     */
    public static function delete(array $params): bool
    {
        return Knowledge::destroy($params['id']);
    }


    /**
     * @notes 获取详情
     * @param $params
     * @return array
     * @author 段延庆
     * @date 2023/06/03 16:29
     */
    public static function detail($params): array
    {
        return Knowledge::findOrEmpty($params['id'])->toArray();
    }
}
