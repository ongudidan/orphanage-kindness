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
    // 'action' => 'home', // Set action based on create or update
    'method' => 'post',
]); ?>

<div class="row">
    <div class="col-sm-12">
        <div class="card comman-shadow">
            <div class="card-body">
                <!-- <h1>Home Page</h1> -->
                <div class="row">
                    <div class=" row col-sm-12">
                        <h1>Cause Section</h1>

                        <div class="col-12 col-sm-6">
                            <div class="form-group local-forms">
                                <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group local-forms">
                                <?= $form->field($model, 'count')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12">
                            <div class="form-group local-forms">
                                <?= $form->field($model, 'imageFile')->fileInput([
                                    'id' => 'image-input',
                                    'maxlength' => true,
                                ])->label(false) ?>

                                <div class="row mt-3">
                                    <div class="col-12 text-start">
                                        <div class="image-preview">
                                            <img
                                                id="image-preview"
                                                src="<?= $model->banner_image ? Yii::getAlias('/web/uploads/') . $model->banner_image : '' ?>"
                                                alt="Image Preview"
                                                class="img-thumbnail"
                                                style="max-width: 150px; max-height: 150px; <?= $model->banner_image ? '' : 'display: none;' ?>">
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
    document.getElementById('image-input').addEventListener('change', function(event) {
        const input = event.target;
        const preview = document.getElementById('image-preview');
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

