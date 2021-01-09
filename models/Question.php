<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "question".
 *
 * @property int $id
 * @property string $quest
 * @property string $answer
 * @property int $position
 * @property int $created_at
 * @property int $updated_at
 */
class Question extends \yii\db\ActiveRecord
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
        return 'question';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['quest', 'answer', 'position'], 'required'],
            [['answer'], 'string'],
            [['position', 'created_at', 'updated_at'], 'integer'],
            [['quest'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'quest' => 'Вопрос',
            'answer' => 'Ответ',
            'position' => 'Позиция',
            'created_at' => 'Создано',
            'updated_at' => 'Обновлено',
        ];
    }
}
