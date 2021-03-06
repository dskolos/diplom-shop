<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'B2ehaxh8RVu_a4Ya7xmUPIih9A8eS1Hl',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
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
        'db' => require(__DIR__ . '/db.php'),
        'ddb' => require(__DIR__ . '/ddb.php'),

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '' => '/tech/index',
//                '/tools' => '/tool/index',
//                '/tools' => '/tools/info/index',
                '/admin' => '/admin/default/index',
//                '/tools' => '/admin/default/index',
                '/info' => '/tools/info/index',
                '/info/list' => '/tools/info/list',
                '/info/<action>' => '/tools/info/<action>',
                '/tools' => '/tools/info/index',
                '/db' => '/db/default/index',
                '/db/tips' => '/db/tips/index',
//                '/admin' => '/admin/index',
                '/sell' => '/sell/index',
                '/contact' => '/site/contact',
                '/login' => '/site/login',
//                '/<action>' => '/site/<action>',
                '/about' => '/about/index',
            ],
        ],

    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
    $config['modules']['tools'] = [
        'class' => 'app\modules\tools\ToolsModule',
    ];
    $config['modules']['admin'] = [
        'class' => 'app\modules\admin\AdminModule',
    ];
    $config['modules']['db'] = [
        'class' => 'app\modules\db\DbModule',
    ];
}

return $config;
