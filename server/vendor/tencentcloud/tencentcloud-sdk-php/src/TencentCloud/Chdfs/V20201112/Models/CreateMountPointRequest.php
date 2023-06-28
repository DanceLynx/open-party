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
namespace TencentCloud\Chdfs\V20201112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateMountPoint请求参数结构体
 *
 * @method string getMountPointName() 获取挂载点名称
 * @method void setMountPointName(string $MountPointName) 设置挂载点名称
 * @method string getFileSystemId() 获取文件系统ID
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统ID
 * @method integer getMountPointStatus() 获取挂载点状态（1：打开；2：关闭）
 * @method void setMountPointStatus(integer $MountPointStatus) 设置挂载点状态（1：打开；2：关闭）
 */
class CreateMountPointRequest extends AbstractModel
{
    /**
     * @var string 挂载点名称
     */
    public $MountPointName;

    /**
     * @var string 文件系统ID
     */
    public $FileSystemId;

    /**
     * @var integer 挂载点状态（1：打开；2：关闭）
     */
    public $MountPointStatus;

    /**
     * @param string $MountPointName 挂载点名称
     * @param string $FileSystemId 文件系统ID
     * @param integer $MountPointStatus 挂载点状态（1：打开；2：关闭）
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
        if (array_key_exists("MountPointName",$param) and $param["MountPointName"] !== null) {
            $this->MountPointName = $param["MountPointName"];
        }

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("MountPointStatus",$param) and $param["MountPointStatus"] !== null) {
            $this->MountPointStatus = $param["MountPointStatus"];
        }
    }
}
