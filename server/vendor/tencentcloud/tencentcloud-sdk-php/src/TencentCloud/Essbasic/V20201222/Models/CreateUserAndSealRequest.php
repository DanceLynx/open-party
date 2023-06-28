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
namespace TencentCloud\Essbasic\V20201222\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateUserAndSeal请求参数结构体
 *
 * @method Caller getCaller() 获取调用方信息
 * @method void setCaller(Caller $Caller) 设置调用方信息
 * @method string getOpenId() 获取第三方平台唯一标识，要求应用内OpenId唯一
 * @method void setOpenId(string $OpenId) 设置第三方平台唯一标识，要求应用内OpenId唯一
 * @method string getName() 获取用户姓名
 * @method void setName(string $Name) 设置用户姓名
 * @method string getIdCardType() 获取用户证件类型：
1. ID_CARD - 居民身份证
5. HOUSEHOLD_REGISTER - 户口本
6. TEMP_ID_CARD - 临时居民身份证
 * @method void setIdCardType(string $IdCardType) 设置用户证件类型：
1. ID_CARD - 居民身份证
5. HOUSEHOLD_REGISTER - 户口本
6. TEMP_ID_CARD - 临时居民身份证
 * @method string getIdCardNumber() 获取用户证件号
 * @method void setIdCardNumber(string $IdCardNumber) 设置用户证件号
 * @method string getSourceIp() 获取请求生成个人印章的客户端IP
 * @method void setSourceIp(string $SourceIp) 设置请求生成个人印章的客户端IP
 * @method string getMobile() 获取用户手机号码，不要求唯一
 * @method void setMobile(string $Mobile) 设置用户手机号码，不要求唯一
 * @method string getEmail() 获取用户邮箱，不要求唯一
 * @method void setEmail(string $Email) 设置用户邮箱，不要求唯一
 * @method string getSealName() 获取默认印章名称
 * @method void setSealName(string $SealName) 设置默认印章名称
 * @method boolean getUseOpenId() 获取是否以OpenId作为UserId (为true时将直接以OpenId生成腾讯电子签平台的UserId)
 * @method void setUseOpenId(boolean $UseOpenId) 设置是否以OpenId作为UserId (为true时将直接以OpenId生成腾讯电子签平台的UserId)
 */
class CreateUserAndSealRequest extends AbstractModel
{
    /**
     * @var Caller 调用方信息
     */
    public $Caller;

    /**
     * @var string 第三方平台唯一标识，要求应用内OpenId唯一
     */
    public $OpenId;

    /**
     * @var string 用户姓名
     */
    public $Name;

    /**
     * @var string 用户证件类型：
1. ID_CARD - 居民身份证
5. HOUSEHOLD_REGISTER - 户口本
6. TEMP_ID_CARD - 临时居民身份证
     */
    public $IdCardType;

    /**
     * @var string 用户证件号
     */
    public $IdCardNumber;

    /**
     * @var string 请求生成个人印章的客户端IP
     */
    public $SourceIp;

    /**
     * @var string 用户手机号码，不要求唯一
     */
    public $Mobile;

    /**
     * @var string 用户邮箱，不要求唯一
     */
    public $Email;

    /**
     * @var string 默认印章名称
     */
    public $SealName;

    /**
     * @var boolean 是否以OpenId作为UserId (为true时将直接以OpenId生成腾讯电子签平台的UserId)
     */
    public $UseOpenId;

    /**
     * @param Caller $Caller 调用方信息
     * @param string $OpenId 第三方平台唯一标识，要求应用内OpenId唯一
     * @param string $Name 用户姓名
     * @param string $IdCardType 用户证件类型：
1. ID_CARD - 居民身份证
5. HOUSEHOLD_REGISTER - 户口本
6. TEMP_ID_CARD - 临时居民身份证
     * @param string $IdCardNumber 用户证件号
     * @param string $SourceIp 请求生成个人印章的客户端IP
     * @param string $Mobile 用户手机号码，不要求唯一
     * @param string $Email 用户邮箱，不要求唯一
     * @param string $SealName 默认印章名称
     * @param boolean $UseOpenId 是否以OpenId作为UserId (为true时将直接以OpenId生成腾讯电子签平台的UserId)
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
        if (array_key_exists("Caller",$param) and $param["Caller"] !== null) {
            $this->Caller = new Caller();
            $this->Caller->deserialize($param["Caller"]);
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IdCardType",$param) and $param["IdCardType"] !== null) {
            $this->IdCardType = $param["IdCardType"];
        }

        if (array_key_exists("IdCardNumber",$param) and $param["IdCardNumber"] !== null) {
            $this->IdCardNumber = $param["IdCardNumber"];
        }

        if (array_key_exists("SourceIp",$param) and $param["SourceIp"] !== null) {
            $this->SourceIp = $param["SourceIp"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("SealName",$param) and $param["SealName"] !== null) {
            $this->SealName = $param["SealName"];
        }

        if (array_key_exists("UseOpenId",$param) and $param["UseOpenId"] !== null) {
            $this->UseOpenId = $param["UseOpenId"];
        }
    }
}
