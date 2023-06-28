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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RevokeAccountPrivileges请求参数结构体
 *
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method InputAccount getAccount() 获取账号信息
 * @method void setAccount(InputAccount $Account) 设置账号信息
 * @method array getDbTablePrivileges() 获取数据库表权限数组
 * @method void setDbTablePrivileges(array $DbTablePrivileges) 设置数据库表权限数组
 * @method array getDbTables() 获取数据库表信息
 * @method void setDbTables(array $DbTables) 设置数据库表信息
 */
class RevokeAccountPrivilegesRequest extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $ClusterId;

    /**
     * @var InputAccount 账号信息
     */
    public $Account;

    /**
     * @var array 数据库表权限数组
     */
    public $DbTablePrivileges;

    /**
     * @var array 数据库表信息
     */
    public $DbTables;

    /**
     * @param string $ClusterId 集群id
     * @param InputAccount $Account 账号信息
     * @param array $DbTablePrivileges 数据库表权限数组
     * @param array $DbTables 数据库表信息
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = new InputAccount();
            $this->Account->deserialize($param["Account"]);
        }

        if (array_key_exists("DbTablePrivileges",$param) and $param["DbTablePrivileges"] !== null) {
            $this->DbTablePrivileges = $param["DbTablePrivileges"];
        }

        if (array_key_exists("DbTables",$param) and $param["DbTables"] !== null) {
            $this->DbTables = [];
            foreach ($param["DbTables"] as $key => $value){
                $obj = new DbTable();
                $obj->deserialize($value);
                array_push($this->DbTables, $obj);
            }
        }
    }
}
