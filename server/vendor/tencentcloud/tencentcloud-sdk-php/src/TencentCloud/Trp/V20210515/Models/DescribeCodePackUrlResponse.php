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
namespace TencentCloud\Trp\V20210515\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCodePackUrl返回参数结构体
 *
 * @method string getUrl() 获取文字码包地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置文字码包地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImgUrl() 获取图片码包地址，可能为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImgUrl(string $ImgUrl) 设置图片码包地址，可能为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileKey() 获取文字码包Key，用于上传导入
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileKey(string $FileKey) 设置文字码包Key，用于上传导入
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCodePackUrlResponse extends AbstractModel
{
    /**
     * @var string 文字码包地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @var string 图片码包地址，可能为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImgUrl;

    /**
     * @var string 文字码包Key，用于上传导入
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileKey;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Url 文字码包地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImgUrl 图片码包地址，可能为空
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileKey 文字码包Key，用于上传导入
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("ImgUrl",$param) and $param["ImgUrl"] !== null) {
            $this->ImgUrl = $param["ImgUrl"];
        }

        if (array_key_exists("FileKey",$param) and $param["FileKey"] !== null) {
            $this->FileKey = $param["FileKey"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
