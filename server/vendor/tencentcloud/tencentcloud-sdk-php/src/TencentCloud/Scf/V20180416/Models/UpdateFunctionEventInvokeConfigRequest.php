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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateFunctionEventInvokeConfig请求参数结构体
 *
 * @method AsyncTriggerConfig getAsyncTriggerConfig() 获取异步重试配置信息
 * @method void setAsyncTriggerConfig(AsyncTriggerConfig $AsyncTriggerConfig) 设置异步重试配置信息
 * @method string getFunctionName() 获取函数名称
 * @method void setFunctionName(string $FunctionName) 设置函数名称
 * @method string getNamespace() 获取函数所属命名空间，默认为default
 * @method void setNamespace(string $Namespace) 设置函数所属命名空间，默认为default
 */
class UpdateFunctionEventInvokeConfigRequest extends AbstractModel
{
    /**
     * @var AsyncTriggerConfig 异步重试配置信息
     */
    public $AsyncTriggerConfig;

    /**
     * @var string 函数名称
     */
    public $FunctionName;

    /**
     * @var string 函数所属命名空间，默认为default
     */
    public $Namespace;

    /**
     * @param AsyncTriggerConfig $AsyncTriggerConfig 异步重试配置信息
     * @param string $FunctionName 函数名称
     * @param string $Namespace 函数所属命名空间，默认为default
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
        if (array_key_exists("AsyncTriggerConfig",$param) and $param["AsyncTriggerConfig"] !== null) {
            $this->AsyncTriggerConfig = new AsyncTriggerConfig();
            $this->AsyncTriggerConfig->deserialize($param["AsyncTriggerConfig"]);
        }

        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }
    }
}
