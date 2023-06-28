<?php

namespace app\api\logic;

use app\common\logic\BaseLogic;
use app\common\model\Question;
use app\common\model\question\Questionnaire;
use app\common\model\question\UserAsk;

/**
 * 问卷调查逻辑层
 * @author 段延庆
 * @date 2023-06-09
 */
class QuestionnaireLogic extends BaseLogic
{
    /**
     * 获取问卷详情
     * @author 段延庆
     * @param int $questionnaireId 问卷id
     * @param int $userId 用户id
     * @return array
     * @date 2023-06-09
     */
    public static function detail(int $questionnaireId, int $userId)
    {
        $questionnaire = Questionnaire::getQuestionnaireDetailAttr($questionnaireId);
        // 读入问题
        $questionnaire["questions"] = Question::getListByQuestionnaireId($questionnaireId);
        // 查询是否已经提交过
        $userAsk = UserAsk::findOne($questionnaireId, $userId);
        $questionnaire['is_submit'] = !empty($userAsk);
        // 读入用户已经填写的答卷
        $questionnaire["user_ask"] = $userAsk;
        return $questionnaire;
    }
}
