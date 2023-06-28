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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DetachSnapshotInstances请求参数结构体
 *
 * @method string getSnapshotPolicyId() 获取快照策略Id。
 * @method void setSnapshotPolicyId(string $SnapshotPolicyId) 设置快照策略Id。
 * @method array getInstances() 获取实例信息。
 * @method void setInstances(array $Instances) 设置实例信息。
 */
class DetachSnapshotInstancesRequest extends AbstractModel
{
    /**
     * @var string 快照策略Id。
     */
    public $SnapshotPolicyId;

    /**
     * @var array 实例信息。
     */
    public $Instances;

    /**
     * @param string $SnapshotPolicyId 快照策略Id。
     * @param array $Instances 实例信息。
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
        if (array_key_exists("SnapshotPolicyId",$param) and $param["SnapshotPolicyId"] !== null) {
            $this->SnapshotPolicyId = $param["SnapshotPolicyId"];
        }

        if (array_key_exists("Instances",$param) and $param["Instances"] !== null) {
            $this->Instances = [];
            foreach ($param["Instances"] as $key => $value){
                $obj = new SnapshotInstance();
                $obj->deserialize($value);
                array_push($this->Instances, $obj);
            }
        }
    }
}
