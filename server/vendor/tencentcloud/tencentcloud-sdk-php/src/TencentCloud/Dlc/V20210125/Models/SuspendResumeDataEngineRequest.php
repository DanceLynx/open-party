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
 * SuspendResumeDataEngine请求参数结构体
 *
 * @method string getDataEngineName() 获取虚拟集群名称
 * @method void setDataEngineName(string $DataEngineName) 设置虚拟集群名称
 * @method string getOperate() 获取操作类型 suspend/resume
 * @method void setOperate(string $Operate) 设置操作类型 suspend/resume
 */
class SuspendResumeDataEngineRequest extends AbstractModel
{
    /**
     * @var string 虚拟集群名称
     */
    public $DataEngineName;

    /**
     * @var string 操作类型 suspend/resume
     */
    public $Operate;

    /**
     * @param string $DataEngineName 虚拟集群名称
     * @param string $Operate 操作类型 suspend/resume
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
        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("Operate",$param) and $param["Operate"] !== null) {
            $this->Operate = $param["Operate"];
        }
    }
}
