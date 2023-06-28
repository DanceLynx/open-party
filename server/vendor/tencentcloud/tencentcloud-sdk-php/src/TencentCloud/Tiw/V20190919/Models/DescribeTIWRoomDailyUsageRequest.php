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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTIWRoomDailyUsage请求参数结构体
 *
 * @method integer getSdkAppId() 获取互动白板应用SdkAppId
 * @method void setSdkAppId(integer $SdkAppId) 设置互动白板应用SdkAppId
 * @method string getSubProduct() 获取需要查询的子产品用量，支持传入以下值
- sp_tiw_board: 互动白板时长，单位为分钟
- sp_tiw_ric: 实时录制时长，单位分钟
 * @method void setSubProduct(string $SubProduct) 设置需要查询的子产品用量，支持传入以下值
- sp_tiw_board: 互动白板时长，单位为分钟
- sp_tiw_ric: 实时录制时长，单位分钟
 * @method string getStartTime() 获取开始时间，格式YYYY-MM-DD，查询结果里包括该天数据
 * @method void setStartTime(string $StartTime) 设置开始时间，格式YYYY-MM-DD，查询结果里包括该天数据
 * @method string getEndTime() 获取结束时间，格式YYYY-MM-DD，查询结果里包括该天数据，单次查询统计区间最多不能超过31天。
 * @method void setEndTime(string $EndTime) 设置结束时间，格式YYYY-MM-DD，查询结果里包括该天数据，单次查询统计区间最多不能超过31天。
 * @method array getRoomIDs() 获取需要查询的房间ID列表，不填默认查询全部房间
 * @method void setRoomIDs(array $RoomIDs) 设置需要查询的房间ID列表，不填默认查询全部房间
 * @method integer getOffset() 获取查询偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置查询偏移量，默认为0
 * @method integer getLimit() 获取每次查询返回条目限制，默认为20
 * @method void setLimit(integer $Limit) 设置每次查询返回条目限制，默认为20
 */
class DescribeTIWRoomDailyUsageRequest extends AbstractModel
{
    /**
     * @var integer 互动白板应用SdkAppId
     */
    public $SdkAppId;

    /**
     * @var string 需要查询的子产品用量，支持传入以下值
- sp_tiw_board: 互动白板时长，单位为分钟
- sp_tiw_ric: 实时录制时长，单位分钟
     */
    public $SubProduct;

    /**
     * @var string 开始时间，格式YYYY-MM-DD，查询结果里包括该天数据
     */
    public $StartTime;

    /**
     * @var string 结束时间，格式YYYY-MM-DD，查询结果里包括该天数据，单次查询统计区间最多不能超过31天。
     */
    public $EndTime;

    /**
     * @var array 需要查询的房间ID列表，不填默认查询全部房间
     */
    public $RoomIDs;

    /**
     * @var integer 查询偏移量，默认为0
     */
    public $Offset;

    /**
     * @var integer 每次查询返回条目限制，默认为20
     */
    public $Limit;

    /**
     * @param integer $SdkAppId 互动白板应用SdkAppId
     * @param string $SubProduct 需要查询的子产品用量，支持传入以下值
- sp_tiw_board: 互动白板时长，单位为分钟
- sp_tiw_ric: 实时录制时长，单位分钟
     * @param string $StartTime 开始时间，格式YYYY-MM-DD，查询结果里包括该天数据
     * @param string $EndTime 结束时间，格式YYYY-MM-DD，查询结果里包括该天数据，单次查询统计区间最多不能超过31天。
     * @param array $RoomIDs 需要查询的房间ID列表，不填默认查询全部房间
     * @param integer $Offset 查询偏移量，默认为0
     * @param integer $Limit 每次查询返回条目限制，默认为20
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("SubProduct",$param) and $param["SubProduct"] !== null) {
            $this->SubProduct = $param["SubProduct"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("RoomIDs",$param) and $param["RoomIDs"] !== null) {
            $this->RoomIDs = $param["RoomIDs"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
