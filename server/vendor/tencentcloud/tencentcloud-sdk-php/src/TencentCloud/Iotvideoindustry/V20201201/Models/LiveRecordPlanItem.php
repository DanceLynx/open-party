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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 直播录制计划详情
 *
 * @method string getPlanId() 获取计划ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlanId(string $PlanId) 设置计划ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPlanName() 获取计划名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlanName(string $PlanName) 设置计划名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class LiveRecordPlanItem extends AbstractModel
{
    /**
     * @var string 计划ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PlanId;

    /**
     * @var string 计划名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PlanName;

    /**
     * @param string $PlanId 计划ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PlanName 计划名称
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
        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("PlanName",$param) and $param["PlanName"] !== null) {
            $this->PlanName = $param["PlanName"];
        }
    }
}
