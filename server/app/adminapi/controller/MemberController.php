<?php



namespace app\adminapi\controller;


use app\adminapi\controller\BaseAdminController;
use app\adminapi\lists\MemberLists;
use app\adminapi\logic\MemberLogic;
use app\adminapi\validate\MemberValidate;


/**
 * Member控制器
 * Class MemberController
 * @package app\adminapi\controller
 */
class MemberController extends BaseAdminController
{


    /**
     * @notes 获取列表
     * @return \think\response\Json
     * @author 段延庆
     * @date 2023/06/19 09:51
     */
    public function lists()
    {
        return $this->dataLists(new MemberLists());
    }


    /**
     * @notes 添加
     * @return \think\response\Json
     * @author 段延庆
     * @date 2023/06/19 09:51
     */
    public function add()
    {
        $params = (new MemberValidate())->post()->goCheck('add');
        $result = MemberLogic::add($params);
        if (true === $result) {
            return $this->success('添加成功', [], 1, 1);
        }
        return $this->fail(MemberLogic::getError());
    }


    /**
     * @notes 编辑
     * @return \think\response\Json
     * @author 段延庆
     * @date 2023/06/19 09:51
     */
    public function edit()
    {
        $params = (new MemberValidate())->post()->goCheck('edit');
        $result = MemberLogic::edit($params);
        if (true === $result) {
            return $this->success('编辑成功', [], 1, 1);
        }
        return $this->fail(MemberLogic::getError());
    }


    /**
     * @notes 删除
     * @return \think\response\Json
     * @author 段延庆
     * @date 2023/06/19 09:51
     */
    public function delete()
    {
        $params = (new MemberValidate())->post()->goCheck('delete');
        MemberLogic::delete($params);
        return $this->success('删除成功', [], 1, 1);
    }


    /**
     * @notes 获取详情
     * @return \think\response\Json
     * @author 段延庆
     * @date 2023/06/19 09:51
     */
    public function detail()
    {
        $params = (new MemberValidate())->goCheck('detail');
        $result = MemberLogic::detail($params);
        return $this->data($result);
    }
}
