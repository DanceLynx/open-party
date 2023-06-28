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
namespace TencentCloud\Smh\V20210712\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLibrarySecret返回参数结构体
 *
 * @method string getLibraryId() 获取查询的媒体库 ID
 * @method void setLibraryId(string $LibraryId) 设置查询的媒体库 ID
 * @method string getLibrarySecret() 获取查询到的媒体库密钥
 * @method void setLibrarySecret(string $LibrarySecret) 设置查询到的媒体库密钥
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLibrarySecretResponse extends AbstractModel
{
    /**
     * @var string 查询的媒体库 ID
     */
    public $LibraryId;

    /**
     * @var string 查询到的媒体库密钥
     */
    public $LibrarySecret;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $LibraryId 查询的媒体库 ID
     * @param string $LibrarySecret 查询到的媒体库密钥
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("LibraryId",$param) and $param["LibraryId"] !== null) {
            $this->LibraryId = $param["LibraryId"];
        }

        if (array_key_exists("LibrarySecret",$param) and $param["LibrarySecret"] !== null) {
            $this->LibrarySecret = $param["LibrarySecret"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
