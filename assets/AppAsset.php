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
        'css/font-awesome.css',
        'css/flaticon.css',
        'css/slick-slider.css',
        'css/fancybox.css',
        'style.css',
        'css/color.css',
        'css/responsive.css',
    ];
    public $js = [
        'script/slick.slider.min.js',
        'script/jquery.countdown.min.js',
        'script/fancybox.pack.js',
        'script/isotope.min.js',
        'script/progressbar.js',
        'script/counter.js',
        'https://maps.googleapis.com/maps/api/js',
        'script/functions.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
