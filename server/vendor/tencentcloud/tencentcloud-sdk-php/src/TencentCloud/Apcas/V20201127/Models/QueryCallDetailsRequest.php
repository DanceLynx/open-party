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
namespace TencentCloud\Apcas\V20201127\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryCallDetails请求参数结构体
 *
 * @method integer getType() 获取请求类型 1:人群特征洞察统计 2:购车意向预测统计
 * @method void setType(integer $Type) 设置请求类型 1:人群特征洞察统计 2:购车意向预测统计
 * @method integer getStartTime() 获取开始时间戳（毫秒）
 * @method void setStartTime(integer $StartTime) 设置开始时间戳（毫秒）
 * @method integer getEndTime() 获取结束时间戳（毫秒）
 * @method void setEndTime(integer $EndTime) 设置结束时间戳（毫秒）
 * @method integer getPageNumber() 获取页数
 * @method void setPageNumber(integer $PageNumber) 设置页数
 * @method integer getPageSize() 获取每页个数
 * @method void setPageSize(integer $PageSize) 设置每页个数
 */
class QueryCallDetailsRequest extends AbstractModel
{
    /**
     * @var integer 请求类型 1:人群特征洞察统计 2:购车意向预测统计
     */
    public $Type;

    /**
     * @var integer 开始时间戳（毫秒）
     */
    public $StartTime;

    /**
     * @var integer 结束时间戳（毫秒）
     */
    public $EndTime;

    /**
     * @var integer 页数
     */
    public $PageNumber;

    /**
     * @var integer 每页个数
     */
    public $PageSize;

    /**
     * @param integer $Type 请求类型 1:人群特征洞察统计 2:购车意向预测统计
     * @param integer $StartTime 开始时间戳（毫秒）
     * @param integer $EndTime 结束时间戳（毫秒）
     * @param integer $PageNumber 页数
     * @param integer $PageSize 每页个数
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
