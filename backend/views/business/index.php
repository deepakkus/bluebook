<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BusinessSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Businesses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="business-index">

    <h3><?= Html::encode($this->title) ?></h3>

    <p>
        <?= Html::a('Create Business', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'about:ntext',
            'phone',
            'website',
            //'address_line_1',
            //'address_line_2',
            //'city',
            //'state',
            //'zip',

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
