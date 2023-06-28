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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCmqDeadLetterSourceQueues请求参数结构体
 *
 * @method string getDeadLetterQueueName() 获取死信队列名称
 * @method void setDeadLetterQueueName(string $DeadLetterQueueName) 设置死信队列名称
 * @method integer getLimit() 获取分页时本页获取主题列表的起始位置。如果填写了该值，必须也要填写 limit 。该值缺省时，后台取默认值 0。
 * @method void setLimit(integer $Limit) 设置分页时本页获取主题列表的起始位置。如果填写了该值，必须也要填写 limit 。该值缺省时，后台取默认值 0。
 * @method integer getOffset() 获取分页时本页获取主题的个数，如果不传递该参数，则该参数默认为20，最大值为50。
 * @method void setOffset(integer $Offset) 设置分页时本页获取主题的个数，如果不传递该参数，则该参数默认为20，最大值为50。
 * @method string getSourceQueueName() 获取根据SourceQueueName过滤
 * @method void setSourceQueueName(string $SourceQueueName) 设置根据SourceQueueName过滤
 */
class DescribeCmqDeadLetterSourceQueuesRequest extends AbstractModel
{
    /**
     * @var string 死信队列名称
     */
    public $DeadLetterQueueName;

    /**
     * @var integer 分页时本页获取主题列表的起始位置。如果填写了该值，必须也要填写 limit 。该值缺省时，后台取默认值 0。
     */
    public $Limit;

    /**
     * @var integer 分页时本页获取主题的个数，如果不传递该参数，则该参数默认为20，最大值为50。
     */
    public $Offset;

    /**
     * @var string 根据SourceQueueName过滤
     */
    public $SourceQueueName;

    /**
     * @param string $DeadLetterQueueName 死信队列名称
     * @param integer $Limit 分页时本页获取主题列表的起始位置。如果填写了该值，必须也要填写 limit 。该值缺省时，后台取默认值 0。
     * @param integer $Offset 分页时本页获取主题的个数，如果不传递该参数，则该参数默认为20，最大值为50。
     * @param string $SourceQueueName 根据SourceQueueName过滤
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
        if (array_key_exists("DeadLetterQueueName",$param) and $param["DeadLetterQueueName"] !== null) {
            $this->DeadLetterQueueName = $param["DeadLetterQueueName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("SourceQueueName",$param) and $param["SourceQueueName"] !== null) {
            $this->SourceQueueName = $param["SourceQueueName"];
        }
    }
}
