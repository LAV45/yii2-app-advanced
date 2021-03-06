<?php

return [
    'bootstrap' => [
        'debug',
        'gii',
    ],
    'modules' => [
        'debug' => [
            'class' => yii\debug\Module::class,
            'allowedIPs' => ['*'],
        ],
        'gii' => [
            'class' => yii\gii\Module::class,
            'allowedIPs' => ['*'],
        ],
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '',
        ],
        'assetManager' => [
            'linkAssets' => true,
        ],
    ],
];
