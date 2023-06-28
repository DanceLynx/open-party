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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRocketMQCluster请求参数结构体
 *
 * @method string getClusterId() 获取RocketMQ集群ID
 * @method void setClusterId(string $ClusterId) 设置RocketMQ集群ID
 * @method string getClusterName() 获取3-64个字符，只能包含字母、数字、“-”及“_”
 * @method void setClusterName(string $ClusterName) 设置3-64个字符，只能包含字母、数字、“-”及“_”
 * @method string getRemark() 获取说明信息，不超过128个字符
 * @method void setRemark(string $Remark) 设置说明信息，不超过128个字符
 */
class ModifyRocketMQClusterRequest extends AbstractModel
{
    /**
     * @var string RocketMQ集群ID
     */
    public $ClusterId;

    /**
     * @var string 3-64个字符，只能包含字母、数字、“-”及“_”
     */
    public $ClusterName;

    /**
     * @var string 说明信息，不超过128个字符
     */
    public $Remark;

    /**
     * @param string $ClusterId RocketMQ集群ID
     * @param string $ClusterName 3-64个字符，只能包含字母、数字、“-”及“_”
     * @param string $Remark 说明信息，不超过128个字符
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
