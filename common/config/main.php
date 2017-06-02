<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
    ],
];
?>

<VirtualHost *:80>
   ServerName web.app.it
   DocumentRoot "C:\xampp\htdocs\advanced\frontend\web"
</VirtualHost>