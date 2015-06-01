<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "v_site".
 *
 * @property string $a_id
 * @property string $u_id
 * @property string $c_id
 * @property string $title
 * @property string $text
 * @property string $image
 * @property integer $date_create
 * @property integer $date_update
 * @property string $username
 * @property string $email
 * @property string $name
 */
class VSite extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'v_site';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['a_id', 'u_id', 'c_id', 'date_create', 'date_update'], 'integer'],
            [['title', 'text', 'image', 'date_create', 'date_update', 'username', 'email', 'name'], 'required'],
            [['text'], 'string'],
            [['title'], 'string', 'max' => 150],
            [['image', 'username', 'email', 'name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'a_id' => 'Article ID',
            'u_id' => 'User ID',
            'c_id' => 'Category ID',
            'title' => 'Title',
            'text' => 'Text',
            'image' => 'Image',
            'date_create' => 'Date Create',
            'date_update' => 'Date Update',
            'username' => 'Username',
            'email' => 'Email',
            'name' => 'Category Name',
        ];
    }
}
