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
namespace TencentCloud\Tbaas\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetPeerLogForUser请求参数结构体
 *
 * @method string getModule() 获取模块名，本接口取值：peer_mng
 * @method void setModule(string $Module) 设置模块名，本接口取值：peer_mng
 * @method string getOperation() 获取操作名，本接口取值：peer_log_for_user
 * @method void setOperation(string $Operation) 设置操作名，本接口取值：peer_log_for_user
 * @method string getClusterId() 获取区块链网络ID，可在区块链网络详情或列表中获取
 * @method void setClusterId(string $ClusterId) 设置区块链网络ID，可在区块链网络详情或列表中获取
 * @method string getGroupName() 获取调用合约的组织名称
 * @method void setGroupName(string $GroupName) 设置调用合约的组织名称
 * @method string getPeerName() 获取节点名称
 * @method void setPeerName(string $PeerName) 设置节点名称
 * @method string getBeginTime() 获取日志开始时间，如"2020-11-24 19:49:25"
 * @method void setBeginTime(string $BeginTime) 设置日志开始时间，如"2020-11-24 19:49:25"
 * @method integer getRowNum() 获取返回日志行数的最大值，系统设定该参数最大为1000，且一行日志的最大字节数是500，即最大返回50万个字节数的日志数据
 * @method void setRowNum(integer $RowNum) 设置返回日志行数的最大值，系统设定该参数最大为1000，且一行日志的最大字节数是500，即最大返回50万个字节数的日志数据
 */
class GetPeerLogForUserRequest extends AbstractModel
{
    /**
     * @var string 模块名，本接口取值：peer_mng
     */
    public $Module;

    /**
     * @var string 操作名，本接口取值：peer_log_for_user
     */
    public $Operation;

    /**
     * @var string 区块链网络ID，可在区块链网络详情或列表中获取
     */
    public $ClusterId;

    /**
     * @var string 调用合约的组织名称
     */
    public $GroupName;

    /**
     * @var string 节点名称
     */
    public $PeerName;

    /**
     * @var string 日志开始时间，如"2020-11-24 19:49:25"
     */
    public $BeginTime;

    /**
     * @var integer 返回日志行数的最大值，系统设定该参数最大为1000，且一行日志的最大字节数是500，即最大返回50万个字节数的日志数据
     */
    public $RowNum;

    /**
     * @param string $Module 模块名，本接口取值：peer_mng
     * @param string $Operation 操作名，本接口取值：peer_log_for_user
     * @param string $ClusterId 区块链网络ID，可在区块链网络详情或列表中获取
     * @param string $GroupName 调用合约的组织名称
     * @param string $PeerName 节点名称
     * @param string $BeginTime 日志开始时间，如"2020-11-24 19:49:25"
     * @param integer $RowNum 返回日志行数的最大值，系统设定该参数最大为1000，且一行日志的最大字节数是500，即最大返回50万个字节数的日志数据
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("PeerName",$param) and $param["PeerName"] !== null) {
            $this->PeerName = $param["PeerName"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("RowNum",$param) and $param["RowNum"] !== null) {
            $this->RowNum = $param["RowNum"];
        }
    }
}
