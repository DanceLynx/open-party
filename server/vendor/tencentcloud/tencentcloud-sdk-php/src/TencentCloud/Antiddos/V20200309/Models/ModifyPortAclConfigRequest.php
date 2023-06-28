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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyPortAclConfig请求参数结构体
 *
 * @method string getInstanceId() 获取资源实例ID
 * @method void setInstanceId(string $InstanceId) 设置资源实例ID
 * @method AclConfig getOldAclConfig() 获取旧端口acl策略
 * @method void setOldAclConfig(AclConfig $OldAclConfig) 设置旧端口acl策略
 * @method AclConfig getNewAclConfig() 获取新端口acl策略
 * @method void setNewAclConfig(AclConfig $NewAclConfig) 设置新端口acl策略
 */
class ModifyPortAclConfigRequest extends AbstractModel
{
    /**
     * @var string 资源实例ID
     */
    public $InstanceId;

    /**
     * @var AclConfig 旧端口acl策略
     */
    public $OldAclConfig;

    /**
     * @var AclConfig 新端口acl策略
     */
    public $NewAclConfig;

    /**
     * @param string $InstanceId 资源实例ID
     * @param AclConfig $OldAclConfig 旧端口acl策略
     * @param AclConfig $NewAclConfig 新端口acl策略
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("OldAclConfig",$param) and $param["OldAclConfig"] !== null) {
            $this->OldAclConfig = new AclConfig();
            $this->OldAclConfig->deserialize($param["OldAclConfig"]);
        }

        if (array_key_exists("NewAclConfig",$param) and $param["NewAclConfig"] !== null) {
            $this->NewAclConfig = new AclConfig();
            $this->NewAclConfig->deserialize($param["NewAclConfig"]);
        }
    }
}
