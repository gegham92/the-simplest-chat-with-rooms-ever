<?php

use yii\helpers\Url;

?>

<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Выбрать пользователя
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
        <?php foreach ($users as $user) { ?>
            <li><a href="<?= Url::to(['room/index', 'user_id' => $user->id]) ?>"><?= $user->username ?></a></li>
        <?php } ?>
    </ul>
</div>