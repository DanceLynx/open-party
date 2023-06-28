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
namespace TencentCloud\Vm\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CancelTask请求参数结构体
 *
 * @method string getTaskId() 获取该字段表示创建视频审核任务后返回的任务ID（在Results参数中），用于标识需要取消的审核任务。
 * @method void setTaskId(string $TaskId) 设置该字段表示创建视频审核任务后返回的任务ID（在Results参数中），用于标识需要取消的审核任务。
 */
class CancelTaskRequest extends AbstractModel
{
    /**
     * @var string 该字段表示创建视频审核任务后返回的任务ID（在Results参数中），用于标识需要取消的审核任务。
     */
    public $TaskId;

    /**
     * @param string $TaskId 该字段表示创建视频审核任务后返回的任务ID（在Results参数中），用于标识需要取消的审核任务。
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
    }
}
