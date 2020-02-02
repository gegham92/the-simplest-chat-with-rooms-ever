<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\Message;

class MessageForm extends Model
{
    public $text;
    public $user_id;
    public $room_id;

    private $model_active_record;

    public function __construct($user_id, $room_id)
    {
        parent::__construct();
        $this->user_id = $user_id;
        $this->room_id = $room_id;
    }

    public function rules()
    {
        return [
            [['text', 'user_id', 'room_id'], 'required'],
            ['text', 'string'],
        ];
    }

    public function set()
    {
        $message = new Message();

        $message->user_id = $this->user_id;
        $message->room_id = $this->room_id;
        $message->text = $this->text;

        if (!$message->save()) {
            Yii::error('Error while creating new message');
            Yii::$app->session->setFlash('error', 'Произошла ошибка!');
            return false;
        }

        Yii::$app->session->setFlash('success', 'Вы успешно отправили сообщение!');
        return true;
    }
}