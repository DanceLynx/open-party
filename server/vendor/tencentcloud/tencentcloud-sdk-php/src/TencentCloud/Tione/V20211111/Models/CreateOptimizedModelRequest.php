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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateOptimizedModel请求参数结构体
 *
 * @method string getModelAccTaskId() 获取模型加速任务ID
 * @method void setModelAccTaskId(string $ModelAccTaskId) 设置模型加速任务ID
 * @method array getTags() 获取标签
 * @method void setTags(array $Tags) 设置标签
 */
class CreateOptimizedModelRequest extends AbstractModel
{
    /**
     * @var string 模型加速任务ID
     */
    public $ModelAccTaskId;

    /**
     * @var array 标签
     */
    public $Tags;

    /**
     * @param string $ModelAccTaskId 模型加速任务ID
     * @param array $Tags 标签
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
        if (array_key_exists("ModelAccTaskId",$param) and $param["ModelAccTaskId"] !== null) {
            $this->ModelAccTaskId = $param["ModelAccTaskId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
