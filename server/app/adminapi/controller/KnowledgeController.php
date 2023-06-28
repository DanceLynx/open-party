<?php



namespace app\adminapi\controller;


use app\adminapi\controller\BaseAdminController;
use app\adminapi\lists\KnowledgeLists;
use app\adminapi\logic\KnowledgeLogic;
use app\adminapi\validate\KnowledgeValidate;


/**
 * Knowledge控制器
 * Class KnowledgeController
 * @package app\adminapi\controller
 */
class KnowledgeController extends BaseAdminController
{


    /**
     * @notes 获取列表
     * @return \think\response\Json
     * @author 段延庆
     * @date 2023/06/03 16:29
     */
    public function lists()
    {
        return $this->dataLists(new KnowledgeLists());
    }


    /**
     * @notes 添加
     * @return \think\response\Json
     * @author 段延庆
     * @date 2023/06/03 16:29
     */
    public function add()
    {
        $params = (new KnowledgeValidate())->post()->goCheck('add');
        $result = KnowledgeLogic::add($params);
        if (true === $result) {
            return $this->success('添加成功', [], 1, 1);
        }
        return $this->fail(KnowledgeLogic::getError());
    }


    /**
     * @notes 编辑
     * @return \think\response\Json
     * @author 段延庆
     * @date 2023/06/03 16:29
     */
    public function edit()
    {
        $params = (new KnowledgeValidate())->post()->goCheck('edit');
        $result = KnowledgeLogic::edit($params);
        if (true === $result) {
            return $this->success('编辑成功', [], 1, 1);
        }
        return $this->fail(KnowledgeLogic::getError());
    }


    /**
     * @notes 删除
     * @return \think\response\Json
     * @author 段延庆
     * @date 2023/06/03 16:29
     */
    public function delete()
    {
        $params = (new KnowledgeValidate())->post()->goCheck('delete');
        KnowledgeLogic::delete($params);
        return $this->success('删除成功', [], 1, 1);
    }


    /**
     * @notes 获取详情
     * @return \think\response\Json
     * @author 段延庆
     * @date 2023/06/03 16:29
     */
    public function detail()
    {
        $params = (new KnowledgeValidate())->goCheck('detail');
        $result = KnowledgeLogic::detail($params);
        return $this->data($result);
    }
}
