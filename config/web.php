<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'zgjT7iDYlfsZdVShGuhkX4MH7Fsm2A2d',
            'baseUrl' => ''
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
        'db' => $db,

        'urlManager' => [
            'showScriptName' => false,
            'enableStrictParsing' => true,
            'enablePrettyUrl' => true,
            'rules' => [
                [
                    'pattern' => 'news/page/<page>',
                    'route' => 'news/index',
                    'suffix' => false
                ],
                [
                    'pattern' => 'news',
                    'route' => 'news/index',
                    'suffix' => false
                ],
                [
                    'pattern' => 'news/<alias>',
                    'route' => 'news/view',
                    'suffix' => false
                ],
                [
                    'pattern' => 'about',
                    'route' => 'pages/about',
                    'suffix' => false
                ],
                [
                    'pattern' => 'contacts',
                    'route' => 'pages/contacts',
                    'suffix' => false
                ],
                [
                    'pattern' => 'legislation',
                    'route' => 'pages/legislation',
                    'suffix' => false
                ],
                [
                    'pattern' => 'documents',
                    'route' => 'pages/documents',
                    'suffix' => false
                ],
                [
                    'pattern' => 'services',
                    'route' => 'pages/services',
                    'suffix' => false
                ],
                [
                    'pattern' => 'procedure_and_performance_terms',
                    'route' => 'pages/procedure-and-terms',
                    'suffix' => false
                ],
                [
                    'pattern' => 'memory_for_user',
                    'route' => 'pages/memory',
                    'suffix' => false
                ],
                [
                    'verb' => 'POST',
                    'pattern' => 'create-callback',
                    'route' => 'callback/create',
                    'suffix' => false
                ],
                '/' => 'site/index'
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
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
