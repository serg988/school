<?php
require __DIR__ . '/../vendor/autoload.php';
define('YII_DEBUG', true);
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';
require_once __DIR__ . '/../functions.php';
$config = require __DIR__ . '/../config/web.php';
(new yii\web\Application($config))->run();
