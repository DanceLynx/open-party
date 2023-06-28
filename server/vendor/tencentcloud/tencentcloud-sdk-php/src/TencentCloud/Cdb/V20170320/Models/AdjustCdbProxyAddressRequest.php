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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AdjustCdbProxyAddress请求参数结构体
 *
 * @method string getProxyGroupId() 获取代理组ID
 * @method void setProxyGroupId(string $ProxyGroupId) 设置代理组ID
 * @method string getWeightMode() 获取权重分配模式，
系统自动分配："system"， 自定义："custom"
 * @method void setWeightMode(string $WeightMode) 设置权重分配模式，
系统自动分配："system"， 自定义："custom"
 * @method boolean getIsKickOut() 获取是否开启延迟剔除，取值："true" | "false"
 * @method void setIsKickOut(boolean $IsKickOut) 设置是否开启延迟剔除，取值："true" | "false"
 * @method integer getMinCount() 获取最小保留数量，最小取值：0
 * @method void setMinCount(integer $MinCount) 设置最小保留数量，最小取值：0
 * @method integer getMaxDelay() 获取延迟剔除阈值，最小取值：0
 * @method void setMaxDelay(integer $MaxDelay) 设置延迟剔除阈值，最小取值：0
 * @method boolean getFailOver() 获取是否开启故障转移，取值："true" | "false"
 * @method void setFailOver(boolean $FailOver) 设置是否开启故障转移，取值："true" | "false"
 * @method boolean getAutoAddRo() 获取是否自动添加RO，取值："true" | "false"
 * @method void setAutoAddRo(boolean $AutoAddRo) 设置是否自动添加RO，取值："true" | "false"
 * @method boolean getReadOnly() 获取是否是只读，取值："true" | "false"
 * @method void setReadOnly(boolean $ReadOnly) 设置是否是只读，取值："true" | "false"
 * @method string getProxyAddressId() 获取代理组地址ID
 * @method void setProxyAddressId(string $ProxyAddressId) 设置代理组地址ID
 * @method boolean getTransSplit() 获取是否开启事务分离，取值："true" | "false"
 * @method void setTransSplit(boolean $TransSplit) 设置是否开启事务分离，取值："true" | "false"
 * @method boolean getConnectionPool() 获取是否开启连接池
 * @method void setConnectionPool(boolean $ConnectionPool) 设置是否开启连接池
 * @method array getProxyAllocation() 获取读写权重分配。如果 WeightMode 传的是 system ，则传入的权重不生效，由系统分配默认权重。
 * @method void setProxyAllocation(array $ProxyAllocation) 设置读写权重分配。如果 WeightMode 传的是 system ，则传入的权重不生效，由系统分配默认权重。
 */
class AdjustCdbProxyAddressRequest extends AbstractModel
{
    /**
     * @var string 代理组ID
     */
    public $ProxyGroupId;

    /**
     * @var string 权重分配模式，
系统自动分配："system"， 自定义："custom"
     */
    public $WeightMode;

    /**
     * @var boolean 是否开启延迟剔除，取值："true" | "false"
     */
    public $IsKickOut;

    /**
     * @var integer 最小保留数量，最小取值：0
     */
    public $MinCount;

    /**
     * @var integer 延迟剔除阈值，最小取值：0
     */
    public $MaxDelay;

    /**
     * @var boolean 是否开启故障转移，取值："true" | "false"
     */
    public $FailOver;

    /**
     * @var boolean 是否自动添加RO，取值："true" | "false"
     */
    public $AutoAddRo;

    /**
     * @var boolean 是否是只读，取值："true" | "false"
     */
    public $ReadOnly;

    /**
     * @var string 代理组地址ID
     */
    public $ProxyAddressId;

    /**
     * @var boolean 是否开启事务分离，取值："true" | "false"
     */
    public $TransSplit;

    /**
     * @var boolean 是否开启连接池
     */
    public $ConnectionPool;

    /**
     * @var array 读写权重分配。如果 WeightMode 传的是 system ，则传入的权重不生效，由系统分配默认权重。
     */
    public $ProxyAllocation;

    /**
     * @param string $ProxyGroupId 代理组ID
     * @param string $WeightMode 权重分配模式，
系统自动分配："system"， 自定义："custom"
     * @param boolean $IsKickOut 是否开启延迟剔除，取值："true" | "false"
     * @param integer $MinCount 最小保留数量，最小取值：0
     * @param integer $MaxDelay 延迟剔除阈值，最小取值：0
     * @param boolean $FailOver 是否开启故障转移，取值："true" | "false"
     * @param boolean $AutoAddRo 是否自动添加RO，取值："true" | "false"
     * @param boolean $ReadOnly 是否是只读，取值："true" | "false"
     * @param string $ProxyAddressId 代理组地址ID
     * @param boolean $TransSplit 是否开启事务分离，取值："true" | "false"
     * @param boolean $ConnectionPool 是否开启连接池
     * @param array $ProxyAllocation 读写权重分配。如果 WeightMode 传的是 system ，则传入的权重不生效，由系统分配默认权重。
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
        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
        }

        if (array_key_exists("WeightMode",$param) and $param["WeightMode"] !== null) {
            $this->WeightMode = $param["WeightMode"];
        }

        if (array_key_exists("IsKickOut",$param) and $param["IsKickOut"] !== null) {
            $this->IsKickOut = $param["IsKickOut"];
        }

        if (array_key_exists("MinCount",$param) and $param["MinCount"] !== null) {
            $this->MinCount = $param["MinCount"];
        }

        if (array_key_exists("MaxDelay",$param) and $param["MaxDelay"] !== null) {
            $this->MaxDelay = $param["MaxDelay"];
        }

        if (array_key_exists("FailOver",$param) and $param["FailOver"] !== null) {
            $this->FailOver = $param["FailOver"];
        }

        if (array_key_exists("AutoAddRo",$param) and $param["AutoAddRo"] !== null) {
            $this->AutoAddRo = $param["AutoAddRo"];
        }

        if (array_key_exists("ReadOnly",$param) and $param["ReadOnly"] !== null) {
            $this->ReadOnly = $param["ReadOnly"];
        }

        if (array_key_exists("ProxyAddressId",$param) and $param["ProxyAddressId"] !== null) {
            $this->ProxyAddressId = $param["ProxyAddressId"];
        }

        if (array_key_exists("TransSplit",$param) and $param["TransSplit"] !== null) {
            $this->TransSplit = $param["TransSplit"];
        }

        if (array_key_exists("ConnectionPool",$param) and $param["ConnectionPool"] !== null) {
            $this->ConnectionPool = $param["ConnectionPool"];
        }

        if (array_key_exists("ProxyAllocation",$param) and $param["ProxyAllocation"] !== null) {
            $this->ProxyAllocation = [];
            foreach ($param["ProxyAllocation"] as $key => $value){
                $obj = new ProxyAllocation();
                $obj->deserialize($value);
                array_push($this->ProxyAllocation, $obj);
            }
        }
    }
}
