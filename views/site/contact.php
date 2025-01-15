<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- <div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Thank you for contacting us. We will respond to you as soon as possible.
        </div>

        <p>
            Note that if you turn on the Yii debugger, you should be able
            to view the mail message on the mail panel of the debugger.
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
            <?php endif; ?>
        </p>

    <?php else: ?>

        <p>
            If you have business inquiries or other questions, please fill out the following form to contact us.
            Thank you.
        </p>

        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'subject') ?>

                <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                <?= $form->field($model, 'verifyCode')->widget(Captcha::class, [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

    <?php endif; ?>
</div> -->


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
            <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan<br>
                ipsuy veli. Nam nec tellus a odio tincidunt auctor </p>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-12">
                <div class="contact-us">
                    <div class="contaat-item">
                        <div class="icon">
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </div>
                        <div class="text">
                            <h4>Address:</h4>
                            <p>8 haji Mohshin road,
                                <br>Khulna, Bangladesh
                            </p>
                        </div>
                    </div>
                    <div class="contaat-item con-pd">
                        <div class="icon">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="text">
                            <h4>Email Address:</h4>
                            <p>user@your-site.com
                                <br>user@gmail.com
                            </p>
                        </div>
                    </div>
                    <div class="contaat-item con-pd">
                        <div class="icon">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="text">
                            <h4>Phone</h4>
                            <p>+55 654 545 122
                                <br>+55 654 545 123
                            </p>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-12">
                        <div class="default-form-2 clearfix">
                            <form id="contact-form" name="contact_form" class="default-form" action="http://perconcept.muzahid.com/Kindness/sendmail.php" method="post">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" name="form_name" value="" placeholder="Full Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="email" name="form_email" value="" placeholder="Email Address" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="form_subject" value="" placeholder="Subject" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="form_phone" value="" placeholder="phone" required="">
                                        </div>
                                        <div class="form-group comments">
                                            <textarea name="form_message" placeholder="Detail" required=""></textarea>
                                        </div>
                                        <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                        <button class="btn btn-1" type="submit" data-loading-text="Please wait...">Contact Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End blog-section-->