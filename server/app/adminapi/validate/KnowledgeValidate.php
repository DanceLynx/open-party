<?php


namespace app\adminapi\validate;


use app\common\validate\BaseValidate;


/**
 * Knowledge验证器
 * Class KnowledgeValidate
 * @package app\adminapi\validate
 */
class KnowledgeValidate extends BaseValidate
{

    /**
     * 设置校验规则
     * @var string[]
     */
    protected $rule = [
        'id' => 'require',
        'cid' => 'require',
        'title' => 'require',
        'is_show' => 'require',
    ];


    /**
     * 参数描述
     * @var string[]
     */
    protected $field = [
        'id' => 'id',
        'cid' => '党史分类',
        'title' => '文章标题',
        'is_show' => '是否显示:1-是.0-否',
    ];


    /**
     * @notes 添加场景
     * @return KnowledgeValidate
     * @author 段延庆
     * @date 2023/06/03 16:29
     */
    public function sceneAdd()
    {
        return $this->only(['cid', 'title', 'is_show']);
    }


    /**
     * @notes 编辑场景
     * @return KnowledgeValidate
     * @author 段延庆
     * @date 2023/06/03 16:29
     */
    public function sceneEdit()
    {
        return $this->only(['id', 'cid', 'title', 'is_show']);
    }


    /**
     * @notes 删除场景
     * @return KnowledgeValidate
     * @author 段延庆
     * @date 2023/06/03 16:29
     */
    public function sceneDelete()
    {
        return $this->only(['id']);
    }


    /**
     * @notes 详情场景
     * @return KnowledgeValidate
     * @author 段延庆
     * @date 2023/06/03 16:29
     */
    public function sceneDetail()
    {
        return $this->only(['id']);
    }
}
