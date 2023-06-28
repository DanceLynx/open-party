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
namespace TencentCloud\Tic\V20201117\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateStackVersion请求参数结构体
 *
 * @method string getVersionId() 获取待更新的版本ID
 * @method void setVersionId(string $VersionId) 设置待更新的版本ID
 * @method string getTemplateUrl() 获取模板 URL，⽬前仅限 COS URL, ⽂件为zip压缩格式
 * @method void setTemplateUrl(string $TemplateUrl) 设置模板 URL，⽬前仅限 COS URL, ⽂件为zip压缩格式
 * @method string getVersionName() 获取版本名称，不得超过60个字符
 * @method void setVersionName(string $VersionName) 设置版本名称，不得超过60个字符
 * @method string getDescription() 获取版本描述，不得超过200个字符
 * @method void setDescription(string $Description) 设置版本描述，不得超过200个字符
 */
class UpdateStackVersionRequest extends AbstractModel
{
    /**
     * @var string 待更新的版本ID
     */
    public $VersionId;

    /**
     * @var string 模板 URL，⽬前仅限 COS URL, ⽂件为zip压缩格式
     */
    public $TemplateUrl;

    /**
     * @var string 版本名称，不得超过60个字符
     */
    public $VersionName;

    /**
     * @var string 版本描述，不得超过200个字符
     */
    public $Description;

    /**
     * @param string $VersionId 待更新的版本ID
     * @param string $TemplateUrl 模板 URL，⽬前仅限 COS URL, ⽂件为zip压缩格式
     * @param string $VersionName 版本名称，不得超过60个字符
     * @param string $Description 版本描述，不得超过200个字符
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
        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("TemplateUrl",$param) and $param["TemplateUrl"] !== null) {
            $this->TemplateUrl = $param["TemplateUrl"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
