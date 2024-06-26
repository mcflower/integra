<?php

namespace app\controllers;

use app\models\Guides;
use app\models\Guser;
use app\models\Webinar;
use app\models\Xcontent;
use app\models\Xuser;
use app\models\Yandex;
use Exception;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\helpers\Json;
use yii\helpers\Url;
use yii\web\Controller;
use YooKassa\Client;
use YooKassa\Model\Notification\NotificationSucceeded;
use YooKassa\Model\Notification\NotificationWaitingForCapture;
use YooKassa\Model\NotificationEventType;

class YandexController extends Controller
{

    protected $client;
    protected $returnUrl = 'https://integraforlife.com/yandex/payment-notification?hash=';

    public function init()
    {
        $this->client = new Client();
        $this->client->setAuth('408786', 'test_-x0BMtaijiSkoO90Eg3zwhvEYVaxK5n1oFQlMpHwRJ4');
    }

    public function beforeAction($action)
    {
        if (in_array($action->id, ['ipn'])) {
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }

    public function behaviors()
    {

        $behaviors = [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                    ]
                ]
            ],

            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'ipn' => ['POST'],
                ],
            ],
        ];


        return $behaviors;
    }

    public function actionActivityPayment($hash)
    {
        $user = Xuser::find()->where(['hash' => $hash])->one();

        /**
         * Если пользователь не найден
         */
        if (!$user) {
            Yii::$app->session->setFlash('danger', 'Ошибка при создании оплаты. Заказ не найден!');
            return $this->redirect('/');
        }

        /**
         * Если заказ уже оплачен
         */
        if ($user->buy == 1) {
            Yii::$app->session->setFlash('warning', 'Заказ уже оплачен!');
            return $this->redirect('/');
        }

        $orderId = $user->id;
        $activity = Xcontent::find()->where(['activity' => $user->activity])->andWhere(['or', ['type' => 2], ['type' => 0]])->one();
        if (empty($activity)) {
            Yii::$app->session->setFlash('error', 'Вебинар не найден! Зарегистрируйтесь снова.');
            return $this->redirect('/');
        }

        try {
            $payment = $this->client->createPayment(
                [
                    'amount' => [
                        'value' => $activity->price,
                        'currency' => 'RUB',
                    ],
                    'confirmation' => [
                        'type' => 'redirect',
                        'return_url' => $this->returnUrl . $hash . "&tbl=xct",
                    ],
                    /*'receipt' => [
                        'customer' => [
                            'email' => Yii::$app->user->identity->username,
                        ],
                        'items' => [
                            [
                                'description' => "Авторская программа «" . $programm->name . "» Заказа №{$orderId} OnlyNaturalDiet.com.",
                                'quantity' => '1',
                                'amount' => [
                                    'value' => $activity->price,
                                    'currency' => 'RUB',
                                ],
                                'vat_code' => 1,
                                'payment_subject' => 'service'
                            ]
                        ],
                        'tax_system_code' => 2,
                    ],*/
                    'capture' => true,
                    'description' => $activity->name . ". Заказ №{$orderId} integraforlife.com",
                ], uniqid('', true)
            );

            $transaction = new Yandex();
            $transaction->scenario = 'new';
            $transaction->order_number = $orderId;
            $transaction->ya_id = $payment->getId();
            $transaction->table_name = 'xcontent';
            $transaction->save();

            return $this->redirect(Url::to($payment->getConfirmation()->getConfirmationUrl()));

        } catch (Exception $e) {
            Yii::$app->mail->compose()
                ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                ->setTo('mcflower@me.com')
                ->setSubject('Integra. Exception step 0 (Yandex)')
                ->setTextBody($e)
                ->send();
            Yii::$app->session->setFlash('error', 'Ошибка платежной системы. Повторите позднее.');
            return $this->redirect('/');
        }
    }

    public function actionRecordPayment($hash)
    {
        $user = Xuser::find()->where(['hash' => $hash])->one();

        /**
         * Если пользователь не найден
         */
        if (!$user) {
            Yii::$app->session->setFlash('danger', 'Ошибка при создании оплаты. Заказ не найден!');
            return $this->redirect('/');
        }

        /**
         * Если заказ уже оплачен
         */
        if ($user->buy == 1) {
            Yii::$app->session->setFlash('warning', 'Заказ уже оплачен!');
            return $this->redirect('/');
        }

        $orderId = $user->id;
        $activity = Xcontent::findOne(['activity' => $user->activity, 'type' => 3]);
        if (empty($activity)) {
            Yii::$app->session->setFlash('error', 'Вебинар не найден! Зарегистрируйтесь снова.');
            return $this->redirect('/');
        }

        try {
            $payment = $this->client->createPayment(
                [
                    'amount' => [
                        'value' => $activity->price,
                        'currency' => 'RUB',
                    ],
                    'confirmation' => [
                        'type' => 'redirect',
                        'return_url' => $this->returnUrl . $hash . "&tbl=xct",
                    ],
                    /*'receipt' => [
                        'customer' => [
                            'email' => Yii::$app->user->identity->username,
                        ],
                        'items' => [
                            [
                                'description' => "Авторская программа «" . $programm->name . "» Заказа №{$orderId} OnlyNaturalDiet.com.",
                                'quantity' => '1',
                                'amount' => [
                                    'value' => $activity->price,
                                    'currency' => 'RUB',
                                ],
                                'vat_code' => 1,
                                'payment_subject' => 'service'
                            ]
                        ],
                        'tax_system_code' => 2,
                    ],*/
                    'capture' => true,
                    'description' => "(Запись) " . $activity->name . ". Заказ №{$orderId} integraforlife.com",
                ], uniqid('', true)
            );

            $transaction = new Yandex();
            $transaction->scenario = 'new';
            $transaction->order_number = $orderId;
            $transaction->ya_id = $payment->getId();
            $transaction->table_name = 'record';
            $transaction->save();

            return $this->redirect(Url::to($payment->getConfirmation()->getConfirmationUrl()));

        } catch (Exception $e) {
            Yii::$app->mail->compose()
                ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                ->setTo('mcflower@me.com')
                ->setSubject('Integra. Exception step 0 (Yandex)')
                ->setTextBody($e)
                ->send();
            Yii::$app->session->setFlash('error', 'Ошибка платежной системы. Повторите позднее.');
            return $this->redirect('/');
        }
    }

    public function actionGuidePayment($hash)
    {
        $user = Guser::findOne(['hash' => $hash]);
        $orderId = $user->id;
        $guide = Guides::findOne(['hash' => $user->gcontent]);

        try {
            $payment = $this->client->createPayment(
                [
                    'amount' => [
                        'value' => $guide->price,
                        'currency' => 'RUB',
                    ],
                    'confirmation' => [
                        'type' => 'redirect',
                        'return_url' => $this->returnUrl . $hash . "&tbl=gde",
                    ],
                    /*'receipt' => [
                        'customer' => [
                            'email' => Yii::$app->user->identity->username,
                        ],
                        'items' => [
                            [
                                'description' => "Авторская программа «" . $programm->name . "» Заказа №{$orderId} OnlyNaturalDiet.com.",
                                'quantity' => '1',
                                'amount' => [
                                    'value' => $activity->price,
                                    'currency' => 'RUB',
                                ],
                                'vat_code' => 1,
                                'payment_subject' => 'service'
                            ]
                        ],
                        'tax_system_code' => 2,
                    ],*/
                    'capture' => true,
                    'description' => "(Материал) " . $guide->name . ". Заказ №{$orderId} integraforlife.com",
                ], uniqid('', true)
            );

            $transaction = new Yandex();
            $transaction->scenario = 'new';
            $transaction->order_number = $orderId;
            $transaction->ya_id = $payment->getId();
            $transaction->table_name = 'guide';
            $transaction->save();

            return $this->redirect(Url::to($payment->getConfirmation()->getConfirmationUrl()));

        } catch (Exception $e) {
            Yii::$app->mail->compose()
                ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                ->setTo('mcflower@me.com')
                ->setSubject('Integra. Exception step 0 (Yandex)')
                ->setTextBody($e)
                ->send();
            Yii::$app->session->setFlash('error', 'Ошибка платежной системы. Повторите позднее.');
            return $this->redirect('/');
        }
    }

    public function actionPaymentNotification($hash, $tbl)
    {

        $model = null;
        if ($tbl == 'gde') {
            $model = Guser::findOne(['hash' => $hash]);
        } elseif($tbl == 'xct') {
            $model = Xuser::findOne(['hash' => $hash]);
        }

        if (is_null($model)) {
            return $this->redirect(Url::to(['site/error-page', 'error' => 4]));
        } else {
            $transaction = Yandex::findOne(['order_number' => $model->id, 'status' => 1]);
            if (empty($transaction)) {
                return $this->redirect(Url::to(['site/error-page', 'error' => 8]));
            } else {
                if ($transaction->table_name == 'record' || $transaction->table_name == 'xcontent') {

                    return $this->redirect(Url::to(['site/success-page']));

                } elseif ($transaction->table_name == 'guide') {
                    return $this->redirect(Url::to(['site/guide-buy-complete', 'hash' => $model->hash]));
                } else {
                    return $this->redirect(Url::to(['site/error-page', 'error' => 1]));
                }
            }
        }
    }

    public function actionIpn()
    {

        $source = file_get_contents('php://input');
        $requestBody = Json::decode($source, true);

        // Создайте объект класса уведомлений в зависимости от события
        try {
            $notification = ($requestBody['event'] === NotificationEventType::PAYMENT_SUCCEEDED)
                ? new NotificationSucceeded($requestBody)
                : new NotificationWaitingForCapture($requestBody);
        } catch (Exception $e) {
            Yii::$app->mail->compose()
                ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                ->setTo('mcflower@me.com')
                ->setSubject('Integra. Exception step 1 (Yandex)')
                ->setTextBody($e)
                ->send();
            die();
        }

        // Получите объект платежа
        $paymentObj = $notification->getObject();

        /**
         * ID платежа в системе яндекс
         */
        $paymentId = $paymentObj->getId();

        try {
            $payment = $this->client->getPaymentInfo($paymentId);
        } catch (Exception $exception) {
            Yii::$app->mail->compose()
                ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                ->setTo('mcflower@me.com')
                ->setSubject('Integra. Exception step 2 (Yandex)')
                ->setTextBody($exception)
                ->send();
            die();
        }

        if ($payment->getStatus() == 'waiting_for_capture' || $payment->getStatus() == 'succeeded') {
            $transaction = Yandex::findOne(['ya_id' => $paymentId]);
            if (!empty($transaction)) {
                if ($transaction->table_name == 'xcontent') {

                    $user = Xuser::findOne($transaction->order_number);

                    if ($user->buy == 0) {
                        $user->buy = 1;
                        $user->wstart = 1;
                        $user->save();

                        $activity = Xcontent::findOne(['activity' => $user->activity]);

                        $xd = date('d.m.Y', $activity->xdate);

                        Yii::$app->mail->compose('payConfirmAdmin',
                            ['user' => $user,
                                'activity' => $activity,
                                'title' => $xd . ' Оплата вебинара "' . $activity->name . '"',
                                'htmlLayout' => 'layouts/html'])
                            ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                            ->setTo('info@integraforlife.com')
                            ->setSubject($xd . 'Оплата вебинара "' . $activity->name . '"')
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

                    }
                } elseif ($transaction->table_name == 'record') {

                    $user = Xuser::findOne($transaction->order_number);

                    if ($user->buy == 0) {
                        $user->buy = 1;
                        $user->wstart = 2;
                        $user->save();

                        $activity = Xcontent::findOne(['activity' => $user->activity]);

                        $xd = date('d.m.Y', $activity->xdate);
                        Yii::$app->mail->compose('payConfirmAdmin',
                            ['user' => $user,
                                'activity' => $activity,
                                'title' => $xd . ' Оплата за запись вебинара "' . $activity->name . '"',
                                'htmlLayout' => 'layouts/html'])
                            ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                            ->setTo('info@integraforlife.com')
                            ->setSubject($xd . ' Оплата за записи вебинара "' . $activity->name . '"')
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

                } elseif ($transaction->table_name == 'guide') {
                    $guser = Guser::findOne($transaction->order_number);

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
                }

                $transaction->scenario = 'update';
                $transaction->status = 1;
                $transaction->save();
            }
        }
    }
}
