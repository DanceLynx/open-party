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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实时任务同步速度 条/s
 *
 * @method string getNodeType() 获取节点类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeType(string $NodeType) 设置节点类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeName() 获取节点名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeName(string $NodeName) 设置节点名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getValues() 获取速度值列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValues(array $Values) 设置速度值列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class RecordsSpeed extends AbstractModel
{
    /**
     * @var string 节点类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeType;

    /**
     * @var string 节点名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeName;

    /**
     * @var array 速度值列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Values;

    /**
     * @param string $NodeType 节点类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeName 节点名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Values 速度值列表
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
        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = [];
            foreach ($param["Values"] as $key => $value){
                $obj = new SpeedValue();
                $obj->deserialize($value);
                array_push($this->Values, $obj);
            }
        }
    }
}
