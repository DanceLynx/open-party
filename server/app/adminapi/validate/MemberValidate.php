<?php


namespace app\adminapi\validate;


use app\common\validate\BaseValidate;


/**
 * Member验证器
 * Class MemberValidate
 * @package app\adminapi\validate
 */
class MemberValidate extends BaseValidate
{

    /**
     * 设置校验规则
     * @var string[]
     */
    protected $rule = [
        'id' => 'require',
        'name' => 'require',
        'avatar' => 'require',
        'level' => 'require',
        'is_show' => 'require',
    ];


    /**
     * 参数描述
     * @var string[]
     */
    protected $field = [
        'id' => 'id',
        'name' => '姓名',
        'avatar' => '党员头像',
        'level' => '党员级别',
        'is_show' => '是否显示',
    ];


    /**
     * @notes 添加场景
     * @return MemberValidate
     * @author 段延庆
     * @date 2023/06/19 09:51
     */
    public function sceneAdd()
    {
        return $this->only(['name', 'avatar', 'level', 'is_show']);
    }


    /**
     * @notes 编辑场景
     * @return MemberValidate
     * @author 段延庆
     * @date 2023/06/19 09:51
     */
    public function sceneEdit()
    {
        return $this->only(['id', 'name', 'avatar', 'level', 'is_show']);
    }


    /**
     * @notes 删除场景
     * @return MemberValidate
     * @author 段延庆
     * @date 2023/06/19 09:51
     */
    public function sceneDelete()
    {
        return $this->only(['id']);
    }


    /**
     * @notes 详情场景
     * @return MemberValidate
     * @author 段延庆
     * @date 2023/06/19 09:51
     */
    public function sceneDetail()
    {
        return $this->only(['id']);
    }
}
