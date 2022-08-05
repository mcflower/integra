<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "integra_catalog".
 *
 * @property int $id
 * @property int $id_group
 * @property string $art
 * @property int $created_at
 * @property int $updated_at
 */
class IntegraCatalog extends \yii\db\ActiveRecord
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
        return 'integra_catalog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_group', 'art'], 'required'],
            [['id_group', 'created_at', 'updated_at'], 'integer'],
            [['art'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_group' => 'Id Group',
            'art' => 'Art',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }


    public function getAnalysis() {
        return $this->hasOne(IntegraAnalysis::className(), ['art' => 'art']);
    }
}
