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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateRuntimeConfiguration请求参数结构体
 *
 * @method string getFleetId() 获取服务器舰队Id
 * @method void setFleetId(string $FleetId) 设置服务器舰队Id
 * @method RuntimeConfiguration getRuntimeConfiguration() 获取服务器舰队配置
 * @method void setRuntimeConfiguration(RuntimeConfiguration $RuntimeConfiguration) 设置服务器舰队配置
 */
class UpdateRuntimeConfigurationRequest extends AbstractModel
{
    /**
     * @var string 服务器舰队Id
     */
    public $FleetId;

    /**
     * @var RuntimeConfiguration 服务器舰队配置
     */
    public $RuntimeConfiguration;

    /**
     * @param string $FleetId 服务器舰队Id
     * @param RuntimeConfiguration $RuntimeConfiguration 服务器舰队配置
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
        if (array_key_exists("FleetId",$param) and $param["FleetId"] !== null) {
            $this->FleetId = $param["FleetId"];
        }

        if (array_key_exists("RuntimeConfiguration",$param) and $param["RuntimeConfiguration"] !== null) {
            $this->RuntimeConfiguration = new RuntimeConfiguration();
            $this->RuntimeConfiguration->deserialize($param["RuntimeConfiguration"]);
        }
    }
}
