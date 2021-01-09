<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "hypoxia".
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
 * @property string $q14
 * @property string $q15
 * @property string $q16
 * @property string $q17
 * @property string $q18
 * @property string $q19
 * @property int $created_at
 * @property int $updated_at
 */
class Hypoxia extends \yii\db\ActiveRecord
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
        return 'hypoxia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'phone', 'address', 'email', 'birthday', 'policy', 'reCaptcha'], 'required', 'message' => 'Обязательно для заполнения'],
            [['created_at', 'updated_at'], 'integer'],
            [['email'], 'email', 'message' => 'Некорректный e-mail адрес'],
            [['name', 'phone', 'address', 'email', 'birthday', 'q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'q9', 'q10', 'q11', 'q12', 'q13', 'q14', 'q15', 'q16', 'q17', 'q18', 'q19'], 'string', 'max' => 128, 'tooLong' => 'Максимум 128 знаков'],
            [['r1', 'r2', 'r3', 'r4', 'r5', 'r6', 'r7', 'r8', 'r9', 'r10', 'r11', 'r12', 'r13', 'r14', 'r15', 'r16', 'r17', 'r18', 'r19', 'r20', 'r21', 'r22', 'r23', 'r24', 'r25'], 'string', 'max' => 10, 'tooLong' => 'Максимум 10 знаков'],
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
            'birthday' => 'Дата рождения',
            'email' => 'Электронная почта',
            'address' => 'Город проживания',
            'r1' => 'Пол',

            'r2' => 'Слабость, повышенная утомляемость',
            'r3' => 'Раздражительность, психологическая лабильность',
            'r4' => 'Недостаточность концентрации внимания',
            'r5' => 'Депрессивное настроение',
            'r6' => 'Снижение трудоспособности, снижение переносимости физических нагрузок',
            'r7' => 'Дневная сонливость',
            'r8' => 'Головные боли по утрам',
            'r9' => 'Гипотония, головокружение, шум в ушах, склонность к обморокам в душной обстановке',
            'r10' => 'Пониженный аппетит',
            'r11' => 'Повышенная предрасположеность к инфекциям (герпес, частые ОРВИ, ИППП, фурункулез, ОРЗ)',
            'r12' => 'Обильные менструальные кровопотери (только для женщин)',
            'r13' => 'Одышка и сердцебиение при обычных физических нагрузках',
            'r14' => 'Зябкость рук и ног',
            'r15' => 'Сухость кожи, шелушение, сухие локти, трещины кожи пяток, пальцев, локлизованный или генерализованный кожный зуд, коричневые пятна на тыльной поверхности кистей или лица',
            'r16' => 'Стоматит - трещины, «заезды» в уголках рта, кариес...',
            'r17' => 'Ломкость, тусклость, истончение или исчерченность ногтей, ложкообразная вогнутость ногтей',
            'r18' => 'Являетесь донором',
            'r19' => 'Менструации сохранены (только для женщин)',
            'r20' => 'Десневые кровотечения',
            'r21' => 'Геморроидальные кровотечения',
            'r22' => 'Ухудшение памяти',
            'r23' => 'Плохой сон',




            'q1' => 'Вес',
            'q2' => 'Рост',
            'q3' => 'Пульс за минуту',
            'q4' => 'Аллергия на лекарства/растения (при наличии)',

            'q5' => 'Количество лейкоцитов в ОАК',
            'q6' => 'Количество эритроцитов в ОАК',
            'q7' => 'Уровень гемоглобина',
            'q8' => 'Уровень MCV',
            'q9' => 'Уровень MCH',
            'q10' => 'Уровень MCHC',
            'q11' => 'Показатель RDW CV %',
            'q12' => 'Общий белок (если знаете)',
            'q13' => 'Ферритин (если знаете)',
            'q14' => 'AЛТ (если известно)',
            'q15' => 'АСТ (если известно)',
            'q16' => 'ГГТ (если известно)',
            'q17' => 'Имеется ли у Вас Аутоиммунное заболевание (указать какое, если есть)',

            'q18' => 'Напишите личный номер NSP, если есть',
            'r24' => 'Если нет, согласны ли Вы на бесплатную регистрацию в NSP?',
            'q19' => 'Напишите личный номер Vitamax, если есть',
            'r25' => 'Если нет, согласны ли Вы на приобретение продукции Vitamax со скидкой по предложенному промокоду?',

            //'recomended' => 'Фамилия врача/нутрициолога/друга, который посоветовал Вам заполнить анкету',
            //'doctor_email' => 'Электронная почта, куда отправить анкету',
            'reCaptcha' => 'Captcha',
            'created_at' => 'Создано'
        ];
    }
}
