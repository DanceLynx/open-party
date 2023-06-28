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
namespace TencentCloud\Ump\V20200918\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateMultiBizAlert请求参数结构体
 *
 * @method string getGroupCode() 获取集团编码
 * @method void setGroupCode(string $GroupCode) 设置集团编码
 * @method integer getMallId() 获取广场ID
 * @method void setMallId(integer $MallId) 设置广场ID
 * @method integer getZoneId() 获取点位ID
 * @method void setZoneId(integer $ZoneId) 设置点位ID
 * @method integer getCameraId() 获取摄像头ID
 * @method void setCameraId(integer $CameraId) 设置摄像头ID
 * @method integer getCaptureTime() 获取时间戳，毫秒
 * @method void setCaptureTime(integer $CaptureTime) 设置时间戳，毫秒
 * @method integer getState() 获取状态: 
1: 侵占
2: 消失
3: 即侵占又消失
 * @method void setState(integer $State) 设置状态: 
1: 侵占
2: 消失
3: 即侵占又消失
 * @method string getImage() 获取图片base64字符串
 * @method void setImage(string $Image) 设置图片base64字符串
 * @method array getWarnings() 获取告警列表
 * @method void setWarnings(array $Warnings) 设置告警列表
 */
class CreateMultiBizAlertRequest extends AbstractModel
{
    /**
     * @var string 集团编码
     */
    public $GroupCode;

    /**
     * @var integer 广场ID
     */
    public $MallId;

    /**
     * @var integer 点位ID
     */
    public $ZoneId;

    /**
     * @var integer 摄像头ID
     */
    public $CameraId;

    /**
     * @var integer 时间戳，毫秒
     */
    public $CaptureTime;

    /**
     * @var integer 状态: 
1: 侵占
2: 消失
3: 即侵占又消失
     */
    public $State;

    /**
     * @var string 图片base64字符串
     */
    public $Image;

    /**
     * @var array 告警列表
     */
    public $Warnings;

    /**
     * @param string $GroupCode 集团编码
     * @param integer $MallId 广场ID
     * @param integer $ZoneId 点位ID
     * @param integer $CameraId 摄像头ID
     * @param integer $CaptureTime 时间戳，毫秒
     * @param integer $State 状态: 
1: 侵占
2: 消失
3: 即侵占又消失
     * @param string $Image 图片base64字符串
     * @param array $Warnings 告警列表
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
        if (array_key_exists("GroupCode",$param) and $param["GroupCode"] !== null) {
            $this->GroupCode = $param["GroupCode"];
        }

        if (array_key_exists("MallId",$param) and $param["MallId"] !== null) {
            $this->MallId = $param["MallId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("CameraId",$param) and $param["CameraId"] !== null) {
            $this->CameraId = $param["CameraId"];
        }

        if (array_key_exists("CaptureTime",$param) and $param["CaptureTime"] !== null) {
            $this->CaptureTime = $param["CaptureTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("Warnings",$param) and $param["Warnings"] !== null) {
            $this->Warnings = [];
            foreach ($param["Warnings"] as $key => $value){
                $obj = new MultiBizWarning();
                $obj->deserialize($value);
                array_push($this->Warnings, $obj);
            }
        }
    }
}
