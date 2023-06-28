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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAllVPCSwitchStatus请求参数结构体
 *
 * @method integer getStatus() 获取状态，0：关闭，1：开启
 * @method void setStatus(integer $Status) 设置状态，0：关闭，1：开启
 * @method array getFireWallVpcIds() 获取选中的防火墙开关Id
 * @method void setFireWallVpcIds(array $FireWallVpcIds) 设置选中的防火墙开关Id
 */
class ModifyAllVPCSwitchStatusRequest extends AbstractModel
{
    /**
     * @var integer 状态，0：关闭，1：开启
     */
    public $Status;

    /**
     * @var array 选中的防火墙开关Id
     */
    public $FireWallVpcIds;

    /**
     * @param integer $Status 状态，0：关闭，1：开启
     * @param array $FireWallVpcIds 选中的防火墙开关Id
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FireWallVpcIds",$param) and $param["FireWallVpcIds"] !== null) {
            $this->FireWallVpcIds = $param["FireWallVpcIds"];
        }
    }
}
