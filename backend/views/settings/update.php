<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model admin\models\settings */

$this->title = 'Update Settings ';
$this->params['breadcrumbs'][] = ['label' => 'Settings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->settings_id, 'url' => ['view', 'id' => $model->settings_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="settings-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
