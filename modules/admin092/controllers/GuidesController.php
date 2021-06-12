<?php

namespace app\modules\admin092\controllers;

use Yii;
use app\models\Guides;
use yii\data\ActiveDataProvider;
use app\controllers\AuthController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\BaseFileHelper;

/**
 * GuidesController implements the CRUD actions for Guides model.
 */
class GuidesController extends AuthController
{
    public $layout = "/admin";

    /**
     * Lists all Guides models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Guides::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Guides model.
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
     * Creates a new Guides model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Guides();

        if ($model->load(Yii::$app->request->post())) {

            $model->hash = Yii::$app->common->randomName();

            $file = UploadedFile::getInstance($model, 'url');
            $preview = UploadedFile::getInstance($model, 'img');

            $path = 'files/guides';
            if (!file_exists($path)) {
                BaseFileHelper::createDirectory($path);
            }

            $name = "/guide_" . time() . "." . $file->extension;
            $file->saveAs($path . $name);
            $model->url = '/' . $path . $name;

            $model->filename = Yii::$app->common->rus2eng($model->name) . "." . $file->extension;

            $pname = "/preview_" . time() . "." . $preview->extension;
            $preview->saveAs($path . $pname);
            $model->img = '/' . $path . $pname;

            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Guides model.
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

            $path = 'files/guides';

            $file = UploadedFile::getInstance($model, 'url');
            if ($file) {
                $name = "/guide_" . time() . "." . $file->extension;
                $file->saveAs($path . $name);
                $model->url = '/' . $path . $name;

                $model->filename = Yii::$app->common->rus2eng($model->name) . "." . $file->extension;
            } else {
                $model->filename = Yii::$app->common->rus2eng($model->name) . "." . Yii::$app->common->getExtension($model->url);
            }

            $preview = UploadedFile::getInstance($model, 'img');
            if ($preview) {
                $pname = "/preview_" . time() . "." . $preview->extension;
                $preview->saveAs($path . $pname);
                $model->img = '/' . $path . $pname;
            }

            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Guides model.
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
     * Finds the Guides model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Guides the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Guides::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
