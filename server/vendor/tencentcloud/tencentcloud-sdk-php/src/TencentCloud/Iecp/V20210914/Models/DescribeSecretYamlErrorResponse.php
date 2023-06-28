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
 * DescribeSecretYamlError返回参数结构体
 *
 * @method boolean getCheckPass() 获取校验是通过
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckPass(boolean $CheckPass) 设置校验是通过
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getErrType() 获取错误类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrType(integer $ErrType) 设置错误类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrInfo() 获取错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrInfo(string $ErrInfo) 设置错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSecretYamlErrorResponse extends AbstractModel
{
    /**
     * @var boolean 校验是通过
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckPass;

    /**
     * @var integer 错误类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrType;

    /**
     * @var string 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrInfo;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $CheckPass 校验是通过
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ErrType 错误类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrInfo 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("CheckPass",$param) and $param["CheckPass"] !== null) {
            $this->CheckPass = $param["CheckPass"];
        }

        if (array_key_exists("ErrType",$param) and $param["ErrType"] !== null) {
            $this->ErrType = $param["ErrType"];
        }

        if (array_key_exists("ErrInfo",$param) and $param["ErrInfo"] !== null) {
            $this->ErrInfo = $param["ErrInfo"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
