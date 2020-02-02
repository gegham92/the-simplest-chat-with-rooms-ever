<?php

use yii\helpers\Url;

?>

<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Выбрать комнату
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
        <?php foreach ($rooms as $room) { ?>
            <li><a href="<?= Url::to(['message/index', 'user_id' => $user_id, 'room_id' => $room->id]) ?>"><?= $room->id ?></a></li>
        <?php } ?>
    </ul>
</div>