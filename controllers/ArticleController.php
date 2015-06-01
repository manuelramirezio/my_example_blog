<?php

namespace app\controllers;
use app\models\VSite;
use app\models\Category;
use app\models\Users;

class ArticleController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $models = VSite::find()->orderBy(['a_id'=>SORT_DESC])->all();
        $m = Category::find()->all();
        return $this->render('index',['models' => $models,'m' => $m]);

    }

    public function actionSingle($id)
    {
        $model = VSite::findOne(['a_id'=>$id]);
        return $this->render('single', ['model'=> $model]);
    }
    public function actionContact()
    {
        return $this->render('contact');
    }

    public function actionCategory($id)
    {
        $model= VSite::find()->where(['c_id'=>$id])->all();
        $m = Category::find()->all();
        return $this->render('category',['model' => $model,'m' => $m]);
    }

    public function actionUsers()
    {
        $users = Users::find()->all();
        return $this->render('users', ['users'=>$users]);
    }
}
