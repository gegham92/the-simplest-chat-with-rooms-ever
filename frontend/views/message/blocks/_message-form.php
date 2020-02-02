<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<div>
    <?php $form = ActiveForm::begin(['id' => 'form-message', 'fieldConfig' => [
             'template' => "{label}\n{input}"]]); ?>

        <?= $form->field($model, 'text')->textarea(['autofocus' => true])->label('Напишите сообщение') ?>

        <div class="form-group">
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'message-button']) ?>
        </div>

    <?php ActiveForm::end(); ?>
</div>