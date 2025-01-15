<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Cause $model */

$this->title = 'Create Cause';
$this->params['breadcrumbs'][] = ['label' => 'Causes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cause-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
