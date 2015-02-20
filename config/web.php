<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'ru-RU',
    'components' => [
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                ],
            ],
        ],
//        'i18n' => [
//            'class' => Zelenin\yii\modules\I18n\components\I18N::className(),
//            'languages' => ['ru-RU', 'en-US'],
//            'translations' => [
//                'yii' => [
//                    'class' => yii\i18n\DbMessageSource::className()
//                ]
//            ]
//        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'ain1mVwg-YUEAN5_J6aN-I12s4ivw1xD',
            'class' => 'app\components\MultiLangRequest'
        ],
        'multiLang' => [
            'class' => 'app\components\MultiLangHelper',
            'defaultLanguage'=>'ru',
            'languages' => ['ru', 'en'],
            'codes' => [
                'ru' => 'ru-RU',
                'en' => 'en-US',
            ],
            'labels' => [
                'ru' => 'RU',
                'en' => 'EN',
            ],
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
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                // multilang
                '<language:(en)>' => 'site/index',
//                '<language:(en)>/cv/samokhvalov' => 'site/cv',
//                '<language:(en)>/<action>' => 'site/<action>',
//                '<language:(en)>/<controller:\w+>/<id:\d+>' => '<controller>/view',
//                '<language:(en)>/<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
//                '<language:(en)>/<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                
                // default
                '/' => 'site/index',
//                'resume/samokhvalov' => 'site/cv',
//                '<action>'=>'site/<action>',
//                '<controller:\w+>/<id:\d+>' => '<controller>/view',
//                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
//                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ],
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
//    $config['bootstrap'][] = 'debug';
//    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
}

return $config;
