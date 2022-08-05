<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IntegraanalysisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Анализы клиники';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="integra-analysis-index">

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'art',
            'name',
            [
                'attribute' => 'price',
                'format' => 'raw',
                'value' => function($data){
                    return $data->price . ' руб.';
                },
            ],
            [
                'attribute' => 'hide',
                'format' => 'raw',
                'filter' => [0 => 'Отображаемые', 1 => 'Скрытые'],
                'value' => function($data){
                    return ($data->hide == 0) ? '<span class="label label-success">Нет</span>' : '<span class="label label-danger">Да</span>';
                },
            ],
            //'created_at',
            //'updated_at',
            [
                'attribute' => 'updated_at',
                'format' => 'raw',
                'value' => function($data){
                    return date ('d.m.Y', $data->updated_at);
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
