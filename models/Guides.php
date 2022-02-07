<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "guides".
 *
 * @property int $id
 * @property string $name
 * @property string $filename
 * @property string $img
 * @property string $url
 * @property int $price
 * @property string $hash
 * @property string $brief
 * @property string $description
 * @property int $hide
 * @property int $position
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
            [['name', 'filename', 'img', 'url', 'price', 'hash', 'brief', 'description', 'hide', 'position'], 'required'],
            [['price', 'hide', 'position', 'created_at', 'updated_at'], 'integer'],
            [['description'], 'string'],
            [['name', 'filename', 'url', 'hash', 'img'], 'string', 'max' => 255],
            [['brief'], 'string', 'max' => 1024],
        ];
    }

    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios['update'] = ['name', 'filename', 'price', 'position', 'brief', 'description', 'hide'];

        return $scenarios;
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'filename' => 'Название файла',
            'img' => 'Изображение',
            'url' => 'Файл',
            'price' => 'Цена',
            'hash' => 'Hash',
            'brief' => 'Краткое описание',
            'description' => 'Полное описание',
            'hide' => 'Скрыт',
            'position' => 'Позиция',
            'created_at' => 'Создано',
            'updated_at' => 'Обновлено',
        ];
    }


    public static function getGuidesHashArray()
    {
        $model = Guides::find()->groupBy('hash')->orderBy('created_at desc')->all();
        $result = array();
        foreach($model as $one) {
            $result[$one['hash']] = $one['name'];
        }
        return $result;
    }
}
