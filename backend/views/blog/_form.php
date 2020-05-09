<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Blog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blog-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9">

                <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
                
                <label class="control-label" for="blog-content">Content</label>
                <?php echo froala\froalaeditor\FroalaEditorWidget::widget([
                    'model' => $model,
                    'attribute' => 'content',
                    'options' => [
                        'id'=>'content',
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
                        'placeholderText' => 'Enter Blog Content Here',
                    ]
                ]); ?>
                <?= $form->field($model, 'short_desp')->textInput(['maxlength' => true]) ?>

            </div>
            <div class="col-sm-3 col-md-3">
            
                <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'status')->dropDownList([ 'draft' => 'Draft', 'published' => 'Published', ], ['prompt' => 'Choose...']) ?>

                <?= $form->field($model, 'cat_id')->dropDownList($cats,['prompt' => 'Select Category']) ?>

                <div class="form-group">
                    <label class="control-label" for="blog-status">Image</label>
                    <input type="file" name="blog_image">
                </div>

                <?php if(!$model->isNewRecord) : ?>
                    <label>Current Image:</label>
                    <image src="<?= $img_src ?>" width="150" height="100">
                <?php endif ?>

            </div>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php 
    /*
    <?= $form->field($model, 'published_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>
    */
?>