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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVpnConnection请求参数结构体
 *
 * @method string getVpnGatewayId() 获取VPN网关实例ID。
 * @method void setVpnGatewayId(string $VpnGatewayId) 设置VPN网关实例ID。
 * @method string getCustomerGatewayId() 获取对端网关ID。例如：cgw-2wqq41m9，可通过[DescribeCustomerGateways](https://cloud.tencent.com/document/product/215/17516)接口查询对端网关。
 * @method void setCustomerGatewayId(string $CustomerGatewayId) 设置对端网关ID。例如：cgw-2wqq41m9，可通过[DescribeCustomerGateways](https://cloud.tencent.com/document/product/215/17516)接口查询对端网关。
 * @method string getVpnConnectionName() 获取通道名称，可任意命名，但不得超过60个字符。
 * @method void setVpnConnectionName(string $VpnConnectionName) 设置通道名称，可任意命名，但不得超过60个字符。
 * @method string getPreShareKey() 获取预共享密钥。
 * @method void setPreShareKey(string $PreShareKey) 设置预共享密钥。
 * @method string getVpcId() 获取VPC实例ID。可通过[DescribeVpcs](https://cloud.tencent.com/document/product/215/15778)接口返回值中的VpcId获取。
CCN VPN 形的通道 可以不传VPCID
 * @method void setVpcId(string $VpcId) 设置VPC实例ID。可通过[DescribeVpcs](https://cloud.tencent.com/document/product/215/15778)接口返回值中的VpcId获取。
CCN VPN 形的通道 可以不传VPCID
 * @method array getSecurityPolicyDatabases() 获取SPD策略组，例如：{"10.0.0.5/24":["172.123.10.5/16"]}，10.0.0.5/24是vpc内网段172.123.10.5/16是IDC网段。用户指定VPC内哪些网段可以和您IDC中哪些网段通信。
 * @method void setSecurityPolicyDatabases(array $SecurityPolicyDatabases) 设置SPD策略组，例如：{"10.0.0.5/24":["172.123.10.5/16"]}，10.0.0.5/24是vpc内网段172.123.10.5/16是IDC网段。用户指定VPC内哪些网段可以和您IDC中哪些网段通信。
 * @method IKEOptionsSpecification getIKEOptionsSpecification() 获取IKE配置（Internet Key Exchange，因特网密钥交换），IKE具有一套自我保护机制，用户配置网络安全协议
 * @method void setIKEOptionsSpecification(IKEOptionsSpecification $IKEOptionsSpecification) 设置IKE配置（Internet Key Exchange，因特网密钥交换），IKE具有一套自我保护机制，用户配置网络安全协议
 * @method IPSECOptionsSpecification getIPSECOptionsSpecification() 获取IPSec配置，腾讯云提供IPSec安全会话设置
 * @method void setIPSECOptionsSpecification(IPSECOptionsSpecification $IPSECOptionsSpecification) 设置IPSec配置，腾讯云提供IPSec安全会话设置
 * @method array getTags() 获取指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]
 * @method void setTags(array $Tags) 设置指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]
 * @method boolean getEnableHealthCheck() 获取是否支持隧道内健康检查，默认为False。
 * @method void setEnableHealthCheck(boolean $EnableHealthCheck) 设置是否支持隧道内健康检查，默认为False。
 * @method string getHealthCheckLocalIp() 获取健康检查本端地址，默认值为随机在169.254.128.0/17分配一个IP。
 * @method void setHealthCheckLocalIp(string $HealthCheckLocalIp) 设置健康检查本端地址，默认值为随机在169.254.128.0/17分配一个IP。
 * @method string getHealthCheckRemoteIp() 获取健康检查对端地址，默认值为随机在169.254.128.0/17分配一个IP。
 * @method void setHealthCheckRemoteIp(string $HealthCheckRemoteIp) 设置健康检查对端地址，默认值为随机在169.254.128.0/17分配一个IP。
 * @method string getRouteType() 获取通道类型, 例如:["STATIC", "StaticRoute", "Policy"]
 * @method void setRouteType(string $RouteType) 设置通道类型, 例如:["STATIC", "StaticRoute", "Policy"]
 * @method string getNegotiationType() 获取协商类型，默认为active（主动协商）。可选值：active（主动协商），passive（被动协商），flowTrigger（流量协商）
 * @method void setNegotiationType(string $NegotiationType) 设置协商类型，默认为active（主动协商）。可选值：active（主动协商），passive（被动协商），flowTrigger（流量协商）
 * @method integer getDpdEnable() 获取DPD探测开关。默认为0，表示关闭DPD探测。可选值：0（关闭），1（开启）
 * @method void setDpdEnable(integer $DpdEnable) 设置DPD探测开关。默认为0，表示关闭DPD探测。可选值：0（关闭），1（开启）
 * @method string getDpdTimeout() 获取DPD超时时间。即探测确认对端不存在需要的时间。dpdEnable为1（开启）时有效。默认30，单位为秒
 * @method void setDpdTimeout(string $DpdTimeout) 设置DPD超时时间。即探测确认对端不存在需要的时间。dpdEnable为1（开启）时有效。默认30，单位为秒
 * @method string getDpdAction() 获取DPD超时后的动作。默认为clear。dpdEnable为1（开启）时有效。可取值为clear（断开）和restart（重试）
 * @method void setDpdAction(string $DpdAction) 设置DPD超时后的动作。默认为clear。dpdEnable为1（开启）时有效。可取值为clear（断开）和restart（重试）
 */
class CreateVpnConnectionRequest extends AbstractModel
{
    /**
     * @var string VPN网关实例ID。
     */
    public $VpnGatewayId;

    /**
     * @var string 对端网关ID。例如：cgw-2wqq41m9，可通过[DescribeCustomerGateways](https://cloud.tencent.com/document/product/215/17516)接口查询对端网关。
     */
    public $CustomerGatewayId;

    /**
     * @var string 通道名称，可任意命名，但不得超过60个字符。
     */
    public $VpnConnectionName;

    /**
     * @var string 预共享密钥。
     */
    public $PreShareKey;

    /**
     * @var string VPC实例ID。可通过[DescribeVpcs](https://cloud.tencent.com/document/product/215/15778)接口返回值中的VpcId获取。
CCN VPN 形的通道 可以不传VPCID
     */
    public $VpcId;

    /**
     * @var array SPD策略组，例如：{"10.0.0.5/24":["172.123.10.5/16"]}，10.0.0.5/24是vpc内网段172.123.10.5/16是IDC网段。用户指定VPC内哪些网段可以和您IDC中哪些网段通信。
     */
    public $SecurityPolicyDatabases;

    /**
     * @var IKEOptionsSpecification IKE配置（Internet Key Exchange，因特网密钥交换），IKE具有一套自我保护机制，用户配置网络安全协议
     */
    public $IKEOptionsSpecification;

    /**
     * @var IPSECOptionsSpecification IPSec配置，腾讯云提供IPSec安全会话设置
     */
    public $IPSECOptionsSpecification;

    /**
     * @var array 指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]
     */
    public $Tags;

    /**
     * @var boolean 是否支持隧道内健康检查，默认为False。
     */
    public $EnableHealthCheck;

    /**
     * @var string 健康检查本端地址，默认值为随机在169.254.128.0/17分配一个IP。
     */
    public $HealthCheckLocalIp;

    /**
     * @var string 健康检查对端地址，默认值为随机在169.254.128.0/17分配一个IP。
     */
    public $HealthCheckRemoteIp;

    /**
     * @var string 通道类型, 例如:["STATIC", "StaticRoute", "Policy"]
     */
    public $RouteType;

    /**
     * @var string 协商类型，默认为active（主动协商）。可选值：active（主动协商），passive（被动协商），flowTrigger（流量协商）
     */
    public $NegotiationType;

    /**
     * @var integer DPD探测开关。默认为0，表示关闭DPD探测。可选值：0（关闭），1（开启）
     */
    public $DpdEnable;

    /**
     * @var string DPD超时时间。即探测确认对端不存在需要的时间。dpdEnable为1（开启）时有效。默认30，单位为秒
     */
    public $DpdTimeout;

    /**
     * @var string DPD超时后的动作。默认为clear。dpdEnable为1（开启）时有效。可取值为clear（断开）和restart（重试）
     */
    public $DpdAction;

    /**
     * @param string $VpnGatewayId VPN网关实例ID。
     * @param string $CustomerGatewayId 对端网关ID。例如：cgw-2wqq41m9，可通过[DescribeCustomerGateways](https://cloud.tencent.com/document/product/215/17516)接口查询对端网关。
     * @param string $VpnConnectionName 通道名称，可任意命名，但不得超过60个字符。
     * @param string $PreShareKey 预共享密钥。
     * @param string $VpcId VPC实例ID。可通过[DescribeVpcs](https://cloud.tencent.com/document/product/215/15778)接口返回值中的VpcId获取。
CCN VPN 形的通道 可以不传VPCID
     * @param array $SecurityPolicyDatabases SPD策略组，例如：{"10.0.0.5/24":["172.123.10.5/16"]}，10.0.0.5/24是vpc内网段172.123.10.5/16是IDC网段。用户指定VPC内哪些网段可以和您IDC中哪些网段通信。
     * @param IKEOptionsSpecification $IKEOptionsSpecification IKE配置（Internet Key Exchange，因特网密钥交换），IKE具有一套自我保护机制，用户配置网络安全协议
     * @param IPSECOptionsSpecification $IPSECOptionsSpecification IPSec配置，腾讯云提供IPSec安全会话设置
     * @param array $Tags 指定绑定的标签列表，例如：[{"Key": "city", "Value": "shanghai"}]
     * @param boolean $EnableHealthCheck 是否支持隧道内健康检查，默认为False。
     * @param string $HealthCheckLocalIp 健康检查本端地址，默认值为随机在169.254.128.0/17分配一个IP。
     * @param string $HealthCheckRemoteIp 健康检查对端地址，默认值为随机在169.254.128.0/17分配一个IP。
     * @param string $RouteType 通道类型, 例如:["STATIC", "StaticRoute", "Policy"]
     * @param string $NegotiationType 协商类型，默认为active（主动协商）。可选值：active（主动协商），passive（被动协商），flowTrigger（流量协商）
     * @param integer $DpdEnable DPD探测开关。默认为0，表示关闭DPD探测。可选值：0（关闭），1（开启）
     * @param string $DpdTimeout DPD超时时间。即探测确认对端不存在需要的时间。dpdEnable为1（开启）时有效。默认30，单位为秒
     * @param string $DpdAction DPD超时后的动作。默认为clear。dpdEnable为1（开启）时有效。可取值为clear（断开）和restart（重试）
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
        if (array_key_exists("VpnGatewayId",$param) and $param["VpnGatewayId"] !== null) {
            $this->VpnGatewayId = $param["VpnGatewayId"];
        }

        if (array_key_exists("CustomerGatewayId",$param) and $param["CustomerGatewayId"] !== null) {
            $this->CustomerGatewayId = $param["CustomerGatewayId"];
        }

        if (array_key_exists("VpnConnectionName",$param) and $param["VpnConnectionName"] !== null) {
            $this->VpnConnectionName = $param["VpnConnectionName"];
        }

        if (array_key_exists("PreShareKey",$param) and $param["PreShareKey"] !== null) {
            $this->PreShareKey = $param["PreShareKey"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SecurityPolicyDatabases",$param) and $param["SecurityPolicyDatabases"] !== null) {
            $this->SecurityPolicyDatabases = [];
            foreach ($param["SecurityPolicyDatabases"] as $key => $value){
                $obj = new SecurityPolicyDatabase();
                $obj->deserialize($value);
                array_push($this->SecurityPolicyDatabases, $obj);
            }
        }

        if (array_key_exists("IKEOptionsSpecification",$param) and $param["IKEOptionsSpecification"] !== null) {
            $this->IKEOptionsSpecification = new IKEOptionsSpecification();
            $this->IKEOptionsSpecification->deserialize($param["IKEOptionsSpecification"]);
        }

        if (array_key_exists("IPSECOptionsSpecification",$param) and $param["IPSECOptionsSpecification"] !== null) {
            $this->IPSECOptionsSpecification = new IPSECOptionsSpecification();
            $this->IPSECOptionsSpecification->deserialize($param["IPSECOptionsSpecification"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("EnableHealthCheck",$param) and $param["EnableHealthCheck"] !== null) {
            $this->EnableHealthCheck = $param["EnableHealthCheck"];
        }

        if (array_key_exists("HealthCheckLocalIp",$param) and $param["HealthCheckLocalIp"] !== null) {
            $this->HealthCheckLocalIp = $param["HealthCheckLocalIp"];
        }

        if (array_key_exists("HealthCheckRemoteIp",$param) and $param["HealthCheckRemoteIp"] !== null) {
            $this->HealthCheckRemoteIp = $param["HealthCheckRemoteIp"];
        }

        if (array_key_exists("RouteType",$param) and $param["RouteType"] !== null) {
            $this->RouteType = $param["RouteType"];
        }

        if (array_key_exists("NegotiationType",$param) and $param["NegotiationType"] !== null) {
            $this->NegotiationType = $param["NegotiationType"];
        }

        if (array_key_exists("DpdEnable",$param) and $param["DpdEnable"] !== null) {
            $this->DpdEnable = $param["DpdEnable"];
        }

        if (array_key_exists("DpdTimeout",$param) and $param["DpdTimeout"] !== null) {
            $this->DpdTimeout = $param["DpdTimeout"];
        }

        if (array_key_exists("DpdAction",$param) and $param["DpdAction"] !== null) {
            $this->DpdAction = $param["DpdAction"];
        }
    }
}
