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
namespace TencentCloud\Iotcloud\V20180614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateDevicesEnableState请求参数结构体
 *
 * @method string getProductID() 获取设备所属产品id
 * @method void setProductID(string $ProductID) 设置设备所属产品id
 * @method array getDeviceNames() 获取设备名称集合
 * @method void setDeviceNames(array $DeviceNames) 设置设备名称集合
 * @method integer getStatus() 获取要设置的设备状态，1为启用，0为禁用
 * @method void setStatus(integer $Status) 设置要设置的设备状态，1为启用，0为禁用
 */
class UpdateDevicesEnableStateRequest extends AbstractModel
{
    /**
     * @var string 设备所属产品id
     */
    public $ProductID;

    /**
     * @var array 设备名称集合
     */
    public $DeviceNames;

    /**
     * @var integer 要设置的设备状态，1为启用，0为禁用
     */
    public $Status;

    /**
     * @param string $ProductID 设备所属产品id
     * @param array $DeviceNames 设备名称集合
     * @param integer $Status 要设置的设备状态，1为启用，0为禁用
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
        if (array_key_exists("ProductID",$param) and $param["ProductID"] !== null) {
            $this->ProductID = $param["ProductID"];
        }

        if (array_key_exists("DeviceNames",$param) and $param["DeviceNames"] !== null) {
            $this->DeviceNames = $param["DeviceNames"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
