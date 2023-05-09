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
        //'css/jquery.fancybox.min.css',
        'css/owl.carousel.css',
        'css/owl.theme.default.css',
        'css/boilerplate.css',
        'css/magnific-popup.css',
        'css/site.css?i=11',
        'css/popups.css?i=6',
        'css/video-js.css?i=8',
    ];
    public $js = [
        //'js/jquery.fancybox.min.js',
        'js/jquery.magnific-popup.min.js',
        'js/owl.carousel.min.js',
        'js/jquery.maskedinput.js',
        'js/video.min.js',
        'js/script.js?i=11',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
