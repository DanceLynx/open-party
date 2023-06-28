<?php

namespace app\api\logic;

use app\api\lists\BaseApiDataLists;
use app\api\lists\UserAnswerLists;
use app\common\logic\BaseLogic;
use app\common\model\answer\Topic;
use app\common\model\answer\UserAnswer;
use app\common\model\IntegralLog;
use app\common\model\user\User;
use think\facade\Db;

/**
 * 用户答题答案逻辑层
 * @author 段延庆
 * @date 2023-06-14
 */
class UserAnswerLogic extends BaseLogic
{
    /**
     * 获取用户答题列表
     * @author 段延庆
     * @return BaseApiDataLists
     * @date 2023-06-24
     */
    public static function lists(int $userId): BaseApiDataLists
    {
        $lists = new UserAnswerLists();
        $lists->userId = $userId;
        return $lists;
    }
    /**
     * 添加用户答案
     * @author 段延庆
     * @return array
     * @date 2023-06-14
     */
    public static function analysisUserAnswer(int $UserId, array $params): array
    {
        Db::startTrans();
        try {
            $question_ids = $params["question_ids"];
            $answers = $params["answers"];
            // 按顺序读出所需的题目
            $question_ids_str = implode(",", $question_ids);
            $order = "field(id,$question_ids_str)";
            $topics = Topic::whereIn("id", $question_ids_str)->order(Db::raw($order))->select();
            // 循环判断用户答案 并统计积分和分数
            $data = ["score" => 0, "integral" => 0, "count" => 0];
            foreach ($topics as $k => $topic) {
                if ($answers[$k] != $topic["answer"]) continue;
                $data["score"] += $topic["score"];
                $data["integral"] += $topic["integral"];
                $data["count"] += 1;
            }
            // 给用户加积分
            User::where("id", $UserId)->inc("user_integral", $data["integral"])->update();
            // 存储用户答卷
            UserAnswer::create(
                [
                    "user_id" => $UserId,
                    "score" => $data["score"],
                    "integral" => $data["integral"],
                    "answer_json" => ["question_ids" => $question_ids, "answers" => $answers],
                ]
            );
            // 记录积分记录
            IntegralLogLogic::add($UserId, IntegralLog::TYPE_ANSWER, $data["integral"]);
            Db::commit();
            return $data;
        } catch (\Exception $e) {
            Db::rollback();
            self::$error = $e->getMessage();
            return ["score" => 0, "integral" => 0, "count" => 0];
        }
    }
}
