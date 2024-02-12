<?php

namespace app\modules\admin092\controllers;

use Yii;
use app\models\IntegraAnalysis;
use app\models\IntegraanalysisSearch;
use app\controllers\AuthController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * IntegraanalysisController implements the CRUD actions for IntegraAnalysis model.
 */
class IntegraanalysisController extends AuthController
{
    public $layout = "/admin";

    /**
     * Lists all IntegraAnalysis models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new IntegraanalysisSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single IntegraAnalysis model.
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
     * Creates a new IntegraAnalysis model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new IntegraAnalysis();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionLoadFile()
    {
        if (Yii::$app->request->post()) {
            if (isset($_POST['full'])) {
                IntegraAnalysis::updateAll(['hide' => 1]);
            }

            if(empty($_FILES['csv']['name'])) {
                Yii::$app->session->setFlash('danger', 'Ошибка. Файл не выбран');
                return $this->render('load');
            }

            /**
             * Если в названии есть кавычки - \" из нужно заменить иначе не будет работать поиск
             * 0 - Название
             * 1 - Цена
             * 2 - Артикул
             */
            $handle = fopen($_FILES['csv']['tmp_name'], "r");
            $add = $upd = 0;
            while (($data = Yii::$app->common->fgetcsv2($handle, 1000, ";")) !== FALSE) {
                $inAn = IntegraAnalysis::findOne(['art' => $data[2]]);
                if(!empty($inAn)) {
                    $inAn->hide = 0;
                    $inAn->price = (int)$data[1];
                    $upd++;
                } else {
                    $inAn = new IntegraAnalysis();
                    $inAn->hide = 0;
                    $inAn->price = (int)$data[1];
                    $inAn->name = trim($data[0]);
                    $inAn->art = $data[2];
                    $add++;
                }
                $inAn->save();
            }
            Yii::$app->session->setFlash('success',  "Обновлено $upd, добавлено $add");
        }

        return $this->render('load');
    }

    /**
     * Updates an existing IntegraAnalysis model.
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
     * Deletes an existing IntegraAnalysis model.
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
     * Finds the IntegraAnalysis model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return IntegraAnalysis the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = IntegraAnalysis::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
