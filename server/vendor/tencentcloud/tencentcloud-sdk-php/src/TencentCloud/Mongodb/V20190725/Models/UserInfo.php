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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 账户基本信息
 *
 * @method string getUserName() 获取账号名。
 * @method void setUserName(string $UserName) 设置账号名。
 * @method array getAuthRole() 获取账号权限详情。
 * @method void setAuthRole(array $AuthRole) 设置账号权限详情。
 * @method string getCreateTime() 获取账号创建时间。
 * @method void setCreateTime(string $CreateTime) 设置账号创建时间。
 * @method string getUpdateTime() 获取账号更新时间。
 * @method void setUpdateTime(string $UpdateTime) 设置账号更新时间。
 * @method string getUserDesc() 获取备注信息。
 * @method void setUserDesc(string $UserDesc) 设置备注信息。
 */
class UserInfo extends AbstractModel
{
    /**
     * @var string 账号名。
     */
    public $UserName;

    /**
     * @var array 账号权限详情。
     */
    public $AuthRole;

    /**
     * @var string 账号创建时间。
     */
    public $CreateTime;

    /**
     * @var string 账号更新时间。
     */
    public $UpdateTime;

    /**
     * @var string 备注信息。
     */
    public $UserDesc;

    /**
     * @param string $UserName 账号名。
     * @param array $AuthRole 账号权限详情。
     * @param string $CreateTime 账号创建时间。
     * @param string $UpdateTime 账号更新时间。
     * @param string $UserDesc 备注信息。
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("AuthRole",$param) and $param["AuthRole"] !== null) {
            $this->AuthRole = [];
            foreach ($param["AuthRole"] as $key => $value){
                $obj = new Auth();
                $obj->deserialize($value);
                array_push($this->AuthRole, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("UserDesc",$param) and $param["UserDesc"] !== null) {
            $this->UserDesc = $param["UserDesc"];
        }
    }
}
