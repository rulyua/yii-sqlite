<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="container mt-4">
    <h2>Update Post</h2>
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model,'title')->textInput() ?>
    <?= $form->field($model,'content')->textarea(['rows'=>6]) ?>
    <div class="form-group">
        <?= Html::submitButton('Save',['class'=>'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
