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
 * DescribeRecordStream请求参数结构体
 *
 * @method string getDeviceId() 获取设备Id
 * @method void setDeviceId(string $DeviceId) 设置设备Id
 * @method integer getExpireTime() 获取流失效时间，UNIX时间戳，30天内
 * @method void setExpireTime(integer $ExpireTime) 设置流失效时间，UNIX时间戳，30天内
 * @method string getRecordId() 获取录像文件ID
 * @method void setRecordId(string $RecordId) 设置录像文件ID
 * @method integer getStartTime() 获取录像流开始时间，当录像文件ID为空时有效，UNIX时间戳
 * @method void setStartTime(integer $StartTime) 设置录像流开始时间，当录像文件ID为空时有效，UNIX时间戳
 * @method integer getEndTime() 获取录像流结束时间，当录像文件iD为空时有效，UNIX时间戳
 * @method void setEndTime(integer $EndTime) 设置录像流结束时间，当录像文件iD为空时有效，UNIX时间戳
 * @method string getChannelId() 获取通道唯一标识（此接口升级为必填字段）
 * @method void setChannelId(string $ChannelId) 设置通道唯一标识（此接口升级为必填字段）
 */
class DescribeRecordStreamRequest extends AbstractModel
{
    /**
     * @var string 设备Id
     */
    public $DeviceId;

    /**
     * @var integer 流失效时间，UNIX时间戳，30天内
     */
    public $ExpireTime;

    /**
     * @var string 录像文件ID
     */
    public $RecordId;

    /**
     * @var integer 录像流开始时间，当录像文件ID为空时有效，UNIX时间戳
     */
    public $StartTime;

    /**
     * @var integer 录像流结束时间，当录像文件iD为空时有效，UNIX时间戳
     */
    public $EndTime;

    /**
     * @var string 通道唯一标识（此接口升级为必填字段）
     */
    public $ChannelId;

    /**
     * @param string $DeviceId 设备Id
     * @param integer $ExpireTime 流失效时间，UNIX时间戳，30天内
     * @param string $RecordId 录像文件ID
     * @param integer $StartTime 录像流开始时间，当录像文件ID为空时有效，UNIX时间戳
     * @param integer $EndTime 录像流结束时间，当录像文件iD为空时有效，UNIX时间戳
     * @param string $ChannelId 通道唯一标识（此接口升级为必填字段）
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
        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }
    }
}
