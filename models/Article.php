<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "article".
 *
 * @property int $id
 * @property string $name
 * @property string $url
 * @property string $release_date
 * @property int $position
 * @property int $created_at
 * @property int $updated_at
 */
class Article extends \yii\db\ActiveRecord
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
        return 'article';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'url', 'release_date', 'position'], 'required'],
            [['position', 'created_at', 'updated_at'], 'integer'],
            [['name', 'url', 'release_date'], 'string', 'max' => 255],
        ];
    }

    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios['update'] = ['name', 'release_date', 'position'];

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
            'url' => 'Файл',
            'release_date' => 'Дата релиза',
            'position' => 'Позиция',
            'created_at' => 'Создано',
            'updated_at' => 'Обновлено',
        ];
    }
}
