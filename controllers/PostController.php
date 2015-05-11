<?php
namespace app\controllers;

use yii\web\Controller;

use Yii;

use app\models\RegForm;
use app\models\LoginForm;

class PostController extends Controller
{

    // ...

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function  actionSearch()
    {
        $search = Yii::$app->request->post('search');
        return $this->render(
            'search',
            ['search' => $search]
        );
    }

    public function actionReg()
    {
        $model = new RegForm();

        return $this->render('reg',
            ['model' => $model]);
    }

    public function actionLogin()
    {
        $model = new LoginForm();

        return $this->render('login',
            ['model' => $model]);
    }
}