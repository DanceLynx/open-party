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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProxyCustomConf返回参数结构体
 *
 * @method integer getCount() 获取代理配置数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCount(integer $Count) 设置代理配置数
注意：此字段可能返回 null，表示取不到有效值。
 * @method CustomConfig getCustomConf() 获取代理配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomConf(CustomConfig $CustomConf) 设置代理配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method Rule getWeightRule() 获取权重限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeightRule(Rule $WeightRule) 设置权重限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeProxyCustomConfResponse extends AbstractModel
{
    /**
     * @var integer 代理配置数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Count;

    /**
     * @var CustomConfig 代理配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomConf;

    /**
     * @var Rule 权重限制
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WeightRule;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Count 代理配置数
注意：此字段可能返回 null，表示取不到有效值。
     * @param CustomConfig $CustomConf 代理配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param Rule $WeightRule 权重限制
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("CustomConf",$param) and $param["CustomConf"] !== null) {
            $this->CustomConf = new CustomConfig();
            $this->CustomConf->deserialize($param["CustomConf"]);
        }

        if (array_key_exists("WeightRule",$param) and $param["WeightRule"] !== null) {
            $this->WeightRule = new Rule();
            $this->WeightRule->deserialize($param["WeightRule"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
