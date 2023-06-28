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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskAlarmRegulations请求参数结构体
 *
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method integer getTaskType() 获取任务类型(201代表实时任务，202代表离线任务)
 * @method void setTaskType(integer $TaskType) 设置任务类型(201代表实时任务，202代表离线任务)
 * @method integer getPageNumber() 获取当前页
 * @method void setPageNumber(integer $PageNumber) 设置当前页
 * @method integer getPageSize() 获取每页记录数
 * @method void setPageSize(integer $PageSize) 设置每页记录数
 * @method array getFilters() 获取过滤条件(name有RegularStatus、AlarmLevel、AlarmIndicator、RegularName)
 * @method void setFilters(array $Filters) 设置过滤条件(name有RegularStatus、AlarmLevel、AlarmIndicator、RegularName)
 * @method array getOrderFields() 获取排序条件(RegularId)
 * @method void setOrderFields(array $OrderFields) 设置排序条件(RegularId)
 */
class DescribeTaskAlarmRegulationsRequest extends AbstractModel
{
    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var integer 任务类型(201代表实时任务，202代表离线任务)
     */
    public $TaskType;

    /**
     * @var integer 当前页
     */
    public $PageNumber;

    /**
     * @var integer 每页记录数
     */
    public $PageSize;

    /**
     * @var array 过滤条件(name有RegularStatus、AlarmLevel、AlarmIndicator、RegularName)
     */
    public $Filters;

    /**
     * @var array 排序条件(RegularId)
     */
    public $OrderFields;

    /**
     * @param string $TaskId 任务ID
     * @param string $ProjectId 项目ID
     * @param integer $TaskType 任务类型(201代表实时任务，202代表离线任务)
     * @param integer $PageNumber 当前页
     * @param integer $PageSize 每页记录数
     * @param array $Filters 过滤条件(name有RegularStatus、AlarmLevel、AlarmIndicator、RegularName)
     * @param array $OrderFields 排序条件(RegularId)
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("OrderFields",$param) and $param["OrderFields"] !== null) {
            $this->OrderFields = [];
            foreach ($param["OrderFields"] as $key => $value){
                $obj = new OrderField();
                $obj->deserialize($value);
                array_push($this->OrderFields, $obj);
            }
        }
    }
}
