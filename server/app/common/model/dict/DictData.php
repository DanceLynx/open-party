<?php


namespace app\common\model\dict;

use app\common\model\BaseModel;
use think\model\concern\SoftDelete;


/**
 * 字典数据模型
 * Class DictData
 * @package app\common\model\dict
 */
class DictData extends BaseModel
{

    use SoftDelete;

    protected $deleteTime = 'delete_time';


    /**
     * @notes 状态描述
     * @param $value
     * @param $data
     * @return string
     * @author 段誉
     * @date 2022/6/20 16:31
     */
    public function getStatusDescAttr($value, $data)
    {
        return $data['status'] ? '正常' : '停用';
    }
}
