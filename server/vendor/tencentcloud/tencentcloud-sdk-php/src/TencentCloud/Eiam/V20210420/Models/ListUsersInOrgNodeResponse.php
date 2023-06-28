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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListUsersInOrgNode返回参数结构体
 *
 * @method array getOrgNodeChildUserInfo() 获取机构子节点下的用户信息列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrgNodeChildUserInfo(array $OrgNodeChildUserInfo) 设置机构子节点下的用户信息列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrgNodeId() 获取机构ID，是机构节点全局唯一标识，长度限制：64个字符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrgNodeId(string $OrgNodeId) 设置机构ID，是机构节点全局唯一标识，长度限制：64个字符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUserInfo() 获取用户信息列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserInfo(array $UserInfo) 设置用户信息列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalUserNum() 获取当前机构节点下的用户总数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalUserNum(integer $TotalUserNum) 设置当前机构节点下的用户总数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrgNodeIdPath() 获取组织机构ID路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrgNodeIdPath(string $OrgNodeIdPath) 设置组织机构ID路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrgNodeNamePath() 获取组织机构名称路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrgNodeNamePath(string $OrgNodeNamePath) 设置组织机构名称路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ListUsersInOrgNodeResponse extends AbstractModel
{
    /**
     * @var array 机构子节点下的用户信息列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrgNodeChildUserInfo;

    /**
     * @var string 机构ID，是机构节点全局唯一标识，长度限制：64个字符。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrgNodeId;

    /**
     * @var array 用户信息列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserInfo;

    /**
     * @var integer 当前机构节点下的用户总数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalUserNum;

    /**
     * @var string 组织机构ID路径。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrgNodeIdPath;

    /**
     * @var string 组织机构名称路径。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrgNodeNamePath;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $OrgNodeChildUserInfo 机构子节点下的用户信息列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrgNodeId 机构ID，是机构节点全局唯一标识，长度限制：64个字符。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $UserInfo 用户信息列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalUserNum 当前机构节点下的用户总数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrgNodeIdPath 组织机构ID路径。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrgNodeNamePath 组织机构名称路径。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("OrgNodeChildUserInfo",$param) and $param["OrgNodeChildUserInfo"] !== null) {
            $this->OrgNodeChildUserInfo = [];
            foreach ($param["OrgNodeChildUserInfo"] as $key => $value){
                $obj = new OrgNodeChildUserInfo();
                $obj->deserialize($value);
                array_push($this->OrgNodeChildUserInfo, $obj);
            }
        }

        if (array_key_exists("OrgNodeId",$param) and $param["OrgNodeId"] !== null) {
            $this->OrgNodeId = $param["OrgNodeId"];
        }

        if (array_key_exists("UserInfo",$param) and $param["UserInfo"] !== null) {
            $this->UserInfo = [];
            foreach ($param["UserInfo"] as $key => $value){
                $obj = new UserInfo();
                $obj->deserialize($value);
                array_push($this->UserInfo, $obj);
            }
        }

        if (array_key_exists("TotalUserNum",$param) and $param["TotalUserNum"] !== null) {
            $this->TotalUserNum = $param["TotalUserNum"];
        }

        if (array_key_exists("OrgNodeIdPath",$param) and $param["OrgNodeIdPath"] !== null) {
            $this->OrgNodeIdPath = $param["OrgNodeIdPath"];
        }

        if (array_key_exists("OrgNodeNamePath",$param) and $param["OrgNodeNamePath"] !== null) {
            $this->OrgNodeNamePath = $param["OrgNodeNamePath"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
