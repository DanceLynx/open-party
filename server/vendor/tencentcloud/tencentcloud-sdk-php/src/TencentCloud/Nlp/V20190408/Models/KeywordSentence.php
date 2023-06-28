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
namespace TencentCloud\Nlp\V20190408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通过关键词生成的句子信息
 *
 * @method string getTargetText() 获取通过关键词生成的句子。
 * @method void setTargetText(string $TargetText) 设置通过关键词生成的句子。
 */
class KeywordSentence extends AbstractModel
{
    /**
     * @var string 通过关键词生成的句子。
     */
    public $TargetText;

    /**
     * @param string $TargetText 通过关键词生成的句子。
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
        if (array_key_exists("TargetText",$param) and $param["TargetText"] !== null) {
            $this->TargetText = $param["TargetText"];
        }
    }
}
