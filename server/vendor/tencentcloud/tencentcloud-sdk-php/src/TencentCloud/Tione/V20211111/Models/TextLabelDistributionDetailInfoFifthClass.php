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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 五级标签
 *
 * @method string getLabelValue() 获取标签名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelValue(string $LabelValue) 设置标签名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLabelCount() 获取标签个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelCount(integer $LabelCount) 设置标签个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getLabelPercentage() 获取标签占比
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelPercentage(float $LabelPercentage) 设置标签占比
注意：此字段可能返回 null，表示取不到有效值。
 */
class TextLabelDistributionDetailInfoFifthClass extends AbstractModel
{
    /**
     * @var string 标签名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelValue;

    /**
     * @var integer 标签个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelCount;

    /**
     * @var float 标签占比
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelPercentage;

    /**
     * @param string $LabelValue 标签名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LabelCount 标签个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $LabelPercentage 标签占比
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
        if (array_key_exists("LabelValue",$param) and $param["LabelValue"] !== null) {
            $this->LabelValue = $param["LabelValue"];
        }

        if (array_key_exists("LabelCount",$param) and $param["LabelCount"] !== null) {
            $this->LabelCount = $param["LabelCount"];
        }

        if (array_key_exists("LabelPercentage",$param) and $param["LabelPercentage"] !== null) {
            $this->LabelPercentage = $param["LabelPercentage"];
        }
    }
}
