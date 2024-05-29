<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "patient".
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
 * @property int $created_at
 * @property int $updated_at
 */
class Patient extends \yii\db\ActiveRecord
{
    public $reCaptcha;
    public $agreement1;
    public $agreement2;
    public $agreement3;

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
        return 'patient';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['q1', 'q2', 'q3', 'q4', 'q5', 'agreement1', 'agreement2', 'agreement3', 'reCaptcha'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'q9', 'q10', 'q11'], 'string', 'max' => 255, 'tooLong' => 'Максимум 250 знаков'],
            [['q4'], 'email', 'message' => 'Некорректный e-mail адрес'],
            [['agreement1', 'agreement2', 'agreement3'], 'compare', 'compareValue' => 1, 'message' => 'Необходимо подтвердить'],
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
            'q2' => 'Дата рождения',
            'q3' => 'Номер телефона',
            'q4' => 'Электронная почта',
            'q5' => 'Город проживания/Область',
            'q6' => 'Являюсь врачом',
            'q7' => 'Являетесь нутрициологом/диетологом',
            'q8' => 'Напишите личный номер NSP, если есть',
            'q9' => 'Если нет, согласны ли Вы на бесплатную регистрацию в NSP на скидку -30%?',
            'q10' => 'Напишите личный номер компании Витамакс, если есть',
            'q11' => 'Согласны ли Вы на бесплатную регистрацию в VERTERA для получения дисконтна, по необходимости',
            'reCaptcha' => 'Captcha',
            'created_at' => 'Создано',
            'updated_at' => 'Updated At',
        ];
    }
}
