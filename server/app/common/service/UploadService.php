<?php


namespace app\common\service;


use app\common\enum\FileEnum;
use app\common\model\file\File;
use app\common\service\storage\Driver as StorageDriver;
use Exception;


class UploadService
{

    /**
     * @notes 上传图片
     * @param $cid
     * @param int $user_id
     * @param string $saveDir
     * @return array
     * @throws Exception
     * @author 段誉
     * @date 2021/12/29 16:30
     */
    public static function image($cid, int $sourceId = 0, int $source = FileEnum::SOURCE_ADMIN, string $saveDir = 'uploads/images')
    {
        try {
            $config = [
                'default' => ConfigService::get('storage', 'default', 'local'),
                'engine'  => ConfigService::get('storage') ?? ['local' => []],
            ];

            // 2、执行文件上传
            $StorageDriver = new StorageDriver($config);
            $StorageDriver->setUploadFile('file');
            $fileName = $StorageDriver->getFileName();
            $fileInfo = $StorageDriver->getFileInfo();

            // 校验上传文件后缀
            if (!in_array(strtolower($fileInfo['ext']), config('project.file_image'))) {
                throw new Exception("上传图片不允许上传" . $fileInfo['ext'] . "文件");
            }

            // 上传文件
            $saveDir = $saveDir . '/' .  date('Ymd');
            if (!$StorageDriver->upload($saveDir)) {
                throw new Exception($StorageDriver->getError());
            }

            // 3、处理文件名称
            if (strlen($fileInfo['name']) > 128) {
                $name = substr($fileInfo['name'], 0, 123);
                $nameEnd = substr($fileInfo['name'], strlen($fileInfo['name']) - 5, strlen($fileInfo['name']));
                $fileInfo['name'] = $name . $nameEnd;
            }

            // 4、写入数据库中
            $file = File::create([
                'cid'         => $cid,
                'type'        => FileEnum::IMAGE_TYPE,
                'name'        => $fileInfo['name'],
                'uri'         => $saveDir . '/' . str_replace("\\", "/", $fileName),
                'source'      => $source,
                'source_id'   => $sourceId,
                'create_time' => time(),
            ]);

            // 5、返回结果
            return [
                'id'   => $file['id'],
                'cid'  => $file['cid'],
                'type' => $file['type'],
                'name' => $file['name'],
                'uri'  => FileService::getFileUrl($file['uri']),
                'url'  => $file['uri']
            ];
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }


    /**
     * @notes 视频上传
     * @param $cid
     * @param int $user_id
     * @param string $saveDir
     * @return array
     * @throws Exception
     * @author 段誉
     * @date 2021/12/29 16:32
     */
    public static function video($cid, int $sourceId = 0, int $source = FileEnum::SOURCE_ADMIN, string $saveDir = 'uploads/video')
    {
        try {
            $config = [
                'default' => ConfigService::get('storage', 'default', 'local'),
                'engine'  => ConfigService::get('storage') ?? ['local' => []],
            ];

            // 2、执行文件上传
            $StorageDriver = new StorageDriver($config);
            $StorageDriver->setUploadFile('file');
            $fileName = $StorageDriver->getFileName();
            $fileInfo = $StorageDriver->getFileInfo();

            // 校验上传文件后缀
            if (!in_array(strtolower($fileInfo['ext']), config('project.file_video'))) {
                throw new Exception("上传视频不允许上传" . $fileInfo['ext'] . "文件");
            }

            // 上传文件
            $saveDir = $saveDir . '/' .  date('Ymd');
            if (!$StorageDriver->upload($saveDir)) {
                throw new Exception($StorageDriver->getError());
            }

            // 3、处理文件名称
            if (strlen($fileInfo['name']) > 128) {
                $name = substr($fileInfo['name'], 0, 123);
                $nameEnd = substr($fileInfo['name'], strlen($fileInfo['name']) - 5, strlen($fileInfo['name']));
                $fileInfo['name'] = $name . $nameEnd;
            }

            // 4、写入数据库中
            $file = File::create([
                'cid'         => $cid,
                'type'        => FileEnum::VIDEO_TYPE,
                'name'        => $fileInfo['name'],
                'uri'         => $saveDir . '/' . str_replace("\\", "/", $fileName),
                'source'      => $source,
                'source_id'   => $sourceId,
                'create_time' => time(),
            ]);

            // 5、返回结果
            return [
                'id'   => $file['id'],
                'cid'  => $file['cid'],
                'type' => $file['type'],
                'name' => $file['name'],
                'uri'  => FileService::getFileUrl($file['uri']),
                'url'  => $file['uri']
            ];
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }


    /**
     * 上传音频
     * @author 段延庆
     * @date 2023-06-04
     */
    public static function audio($cid, int $sourceId = 0, int $source = FileEnum::SOURCE_ADMIN, string $saveDir = 'uploads/audio')
    {
        try {
            $config = [
                'default' => ConfigService::get('storage', 'default', 'local'),
                'engine'  => ConfigService::get('storage') ?? ['local' => []],
            ];

            // 2、执行文件上传
            $StorageDriver = new StorageDriver($config);
            $StorageDriver->setUploadFile('file');
            $fileName = $StorageDriver->getFileName();
            $fileInfo = $StorageDriver->getFileInfo();

            // 校验上传文件后缀
            if (!in_array(strtolower($fileInfo['ext']), config('project.file_audio'))) {
                throw new Exception("上传音频不允许上传" . $fileInfo['ext'] . "文件");
            }

            // 上传文件
            $saveDir = $saveDir . '/' .  date('Ymd');
            if (!$StorageDriver->upload($saveDir)) {
                throw new Exception($StorageDriver->getError());
            }

            // 3、处理文件名称
            if (strlen($fileInfo['name']) > 128) {
                $name = substr($fileInfo['name'], 0, 123);
                $nameEnd = substr($fileInfo['name'], strlen($fileInfo['name']) - 5, strlen($fileInfo['name']));
                $fileInfo['name'] = $name . $nameEnd;
            }

            // 4、写入数据库中
            $file = File::create([
                'cid'         => $cid,
                'type'        => FileEnum::AUDIO_TYPE,
                'name'        => $fileInfo['name'],
                'uri'         => $saveDir . '/' . str_replace("\\", "/", $fileName),
                'source'      => $source,
                'source_id'   => $sourceId,
                'create_time' => time(),
            ]);

            // 5、返回结果
            return [
                'id'   => $file['id'],
                'cid'  => $file['cid'],
                'type' => $file['type'],
                'name' => $file['name'],
                'uri'  => FileService::getFileUrl($file['uri']),
                'url'  => $file['uri']
            ];
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}
