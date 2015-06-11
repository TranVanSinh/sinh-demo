<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
        'urlManager'=>[
                        'enablePrettyUrl' => false,
                        'class' => 'yii\web\UrlManager',
                        'baseUrl' => '../../'
                ],
        'urlManagerBackend'=>[
                        'enablePrettyUrl' => false,
                        'class' => 'yii\web\UrlManager',
                        'baseUrl' => 'http://localhost:8081/homesale/backend',
                ],
        'authManager' => [
            'class' => 'yii\rbac\PhpManager',
        ],

    ],
];
