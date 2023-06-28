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
 * GrantResourceAuthorization请求参数结构体
 *
 * @method string getPlatform() 获取平台 Id，指定访问的平台。关于平台概念，请参见文档 [平台](https://cloud.tencent.com/document/product/1156/43767)。
 * @method void setPlatform(string $Platform) 设置平台 Id，指定访问的平台。关于平台概念，请参见文档 [平台](https://cloud.tencent.com/document/product/1156/43767)。
 * @method Entity getOwner() 获取资源归属者，个人或者团队。
 * @method void setOwner(Entity $Owner) 设置资源归属者，个人或者团队。
 * @method array getResources() 获取被授权资源。
 * @method void setResources(array $Resources) 设置被授权资源。
 * @method array getAuthorizees() 获取被授权目标，个人或者团队。
 * @method void setAuthorizees(array $Authorizees) 设置被授权目标，个人或者团队。
 * @method array getPermissions() 获取详细授权值。 取值有：
<li>R：可读，可以浏览媒体，但不能使用该媒体文件（将其添加到 Project），或复制到自己的媒资库中</li>
<li>X：可用，可以使用该素材（将其添加到 Project），但不能将其复制到自己的媒资库中，意味着被授权者无法将该资源进一步扩散给其他个人或团队。</li>
<li>C：可复制，既可以使用该素材（将其添加到 Project），也可以将其复制到自己的媒资库中。</li>
<li>W：可修改、删除媒资。</li>
 * @method void setPermissions(array $Permissions) 设置详细授权值。 取值有：
<li>R：可读，可以浏览媒体，但不能使用该媒体文件（将其添加到 Project），或复制到自己的媒资库中</li>
<li>X：可用，可以使用该素材（将其添加到 Project），但不能将其复制到自己的媒资库中，意味着被授权者无法将该资源进一步扩散给其他个人或团队。</li>
<li>C：可复制，既可以使用该素材（将其添加到 Project），也可以将其复制到自己的媒资库中。</li>
<li>W：可修改、删除媒资。</li>
 * @method string getOperator() 获取操作者。如不填，默认为 `cmeid_system`，表示平台管理员操作，可以授权任意归属者的资源。如果指定操作者，则操作者必须对资源拥有写权限。
 * @method void setOperator(string $Operator) 设置操作者。如不填，默认为 `cmeid_system`，表示平台管理员操作，可以授权任意归属者的资源。如果指定操作者，则操作者必须对资源拥有写权限。
 */
class GrantResourceAuthorizationRequest extends AbstractModel
{
    /**
     * @var string 平台 Id，指定访问的平台。关于平台概念，请参见文档 [平台](https://cloud.tencent.com/document/product/1156/43767)。
     */
    public $Platform;

    /**
     * @var Entity 资源归属者，个人或者团队。
     */
    public $Owner;

    /**
     * @var array 被授权资源。
     */
    public $Resources;

    /**
     * @var array 被授权目标，个人或者团队。
     */
    public $Authorizees;

    /**
     * @var array 详细授权值。 取值有：
<li>R：可读，可以浏览媒体，但不能使用该媒体文件（将其添加到 Project），或复制到自己的媒资库中</li>
<li>X：可用，可以使用该素材（将其添加到 Project），但不能将其复制到自己的媒资库中，意味着被授权者无法将该资源进一步扩散给其他个人或团队。</li>
<li>C：可复制，既可以使用该素材（将其添加到 Project），也可以将其复制到自己的媒资库中。</li>
<li>W：可修改、删除媒资。</li>
     */
    public $Permissions;

    /**
     * @var string 操作者。如不填，默认为 `cmeid_system`，表示平台管理员操作，可以授权任意归属者的资源。如果指定操作者，则操作者必须对资源拥有写权限。
     */
    public $Operator;

    /**
     * @param string $Platform 平台 Id，指定访问的平台。关于平台概念，请参见文档 [平台](https://cloud.tencent.com/document/product/1156/43767)。
     * @param Entity $Owner 资源归属者，个人或者团队。
     * @param array $Resources 被授权资源。
     * @param array $Authorizees 被授权目标，个人或者团队。
     * @param array $Permissions 详细授权值。 取值有：
<li>R：可读，可以浏览媒体，但不能使用该媒体文件（将其添加到 Project），或复制到自己的媒资库中</li>
<li>X：可用，可以使用该素材（将其添加到 Project），但不能将其复制到自己的媒资库中，意味着被授权者无法将该资源进一步扩散给其他个人或团队。</li>
<li>C：可复制，既可以使用该素材（将其添加到 Project），也可以将其复制到自己的媒资库中。</li>
<li>W：可修改、删除媒资。</li>
     * @param string $Operator 操作者。如不填，默认为 `cmeid_system`，表示平台管理员操作，可以授权任意归属者的资源。如果指定操作者，则操作者必须对资源拥有写权限。
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

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = new Entity();
            $this->Owner->deserialize($param["Owner"]);
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = [];
            foreach ($param["Resources"] as $key => $value){
                $obj = new Resource();
                $obj->deserialize($value);
                array_push($this->Resources, $obj);
            }
        }

        if (array_key_exists("Authorizees",$param) and $param["Authorizees"] !== null) {
            $this->Authorizees = [];
            foreach ($param["Authorizees"] as $key => $value){
                $obj = new Entity();
                $obj->deserialize($value);
                array_push($this->Authorizees, $obj);
            }
        }

        if (array_key_exists("Permissions",$param) and $param["Permissions"] !== null) {
            $this->Permissions = $param["Permissions"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
