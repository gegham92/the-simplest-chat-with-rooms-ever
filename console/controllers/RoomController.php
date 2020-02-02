<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;
use common\models\Room;
use yii\console\ExitCode;

class RoomController extends Controller
{
    private $rooms_count = 10;

    public function actionCreateAll()
    {
        for ($i = 0; $i < $this->rooms_count; $i++) {
            $room = new Room();

            if (!$room->save()) {
                Yii::error('Error while creating new room');
                return ExitCode::UNAVAILABLE;
            }
        }

        return ExitCode::OK;
    }
}