<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "guides".
 *
 * @property int $id
 * @property string $name
 * @property string $url
 * @property int $price
 * @property string $hash
 * @property string $brief
 * @property string $description
 * @property int $hide
 * @property int $created_at
 * @property int $updated_at
 */
class Guides extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'guides';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'url', 'price', 'hash', 'brief', 'description', 'hide'], 'required'],
            [['price', 'hide', 'created_at', 'updated_at'], 'integer'],
            [['description'], 'string'],
            [['name', 'url', 'hash'], 'string', 'max' => 255],
            [['brief'], 'string', 'max' => 1024],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'url' => 'Файл',
            'price' => 'Цена',
            'hash' => 'Hash',
            'brief' => 'Краткое описание',
            'description' => 'Полное описание',
            'hide' => 'Скрыт',
            'created_at' => 'Создано',
            'updated_at' => 'Обновлено',
        ];
    }
}
