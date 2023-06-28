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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询输入的RTSP配置信息。
 *
 * @method array getSourceAddresses() 获取RTSP源站地址信息。
 * @method void setSourceAddresses(array $SourceAddresses) 设置RTSP源站地址信息。
 */
class DescribeInputRTSPPullSettings extends AbstractModel
{
    /**
     * @var array RTSP源站地址信息。
     */
    public $SourceAddresses;

    /**
     * @param array $SourceAddresses RTSP源站地址信息。
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
        if (array_key_exists("SourceAddresses",$param) and $param["SourceAddresses"] !== null) {
            $this->SourceAddresses = [];
            foreach ($param["SourceAddresses"] as $key => $value){
                $obj = new DescribeRTSPPullSourceAddress();
                $obj->deserialize($value);
                array_push($this->SourceAddresses, $obj);
            }
        }
    }
}
