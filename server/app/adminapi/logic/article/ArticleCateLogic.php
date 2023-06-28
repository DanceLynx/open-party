<?php


namespace app\adminapi\logic\article;

use app\common\enum\YesNoEnum;
use app\common\logic\BaseLogic;
use app\common\model\article\ArticleCate;

/**
 * 资讯分类管理逻辑
 * Class ArticleCateLogic
 * @package app\adminapi\logic\article
 */
class ArticleCateLogic extends BaseLogic
{


    /**
     * @notes  添加资讯分类
     * @param array $params
     * @author heshihu
     * @date 2022/2/18 10:17
     */
    public static function add(array $params)
    {
        ArticleCate::create([
            'name' => $params['name'],
            'is_show' => $params['is_show'],
            'sort' => $params['sort'] ?? 0
        ]);
    }


    /**
     * @notes  编辑资讯分类
     * @param array $params
     * @return bool
     * @author heshihu
     * @date 2022/2/21 17:50
     */
    public static function edit(array $params): bool
    {
        try {
            ArticleCate::update([
                'id' => $params['id'],
                'name' => $params['name'],
                'is_show' => $params['is_show'],
                'sort' => $params['sort'] ?? 0
            ]);
            return true;
        } catch (\Exception $e) {
            self::setError($e->getMessage());
            return false;
        }
    }


    /**
     * @notes  删除资讯分类
     * @param array $params
     * @author heshihu
     * @date 2022/2/21 17:52
     */
    public static function delete(array $params)
    {
        ArticleCate::destroy($params['id']);
    }

    /**
     * @notes  查看资讯分类详情
     * @param $params
     * @return array
     * @author heshihu
     * @date 2022/2/21 17:54
     */
    public static function detail($params): array
    {
        return ArticleCate::findOrEmpty($params['id'])->toArray();
    }

    /**
     * @notes  更改资讯分类状态
     * @param array $params
     * @return bool
     * @author heshihu
     * @date 2022/2/21 18:04
     */
    public static function updateStatus(array $params)
    {
        ArticleCate::update([
            'id' => $params['id'],
            'is_show' => $params['is_show']
        ]);
        return true;
    }


    /**
     * @notes 文章分类数据
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     * @author 段誉
     * @date 2022/10/13 10:53
     */
    public static function getAllData()
    {
        return ArticleCate::where(['is_show' => YesNoEnum::YES])
            ->order(['sort' => 'desc', 'id' => 'desc'])
            ->select()
            ->toArray();
    }
}
