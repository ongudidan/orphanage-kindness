<?php

use app\models\HomePage;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\modules\cms\models\HomePageSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Home Pages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-page-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Home Page', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'main_banner',
            'main_banner_title',
            'main_banner_Sub_title',
            'causes_title',
            //'causes_sub_title',
            //'causes_description',
            //'causes_count',
            //'events_title',
            //'events_description',
            //'events_count',
            //'help_title',
            //'help_description',
            //'video_link',
            //'contact_title',
            //'contact_image',
            //'description:ntext',
            //'target_amount',
            //'location',
            //'image',
            //'status',
            //'created_at',
            //'updated_at',
            //'created_by',
            //'updated_by',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, HomePage $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
