<?php


namespace app\common\model;

use app\common\enum\YesNoEnum;
use app\common\model\BaseModel;



/**
 * Knowledge模型
 * Class Knowledge
 * @package app\common\model
 */
class Knowledge extends BaseModel
{

    protected $name = 'knowledge';

    /**
     * 获取分类名称
     * @return string
     * @author 段延庆
     * @date 2023-06-03
     */
    public function getCateNameAttr($value, $data)
    {
        return KnowledgeCate::where("id", $data["cid"])->value("title");
    }

    /**
     * 获取内容详情
     * @author 段延庆
     * @return array
     * @date 2023-06-04
     */
    public static function getKnowledgeDetailArr(int $id): array
    {
        $article = self::where(['id' => $id, 'is_show' => YesNoEnum::YES])
            ->findOrEmpty();

        if ($article->isEmpty()) {
            return [];
        }

        // 增加点击量
        $article->click += 1;
        $article->save();

        return $article->toArray();
    }
}
