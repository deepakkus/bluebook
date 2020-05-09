<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model admin\models\settings */

$this->title = 'Create Settings';
$this->params['breadcrumbs'][] = ['label' => 'Settings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-create">

   
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
