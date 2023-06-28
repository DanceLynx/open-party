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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySecurityGroupItemRuleStatus请求参数结构体
 *
 * @method integer getDirection() 获取方向，0：出站，1：入站，默认1
 * @method void setDirection(integer $Direction) 设置方向，0：出站，1：入站，默认1
 * @method integer getStatus() 获取是否开关开启，0：未开启，1：开启
 * @method void setStatus(integer $Status) 设置是否开关开启，0：未开启，1：开启
 * @method integer getRuleSequence() 获取更改的企业安全组规则的执行顺序
 * @method void setRuleSequence(integer $RuleSequence) 设置更改的企业安全组规则的执行顺序
 */
class ModifySecurityGroupItemRuleStatusRequest extends AbstractModel
{
    /**
     * @var integer 方向，0：出站，1：入站，默认1
     */
    public $Direction;

    /**
     * @var integer 是否开关开启，0：未开启，1：开启
     */
    public $Status;

    /**
     * @var integer 更改的企业安全组规则的执行顺序
     */
    public $RuleSequence;

    /**
     * @param integer $Direction 方向，0：出站，1：入站，默认1
     * @param integer $Status 是否开关开启，0：未开启，1：开启
     * @param integer $RuleSequence 更改的企业安全组规则的执行顺序
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
        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RuleSequence",$param) and $param["RuleSequence"] !== null) {
            $this->RuleSequence = $param["RuleSequence"];
        }
    }
}
