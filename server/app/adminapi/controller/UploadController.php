<?php


namespace app\adminapi\controller;


use app\common\service\UploadService;
use Exception;
use think\response\Json;

/**
 * 上传文件
 * Class UploadController
 * @package app\adminapi\controller
 */
class UploadController extends BaseAdminController
{
    /**
     * @notes 上传图片
     * @return Json
     * @author 段誉
     * @date 2021/12/29 16:27
     */
    public function image()
    {
        try {
            $cid = $this->request->post('cid', 0);
            $result = UploadService::image($cid);
            return $this->success('上传成功', $result);
        } catch (Exception $e) {
            return $this->fail($e->getMessage());
        }
    }

    /**
     * @notes 上传视频
     * @return Json
     * @author 段誉
     * @date 2021/12/29 16:27
     */
    public function video()
    {
        try {
            $cid = $this->request->post('cid', 0);
            $result = UploadService::video($cid);
            return $this->success('上传成功', $result);
        } catch (Exception $e) {
            return $this->fail($e->getMessage());
        }
    }

    /**
     * 上传音频
     * @author 段延庆
     * @date 2023-06-04
     */
    public function audio()
    {
        try {
            $cid = $this->request->post('cid', 0);
            $result = UploadService::audio($cid);
            return $this->success('上传成功', $result);
        } catch (Exception $e) {
            return $this->fail($e->getMessage());
        }
    }
}
