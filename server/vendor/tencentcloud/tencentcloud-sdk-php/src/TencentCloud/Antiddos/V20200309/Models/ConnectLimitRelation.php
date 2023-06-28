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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 连接抑制列表
 *
 * @method ConnectLimitConfig getConnectLimitConfig() 获取连接抑制配置
 * @method void setConnectLimitConfig(ConnectLimitConfig $ConnectLimitConfig) 设置连接抑制配置
 * @method array getInstanceDetailList() 获取连接抑制关联的实例信息
 * @method void setInstanceDetailList(array $InstanceDetailList) 设置连接抑制关联的实例信息
 */
class ConnectLimitRelation extends AbstractModel
{
    /**
     * @var ConnectLimitConfig 连接抑制配置
     */
    public $ConnectLimitConfig;

    /**
     * @var array 连接抑制关联的实例信息
     */
    public $InstanceDetailList;

    /**
     * @param ConnectLimitConfig $ConnectLimitConfig 连接抑制配置
     * @param array $InstanceDetailList 连接抑制关联的实例信息
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
        if (array_key_exists("ConnectLimitConfig",$param) and $param["ConnectLimitConfig"] !== null) {
            $this->ConnectLimitConfig = new ConnectLimitConfig();
            $this->ConnectLimitConfig->deserialize($param["ConnectLimitConfig"]);
        }

        if (array_key_exists("InstanceDetailList",$param) and $param["InstanceDetailList"] !== null) {
            $this->InstanceDetailList = [];
            foreach ($param["InstanceDetailList"] as $key => $value){
                $obj = new InstanceRelation();
                $obj->deserialize($value);
                array_push($this->InstanceDetailList, $obj);
            }
        }
    }
}
