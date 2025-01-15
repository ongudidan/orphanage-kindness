<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\HomePage $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="home-page-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'main_banner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'main_banner_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'main_banner_Sub_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'causes_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'causes_sub_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'causes_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'causes_count')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'events_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'events_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'events_count')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'help_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'help_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'video_link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'target_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updated_by')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
