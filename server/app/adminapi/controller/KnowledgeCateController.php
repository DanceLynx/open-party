<?php



namespace app\adminapi\controller;


use app\adminapi\controller\BaseAdminController;
use app\adminapi\lists\KnowledgeCateLists;
use app\adminapi\logic\KnowledgeCateLogic;
use app\adminapi\validate\KnowledgeCateValidate;


/**
 * KnowledgeCate控制器
 * Class KnowledgeCateController
 * @package app\adminapi\controller
 */
class KnowledgeCateController extends BaseAdminController
{


    /**
     * @notes 获取列表
     * @return \think\response\Json
     * @author 段延庆
     * @date 2023/06/03 16:12
     */
    public function lists()
    {
        return $this->dataLists(new KnowledgeCateLists());
    }


    /**
     * @notes 添加
     * @return \think\response\Json
     * @author 段延庆
     * @date 2023/06/03 16:12
     */
    public function add()
    {
        $params = (new KnowledgeCateValidate())->post()->goCheck('add');
        $result = KnowledgeCateLogic::add($params);
        if (true === $result) {
            return $this->success('添加成功', [], 1, 1);
        }
        return $this->fail(KnowledgeCateLogic::getError());
    }


    /**
     * @notes 编辑
     * @return \think\response\Json
     * @author 段延庆
     * @date 2023/06/03 16:12
     */
    public function edit()
    {
        $params = (new KnowledgeCateValidate())->post()->goCheck('edit');
        $result = KnowledgeCateLogic::edit($params);
        if (true === $result) {
            return $this->success('编辑成功', [], 1, 1);
        }
        return $this->fail(KnowledgeCateLogic::getError());
    }


    /**
     * @notes 删除
     * @return \think\response\Json
     * @author 段延庆
     * @date 2023/06/03 16:12
     */
    public function delete()
    {
        $params = (new KnowledgeCateValidate())->post()->goCheck('delete');
        KnowledgeCateLogic::delete($params);
        return $this->success('删除成功', [], 1, 1);
    }


    /**
     * @notes 获取详情
     * @return \think\response\Json
     * @author 段延庆
     * @date 2023/06/03 16:12
     */
    public function detail()
    {
        $params = (new KnowledgeCateValidate())->goCheck('detail');
        $result = KnowledgeCateLogic::detail($params);
        return $this->data($result);
    }
    /**
     * @notes 获取所有类目
     * @return \think\response\Json
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     * @author 段延庆
     * @date 2023/05/30 10:54
     */
    public function all()
    {
        $result = KnowledgeCateLogic::getAllData();
        return $this->data($result);
    }
}
