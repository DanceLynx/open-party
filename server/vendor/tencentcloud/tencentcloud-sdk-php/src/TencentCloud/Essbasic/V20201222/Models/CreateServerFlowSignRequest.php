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
namespace TencentCloud\Essbasic\V20201222\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateServerFlowSign请求参数结构体
 *
 * @method Caller getCaller() 获取调用方信息
 * @method void setCaller(Caller $Caller) 设置调用方信息
 * @method string getFlowId() 获取流程ID
 * @method void setFlowId(string $FlowId) 设置流程ID
 * @method array getSignComponents() 获取签署区域信息
 * @method void setSignComponents(array $SignComponents) 设置签署区域信息
 * @method string getSourceIp() 获取客户端IP
 * @method void setSourceIp(string $SourceIp) 设置客户端IP
 */
class CreateServerFlowSignRequest extends AbstractModel
{
    /**
     * @var Caller 调用方信息
     */
    public $Caller;

    /**
     * @var string 流程ID
     */
    public $FlowId;

    /**
     * @var array 签署区域信息
     */
    public $SignComponents;

    /**
     * @var string 客户端IP
     */
    public $SourceIp;

    /**
     * @param Caller $Caller 调用方信息
     * @param string $FlowId 流程ID
     * @param array $SignComponents 签署区域信息
     * @param string $SourceIp 客户端IP
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
        if (array_key_exists("Caller",$param) and $param["Caller"] !== null) {
            $this->Caller = new Caller();
            $this->Caller->deserialize($param["Caller"]);
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("SignComponents",$param) and $param["SignComponents"] !== null) {
            $this->SignComponents = [];
            foreach ($param["SignComponents"] as $key => $value){
                $obj = new Component();
                $obj->deserialize($value);
                array_push($this->SignComponents, $obj);
            }
        }

        if (array_key_exists("SourceIp",$param) and $param["SourceIp"] !== null) {
            $this->SourceIp = $param["SourceIp"];
        }
    }
}
