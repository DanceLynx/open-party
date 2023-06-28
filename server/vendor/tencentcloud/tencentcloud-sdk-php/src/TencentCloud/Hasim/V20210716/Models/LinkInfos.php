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
namespace TencentCloud\Hasim\V20210716\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云兔连接信息集合
 *
 * @method integer getTotal() 获取总量
 * @method void setTotal(integer $Total) 设置总量
 * @method array getList() 获取云兔连接列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setList(array $List) 设置云兔连接列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class LinkInfos extends AbstractModel
{
    /**
     * @var integer 总量
     */
    public $Total;

    /**
     * @var array 云兔连接列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $List;

    /**
     * @param integer $Total 总量
     * @param array $List 云兔连接列表
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new LinkInfo();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }
    }
}
