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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListTopBotData请求参数结构体
 *
 * @method integer getTopCount() 获取获取Top量，取值范围[1-10]
 * @method void setTopCount(integer $TopCount) 设置获取Top量，取值范围[1-10]
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method string getMetric() 获取session表示查询BOT会话的Top信息
ip表示查询BOT客户端IP的Top信息

不填代表获取会话信息
 * @method void setMetric(string $Metric) 设置session表示查询BOT会话的Top信息
ip表示查询BOT客户端IP的Top信息

不填代表获取会话信息
 * @method string getDomain() 获取域名，仅当Metric=ip时有效，不填写表示使用Domains参数
 * @method void setDomain(string $Domain) 设置域名，仅当Metric=ip时有效，不填写表示使用Domains参数
 * @method array getDomains() 获取域名，仅当Metric=ip，并且Domain为空时有效，不填写表示获取AppID信息
 * @method void setDomains(array $Domains) 设置域名，仅当Metric=ip，并且Domain为空时有效，不填写表示获取AppID信息
 */
class ListTopBotDataRequest extends AbstractModel
{
    /**
     * @var integer 获取Top量，取值范围[1-10]
     */
    public $TopCount;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var string session表示查询BOT会话的Top信息
ip表示查询BOT客户端IP的Top信息

不填代表获取会话信息
     */
    public $Metric;

    /**
     * @var string 域名，仅当Metric=ip时有效，不填写表示使用Domains参数
     */
    public $Domain;

    /**
     * @var array 域名，仅当Metric=ip，并且Domain为空时有效，不填写表示获取AppID信息
     */
    public $Domains;

    /**
     * @param integer $TopCount 获取Top量，取值范围[1-10]
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param string $Metric session表示查询BOT会话的Top信息
ip表示查询BOT客户端IP的Top信息

不填代表获取会话信息
     * @param string $Domain 域名，仅当Metric=ip时有效，不填写表示使用Domains参数
     * @param array $Domains 域名，仅当Metric=ip，并且Domain为空时有效，不填写表示获取AppID信息
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
        if (array_key_exists("TopCount",$param) and $param["TopCount"] !== null) {
            $this->TopCount = $param["TopCount"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }
    }
}
