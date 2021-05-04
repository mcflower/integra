<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Гайды';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guides-index">

    <p>
        <?= Html::a('Добавить гайд', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            //'url:url',
            [
                'attribute' => 'price',
                'format' => 'raw',
                'value' => function($data){
                    return $data->price . ' руб.';
                },
            ],
            //'hash',
            'brief',
            //'description:ntext',
            [
                'attribute' => 'hide',
                'format' => 'raw',
                'value' => function($data){
                    return ($data->hide == 0) ? '<span class="label label-success">Нет</span>' : '<span class="label label-danger">Да</span>';
                },
            ],
            //'created_at',
            [
                'attribute' => 'updated_at',
                'format' => 'raw',
                'value' => function($data){
                    return date ('d.m.Y', $data->updated_at);
                },
            ],
            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update}',
            ],
            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
