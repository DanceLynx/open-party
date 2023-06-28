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
namespace TencentCloud\Ape\V20200513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateOrderAndDownloads返回参数结构体
 *
 * @method array getDownloadInfos() 获取成功核销后可以获取图片基本信息和原图地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDownloadInfos(array $DownloadInfos) 设置成功核销后可以获取图片基本信息和原图地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取可下载图片数量
 * @method void setTotalCount(integer $TotalCount) 设置可下载图片数量
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateOrderAndDownloadsResponse extends AbstractModel
{
    /**
     * @var array 成功核销后可以获取图片基本信息和原图地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DownloadInfos;

    /**
     * @var integer 可下载图片数量
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $DownloadInfos 成功核销后可以获取图片基本信息和原图地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 可下载图片数量
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
        if (array_key_exists("DownloadInfos",$param) and $param["DownloadInfos"] !== null) {
            $this->DownloadInfos = [];
            foreach ($param["DownloadInfos"] as $key => $value){
                $obj = new DownloadInfo();
                $obj->deserialize($value);
                array_push($this->DownloadInfos, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
