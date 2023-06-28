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
 * 结论
 *
 * @method array getSymptom() 获取症状
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSymptom(array $Symptom) 设置症状
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getText() 获取文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(string $Text) 设置文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCoords() 获取坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCoords(array $Coords) 设置坐标
注意：此字段可能返回 null，表示取不到有效值。
 */
class Summary extends AbstractModel
{
    /**
     * @var array 症状
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Symptom;

    /**
     * @var string 文本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var array 坐标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Coords;

    /**
     * @param array $Symptom 症状
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Text 文本
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Coords 坐标
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
        if (array_key_exists("Symptom",$param) and $param["Symptom"] !== null) {
            $this->Symptom = [];
            foreach ($param["Symptom"] as $key => $value){
                $obj = new SymptomInfo();
                $obj->deserialize($value);
                array_push($this->Symptom, $obj);
            }
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
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
