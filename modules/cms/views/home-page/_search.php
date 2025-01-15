<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\cms\models\HomePageSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="home-page-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'main_banner') ?>

    <?= $form->field($model, 'main_banner_title') ?>

    <?= $form->field($model, 'main_banner_Sub_title') ?>

    <?= $form->field($model, 'causes_title') ?>

    <?php // echo $form->field($model, 'causes_sub_title') ?>

    <?php // echo $form->field($model, 'causes_description') ?>

    <?php // echo $form->field($model, 'causes_count') ?>

    <?php // echo $form->field($model, 'events_title') ?>

    <?php // echo $form->field($model, 'events_description') ?>

    <?php // echo $form->field($model, 'events_count') ?>

    <?php // echo $form->field($model, 'help_title') ?>

    <?php // echo $form->field($model, 'help_description') ?>

    <?php // echo $form->field($model, 'video_link') ?>

    <?php // echo $form->field($model, 'contact_title') ?>

    <?php // echo $form->field($model, 'contact_image') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'target_amount') ?>

    <?php // echo $form->field($model, 'location') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
