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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全能力
 *
 * @method array getAdd() 获取允许操作列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdd(array $Add) 设置允许操作列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDrop() 获取禁止操作列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDrop(array $Drop) 设置禁止操作列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class SecurityCapabilities extends AbstractModel
{
    /**
     * @var array 允许操作列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Add;

    /**
     * @var array 禁止操作列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Drop;

    /**
     * @param array $Add 允许操作列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Drop 禁止操作列表
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
        if (array_key_exists("Add",$param) and $param["Add"] !== null) {
            $this->Add = $param["Add"];
        }

        if (array_key_exists("Drop",$param) and $param["Drop"] !== null) {
            $this->Drop = $param["Drop"];
        }
    }
}
