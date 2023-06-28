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
namespace TencentCloud\Tdcpg\V20211118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TransformClusterPayMode请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getCurrentPayMode() 获取当前付费模式，目前只支持：POSTPAID_BY_HOUR(按小时后付费)
 * @method void setCurrentPayMode(string $CurrentPayMode) 设置当前付费模式，目前只支持：POSTPAID_BY_HOUR(按小时后付费)
 * @method string getTargetPayMode() 获取目标付费模式，目前只支持：PREPAID(预付费)
 * @method void setTargetPayMode(string $TargetPayMode) 设置目标付费模式，目前只支持：PREPAID(预付费)
 * @method integer getPeriod() 获取购买时长，单位：月。取值范围为[1,60]，默认值为1。
 * @method void setPeriod(integer $Period) 设置购买时长，单位：月。取值范围为[1,60]，默认值为1。
 */
class TransformClusterPayModeRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 当前付费模式，目前只支持：POSTPAID_BY_HOUR(按小时后付费)
     */
    public $CurrentPayMode;

    /**
     * @var string 目标付费模式，目前只支持：PREPAID(预付费)
     */
    public $TargetPayMode;

    /**
     * @var integer 购买时长，单位：月。取值范围为[1,60]，默认值为1。
     */
    public $Period;

    /**
     * @param string $ClusterId 集群ID
     * @param string $CurrentPayMode 当前付费模式，目前只支持：POSTPAID_BY_HOUR(按小时后付费)
     * @param string $TargetPayMode 目标付费模式，目前只支持：PREPAID(预付费)
     * @param integer $Period 购买时长，单位：月。取值范围为[1,60]，默认值为1。
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("CurrentPayMode",$param) and $param["CurrentPayMode"] !== null) {
            $this->CurrentPayMode = $param["CurrentPayMode"];
        }

        if (array_key_exists("TargetPayMode",$param) and $param["TargetPayMode"] !== null) {
            $this->TargetPayMode = $param["TargetPayMode"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }
    }
}
