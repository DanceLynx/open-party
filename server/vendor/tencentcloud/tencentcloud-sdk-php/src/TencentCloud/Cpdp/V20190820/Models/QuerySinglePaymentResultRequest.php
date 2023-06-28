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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QuerySinglePaymentResult请求参数结构体
 *
 * @method integer getTransferType() 获取转账类型
 * @method void setTransferType(integer $TransferType) 设置转账类型
 * @method string getTradeSerialNo() 获取交易流水流水号，唯一
 * @method void setTradeSerialNo(string $TradeSerialNo) 设置交易流水流水号，唯一
 * @method string getOrderId() 获取订单号，与TradeSerialNo不能同时为空
 * @method void setOrderId(string $OrderId) 设置订单号，与TradeSerialNo不能同时为空
 */
class QuerySinglePaymentResultRequest extends AbstractModel
{
    /**
     * @var integer 转账类型
     */
    public $TransferType;

    /**
     * @var string 交易流水流水号，唯一
     */
    public $TradeSerialNo;

    /**
     * @var string 订单号，与TradeSerialNo不能同时为空
     */
    public $OrderId;

    /**
     * @param integer $TransferType 转账类型
     * @param string $TradeSerialNo 交易流水流水号，唯一
     * @param string $OrderId 订单号，与TradeSerialNo不能同时为空
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
        if (array_key_exists("TransferType",$param) and $param["TransferType"] !== null) {
            $this->TransferType = $param["TransferType"];
        }

        if (array_key_exists("TradeSerialNo",$param) and $param["TradeSerialNo"] !== null) {
            $this->TradeSerialNo = $param["TradeSerialNo"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }
    }
}
