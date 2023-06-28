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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务。
 *
 * @method string getRunGroupId() 获取任务批次ID。
 * @method void setRunGroupId(string $RunGroupId) 设置任务批次ID。
 * @method string getProjectId() 获取项目ID。
 * @method void setProjectId(string $ProjectId) 设置项目ID。
 * @method string getProjectName() 获取项目名称。
 * @method void setProjectName(string $ProjectName) 设置项目名称。
 * @method string getApplicationId() 获取应用ID。
 * @method void setApplicationId(string $ApplicationId) 设置应用ID。
 * @method string getApplicationName() 获取应用名称。
 * @method void setApplicationName(string $ApplicationName) 设置应用名称。
 * @method string getApplicationType() 获取应用类型。
 * @method void setApplicationType(string $ApplicationType) 设置应用类型。
 * @method string getEnvironmentId() 获取环境ID。
 * @method void setEnvironmentId(string $EnvironmentId) 设置环境ID。
 * @method string getEnvironmentName() 获取环境名称。
 * @method void setEnvironmentName(string $EnvironmentName) 设置环境名称。
 * @method string getTableId() 获取表格ID，单例运行为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableId(string $TableId) 设置表格ID，单例运行为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取任务名称。
 * @method void setName(string $Name) 设置任务名称。
 * @method string getDescription() 获取任务描述。
 * @method void setDescription(string $Description) 设置任务描述。
 * @method string getStatus() 获取任务状态。
 * @method void setStatus(string $Status) 设置任务状态。
 * @method string getInput() 获取任务输入。
 * @method void setInput(string $Input) 设置任务输入。
 * @method RunOption getOption() 获取运行选项。
 * @method void setOption(RunOption $Option) 设置运行选项。
 * @method integer getTotalRun() 获取任务总数量。
 * @method void setTotalRun(integer $TotalRun) 设置任务总数量。
 * @method array getRunStatusCounts() 获取各状态任务的数量。
 * @method void setRunStatusCounts(array $RunStatusCounts) 设置各状态任务的数量。
 * @method ExecutionTime getExecutionTime() 获取执行时间。
 * @method void setExecutionTime(ExecutionTime $ExecutionTime) 设置执行时间。
 * @method string getErrorMessage() 获取错误信息。
 * @method void setErrorMessage(string $ErrorMessage) 设置错误信息。
 * @method string getCreateTime() 获取创建时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
 * @method string getUpdateTime() 获取更新时间。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间。
 */
class RunGroup extends AbstractModel
{
    /**
     * @var string 任务批次ID。
     */
    public $RunGroupId;

    /**
     * @var string 项目ID。
     */
    public $ProjectId;

    /**
     * @var string 项目名称。
     */
    public $ProjectName;

    /**
     * @var string 应用ID。
     */
    public $ApplicationId;

    /**
     * @var string 应用名称。
     */
    public $ApplicationName;

    /**
     * @var string 应用类型。
     */
    public $ApplicationType;

    /**
     * @var string 环境ID。
     */
    public $EnvironmentId;

    /**
     * @var string 环境名称。
     */
    public $EnvironmentName;

    /**
     * @var string 表格ID，单例运行为空。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableId;

    /**
     * @var string 任务名称。
     */
    public $Name;

    /**
     * @var string 任务描述。
     */
    public $Description;

    /**
     * @var string 任务状态。
     */
    public $Status;

    /**
     * @var string 任务输入。
     */
    public $Input;

    /**
     * @var RunOption 运行选项。
     */
    public $Option;

    /**
     * @var integer 任务总数量。
     */
    public $TotalRun;

    /**
     * @var array 各状态任务的数量。
     */
    public $RunStatusCounts;

    /**
     * @var ExecutionTime 执行时间。
     */
    public $ExecutionTime;

    /**
     * @var string 错误信息。
     */
    public $ErrorMessage;

    /**
     * @var string 创建时间。
     */
    public $CreateTime;

    /**
     * @var string 更新时间。
     */
    public $UpdateTime;

    /**
     * @param string $RunGroupId 任务批次ID。
     * @param string $ProjectId 项目ID。
     * @param string $ProjectName 项目名称。
     * @param string $ApplicationId 应用ID。
     * @param string $ApplicationName 应用名称。
     * @param string $ApplicationType 应用类型。
     * @param string $EnvironmentId 环境ID。
     * @param string $EnvironmentName 环境名称。
     * @param string $TableId 表格ID，单例运行为空。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 任务名称。
     * @param string $Description 任务描述。
     * @param string $Status 任务状态。
     * @param string $Input 任务输入。
     * @param RunOption $Option 运行选项。
     * @param integer $TotalRun 任务总数量。
     * @param array $RunStatusCounts 各状态任务的数量。
     * @param ExecutionTime $ExecutionTime 执行时间。
     * @param string $ErrorMessage 错误信息。
     * @param string $CreateTime 创建时间。
     * @param string $UpdateTime 更新时间。
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
        if (array_key_exists("RunGroupId",$param) and $param["RunGroupId"] !== null) {
            $this->RunGroupId = $param["RunGroupId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("EnvironmentName",$param) and $param["EnvironmentName"] !== null) {
            $this->EnvironmentName = $param["EnvironmentName"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = $param["Input"];
        }

        if (array_key_exists("Option",$param) and $param["Option"] !== null) {
            $this->Option = new RunOption();
            $this->Option->deserialize($param["Option"]);
        }

        if (array_key_exists("TotalRun",$param) and $param["TotalRun"] !== null) {
            $this->TotalRun = $param["TotalRun"];
        }

        if (array_key_exists("RunStatusCounts",$param) and $param["RunStatusCounts"] !== null) {
            $this->RunStatusCounts = [];
            foreach ($param["RunStatusCounts"] as $key => $value){
                $obj = new RunStatusCount();
                $obj->deserialize($value);
                array_push($this->RunStatusCounts, $obj);
            }
        }

        if (array_key_exists("ExecutionTime",$param) and $param["ExecutionTime"] !== null) {
            $this->ExecutionTime = new ExecutionTime();
            $this->ExecutionTime->deserialize($param["ExecutionTime"]);
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
