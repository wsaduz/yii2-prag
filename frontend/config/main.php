<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'ru',
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'assetManager' => [
            'bundles' => [

               
            ],
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
            'transport' => [
            'class' => 'Swift_SmtpTransport',
            'host' => 'smtp.gmail.com',
            'username' => 'aliakbarov245@gmail.com',
            'password' => '8920172ali',
            'port' => '587',
            'encryption' => 'tls',
            ],
            ],
        'request' => [
            'enableCsrfValidation' => false,
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'news/<id:\d+>' => 'test/index',
                'content' => 'test/qwerty',
                'users' => 'users/view',
                'user/<id:\d+>' => 'users/user',
                'comments' => 'first/comment',
                'comment-update/<id:\d+>' => 'first/comupdate'
            ],
        ],
        
    ],
    'params' => $params,
    'aliases' => [
        '@register' => 'http://prak.gg/frontend/web/first/register',
        '@images' => '/frontend/web/photo',
        "@logo" => '/frontend/web/photo/sb-logo.svg',
    ]
];
