<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9">

                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                <label>Description</label>
                <?php echo froala\froalaeditor\FroalaEditorWidget::widget([
                    'model' => $model,
                    'attribute' => 'long_desp',
                    'options' => [
                        'id'=>'long_desp'
                    ],
                    'clientOptions' => [
                        'toolbarInline' => false,
                        'toolbarButtons' => ['fullscreen', 'bold', 'italic', 'underline',
                                            'paragraphStyle', '|', 'paragraphFormat', 'align', 
                                            'outdent', 'indent', '-', 'insertLink', 'insertTable', '|', 
                                            'emoticons', 'specialCharacters', 'insertHR', 'selectAll', 'clearFormatting', '|', 
                                            'help', 'html', '|', 'undo', 'redo'],
                        'theme' => 'royal', 
                        'language' => 'en_gb',
                        'height' => 350,
                        'placeholderText' => 'Enter Product Details Here',
                    ]
                ]); ?>
                
                <label>Short Description</label>
                <?php echo froala\froalaeditor\FroalaEditorWidget::widget([
                    'model' => $model,
                    'attribute' => 'short_desp',
                    'options' => [
                        'id'=>'short_desp'
                    ],
                    'clientOptions' => [
                        'toolbarInline' => false,
                        'theme' => 'royal', 
                        'language' => 'en_gb',
                        'height' => 200,
                        'placeholderText' => 'Enter Product Short Details Here',
                    ]
                ]); ?>

            </div>
            <div class="col-sm-3 col-md-3">

                <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'sell_price')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'quantity_in_stock')->textInput() ?>

                <?= $form->field($model, 'product_cat_id')->dropDownList($product_cat,['prompt' => 'Select A Category']) ?>

                <div class="form-group field-product-image_id">
                    <label class="control-label" for="product-image_id">Product Image</label>
                    <input type="file" id="product-image_id" name="image">
                </div>

                <?php if(!$model->isNewRecord) : ?>
                    <label>Current Image:</label>
                    <image src="<?= $product_img ?>" width="150" height="100">
                <?php endif ?>
                
            </div>
        </div>

        <div class="form-group mt-3">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

    </div>

    <?php ActiveForm::end(); ?>

</div>
