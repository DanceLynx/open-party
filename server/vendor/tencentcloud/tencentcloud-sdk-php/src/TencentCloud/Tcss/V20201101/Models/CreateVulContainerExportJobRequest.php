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
 * CreateVulContainerExportJob请求参数结构体
 *
 * @method string getPocID() 获取漏洞PocID
 * @method void setPocID(string $PocID) 设置漏洞PocID
 * @method integer getLimit() 获取需要返回的数量，默认为50000，最大值为50000
 * @method void setLimit(integer $Limit) 设置需要返回的数量，默认为50000，最大值为50000
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method array getFilters() 获取过滤条件。
<li>OnlyAffectedNewestImage- Bool- 是否必填：否 - 仅展示影响最新版本镜像的漏洞</li>
<li>ContainerID- string - 是否必填：否 - 容器ID</li>
<li>ContainerName- String -是否必填: 否 - 容器名称</li>
 * @method void setFilters(array $Filters) 设置过滤条件。
<li>OnlyAffectedNewestImage- Bool- 是否必填：否 - 仅展示影响最新版本镜像的漏洞</li>
<li>ContainerID- string - 是否必填：否 - 容器ID</li>
<li>ContainerName- String -是否必填: 否 - 容器名称</li>
 */
class CreateVulContainerExportJobRequest extends AbstractModel
{
    /**
     * @var string 漏洞PocID
     */
    public $PocID;

    /**
     * @var integer 需要返回的数量，默认为50000，最大值为50000
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var array 过滤条件。
<li>OnlyAffectedNewestImage- Bool- 是否必填：否 - 仅展示影响最新版本镜像的漏洞</li>
<li>ContainerID- string - 是否必填：否 - 容器ID</li>
<li>ContainerName- String -是否必填: 否 - 容器名称</li>
     */
    public $Filters;

    /**
     * @param string $PocID 漏洞PocID
     * @param integer $Limit 需要返回的数量，默认为50000，最大值为50000
     * @param integer $Offset 偏移量，默认为0。
     * @param array $Filters 过滤条件。
<li>OnlyAffectedNewestImage- Bool- 是否必填：否 - 仅展示影响最新版本镜像的漏洞</li>
<li>ContainerID- string - 是否必填：否 - 容器ID</li>
<li>ContainerName- String -是否必填: 否 - 容器名称</li>
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
        if (array_key_exists("PocID",$param) and $param["PocID"] !== null) {
            $this->PocID = $param["PocID"];
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
                $obj = new RunTimeFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
