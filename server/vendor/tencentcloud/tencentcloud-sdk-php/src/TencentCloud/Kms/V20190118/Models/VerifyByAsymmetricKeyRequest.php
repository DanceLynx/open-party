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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VerifyByAsymmetricKey请求参数结构体
 *
 * @method string getKeyId() 获取密钥的唯一标识
 * @method void setKeyId(string $KeyId) 设置密钥的唯一标识
 * @method string getSignatureValue() 获取签名值，通过调用KMS签名接口生成
 * @method void setSignatureValue(string $SignatureValue) 设置签名值，通过调用KMS签名接口生成
 * @method string getMessage() 获取消息原文或消息摘要。如果提供的是消息原文，则消息原文的长度（Base64编码前的长度）不超过4096字节。如果提供的是消息摘要，则消息摘要长度（Base64编码前的长度）必须等于32字节
 * @method void setMessage(string $Message) 设置消息原文或消息摘要。如果提供的是消息原文，则消息原文的长度（Base64编码前的长度）不超过4096字节。如果提供的是消息摘要，则消息摘要长度（Base64编码前的长度）必须等于32字节
 * @method string getAlgorithm() 获取签名算法，支持的算法：SM2DSA，ECC_P256_R1，RSA_PSS_SHA_256，RSA_PKCS1_SHA_256 等。更多支持的算法可通过 ListAlgorithms 接口进行查询。
 * @method void setAlgorithm(string $Algorithm) 设置签名算法，支持的算法：SM2DSA，ECC_P256_R1，RSA_PSS_SHA_256，RSA_PKCS1_SHA_256 等。更多支持的算法可通过 ListAlgorithms 接口进行查询。
 * @method string getMessageType() 获取消息类型：RAW，DIGEST，如果不传，默认为RAW，表示消息原文。
 * @method void setMessageType(string $MessageType) 设置消息类型：RAW，DIGEST，如果不传，默认为RAW，表示消息原文。
 */
class VerifyByAsymmetricKeyRequest extends AbstractModel
{
    /**
     * @var string 密钥的唯一标识
     */
    public $KeyId;

    /**
     * @var string 签名值，通过调用KMS签名接口生成
     */
    public $SignatureValue;

    /**
     * @var string 消息原文或消息摘要。如果提供的是消息原文，则消息原文的长度（Base64编码前的长度）不超过4096字节。如果提供的是消息摘要，则消息摘要长度（Base64编码前的长度）必须等于32字节
     */
    public $Message;

    /**
     * @var string 签名算法，支持的算法：SM2DSA，ECC_P256_R1，RSA_PSS_SHA_256，RSA_PKCS1_SHA_256 等。更多支持的算法可通过 ListAlgorithms 接口进行查询。
     */
    public $Algorithm;

    /**
     * @var string 消息类型：RAW，DIGEST，如果不传，默认为RAW，表示消息原文。
     */
    public $MessageType;

    /**
     * @param string $KeyId 密钥的唯一标识
     * @param string $SignatureValue 签名值，通过调用KMS签名接口生成
     * @param string $Message 消息原文或消息摘要。如果提供的是消息原文，则消息原文的长度（Base64编码前的长度）不超过4096字节。如果提供的是消息摘要，则消息摘要长度（Base64编码前的长度）必须等于32字节
     * @param string $Algorithm 签名算法，支持的算法：SM2DSA，ECC_P256_R1，RSA_PSS_SHA_256，RSA_PKCS1_SHA_256 等。更多支持的算法可通过 ListAlgorithms 接口进行查询。
     * @param string $MessageType 消息类型：RAW，DIGEST，如果不传，默认为RAW，表示消息原文。
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
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("SignatureValue",$param) and $param["SignatureValue"] !== null) {
            $this->SignatureValue = $param["SignatureValue"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Algorithm",$param) and $param["Algorithm"] !== null) {
            $this->Algorithm = $param["Algorithm"];
        }

        if (array_key_exists("MessageType",$param) and $param["MessageType"] !== null) {
            $this->MessageType = $param["MessageType"];
        }
    }
}
