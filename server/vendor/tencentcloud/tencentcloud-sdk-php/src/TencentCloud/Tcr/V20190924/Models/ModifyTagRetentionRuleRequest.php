<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTagRetentionRule请求参数结构体
 *
 * @method string getRegistryId() 获取主实例iD
 * @method void setRegistryId(string $RegistryId) 设置主实例iD
 * @method integer getNamespaceId() 获取命名空间的Id，必须填写原有的命名空间id
 * @method void setNamespaceId(integer $NamespaceId) 设置命名空间的Id，必须填写原有的命名空间id
 * @method RetentionRule getRetentionRule() 获取保留策略
 * @method void setRetentionRule(RetentionRule $RetentionRule) 设置保留策略
 * @method string getCronSetting() 获取执行周期，必须填写为原来的设置
 * @method void setCronSetting(string $CronSetting) 设置执行周期，必须填写为原来的设置
 * @method integer getRetentionId() 获取规则Id
 * @method void setRetentionId(integer $RetentionId) 设置规则Id
 * @method boolean getDisabled() 获取是否禁用规则
 * @method void setDisabled(boolean $Disabled) 设置是否禁用规则
 */
class ModifyTagRetentionRuleRequest extends AbstractModel
{
    /**
     * @var string 主实例iD
     */
    public $RegistryId;

    /**
     * @var integer 命名空间的Id，必须填写原有的命名空间id
     */
    public $NamespaceId;

    /**
     * @var RetentionRule 保留策略
     */
    public $RetentionRule;

    /**
     * @var string 执行周期，必须填写为原来的设置
     */
    public $CronSetting;

    /**
     * @var integer 规则Id
     */
    public $RetentionId;

    /**
     * @var boolean 是否禁用规则
     */
    public $Disabled;

    /**
     * @param string $RegistryId 主实例iD
     * @param integer $NamespaceId 命名空间的Id，必须填写原有的命名空间id
     * @param RetentionRule $RetentionRule 保留策略
     * @param string $CronSetting 执行周期，必须填写为原来的设置
     * @param integer $RetentionId 规则Id
     * @param boolean $Disabled 是否禁用规则
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("RetentionRule",$param) and $param["RetentionRule"] !== null) {
            $this->RetentionRule = new RetentionRule();
            $this->RetentionRule->deserialize($param["RetentionRule"]);
        }

        if (array_key_exists("CronSetting",$param) and $param["CronSetting"] !== null) {
            $this->CronSetting = $param["CronSetting"];
        }

        if (array_key_exists("RetentionId",$param) and $param["RetentionId"] !== null) {
            $this->RetentionId = $param["RetentionId"];
        }

        if (array_key_exists("Disabled",$param) and $param["Disabled"] !== null) {
            $this->Disabled = $param["Disabled"];
        }
    }
}
