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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAutoBackupConfig请求参数结构体
 *
 * @method string getInstanceId() 获取指定实例 ID。例如：crs-xjhsdj****。请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。

 * @method void setInstanceId(string $InstanceId) 设置指定实例 ID。例如：crs-xjhsdj****。请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。

 * @method array getWeekDays() 获取设置自动备份周期。可设置为Monday，Tuesday，Wednesday，Thursday，Friday，Saturday，Sunday。该参数暂不支持修改。
 * @method void setWeekDays(array $WeekDays) 设置设置自动备份周期。可设置为Monday，Tuesday，Wednesday，Thursday，Friday，Saturday，Sunday。该参数暂不支持修改。
 * @method string getTimePeriod() 获取备份时间段。可设置为每个整点。格式如：00:00-01:00, 01:00-02:00...... 23:00-00:00。
 * @method void setTimePeriod(string $TimePeriod) 设置备份时间段。可设置为每个整点。格式如：00:00-01:00, 01:00-02:00...... 23:00-00:00。
 * @method integer getAutoBackupType() 获取自动备份类型。目前仅能配置为：1 ，指定时备份。
 * @method void setAutoBackupType(integer $AutoBackupType) 设置自动备份类型。目前仅能配置为：1 ，指定时备份。
 */
class ModifyAutoBackupConfigRequest extends AbstractModel
{
    /**
     * @var string 指定实例 ID。例如：crs-xjhsdj****。请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。

     */
    public $InstanceId;

    /**
     * @var array 设置自动备份周期。可设置为Monday，Tuesday，Wednesday，Thursday，Friday，Saturday，Sunday。该参数暂不支持修改。
     */
    public $WeekDays;

    /**
     * @var string 备份时间段。可设置为每个整点。格式如：00:00-01:00, 01:00-02:00...... 23:00-00:00。
     */
    public $TimePeriod;

    /**
     * @var integer 自动备份类型。目前仅能配置为：1 ，指定时备份。
     */
    public $AutoBackupType;

    /**
     * @param string $InstanceId 指定实例 ID。例如：crs-xjhsdj****。请登录[Redis控制台](https://console.cloud.tencent.com/redis)在实例列表复制实例 ID。

     * @param array $WeekDays 设置自动备份周期。可设置为Monday，Tuesday，Wednesday，Thursday，Friday，Saturday，Sunday。该参数暂不支持修改。
     * @param string $TimePeriod 备份时间段。可设置为每个整点。格式如：00:00-01:00, 01:00-02:00...... 23:00-00:00。
     * @param integer $AutoBackupType 自动备份类型。目前仅能配置为：1 ，指定时备份。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("WeekDays",$param) and $param["WeekDays"] !== null) {
            $this->WeekDays = $param["WeekDays"];
        }

        if (array_key_exists("TimePeriod",$param) and $param["TimePeriod"] !== null) {
            $this->TimePeriod = $param["TimePeriod"];
        }

        if (array_key_exists("AutoBackupType",$param) and $param["AutoBackupType"] !== null) {
            $this->AutoBackupType = $param["AutoBackupType"];
        }
    }
}
