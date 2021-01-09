<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "xcontent".
 *
 * @property int $id
 * @property string $img
 * @property string $name
 * @property int $vimeo
 * @property string $activity
 * @property string $about
 * @property string $photo
 * @property string $cert
 * @property int $expired
 * @property int $type
 * @property int $price
 * @property int $xdate
 * @property string $xtime
 * @property string $url
 * @property string $description
 * @property int $created_at
 * @property int $updated_at
 */
class Xcontent extends \yii\db\ActiveRecord
{
    public $string_day;
    
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
        return 'xcontent';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cert', 'photo', 'about', 'name', 'vimeo', 'activity', 'expired', 'url', 'type', 'price', 'xdate', 'xtime', 'img', 'description', 'string_day'], 'required'],
            [['vimeo', 'expired', 'created_at', 'updated_at', 'type', 'price', 'xdate'], 'integer'],
            [['cert', 'name', 'activity', 'xtime', 'url', 'photo'], 'string', 'max' => 255],
            [['about'], 'string', 'max' => 1024],
            [['description'], 'string'],
        ];
    }

    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios['new'] = ['name', 'price', 'string_day', 'xtime', 'img', 'description', 'photo', 'about'];
        $scenarios['update'] = ['name', 'price', 'string_day', 'xtime', 'description', 'about'];
        $scenarios['open'] = ['url'];
        $scenarios['close'] = ['vimeo'];
        return $scenarios;
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'vimeo' => 'Запись',
            'activity' => 'Активность',
            'expired' => 'Доступен до',
            'url' => 'Ссылка на вебинар',
            'cert' => 'Сертификат',
            'photo' => 'Фото ведущего',
            'about' => 'О ведущем',
            'img' => 'Превью',
            'description' => 'Описание',
            'type' => 'Статус',
            'price' => 'Цена',
            'xdate' => 'Дата начала',
            'xtime' => 'Время начала',
            'string_day' => 'Дата начала',
            'created_at' => 'Создано',
            'updated_at' => 'Обновлено',
        ];
    }

    public static function getXcontentActivityArray()
    {
        $model = Xcontent::find()->groupBy('activity')->orderBy('xdate desc')->all();
        $result = array();
        foreach($model as $one) {
            $result[$one['activity']] = $one['name']." ".date('d.m.Y', $one['xdate']);
        }
        //return ArrayHelper::map($model, 'activity', 'name');
        return $result;
    }

}
