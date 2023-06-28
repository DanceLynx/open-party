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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * proxy机器信息
 *
 * @method string getProxyUid() 获取唯一id
 * @method void setProxyUid(string $ProxyUid) 设置唯一id
 * @method string getMachineType() 获取机器类型
 * @method void setMachineType(string $MachineType) 设置机器类型
 * @method integer getAvailableCount() 获取可分配proxy资源数
 * @method void setAvailableCount(integer $AvailableCount) 设置可分配proxy资源数
 */
class ProxyMachineInfo extends AbstractModel
{
    /**
     * @var string 唯一id
     */
    public $ProxyUid;

    /**
     * @var string 机器类型
     */
    public $MachineType;

    /**
     * @var integer 可分配proxy资源数
     */
    public $AvailableCount;

    /**
     * @param string $ProxyUid 唯一id
     * @param string $MachineType 机器类型
     * @param integer $AvailableCount 可分配proxy资源数
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
        if (array_key_exists("ProxyUid",$param) and $param["ProxyUid"] !== null) {
            $this->ProxyUid = $param["ProxyUid"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("AvailableCount",$param) and $param["AvailableCount"] !== null) {
            $this->AvailableCount = $param["AvailableCount"];
        }
    }
}
