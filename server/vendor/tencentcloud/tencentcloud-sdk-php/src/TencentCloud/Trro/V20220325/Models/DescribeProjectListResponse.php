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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProjectList返回参数结构体
 *
 * @method array getProjects() 获取项目信息数组
 * @method void setProjects(array $Projects) 设置项目信息数组
 * @method integer getTotal() 获取项目总数
 * @method void setTotal(integer $Total) 设置项目总数
 * @method integer getNum() 获取本次返回的项目数
 * @method void setNum(integer $Num) 设置本次返回的项目数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeProjectListResponse extends AbstractModel
{
    /**
     * @var array 项目信息数组
     */
    public $Projects;

    /**
     * @var integer 项目总数
     */
    public $Total;

    /**
     * @var integer 本次返回的项目数
     */
    public $Num;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Projects 项目信息数组
     * @param integer $Total 项目总数
     * @param integer $Num 本次返回的项目数
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
        if (array_key_exists("Projects",$param) and $param["Projects"] !== null) {
            $this->Projects = [];
            foreach ($param["Projects"] as $key => $value){
                $obj = new ProjectInfo();
                $obj->deserialize($value);
                array_push($this->Projects, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
