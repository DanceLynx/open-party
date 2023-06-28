<?php


namespace app\adminapi\validate;


use app\common\validate\BaseValidate;


/**
 * KnowledgeCate验证器
 * Class KnowledgeCateValidate
 * @package app\adminapi\validate
 */
class KnowledgeCateValidate extends BaseValidate
{

    /**
     * 设置校验规则
     * @var string[]
     */
    protected $rule = [
        'id' => 'require',
    ];


    /**
     * 参数描述
     * @var string[]
     */
    protected $field = [
        'id' => 'id',
    ];


    /**
     * @notes 添加场景
     * @return KnowledgeCateValidate
     * @author 段延庆
     * @date 2023/06/03 16:12
     */
    public function sceneAdd()
    {
        return $this->remove('id', true);
    }


    /**
     * @notes 编辑场景
     * @return KnowledgeCateValidate
     * @author 段延庆
     * @date 2023/06/03 16:12
     */
    public function sceneEdit()
    {
        return $this->only(['id']);
    }


    /**
     * @notes 删除场景
     * @return KnowledgeCateValidate
     * @author 段延庆
     * @date 2023/06/03 16:12
     */
    public function sceneDelete()
    {
        return $this->only(['id']);
    }


    /**
     * @notes 详情场景
     * @return KnowledgeCateValidate
     * @author 段延庆
     * @date 2023/06/03 16:12
     */
    public function sceneDetail()
    {
        return $this->only(['id']);
    }
}
