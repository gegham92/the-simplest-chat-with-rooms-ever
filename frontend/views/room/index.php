<?php

$this->title = 'Rooms';

?>

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <?= $this->render('blocks/_rooms-list', ['user_id' => $user_id, 'rooms' => $rooms]) ?>
    </div>
    <div class="col-md-4"></div>
</div>
