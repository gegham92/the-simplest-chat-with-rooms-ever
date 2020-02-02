<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\User;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ]
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $users = User::find()->getAll();
        
        return $this->render('index', [
            'users' => $users
        ]);
    }
}
