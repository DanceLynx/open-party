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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePicture请求参数结构体
 *
 * @method integer getSdkAppId() 获取应用id
 * @method void setSdkAppId(integer $SdkAppId) 设置应用id
 * @method string getContent() 获取图片内容经base64编码后的string格式,最大长度为2M
 * @method void setContent(string $Content) 设置图片内容经base64编码后的string格式,最大长度为2M
 * @method string getSuffix() 获取图片后缀名
 * @method void setSuffix(string $Suffix) 设置图片后缀名
 * @method integer getHeight() 获取图片长度
 * @method void setHeight(integer $Height) 设置图片长度
 * @method integer getWidth() 获取图片宽度
 * @method void setWidth(integer $Width) 设置图片宽度
 * @method integer getXPosition() 获取显示位置x轴方向
 * @method void setXPosition(integer $XPosition) 设置显示位置x轴方向
 * @method integer getYPosition() 获取显示位置y轴方向
 * @method void setYPosition(integer $YPosition) 设置显示位置y轴方向
 */
class CreatePictureRequest extends AbstractModel
{
    /**
     * @var integer 应用id
     */
    public $SdkAppId;

    /**
     * @var string 图片内容经base64编码后的string格式,最大长度为2M
     */
    public $Content;

    /**
     * @var string 图片后缀名
     */
    public $Suffix;

    /**
     * @var integer 图片长度
     */
    public $Height;

    /**
     * @var integer 图片宽度
     */
    public $Width;

    /**
     * @var integer 显示位置x轴方向
     */
    public $XPosition;

    /**
     * @var integer 显示位置y轴方向
     */
    public $YPosition;

    /**
     * @param integer $SdkAppId 应用id
     * @param string $Content 图片内容经base64编码后的string格式,最大长度为2M
     * @param string $Suffix 图片后缀名
     * @param integer $Height 图片长度
     * @param integer $Width 图片宽度
     * @param integer $XPosition 显示位置x轴方向
     * @param integer $YPosition 显示位置y轴方向
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

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Suffix",$param) and $param["Suffix"] !== null) {
            $this->Suffix = $param["Suffix"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("XPosition",$param) and $param["XPosition"] !== null) {
            $this->XPosition = $param["XPosition"];
        }

        if (array_key_exists("YPosition",$param) and $param["YPosition"] !== null) {
            $this->YPosition = $param["YPosition"];
        }
    }
}
