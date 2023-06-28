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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyModuleConfig请求参数结构体
 *
 * @method string getModuleId() 获取模块ID。
 * @method void setModuleId(string $ModuleId) 设置模块ID。
 * @method string getInstanceType() 获取机型ID。
 * @method void setInstanceType(string $InstanceType) 设置机型ID。
 * @method integer getDefaultDataDiskSize() 获取默认数据盘大小，单位：G。范围不得超过数据盘范围大小，详看DescribeConfig。
 * @method void setDefaultDataDiskSize(integer $DefaultDataDiskSize) 设置默认数据盘大小，单位：G。范围不得超过数据盘范围大小，详看DescribeConfig。
 * @method integer getDefaultSystemDiskSize() 获取默认系统盘大小，单位：G。范围不得超过数据盘范围大小，详看DescribeConfig。
 * @method void setDefaultSystemDiskSize(integer $DefaultSystemDiskSize) 设置默认系统盘大小，单位：G。范围不得超过数据盘范围大小，详看DescribeConfig。
 * @method SystemDisk getSystemDisk() 获取系统盘
 * @method void setSystemDisk(SystemDisk $SystemDisk) 设置系统盘
 * @method array getDataDisks() 获取数据盘
 * @method void setDataDisks(array $DataDisks) 设置数据盘
 */
class ModifyModuleConfigRequest extends AbstractModel
{
    /**
     * @var string 模块ID。
     */
    public $ModuleId;

    /**
     * @var string 机型ID。
     */
    public $InstanceType;

    /**
     * @var integer 默认数据盘大小，单位：G。范围不得超过数据盘范围大小，详看DescribeConfig。
     */
    public $DefaultDataDiskSize;

    /**
     * @var integer 默认系统盘大小，单位：G。范围不得超过数据盘范围大小，详看DescribeConfig。
     */
    public $DefaultSystemDiskSize;

    /**
     * @var SystemDisk 系统盘
     */
    public $SystemDisk;

    /**
     * @var array 数据盘
     */
    public $DataDisks;

    /**
     * @param string $ModuleId 模块ID。
     * @param string $InstanceType 机型ID。
     * @param integer $DefaultDataDiskSize 默认数据盘大小，单位：G。范围不得超过数据盘范围大小，详看DescribeConfig。
     * @param integer $DefaultSystemDiskSize 默认系统盘大小，单位：G。范围不得超过数据盘范围大小，详看DescribeConfig。
     * @param SystemDisk $SystemDisk 系统盘
     * @param array $DataDisks 数据盘
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
        if (array_key_exists("ModuleId",$param) and $param["ModuleId"] !== null) {
            $this->ModuleId = $param["ModuleId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("DefaultDataDiskSize",$param) and $param["DefaultDataDiskSize"] !== null) {
            $this->DefaultDataDiskSize = $param["DefaultDataDiskSize"];
        }

        if (array_key_exists("DefaultSystemDiskSize",$param) and $param["DefaultSystemDiskSize"] !== null) {
            $this->DefaultSystemDiskSize = $param["DefaultSystemDiskSize"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new SystemDisk();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("DataDisks",$param) and $param["DataDisks"] !== null) {
            $this->DataDisks = [];
            foreach ($param["DataDisks"] as $key => $value){
                $obj = new DataDisk();
                $obj->deserialize($value);
                array_push($this->DataDisks, $obj);
            }
        }
    }
}
