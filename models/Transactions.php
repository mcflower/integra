<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "transactions".
 *
 * @property int $id
 * @property string $order_number
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class Transactions extends \yii\db\ActiveRecord
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
        return 'transactions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_number', 'status'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['order_number'], 'string', 'max' => 50],
        ];
    }

    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios['new'] = ['order_number'];
        $scenarios['update'] = ['status'];
        return $scenarios;
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_number' => 'Order Number',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
