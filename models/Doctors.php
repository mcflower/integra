<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "nutritionist".
 *
 * @property int $id
 * @property string $q1
 * @property string $q2
 * @property string $q3
 * @property string $q4
 * @property string $q5
 * @property string $q6
 * @property string $q7
 * @property string $q8
 * @property string $q9
 * @property string $q10
 * @property string $q11
 * @property string $q12
 * @property string $q13
 * @property int $created_at
 * @property int $updated_at
 */
class Doctors extends \yii\db\ActiveRecord
{
    public $reCaptcha;
    public $policy;

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
        return 'doctors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'reCaptcha', 'policy'], 'required', 'message' => 'Обязательно для заполнения'],
            [['created_at', 'updated_at'], 'integer'],
            [['q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'q9', 'q10', 'q11', 'q12', 'q13'], 'string', 'max' => 255],
            [['q5'], 'email', 'message' => 'Некорректный e-mail адрес'],
            ['policy', 'compare', 'compareValue' => 1, 'message' => 'Необходимо подтвердить'],
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
            'q1' => 'Ф.И.О. (полностью)',
            'q2' => 'Пол',
            'q3' => 'Номер телефона',
            'q4' => 'Дата рождения',
            'q5' => 'Электронная почта',
            'q6' => 'Город и улица проживания',
            'q7' => 'Вы врач?',
            'q8' => 'Если Вы врач, то какой специальности?',
            'q9' => 'Являетесь нутрициологом?',
            'q10' => 'Напишите личный номер NSP, если есть',
            'q11' => 'Если нет, согласны ли Вы на бесплатную регистрацию в NSP на скидку - 30%?',
            'q12' => 'Напишите личный номер компании Витамакс, если есть',
            'q13' => 'Согласны ли Вы на бесплатную регистрацию в VERTERA для получения дисконтна, по необходимости',
            'reCaptcha' => 'Captcha',
            'created_at' => 'Создано',
            'updated_at' => 'Updates At',
        ];
    }
}
