<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use app\models\CronClient;
use app\models\Guides;
use app\models\Guser;
use app\models\Transactions;
use Voronkovich\SberbankAcquiring\Currency;
use Voronkovich\SberbankAcquiring\OrderStatus;
use yii\console\Controller;
use app\models\Xuser;
use app\models\Xcontent;
use Yii;
use yii\helpers\Url;
use function React\Promise\all;

class HandlerController extends Controller
{
    public function actionWopen()
    {
        $model = Xcontent::findOne(['type' => 2]);
        if (!empty($model)) {
            $users = Xuser::find()->where(['wopen' => 1, 'activity' => $model->activity])->limit(10)->all();
            //print_r($users);
            if (!empty($users)) {
                foreach ($users as $user) {
                    $user->wopen = 2;
                    $user->save();

                    Yii::$app->mail->compose('start',
                        ['user' => $user,
                            'activity' => $model,
                            'title' => 'Уведомление о вебинаре "' . $model->name . '".',
                            'htmlLayout' => 'layouts/html'])
                        ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                        ->setTo($user->email)
                        ->setReplyTo(['info@integraforlife.com' => 'Анна Холодова'])
                        ->setSubject('Уведомление о вебинаре "' . $model->name . '".')
                        ->send();
                }
            }
        }
    }

    public function actionCheckPayments()
    {
        /**
         * Получаем транзакции
         */
        $transactions = Transactions::find()->where(['status' => 0])->all();
//        $transactions = Transactions::find()->where(['>', 'created_at', 1616563940])->all();
        if (!empty($transactions)) {

            foreach ($transactions as $one) {

                /**
                 * Если транзакция была сделана раньше 20 минут то пропускаем её
                 */
                if (($one->updated_at + (20 * 60)) > time()) {
                    continue;
                }

                /**
                 * Узнаем в себер статус платежа
                 */
                $orderNumber = $one->order_number;
                try {

                    $client = new CronClient(['userName' => 'integraforlife-api', 'password' => 'Flower192543', 'language' => 'ru', 'currency' => Currency::RUB]);

                    $result = $client->getOrderStatusExtended($orderNumber);
                    $temp = explode("-", $result['orderNumber']);
                    $orderIdU2p = $temp[0];

                    //возможно также нужно добавить isApproved в условие или
                    if (OrderStatus::isDeposited($result['orderStatus'])) {

                        if ($temp[1] == 'guide') {

                            $guser = Guser::findOne($orderIdU2p);

                            if ($guser->status == 0) {
                                $guser->scenario = 'update';
                                $guser->status = 1;
                                $guser->save();

                                $guide = Guides::findOne(['hash' => $guser->gcontent]);

                                Yii::$app->mail->compose('payGuideAdmin',
                                    ['user' => $guser,
                                        'guide' => $guide,
                                        'title' => 'Оплата материала "' . $guide->name . '"',
                                        'htmlLayout' => 'layouts/html'])
                                    ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                                    ->setTo('info@integraforlife.com')
                                    ->setSubject('Оплата материала "' . $guide->name . '"')
                                    ->send();

                                Yii::$app->mail->compose('payGuide',
                                    ['user' => $guser,
                                        'guide' => $guide,
                                        'title' => 'Оплата за материал "' . $guide->name . '"',
                                        'htmlLayout' => 'layouts/html'])
                                    ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                                    ->setTo($guser->email)
                                    ->setReplyTo(['info@integraforlife.com' => 'Анна Холодова'])
                                    ->setSubject('Оплата за материал "' . $guide->name . '"')
                                    ->send();
                            }
                        } else {

                            $user = Xuser::findOne($orderIdU2p);

                            if ($user->buy == 0) {

                                $activity = Xcontent::findOne(['activity' => $user->activity]);
                                $user->buy = 1;
                                /*if (($activity->xdate + (20 * 60 * 60)) > time()) {
                                    $user->wclose = 2;
                                } else {
                                    $user->wstart = 1;
                                }*/

                                if ($activity->type == 2) {
                                    $user->wstart = 1;

                                    Yii::$app->mail->compose('payConfirmAdmin',
                                        ['user' => $user,
                                            'activity' => $activity,
                                            'title' => 'Оплата вебинара "' . $activity->name . '"',
                                            'htmlLayout' => 'layouts/html'])
                                        ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                                        ->setTo('info@integraforlife.com')
                                        ->setSubject('Оплата вебинара "' . $activity->name . '"')
                                        ->send();


                                    //если в названии В НАЧАЛЕ используется слово ОЧНО необходимо слать другое письмо
                                    if (strpos($activity->name, 'ОЧНО ') === 0 || strpos($activity->name, 'Курс ') === 0) {
                                        Yii::$app->mail->compose('payConfirmOffline',
                                            ['user' => $user,
                                                'activity' => $activity,
                                                'title' => 'Оплата за мероприятие "' . $activity->name . '"',
                                                'htmlLayout' => 'layouts/html'])
                                            ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                                            ->setTo($user->email)
                                            ->setReplyTo(['info@integraforlife.com' => 'Анна Холодова'])
                                            ->setSubject('Оплата за мероприятие "' . $activity->name . '"')
                                            ->send();
                                    } else {
                                        Yii::$app->mail->compose('payConfirm',
                                            ['user' => $user,
                                                'activity' => $activity,
                                                'title' => 'Оплата за вебинар "' . $activity->name . '"',
                                                'htmlLayout' => 'layouts/html'])
                                            ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                                            ->setTo($user->email)
                                            ->setReplyTo(['info@integraforlife.com' => 'Анна Холодова'])
                                            ->setSubject('Оплата за вебинар "' . $activity->name . '"')
                                            ->send();
                                    }

                                } else if ($activity->type == 3) {
                                    $user->wclose = 2;

                                    Yii::$app->mail->compose('payConfirmAdmin',
                                        ['user' => $user,
                                            'activity' => $activity,
                                            'title' => 'Оплата за запись вебинара "' . $activity->name . '"',
                                            'htmlLayout' => 'layouts/html'])
                                        ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                                        ->setTo('info@integraforlife.com')
                                        ->setSubject('Оплата за записи вебинара "' . $activity->name . '"')
                                        ->send();

                                    $needCertLink = !empty($activity->cert);
                                    Yii::$app->mail->compose('close',
                                        ['user' => $user,
                                            'activity' => $activity,
                                            'needCertLink' => $needCertLink,
                                            'title' => 'Ссылка на запись вебинара "' . $activity->name . '".',
                                            'htmlLayout' => 'layouts/html'])
                                        ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                                        ->setTo($user->email)
                                        ->setReplyTo(['info@integraforlife.com' => 'Анна Холодова'])
                                        ->setSubject('Ссылка на запись вебинара "' . $activity->name . '".')->send();
                                }

                                $user->save();
                            }
                        }

                    }
                } catch (\Exception $e) {
                }

                $one->status = 1;
                $one->save();
            }
        }
    }

    public function actionWstart()
    {
        $model = Xcontent::find()->where(['type' => 2])->andWhere(['<', 'xdate', time()])->one();
        if (!empty($model)) {
            $users = Xuser::find()->where(['wstart' => 1, 'buy' => 1, 'activity' => $model->activity])->limit(10)->all();
            if (!empty($users)) {
                foreach ($users as $user) {
                    $user->wstart = 2;
                    $user->save();

                    //если в названии В НАЧАЛЕ используется слово ОЧНО необходимо слать другое письмо
                    if (strpos($model->name, 'ОЧНО ') === 0 || strpos($model->name, 'Курс ') === 0) {
                        Yii::$app->mail->compose('currentOffline',
                            ['user' => $user,
                                'activity' => $model,
                                'title' => 'Напоминание о мероприятии "' . $model->name . '".',
                                'htmlLayout' => 'layouts/html'])
                            ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                            ->setTo($user->email)
                            ->setReplyTo(['info@integraforlife.com' => 'Анна Холодова'])
                            ->setSubject('Напоминание о мероприятии "' . $model->name . '".')
                            ->send();
                    } else {
                        Yii::$app->mail->compose('current',
                            ['user' => $user,
                                'activity' => $model,
                                'title' => 'Напоминание о вебинаре "' . $model->name . '".',
                                'htmlLayout' => 'layouts/html'])
                            ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                            ->setTo($user->email)
                            ->setReplyTo(['info@integraforlife.com' => 'Анна Холодова'])
                            ->setSubject('Напоминание о вебинаре "' . $model->name . '".')
                            ->send();
                    }
                }
            }
        }
    }

    public function actionWclose()
    {
        $activityHash = "";
        $users = Xuser::find()->where(['wclose' => 1, 'buy' => 1])->limit(10)->all();
        if (!empty($users)) {
            foreach ($users as $user) {
                $user->wclose = 2;
                $user->save();
                if ($activityHash != $user->activity) {
                    $model = Xcontent::findOne(['activity' => $user->activity]);
                    $activityHash = $user->activity;
                }

                $needCertLink = !empty($model->cert);
                $mes = Yii::$app->mail->compose('close',
                    ['user' => $user,
                        'activity' => $model,
                        'needCertLink' => $needCertLink,
                        'title' => 'Ссылка на запись вебинара "' . $model->name . '".',
                        'htmlLayout' => 'layouts/html'])
                    ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                    ->setTo($user->email)
                    ->setReplyTo(['info@integraforlife.com' => 'Анна Холодова'])
                    ->setSubject('Ссылка на запись вебинара "' . $model->name . '".');
                /*if(!empty($model->cert)) {
                    $mes->attach("/home/m/mcflow/integraforlife.com/public_html".$model->cert);
                }*/
                $mes->send();
            }
        }
    }
}
