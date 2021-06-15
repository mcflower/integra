<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "guser".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $hash
 * @property string $gcontent
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class Guser extends \yii\db\ActiveRecord
{
    public $reCaptcha;

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
        return 'guser';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'hash', 'gcontent', 'status', 'reCaptcha'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['name', 'email', 'hash', 'gcontent'], 'string', 'max' => 255],
            ['reCaptcha', \himiklab\yii2\recaptcha\ReCaptchaValidator::className(), 'secret' => '6LfAxCYaAAAAAEDpS9ZFpPnjTkAyCWlsNrNY-SOf', 'uncheckedMessage' => 'Пожалуйста, подтвердите что вы не робот.'],
            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'email', 'message' => 'Некорректный e-mail адрес'],
        ];
    }

    public function scenarios()
    {
        $scenarios = parent::scenarios();
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
            'name' => 'Имя',
            'email' => 'Email',
            'hash' => 'Hash',
            'gcontent' => 'Гайд',
            'status' => 'Статус',
            'reCaptcha' => 'Captcha',
            'created_at' => 'Создано',
            'updated_at' => 'Обновлено',
        ];
    }
}
