<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        'CustomComponent' =>[
            'class' => 'common\components\CustomComponent',
            'on event_trigger' => ['common\components\CustomComponent', 'actionRecord'],
        ],
    ],
];
