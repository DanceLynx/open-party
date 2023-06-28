<?php


namespace app\common\model\article;

use app\common\enum\YesNoEnum;
use app\common\model\BaseModel;
use think\model\concern\SoftDelete;

/**
 * 资讯管理模型
 * Class Article
 * @package app\common\model\article;
 */
class Article extends BaseModel
{
    use SoftDelete;

    protected $deleteTime = 'delete_time';

    /**
     * @notes  获取分类名称
     * @param $value
     * @param $data
     * @return string
     * @author heshihu
     * @date 2022/2/22 9:53
     */
    public function getCateNameAttr($value, $data)
    {
        return ArticleCate::where('id', $data['cid'])->value('name');
    }

    /**
     * @notes 浏览量
     * @param $value
     * @param $data
     * @return mixed
     * @author 段誉
     * @date 2022/9/15 11:33
     */
    public function getClickAttr($value, $data)
    {
        return $data['click_actual'] + $data['click_virtual'];
    }


    /**
     * @notes 设置图片域名
     * @param $value
     * @param $data
     * @return array|string|string[]|null
     * @author 段誉
     * @date 2022/9/28 10:17
     */
    public function getContentAttr($value, $data)
    {
        return get_file_domain($value);
    }


    /**
     * @notes 清除图片域名
     * @param $value
     * @param $data
     * @return array|string|string[]
     * @author 段誉
     * @date 2022/9/28 10:17
     */
    public function setContentAttr($value, $data)
    {
        return clear_file_domain($value);
    }


    /**
     * @notes 获取文章详情
     * @param $id
     * @return array
     * @author 段誉
     * @date 2022/10/20 15:23
     */
    public static function getArticleDetailArr(int $id)
    {
        $article = Article::where(['id' => $id, 'is_show' => YesNoEnum::YES])
            ->findOrEmpty();

        if ($article->isEmpty()) {
            return [];
        }

        // 增加点击量
        $article->click_actual += 1;
        $article->save();

        return $article->append(['click'])
            ->hidden(['click_virtual', 'click_actual'])
            ->toArray();
    }
}
