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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePositionSpace请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getSpaceName() 获取空间名称
 * @method void setSpaceName(string $SpaceName) 设置空间名称
 * @method integer getAuthorizeType() 获取授权类型，0：只读 1：读写
 * @method void setAuthorizeType(integer $AuthorizeType) 设置授权类型，0：只读 1：读写
 * @method array getProductIdList() 获取产品列表
 * @method void setProductIdList(array $ProductIdList) 设置产品列表
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method string getIcon() 获取缩略图
 * @method void setIcon(string $Icon) 设置缩略图
 */
class CreatePositionSpaceRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 空间名称
     */
    public $SpaceName;

    /**
     * @var integer 授权类型，0：只读 1：读写
     */
    public $AuthorizeType;

    /**
     * @var array 产品列表
     */
    public $ProductIdList;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var string 缩略图
     */
    public $Icon;

    /**
     * @param string $ProjectId 项目ID
     * @param string $SpaceName 空间名称
     * @param integer $AuthorizeType 授权类型，0：只读 1：读写
     * @param array $ProductIdList 产品列表
     * @param string $Description 描述
     * @param string $Icon 缩略图
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("SpaceName",$param) and $param["SpaceName"] !== null) {
            $this->SpaceName = $param["SpaceName"];
        }

        if (array_key_exists("AuthorizeType",$param) and $param["AuthorizeType"] !== null) {
            $this->AuthorizeType = $param["AuthorizeType"];
        }

        if (array_key_exists("ProductIdList",$param) and $param["ProductIdList"] !== null) {
            $this->ProductIdList = $param["ProductIdList"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Icon",$param) and $param["Icon"] !== null) {
            $this->Icon = $param["Icon"];
        }
    }
}
