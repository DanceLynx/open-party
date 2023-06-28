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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAssetPortList请求参数结构体
 *
 * @method integer getLimit() 获取需要返回的数量，默认为10，最大值为100
 * @method void setLimit(integer $Limit) 设置需要返回的数量，默认为10，最大值为100
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method array getFilters() 获取过滤条件。
<li>All - String - 是否必填：否 - 模糊查询可选字段</li>
<li>RunAs - String - 是否必填：否 - 运行用户筛选，</li>
<li>ContainerID - String - 是否必填：否 - 容器id</li>
<li>HostID- String - 是否必填：是 - 主机id</li>
<li>HostIP- string - 是否必填：否 - 主机ip搜索</li>
<li>ProcessName- string - 是否必填：否 - 进程名搜索</li>
 * @method void setFilters(array $Filters) 设置过滤条件。
<li>All - String - 是否必填：否 - 模糊查询可选字段</li>
<li>RunAs - String - 是否必填：否 - 运行用户筛选，</li>
<li>ContainerID - String - 是否必填：否 - 容器id</li>
<li>HostID- String - 是否必填：是 - 主机id</li>
<li>HostIP- string - 是否必填：否 - 主机ip搜索</li>
<li>ProcessName- string - 是否必填：否 - 进程名搜索</li>
 */
class DescribeAssetPortListRequest extends AbstractModel
{
    /**
     * @var integer 需要返回的数量，默认为10，最大值为100
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var array 过滤条件。
<li>All - String - 是否必填：否 - 模糊查询可选字段</li>
<li>RunAs - String - 是否必填：否 - 运行用户筛选，</li>
<li>ContainerID - String - 是否必填：否 - 容器id</li>
<li>HostID- String - 是否必填：是 - 主机id</li>
<li>HostIP- string - 是否必填：否 - 主机ip搜索</li>
<li>ProcessName- string - 是否必填：否 - 进程名搜索</li>
     */
    public $Filters;

    /**
     * @param integer $Limit 需要返回的数量，默认为10，最大值为100
     * @param integer $Offset 偏移量，默认为0。
     * @param array $Filters 过滤条件。
<li>All - String - 是否必填：否 - 模糊查询可选字段</li>
<li>RunAs - String - 是否必填：否 - 运行用户筛选，</li>
<li>ContainerID - String - 是否必填：否 - 容器id</li>
<li>HostID- String - 是否必填：是 - 主机id</li>
<li>HostIP- string - 是否必填：否 - 主机ip搜索</li>
<li>ProcessName- string - 是否必填：否 - 进程名搜索</li>
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AssetFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
