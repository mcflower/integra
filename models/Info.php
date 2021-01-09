<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "info".
 *
 * @property int $id
 * @property string $about
 * @property string $education
 * @property string $requisites
 * @property int $created_at
 * @property int $updated_at
 */
class Info extends \yii\db\ActiveRecord
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
        return 'info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['about', 'education', 'requisites'], 'required'],
            [['about', 'education', 'requisites'], 'string'],
            [['created_at', 'updated_at'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'about' => 'Обо мне',
            'education' => 'Образование',
            'requisites' => 'Реквизиты',
            'created_at' => 'Создано',
            'updated_at' => 'Обновлено',
            'infoline' => 'Описание',
        ];
    }

    public function getInfoline()
    {
        return "Обо мне, образование, реквизиты";
    }
}
