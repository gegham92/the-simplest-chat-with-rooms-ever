<?php

use yii\helpers\Html;

?>

<?= $this->render('/blocks/_flash-message') ?>

<div class="messages-box">
    <?php foreach ($messages as $message) { ?>
        <div class="well">
            <span><?= $message->user->username ?></span> / <span><?= date('s:i:H d-m-Y', $message->created_at) ?></span>
            <p><?= Html::encode($message->text) ?></p>
        </div>
    <?php } ?>
</div>