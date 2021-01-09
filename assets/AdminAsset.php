<?php
/**
 * Created by PhpStorm.
 * User: ilya_zelenskiy
 * Date: 2019-02-27
 * Time: 17:27
 */

namespace app\assets;
use yii\web\AssetBundle;


class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/admin.css',
        //'css/datepicker.min.css',
        //'css/chosen.min.css',
//        'css/magnific-popup.css',
//        'css/footable.standalone.css',
//        'css/FooTable.Glyphicons.css',
//        'css/FooTable.FontAwesome.css',

    ];
    public $js = [
        //'js/chosen.jquery.min.js',
//        'js/jquery.magnific-popup.js',
//        'js/jquery.footable.js',
//        'js/animate_popup.js',
        //'js/datepicker.min.js',
        'js/jquery.maskedinput.js',
        'js/admin.js',
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];

}