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
 * ConfigMap的key挂载到路径
 *
 * @method string getKey() 获取健名
 * @method void setKey(string $Key) 设置健名
 * @method string getPath() 获取对应本地路径
 * @method void setPath(string $Path) 设置对应本地路径
 * @method string getMode() 获取对应权限模式
 * @method void setMode(string $Mode) 设置对应权限模式
 */
class VolumeConfigMapKeyToPath extends AbstractModel
{
    /**
     * @var string 健名
     */
    public $Key;

    /**
     * @var string 对应本地路径
     */
    public $Path;

    /**
     * @var string 对应权限模式
     */
    public $Mode;

    /**
     * @param string $Key 健名
     * @param string $Path 对应本地路径
     * @param string $Mode 对应权限模式
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }
    }
}
