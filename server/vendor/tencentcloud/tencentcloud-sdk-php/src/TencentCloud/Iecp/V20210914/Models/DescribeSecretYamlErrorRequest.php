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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecretYamlError请求参数结构体
 *
 * @method string getYaml() 获取yaml文件
 * @method void setYaml(string $Yaml) 设置yaml文件
 */
class DescribeSecretYamlErrorRequest extends AbstractModel
{
    /**
     * @var string yaml文件
     */
    public $Yaml;

    /**
     * @param string $Yaml yaml文件
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
        if (array_key_exists("Yaml",$param) and $param["Yaml"] !== null) {
            $this->Yaml = $param["Yaml"];
        }
    }
}
