<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(); ?>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="admin_email" name="admin_email" value="<?= $email ?>" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <button type="submit" class="btn btn-primary">Change</button>
<?php ActiveForm::end(); ?>