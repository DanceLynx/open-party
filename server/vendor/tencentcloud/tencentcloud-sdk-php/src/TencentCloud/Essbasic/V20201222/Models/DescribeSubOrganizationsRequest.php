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
namespace TencentCloud\Essbasic\V20201222\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSubOrganizations请求参数结构体
 *
 * @method Caller getCaller() 获取调用方信息
 * @method void setCaller(Caller $Caller) 设置调用方信息
 * @method array getSubOrganizationIds() 获取子机构ID数组
 * @method void setSubOrganizationIds(array $SubOrganizationIds) 设置子机构ID数组
 */
class DescribeSubOrganizationsRequest extends AbstractModel
{
    /**
     * @var Caller 调用方信息
     */
    public $Caller;

    /**
     * @var array 子机构ID数组
     */
    public $SubOrganizationIds;

    /**
     * @param Caller $Caller 调用方信息
     * @param array $SubOrganizationIds 子机构ID数组
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
        if (array_key_exists("Caller",$param) and $param["Caller"] !== null) {
            $this->Caller = new Caller();
            $this->Caller->deserialize($param["Caller"]);
        }

        if (array_key_exists("SubOrganizationIds",$param) and $param["SubOrganizationIds"] !== null) {
            $this->SubOrganizationIds = $param["SubOrganizationIds"];
        }
    }
}
