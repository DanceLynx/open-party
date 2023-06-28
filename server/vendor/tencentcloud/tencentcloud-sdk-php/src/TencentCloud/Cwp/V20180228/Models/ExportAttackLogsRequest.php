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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportAttackLogs请求参数结构体
 *
 * @method array getFilters() 获取过滤条件。
<li>HttpMethod - String - 是否必填：否 - 攻击方法(POST|GET)</li>
<li>DateRange - String - 是否必填：否 - 时间范围(存储最近3个月的数据)，如最近一个月["2019-11-17", "2019-12-17"]</li>
<li>VulType - String 威胁类型 - 是否必填: 否</li>
<li>SrcIp - String 攻击源IP - 是否必填: 否</li>
<li>DstIp - String 攻击目标IP - 是否必填: 否</li>
<li>SrcPort - String 攻击源端口 - 是否必填: 否</li>
<li>DstPort - String 攻击目标端口 - 是否必填: 否</li>
 * @method void setFilters(array $Filters) 设置过滤条件。
<li>HttpMethod - String - 是否必填：否 - 攻击方法(POST|GET)</li>
<li>DateRange - String - 是否必填：否 - 时间范围(存储最近3个月的数据)，如最近一个月["2019-11-17", "2019-12-17"]</li>
<li>VulType - String 威胁类型 - 是否必填: 否</li>
<li>SrcIp - String 攻击源IP - 是否必填: 否</li>
<li>DstIp - String 攻击目标IP - 是否必填: 否</li>
<li>SrcPort - String 攻击源端口 - 是否必填: 否</li>
<li>DstPort - String 攻击目标端口 - 是否必填: 否</li>
 * @method string getUuid() 获取主机安全客户端ID
 * @method void setUuid(string $Uuid) 设置主机安全客户端ID
 * @method string getQuuid() 获取云主机机器ID
 * @method void setQuuid(string $Quuid) 设置云主机机器ID
 */
class ExportAttackLogsRequest extends AbstractModel
{
    /**
     * @var array 过滤条件。
<li>HttpMethod - String - 是否必填：否 - 攻击方法(POST|GET)</li>
<li>DateRange - String - 是否必填：否 - 时间范围(存储最近3个月的数据)，如最近一个月["2019-11-17", "2019-12-17"]</li>
<li>VulType - String 威胁类型 - 是否必填: 否</li>
<li>SrcIp - String 攻击源IP - 是否必填: 否</li>
<li>DstIp - String 攻击目标IP - 是否必填: 否</li>
<li>SrcPort - String 攻击源端口 - 是否必填: 否</li>
<li>DstPort - String 攻击目标端口 - 是否必填: 否</li>
     */
    public $Filters;

    /**
     * @var string 主机安全客户端ID
     */
    public $Uuid;

    /**
     * @var string 云主机机器ID
     */
    public $Quuid;

    /**
     * @param array $Filters 过滤条件。
<li>HttpMethod - String - 是否必填：否 - 攻击方法(POST|GET)</li>
<li>DateRange - String - 是否必填：否 - 时间范围(存储最近3个月的数据)，如最近一个月["2019-11-17", "2019-12-17"]</li>
<li>VulType - String 威胁类型 - 是否必填: 否</li>
<li>SrcIp - String 攻击源IP - 是否必填: 否</li>
<li>DstIp - String 攻击目标IP - 是否必填: 否</li>
<li>SrcPort - String 攻击源端口 - 是否必填: 否</li>
<li>DstPort - String 攻击目标端口 - 是否必填: 否</li>
     * @param string $Uuid 主机安全客户端ID
     * @param string $Quuid 云主机机器ID
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }
    }
}
