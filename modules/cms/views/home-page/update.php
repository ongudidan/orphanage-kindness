<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\HomePage $model */

$this->title = 'Update Home Page: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Home Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="home-page-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
