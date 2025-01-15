<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\SiteInfo $model */

$this->title = 'Update Site Info: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Site Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="site-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
