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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateExtension请求参数结构体
 *
 * @method integer getSdkAppId() 获取TCCC 实例应用 ID
 * @method void setSdkAppId(integer $SdkAppId) 设置TCCC 实例应用 ID
 * @method string getExtensionId() 获取分机号
 * @method void setExtensionId(string $ExtensionId) 设置分机号
 * @method string getExtensionName() 获取分机名称
 * @method void setExtensionName(string $ExtensionName) 设置分机名称
 */
class CreateExtensionRequest extends AbstractModel
{
    /**
     * @var integer TCCC 实例应用 ID
     */
    public $SdkAppId;

    /**
     * @var string 分机号
     */
    public $ExtensionId;

    /**
     * @var string 分机名称
     */
    public $ExtensionName;

    /**
     * @param integer $SdkAppId TCCC 实例应用 ID
     * @param string $ExtensionId 分机号
     * @param string $ExtensionName 分机名称
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("ExtensionId",$param) and $param["ExtensionId"] !== null) {
            $this->ExtensionId = $param["ExtensionId"];
        }

        if (array_key_exists("ExtensionName",$param) and $param["ExtensionName"] !== null) {
            $this->ExtensionName = $param["ExtensionName"];
        }
    }
}
