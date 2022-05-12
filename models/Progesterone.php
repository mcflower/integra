<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "progesterone".
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
 * @property string $q14
 * @property string $q15
 * @property string $q16
 * @property string $q17
 * @property string $q18
 * @property string $q19
 * @property string $q20
 * @property string $q21
 * @property string $q22
 * @property string $q23
 * @property string $q24
 * @property string $q25
 * @property string $q26
 * @property string $q27
 * @property string $q28
 * @property string $q29
 * @property string $q30
 * @property string $q31
 * @property string $q32
 * @property string $q33
 * @property string $q34
 * @property string $q35
 * @property string $q36
 * @property string $q37
 * @property string $q38
 * @property string $q39
 * @property string $q40
 * @property string $q41
 * @property string $q42
 * @property string $q43
 * @property string $q44
 * @property int $created_at
 * @property int $updated_at
 */
class Progesterone extends \yii\db\ActiveRecord
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
        return 'progesterone';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['q1', 'q2', 'q3', 'q4', 'q5', 'reCaptcha'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'q9', 'q10', 'q11', 'q12', 'q13', 'q14', 'q15', 'q16', 'q17', 'q18', 'q19', 'q20', 'q21', 'q22', 'q23', 'q24', 'q25', 'q26', 'q27', 'q28', 'q29', 'q30', 'q31', 'q32', 'q33', 'q34', 'q35', 'q36', 'q37', 'q38', 'q40', 'q41', 'q42', 'q43', 'q44'], 'string', 'max' => 255],
            ['q39',  'string', 'max' => 1024],
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
            'q2' => 'Дата рождения',
            'q3' => 'Номер телефона',
            'q4' => 'Электронная почта',
            'q5' => 'Город проживания/Область',
            'q6' => 'Болезненность молочных желёз',
            'q7' => 'Смена настроения перед менструацией',
            'q8' => 'Головная боль перед менструацией',
            'q9' => 'Мигренозные боли',
            'q10' => 'Болезненные менструации',
            'q11' => 'Обильные менструации',
            'q12' => 'Иногда/всегда задержка менструации',
            'q13' => 'У Вас есть миома матки?',
            'q14' => 'У Вас есть ФКМ (мастопатия)?',
            'q15' => 'У Вас есть эндометриоз/аденомиоз?',
            'q16' => 'У Вас было более 1 выкидыша',
            'q17' => 'Бесплодие в анамнезе',
            'q18' => 'У Вас болят в суставах?',
            'q19' => 'У Вас снизилось либидо?',
            'q20' => 'У меня есть стремление изменить мою внешность',
            'q21' => 'Плохо растут волосы',
            'q22' => 'У меня приступы паники',
            'q23' => 'Есть ли у Вас запоры?',
            'q24' => 'Есть ли у Вас гипотиреоз?',
            'q25' => 'Есть ли у Вас гипертиреоз в анамнезе или в настоящее время?',
            'q26' => 'Есть ли у Вас заболевание желчного пузыря (желчекаменная болезнь холецистит, дискинезии желчи выводящих путей)?',
            'q27' => 'Уровень гемоглобина',
            'q28' => 'Уровень MCV (в общем анализе крови)',
            'q29' => 'Ферритин (если знаете)',
            'q30' => 'Витамин Д',
            'q31' => 'Омега-3 индекс',
            'q32' => 'Гомоцистеин',
            'q33' => 'AЛТ (если известно)',
            'q34' => 'АСТ (если известно)',
            'q35' => 'ГГТП (если известно)',
            'q36' => 'Билирубин прямой',
            'q37' => 'Билирубин непрямой',
            'q38' => 'Объём талии (измеренный вокруг пупка) в см',
            'q39' => 'Укажите препараты (лекарства и/или БАДы) принимаемые на постоянной основе с указанием дозы',
            'q40' => 'Напишите личный номер NSP, если есть',
            'q41' => 'Если нет, согласны ли Вы на бесплатную регистрацию в NSP?',
            'q42' => 'Напишите личный номер Vitamax, если есть',
            'q43' => 'Если нет, согласны ли Вы на приобретение продукции Vitamax со скидкой по предложенному промокоду?',
            'q44' => 'Хотели бы Вы получить на основании заполненной анкеты персональную программу поддержки прогестерона во 2-ю фазу цикла?',
            'reCaptcha' => 'Captcha',
            'created_at' => 'Создано',
            'updated_at' => 'Обновлено',
        ];
    }
}
