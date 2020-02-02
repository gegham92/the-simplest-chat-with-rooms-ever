<?php

use yii\helpers\Url;

$this->title = 'Message';

?>

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div>
            <a href="<?= Url::to(['site/index']) ?>">На главную</a>
        </div>
        <div>Номер комнаты: <?= $model->room_id; ?></div>
        <div>Номер пользователя: <?= $model->user_id; ?></div>
        <?= $this->render('blocks/_messages-box', ['messages' => $messages]) ?>
        <?= $this->render('blocks/_message-form', ['model' => $model]) ?> 
    </div>
    <div class="col-md-4"></div>
</div>