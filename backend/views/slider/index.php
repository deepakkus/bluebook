<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SliderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sliders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slider-index">

    <h3><?= Html::encode($this->title) ?></h3>

    <p>
        <?= Html::a('Create Slider', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'btn_text',
            'content:ntext',
            'link',
            'status',

            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Actions',
                'headerOptions' => ['style' => 'color:#337ab7'],
                'template' => '{view}{update}{delete}',
                'buttons' => [
                  'view' => function ($url, $model) {
                      return Html::a('<span class="fa fa-eye"></span>', $url);
                  },
      
                  'update' => function ($url, $model) {
                      return Html::a('<span class="fa fa-pen"></span>', $url);
                  },
                  'delete' => function ($url, $model) {
                      return Html::a('<span class="fa fa-trash"></span>', $url);
                  }
      
                ],
            ],
        ],
    ]); ?>


</div>
