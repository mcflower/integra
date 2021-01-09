<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "webinar".
 *
 * @property int $id
 * @property string $name
 * @property string $img
 * @property string $url
 * @property int $position
 * @property int $hide
 * @property int $created_at
 * @property int $updated_at
 */
class Webinar extends \yii\db\ActiveRecord
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
        return 'webinar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'img', 'url', 'position', 'hide'], 'required'],
            [['position', 'hide', 'created_at', 'updated_at'], 'integer'],
            [['name', 'img', 'url'], 'string', 'max' => 255],
        ];
    }
    
    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios['update'] = ['name', 'url', 'position', 'hide'];

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
            'img' => 'Превью',
            'url' => 'YouTube',
            'position' => 'Позиция',
            'hide' => 'Скрыт',
            'created_at' => 'Создано',
            'updated_at' => 'Обновлено',
        ];
    }
}
