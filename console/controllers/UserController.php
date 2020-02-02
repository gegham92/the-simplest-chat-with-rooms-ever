<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;
use common\models\User;
use yii\console\ExitCode;

class UserController extends Controller
{
    private $users_count = 10;

    public function actionCreateAll()
    {
        for ($i = 0; $i < $this->users_count; $i++) {
            $user = new User();
            $user->username = 'User_' . ($i + 1);

            if (!$user->save()) {
                Yii::error('Error while creating new user');
                return ExitCode::UNAVAILABLE;
            }
        }

        return ExitCode::OK;
    }
}