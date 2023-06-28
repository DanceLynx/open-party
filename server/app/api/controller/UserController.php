<?php

namespace app\api\controller;


use app\api\logic\UserLogic;
use app\api\validate\PasswordValidate;
use app\api\validate\SetUserInfoValidate;
use app\api\validate\UserValidate;
use app\common\model\dict\DictData;

/**
 * 用户控制器
 * Class UserController
 * @package app\api\controller
 */
class UserController extends BaseApiController
{
    public array $notNeedLogin = ['resetPassword'];


    /**
     * @notes 获取个人中心
     * @return \think\response\Json
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     * @author 段誉
     * @date 2022/9/16 18:19
     */
    public function center()
    {
        $data = UserLogic::center($this->userInfo);
        return $this->success('', $data);
    }


    /**
     * @notes 获取个人信息
     * @return \think\response\Json
     * @author 段誉
     * @date 2022/9/20 19:46
     */
    public function info()
    {
        $result = UserLogic::info($this->userId);
        $result["departments"] = DictData::where("type_value", "department")->order("sort desc")->select()->toArray();
        $result["member_levels"] = DictData::where("type_value", "member_level")->order("sort desc")->select()->toArray();
        return $this->data($result);
    }


    /**
     * @notes 重置密码
     * @return \think\response\Json
     * @author 段誉
     * @date 2022/9/16 18:06
     */
    public function resetPassword()
    {
        $params = (new PasswordValidate())->post()->goCheck('resetPassword');
        $result = UserLogic::resetPassword($params);
        if (true === $result) {
            return $this->success('操作成功', [], 1, 1);
        }
        return $this->fail(UserLogic::getError());
    }


    /**
     * @notes 修改密码
     * @return \think\response\Json
     * @author 段誉
     * @date 2022/9/20 19:16
     */
    public function changePassword()
    {
        $params = (new PasswordValidate())->post()->goCheck('changePassword');
        $result = UserLogic::changePassword($params, $this->userId);
        if (true === $result) {
            return $this->success('操作成功', [], 1, 1);
        }
        return $this->fail(UserLogic::getError());
    }


    /**
     * @notes 获取小程序手机号
     * @return \think\response\Json
     * @author 段誉
     * @date 2022/9/21 16:46
     */
    public function getMobileByMnp()
    {
        $params = (new UserValidate())->post()->goCheck('getMobileByMnp');
        $params['user_id'] = $this->userId;
        $result = UserLogic::getMobileByMnp($params);
        if ($result === false) {
            return $this->fail(UserLogic::getError());
        }
        return $this->success('绑定成功', [], 1, 1);
    }


    /**
     * @notes 编辑用户信息
     * @return \think\response\Json
     * @author 段誉
     * @date 2022/9/21 17:01
     */
    public function setInfo()
    {
        $params = (new SetUserInfoValidate())->post()->goCheck(null, ['id' => $this->userId]);
        $result = UserLogic::setInfo($this->userId, $params);
        if (false === $result) {
            return $this->fail(UserLogic::getError());
        }
        return $this->success('操作成功', [], 1, 1);
    }


    /**
     * @notes 绑定/变更 手机号
     * @return \think\response\Json
     * @author 段誉
     * @date 2022/9/21 17:29
     */
    public function bindMobile()
    {
        $params = (new UserValidate())->post()->goCheck('bindMobile');
        $params['user_id'] = $this->userId;
        $result = UserLogic::bindMobile($params);
        if ($result) {
            return $this->success('绑定成功', [], 1, 1);
        }
        return $this->fail(UserLogic::getError());
    }

    /**
     * 读取用户党费数据
     * @author 段延庆
     * @return think\response\Json
     * @date 2023-06-20
     */
    public function partyTime()
    {
        $result = UserLogic::getPartyTime($this->userId);
        return $this->data($result);
    }
}
