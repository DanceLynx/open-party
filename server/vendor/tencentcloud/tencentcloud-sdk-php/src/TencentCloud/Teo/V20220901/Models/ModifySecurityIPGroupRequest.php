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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySecurityIPGroup请求参数结构体
 *
 * @method string getZoneId() 获取站点 Id。
 * @method void setZoneId(string $ZoneId) 设置站点 Id。
 * @method IPGroup getIPGroup() 获取IP 组配置。
 * @method void setIPGroup(IPGroup $IPGroup) 设置IP 组配置。
 * @method string getMode() 获取操作类型，取值有：
<li> append: 向 IPGroup 中追加 Content 参数中内容；</li>
<li> remove: 从 IPGroup 中删除 Content 参数中内容；</li>
<li> update: 全量替换 IPGroup 内容，并可修改 IPGroup 名称。 </li>
 * @method void setMode(string $Mode) 设置操作类型，取值有：
<li> append: 向 IPGroup 中追加 Content 参数中内容；</li>
<li> remove: 从 IPGroup 中删除 Content 参数中内容；</li>
<li> update: 全量替换 IPGroup 内容，并可修改 IPGroup 名称。 </li>
 */
class ModifySecurityIPGroupRequest extends AbstractModel
{
    /**
     * @var string 站点 Id。
     */
    public $ZoneId;

    /**
     * @var IPGroup IP 组配置。
     */
    public $IPGroup;

    /**
     * @var string 操作类型，取值有：
<li> append: 向 IPGroup 中追加 Content 参数中内容；</li>
<li> remove: 从 IPGroup 中删除 Content 参数中内容；</li>
<li> update: 全量替换 IPGroup 内容，并可修改 IPGroup 名称。 </li>
     */
    public $Mode;

    /**
     * @param string $ZoneId 站点 Id。
     * @param IPGroup $IPGroup IP 组配置。
     * @param string $Mode 操作类型，取值有：
<li> append: 向 IPGroup 中追加 Content 参数中内容；</li>
<li> remove: 从 IPGroup 中删除 Content 参数中内容；</li>
<li> update: 全量替换 IPGroup 内容，并可修改 IPGroup 名称。 </li>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("IPGroup",$param) and $param["IPGroup"] !== null) {
            $this->IPGroup = new IPGroup();
            $this->IPGroup->deserialize($param["IPGroup"]);
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }
    }
}
