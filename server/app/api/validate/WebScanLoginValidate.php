<?php


namespace app\api\validate;

use app\common\cache\WebScanLoginCache;
use app\common\validate\BaseValidate;

/**
 * 网站扫码登录验证
 * Class WebScanLoginValidate
 * @package app\api\validate
 */
class WebScanLoginValidate extends BaseValidate
{

    protected $rule = [
        'code' => 'require',
        'state' => 'require|checkState',
    ];

    protected $message = [
        'code.require' => '参数缺失',
        'state.require' => '昵称缺少',
    ];


    /**
     * @notes 校验登录状态标记
     * @param $value
     * @param $rule
     * @param $data
     * @return bool|string
     * @author 段誉
     * @date 2022/10/21 9:47
     */
    protected function checkState($value, $rule, $data)
    {
        $check = (new WebScanLoginCache())->getScanLoginState($value);

        if (empty($check)) {
            return '二维码已失效或不存在,请重新扫码';
        }

        return true;
    }
}
