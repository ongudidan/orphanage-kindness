<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\HomePage $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Home Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="home-page-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'main_banner',
            'main_banner_title',
            'main_banner_Sub_title',
            'causes_title',
            'causes_sub_title',
            'causes_description',
            'causes_count',
            'events_title',
            'events_description',
            'events_count',
            'help_title',
            'help_description',
            'video_link',
            'contact_title',
            'contact_image',
            'description:ntext',
            'target_amount',
            'location',
            'image',
            'status',
            'created_at',
            'updated_at',
            'created_by',
            'updated_by',
        ],
    ]) ?>

</div>
