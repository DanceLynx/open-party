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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 密钥最后使用时间
 *
 * @method string getSecretId() 获取密钥ID
 * @method void setSecretId(string $SecretId) 设置密钥ID
 * @method string getLastUsedDate() 获取最后访问日期(有1天延迟)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastUsedDate(string $LastUsedDate) 设置最后访问日期(有1天延迟)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLastSecretUsedDate() 获取最后密钥访问日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastSecretUsedDate(integer $LastSecretUsedDate) 设置最后密钥访问日期
注意：此字段可能返回 null，表示取不到有效值。
 */
class SecretIdLastUsed extends AbstractModel
{
    /**
     * @var string 密钥ID
     */
    public $SecretId;

    /**
     * @var string 最后访问日期(有1天延迟)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastUsedDate;

    /**
     * @var integer 最后密钥访问日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastSecretUsedDate;

    /**
     * @param string $SecretId 密钥ID
     * @param string $LastUsedDate 最后访问日期(有1天延迟)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LastSecretUsedDate 最后密钥访问日期
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
        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("LastUsedDate",$param) and $param["LastUsedDate"] !== null) {
            $this->LastUsedDate = $param["LastUsedDate"];
        }

        if (array_key_exists("LastSecretUsedDate",$param) and $param["LastSecretUsedDate"] !== null) {
            $this->LastSecretUsedDate = $param["LastSecretUsedDate"];
        }
    }
}
