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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BindingPolicyObject请求参数结构体
 *
 * @method string getModule() 获取必填。固定值"monitor"
 * @method void setModule(string $Module) 设置必填。固定值"monitor"
 * @method integer getGroupId() 获取策略组id，例如 4739573。逐渐弃用，建议使用 PolicyId 参数
 * @method void setGroupId(integer $GroupId) 设置策略组id，例如 4739573。逐渐弃用，建议使用 PolicyId 参数
 * @method string getPolicyId() 获取告警策略ID，例如“policy-gh892hg0”。PolicyId 参数与 GroupId 参数至少要填一个，否则会报参数错误，建议使用该参数。若两者同时存在则以该参数为准
 * @method void setPolicyId(string $PolicyId) 设置告警策略ID，例如“policy-gh892hg0”。PolicyId 参数与 GroupId 参数至少要填一个，否则会报参数错误，建议使用该参数。若两者同时存在则以该参数为准
 * @method integer getInstanceGroupId() 获取实例分组ID
 * @method void setInstanceGroupId(integer $InstanceGroupId) 设置实例分组ID
 * @method array getDimensions() 获取需要绑定的对象维度信息
 * @method void setDimensions(array $Dimensions) 设置需要绑定的对象维度信息
 * @method string getEbSubject() 获取事件配置的告警
 * @method void setEbSubject(string $EbSubject) 设置事件配置的告警
 * @method integer getEbEventFlag() 获取是否配置了事件告警
 * @method void setEbEventFlag(integer $EbEventFlag) 设置是否配置了事件告警
 */
class BindingPolicyObjectRequest extends AbstractModel
{
    /**
     * @var string 必填。固定值"monitor"
     */
    public $Module;

    /**
     * @var integer 策略组id，例如 4739573。逐渐弃用，建议使用 PolicyId 参数
     */
    public $GroupId;

    /**
     * @var string 告警策略ID，例如“policy-gh892hg0”。PolicyId 参数与 GroupId 参数至少要填一个，否则会报参数错误，建议使用该参数。若两者同时存在则以该参数为准
     */
    public $PolicyId;

    /**
     * @var integer 实例分组ID
     */
    public $InstanceGroupId;

    /**
     * @var array 需要绑定的对象维度信息
     */
    public $Dimensions;

    /**
     * @var string 事件配置的告警
     */
    public $EbSubject;

    /**
     * @var integer 是否配置了事件告警
     */
    public $EbEventFlag;

    /**
     * @param string $Module 必填。固定值"monitor"
     * @param integer $GroupId 策略组id，例如 4739573。逐渐弃用，建议使用 PolicyId 参数
     * @param string $PolicyId 告警策略ID，例如“policy-gh892hg0”。PolicyId 参数与 GroupId 参数至少要填一个，否则会报参数错误，建议使用该参数。若两者同时存在则以该参数为准
     * @param integer $InstanceGroupId 实例分组ID
     * @param array $Dimensions 需要绑定的对象维度信息
     * @param string $EbSubject 事件配置的告警
     * @param integer $EbEventFlag 是否配置了事件告警
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

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("InstanceGroupId",$param) and $param["InstanceGroupId"] !== null) {
            $this->InstanceGroupId = $param["InstanceGroupId"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = [];
            foreach ($param["Dimensions"] as $key => $value){
                $obj = new BindingPolicyObjectDimension();
                $obj->deserialize($value);
                array_push($this->Dimensions, $obj);
            }
        }

        if (array_key_exists("EbSubject",$param) and $param["EbSubject"] !== null) {
            $this->EbSubject = $param["EbSubject"];
        }

        if (array_key_exists("EbEventFlag",$param) and $param["EbEventFlag"] !== null) {
            $this->EbEventFlag = $param["EbEventFlag"];
        }
    }
}
