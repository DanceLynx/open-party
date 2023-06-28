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
namespace TencentCloud\Tbaas\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetPeerLogForUser返回参数结构体
 *
 * @method integer getTotalCount() 获取返回日志总行数，不会超过入参的RowNum
 * @method void setTotalCount(integer $TotalCount) 设置返回日志总行数，不会超过入参的RowNum
 * @method array getPeerLogList() 获取日志列表
 * @method void setPeerLogList(array $PeerLogList) 设置日志列表
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetPeerLogForUserResponse extends AbstractModel
{
    /**
     * @var integer 返回日志总行数，不会超过入参的RowNum
     */
    public $TotalCount;

    /**
     * @var array 日志列表
     */
    public $PeerLogList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 返回日志总行数，不会超过入参的RowNum
     * @param array $PeerLogList 日志列表
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("PeerLogList",$param) and $param["PeerLogList"] !== null) {
            $this->PeerLogList = [];
            foreach ($param["PeerLogList"] as $key => $value){
                $obj = new LogDetailForUser();
                $obj->deserialize($value);
                array_push($this->PeerLogList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
