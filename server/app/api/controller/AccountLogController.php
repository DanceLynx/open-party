<?php


namespace app\api\controller;

use app\api\lists\AccountLogLists;

/**
 * 账户流水
 * Class AccountLogController
 * @package app\api\controller
 */
class AccountLogController extends BaseApiController
{
    /**
     * @notes 账户流水
     * @return \think\response\Json
     * @author 段誉
     * @date 2023/2/24 14:34
     */
    public function lists()
    {
        return $this->dataLists(new AccountLogLists());
    }
}
