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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTargetWeight请求参数结构体
 *
 * @method string getLoadBalancerId() 获取负载均衡实例 ID
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例 ID
 * @method string getListenerId() 获取负载均衡监听器 ID
 * @method void setListenerId(string $ListenerId) 设置负载均衡监听器 ID
 * @method array getTargets() 获取要修改权重的后端服务列表
 * @method void setTargets(array $Targets) 设置要修改权重的后端服务列表
 * @method integer getWeight() 获取后端服务新的转发权重，取值范围：0~100，默认值10。如果设置了 Targets.Weight 参数，则此参数不生效。
 * @method void setWeight(integer $Weight) 设置后端服务新的转发权重，取值范围：0~100，默认值10。如果设置了 Targets.Weight 参数，则此参数不生效。
 */
class ModifyTargetWeightRequest extends AbstractModel
{
    /**
     * @var string 负载均衡实例 ID
     */
    public $LoadBalancerId;

    /**
     * @var string 负载均衡监听器 ID
     */
    public $ListenerId;

    /**
     * @var array 要修改权重的后端服务列表
     */
    public $Targets;

    /**
     * @var integer 后端服务新的转发权重，取值范围：0~100，默认值10。如果设置了 Targets.Weight 参数，则此参数不生效。
     */
    public $Weight;

    /**
     * @param string $LoadBalancerId 负载均衡实例 ID
     * @param string $ListenerId 负载均衡监听器 ID
     * @param array $Targets 要修改权重的后端服务列表
     * @param integer $Weight 后端服务新的转发权重，取值范围：0~100，默认值10。如果设置了 Targets.Weight 参数，则此参数不生效。
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = [];
            foreach ($param["Targets"] as $key => $value){
                $obj = new Target();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
