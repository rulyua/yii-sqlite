<?php
use yii\helpers\Html;
?>
<div class="container mt-4">
    <h2><?= Html::encode($model->title) ?></h2>
    <p><?= Html::encode($model->content) ?></p>
    <?= Html::a('Back',['index'],['class'=>'btn btn-secondary']) ?>
</div>
