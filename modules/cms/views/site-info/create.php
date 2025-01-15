<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\SiteInfo $model */

$this->title = 'Create Site Info';
$this->params['breadcrumbs'][] = ['label' => 'Site Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
