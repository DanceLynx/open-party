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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTask请求参数结构体
 *
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method string getTaskType() 获取任务类型
 * @method void setTaskType(string $TaskType) 设置任务类型
 * @method string getTaskContent() 获取任务内容
 * @method void setTaskContent(string $TaskContent) 设置任务内容
 * @method string getExecuteType() 获取任务执行类型
 * @method void setExecuteType(string $ExecuteType) 设置任务执行类型
 * @method TaskRule getTaskRule() 获取触发规则
 * @method void setTaskRule(TaskRule $TaskRule) 设置触发规则
 * @method integer getTimeOut() 获取超时时间，单位 ms
 * @method void setTimeOut(integer $TimeOut) 设置超时时间，单位 ms
 * @method string getGroupId() 获取分组ID
 * @method void setGroupId(string $GroupId) 设置分组ID
 * @method integer getShardCount() 获取分片数量
 * @method void setShardCount(integer $ShardCount) 设置分片数量
 * @method array getShardArguments() 获取分片参数
 * @method void setShardArguments(array $ShardArguments) 设置分片参数
 * @method AdvanceSettings getAdvanceSettings() 获取高级设置
 * @method void setAdvanceSettings(AdvanceSettings $AdvanceSettings) 设置高级设置
 * @method string getSuccessOperator() 获取判断任务成功的操作符 GT/GTE
 * @method void setSuccessOperator(string $SuccessOperator) 设置判断任务成功的操作符 GT/GTE
 * @method integer getSuccessRatio() 获取判断任务成功率的阈值
 * @method void setSuccessRatio(integer $SuccessRatio) 设置判断任务成功率的阈值
 * @method integer getRetryCount() 获取重试次数
 * @method void setRetryCount(integer $RetryCount) 设置重试次数
 * @method integer getRetryInterval() 获取重试间隔
 * @method void setRetryInterval(integer $RetryInterval) 设置重试间隔
 * @method string getTaskArgument() 获取任务参数，长度限制10000个字符
 * @method void setTaskArgument(string $TaskArgument) 设置任务参数，长度限制10000个字符
 * @method array getProgramIdList() 获取无
 * @method void setProgramIdList(array $ProgramIdList) 设置无
 */
class ModifyTaskRequest extends AbstractModel
{
    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var string 任务类型
     */
    public $TaskType;

    /**
     * @var string 任务内容
     */
    public $TaskContent;

    /**
     * @var string 任务执行类型
     */
    public $ExecuteType;

    /**
     * @var TaskRule 触发规则
     */
    public $TaskRule;

    /**
     * @var integer 超时时间，单位 ms
     */
    public $TimeOut;

    /**
     * @var string 分组ID
     */
    public $GroupId;

    /**
     * @var integer 分片数量
     */
    public $ShardCount;

    /**
     * @var array 分片参数
     */
    public $ShardArguments;

    /**
     * @var AdvanceSettings 高级设置
     */
    public $AdvanceSettings;

    /**
     * @var string 判断任务成功的操作符 GT/GTE
     */
    public $SuccessOperator;

    /**
     * @var integer 判断任务成功率的阈值
     */
    public $SuccessRatio;

    /**
     * @var integer 重试次数
     */
    public $RetryCount;

    /**
     * @var integer 重试间隔
     */
    public $RetryInterval;

    /**
     * @var string 任务参数，长度限制10000个字符
     */
    public $TaskArgument;

    /**
     * @var array 无
     */
    public $ProgramIdList;

    /**
     * @param string $TaskId 任务ID
     * @param string $TaskName 任务名称
     * @param string $TaskType 任务类型
     * @param string $TaskContent 任务内容
     * @param string $ExecuteType 任务执行类型
     * @param TaskRule $TaskRule 触发规则
     * @param integer $TimeOut 超时时间，单位 ms
     * @param string $GroupId 分组ID
     * @param integer $ShardCount 分片数量
     * @param array $ShardArguments 分片参数
     * @param AdvanceSettings $AdvanceSettings 高级设置
     * @param string $SuccessOperator 判断任务成功的操作符 GT/GTE
     * @param integer $SuccessRatio 判断任务成功率的阈值
     * @param integer $RetryCount 重试次数
     * @param integer $RetryInterval 重试间隔
     * @param string $TaskArgument 任务参数，长度限制10000个字符
     * @param array $ProgramIdList 无
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

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TaskContent",$param) and $param["TaskContent"] !== null) {
            $this->TaskContent = $param["TaskContent"];
        }

        if (array_key_exists("ExecuteType",$param) and $param["ExecuteType"] !== null) {
            $this->ExecuteType = $param["ExecuteType"];
        }

        if (array_key_exists("TaskRule",$param) and $param["TaskRule"] !== null) {
            $this->TaskRule = new TaskRule();
            $this->TaskRule->deserialize($param["TaskRule"]);
        }

        if (array_key_exists("TimeOut",$param) and $param["TimeOut"] !== null) {
            $this->TimeOut = $param["TimeOut"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ShardCount",$param) and $param["ShardCount"] !== null) {
            $this->ShardCount = $param["ShardCount"];
        }

        if (array_key_exists("ShardArguments",$param) and $param["ShardArguments"] !== null) {
            $this->ShardArguments = [];
            foreach ($param["ShardArguments"] as $key => $value){
                $obj = new ShardArgument();
                $obj->deserialize($value);
                array_push($this->ShardArguments, $obj);
            }
        }

        if (array_key_exists("AdvanceSettings",$param) and $param["AdvanceSettings"] !== null) {
            $this->AdvanceSettings = new AdvanceSettings();
            $this->AdvanceSettings->deserialize($param["AdvanceSettings"]);
        }

        if (array_key_exists("SuccessOperator",$param) and $param["SuccessOperator"] !== null) {
            $this->SuccessOperator = $param["SuccessOperator"];
        }

        if (array_key_exists("SuccessRatio",$param) and $param["SuccessRatio"] !== null) {
            $this->SuccessRatio = $param["SuccessRatio"];
        }

        if (array_key_exists("RetryCount",$param) and $param["RetryCount"] !== null) {
            $this->RetryCount = $param["RetryCount"];
        }

        if (array_key_exists("RetryInterval",$param) and $param["RetryInterval"] !== null) {
            $this->RetryInterval = $param["RetryInterval"];
        }

        if (array_key_exists("TaskArgument",$param) and $param["TaskArgument"] !== null) {
            $this->TaskArgument = $param["TaskArgument"];
        }

        if (array_key_exists("ProgramIdList",$param) and $param["ProgramIdList"] !== null) {
            $this->ProgramIdList = $param["ProgramIdList"];
        }
    }
}
