<?php 
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<div class="site-register">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to register:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
            
            <label>
                Username:
                <input type="text" name="username" required> 
            </label>
            <label>
                Password:
                <input type="text" name="password" required>
            </label>
            <label>
                Email:
                <input type="email" name="email" required>
            </label>
            
            <button type="submit" class="btn btn-primary">Register</button>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
