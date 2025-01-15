<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\bootstrap5\Alert;
use yii\bootstrap5\Alert as Bootstrap5Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <!--Page Wrapper-->
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>
        <?= $this->render('components/_header') ?>
        <main>
            <div>
                <?= $content ?>
            </div>
        </main>

        <!--.news-seciton-->
        <?= $this->render('components/_news-section') ?>
        <!--/news-seciton-->

        <!--Page Footer-->
        <?= $this->render('components/_footer') ?>
        <!--/Page Footer-->

    </div>


    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>