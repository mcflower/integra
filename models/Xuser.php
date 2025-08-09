<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;


/**
 * This is the model class for table "xuser".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $hash
 * @property string $phone
 * @property string $activity
 * @property string $description
 * @property int $buy
 * @property int $wopen
 * @property int $wstart
 * @property int $wclose
 * @property int $created_at
 * @property int $updated_at
 */
class Xuser extends \yii\db\ActiveRecord
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
        return 'xuser';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'hash', 'activity', 'buy', 'wopen', 'wstart', 'wclose'], 'required'],
            [['buy', 'wopen', 'wstart', 'wclose', 'created_at', 'updated_at'], 'integer'],
            ['email', 'email', 'message' => 'Неправильный e-mail адрес'],
            [['name', 'email', 'hash', 'activity', 'phone', 'description'], 'string', 'max' => 255],
            [['name', 'email'], 'trim'],
            ['email', 'filter', 'filter' => 'strtolower', 'skipOnArray' => true],
            ['reCaptcha', \himiklab\yii2\recaptcha\ReCaptchaValidator::className(), 'secret' => '6LfAxCYaAAAAAEDpS9ZFpPnjTkAyCWlsNrNY-SOf', 'uncheckedMessage' => 'Пожалуйста, подтвердите что вы не робот.'],
        ];
    }

    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios['next'] = ['name', 'email', 'hash', 'activity', 'wopen'];
        $scenarios['current'] = ['name', 'email', 'hash', 'activity'];
        $scenarios['current_wi_captcha'] = ['name', 'email', 'hash', 'activity', 'reCaptcha'];
        $scenarios['closed'] = ['wclose'];
        $scenarios['create'] = ['name', 'email', 'activity'];
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
            'phone' => 'Телефон',
            'hash' => 'Hash',
            'activity' => 'Активность',
            'buy' => 'Оплачено',
            'wopen' => 'Уведомление о старте продаж',
            'wstart' => 'Ссылка на вебинар',
            'wclose' => 'Рассылка записи',
            'created_at' => 'Создано',
            'updated_at' => 'Обновлено',
            'activityName' => 'Активность',
            'description' => 'Описание',
            'reCaptcha' => 'Captcha',
        ];
    }

    public function getActivityName()
    {
        $model = Xcontent::findOne(['activity' => $this->activity]);
        return $model->name . " (" . date('d.m.Y', $model->xdate) . ")";
    }
}
