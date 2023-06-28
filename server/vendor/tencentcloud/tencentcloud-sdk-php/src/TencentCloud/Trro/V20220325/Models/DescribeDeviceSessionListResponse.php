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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDeviceSessionList返回参数结构体
 *
 * @method integer getTotal() 获取总个数
 * @method void setTotal(integer $Total) 设置总个数
 * @method array getDeviceSessionList() 获取会话列表
 * @method void setDeviceSessionList(array $DeviceSessionList) 设置会话列表
 * @method integer getNum() 获取本页数量
 * @method void setNum(integer $Num) 设置本页数量
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDeviceSessionListResponse extends AbstractModel
{
    /**
     * @var integer 总个数
     */
    public $Total;

    /**
     * @var array 会话列表
     */
    public $DeviceSessionList;

    /**
     * @var integer 本页数量
     */
    public $Num;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Total 总个数
     * @param array $DeviceSessionList 会话列表
     * @param integer $Num 本页数量
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("DeviceSessionList",$param) and $param["DeviceSessionList"] !== null) {
            $this->DeviceSessionList = [];
            foreach ($param["DeviceSessionList"] as $key => $value){
                $obj = new SessionInfo();
                $obj->deserialize($value);
                array_push($this->DeviceSessionList, $obj);
            }
        }

        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
