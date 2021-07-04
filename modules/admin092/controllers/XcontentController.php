<?php

namespace app\modules\admin092\controllers;

use Yii;
use app\models\Xcontent;
use app\models\Xuser;
use yii\data\ActiveDataProvider;
use app\controllers\AuthController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\BaseFileHelper;

/**
 * XcontentController implements the CRUD actions for Xcontent model.
 */
class XcontentController extends AuthController
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
     * Lists all Xcontent models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Xcontent::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Xcontent model.
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
     * Creates a new Xcontent model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Xcontent();
        $model->scenario = 'new';

        if ($model->load(Yii::$app->request->post())) {

            $model->activity = Yii::$app->common->randomName();
            $model->type = 1;
            $model->xdate = strtotime($model->string_day);
            $model->expired = $model->xdate + (61 * 24 * 60 * 60);

            $file = UploadedFile::getInstance($model, 'img');

            $path = 'files/webinar';
            if (!file_exists($path)) {
                BaseFileHelper::createDirectory($path);
            }
            $name = "/preview_" . time() . "." . $file->extension;
            $file->saveAs($path . $name);
            $model->img = '/' . $path . $name;

            $speaker = UploadedFile::getInstance($model, 'photo');
            $name = "/speaker_" . time() . "." . $speaker->extension;
            $speaker->saveAs($path . $name);
            $model->photo = '/' . $path . $name;

            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Xcontent model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->scenario = 'update';

        if ($model->load(Yii::$app->request->post())) {

            $file = UploadedFile::getInstance($model, 'img');
            if ($file) {
                $path = 'files/webinar';
                $name = "/preview_" . time() . "." . $file->extension;
                $file->saveAs($path . $name);
                $model->img = '/' . $path . $name;
            }

            $speaker = UploadedFile::getInstance($model, 'photo');
            if ($speaker) {
                $path = 'files/webinar';
                $name = "/speaker_" . time() . "." . $speaker->extension;
                $speaker->saveAs($path . $name);
                $model->photo = '/' . $path . $name;
            }

            $model->xdate = strtotime($model->string_day);
            $model->expired = $model->xdate + (61 * 24 * 60 * 60);

            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }

        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionOpen($id)
    {
        $model = $this->findModel($id);
        $model->scenario = 'open';

        if ($model->load(Yii::$app->request->post())) {
            $model->type = 2;
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('open', [
            'model' => $model,
        ]);
    }

    public function actionClose($id)
    {
        $model = $this->findModel($id);
        $model->scenario = 'close';

        if ($model->load(Yii::$app->request->post())) {
            $model->type = 3;

            $file = UploadedFile::getInstance($model, 'cert');
            if ($file) {
                $path = 'files/certs';
                $name = "/certificate_" . time() . "." . $file->extension;
                $file->saveAs($path . $name);
                $model->cert = '/' . $path . $name;
            }

            if ($model->save()) {
                Xuser::updateAll(['wclose' => 1], ['buy' => 1, 'activity' => $model->activity]);
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('close', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Xcontent model.
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

    /**
     * Finds the Xcontent model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Xcontent the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Xcontent::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
