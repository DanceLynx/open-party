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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 组织身份
 *
 * @method integer getIdentityId() 获取身份ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdentityId(integer $IdentityId) 设置身份ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdentityAliasName() 获取身份名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdentityAliasName(string $IdentityAliasName) 设置身份名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIdentityPolicy() 获取身份策略。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdentityPolicy(array $IdentityPolicy) 设置身份策略。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIdentityType() 获取身份类型。 1-预设、 2-自定义
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdentityType(integer $IdentityType) 设置身份类型。 1-预设、 2-自定义
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间。
注意：此字段可能返回 null，表示取不到有效值。
 */
class OrgIdentity extends AbstractModel
{
    /**
     * @var integer 身份ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdentityId;

    /**
     * @var string 身份名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdentityAliasName;

    /**
     * @var string 描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var array 身份策略。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdentityPolicy;

    /**
     * @var integer 身份类型。 1-预设、 2-自定义
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdentityType;

    /**
     * @var string 更新时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @param integer $IdentityId 身份ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IdentityAliasName 身份名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $IdentityPolicy 身份策略。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IdentityType 身份类型。 1-预设、 2-自定义
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间。
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
        if (array_key_exists("IdentityId",$param) and $param["IdentityId"] !== null) {
            $this->IdentityId = $param["IdentityId"];
        }

        if (array_key_exists("IdentityAliasName",$param) and $param["IdentityAliasName"] !== null) {
            $this->IdentityAliasName = $param["IdentityAliasName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("IdentityPolicy",$param) and $param["IdentityPolicy"] !== null) {
            $this->IdentityPolicy = [];
            foreach ($param["IdentityPolicy"] as $key => $value){
                $obj = new IdentityPolicy();
                $obj->deserialize($value);
                array_push($this->IdentityPolicy, $obj);
            }
        }

        if (array_key_exists("IdentityType",$param) and $param["IdentityType"] !== null) {
            $this->IdentityType = $param["IdentityType"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
