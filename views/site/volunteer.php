<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
/* @var $this yii\web\View */


$this->title = 'Volunteer Application';
?>
<h1>WE HELP MANY PEOPLE</h1>
<h2>WANT TO BECOME A VOLUNTEER!</h2>

<div class="form-container">
    <?php $form = ActiveForm::begin(['id' => 'volunteerForm']); ?>

    <?= $form->field($model, 'name')->textInput()->label('Full Name') ?>
    <?= $form->field($model, 'email')->textInput()->label('Email') ?>
    <?= $form->field($model, 'phone')->textInput()->label('Phone Number') ?>
    <?= $form->field($model, 'skills')->textInput()->label('Skills') ?>
    <?= $form->field($model, 'availability')->dropDownList(
        ['weekends' => 'Weekends', 'weekdays' => 'Weekdays', 'both' => 'Both'],
        ['prompt' => 'Select availability']
    )->label('Availability') ?>

    <?= Html::submitButton('APPLY NOW', ['class' => 'btn btn-primary']) ?>

    <?php ActiveForm::end(); ?>

    <?php if (Yii::$app->session->hasFlash('success')): ?>
        <div class="alert alert-success"><?= Yii::$app->session->getFlash('success') ?></div>
    <?php endif; ?>
</div>