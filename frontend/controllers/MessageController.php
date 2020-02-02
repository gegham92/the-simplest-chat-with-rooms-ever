<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\MessageForm;
use common\models\Message;

class MessageController extends Controller
{
    public function actionIndex($user_id, $room_id)
    {
        $model = new MessageForm($user_id, $room_id);

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->set()) {
                return $this->redirect(['message/index', 'user_id' => $user_id, 'room_id' => $room_id]);
            }
        }

        $messages = Message::find()->getForCurrentRoom($room_id);

        return $this->render('index', [
            'model' => $model,
            'messages' => $messages
        ]);
    }
}