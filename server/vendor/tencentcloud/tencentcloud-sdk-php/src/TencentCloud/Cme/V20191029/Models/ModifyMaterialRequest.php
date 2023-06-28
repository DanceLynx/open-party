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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyMaterial请求参数结构体
 *
 * @method string getPlatform() 获取平台 Id，指定访问的平台。关于平台概念，请参见文档 [平台](https://cloud.tencent.com/document/product/1156/43767)。
 * @method void setPlatform(string $Platform) 设置平台 Id，指定访问的平台。关于平台概念，请参见文档 [平台](https://cloud.tencent.com/document/product/1156/43767)。
 * @method string getMaterialId() 获取要修改的媒体 Id。
 * @method void setMaterialId(string $MaterialId) 设置要修改的媒体 Id。
 * @method Entity getOwner() 获取媒体归属者。
 * @method void setOwner(Entity $Owner) 设置媒体归属者。
 * @method string getName() 获取媒体名称，不能超过30个字符，不填则不修改。
 * @method void setName(string $Name) 设置媒体名称，不能超过30个字符，不填则不修改。
 * @method string getClassPath() 获取媒体分类路径，例如填写"/a/b"，则代表该媒体存储的路径为"/a/b"。若修改分类路径，则 Owner 字段必填。
 * @method void setClassPath(string $ClassPath) 设置媒体分类路径，例如填写"/a/b"，则代表该媒体存储的路径为"/a/b"。若修改分类路径，则 Owner 字段必填。
 * @method string getOperator() 获取操作者。如不填，默认为 `cmeid_system`，表示平台管理员操作，可以修改任意媒体的信息。如果指定操作者，则操作者必须对媒体有写权限。
 * @method void setOperator(string $Operator) 设置操作者。如不填，默认为 `cmeid_system`，表示平台管理员操作，可以修改任意媒体的信息。如果指定操作者，则操作者必须对媒体有写权限。
 */
class ModifyMaterialRequest extends AbstractModel
{
    /**
     * @var string 平台 Id，指定访问的平台。关于平台概念，请参见文档 [平台](https://cloud.tencent.com/document/product/1156/43767)。
     */
    public $Platform;

    /**
     * @var string 要修改的媒体 Id。
     */
    public $MaterialId;

    /**
     * @var Entity 媒体归属者。
     */
    public $Owner;

    /**
     * @var string 媒体名称，不能超过30个字符，不填则不修改。
     */
    public $Name;

    /**
     * @var string 媒体分类路径，例如填写"/a/b"，则代表该媒体存储的路径为"/a/b"。若修改分类路径，则 Owner 字段必填。
     */
    public $ClassPath;

    /**
     * @var string 操作者。如不填，默认为 `cmeid_system`，表示平台管理员操作，可以修改任意媒体的信息。如果指定操作者，则操作者必须对媒体有写权限。
     */
    public $Operator;

    /**
     * @param string $Platform 平台 Id，指定访问的平台。关于平台概念，请参见文档 [平台](https://cloud.tencent.com/document/product/1156/43767)。
     * @param string $MaterialId 要修改的媒体 Id。
     * @param Entity $Owner 媒体归属者。
     * @param string $Name 媒体名称，不能超过30个字符，不填则不修改。
     * @param string $ClassPath 媒体分类路径，例如填写"/a/b"，则代表该媒体存储的路径为"/a/b"。若修改分类路径，则 Owner 字段必填。
     * @param string $Operator 操作者。如不填，默认为 `cmeid_system`，表示平台管理员操作，可以修改任意媒体的信息。如果指定操作者，则操作者必须对媒体有写权限。
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
        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("MaterialId",$param) and $param["MaterialId"] !== null) {
            $this->MaterialId = $param["MaterialId"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = new Entity();
            $this->Owner->deserialize($param["Owner"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ClassPath",$param) and $param["ClassPath"] !== null) {
            $this->ClassPath = $param["ClassPath"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
