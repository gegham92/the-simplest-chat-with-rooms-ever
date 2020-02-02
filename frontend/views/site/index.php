<?php

$this->title = 'Simple Chat With Rooms';

?>

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <?= $this->render('blocks/_users-list', ['users' => $users]) ?>
    </div>
    <div class="col-md-4"></div>
</div>
