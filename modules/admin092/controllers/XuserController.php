<?php

namespace app\modules\admin092\controllers;

use Yii;
use app\models\Xuser;
use app\models\XuserSearch;
use app\models\Xcontent;
use app\controllers\AuthController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * XuserController implements the CRUD actions for Xuser model.
 */
class XuserController extends AuthController
{
    public $layout = "/admin";

    /**
     * {@inheritdoc}
     */
    /*public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }*/

    /**
     * Lists all Xuser models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new XuserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Xuser model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Xuser model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Xuser();
        $model->scenario = 'create';
        if ($model->load(Yii::$app->request->post())) {
            $email = $model->email;
            $activityCode = $model->activity;
            $secret = Yii::$app->params['secret'];
            $model->hash = md5($email.$activityCode.$secret);

            if($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Xuser model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Xuser model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionSendInvoice($id)
    {
        $user = $this->findModel($id);
        $model = Xcontent::findOne(['activity' => $user->activity]);
        if($model->type == 3) {

            Yii::$app->mail->compose(
                'buyRecord',
                ['user' => $user,
                    'activity' => $model,
                    'title' => 'Счет на оплату вебинара "'.$model->name.'".',
                    'htmlLayout' => 'layouts/html']
            )
            ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
            ->setTo($user->email)
            ->setSubject('Счет на оплату вебинара "'.$model->name.'".')->send();

            Yii::$app->session->setFlash('success', 'Ссылка отправлена');
        } else {
            Yii::$app->session->setFlash('danger', 'Ошибка. Вебинар еще не закрыт!');
        }

        return $this->redirect(Yii::$app->request->referrer);
    }

    public function actionSendRecord($id)
    {
        $user = $this->findModel($id);
        $model = Xcontent::findOne(['activity' => $user->activity]);
        if($model->type == 3) {

            if ($user->buy != 0) {
                $needCertLink = !empty($model->cert);
                $mes = Yii::$app->mail->compose('close',
                    ['user' => $user,
                        'activity' => $model,
                        'needCertLink' => $needCertLink,
                        'title' => 'Ссылка на запись вебинара "'.$model->name.'".',
                        'htmlLayout' => 'layouts/html'])
                    ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                    ->setTo($user->email)
                    ->setSubject('Ссылка на запись вебинара "'.$model->name.'".');

                $mes->send();
                Yii::$app->session->setFlash('success', 'Ссылка отправлена');
            } else {
                Yii::$app->session->setFlash('danger', 'Ошибка. Сначала необходимо поставить оплату!');
            }
        } else {
            Yii::$app->session->setFlash('danger', 'Ошибка. Вебинар еще не закрыт!');
        }

        return $this->redirect(Yii::$app->request->referrer);
    }

    public function actionPaid($id)
    {
        $model = $this->findModel($id);
        $model->buy = 1;
        $model->wstart = 1;
        if($model->save()) {
            $activity = Xcontent::findOne(['activity' => $model->activity]);

            Yii::$app->mail->compose('payConfirmAdmin',
                ['user' => $model,
                'activity' => $activity,
                'title' => 'Оплата вебинара "'.$activity->name.'"',
                'htmlLayout' => 'layouts/html'])
            ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
            ->setTo('info@integraforlife.com')
            ->setSubject('Оплата вебинара "'.$activity->name.'"')
            ->send();

            Yii::$app->mail->compose('payConfirm',
                ['user' => $model,
                'activity' => $activity,
                    'title' => 'Оплата за вебинар "'.$activity->name.'"',
                    'htmlLayout' => 'layouts/html'])
                ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                ->setTo($model->email)
                ->setSubject('Оплата за вебинар "'.$activity->name.'"')
                ->send();
        } else {
            Yii::$app->session->setFlash('danger', 'Ошибка. Повторите позднее!');
        }

        return $this->redirect(Yii::$app->request->referrer);
    }

    /**
     * Finds the Xuser model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Xuser the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Xuser::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
