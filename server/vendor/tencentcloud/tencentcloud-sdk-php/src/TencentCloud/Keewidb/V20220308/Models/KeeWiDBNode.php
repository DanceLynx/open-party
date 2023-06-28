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
namespace TencentCloud\Keewidb\V20220308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * KeeWiDB节点的运行信息
 *
 * @method string getNodeId() 获取节点的序列ID。
 * @method void setNodeId(string $NodeId) 设置节点的序列ID。
 * @method string getStatus() 获取节点的状态。
 * @method void setStatus(string $Status) 设置节点的状态。
 * @method string getRole() 获取节点角色。
 * @method void setRole(string $Role) 设置节点角色。
 */
class KeeWiDBNode extends AbstractModel
{
    /**
     * @var string 节点的序列ID。
     */
    public $NodeId;

    /**
     * @var string 节点的状态。
     */
    public $Status;

    /**
     * @var string 节点角色。
     */
    public $Role;

    /**
     * @param string $NodeId 节点的序列ID。
     * @param string $Status 节点的状态。
     * @param string $Role 节点角色。
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
        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }
    }
}
