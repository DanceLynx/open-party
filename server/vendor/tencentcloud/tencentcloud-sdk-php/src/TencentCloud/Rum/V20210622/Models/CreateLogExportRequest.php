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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLogExport请求参数结构体
 *
 * @method integer getID() 获取项目ID
 * @method void setID(integer $ID) 设置项目ID
 * @method string getStartTime() 获取日志导出起始时间
 * @method void setStartTime(string $StartTime) 设置日志导出起始时间
 * @method string getEndTime() 获取日志导出结束时间
 * @method void setEndTime(string $EndTime) 设置日志导出结束时间
 * @method string getQuery() 获取日志导出检索语句
 * @method void setQuery(string $Query) 设置日志导出检索语句
 * @method integer getCount() 获取日志导出数量, 最大值1000万
 * @method void setCount(integer $Count) 设置日志导出数量, 最大值1000万
 * @method string getOrder() 获取日志导出时间排序。desc，asc，默认为desc
 * @method void setOrder(string $Order) 设置日志导出时间排序。desc，asc，默认为desc
 * @method string getFormat() 获取日志导出数据格式。json，csv，默认为json
 * @method void setFormat(string $Format) 设置日志导出数据格式。json，csv，默认为json
 */
class CreateLogExportRequest extends AbstractModel
{
    /**
     * @var integer 项目ID
     */
    public $ID;

    /**
     * @var string 日志导出起始时间
     */
    public $StartTime;

    /**
     * @var string 日志导出结束时间
     */
    public $EndTime;

    /**
     * @var string 日志导出检索语句
     */
    public $Query;

    /**
     * @var integer 日志导出数量, 最大值1000万
     */
    public $Count;

    /**
     * @var string 日志导出时间排序。desc，asc，默认为desc
     */
    public $Order;

    /**
     * @var string 日志导出数据格式。json，csv，默认为json
     */
    public $Format;

    /**
     * @param integer $ID 项目ID
     * @param string $StartTime 日志导出起始时间
     * @param string $EndTime 日志导出结束时间
     * @param string $Query 日志导出检索语句
     * @param integer $Count 日志导出数量, 最大值1000万
     * @param string $Order 日志导出时间排序。desc，asc，默认为desc
     * @param string $Format 日志导出数据格式。json，csv，默认为json
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }
    }
}
