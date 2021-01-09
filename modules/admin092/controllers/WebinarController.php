<?php

namespace app\modules\admin092\controllers;

use Yii;
use app\models\Webinar;
use yii\data\ActiveDataProvider;
use app\controllers\AuthController;
use yii\helpers\BaseFileHelper;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * WebinarController implements the CRUD actions for Webinar model.
 */
class WebinarController extends AuthController
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
     * Lists all Webinar models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Webinar::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Webinar model.
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
     * Creates a new Webinar model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Webinar();

        if ($model->load(Yii::$app->request->post())) {

            $file = UploadedFile::getInstance($model, 'img');

            $path = 'files/preview';
            if(!file_exists($path)) {
                BaseFileHelper::createDirectory($path);
            }
            $name = "/preview_" . time() . "." . $file->extension;
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
     * Updates an existing Webinar model.
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
                $path = 'files/preview';
                $name = "/preview_" . time() . "." . $file->extension;
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
     * Deletes an existing Webinar model.
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
     * Finds the Webinar model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Webinar the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Webinar::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
