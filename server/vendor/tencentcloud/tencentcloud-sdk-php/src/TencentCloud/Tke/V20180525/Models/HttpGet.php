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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Probe中的HttpGet
 *
 * @method string getPath() 获取HttpGet检测的路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPath(string $Path) 设置HttpGet检测的路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPort() 获取HttpGet检测的端口号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(integer $Port) 设置HttpGet检测的端口号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheme() 获取HTTP or HTTPS
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheme(string $Scheme) 设置HTTP or HTTPS
注意：此字段可能返回 null，表示取不到有效值。
 */
class HttpGet extends AbstractModel
{
    /**
     * @var string HttpGet检测的路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Path;

    /**
     * @var integer HttpGet检测的端口号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string HTTP or HTTPS
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Scheme;

    /**
     * @param string $Path HttpGet检测的路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Port HttpGet检测的端口号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Scheme HTTP or HTTPS
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Scheme",$param) and $param["Scheme"] !== null) {
            $this->Scheme = $param["Scheme"];
        }
    }
}
