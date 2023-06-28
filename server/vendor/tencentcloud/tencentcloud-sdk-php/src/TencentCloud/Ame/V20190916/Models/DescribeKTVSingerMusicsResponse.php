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
namespace TencentCloud\Ame\V20190916\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeKTVSingerMusics返回参数结构体
 *
 * @method integer getTotalCount() 获取总曲目数
 * @method void setTotalCount(integer $TotalCount) 设置总曲目数
 * @method array getKTVMusicInfoSet() 获取KTV 曲目列表
 * @method void setKTVMusicInfoSet(array $KTVMusicInfoSet) 设置KTV 曲目列表
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeKTVSingerMusicsResponse extends AbstractModel
{
    /**
     * @var integer 总曲目数
     */
    public $TotalCount;

    /**
     * @var array KTV 曲目列表
     */
    public $KTVMusicInfoSet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 总曲目数
     * @param array $KTVMusicInfoSet KTV 曲目列表
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("KTVMusicInfoSet",$param) and $param["KTVMusicInfoSet"] !== null) {
            $this->KTVMusicInfoSet = [];
            foreach ($param["KTVMusicInfoSet"] as $key => $value){
                $obj = new KTVMusicBaseInfo();
                $obj->deserialize($value);
                array_push($this->KTVMusicInfoSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
