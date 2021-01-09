<?php

namespace app\controllers;

use app\models\Article;
use app\models\Certificate;
use app\models\CronClient;
use app\models\Hypoxia;
use app\models\Info;
use app\models\Question;
use app\models\Transactions;
use app\models\Xcontent;
use app\models\Xuser;
use Exception;
use Yii;
use yii\filters\AccessControl;
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
        if(empty($active)) {
            $active = Xcontent::find()->where(['type' => 1])->orderBy('xdate asc')->one();
        }
        $nexts = Xcontent::find()->where(['type' => [1,2]])->orderBy('xdate asc')->all();

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

                if($user->buy == 0) {
                    $user->buy = 1;
                    $user->wstart = 1;
                    $user->save();

                    $transaction = Transactions::findOne(['order_number' => $result['orderNumber']]);
                    if(!empty($transaction)) {
                        $transaction->scenario = 'update';
                        $transaction->status = 1;
                        $transaction->save();
                    }

                    $activity = Xcontent::findOne(['activity' => $user->activity]);

                    Yii::$app->mail->compose('payConfirmAdmin',
                        ['user' => $user,
                        'activity' => $activity,
                        'title' => 'Оплата вебинара "'.$activity->name.'"',
                        'htmlLayout' => 'layouts/html'])
                    ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                    ->setTo('info@integraforlife.com')
                    ->setSubject('Оплата вебинара "'.$activity->name.'"')
                    ->send();


                    Yii::$app->mail->compose('payConfirm',
                        ['user' => $user,
                        'activity' => $activity,
                            'title' => 'Оплата за вебинар "'.$activity->name.'"',
                            'htmlLayout' => 'layouts/html'])
                        ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                        ->setTo($user->email)
                        ->setSubject('Оплата за вебинар "'.$activity->name.'"')
                        ->send();
                }

            } else {
                Yii::$app->session->setFlash('danger', 'Ошибка. Повторите позднее!');
                return $this->redirect('/');
            }

        } catch (Exception $e) {
            Yii::$app->common->sendMail('Exception step 2 (sberbank)', $e, 'mcflower@me.com', Yii::$app->params['sendName']);
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

                if($user->buy == 0) {
                    $user->buy = 1;
                    $user->wclose = 2;
                    $user->save();

                    $transaction = Transactions::findOne(['order_number' => $result['orderNumber']]);
                    if(!empty($transaction)) {
                        $transaction->scenario = 'update';
                        $transaction->status = 1;
                        $transaction->save();
                    }

                    $activity = Xcontent::findOne(['activity' => $user->activity]);

                    Yii::$app->mail->compose('payConfirmAdmin',
                        ['user' => $user,
                            'activity' => $activity,
                            'title' => 'Оплата за запись вебинара "'.$activity->name.'"',
                            'htmlLayout' => 'layouts/html'])
                        ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                        ->setTo('info@integraforlife.com')
                        ->setSubject('Оплата за записи вебинара "'.$activity->name.'"')
                        ->send();

                    $needCertLink = !empty($activity->cert);
                    Yii::$app->mail->compose('close',
                        ['user' => $user,
                            'activity' => $activity,
                            'needCertLink' => $needCertLink,
                            'title' => 'Ссылка на запись вебинара "'.$activity->name.'".',
                            'htmlLayout' => 'layouts/html'])
                        ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                        ->setTo($user->email)
                        ->setSubject('Ссылка на запись вебинара "'.$activity->name.'".')->send();

                }

            } else {
                Yii::$app->session->setFlash('danger', 'Ошибка. Повторите позднее!');
                return $this->redirect('/');
            }

        } catch (Exception $e) {
            Yii::$app->common->sendMail('Exception step 2 (sberbank)', $e, 'mcflower@me.com', Yii::$app->params['sendName']);
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
        $hash = md5($email.$activityCode.$secret);
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
            /*if(!$user->save()) {
                print_r($user->errors);
            }
            echo 1;*/
        }

        $activity = Xcontent::findOne(['activity' => $activityCode]);
        if(!empty($activity) && $saveResult) {
            Yii::$app->mail->compose('active',
                ['client' => $user->name,
                    'hash' => $hash,
                    'title' => 'Регистрация на вебинар "'.$activity->name.'".',
                    'htmlLayout' => 'layouts/html'])
                ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                ->setTo($email)
                ->setSubject( 'Регистрация на вебинар "'.$activity->name.'".')
                ->send();
            Yii::$app->session->setFlash('info', 'Успешно! Проверьте электронную почту для дальнейших инструкций.');

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
        $hash = md5($email.$activityCode.$secret);
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
        if(!empty($activity) && $saveResult) {
            Yii::$app->mail->compose('next',
                ['client' => $user->name,
                    'hash' => $hash,
                    'activity' => $activity,
                    'title' => 'Уведомление о вебинаре "'.$activity->name.'".',
                    'htmlLayout' => 'layouts/html'])
                ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                ->setTo($email)
                ->setSubject( 'Уведомление о вебинаре "'.$activity->name.'".')
                ->send();
            Yii::$app->session->setFlash('info', 'Успешно! Проверьте электронную почту для дальнейших инструкций.');

        } else {
            Yii::$app->session->setFlash('danger', 'Ошибка. Повторите позднее!');
        }

        return $this->redirect('/');
    }

    public function actionPersonalCertificate($hash = "") {
        //$this->view->title = 'Personal Certificate';

        //return $this->render('certificate');
        $hash = strip_tags(trim($hash));
        if(!empty($hash)) {
            $user = Xuser::findOne(['hash' => $hash, 'buy' => 1]);
            $activity = Xcontent::findOne(['activity' => $user->activity, 'type' => 3]);
            if(!empty($user) && !empty($activity) && !empty($activity->cert)) {

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
//        $time = time();
        $video = Xcontent::find()->where(['vimeo' => $video_id])->andWhere(['>', 'expired', time()])->one();
//        print_r($video);
//        die();
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
        if(empty($activity)) {
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
            Yii::$app->common->sendMail('Exception step 1 (sberbank)', $e, 'mcflower@me.com', Yii::$app->params['sendName']);
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
        if(empty($activity)) {
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
            Yii::$app->common->sendMail('Exception step 1 (sberbank)', $e, 'mcflower@me.com', Yii::$app->params['sendName']);
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

        $model = new Xuser();
        $model->scenario = "current";

        $this->view->registerCssFile('/css/webinar.css?i=2');
        return $this->render('webinar', ['webinar' => $webinar, 'model' => $model]);
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
    public function actionAbout()
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
    }

    public function actionHypoxia()
    {
        $model = new Hypoxia();

        if ($model->load(Yii::$app->request->post())) {

            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Спасибо! Запрос отправлен.');

                Yii::$app->mail
                    ->compose('hypoxia', [
                        'model' => $model,
                        'htmlLayout' => 'layouts/html'
                    ])
                    ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                    ->setTo('greenfild@gmail.com')
//                    ->setTo('info@integraforlife.com')
                    ->setSubject("Анкета «ГИПОКСИИ НЕТ»")
                    ->send();

                $model = new Hypoxia();
            } else {
                Yii::$app->session->setFlash('primary', 'Ошибка при отправке сообщения.');
            }
        }

        return $this->render('hypoxia', ['model' => $model]);
    }

}
