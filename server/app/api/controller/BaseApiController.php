<?php


namespace app\api\controller;

use app\common\controller\BaseLikeAdminController;

class BaseApiController extends BaseLikeAdminController
{
    protected int $userId = 0;
    protected array $userInfo = [];

    public function initialize()
    {
        if (isset($this->request->userInfo) && $this->request->userInfo) {
            $this->userInfo = $this->request->userInfo;
            $this->userId = $this->request->userInfo['user_id'];
        }
    }
}
