<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "zhkt_anketa".
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property int $age
 * @property string $email
 * @property string $address
 * @property string $r1
 * @property string $r2
 * @property string $r3
 * @property string $r4
 * @property string $r5
 * @property string $r6
 * @property string $r7
 * @property string $r8
 * @property string $r9
 * @property string $r10
 * @property string $r11
 * @property string $r12
 * @property string $r13
 * @property string $r14
 * @property string $r15
 * @property string $r16
 * @property string $q1
 * @property string $q2
 * @property string $q3
 * @property string $q4
 * @property string $recomended
 * @property string $doctor_email
 * @property int $created_at
 * @property int $updated_at
 */
class ZhktAnketa extends \yii\db\ActiveRecord
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
        return 'zhkt_anketa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'phone', 'age', 'email', 'address', 'recomended', 'reCaptcha', 'policy'], 'required', 'message' => 'Обязательно для заполнения'],
            [['created_at', 'updated_at'], 'integer'],
            [['email'], 'email', 'message' => 'Некорректный e-mail адрес'],
            [['age', 'r1', 'r2', 'r3', 'r4', 'r5', 'r6', 'r7', 'r8', 'r9', 'r10', 'r11', 'r12', 'r13', 'r14', 'r15', 'r16'], 'string', 'max' => 10, 'tooLong' => 'Максимум 10 знаков'],
            [['name', 'phone', 'email', 'address', 'q1', 'q2', 'q3', 'q4', 'recomended'], 'string', 'max' => 128, 'tooLong' => 'Максимум 128 знаков'],
            ['policy', 'compare', 'compareValue' => 1, 'message' => 'Необходимо подтвердить'],
            ['reCaptcha', \himiklab\yii2\recaptcha\ReCaptchaValidator::className(), 'secret' => '6LeaUPsZAAAAAAfThzSll6Hv_CkhLaDehUO7wssE', 'uncheckedMessage' => 'Пожалуйста, подтвердите что вы не робот.'],
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
            'age' => 'Возраст',
            'email' => 'Электронная почта',
            'address' => 'Адрес места жительства',
            'r1' => 'Пол',
            'r2' => 'Холецистит по УЗИ органов брюшной полости',
            'r3' => 'Камни в желчном пузыре',
            'r4' => 'Изжога, отрыжка',
            'r5' => 'Тошнота после еды',
            'r6' => 'Умеренные боли в области желудка',
            'r7' => 'Выраженные боли натощак (или ночью!), а также при ранее установленном диагнозе язвенная болезнь желудка или 12-перстной кишки',
            'r8' => 'Отрыжка воздухом или тухлым, тяжесть в подложечной области после еды',
            'r9' => 'Запоры (дефекация реже 1-го раза в день)',
            'r10' => 'Стул больше 3-х раз в день плохо оформленный',
            'r11' => 'Избыточное газообразование, вздутие живота, молочница',
            'r12' => 'Боли в подреберье, горечь во рту, есть диагнозы: хронический панкреатит, желчекаменная болезнь, дискинезия желчевыводящих путей, хронический холецистит, удален желчный пузырь',
            'r13' => 'Высокие психо-эмоциональные нагрузки дома или на работе',
            'r14' => 'Аутоиммунные заболевания',
            'r15' => 'Аллергические заболевания',
            'r16' => 'Если нет, согласны ли Вы на бесплатную регистрацию в NSP?',
            'q1' => 'АЛТ (при наличии)',
            'q2' => 'АСТ (при наличии)',
            'q3' => 'ГГТП (при наличии)',
            'q4' => 'Напишите личный номер NSP, если есть',
            'recomended' => 'Фамилия врача/нутрициолога/друга, который посоветовал Вам заполнить анкету',
            'doctor_email' => 'Электронная почта, куда отправить анкету',
            'reCaptcha' => 'Captcha',
            'created_at' => 'Создано'
        ];
    }
}
