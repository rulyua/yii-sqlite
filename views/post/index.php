<?php
use yii\helpers\Html;
?>
<div class="container mt-4">
    <h2>Posts</h2>
    <p><?= Html::a('Create Post', ['create'], ['class' => 'btn btn-success']) ?></p>
    <table class="table table-bordered">
        <tr><th>ID</th><th>Title</th><th>Content</th><th>Actions</th></tr>
        <?php foreach($posts as $post): ?>
        <tr>
            <td><?= $post->id ?></td>
            <td><?= Html::encode($post->title) ?></td>
            <td><?= Html::encode($post->content) ?></td>
            <td>
                <?= Html::a('View', ['view','id'=>$post->id], ['class'=>'btn btn-info btn-sm']) ?>
                <?= Html::a('Update', ['update','id'=>$post->id], ['class'=>'btn btn-primary btn-sm']) ?>
                <?= Html::a('Delete', ['delete','id'=>$post->id], ['class'=>'btn btn-danger btn-sm','data'=>['method'=>'post']]) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
