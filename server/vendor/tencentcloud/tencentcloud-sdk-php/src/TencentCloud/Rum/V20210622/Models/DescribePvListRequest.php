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
 * DescribePvList请求参数结构体
 *
 * @method integer getProjectId() 获取ID
 * @method void setProjectId(integer $ProjectId) 设置ID
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getDimension() 获取获取day：d，   获取min则不填
 * @method void setDimension(string $Dimension) 设置获取day：d，   获取min则不填
 */
class DescribePvListRequest extends AbstractModel
{
    /**
     * @var integer ID
     */
    public $ProjectId;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 获取day：d，   获取min则不填
     */
    public $Dimension;

    /**
     * @param integer $ProjectId ID
     * @param string $EndTime 结束时间
     * @param string $StartTime 开始时间
     * @param string $Dimension 获取day：d，   获取min则不填
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Dimension",$param) and $param["Dimension"] !== null) {
            $this->Dimension = $param["Dimension"];
        }
    }
}
