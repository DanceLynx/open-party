<?php


namespace app\adminapi\logic\channel;

use app\common\logic\BaseLogic;
use app\common\service\ConfigService;
use app\common\service\FileService;

/**
 * 小程序设置逻辑
 * Class MnpSettingsLogic
 * @package app\adminapi\logic\channel
 */
class MnpSettingsLogic extends BaseLogic
{
    /**
     * @notes 获取小程序配置
     * @return array
     * @author ljj
     * @date 2022/2/16 9:38 上午
     */
    public function getConfig()
    {
        $domainName = $_SERVER['SERVER_NAME'];
        $qrCode = ConfigService::get('mnp_setting', 'qr_code', '');
        $qrCode = empty($qrCode) ? $qrCode : FileService::getFileUrl($qrCode);
        $config = [
            'name'                  => ConfigService::get('mnp_setting', 'name', ''),
            'original_id'           => ConfigService::get('mnp_setting', 'original_id', ''),
            'qr_code'               => $qrCode,
            'app_id'                => ConfigService::get('mnp_setting', 'app_id', ''),
            'app_secret'            => ConfigService::get('mnp_setting', 'app_secret', ''),
            'request_domain'        => 'https://' . $domainName,
            'socket_domain'         => 'wss://' . $domainName,
            'upload_file_domain'     => 'https://' . $domainName,
            'download_file_domain'   => 'https://' . $domainName,
            'udp_domain'            => 'udp://' . $domainName,
            'business_domain'       => $domainName,
        ];

        return $config;
    }

    /**
     * @notes 设置小程序配置
     * @param $params
     * @author ljj
     * @date 2022/2/16 9:51 上午
     */
    public function setConfig($params)
    {
        $qrCode = isset($params['qr_code']) ? FileService::setFileUrl($params['qr_code']) : '';

        ConfigService::set('mnp_setting', 'name', $params['name'] ?? '');
        ConfigService::set('mnp_setting', 'original_id', $params['original_id'] ?? '');
        ConfigService::set('mnp_setting', 'qr_code', $qrCode);
        ConfigService::set('mnp_setting', 'app_id', $params['app_id']);
        ConfigService::set('mnp_setting', 'app_secret', $params['app_secret']);
    }
}
