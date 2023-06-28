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
 * DescribeEdgeNodePods请求参数结构体
 *
 * @method integer getEdgeUnitId() 获取IECP边缘单元ID
 * @method void setEdgeUnitId(integer $EdgeUnitId) 设置IECP边缘单元ID
 * @method integer getNodeId() 获取节点ID
 * @method void setNodeId(integer $NodeId) 设置节点ID
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 * @method string getPodNamePattern() 获取Pod名称过滤串
 * @method void setPodNamePattern(string $PodNamePattern) 设置Pod名称过滤串
 */
class DescribeEdgeNodePodsRequest extends AbstractModel
{
    /**
     * @var integer IECP边缘单元ID
     */
    public $EdgeUnitId;

    /**
     * @var integer 节点ID
     */
    public $NodeId;

    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @var string Pod名称过滤串
     */
    public $PodNamePattern;

    /**
     * @param integer $EdgeUnitId IECP边缘单元ID
     * @param integer $NodeId 节点ID
     * @param string $Namespace 命名空间
     * @param string $PodNamePattern Pod名称过滤串
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
        if (array_key_exists("EdgeUnitId",$param) and $param["EdgeUnitId"] !== null) {
            $this->EdgeUnitId = $param["EdgeUnitId"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("PodNamePattern",$param) and $param["PodNamePattern"] !== null) {
            $this->PodNamePattern = $param["PodNamePattern"];
        }
    }
}
