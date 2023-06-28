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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePathRewritesWithDetailResp请求参数结构体
 *
 * @method array getPathRewrites() 获取路径重写列表
 * @method void setPathRewrites(array $PathRewrites) 设置路径重写列表
 */
class CreatePathRewritesWithDetailRespRequest extends AbstractModel
{
    /**
     * @var array 路径重写列表
     */
    public $PathRewrites;

    /**
     * @param array $PathRewrites 路径重写列表
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
        if (array_key_exists("PathRewrites",$param) and $param["PathRewrites"] !== null) {
            $this->PathRewrites = [];
            foreach ($param["PathRewrites"] as $key => $value){
                $obj = new PathRewriteCreateObject();
                $obj->deserialize($value);
                array_push($this->PathRewrites, $obj);
            }
        }
    }
}
