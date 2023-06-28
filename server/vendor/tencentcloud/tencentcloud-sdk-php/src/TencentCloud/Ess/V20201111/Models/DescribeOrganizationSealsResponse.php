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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOrganizationSeals返回参数结构体
 *
 * @method integer getTotalCount() 获取在设置了SealId时返回0或1，没有设置时返回公司的总印章数量，可能比返回的印章数组数量多
 * @method void setTotalCount(integer $TotalCount) 设置在设置了SealId时返回0或1，没有设置时返回公司的总印章数量，可能比返回的印章数组数量多
 * @method array getSeals() 获取查询到的印章结果数组
 * @method void setSeals(array $Seals) 设置查询到的印章结果数组
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeOrganizationSealsResponse extends AbstractModel
{
    /**
     * @var integer 在设置了SealId时返回0或1，没有设置时返回公司的总印章数量，可能比返回的印章数组数量多
     */
    public $TotalCount;

    /**
     * @var array 查询到的印章结果数组
     */
    public $Seals;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 在设置了SealId时返回0或1，没有设置时返回公司的总印章数量，可能比返回的印章数组数量多
     * @param array $Seals 查询到的印章结果数组
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Seals",$param) and $param["Seals"] !== null) {
            $this->Seals = [];
            foreach ($param["Seals"] as $key => $value){
                $obj = new OccupiedSeal();
                $obj->deserialize($value);
                array_push($this->Seals, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
