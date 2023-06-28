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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSelectiveCredential请求参数结构体
 *
 * @method VerifyFunctionArg getFunctionArg() 获取参数集合
 * @method void setFunctionArg(VerifyFunctionArg $FunctionArg) 设置参数集合
 * @method integer getPolicyId() 获取批露策略id
 * @method void setPolicyId(integer $PolicyId) 设置批露策略id
 */
class CreateSelectiveCredentialRequest extends AbstractModel
{
    /**
     * @var VerifyFunctionArg 参数集合
     */
    public $FunctionArg;

    /**
     * @var integer 批露策略id
     */
    public $PolicyId;

    /**
     * @param VerifyFunctionArg $FunctionArg 参数集合
     * @param integer $PolicyId 批露策略id
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
        if (array_key_exists("FunctionArg",$param) and $param["FunctionArg"] !== null) {
            $this->FunctionArg = new VerifyFunctionArg();
            $this->FunctionArg->deserialize($param["FunctionArg"]);
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }
    }
}
