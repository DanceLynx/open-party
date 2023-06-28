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
 * ModifySubscriptionStatus请求参数结构体
 *
 * @method string getDeviceId() 获取设备ID
 * @method void setDeviceId(string $DeviceId) 设置设备ID
 * @method integer getStatus() 获取订阅状态 1：关闭订阅 2：开启订阅
 * @method void setStatus(integer $Status) 设置订阅状态 1：关闭订阅 2：开启订阅
 * @method string getSubscriptionItem() 获取订阅类型 Alarm:告警订阅 Catalog:目录订阅 MobilePosition:移动位置订阅
 * @method void setSubscriptionItem(string $SubscriptionItem) 设置订阅类型 Alarm:告警订阅 Catalog:目录订阅 MobilePosition:移动位置订阅
 */
class ModifySubscriptionStatusRequest extends AbstractModel
{
    /**
     * @var string 设备ID
     */
    public $DeviceId;

    /**
     * @var integer 订阅状态 1：关闭订阅 2：开启订阅
     */
    public $Status;

    /**
     * @var string 订阅类型 Alarm:告警订阅 Catalog:目录订阅 MobilePosition:移动位置订阅
     */
    public $SubscriptionItem;

    /**
     * @param string $DeviceId 设备ID
     * @param integer $Status 订阅状态 1：关闭订阅 2：开启订阅
     * @param string $SubscriptionItem 订阅类型 Alarm:告警订阅 Catalog:目录订阅 MobilePosition:移动位置订阅
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SubscriptionItem",$param) and $param["SubscriptionItem"] !== null) {
            $this->SubscriptionItem = $param["SubscriptionItem"];
        }
    }
}
