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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAlarmEvents请求参数结构体
 *
 * @method string getModule() 获取模块名，固定值 monitor
 * @method void setModule(string $Module) 设置模块名，固定值 monitor
 * @method string getNamespace() 获取告警策略类型，由 DescribeAllNamespaces 获得，例如 cvm_device
 * @method void setNamespace(string $Namespace) 设置告警策略类型，由 DescribeAllNamespaces 获得，例如 cvm_device
 * @method string getMonitorType() 获取监控类型，如 MT_QCE。如果不填默认为 MT_QCE。
 * @method void setMonitorType(string $MonitorType) 设置监控类型，如 MT_QCE。如果不填默认为 MT_QCE。
 */
class DescribeAlarmEventsRequest extends AbstractModel
{
    /**
     * @var string 模块名，固定值 monitor
     */
    public $Module;

    /**
     * @var string 告警策略类型，由 DescribeAllNamespaces 获得，例如 cvm_device
     */
    public $Namespace;

    /**
     * @var string 监控类型，如 MT_QCE。如果不填默认为 MT_QCE。
     */
    public $MonitorType;

    /**
     * @param string $Module 模块名，固定值 monitor
     * @param string $Namespace 告警策略类型，由 DescribeAllNamespaces 获得，例如 cvm_device
     * @param string $MonitorType 监控类型，如 MT_QCE。如果不填默认为 MT_QCE。
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("MonitorType",$param) and $param["MonitorType"] !== null) {
            $this->MonitorType = $param["MonitorType"];
        }
    }
}
