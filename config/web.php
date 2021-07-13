<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'live_nature',
    'name' => 'O‘zbekiston Respublikasi «Jonli tabiat» jamoat birlashmasi',
    'language' => 'uz-Latn-uz',
    'sourceLanguage' => 'uz-Latn-uz',
    'timezone' => 'Asia/Tashkent',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            'baseUrl' => '',
            'cookieValidationKey' => '9gzwzzYGL6utM90FLxN32iKvh5_E0mtO',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
            'loginUrl' => '/admin/default/login'
        ],
        'i18n' => [
            'translations' => [
                'front' => [
                    'class' => 'yii\i18n\DbMessageSource',
                    'sourceLanguage' => 'uz-Latn-UZ',
                    'forceTranslation' => true,
                    'enableCaching' => true,
                ],
            ],
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
        'db' => $db,
        'urlManager' => [
            'class' => 'codemix\localeurls\UrlManager',
            'languages' => ['uz-latin' => 'uz-Latn-UZ', 'uz-cyrl' => 'uz-Cyrl-UZ', 'ru' => 'ru', 'en' => 'en'],
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableLanguageDetection' => false,
            'enableDefaultLanguageUrlCode' => false,
            'languageSessionKey' => 'language',
            'baseUrl' => '',
            'ignoreLanguageUrlPatterns' => [
                '/admin/' => '/admin/',
                '/elfinder/' => '/elfinder/',
                '/gii/' => '/gii/',
            ],
            'rules' => [
                '' => 'site/index',
            ],
        ],
    ],
    'params' => $params,
    'modules' => [
        'admin' => [
            'class' => 'app\modules\admin\admin',
        ],
    ],
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
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
