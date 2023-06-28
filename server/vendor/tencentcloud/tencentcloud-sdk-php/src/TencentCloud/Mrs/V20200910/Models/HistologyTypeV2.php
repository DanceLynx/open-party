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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 组织学类型
 *
 * @method string getInfiltration() 获取浸润
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInfiltration(string $Infiltration) 设置浸润
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIndex() 获取索引
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndex(array $Index) 设置索引
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSrc() 获取原文
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSrc(string $Src) 设置原文
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取归一化后的组织学类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置归一化后的组织学类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCoords() 获取原文对应坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCoords(array $Coords) 设置原文对应坐标
注意：此字段可能返回 null，表示取不到有效值。
 */
class HistologyTypeV2 extends AbstractModel
{
    /**
     * @var string 浸润
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Infiltration;

    /**
     * @var array 索引
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Index;

    /**
     * @var string 原文
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Src;

    /**
     * @var string 归一化后的组织学类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var array 原文对应坐标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Coords;

    /**
     * @param string $Infiltration 浸润
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Index 索引
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Src 原文
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 归一化后的组织学类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Coords 原文对应坐标
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
        if (array_key_exists("Infiltration",$param) and $param["Infiltration"] !== null) {
            $this->Infiltration = $param["Infiltration"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Src",$param) and $param["Src"] !== null) {
            $this->Src = $param["Src"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Coords",$param) and $param["Coords"] !== null) {
            $this->Coords = [];
            foreach ($param["Coords"] as $key => $value){
                $obj = new Coord();
                $obj->deserialize($value);
                array_push($this->Coords, $obj);
            }
        }
    }
}
