<?php
/**
 * Created by PhpStorm.
 * User: wumahoo
 * Date: 2016/11/26
 * Time: 上午9:21
 */
define('YII_ENV', 'tests');
defined('YII_DEBUG') or define('YII_DEBUG', true);
require_once(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');
require __DIR__ .'/../vendor/autoload.php';
$config = yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../common/config/main.php'),
    require(__DIR__ . '/../common/config/main-local.php'),
    require(__DIR__ . '/../frontend/config/main.php'),
    require(__DIR__ . '/../frontend/config/main-local.php')
);
(new yii\web\Application($config));