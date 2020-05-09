<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */

$this->title = 'Create Product';
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="product-create">

        <h4><?= Html::encode($this->title) ?></h4>

        <?= $this->render('_form', [
            'model' => $model,
            'product_cat' => $product_cat
        ]) ?>

    </div>
</div>
