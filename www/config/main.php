<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-www',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'www\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-www',
            'csrfCookie' => [
                'name' => '_csrf-www',
                'httpOnly' => true,
                'sameSite' => yii\web\Cookie::SAME_SITE_LAX,
            ]
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'session' => [
            'name' => '_session-www',
            'cookieParams' => [
                'httpOnly' => true,
                'sameSite' => yii\web\Cookie::SAME_SITE_LAX,
            ],
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => require __DIR__ . '/url_rules.php',
        ],
    ],
    'params' => $params,
];
