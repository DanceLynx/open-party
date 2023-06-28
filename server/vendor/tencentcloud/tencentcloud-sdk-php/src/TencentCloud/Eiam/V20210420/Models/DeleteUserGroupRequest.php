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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteUserGroup请求参数结构体
 *
 * @method string getUserGroupId() 获取用户组ID，是用户组的全局唯一标识。
 * @method void setUserGroupId(string $UserGroupId) 设置用户组ID，是用户组的全局唯一标识。
 */
class DeleteUserGroupRequest extends AbstractModel
{
    /**
     * @var string 用户组ID，是用户组的全局唯一标识。
     */
    public $UserGroupId;

    /**
     * @param string $UserGroupId 用户组ID，是用户组的全局唯一标识。
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
        if (array_key_exists("UserGroupId",$param) and $param["UserGroupId"] !== null) {
            $this->UserGroupId = $param["UserGroupId"];
        }
    }
}
