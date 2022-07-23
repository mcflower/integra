<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "integra_group".
 *
 * @property int $id
 * @property string $name
 * @property int $position
 * @property int $hide
 * @property int $created_at
 * @property int $updated_at
 */
class IntegraGroup extends \yii\db\ActiveRecord
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
        return 'integra_group';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'hide', 'position'], 'required'],
            [['hide', 'position', 'created_at', 'updated_at'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'position' => 'Position',
            'hide' => 'Hide',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
