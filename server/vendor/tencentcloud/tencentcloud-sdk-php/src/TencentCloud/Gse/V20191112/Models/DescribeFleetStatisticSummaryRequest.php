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
 * DescribeFleetStatisticSummary请求参数结构体
 *
 * @method string getFleetId() 获取服务器舰队ID
 * @method void setFleetId(string $FleetId) 设置服务器舰队ID
 * @method string getBeginTime() 获取查询开始时间，时间格式: YYYY-MM-DD hh:mm:ss
 * @method void setBeginTime(string $BeginTime) 设置查询开始时间，时间格式: YYYY-MM-DD hh:mm:ss
 * @method string getEndTime() 获取查询结束时间，时间格式: YYYY-MM-DD hh:mm:ss
 * @method void setEndTime(string $EndTime) 设置查询结束时间，时间格式: YYYY-MM-DD hh:mm:ss
 */
class DescribeFleetStatisticSummaryRequest extends AbstractModel
{
    /**
     * @var string 服务器舰队ID
     */
    public $FleetId;

    /**
     * @var string 查询开始时间，时间格式: YYYY-MM-DD hh:mm:ss
     */
    public $BeginTime;

    /**
     * @var string 查询结束时间，时间格式: YYYY-MM-DD hh:mm:ss
     */
    public $EndTime;

    /**
     * @param string $FleetId 服务器舰队ID
     * @param string $BeginTime 查询开始时间，时间格式: YYYY-MM-DD hh:mm:ss
     * @param string $EndTime 查询结束时间，时间格式: YYYY-MM-DD hh:mm:ss
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

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
