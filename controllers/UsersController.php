<?php

namespace app\controllers;
use app\models\Users;

class UsersController extends \yii\web\Controller
{
    public $layout = 'article';

    public function actionUsers()
    {
        $users = Users::find()->all();
        return $this->render('users', ['users'=>$users]);
    }

}
