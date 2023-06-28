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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWebPageProtectStat返回参数结构体
 *
 * @method array getFileTamperNum() 获取文件篡改信息
 * @method void setFileTamperNum(array $FileTamperNum) 设置文件篡改信息
 * @method array getProtectFileType() 获取防护文件分类信息
 * @method void setProtectFileType(array $ProtectFileType) 设置防护文件分类信息
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeWebPageProtectStatResponse extends AbstractModel
{
    /**
     * @var array 文件篡改信息
     */
    public $FileTamperNum;

    /**
     * @var array 防护文件分类信息
     */
    public $ProtectFileType;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $FileTamperNum 文件篡改信息
     * @param array $ProtectFileType 防护文件分类信息
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
        if (array_key_exists("FileTamperNum",$param) and $param["FileTamperNum"] !== null) {
            $this->FileTamperNum = [];
            foreach ($param["FileTamperNum"] as $key => $value){
                $obj = new ProtectStat();
                $obj->deserialize($value);
                array_push($this->FileTamperNum, $obj);
            }
        }

        if (array_key_exists("ProtectFileType",$param) and $param["ProtectFileType"] !== null) {
            $this->ProtectFileType = [];
            foreach ($param["ProtectFileType"] as $key => $value){
                $obj = new ProtectStat();
                $obj->deserialize($value);
                array_push($this->ProtectFileType, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
