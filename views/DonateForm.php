<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Donate';
?>

<h1>Support Us via M-Pesa</h1>

<?php if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success"><?= Yii::$app->session->getFlash('success') ?></div>
<?php elseif (Yii::$app->session->hasFlash('error')): ?>
    <div class="alert alert-danger"><?= Yii::$app->session->getFlash('error') ?></div>
<?php endif; ?>

<?php $form = ActiveForm::begin(['action' => ['site/initiate']]); ?>

<?= $form->field($model, 'phone_number')->textInput(['placeholder' => 'e.g. 254712345678']) ?>

<?= $form->field($model, 'amount')->textInput(['value' => 10]) ?>

<div class="form-group">
    <?= Html::submitButton('Donate Now', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>
