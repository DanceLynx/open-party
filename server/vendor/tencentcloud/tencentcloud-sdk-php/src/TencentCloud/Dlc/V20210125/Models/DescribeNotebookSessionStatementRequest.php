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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNotebookSessionStatement请求参数结构体
 *
 * @method string getSessionId() 获取Session唯一标识
 * @method void setSessionId(string $SessionId) 设置Session唯一标识
 * @method string getStatementId() 获取Session Statement唯一标识
 * @method void setStatementId(string $StatementId) 设置Session Statement唯一标识
 * @method string getTaskId() 获取任务唯一标识
 * @method void setTaskId(string $TaskId) 设置任务唯一标识
 */
class DescribeNotebookSessionStatementRequest extends AbstractModel
{
    /**
     * @var string Session唯一标识
     */
    public $SessionId;

    /**
     * @var string Session Statement唯一标识
     */
    public $StatementId;

    /**
     * @var string 任务唯一标识
     */
    public $TaskId;

    /**
     * @param string $SessionId Session唯一标识
     * @param string $StatementId Session Statement唯一标识
     * @param string $TaskId 任务唯一标识
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
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("StatementId",$param) and $param["StatementId"] !== null) {
            $this->StatementId = $param["StatementId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}
