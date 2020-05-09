<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="container">

    <div>
        <h3>Change Password</h3>
    </div>

    <div class="div" style="width: 73%;">
        <?php $form = ActiveForm::begin(); ?>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Current Password</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="current_p" name="current_p" placeholder="Current Password">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">New Password</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="new_p" name="new_p" placeholder="New Password">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password Again</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="p_agin" name="p_agin" placeholder="Password Again">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Change</button>
                </div>
            </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>