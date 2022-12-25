<?php

namespace app\controllers;

use app\models\Article;
use app\models\Certificate;
use app\models\CronClient;
use app\models\Doctors;
use app\models\Event;
use app\models\Guser;
use app\models\Hypoxia;
use app\models\Info;
use app\models\IntegraAnalysis;
use app\models\IntegraCatalog;
use app\models\IntegraGroup;
use app\models\Patient;
use app\models\Progesterone;
use app\models\Question;
use app\models\Transactions;
use app\models\VesselAnketa;
use app\models\Xcontent;
use app\models\Xuser;
use app\models\Guides;
use app\models\ZhktAnketa;
use Exception;
use Yii;
use yii\base\BaseObject;
use yii\base\DynamicModel;
use yii\filters\AccessControl;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\helpers\Url;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Webinar;
use Voronkovich\SberbankAcquiring\Client;
use Voronkovich\SberbankAcquiring\Currency;
use Voronkovich\SberbankAcquiring\OrderStatus;
use kartik\mpdf\Pdf;

class SiteController extends Controller
{

    public $metaImg = '/img/logo-bg.jpg';
    public $metaDescription = 'Врач эндокринолог, андролог, нутрициолог, «Д-доктор». Автор научных статей, посвящённых изучению инсулинорезистентности, кардиометаболических заболеваний, витамину Д, и т д. Специалист по лечению ожирения и сохранению здоровья и долголетия семейной пары. Специалист по реабилитации микробиоты кишечника. Основатель ООО «Клиника Интегра»';

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $articles = Article::find()->orderBy('position asc')->all();
        $questions = Question::find()->orderBy('position asc')->all();
        $info = Info::findOne(1);
        $certs = Certificate::find()->orderBy('position asc')->all();
        $webinars = Webinar::find()->where(['hide' => 0])->orderBy('position asc')->all();
        $active = Xcontent::find()->where(['type' => 2])->orderBy('xdate asc')->one();
        if (empty($active)) {
            $active = Xcontent::find()->where(['type' => 1])->orderBy('xdate asc')->one();
        }
        $nexts = Xcontent::find()->where(['type' => [1, 2]])->orderBy('xdate asc')->all();

        $model = new Xuser();
        $model->scenario = "current";

        return $this->render('index',
            [
                'articles' => $articles,
                'questions' => $questions,
                'info' => $info,
                'certs' => $certs,
                'webinars' => $webinars,
                'active' => $active,
                'nexts' => $nexts,
                'model' => $model,
            ]);
    }

    /**
     * Для покупки активных вебинаров
     * @return string|Response
     * @throws \yii\base\InvalidConfigException
     */
    public function actionSuccess()
    {
        /**
         * Если оплатили через sberPay то необходимо дождаться когда крон самостоятельно проставит оплату
         */
        if (isset($_GET['bankInvoiceID'])) {
            Yii::$app->session->setFlash('warning', 'Спасибо. Мы проверяем Ваш платеж. Это займет не более 30 минут.');
            return $this->redirect('/');
        }

        try {

            $orderId = $_GET['orderId'];

            //$client = new Client(['userName' => 'integraforlife-api', 'password' => 'integraforlife', 'language' => 'ru', 'currency' => Currency::RUB, 'apiUri' => Client::API_URI_TEST]);
            $client = new Client(['userName' => 'integraforlife-api', 'password' => 'Flower192543', 'language' => 'ru', 'currency' => Currency::RUB]);

            $systemOrderId = $orderId;
            $result = $client->getOrderStatusExtended($systemOrderId);
            $temp = explode("-", $result['orderNumber']);
            $orderIdU2p = $temp[0];

            //возможно также нужно добавить isApproved в условие или
            if (OrderStatus::isDeposited($result['orderStatus'])) {

                $id = $orderIdU2p;
                $orderSum = $result['amount'] / 100;

                $user = Xuser::findOne($id);

                if ($user->buy == 0) {
                    $user->buy = 1;
                    $user->wstart = 1;
                    $user->save();

                    $transaction = Transactions::findOne(['order_number' => $result['orderNumber']]);
                    if (!empty($transaction)) {
                        $transaction->scenario = 'update';
                        $transaction->status = 1;
                        $transaction->save();
                    }

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
                    if (strpos($activity->name, 'ОЧНО ') === 0) {
                        Yii::$app->mail->compose('payConfirmOffline',
                            ['user' => $user,
                                'activity' => $activity,
                                'title' => 'Оплата за мероприятие "' . $activity->name . '"',
                                'htmlLayout' => 'layouts/html'])
                            ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                            ->setTo($user->email)
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
                            ->setSubject('Оплата за вебинар "' . $activity->name . '"')
                            ->send();
                    }

                }

            } else {
                Yii::$app->session->setFlash('danger', 'Ошибка. Повторите позднее!');
                return $this->redirect('/');
            }

        } catch (Exception $e) {
            Yii::$app->mail->compose()
                ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                ->setTo('mcflower@me.com')
                ->setSubject('Exception step 2 (sberbank)')
                ->setTextBody($e)
                ->send();
            return $this->redirect('/');
        }

        $nexts = Xcontent::find()->where(['type' => 1])->orderBy('xdate asc')->all();
        $webinars = Webinar::find()->where(['hide' => 0])->orderBy('position asc')->all();

        $this->view->registerCssFile('/css/notify.css');

        return $this->render('success',
            [
                'webinars' => $webinars,
                'nexts' => $nexts
            ]);
    }

    /**
     * Для покупки записей
     * @return string|Response
     * @throws \yii\base\InvalidConfigException
     */
    public function actionSuccessInvoice()
    {
        /**
         * Если оплатили через sberPay то необходимо дождаться когда крон самостятельно проставит оплату
         */
        if (isset($_GET['bankInvoiceID'])) {
            Yii::$app->session->setFlash('warning', 'Спасибо. Мы проверяем Ваш платеж. Это займет не более 30 минут.');
            return $this->redirect('/');
        }

        try {

            $orderId = $_GET['orderId'];

            //$client = new Client(['userName' => 'integraforlife-api', 'password' => 'integraforlife', 'language' => 'ru', 'currency' => Currency::RUB, 'apiUri' => Client::API_URI_TEST]);
            $client = new Client(['userName' => 'integraforlife-api', 'password' => 'Flower192543', 'language' => 'ru', 'currency' => Currency::RUB]);

            $systemOrderId = $orderId;
            $result = $client->getOrderStatusExtended($systemOrderId);
            $temp = explode("-", $result['orderNumber']);
            $orderIdU2p = $temp[0];

            //возможно также нужно добавить isApproved в условие или
            if (OrderStatus::isDeposited($result['orderStatus'])) {

                $id = $orderIdU2p;
                $orderSum = $result['amount'] / 100;

                $user = Xuser::findOne($id);

                if ($user->buy == 0) {
                    $user->buy = 1;
                    $user->wclose = 2;
                    $user->save();

                    $transaction = Transactions::findOne(['order_number' => $result['orderNumber']]);
                    if (!empty($transaction)) {
                        $transaction->scenario = 'update';
                        $transaction->status = 1;
                        $transaction->save();
                    }

                    $activity = Xcontent::findOne(['activity' => $user->activity]);

                    $xd = date('d.m.Y', $activity->xdate);
                    Yii::$app->mail->compose('payConfirmAdmin',
                        ['user' => $user,
                            'activity' => $activity,
                            'title' => $xd . ' Оплата за запись вебинара "' . $activity->name . '"',
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
                        ->setSubject('Ссылка на запись вебинара "' . $activity->name . '".')->send();

                }

            } else {
                Yii::$app->session->setFlash('danger', 'Ошибка. Повторите позднее!');
                return $this->redirect('/');
            }

        } catch (Exception $e) {
            Yii::$app->mail->compose()
                ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                ->setTo('mcflower@me.com')
                ->setSubject('Exception step 2 (sberbank)')
                ->setTextBody($e)
                ->send();
            return $this->redirect('/');
        }

        $nexts = Xcontent::find()->where(['type' => 1])->orderBy('xdate asc')->all();
        $webinars = Webinar::find()->where(['hide' => 0])->orderBy('position asc')->all();

        $this->view->registerCssFile('/css/notify.css');

        return $this->render('success',
            [
                'webinars' => $webinars,
                'nexts' => $nexts
            ]);
    }

    public function actionNewActive()
    {
        $post = Yii::$app->request->post();
        $email = trim(strtolower($post['Xuser']['email']));
        $activityCode = trim($post['Xuser']['activity']);
        $secret = Yii::$app->params['secret'];
        $hash = md5($email . $activityCode . $secret);
        $user = Xuser::findOne(['hash' => $hash]);
        $saveResult = true;
        if (empty($user)) {
            $user = new Xuser();
            $user->scenario = 'current';
            $user->email = $email;
            $user->hash = $hash;
            $user->activity = $activityCode;
            $user->wstart = 1;
            $user->name = strip_tags(trim($post['Xuser']['name']));
            $saveResult = $user->save();
        }

        $activity = Xcontent::findOne(['activity' => $activityCode]);
        if (!empty($activity) && $saveResult) {
            /**
             * Отправляем на страницу платежа
             */
            return $this->redirect(Url::to(['payment', 'hash' => $hash]));
            /*Yii::$app->mail->compose('active',
                ['client' => $user->name,
                    'hash' => $hash,
                    'title' => 'Регистрация на вебинар "' . $activity->name . '".',
                    'htmlLayout' => 'layouts/html'])
                ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                ->setTo($email)
                ->setSubject('Регистрация на вебинар "' . $activity->name . '".')
                ->send();*/
//            Yii::$app->session->setFlash('info', 'Успешно! Проверьте электронную почту для дальнейших инструкций.');

        } else {
            Yii::$app->session->setFlash('danger', 'Ошибка. Повторите позднее!');
        }

        return $this->redirect('/');
    }

    public function actionNewRecord()
    {
        $post = Yii::$app->request->post();
        $email = trim(strtolower($post['Xuser']['email']));
        $activityCode = trim($post['Xuser']['activity']);
        $secret = Yii::$app->params['secret'];
        $hash = md5($email . $activityCode . $secret);
        $user = Xuser::findOne(['hash' => $hash]);
        $saveResult = true;
        if (empty($user)) {
            $user = new Xuser();
            $user->scenario = 'current';
            $user->email = $email;
            $user->hash = $hash;
            $user->activity = $activityCode;
            $user->wstart = 0;
            $user->name = strip_tags(trim($post['Xuser']['name']));
            $saveResult = $user->save();
        }

        $activity = Xcontent::findOne(['activity' => $activityCode]);
        if (!empty($activity) && $saveResult) {
            /**
             * Отправляем на страницу платежа
             */
            return $this->redirect(Url::to(['invoice', 'hash' => $hash]));
            /*Yii::$app->mail->compose(
                'buyRecord',
                ['user' => $user,
                    'activity' => $activity,
                    'title' => 'Счет на оплату вебинара "' . $activity->name . '".',
                    'htmlLayout' => 'layouts/html']
            )
                ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                ->setTo($user->email)
                ->setSubject('Счет на оплату вебинара "' . $activity->name . '".')->send();*/

//            Yii::$app->session->setFlash('info', 'Успешно! Проверьте электронную почту для дальнейших инструкций.');

        } else {
            Yii::$app->session->setFlash('danger', 'Ошибка. Повторите позднее!');
        }

        return $this->redirect('/');
    }

    public function actionNextEvent()
    {
        $post = Yii::$app->request->post();
        $email = trim(strtolower($post['Xuser']['email']));
        $activityCode = trim($post['Xuser']['activity']);
        $secret = 'integraextra';
        $hash = md5($email . $activityCode . $secret);
        $user = Xuser::findOne(['hash' => $hash]);
        $saveResult = true;
        if (empty($user)) {
            $user = new Xuser();
            $user->scenario = 'current';
            $user->email = $email;
            $user->hash = $hash;
            $user->activity = $activityCode;
            $user->wopen = 1;
            $user->name = strip_tags(trim($post['Xuser']['name']));
            $saveResult = $user->save();
        }

        $activity = Xcontent::findOne(['activity' => $activityCode]);
        if (!empty($activity) && $saveResult) {
            Yii::$app->mail->compose('next',
                ['client' => $user->name,
                    'hash' => $hash,
                    'activity' => $activity,
                    'title' => 'Уведомление о вебинаре "' . $activity->name . '".',
                    'htmlLayout' => 'layouts/html'])
                ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                ->setTo($email)
                ->setSubject('Уведомление о вебинаре "' . $activity->name . '".')
                ->send();
            Yii::$app->session->setFlash('info', 'Успешно! Проверьте электронную почту для дальнейших инструкций.');

        } else {
            Yii::$app->session->setFlash('danger', 'Ошибка. Повторите позднее!');
        }

        return $this->redirect('/');
    }

    public function actionPersonalCertificate($hash = "")
    {
        //$this->view->title = 'Personal Certificate';

        //return $this->render('certificate');
        $hash = strip_tags(trim($hash));
        if (!empty($hash)) {
            $user = Xuser::findOne(['hash' => $hash, 'buy' => 1]);
            $activity = Xcontent::findOne(['activity' => $user->activity, 'type' => 3]);
            if (!empty($user) && !empty($activity) && !empty($activity->cert)) {

                $content = $this->renderPartial('certificate', ['user' => $user, 'activity' => $activity]);

                // setup kartik\mpdf\Pdf component
                $pdf = new Pdf([
                    // set to use core fonts only
                    'mode' => Pdf::MODE_UTF8,
                    // A4 paper format
                    'format' => Pdf::FORMAT_A4,
                    // portrait orientation
                    'orientation' => Pdf::ORIENT_LANDSCAPE,
                    // stream to browser inline
                    'destination' => Pdf::DEST_BROWSER,
                    //'destination' => Pdf::DEST_DOWNLOAD,
                    // your html content input
                    'content' => $content,
                    // format content from your own css file if needed or use the
                    // enhanced bootstrap css built by Krajee for mPDF formatting
                    //'cssFile' => '@vendor/kartik-v/yii2-mpdf/src/assets/kv-mpdf-bootstrap.min.css',
                    // any css to be embedded if required
                    //'cssInline' => '.kv-heading-1{font-size:18px}',
                    // set mPDF properties on the fly
                    'options' => ['title' => 'Personal Certificate'],
                    'marginTop' => 2,
                    'marginBottom' => 2,
                    'marginRight' => 2,
                    'marginLeft' => 2,
                    'filename' => 'presonal_certificate.pdf',
                    // call mPDF methods on the fly
                    /*'methods' => [
                        'SetHeader'=>['Krajee Report Header'],
                        'SetFooter'=>['{PAGENO}'],
                    ]*/
                ]);

                // return the pdf output as per the destination setting
                return $pdf->render();

            } else {
                Yii::$app->session->setFlash('error', 'Сертификат не найден.');
                return $this->redirect('/');
            }
        } else {
            Yii::$app->session->setFlash('error', 'Ошибка ключа.');
            return $this->redirect('/');
        }
    }

    public function actionWarning()
    {
        $nexts = Xcontent::find()->where(['type' => 1])->orderBy('xdate asc')->all();
        $webinars = Webinar::find()->where(['hide' => 0])->orderBy('position asc')->all();

        $this->view->registerCssFile('/css/notify.css');

        return $this->render('warning',
            [
                'webinars' => $webinars,
                'nexts' => $nexts
            ]);
    }

    public function actionVideo($video_id = 0)
    {
        $video_id = (int)$video_id;
        $video = Xcontent::find()->where(['vimeo' => $video_id])->andWhere(['>', 'expired', time()])->one();
        if (empty($video)) {
            return $this->redirect('/');
        }
        $this->view->registerCssFile('/css/notify.css');

        return $this->render('video', ['video' => $video]);
    }

    public function actionPayment($hash)
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
        $activity = Xcontent::findOne(['activity' => $user->activity, 'type' => 2]);
        if (empty($activity)) {
            Yii::$app->session->setFlash('error', 'Вебинар не найден! Зарегистрируйтесь снова.');
            return $this->redirect('/');
        }

        try {

            //$client = new Client(['userName' => 'integraforlife-api', 'password' => 'integraforlife', 'language' => 'ru', 'currency' => Currency::RUB, 'apiUri' => Client::API_URI_TEST]);
            $client = new Client(['userName' => 'integraforlife-api', 'password' => 'Flower192543', 'language' => 'ru', 'currency' => Currency::RUB]);

            $orderAmount = $activity->price * 100;

            $returnUrl = 'https://integraforlife.com/success';
            $params['failUrl'] = 'https://integraforlife.com/warning';

            $transactionOrderId = $orderId . "-" . time();
            $result = $client->registerOrder($transactionOrderId, $orderAmount, $returnUrl, $params);

            $paymentOrderId = $result['orderId'];
            $paymentFormUrl = $result['formUrl'];

            $transaction = new Transactions();
            $transaction->scenario = 'new';
            $transaction->order_number = $transactionOrderId;
            $transaction->save();

            return $this->redirect(Url::to($paymentFormUrl));

        } catch (Exception $e) {
            Yii::$app->mail->compose()
                ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                ->setTo('mcflower@me.com')
                ->setSubject('Exception step 1 (sberbank)')
                ->setTextBody($e)
                ->send();
            Yii::$app->session->setFlash('error', 'Ошибка платежной системы. Повторите позднее.');
            return $this->redirect('/');
        }
    }

    public function actionInvoice($hash)
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
            $client = new Client(['userName' => 'integraforlife-api', 'password' => 'Flower192543', 'language' => 'ru', 'currency' => Currency::RUB]);

            $orderAmount = $activity->price * 100;

            $returnUrl = 'https://integraforlife.com/success-invoice';
            $params['failUrl'] = 'https://integraforlife.com/warning';

            $transactionOrderId = $orderId . "-" . time();
            $result = $client->registerOrder($transactionOrderId, $orderAmount, $returnUrl, $params);

            $paymentOrderId = $result['orderId'];
            $paymentFormUrl = $result['formUrl'];

            $transaction = new Transactions();
            $transaction->scenario = 'new';
            $transaction->order_number = $transactionOrderId;
            $transaction->save();

            return $this->redirect(Url::to($paymentFormUrl));

        } catch (Exception $e) {
            Yii::$app->mail->compose()
                ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                ->setTo('mcflower@me.com')
                ->setSubject('Exception step 1 (sberbank)')
                ->setTextBody($e)
                ->send();
            Yii::$app->session->setFlash('error', 'Ошибка платежной системы. Повторите позднее.');
            return $this->redirect('/');
        }
    }

    public function actionWebinar($activity)
    {
        $activity = trim(strip_tags($activity));
        $webinar = Xcontent::findOne(['activity' => $activity]);
        if (empty($webinar)) {
            Yii::$app->session->setFlash('error', 'Вебинар не найден!');
            return $this->redirect('/');
        }

        $this->metaImg = $webinar->img;

        $model = new Xuser();
        $model->scenario = "current";

        $this->view->registerCssFile('/css/webinar.css');
        return $this->render('webinar', ['webinar' => $webinar, 'model' => $model]);
    }

    public function actionConference()
    {
        $this->metaImg = "/img/conference1.jpg";
        $this->metaDescription = '3-4 июня 2022 г. Летняя конференция «Применимая медицина». г. Санкт-Петербург, гостиница Октябрьская 4';
        $model = new DynamicModel(['activity','name', 'phone', 'birthday', 'email', 'city']);
        $model->addRule(['activity','name', 'phone', 'birthday', 'email', 'city'], 'required', ['message' => 'Обязательно для заполнения']);

        $this->view->registerCssFile('/css/webinar.css');
        return $this->render('conference', ['model' => $model]);
    }

    public function actionSuccessRegistration()
    {
        $activityName = [
            'without' => 'Без проживания',
            'within' => 'С проживанием',
        ];

        $data = [
            'name' => $_POST['DynamicModel']['name'],
            'phone' => $_POST['DynamicModel']['phone'],
            'birthday' => $_POST['DynamicModel']['birthday'],
            'city' => $_POST['DynamicModel']['city'],
            'email' => $_POST['DynamicModel']['email'],
            'type' => $activityName[$_POST['DynamicModel']['activity']],
        ];

        Yii::$app->mail
            ->compose('conference', [
                'model' => $data,
                'htmlLayout' => 'layouts/html'
            ])
            ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
            ->setTo('elepsoni@gmail.com')
            ->setSubject("Летняя конференция «Применимая медицина»")
            ->send();

        Yii::$app->mail
            ->compose('conference', [
                'model' => $data,
                'htmlLayout' => 'layouts/html'
            ])
            ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
            ->setTo('xolodova63@yandex.ru')
            ->setSubject("Летняя конференция «Применимая медицина»")
            ->send();

        return $this->render('conference_result');
    }

    public function actionNutritionCourse()
    {
        $this->metaImg = "/files/webinar/preview_1657736164.png";
        $this->metaDescription = '12-16 сентября 2022 г. Курс для врачей и нутрициологов «Основы нутрициологии». Цикл усовершенствования квалификации с выдачей сертификата гособразца (ФМБА РФ).';
        $model = new DynamicModel(['activity','name', 'phone', 'email', 'city']);
        $model->addRule(['activity','name', 'phone', 'email', 'city'], 'required', ['message' => 'Обязательно для заполнения']);

        $this->view->registerCssFile('/css/webinar.css');
        return $this->render('nutrition_course', ['model' => $model]);
    }

    public function actionSuccessNutritionRegistration()
    {
        if (Yii::$app->request->post()) {

            $user = new Xuser();
            $user->name = strip_tags(trim($_POST['DynamicModel']['name']));
            $user->email = $_POST['DynamicModel']['email'];
            $user->activity = $_POST['DynamicModel']['activity'];
            $user->hash = md5($_POST['DynamicModel']['email'] . $_POST['DynamicModel']['activity'] . Yii::$app->params['secret']);
            $user->buy = $user->wopen = $user->wstart = $user->wclose = 0;

            if($user->save()) {

                $content = Xcontent::findOne(['activity' => $user->activity]);

                $data = [
                    'name' => $_POST['DynamicModel']['name'],
                    'phone' => $_POST['DynamicModel']['phone'],
                    'city' => $_POST['DynamicModel']['city'],
                    'email' => $_POST['DynamicModel']['email'],
                    'birthday' => '',
                    'type' => $content->name,
                ];

                Yii::$app->mail
                    ->compose('conference', [
                        'model' => $data,
                        'htmlLayout' => 'layouts/html'
                    ])
                    ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                    ->setTo('info@integraforlife.com')
                    ->setSubject("Курс для врачей и нутрициологов «Основы нутрициологии»")
                    ->send();

                return $this->render('conference_result');
            } else {
                Yii::$app->session->setFlash('danger', 'Ошибка. Повторите позднее!');
                return $this->redirect('/');
            }
        } else {
            return $this->redirect(Url::to('nutrition-course'));
        }

    }

    public function actionCityEvent()
    {
        $this->metaImg = "/img/bachelorette.jpg";
        $this->metaDescription = '28 августа 2022 г. Городской девичник с врачами «Клиника Интегра» «ГОРОМНАЛЬНО ЗДОРОВАЯ ЖЕНЩИНА»';
        $model = new DynamicModel(['activity','name', 'phone', 'email']);
        $model->addRule(['activity', 'name', 'phone', 'email'], 'required', ['message' => 'Обязательно для заполнения']);

        $this->view->registerCssFile('/css/webinar.css');
        return $this->render('bachelorette', ['model' => $model]);
    }

    public function actionSuccessCityEvent()
    {
        if (Yii::$app->request->post()) {
            $user = new Xuser();
            $user->name = strip_tags(trim($_POST['DynamicModel']['name']));
            $user->email = $_POST['DynamicModel']['email'];
            $user->activity = $_POST['DynamicModel']['activity'];
            $user->hash = md5($_POST['DynamicModel']['email'] . $_POST['DynamicModel']['activity'] . Yii::$app->params['secret']);
            $user->buy = $user->wopen = $user->wstart = $user->wclose = 0;

            $activity = Xcontent::findOne(['activity' => $user->activity]);
            if (!empty($activity) && $user->save()) {
                /**
                 * Отправляем на страницу платежа
                 */
                return $this->redirect(Url::to(['payment', 'hash' => $user->hash]));
            } else {
                Yii::$app->session->setFlash('danger', 'Ошибка. Повторите позднее!');
                return $this->redirect('/');
            }
        } else {
            return $this->redirect(Url::to('city-event'));
        }
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        $this->layout = "main-login";

        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    /*public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }*/

    /**
     * Displays about page.
     *
     * @return string
     */
    /*public function actionAbout()
    {
        $orderId = '528-1597335771';

        $client = new CronClient(['userName' => 'integraforlife-api', 'password' => 'Flower192543', 'language' => 'ru', 'currency' => Currency::RUB]);

        $systemOrderId = $orderId;
        $result = $client->getOrderStatusExtended($systemOrderId);
        $temp = explode("-", $result['orderNumber']);
        $orderIdU2p = $temp[0];

        print_r($result);
        //возможно также нужно добавить isApproved в условие или
        if (OrderStatus::isDeposited($result['orderStatus'])) {
            echo 'success order';
        } else {
            echo "error order";
        }

        return $this->render('about');
    }*/

    public function actionGuides()
    {
        $model = Guides::find()->where(['hide' => 0])->orderBy('position asc')->all();
        $guser = new Guser();

        return $this->render('guides', ['model' => $model, 'user' => $guser]);
    }

    public function actionGuide($hash)
    {
        $model = Guides::findOne(['hash' => $hash, 'hide' => 0]);
        $guser = new Guser();

        $this->metaImg = $model->img;

        $this->view->registerCssFile('/css/webinar.css');
        return $this->render('guide', ['model' => $model, 'user' => $guser]);
    }

    public function actionHypoxia()
    {
        $model = new Hypoxia();

        if ($model->load(Yii::$app->request->post())) {

            if ($model->save()) {
                Yii::$app->session->setFlash('info', 'Спасибо! Запрос отправлен!');

                Yii::$app->mail
                    ->compose('hypoxia', [
                        'model' => $model,
                        'htmlLayout' => 'layouts/html'
                    ])
                    ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                    ->setTo('info@integraforlife.com')
                    ->setSubject("Анкета «ГИПОКСИИ НЕТ»")
                    ->send();

                $model = new Hypoxia();
            } else {
                Yii::$app->session->setFlash('warning', 'Ошибка при отправке сообщения.');
            }
        }

        $this->view->registerCssFile('/css/anketa.css?i=6');
        return $this->render('hypoxia', ['model' => $model]);
    }
    
    public function actionDoctors()
    {
        $model = new Doctors();

        if ($model->load(Yii::$app->request->post())) {

            if ($model->save()) {
                Yii::$app->session->setFlash('info', 'Спасибо! Запрос отправлен!');

                Yii::$app->mail
                    ->compose('doctors', [
                        'model' => $model,
                        'htmlLayout' => 'layouts/html'
                    ])
                    ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                    ->setTo('info@integraforlife.com')
                    ->setSubject("Доктора")
                    ->send();

                $model = new Doctors();
            } else {
                Yii::$app->session->setFlash('warning', 'Ошибка при отправке сообщения.');
            }
        }

        $this->view->registerCssFile('/css/anketa.css?i=6');
        return $this->render('doctors', ['model' => $model]);
    }

    public function actionImportContact()
    {
        $user = Guser::findAll(['hash' => 222]);
        foreach ($user as $one) {
            $one->scenario = 'wo_captcha';
            $one->hash = md5($one->email . $one->gcontent . Yii::$app->params['secret']);
            if(!$one->save()){
                print_r($one->errors);
                die();
            }
        }
    }

    public function actionBuyGuide()
    {
        $model = new Guser();

        if ($model->load(Yii::$app->request->post())) {

            $hash = md5($model->email . $model->gcontent . Yii::$app->params['secret']);
            $oldRecord = Guser::findOne(['hash' => $hash]);

            if (empty($oldRecord)) {
                $model->hash = $hash;
                $model->status = 0;
            } else {
                if ($oldRecord->status == 1 && ($oldRecord->updated_at + (31 * 24 * 60 * 60)) > time()) {
                    return $this->redirect(Url::to(['error-page', 'error' => 6]));
                } elseif ($oldRecord->status == 0) {
                    $model = $oldRecord;
                    $model->scenario = 'wo_captcha';
                } else {
                    $model->hash = $hash;
                    $model->status = 0;
                }
            }

            if ($model->save()) {

                $guide = Guides::findOne(['hash' => $model->gcontent]);
                $orderId = $model->getPrimaryKey();

                if (!$guide) {
                    return $this->redirect(Url::to(['error-page', 'error' => 3]));
                }

                if ($guide->price == 0) {
                    /**
                     * Если бесплатный гайд
                     */
                    $model->status = 1;
                    $model->save();

                    Yii::$app->mail->compose('payGuide',
                        ['user' => $model,
                            'guide' => $guide,
                            'title' => 'Оплата за материал "' . $guide->name . '"',
                            'htmlLayout' => 'layouts/html'])
                        ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                        ->setTo($model->email)
                        ->setSubject('Оплата за материал "' . $guide->name . '"')
                        ->send();

                    return $this->render('guide-buy-complete', ['hash' => $model->hash]);
                } else {
                    try {
                        $client = new Client(['userName' => 'integraforlife-api', 'password' => 'Flower192543', 'language' => 'ru', 'currency' => Currency::RUB]);

                        $orderAmount = $guide->price * 100;

                        $returnUrl = 'https://integraforlife.com/buy-guide-complete';
                        $params['failUrl'] = 'https://integraforlife.com/error-page?error=7';

                        $transactionOrderId = $orderId . "-guide-" . time();
                        $result = $client->registerOrder($transactionOrderId, $orderAmount, $returnUrl, $params);

                        $paymentOrderId = $result['orderId'];
                        $paymentFormUrl = $result['formUrl'];

                        $transaction = new Transactions();
                        $transaction->scenario = 'new';
                        $transaction->order_number = $transactionOrderId;
                        $transaction->save();

                        return $this->redirect(Url::to($paymentFormUrl));

                    } catch (Exception $e) {
                        Yii::$app->mail->compose()
                            ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                            ->setTo('mcflower@me.com')
                            ->setSubject('Guide. Exception step 1 (sberbank)')
                            ->setTextBody($e)
                            ->send();
                        Yii::$app->session->setFlash('error', 'Ошибка платежной системы. Повторите позднее.');
                    }
                }
            } else {
                Yii::$app->mail->compose()
                    ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                    ->setTo('mcflower@me.com')
                    ->setSubject('Guide. Errors')
                    ->setTextBody(Json::encode($model->errors))
                    ->send();
            }
        }
        return $this->redirect(Url::to(['error-page', 'error' => 7]));
    }

    public function actionBuyGuideComplete()
    {
        /**
         * Если оплатили через sberPay то необходимо дождаться когда крон самостоятельно проставит оплату
         */
        if (isset($_GET['bankInvoiceID'])) {
            Yii::$app->session->setFlash('warning', 'Спасибо. Мы проверяем Ваш платеж. Это займет не более 30 минут.');
            return $this->redirect('/');
        }

        try {

            $orderId = $_GET['orderId'];

            $client = new Client(['userName' => 'integraforlife-api', 'password' => 'Flower192543', 'language' => 'ru', 'currency' => Currency::RUB]);

            $systemOrderId = $orderId;
            $result = $client->getOrderStatusExtended($systemOrderId);
            $temp = explode("-", $result['orderNumber']);
            $orderIdU2p = $temp[0];

            if (OrderStatus::isDeposited($result['orderStatus'])) {

                $id = $orderIdU2p;

                $guser = Guser::findOne($id);

                if ($guser->status == 0) {
                    $guser->scenario = 'update';
                    $guser->status = 1;
                    $guser->save();

                    $transaction = Transactions::findOne(['order_number' => $result['orderNumber']]);
                    if (!empty($transaction)) {
                        $transaction->scenario = 'update';
                        $transaction->status = 1;
                        $transaction->save();
                    }

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
                        ->setSubject('Оплата за материал "' . $guide->name . '"')
                        ->send();

                    return $this->render('guide-buy-complete', ['hash' => $guser->hash]);

                } else {
                    return $this->redirect(Url::to(['error-page', 'error' => 6]));
                }

            }

        } catch (Exception $e) {
            Yii::$app->mail->compose()
                ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                ->setTo('mcflower@me.com')
                ->setSubject('Guide. Exception step 2 (sberbank)')
                ->setTextBody($e)
                ->send();
        }

        return $this->redirect(Url::to(['error-page', 'error' => 7]));
    }

    public function actionGetGuide(string $hash)
    {
        $guser = Guser::find()->where(['hash' => $hash])->orderBy('updated_at desc')->one();
        if (empty($guser)) {
            return $this->redirect(Url::to(['error-page', 'error' => 4]));
        }

        if ($guser->status == 0) {
            return $this->redirect(Url::to(['error-page', 'error' => 1]));
        }

        if (($guser->updated_at + 31 * 24 * 60 * 60) < time()) {
            return $this->redirect(Url::to(['error-page', 'error' => 2]));
        }

        $guide = Guides::findOne(['hash' => $guser->gcontent]);

        if (empty($guide)) {
            return $this->redirect(Url::to(['error-page', 'error' => 3]));
        }

        $path = '/home/m/mcflow/integraforlife.com/public_html';
        $filename = $path . $guide->url;

        if (file_exists($filename)) {

            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="' . $guide->filename . '"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($filename));
            readfile($filename);
            exit;

        } else {
            return $this->redirect(Url::to(['error-page', 'error' => 3]));
        }
    }

    public function actionErrorPage(int $error)
    {
        switch ($error) {
            case 1:
                $errorTitle = 'Оплата не найдена';
                $errorContent = 'Мы не смогли найти вашу оплату. Обратитесь в тех. поддержку.';
                break;
            case 2:
                $errorTitle = 'Время истекло';
                $errorContent = 'Время отведенное на скачивание файла (30 дней с момента оплаты) истекло.';
                break;
            case 3:
                $errorTitle = 'Контент не найден';
                $errorContent = 'Запрашиваемый контент не найден.';
                break;
            case 4:
                $errorTitle = 'Клиент не найден';
                $errorContent = 'Ваша регистрация не найдена.';
                break;
            case 5:
                $errorTitle = 'Файл не найден';
                $errorContent = 'Файл не найден. Обратитесь в тех. поддержку.';
                break;
            case 6:
                $errorTitle = 'Контент оплачен';
                $errorContent = 'Контент ранее был оплачен. Проверьте почту или обратитесь в тех. поддержку.';
                break;
            case 7:
                $errorTitle = 'Ошибка оплаты';
                $errorContent = 'Произошла ошибка. Повторите попытку позднее.';
                break;
            default:
                $errorTitle = 'Ошибка';
                $errorContent = 'Произошла неизвестная ошибка.';
        }

        return $this->render('common_error_page', ['errorTitle' => $errorTitle, 'errorContent' => $errorContent]);
    }

    public function actionGastrointestinal()
    {
        $model = new ZhktAnketa();

        if ($model->load(Yii::$app->request->post())) {

            if ($model->save()) {
                Yii::$app->session->setFlash('warning', 'Спасибо! Анкета отправлена.');

                Yii::$app->mail
                    ->compose('zhkt', [
                        'model' => $model,
                        'htmlLayout' => 'layouts/html'
                    ])
                    ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                    ->setTo('info@integraforlife.com')
                    ->setSubject('Анкета «Реабилитация желудочно-кишечного тракта»')
                    ->send();

                $model = new ZhktAnketa();
            } else {
                Yii::$app->session->setFlash('error', 'Ошибка при отправке сообщения.');
            }
        }

        $this->view->registerCssFile('/css/anketa.css?i=6');
        return $this->render('zhkt', ['model' => $model]);
    }

    public function actionEvent()
    {
        $model = new Event();

        if ($model->load(Yii::$app->request->post())) {

            if ($model->save()) {
                Yii::$app->session->setFlash('warning', 'Спасибо! Анкета отправлена.');

                Yii::$app->mail
                    ->compose('event', [
                        'model' => $model,
                        'htmlLayout' => 'layouts/html'
                    ])
                    ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                    ->setTo('info@integraforlife.com')
                    ->setSubject('Форма регистрации на конференцию')
                    ->send();

                $model = new Event();
            } else {
                Yii::$app->session->setFlash('error', 'Ошибка при отправке сообщения.');
            }
        }

        $this->view->registerCssFile('/css/anketa.css?i=6');
        return $this->render('event', ['model' => $model]);
    }

    public function actionTaplink()
    {
        $this->layout = 'wo-footer';
        $this->view->registerCssFile('/css/anketa.css?i=11');
        return $this->render('taplink');
    }

    public function actionCheckingIronDeficiency()
    {
        $model = new DynamicModel(
            ['q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'q9', 'q10',
                'q11', 'q12', 'q13', 'q14', 'q15', 'q16', 'q17', 'q18', 'q19', 'q20',
                'q21', 'q22', 'q23', 'q24', 'q25', 'q26', 'q27', 'q28', 'q29', 'q30',
                'q31', 'q32', 'q33']
        );
        $model->addRule(['q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'q9', 'q10',
            'q11', 'q12', 'q13', 'q14', 'q15', 'q16', 'q17', 'q18', 'q19', 'q20',
            'q21', 'q22', 'q23', 'q24', 'q25', 'q26', 'q27', 'q28', 'q29', 'q30',
            'q31', 'q32', 'q33'], 'required', ['message' => 'Обязательно для заполнения'])
            ->addRule(['q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'q9', 'q10',
                'q11', 'q12', 'q13', 'q14', 'q15', 'q16', 'q17', 'q18', 'q19', 'q20',
                'q21', 'q22', 'q23', 'q24', 'q25', 'q26', 'q27', 'q28', 'q29', 'q30',
                'q31', 'q32', 'q33'], 'integer');

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $data = Yii::$app->request->post();
            $sum = array_sum($data['DynamicModel']);

            return $this->render('iron_deficiency_result', ['sum' => $sum]);
        }
        $this->view->registerCssFile('/css/anketa.css?i=6');
        return $this->render('iron_deficiency', ['model' => $model]);
    }

    public function actionHealthyVessels()
    {
        $model = new VesselAnketa();

        if ($model->load(Yii::$app->request->post())) {

            if ($model->save()) {
                Yii::$app->session->setFlash('warning', 'Спасибо! Запрос отправлен.');

                Yii::$app->mail
                    ->compose('vessel', [
                        'model' => $model,
                        'htmlLayout' => 'layouts/html'
                    ])
                    ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                    ->setTo('info@integraforlife.com')
                    ->setSubject('Анкета «Здоровые сосуды»')
                    ->send();

                $model = new VesselAnketa();
            } else {
                Yii::$app->session->setFlash('error', 'Ошибка при отправке сообщения.');
            }
        }
        $this->view->registerCssFile('/css/anketa.css?i=6');
        return $this->render('vessel', ['model' => $model]);
    }

    public function actionPatientSupport()
    {
        $model = new Patient();

        if ($model->load(Yii::$app->request->post())) {

            if ($model->save()) {
                Yii::$app->session->setFlash('warning', 'Спасибо! Запрос отправлен.');

                Yii::$app->mail
                    ->compose('patient', [
                        'model' => $model,
                        'htmlLayout' => 'layouts/html'
                    ])
                    ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                    ->setTo('info@integraforlife.com')
                    ->setSubject('Чат пациентов')
                    ->send();

                $model = new Patient();
            } else {
                Yii::$app->session->setFlash('error', 'Ошибка при отправке сообщения.');
            }
        }
        $this->view->registerCssFile('/css/anketa.css?i=6');
        return $this->render('patient', ['model' => $model]);
    }

    public function actionClinicWidget()
    {
        $this->layout = 'empty';
        $group = IntegraGroup::find()->where(['hide' => 0])->orderBy('position asc')->all();
        $groupCode = $_GET['group'] ?? 1;

        $search = null;
        $searchString = "";
        if(isset($_GET['s'])) {
            $searchString = trim(strip_tags($_GET['s']));
            if(strpos($searchString, ' | ') !== false) {
                $groupCode = 0;
                $queryArr = explode(' | ', $searchString);
                $search = IntegraAnalysis::find()->where(['hide' => 0])->andWhere(['art' => $queryArr[0]])->all();
            } else {
                $queryArr = explode(' ', $searchString);
                if (count($queryArr)) {
                    $groupCode = 0;
                    $search = IntegraAnalysis::find()->where(['hide' => 0]);

                    foreach ($queryArr as $word) {
                        $search->andWhere(['or',
                            ['like', 'name', $word],
                            ['like', 'art', $word],
                        ]);
                    }
                    $search = $search->orderBy('name')->all();
                }
            }
        }


        $analysis = IntegraCatalog::find()->where(['id_group' => $groupCode])->with('analysis')->all();

        $analysisList = IntegraAnalysis::find()->where(['hide' => 0])->all();
        foreach ($analysisList as $one) {
            $analysisSearchOption[] = '"' . $one->art . ' | ' . $one->name . ' ' . number_format($one->price, 0, ' ', ' ') . ' руб."';
        }

        $analysisSearchOption = implode(',', $analysisSearchOption);

        return $this->render('widget',
            [
                'group' => $group,
                'groupCode' => $groupCode,
                'analysis' => $analysis,
                'search' => $search,
                'searchString' => $searchString,
                'analysisList' => $analysisList,
                'analysisSearchOption' => $analysisSearchOption,
            ]);
    }

    public function actionPhase2()
    {
        $model = new Progesterone();

        if ($model->load(Yii::$app->request->post())) {

            if ($model->save()) {
                Yii::$app->session->setFlash('warning', 'Спасибо! Запрос отправлен.');

                Yii::$app->mail
                    ->compose('progesterone', [
                        'model' => $model,
                        'htmlLayout' => 'layouts/html'
                    ])
                    ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                    ->setTo('info@integraforlife.com')
                    ->setSubject('Анкета «2 фаза цикла»')
                    ->send();

                $model = new Progesterone();
            } else {
                Yii::$app->session->setFlash('error', 'Ошибка при отправке сообщения.');
            }
        }
        $this->view->registerCssFile('/css/anketa.css?i=6');
        return $this->render('progesterone', ['model' => $model]);
    }

    /*public function actionForm()
    {
//        $model = new DynamicModel(['name', 'email', 'activity']);
//        $model->addRule(['name', 'email', 'activity'], 'required', ['message' => 'Обязательно для заполнения']);
//        $model->addRule('email', 'email');

        $model = new Guser();

        if ($model->load(Yii::$app->request->post())) {

            $hash = md5($model->email . $model->gcontent . Yii::$app->params['secret']);
            $oldRecord = Guser::findOne(['hash' => $hash]);

            if (empty($oldRecord)) {
                $model->hash = $hash;
                $model->status = 0;
            } else {
                if ($oldRecord->status == 1 && ($oldRecord->updated_at + 31 * 24 * 60 * 60) > time()) {
                    return $this->redirect(Url::to(['error-page', 'error' => 6]));
                } elseif ($oldRecord->status == 0) {
                    $model = $oldRecord;
                    $model->scenario = 'wo_captcha';
                }
            }

            if ($model->save()) {

                $guide = Guides::findOne(['hash' => $model->gcontent]);
                $orderId = $model->getPrimaryKey();

                if (!$guide) {
                    return $this->redirect(Url::to(['error-page', 'error' => 3]));
                }

                try {
                    $client = new Client(['userName' => 'integraforlife-api', 'password' => 'Flower192543', 'language' => 'ru', 'currency' => Currency::RUB]);

                    $orderAmount = $guide->price * 100;

                    $returnUrl = 'https://integraforlife.com/buy-guide-complete';
                    $params['failUrl'] = 'https://integraforlife.com/error-page?error=7';

                    $transactionOrderId = $orderId . "-guide-" . time();
                    $result = $client->registerOrder($transactionOrderId, $orderAmount, $returnUrl, $params);

                    $paymentOrderId = $result['orderId'];
                    $paymentFormUrl = $result['formUrl'];

                    $transaction = new Transactions();
                    $transaction->scenario = 'new';
                    $transaction->order_number = $transactionOrderId;
                    $transaction->save();

                    return $this->redirect(Url::to($paymentFormUrl));

                } catch (Exception $e) {
                    Yii::$app->mail->compose()
                        ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                        ->setTo('mcflower@me.com')
                        ->setSubject('Guide. Exception step 1 (sberbank)')
                        ->setTextBody($e)
                        ->send();
                    Yii::$app->session->setFlash('error', 'Ошибка платежной системы. Повторите позднее.');
                }
            }
        }
        $this->view->registerCssFile('/css/anketa.css?i=6');
        return $this->render('form', ['model' => $model]);
    }*/

    /*
    , 'q4', 'q5', 'q6', 'q7', 'q8', 'q9', 'q10',
             'q11', 'q12', 'q13', 'q14', 'q15', 'q16', 'q17', 'q18', 'q19', 'q20',
             'q21', 'q22', 'q23', 'q24', 'q25', 'q26', 'q27', 'q28', 'q29', 'q30',
             'q31', 'q32', 'q33'
     */

}
