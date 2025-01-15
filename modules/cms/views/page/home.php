<?php

use app\models\ProductCategory;
use app\models\ProductSubCategory;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Product $model */
/** @var yii\widgets\ActiveForm $form */
?>

<?php $form = ActiveForm::begin([
    'id' => 'main-form',
    'enableAjaxValidation' => false, // Disable if you're not using AJAX
    'action' => 'home', // Set action based on create or update
    'method' => 'post',
]); ?>

<div class="row">
    <div class="col-sm-12">
        <div class="card comman-shadow">
            <div class="card-body">
                <!-- <h1>Home Page</h1> -->
                <div class="row">
                    <div class=" row col-sm-12">
                        <h1>Banner Section</h1>

                        <div class="col-12 col-sm-12">
                            <div class="form-group local-forms">
                                <?= $form->field($model, 'main_banner_title')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12">
                            <div class="form-group local-forms">
                                <?= $form->field($model, 'main_banner_sub_title')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12">
                            <div class="form-group local-forms">
                                <?= $form->field($model, 'mainBannerImage')->fileInput([
                                    'id' => 'main-banner-input',
                                    'maxlength' => true,
                                ])->label(false) ?>

                                <div class="row mt-3">
                                    <div class="col-12 text-start">
                                        <div class="image-preview">
                                            <img
                                                id="main-banner-preview"
                                                src="<?= $model->main_banner ? Yii::getAlias('/web/uploads/') . $model->main_banner : '' ?>"
                                                alt="Image Preview"
                                                class="img-thumbnail"
                                                style="max-width: 150px; max-height: 150px; <?= $model->main_banner ? '' : 'display: none;' ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" row col-sm-12">
                        <h1>Causes Section</h1>

                        <div class="col-12 col-sm-12">
                            <div class="form-group local-forms">
                                <?= $form->field($model, 'causes_title')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12">
                            <div class="form-group local-forms">
                                <?= $form->field($model, 'causes_sub_title')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12">
                            <div class="form-group local-forms">
                                <?= $form->field($model, 'causes_description')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12">
                            <div class="form-group local-forms">
                                <?= $form->field($model, 'causes_count')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                    </div>

                    <div class=" row col-sm-12">
                        <h1>Events Section</h1>

                        <div class="col-12 col-sm-12">
                            <div class="form-group local-forms">
                                <?= $form->field($model, 'events_title')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12">
                            <div class="form-group local-forms">
                                <?= $form->field($model, 'events_description')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12">
                            <div class="form-group local-forms">
                                <?= $form->field($model, 'events_count')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                    </div>

                    <div class=" row col-sm-12">
                        <h1>Help Section</h1>

                        <div class="col-12 col-sm-12">
                            <div class="form-group local-forms">
                                <?= $form->field($model, 'help_title')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12">
                            <div class="form-group local-forms">
                                <?= $form->field($model, 'help_description')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12">
                            <div class="form-group local-forms">
                                <?= $form->field($model, 'video_link')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                    </div>


                    <div class=" row col-sm-12">
                        <h1>Contact Section </h1>

                        <div class="col-12 col-sm-12">
                            <div class="form-group local-forms">
                                <?= $form->field($model, 'contact_title')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12">
                            <div class="form-group local-forms">
                                <?= $form->field($model, 'contactImage')->fileInput([
                                    'id' => 'contact-image-input',
                                    'maxlength' => true,
                                ])->label(true) ?>

                                <div class="row mt-3">
                                    <div class="col-12 text-start">
                                        <div class="image-preview">
                                            <img
                                                id="contact-image-preview"
                                                src="<?= $model->contact_image ? Yii::getAlias('/web/uploads/') . $model->contact_image : '' ?>"
                                                alt="Image Preview"
                                                class="img-thumbnail"
                                                style="max-width: 150px; max-height: 150px; <?= $model->contact_image ? '' : 'display: none;' ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12">
                            <div class="form-group local-forms">
                                <?= $form->field($model, 'backgroundImage')->fileInput([
                                    'id' => 'background-image-input',
                                    'maxlength' => true,
                                ])->label(true) ?>

                                <div class="row mt-3">
                                    <div class="col-12 text-start">
                                        <div class="image-preview">
                                            <img
                                                id="background-image-preview"
                                                src="<?= $model->background_image ? Yii::getAlias('/web/uploads/') . $model->background_image : '' ?>"
                                                alt="Image Preview"
                                                class="img-thumbnail"
                                                style="max-width: 150px; max-height: 150px; <?= $model->background_image ? '' : 'display: none;' ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
           
                    <div class="col-12">
                        <div class="student-submit d-flex justify-content-center">
                            <?= Html::submitButton('Save', ['class' => 'btn btn-primary', 'form' => 'main-form']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php ActiveForm::end(); ?>


<?php
$this->registerJs(<<<JS
    document.getElementById('main-banner-input').addEventListener('change', function(event) {
        const input = event.target;
        const preview = document.getElementById('main-banner-preview');
        const file = input.files[0];
        
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result; // Update the image source
                preview.style.display = 'block'; // Ensure the image is visible
            };
            reader.readAsDataURL(file); // Read the file as a data URL
        } else {
            preview.src = ''; // Clear the image source if no file is selected
            preview.style.display = 'none'; // Hide the image
        }
    });
JS);

?>


<?php
$this->registerJs(<<<JS
    document.getElementById('contact-image-input').addEventListener('change', function(event) {
        const input = event.target;
        const preview = document.getElementById('contact-image-preview');
        const file = input.files[0];
        
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result; // Update the image source
                preview.style.display = 'block'; // Ensure the image is visible
            };
            reader.readAsDataURL(file); // Read the file as a data URL
        } else {
            preview.src = ''; // Clear the image source if no file is selected
            preview.style.display = 'none'; // Hide the image
        }
    });
JS);

?>

<?php
$this->registerJs(<<<JS
    document.getElementById('background-image-input').addEventListener('change', function(event) {
        const input = event.target;
        const preview = document.getElementById('background-image-preview');
        const file = input.files[0];
        
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result; // Update the image source
                preview.style.display = 'block'; // Ensure the image is visible
            };
            reader.readAsDataURL(file); // Read the file as a data URL
        } else {
            preview.src = ''; // Clear the image source if no file is selected
            preview.style.display = 'none'; // Hide the image
        }
    });
JS);

?>