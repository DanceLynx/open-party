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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDocumentsByRoom请求参数结构体
 *
 * @method integer getRoomId() 获取房间ID。
 * @method void setRoomId(integer $RoomId) 设置房间ID。
 * @method integer getSdkAppId() 获取低代码互动课堂的SdkAppId
 * @method void setSdkAppId(integer $SdkAppId) 设置低代码互动课堂的SdkAppId
 * @method integer getPage() 获取分页查询当前页数，从1开始递增，默认值为1
 * @method void setPage(integer $Page) 设置分页查询当前页数，从1开始递增，默认值为1
 * @method integer getLimit() 获取每页数据量，最大1000，默认值为100
 * @method void setLimit(integer $Limit) 设置每页数据量，最大1000，默认值为100
 * @method array getPermission() 获取课件权限。
[0]：获取owner的私有课件；
[1]：获取owner的公开课件;
[0,1]：则获取owner的私有课件和公开课件；
[2]：获取owner的私有课件和所有人(包括owner)的公开课件。
默认值为[2]
 * @method void setPermission(array $Permission) 设置课件权限。
[0]：获取owner的私有课件；
[1]：获取owner的公开课件;
[0,1]：则获取owner的私有课件和公开课件；
[2]：获取owner的私有课件和所有人(包括owner)的公开课件。
默认值为[2]
 * @method string getOwner() 获取文档所有者的user_id，不填默认获取SdkAppId下所有课件
 * @method void setOwner(string $Owner) 设置文档所有者的user_id，不填默认获取SdkAppId下所有课件
 */
class DescribeDocumentsByRoomRequest extends AbstractModel
{
    /**
     * @var integer 房间ID。
     */
    public $RoomId;

    /**
     * @var integer 低代码互动课堂的SdkAppId
     */
    public $SdkAppId;

    /**
     * @var integer 分页查询当前页数，从1开始递增，默认值为1
     */
    public $Page;

    /**
     * @var integer 每页数据量，最大1000，默认值为100
     */
    public $Limit;

    /**
     * @var array 课件权限。
[0]：获取owner的私有课件；
[1]：获取owner的公开课件;
[0,1]：则获取owner的私有课件和公开课件；
[2]：获取owner的私有课件和所有人(包括owner)的公开课件。
默认值为[2]
     */
    public $Permission;

    /**
     * @var string 文档所有者的user_id，不填默认获取SdkAppId下所有课件
     */
    public $Owner;

    /**
     * @param integer $RoomId 房间ID。
     * @param integer $SdkAppId 低代码互动课堂的SdkAppId
     * @param integer $Page 分页查询当前页数，从1开始递增，默认值为1
     * @param integer $Limit 每页数据量，最大1000，默认值为100
     * @param array $Permission 课件权限。
[0]：获取owner的私有课件；
[1]：获取owner的公开课件;
[0,1]：则获取owner的私有课件和公开课件；
[2]：获取owner的私有课件和所有人(包括owner)的公开课件。
默认值为[2]
     * @param string $Owner 文档所有者的user_id，不填默认获取SdkAppId下所有课件
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
        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = $param["Permission"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }
    }
}
