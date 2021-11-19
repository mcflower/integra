<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "vessel_anketa".
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
 * @property string $r17
 * @property string $r18
 * @property string $r19
 * @property string $r20
 * @property string $r21
 * @property string $r22
 * @property string $r23
 * @property string $r24
 * @property string $r25
 * @property string $r26
 * @property string $r27
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
 * @property string $recomended
 * @property int $created_at
 * @property int $updated_at
 */
class VesselAnketa extends \yii\db\ActiveRecord
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
        return 'vessel_anketa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'phone', 'age', 'email', 'address', 'recomended', 'r7', 'r12', 'reCaptcha', 'policy'], 'required', 'message' => 'Обязательно для заполнения'],
            [['created_at', 'updated_at'], 'integer'],
            [['email'], 'email', 'message' => 'Некорректный e-mail адрес'],
            [['age', 'r1', 'r2', 'r3', 'r4', 'r5', 'r6', 'r7', 'r8', 'r9', 'r10', 'r11', 'r12', 'r13', 'r14', 'r15', 'r16', 'r17', 'r18', 'r19', 'r20', 'r21', 'r22', 'r23', 'r24', 'r25', 'r26', 'r27'], 'string', 'max' => 10, 'tooLong' => 'Максимум 10 знаков'],
            [['name', 'phone', 'email', 'address', 'q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'q9', 'q10', 'q11', 'q12', 'q13', 'recomended'], 'string', 'max' => 128, 'tooLong' => 'Максимум 128 знаков'],
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
            'name' => 'Ф.И.О. (полностью)',
            'phone' => 'Номер телефона',
            'age' => 'Дата рождения',
            'email' => 'Электронная почта',
            'address' => 'Адрес места жительства',
            'r1' => 'Пол',
            'r2' => 'У близких кровных родственников инфаркт/инсульт до 55 лет',
            'r3' => 'Гипертоническая болезнь',
            'r4' => 'Стенокардия',
            'r5' => 'Инфаркт миокарда в анамнезе',
            'r6' => 'Фибрилляция предсердий',
            'r7' => 'Отеки нижних конечностей + одышка при подъеме на 1 этаж',
            'r8' => 'Инсульт в анамнезе',
            'r9' => 'Сахарный диабет',
            'r10' => 'Заболевания щитовидной железы',
            'r11' => 'Желудочно-кишечные заболевания',
            'r12' => 'Запоры больше 3-х дней',
            'r13' => 'Желчно-каменная болезнь',
            'r14' => 'Мочекаменная болезнь',
            'r15' => 'Боли в сердце при физической нагрузке',
            'r16' => 'Болели COVID-19',
            'r17' => 'ДЛЯ ЖЕНЩИН Гестоз во время беременности (отеки, повышение давления, белок в моче)',
            'r18' => 'Атеросклероз сосудов шеи по УЗИ',
            'r19' => 'Атеросклероз сосудов нижних конечностей по УЗИ',
            'r20' => 'Тромбоз нижних конечностей',
            'r21' => 'Тромбоэмболия легочных артерий',
            'r22' => 'Обхват талии > 80 см женщин/ > 102 см у мужчин',
            'r23' => 'Жировой гепатоз (стеатогепатит) по УЗИ органов брюшной полости',
            'r24' => 'Если нет, согласны ли Вы на бесплатную регистрацию в NSP на скидку -30%?',
            'r25' => 'Если нет, согласны ли Вы на бесплатную регистрацию в Витамакс для получения дисконтна',
            'r26' => 'Выпадение волос',
            'r27' => 'Испытываете психоэмоциональное перенапряжение',
            'q1' => 'ДЛЯ ЖЕНЩИН Если у Вас менопауза, то со скольки лет?',
            'q2' => 'Холестерин',
            'q3' => 'Триглицериды',
            'q4' => 'Мочевая кислота',
            'q5' => 'Мочевина',
            'q6' => 'С-реактивный белок',
            'q7' => 'Креатинин сыворотки крови',
            'q8' => 'Тромбоциты в общем анализе крови',
            'q9' => 'D-димер максимальный уровень (если сдавали)',
            'q10' => 'Глюкоза в крови',
            'q11' => 'Напишите личный номер NSP, если есть',
            'q12' => 'Напишите личный номер компании Витамакс, если есть',
            'q13' => 'Гомоцистеин',
            'recomended' => 'Фамилия врача/нутрициолога/друга, который посоветовал Вам заполнить анкету',
            'reCaptcha' => 'Captcha',
            'created_at' => 'Создано'
        ];
    }
}
