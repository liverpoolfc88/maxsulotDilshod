<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'plugins/flexslider/flexslider.css',
        'css/cubeportfolio.min.css',
        'css/style.css',
        'css/site.css',
        'bodybg/bg1.css',
        'skins/default.css'

    ];
    public $js = [

        'js/modernizr.custom.js',
        'js/jquery.easing.1.3.js',
        'plugins/flexslider/jquery.flexslider-min.js',
        'plugins/flexslider/flexslider.config.js',
        'js/jquery.appear.js',
        'js/stellar.js',
        'js/classie.js',
        'js/uisearch.js',
        'js/jquery.cubeportfolio.min.js',
        'js/google-code-prettify/prettify.js',
        'js/animate.js',
        'js/custom.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
