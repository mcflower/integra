<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "yandex".
 *
 * @property integer $id
 * @property integer $order_number
 * @property string $table_name
 * @property string $ya_id
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class Yandex extends \yii\db\ActiveRecord
{

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yandex';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_number', 'status', 'ya_id', 'table_name'], 'required'],
            [['order_number', 'status', 'created_at', 'updated_at'], 'integer'],
        ];
    }

    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios['new'] = ['order_number', 'ya_id', 'table_name'];
        $scenarios['update'] = ['status'];
        return $scenarios;
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_number' => 'Order Number',
            'ya_id' => 'ID заказа в яндекс',
            'table_name' => 'Таблица',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
