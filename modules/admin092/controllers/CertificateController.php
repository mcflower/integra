<?php

namespace app\modules\admin092\controllers;

use Yii;
use app\models\Certificate;
use yii\data\ActiveDataProvider;
use app\controllers\AuthController;
use yii\helpers\BaseFileHelper;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * CertificateController implements the CRUD actions for Certificate model.
 */
class CertificateController extends AuthController
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
     * Lists all Certificate models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Certificate::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Certificate model.
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
     * Creates a new Certificate model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Certificate();

        if ($model->load(Yii::$app->request->post())) {

            $file = UploadedFile::getInstance($model, 'img');

            $path = 'files/cert';
            if(!file_exists($path)) {
                BaseFileHelper::createDirectory($path);
            }
            $name = "/certificate_" . time() . "." . $file->extension;
            $file->saveAs($path . $name);
            $model->img = '/'.$path . $name;

            if($model->save()){
                return $this->redirect(['view', 'id' => $model->id]);
            }

        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Certificate model.
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
                $path = 'files/cert';
                $name = "/certificate_" . time() . "." . $file->extension;
                $file->saveAs($path . $name);
                $model->img = '/'.$path . $name;
            }

            if($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }

        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Certificate model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $file = substr($model->img, 1);
        unlink($file);
        $model->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Certificate model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Certificate the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Certificate::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
