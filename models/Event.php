<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "event".
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string $address
 * @property string $email
 * @property string $birthday
 * @property string $r1
 * @property string $r2
 * @property string $r3
 * @property string $r4
 * @property string $r5
 * @property string $r6
 * @property string $r7
 * @property string $r8
 * @property string $r9
 * @property string $q1
 * @property string $q2
 * @property string $q3
 * @property string $q4
 * @property string $activity
 * @property int $created_at
 * @property int $updated_at
 */
class Event extends \yii\db\ActiveRecord
{
    public $reCaptcha;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'event';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'phone', 'address', 'email', 'birthday', 'r1', 'r2', 'r3', 'r4', 'r5', 'r8', 'r9', 'q1', 'q4', 'activity', 'reCaptcha'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['name', 'phone', 'address', 'email', 'birthday', 'q1', 'q2', 'q3', 'q4', 'activity'], 'string', 'max' => 128],
            [['r1', 'r2', 'r3', 'r4', 'r5', 'r6', 'r7', 'r8', 'r9'], 'string', 'max' => 10],
            ['reCaptcha', \himiklab\yii2\recaptcha\ReCaptchaValidator::className(), 'secret' => '6LfAxCYaAAAAAEDpS9ZFpPnjTkAyCWlsNrNY-SOf', 'uncheckedMessage' => 'Пожалуйста, подтвердите что вы не робот.'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Ф.И.О. (полностью)',
            'phone' => 'Номер телефона',
            'address' => 'Город/село проживания',
            'email' => 'Электронная почта',
            'birthday' => 'Дата рождения в формате: число/месяц/год',
            'r1' => 'Являетесь ли вы врачом?',
            'r2' => 'Являетесь ли Нутрициологом?',
            'r3' => 'Если нет, согласны ли Вы на бесплатную регистрацию в NSP, на скидку -30% и развитие в одной команде?',
            'r4' => 'Если нет, согласны ли Вы на бесплатную регистрацию в ВИТАМАКС, помощь в выборе препаратов и/или развитие в одной команде?',
            'r5' => 'Хотели бы получить сертификат?',
            'r6' => 'Для специалистов: хотели бы состоять в чате врачей или Нутрициологов?',
            'r7' => 'Для неспециалистов: хотели бы состоять в чате поддержки пациентов?',
            'r8' => 'Жду реквизиты для оплаты участия в конференции «Применимая медицина» в ответном письме.',
            'r9' => 'Планирую участие',
            'q1' => 'Область',
            'q2' => 'Напишите личный номер NSP/если есть',
            'q3' => 'Напишите личный номер ВИТАМАКС/если есть',
            'q4' => 'От кого вы узнали о мероприятии?',
            'activity' => 'Activity',
            'created_at' => 'Создано',
            'updated_at' => 'Updated At',
        ];
    }
}
