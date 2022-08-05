<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "integra_analysis".
 *
 * @property int $id
 * @property string $art
 * @property string $name
 * @property int $price
 * @property int $hide
 * @property int $created_at
 * @property int $updated_at
 */
class IntegraAnalysis extends \yii\db\ActiveRecord
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
        return 'integra_analysis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['art', 'name', 'price', 'hide'], 'required'],
            [['price', 'hide', 'created_at', 'updated_at'], 'integer'],
            [['art'], 'string', 'max' => 100],
            [['name'], 'string', 'max' => 1024],
            [['art'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'art' => 'Артикул',
            'name' => 'Называние',
            'price' => 'Цена',
            'hide' => 'Скрыт',
            'created_at' => 'Создано',
            'updated_at' => 'Обновлено',
        ];
    }
}
