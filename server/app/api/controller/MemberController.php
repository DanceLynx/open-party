<?php

namespace app\api\controller;

use app\api\lists\MemberLists;
use think\response\Json;

class MemberController extends BaseApiController
{
    public array $notNeedLogin = ["lists"];

    /**
     * 党员分页列表
     * @author 段延庆
     * @date 2023-06-19
     */
    public function lists()
    {
        return $this->dataLists(new MemberLists());
    }
}
