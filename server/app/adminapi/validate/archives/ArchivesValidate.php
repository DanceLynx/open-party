<?php


namespace app\adminapi\validate\archives;


use app\common\validate\BaseValidate;


/**
 * Archives验证器
 * Class ArchivesValidate
 * @package app\adminapi\validate\archives
 */
class ArchivesValidate extends BaseValidate
{

    /**
     * 设置校验规则
     * @var string[]
     */
    protected $rule = [
        'id' => 'require',
        'name' => 'require',
        'idcard' => 'require',
        'gender' => 'require',
        'birthday_time' => 'require',
        'nation' => 'require',
        'native_place' => 'require',
        'address' => 'require',
        'education' => 'require',
        'college' => 'require',
        'archives_status' => 'require',
        'department' => 'require',
        'contact' => 'require',
        'is_flow' => 'require',
        'is_merry' => 'require',
        'join_time' => 'require',
        'real_time' => 'require',
        'see' => 'require',
        'situation' => 'require',
    ];


    /**
     * 参数描述
     * @var string[]
     */
    protected $field = [
        'id' => 'id',
        'name' => '姓名',
        'idcard' => '身份证',
        'gender' => '性别',
        'birthday_time' => '出生日期',
        'nation' => '民族',
        'native_place' => '籍贯',
        'address' => '地址',
        'education' => '学历',
        'college' => '毕业院校',
        'archives_status' => '党籍状态',
        'department' => '党支部',
        'contact' => '联系电话',
        'is_flow' => '是否为流动党员',
        'is_merry' => '婚姻状态',
        'join_time' => '加入党组织时间',
        'real_time' => '成为正式党员时间',
        'see' => '主要经历',
        'situation' => '发展党员情况',
    ];


    /**
     * @notes 添加场景
     * @return ArchivesValidate
     * @author 段延庆
     * @date 2023/06/19 21:07
     */
    public function sceneAdd()
    {
        return $this->only(['name', 'idcard', 'gender', 'birthday_time', 'nation', 'native_place', 'address', 'education', 'college', 'archives_status', 'department', 'contact', 'is_flow', 'is_merry', 'join_time', 'real_time', 'see', 'situation']);
    }


    /**
     * @notes 编辑场景
     * @return ArchivesValidate
     * @author 段延庆
     * @date 2023/06/19 21:07
     */
    public function sceneEdit()
    {
        return $this->only(['id', 'name', 'idcard', 'gender', 'birthday_time', 'nation', 'native_place', 'address', 'education', 'college', 'archives_status', 'department', 'contact', 'is_flow', 'is_merry', 'join_time', 'real_time', 'see', 'situation']);
    }


    /**
     * @notes 删除场景
     * @return ArchivesValidate
     * @author 段延庆
     * @date 2023/06/19 21:07
     */
    public function sceneDelete()
    {
        return $this->only(['id']);
    }


    /**
     * @notes 详情场景
     * @return ArchivesValidate
     * @author 段延庆
     * @date 2023/06/19 21:07
     */
    public function sceneDetail()
    {
        return $this->only(['id']);
    }
}
