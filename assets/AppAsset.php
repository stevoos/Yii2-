<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'third/bootstrap/css/bootstrap.min.css',
        'third/bootstrap-material-design-master/dist/css/material.min.css',
        'third/bootstrap-material-design-master/dist/css/ripples.min.css',
        'third/bootstrap-material-design-master/dist/css/roboto.min.css',

    ];
    public $js = [
        'third/bootstrap/js/bootstrap.min.js',
        'third/bootstrap-material-design-master/dist/js/material.min.js',
        'third/bootstrap-material-design-master/dist/js/ripples.min.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
