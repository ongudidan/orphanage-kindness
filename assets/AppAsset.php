<?php

/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
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
        'css/site.css',
        "/web/frontend/css/responsive.css",
        "/web/frontend/css/bootstrap.css",
        "/web/frontend/css/style.css",
        "/web/frontend/css/revolution-slider.css",
    ];
    public $js = [
        "/web/frontend/js/jquery.js",
        "/web/frontend/js/bootstrap.min.js",
        "/web/frontend/js/jquery.countTo.js",
        "/web/frontend/js/isotope.js",
        "/web/frontend/js/jquery.appear.js",
        "/web/frontend/js/html5lightbox/html5lightbox.js",
        "/web/frontend/js/owl.js",
        "/web/frontend/js/validate.js",
        "/web/frontend/js/wow.js",
        "/web/frontend/js/revolution.min.js",
        "/web/frontend/js/jquery.countdown.js",
        "/web/frontend/js/custom.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
