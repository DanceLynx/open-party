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
namespace TencentCloud\Gpm\V20200820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeToken返回参数结构体
 *
 * @method string getMatchToken() 获取当前的MatchCode对应的Token。如果当前MatchCode没有Token，该参数可能取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMatchToken(string $MatchToken) 设置当前的MatchCode对应的Token。如果当前MatchCode没有Token，该参数可能取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCompatibleSpan() 获取当Token被替换后，GPM将兼容推送原始Token的时间（秒）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompatibleSpan(integer $CompatibleSpan) 设置当Token被替换后，GPM将兼容推送原始Token的时间（秒）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTokenResponse extends AbstractModel
{
    /**
     * @var string 当前的MatchCode对应的Token。如果当前MatchCode没有Token，该参数可能取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MatchToken;

    /**
     * @var integer 当Token被替换后，GPM将兼容推送原始Token的时间（秒）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompatibleSpan;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $MatchToken 当前的MatchCode对应的Token。如果当前MatchCode没有Token，该参数可能取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CompatibleSpan 当Token被替换后，GPM将兼容推送原始Token的时间（秒）。
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
        if (array_key_exists("MatchToken",$param) and $param["MatchToken"] !== null) {
            $this->MatchToken = $param["MatchToken"];
        }

        if (array_key_exists("CompatibleSpan",$param) and $param["CompatibleSpan"] !== null) {
            $this->CompatibleSpan = $param["CompatibleSpan"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
