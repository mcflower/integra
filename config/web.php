<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'language' => 'ru-RU',
    'name' => 'Integra For Life',
    'id' => 'integra',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'modules' => [
        'admin092' => [
            'class' => 'app\modules\admin092\Module',
        ],
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '1PP9zWfzgirOv-uLRLbLMOj3NpUDdlpF',
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
        'mail' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath'         => '@app/mail',
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.yandex.ru',
                'username' => 'robot@integraforlife.com',
                'password' => 'Flower192543',
                'port' => '465',
                'encryption' => 'ssl',
            ],
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
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '/' => 'site/index',
                'admin092' => 'admin092/default/index',
                'video/<video_id:[0-9]+>'=>'site/video',
                'payment/<hash:[a-zA-Z0-9]+>'=>'site/payment',
                'invoice/<hash:[a-zA-Z0-9]+>'=>'site/invoice',
                'webinar/<activity:[a-zA-Z0-9]+>'=>'site/webinar',
                'personal-certificate/<hash:[a-zA-Z0-9]+>'=>'site/personal-certificate',
                '<view>' => 'site/<view>',
            ],
        ],
    ],
    'params' => $params,
];

$config['bootstrap'][] = 'debug';
$config['modules']['debug'] = [
    'class' => 'yii\debug\Module',
    // uncomment the following to add your IP if you are not connecting from localhost.
    'allowedIPs' => ['195.144.199.79'],
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => ['127.0.0.1', '::1'],
//        'allowedIPs' => ['89.232.118.205'],
    ];
}

return $config;
