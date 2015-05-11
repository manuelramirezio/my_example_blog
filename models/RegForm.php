<?php
/**
 *
 */
namespace app\models;

use yii\base\Model;
use Yii;

class RegForm extends Model
{
    public $username;
    public $email;
    public $password;

    public function rules(){
        return [
            [
                ['username', 'email', 'password'],
                'required'
            ]
        ];
    }
    public function attributeLabels(){
        return [
          'username' => 'Имя пользователя',
          'email' => 'Элек.почта',
          'password' => 'Пароль',
        ];
    }
}