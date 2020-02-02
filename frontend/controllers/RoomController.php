<?php

namespace frontend\controllers;

use yii\web\Controller;
use common\models\Room;

class RoomController extends Controller
{
    public function actionIndex($user_id)
    {
        $rooms = Room::find()->getAll();

        return $this->render('index', [
            'rooms' => $rooms,
            'user_id' => $user_id
        ]);
    }
}