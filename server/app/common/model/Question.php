<?php


namespace app\common\model;


use app\common\model\BaseModel;



/**
 * Question模型
 * Class Question
 * @package app\common\model
 */
class Question extends BaseModel
{

    protected $name = 'question';

    protected $type = [
        "option_json" => "json"
    ];
    const TYPE_RADIO = 10; //单选
    const TYPE_CHECKBOX = 20; // 多选
    const TYPE_TEXT = 30; //文本

    public static $Types = [
        self::TYPE_RADIO => "单选",
        self::TYPE_CHECKBOX => "多选",
        self::TYPE_TEXT => "文本"
    ];

    /**
     * 根据问卷id 读取全部相关问题
     * @author 段延庆
     * @date 2023-06-09
     */
    public static function getListByQuestionnaireId(int $questionnaireId): array
    {
        $result = self::where(["questionnaire_id" => $questionnaireId])
            ->orderRaw("sort asc,id desc")
            ->select();
        if ($result->isEmpty()) {
            return [];
        }
        return $result->toArray();
    }
}
