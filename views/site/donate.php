<?php

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

$this->title = 'Donate';
$this->title = 'Donate Form';

?>

<!--Start slider-section-->
<section class="slider-section" style="background-image:url(/web/frontend/images/slider/2.jpg);">
    <div class="container">
        <div class="slider">
            <div class="text team-light">
                <h2> Donate <span>Now</span></h2>
                <p><a href="/">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> Donate</p>
            </div>
        </div>
    </div>
</section>
<!--End slider-section-->

<!-- start donation-section-->
<section class="contact-section contact-page">
    <div class="container">
        <div class="section-title text-center">
            <h2>Make a Donation via M-PESA</h2>
            <p>Your support makes a difference.</p>
        </div>

        <?php if (Yii::$app->session->hasFlash('success')): ?>
            <div class="alert alert-success text-center">
                <?= Yii::$app->session->getFlash('success') ?>
            </div>
        <?php elseif (Yii::$app->session->hasFlash('error')): ?>
            <div class="alert alert-danger text-center">
                <?= Yii::$app->session->getFlash('error') ?>
            </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12">
                <div class="default-form-2 clearfix">
                    <?php
                    $form = ActiveForm::begin([
                        'id' => 'donation-form',
                        'method' => 'post',
                        'action' => ['site/initiate'], // make sure your controller handles this
                        'options' => ['class' => 'default-form'],
                    ]);
                    ?>

                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <?= $form->field($model, 'phone_number')->textInput([
                                    'placeholder' => 'Phone (e.g. 2547XXXXXXXX)',
                                    'required' => true,
                                ])->label(false) ?>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <?= $form->field($model, 'amount')->textInput([
                                    'placeholder' => 'Amount in KES',
                                    'required' => true,
                                ])->label(false) ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <?= Html::submitButton('Donate Now', [
                            'class' => 'btn btn-1 btn-block',
                            'data-loading-text' => 'Sending...',
                        ]) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End donation-section-->