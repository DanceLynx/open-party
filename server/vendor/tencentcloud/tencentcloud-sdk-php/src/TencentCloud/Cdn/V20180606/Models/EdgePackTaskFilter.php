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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 动态打包任务过滤器
 *
 * @method string getName() 获取过滤字段名
apk: apk名称
status: 母包处理进度 done, failed, processing
 * @method void setName(string $Name) 设置过滤字段名
apk: apk名称
status: 母包处理进度 done, failed, processing
 * @method array getValue() 获取过滤字段值
 * @method void setValue(array $Value) 设置过滤字段值
 * @method boolean getFuzzy() 获取是否启用模糊查询，仅支持过滤字段名为 apk。
模糊查询时，Value长度最大为1。
 * @method void setFuzzy(boolean $Fuzzy) 设置是否启用模糊查询，仅支持过滤字段名为 apk。
模糊查询时，Value长度最大为1。
 */
class EdgePackTaskFilter extends AbstractModel
{
    /**
     * @var string 过滤字段名
apk: apk名称
status: 母包处理进度 done, failed, processing
     */
    public $Name;

    /**
     * @var array 过滤字段值
     */
    public $Value;

    /**
     * @var boolean 是否启用模糊查询，仅支持过滤字段名为 apk。
模糊查询时，Value长度最大为1。
     */
    public $Fuzzy;

    /**
     * @param string $Name 过滤字段名
apk: apk名称
status: 母包处理进度 done, failed, processing
     * @param array $Value 过滤字段值
     * @param boolean $Fuzzy 是否启用模糊查询，仅支持过滤字段名为 apk。
模糊查询时，Value长度最大为1。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Fuzzy",$param) and $param["Fuzzy"] !== null) {
            $this->Fuzzy = $param["Fuzzy"];
        }
    }
}
