<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Business */

$this->title = 'Create Business';
$this->params['breadcrumbs'][] = ['label' => 'Businesses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="business-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
        'business_hours_model' => $business_hours_model,
        'business_days' => $business_days

    ]) ?>

</div>
