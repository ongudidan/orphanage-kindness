<?php

use dosamigos\ckeditor\CKEditor;
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\SiteInfo $model */
/** @var yii\widgets\ActiveForm $form */
?>


<?php $form = ActiveForm::begin([
    'id' => 'main-form',
    'enableAjaxValidation' => false, // Disable if you're not using AJAX
    // 'action' => 'home', // Set action based on create or update
    'method' => 'post',
]); ?>

<div class="row">
    <div class="col-sm-12">
        <div class="card comman-shadow">
            <div class="card-body">
                <!-- <h1>Main Banner</h1> -->
                <div class="row">
                    <div class="col-12 col-sm-4">
                        <div class="form-group local-forms">
                            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>

                    <div class="col-12 col-sm-4">
                        <div class="form-group local-forms">
                            <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="form-group local-forms">
                            <?= $form->field($model, 'mission')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="form-group local-forms">
                            <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>

                    <div class="col-12 col-sm-4">
                        <div class="form-group local-forms">
                            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="form-group local-forms">
                            <?= $form->field($model, 'instagram')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="form-group local-forms">
                            <?= $form->field($model, 'facebook')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="form-group local-forms">
                            <?= $form->field($model, 'twitter')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="form-group local-forms">
                            <?= $form->field($model, 'footer_text')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>

                    <div class="col-12 col-sm-12">
                        <div class="form-group local-forms">
                            <?= $form->field($model, 'description')->widget(CKEditor::class, [
                                'options' => ['rows' => 6],
                                'preset' => 'basic', // Options: basic, standard, full
                            ]) ?>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6">
                        <div class="form-group local-forms">
                            <?= $form->field($model, 'logoFile')->fileInput([
                                'id' => 'logo-input',
                                'maxlength' => true,
                            ])->label('Upload Logo') ?>


                            <div class="row mt-3">
                                <div class="col-12 text-start">
                                    <div class="image-preview">
                                        <img
                                            id="logo-preview"
                                            src="<?= $model->logo ? Yii::getAlias('/web/uploads/') . $model->logo : '' ?>"
                                            alt="Image Preview"
                                            class="img-thumbnail"
                                            style="max-width: 150px; max-height: 150px; <?= $model->logo ? '' : 'display: none;' ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6">
                        <div class="form-group local-forms">
                            <?= $form->field($model, 'faviconFile')->fileInput([
                                'id' => 'favicon-input',
                                'maxlength' => true,
                            ])->label('Upload Favicon') ?>


                            <div class="row mt-3">
                                <div class="col-12 text-start">
                                    <div class="image-preview">
                                        <img
                                            id="favicon-preview"
                                            src="<?= $model->favicon ? Yii::getAlias('/web/uploads/') . $model->favicon : '' ?>"
                                            alt="Image Preview"
                                            class="img-thumbnail"
                                            style="max-width: 150px; max-height: 150px; <?= $model->favicon ? '' : 'display: none;' ?>">
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
    document.getElementById('logo-input').addEventListener('change', function(event) {
        const input = event.target;
        const preview = document.getElementById('logo-preview');
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
    document.getElementById('favicon-input').addEventListener('change', function(event) {
        const input = event.target;
        const preview = document.getElementById('favicon-preview');
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