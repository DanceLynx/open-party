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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeReplicationInstanceSyncStatus返回参数结构体
 *
 * @method string getReplicationStatus() 获取同步状态
 * @method void setReplicationStatus(string $ReplicationStatus) 设置同步状态
 * @method string getReplicationTime() 获取同步完成时间
 * @method void setReplicationTime(string $ReplicationTime) 设置同步完成时间
 * @method ReplicationLog getReplicationLog() 获取同步日志
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplicationLog(ReplicationLog $ReplicationLog) 设置同步日志
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeReplicationInstanceSyncStatusResponse extends AbstractModel
{
    /**
     * @var string 同步状态
     */
    public $ReplicationStatus;

    /**
     * @var string 同步完成时间
     */
    public $ReplicationTime;

    /**
     * @var ReplicationLog 同步日志
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReplicationLog;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ReplicationStatus 同步状态
     * @param string $ReplicationTime 同步完成时间
     * @param ReplicationLog $ReplicationLog 同步日志
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
        if (array_key_exists("ReplicationStatus",$param) and $param["ReplicationStatus"] !== null) {
            $this->ReplicationStatus = $param["ReplicationStatus"];
        }

        if (array_key_exists("ReplicationTime",$param) and $param["ReplicationTime"] !== null) {
            $this->ReplicationTime = $param["ReplicationTime"];
        }

        if (array_key_exists("ReplicationLog",$param) and $param["ReplicationLog"] !== null) {
            $this->ReplicationLog = new ReplicationLog();
            $this->ReplicationLog->deserialize($param["ReplicationLog"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
