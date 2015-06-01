<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property string $id
 * @property string $category_id
 * @property string $user_id
 * @property string $title
 * @property string $text
 * @property string $image
 * @property integer $date_create
 * @property integer $date_update
 *
 * @property Category $category
 * @property Users $user
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'user_id', 'title', 'text', 'image', 'date_create', 'date_update'], 'required'],
            [['category_id', 'user_id', 'date_create', 'date_update'], 'integer'],
            [['text'], 'string'],
            [['title'], 'string', 'max' => 150],
            [['image'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'ID каткгории',
            'user_id' => 'ID Пользователя',
            'title' => 'Название статьи',
            'text' => 'Текст статьи',
            'image' => 'Изображение',
            'date_create' => 'Date Create',
            'date_update' => 'Date Update',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['id' => 'user_id']);
    }
}
