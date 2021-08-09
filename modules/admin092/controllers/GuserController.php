<?php

namespace app\modules\admin092\controllers;

use app\models\Guides;
use app\models\GuserSearch;
use Yii;
use app\models\Guser;
use yii\base\BaseObject;
use yii\data\ActiveDataProvider;
use app\controllers\AuthController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * GuserController implements the CRUD actions for Guser model.
 */
class GuserController extends AuthController
{
    public $layout = "/admin";

    /**
     * Lists all Guser models.
     * @return mixed
     */
    /*public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Guser::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }*/

    public function actionIndex()
    {
        $searchModel = new GuserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Guser model.
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
     * Creates a new Guser model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Guser();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Guser model.
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
     * Deletes an existing Guser model.
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

    /*public function actionSendInvoice($id)
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
    }*/

    public function actionSendRecord($id)
    {
        $guser = $this->findModel($id);
        $guide = Guides::findOne(['hash' => $guser->gcontent]);

        if($guser->status != 0) {

            Yii::$app->mail->compose('guideLink',
                ['user' => $guser,
                    'guide' => $guide,
                    'title' => 'Ссылка на материал "' . $guide->name  . '"',
                    'htmlLayout' => 'layouts/html'])
                ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                ->setTo($guser->email)
                ->setSubject('Ссылка на материал "' . $guide->name  . '"')
                ->send();

            Yii::$app->session->setFlash('success', 'Ссылка отправлена');
        } else {
            Yii::$app->session->setFlash('danger', 'Ошибка. Сначала необходимо поставить оплату!');
        }

        return $this->redirect(Yii::$app->request->referrer);
    }

    public function actionPaid($id)
    {
        $guser = $this->findModel($id);
        $guser->scenario = 'update';
        $guser->status = 1;
        if($guser->save()) {

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
                    'title' => 'Оплата за материал "' . $guide->name  . '"',
                    'htmlLayout' => 'layouts/html'])
                ->setFrom([Yii::$app->params['sendEmail'] => Yii::$app->params['sendName']])
                ->setTo($guser->email)
                ->setSubject('Оплата за материал "' . $guide->name  . '"')
                ->send();
        } else {
            Yii::$app->session->setFlash('danger', 'Ошибка. Повторите позднее!');
        }

        return $this->redirect(Yii::$app->request->referrer);
    }

    /**
     * Finds the Guser model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Guser the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Guser::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
