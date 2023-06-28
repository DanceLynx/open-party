<?php


namespace app\common\model;

use app\common\enum\CrontabEnum;
use think\model\concern\SoftDelete;

/**
 * 定时任务模型
 * Class Crontab
 * @package app\common\model
 */
class Crontab extends BaseModel
{
    use SoftDelete;

    protected $deleteTime = 'delete_time';

    protected $name = 'dev_crontab';


    /**
     * @notes 类型获取器
     * @param $value
     * @return string
     * @author 段誉
     * @date 2022/3/29 12:05
     */
    public function getTypeDescAttr($value)
    {
        $desc = [
            CrontabEnum::CRONTAB => '定时任务',
            CrontabEnum::DAEMON => '守护进程',
        ];
        return $desc[$value] ?? '';
    }


    /**
     * @notes 状态获取器
     * @param $value
     * @return string
     * @author 段誉
     * @date 2022/3/29 12:06
     */
    public function getStatusDescAttr($value)
    {
        $desc = [
            CrontabEnum::START => '运行',
            CrontabEnum::STOP => '停止',
            CrontabEnum::ERROR => '错误',
        ];
        return $desc[$value] ?? '';
    }


    /**
     * @notes 最后执行时间获取器
     * @param $value
     * @return string
     * @author 段誉
     * @date 2022/3/29 12:06
     */
    public function getLastTimeAttr($value)
    {
        return empty($value) ? '' : date('Y-m-d H:i:s', $value);
    }
}
