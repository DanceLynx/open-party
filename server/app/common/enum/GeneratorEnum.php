<?php


namespace app\common\enum;


class GeneratorEnum
{

    // 模板类型
    const TEMPLATE_TYPE_SINGLE = 0; // 单表
    const TEMPLATE_TYPE_TREE = 1; // 树表

    // 生成方式
    const GENERATE_TYPE_ZIP = 0; // 压缩包下载
    const GENERATE_TYPE_MODULE = 1; // 生成到模块

    // 删除方式
    const DELETE_TRUE = 0; // 真实删除
    const DELETE_SOFT = 1; // 软删除

    // 删除字段名 (默认名称)
    const DELETE_NAME = 'delete_time';

    // 菜单创建类型
    const GEN_SELF = 0; // 手动添加
    const GEN_AUTO = 1; // 自动添加

    // 关联模型类型relations
    const RELATION_HAS_ONE = 'has_one';
    const RELATION_HAS_MANY = 'has_many';


    /**
     * @notes 获取模板类型描述
     * @param bool $value
     * @return string|string[]
     * @author 段誉
     * @date 2022/6/14 11:24
     */
    public static function getTemplateTypeDesc($value = true)
    {
        $data = [
            self::TEMPLATE_TYPE_SINGLE => '单表(增删改查)',
            self::TEMPLATE_TYPE_TREE => '树表(增删改查)',
        ];
        if ($value === true) {
            return $data;
        }
        return $data[$value] ?? '';
    }
}
