<?php
/**
 * This file is generated by the "yii asset" command.
 * DO NOT MODIFY THIS FILE DIRECTLY.
 * @version 2015-12-14 17:33:01
 */
return [
    'all' => [
        'class' => 'frontend\\assets\\AllAsset',
        'basePath' => '@webroot',
        'baseUrl' => '@web',
        'js' => [
            'compressed-assets/all-1bf96460d930621ec14c72db351fefc7.js',
        ],
        'css' => [
            'compressed-assets/all-aab2b51f1f35f58eea7c1572c0cffcf8.css',
        ],
    ],
    'yii\\web\\JqueryAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'all',
        ],
    ],
    'yii\\web\\YiiAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\JqueryAsset',
            'all',
        ],
    ],
    'yii\\bootstrap\\BootstrapAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'all',
        ],
    ],
    'frontend\\assets\\AppAsset' => [
        'sourcePath' => null,
        'js' => [],
        'css' => [],
        'depends' => [
            'yii\\web\\YiiAsset',
            'yii\\bootstrap\\BootstrapAsset',
            'all',
        ],
    ],
];