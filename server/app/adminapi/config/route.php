<?php


return [
    'middleware' => [
        // 初始化
        app\adminapi\http\middleware\InitMiddleware::class,
        // 登录验证
        app\adminapi\http\middleware\LoginMiddleware::class,
        // 权限认证
        app\adminapi\http\middleware\AuthMiddleware::class,
        // 演示模式 - 禁止提交数据
        app\adminapi\http\middleware\CheckDemoMiddleware::class,
        // 演示模式 - 不返回敏感数据
        app\adminapi\http\middleware\EncryDemoDataMiddleware::class,
    ],
];
