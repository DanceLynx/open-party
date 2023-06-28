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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RunJobs请求参数结构体
 *
 * @method array getRunJobDescriptions() 获取批量启动作业的描述信息
 * @method void setRunJobDescriptions(array $RunJobDescriptions) 设置批量启动作业的描述信息
 * @method string getWorkSpaceId() 获取工作空间 SerialId
 * @method void setWorkSpaceId(string $WorkSpaceId) 设置工作空间 SerialId
 */
class RunJobsRequest extends AbstractModel
{
    /**
     * @var array 批量启动作业的描述信息
     */
    public $RunJobDescriptions;

    /**
     * @var string 工作空间 SerialId
     */
    public $WorkSpaceId;

    /**
     * @param array $RunJobDescriptions 批量启动作业的描述信息
     * @param string $WorkSpaceId 工作空间 SerialId
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
        if (array_key_exists("RunJobDescriptions",$param) and $param["RunJobDescriptions"] !== null) {
            $this->RunJobDescriptions = [];
            foreach ($param["RunJobDescriptions"] as $key => $value){
                $obj = new RunJobDescription();
                $obj->deserialize($value);
                array_push($this->RunJobDescriptions, $obj);
            }
        }

        if (array_key_exists("WorkSpaceId",$param) and $param["WorkSpaceId"] !== null) {
            $this->WorkSpaceId = $param["WorkSpaceId"];
        }
    }
}
