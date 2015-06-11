<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [],

    'components' => [   
        'view' => [
            'theme' => [
                'pathMap' => ['@backend/views' => '@backend/themes/sbadmin'],
                'baseUrl'   => '@web/../themes/sbadmin'
            ]
        ],
        

        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        
        'urlManager'=>[
            'enablePrettyUrl' => false,
            'class' => 'yii\web\UrlManager',
            'hostInfo' => 'http://localhost:8081/homesale/backend',
            'baseUrl' => '../../',
         ],

         'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],


    ],
    'params' => $params,
];
