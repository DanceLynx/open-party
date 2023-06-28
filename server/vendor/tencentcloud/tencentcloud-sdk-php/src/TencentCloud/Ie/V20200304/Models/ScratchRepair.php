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
namespace TencentCloud\Ie\V20200304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 去划痕参数
 *
 * @method string getType() 获取去划痕方式，取值：normal。
 * @method void setType(string $Type) 设置去划痕方式，取值：normal。
 * @method float getRatio() 获取去划痕强度， 可选项：0.0-1.0。小于0.0的默认为0.0，大于1.0的默认为1.0。
 * @method void setRatio(float $Ratio) 设置去划痕强度， 可选项：0.0-1.0。小于0.0的默认为0.0，大于1.0的默认为1.0。
 */
class ScratchRepair extends AbstractModel
{
    /**
     * @var string 去划痕方式，取值：normal。
     */
    public $Type;

    /**
     * @var float 去划痕强度， 可选项：0.0-1.0。小于0.0的默认为0.0，大于1.0的默认为1.0。
     */
    public $Ratio;

    /**
     * @param string $Type 去划痕方式，取值：normal。
     * @param float $Ratio 去划痕强度， 可选项：0.0-1.0。小于0.0的默认为0.0，大于1.0的默认为1.0。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Ratio",$param) and $param["Ratio"] !== null) {
            $this->Ratio = $param["Ratio"];
        }
    }
}
