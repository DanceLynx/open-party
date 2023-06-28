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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePlatforms请求参数结构体
 *
 * @method array getPlatforms() 获取平台 Id 列表。如果不填，则不按平台 Id 进行过滤。
 * @method void setPlatforms(array $Platforms) 设置平台 Id 列表。如果不填，则不按平台 Id 进行过滤。
 * @method array getLicenseIds() 获取平台绑定的 License Id 列表。如果不填，则不按平台绑定的 License Id 进行过滤。
 * @method void setLicenseIds(array $LicenseIds) 设置平台绑定的 License Id 列表。如果不填，则不按平台绑定的 License Id 进行过滤。
 * @method integer getOffset() 获取分页返回的起始偏移量，默认值：0。
 * @method void setOffset(integer $Offset) 设置分页返回的起始偏移量，默认值：0。
 * @method integer getLimit() 获取分页返回的记录条数，默认值：10，最大值：20。
 * @method void setLimit(integer $Limit) 设置分页返回的记录条数，默认值：10，最大值：20。
 */
class DescribePlatformsRequest extends AbstractModel
{
    /**
     * @var array 平台 Id 列表。如果不填，则不按平台 Id 进行过滤。
     */
    public $Platforms;

    /**
     * @var array 平台绑定的 License Id 列表。如果不填，则不按平台绑定的 License Id 进行过滤。
     */
    public $LicenseIds;

    /**
     * @var integer 分页返回的起始偏移量，默认值：0。
     */
    public $Offset;

    /**
     * @var integer 分页返回的记录条数，默认值：10，最大值：20。
     */
    public $Limit;

    /**
     * @param array $Platforms 平台 Id 列表。如果不填，则不按平台 Id 进行过滤。
     * @param array $LicenseIds 平台绑定的 License Id 列表。如果不填，则不按平台绑定的 License Id 进行过滤。
     * @param integer $Offset 分页返回的起始偏移量，默认值：0。
     * @param integer $Limit 分页返回的记录条数，默认值：10，最大值：20。
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
        if (array_key_exists("Platforms",$param) and $param["Platforms"] !== null) {
            $this->Platforms = $param["Platforms"];
        }

        if (array_key_exists("LicenseIds",$param) and $param["LicenseIds"] !== null) {
            $this->LicenseIds = $param["LicenseIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
