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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySecurityGroupSequenceRules请求参数结构体
 *
 * @method integer getDirection() 获取方向，0：出站，1：入站，默认1
 * @method void setDirection(integer $Direction) 设置方向，0：出站，1：入站，默认1
 * @method array getData() 获取企业安全组规则快速排序数据
 * @method void setData(array $Data) 设置企业安全组规则快速排序数据
 */
class ModifySecurityGroupSequenceRulesRequest extends AbstractModel
{
    /**
     * @var integer 方向，0：出站，1：入站，默认1
     */
    public $Direction;

    /**
     * @var array 企业安全组规则快速排序数据
     */
    public $Data;

    /**
     * @param integer $Direction 方向，0：出站，1：入站，默认1
     * @param array $Data 企业安全组规则快速排序数据
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
        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new SecurityGroupOrderIndexData();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }
    }
}
