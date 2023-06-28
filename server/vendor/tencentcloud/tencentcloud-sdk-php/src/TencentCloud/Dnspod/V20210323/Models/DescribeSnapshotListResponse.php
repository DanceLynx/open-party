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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSnapshotList返回参数结构体
 *
 * @method SnapshotPageInfo getInfo() 获取分页信息
 * @method void setInfo(SnapshotPageInfo $Info) 设置分页信息
 * @method array getSnapshotList() 获取快照列表
 * @method void setSnapshotList(array $SnapshotList) 设置快照列表
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSnapshotListResponse extends AbstractModel
{
    /**
     * @var SnapshotPageInfo 分页信息
     */
    public $Info;

    /**
     * @var array 快照列表
     */
    public $SnapshotList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param SnapshotPageInfo $Info 分页信息
     * @param array $SnapshotList 快照列表
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
        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = new SnapshotPageInfo();
            $this->Info->deserialize($param["Info"]);
        }

        if (array_key_exists("SnapshotList",$param) and $param["SnapshotList"] !== null) {
            $this->SnapshotList = [];
            foreach ($param["SnapshotList"] as $key => $value){
                $obj = new SnapshotInfo();
                $obj->deserialize($value);
                array_push($this->SnapshotList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
