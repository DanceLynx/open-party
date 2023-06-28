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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 命名空间信息
 *
 * @method string getNamespace() 获取命名空间名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespace(string $Namespace) 设置命名空间名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取状态(Active|Terminating)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置状态(Active|Terminating)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getProtected() 获取是否保护(不允许删除)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtected(boolean $Protected) 设置是否保护(不允许删除)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getYaml() 获取对应的Yaml配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setYaml(string $Yaml) 设置对应的Yaml配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class NamespaceInfo extends AbstractModel
{
    /**
     * @var string 命名空间名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Namespace;

    /**
     * @var string 状态(Active|Terminating)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var boolean 是否保护(不允许删除)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Protected;

    /**
     * @var string 对应的Yaml配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Yaml;

    /**
     * @param string $Namespace 命名空间名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 状态(Active|Terminating)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Protected 是否保护(不允许删除)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Yaml 对应的Yaml配置
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Protected",$param) and $param["Protected"] !== null) {
            $this->Protected = $param["Protected"];
        }

        if (array_key_exists("Yaml",$param) and $param["Yaml"] !== null) {
            $this->Yaml = $param["Yaml"];
        }
    }
}
