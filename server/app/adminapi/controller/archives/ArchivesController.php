<?php



namespace app\adminapi\controller\archives;


use app\adminapi\controller\BaseAdminController;
use app\adminapi\lists\archives\ArchivesLists;
use app\adminapi\logic\archives\ArchivesLogic;
use app\adminapi\validate\archives\ArchivesValidate;


/**
 * Archives控制器
 * Class ArchivesController
 * @package app\adminapi\controller\archives
 */
class ArchivesController extends BaseAdminController
{


    /**
     * @notes 获取列表
     * @return \think\response\Json
     * @author 段延庆
     * @date 2023/06/19 21:07
     */
    public function lists()
    {
        return $this->dataLists(new ArchivesLists());
    }


    /**
     * @notes 添加
     * @return \think\response\Json
     * @author 段延庆
     * @date 2023/06/19 21:07
     */
    public function add()
    {
        $params = (new ArchivesValidate())->post()->goCheck('add');
        $result = ArchivesLogic::add($params);
        if (true === $result) {
            return $this->success('添加成功', [], 1, 1);
        }
        return $this->fail(ArchivesLogic::getError());
    }


    /**
     * @notes 编辑
     * @return \think\response\Json
     * @author 段延庆
     * @date 2023/06/19 21:07
     */
    public function edit()
    {
        $params = (new ArchivesValidate())->post()->goCheck('edit');
        $result = ArchivesLogic::edit($params);
        if (true === $result) {
            return $this->success('编辑成功', [], 1, 1);
        }
        return $this->fail(ArchivesLogic::getError());
    }


    /**
     * @notes 删除
     * @return \think\response\Json
     * @author 段延庆
     * @date 2023/06/19 21:07
     */
    public function delete()
    {
        $params = (new ArchivesValidate())->post()->goCheck('delete');
        ArchivesLogic::delete($params);
        return $this->success('删除成功', [], 1, 1);
    }


    /**
     * @notes 获取详情
     * @return \think\response\Json
     * @author 段延庆
     * @date 2023/06/19 21:07
     */
    public function detail()
    {
        $params = (new ArchivesValidate())->goCheck('detail');
        $result = ArchivesLogic::detail($params);
        return $this->data($result);
    }
}
