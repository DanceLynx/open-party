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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RenewInstance请求参数结构体
 *
 * @method string getRegistryId() 获取实例Id
 * @method void setRegistryId(string $RegistryId) 设置实例Id
 * @method RegistryChargePrepaid getRegistryChargePrepaid() 获取预付费自动续费标识和购买时长,0：手动续费，1：自动续费，2：不续费并且不通知;单位为月
 * @method void setRegistryChargePrepaid(RegistryChargePrepaid $RegistryChargePrepaid) 设置预付费自动续费标识和购买时长,0：手动续费，1：自动续费，2：不续费并且不通知;单位为月
 * @method integer getFlag() 获取0 续费， 1按量转包年包月
 * @method void setFlag(integer $Flag) 设置0 续费， 1按量转包年包月
 */
class RenewInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例Id
     */
    public $RegistryId;

    /**
     * @var RegistryChargePrepaid 预付费自动续费标识和购买时长,0：手动续费，1：自动续费，2：不续费并且不通知;单位为月
     */
    public $RegistryChargePrepaid;

    /**
     * @var integer 0 续费， 1按量转包年包月
     */
    public $Flag;

    /**
     * @param string $RegistryId 实例Id
     * @param RegistryChargePrepaid $RegistryChargePrepaid 预付费自动续费标识和购买时长,0：手动续费，1：自动续费，2：不续费并且不通知;单位为月
     * @param integer $Flag 0 续费， 1按量转包年包月
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("RegistryChargePrepaid",$param) and $param["RegistryChargePrepaid"] !== null) {
            $this->RegistryChargePrepaid = new RegistryChargePrepaid();
            $this->RegistryChargePrepaid->deserialize($param["RegistryChargePrepaid"]);
        }

        if (array_key_exists("Flag",$param) and $param["Flag"] !== null) {
            $this->Flag = $param["Flag"];
        }
    }
}
