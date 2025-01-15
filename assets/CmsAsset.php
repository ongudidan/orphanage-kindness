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
class CmsAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'css/site.css',
        "/web/cms/css/bootstrap.min.css",
        "/web/cms/css/feather.css",
        "/web/cms/css/flags.css",
        "/web/cms/css/fontawesome.min.css",
        "/web/cms/css/all.min.css",
        "/web/cms/css/style.css",
        "/web/cms/css/dan.css",
        "/web/cms/css/dan2.css",


        "/web/cms/css/datatables.min.css",
        "/web/cms/css/toastr.min.css",
        "https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap",

        // "/web/cms/otika/assets/css/style.css",


        // "https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css",
        // "https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css",

        "/web/cms/css/toatr.css",

        // "/web/cms/remos/css/animate.min.css",
        // "/web/cms/remos/css/animation.css",
        // // "/web/cms/remos/css/bootstrap.css",
        // "/web/cms/remos/css/bootstrap-select.min.css",
        // // "/web/cms/remos/css/style.css",


    ];
    public $js = [
        // "/web/cms/dashboard/assets/js/jquery-3.6.0.min.js",
        "/web/cms/js/bootstrap.bundle.min.js",
        "/web/cms/js/feather.min.js",
        "/web/cms/js/jquery.slimscroll.min.js",
        "/web/cms/js/apexcharts.min.js",
        "/web/cms/js/chart-data.js",
        "/web/cms/js/datatables.min.js",
        "/web/cms/js/sweetalert.min.js",
        "/web/cms/js/custom.js",
        // "https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js",
        // "https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js",
        //    "https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js",

        "/web/cms/otika/assets/bundles/datatables/datatables.min.js",
        "/web/cms/otika/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js",
        "/web/cms/otika/assets/js/page/datatables.js",
        "/web/cms/js/canvasjs.min.js",



        "/web/cms/js/toastr.min.js",
        "/web/cms/js/toastr.js",

        "/web/cms/js/script.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
