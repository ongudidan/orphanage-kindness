<?php

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

?>
<!--Start slider-section-->
<section class="slider-section" style="background-image:url(/web/frontend/images/slider/2.jpg);">
    <div class="container">
        <div class="slider">
            <div class="text team-light">
                <h2> contact <span>with</span> us </h2>
                <p><a href="index-2.html">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> contact</p>
            </div>
        </div>
    </div>
</section>
<!--End slider-section-->
<!-- start blog-section-->
<section class="contact-section contact-page">
    <div class="container">
        <div class="section-title text-center">
            <h2>contact us</h2>

        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-12">

                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-12">
                        <div class="default-form-2 clearfix">
                            <?php
                            $form = ActiveForm::begin([
                            'id' => 'contact-form',
                            'action' => 'http://perconcept.muzahid.com/Kindness/sendmail.php',
                            'method' => 'post',
                            'options' => ['class' => 'default-form'],
                            ]);
                            ?>

                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <?= $form->field($model, 'form_name')->textInput([
                                            'placeholder' => 'Full Name',
                                            'required' => true,
                                        ])->label(false) ?>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <?= $form->field($model, 'form_email')->input('email', [
                                            'placeholder' => 'Email Address',
                                            'required' => true,
                                        ])->label(false) ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <?= $form->field($model, 'form_subject')->textInput([
                                            'placeholder' => 'Subject',
                                            'required' => true,
                                        ])->label(false) ?>
                                    </div>
                                    <div class="form-group">
                                        <?= $form->field($model, 'form_phone')->textInput([
                                            'placeholder' => 'Phone',
                                            'required' => true,
                                        ])->label(false) ?>
                                    </div>
                                    <div class="form-group comments">
                                        <?= $form->field($model, 'form_message')->textarea([
                                            'placeholder' => 'Detail',
                                            'required' => true,
                                        ])->label(false) ?>
                                    </div>
                                    <?= Html::hiddenInput('form_botcheck', '', ['id' => 'form_botcheck', 'class' => 'form-control']) ?>
                                    <div class="form-group">
                                        <?= Html::submitButton('Contact Now', [
                                            'class' => 'btn btn-1',
                                            'data-loading-text' => 'Please wait...',
                                        ]) ?>
                                    </div>
                                </div>
                            </div>

                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End blog-section-->