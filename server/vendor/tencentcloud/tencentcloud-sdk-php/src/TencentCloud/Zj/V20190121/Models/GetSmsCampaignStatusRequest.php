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
namespace TencentCloud\Zj\V20190121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetSmsCampaignStatus请求参数结构体
 *
 * @method string getLicense() 获取商户证书
 * @method void setLicense(string $License) 设置商户证书
 * @method integer getCampaignId() 获取活动ID
 * @method void setCampaignId(integer $CampaignId) 设置活动ID
 */
class GetSmsCampaignStatusRequest extends AbstractModel
{
    /**
     * @var string 商户证书
     */
    public $License;

    /**
     * @var integer 活动ID
     */
    public $CampaignId;

    /**
     * @param string $License 商户证书
     * @param integer $CampaignId 活动ID
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
        if (array_key_exists("License",$param) and $param["License"] !== null) {
            $this->License = $param["License"];
        }

        if (array_key_exists("CampaignId",$param) and $param["CampaignId"] !== null) {
            $this->CampaignId = $param["CampaignId"];
        }
    }
}
