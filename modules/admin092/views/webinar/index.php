<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Бесплатные вебинары';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="webinar-index">
    
    <p>
        <?= Html::a('Добавить вебинар', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            //'img',
            /*[
                'attribute'=>'img',
                'value'=>$model->img,
                'format' => ['image',['style'=>'height:100px;']],
            ],*/
            //'url:url',
            /*[
                'attribute' => 'url',
                'format' => 'raw',
                'value' => function($data){
                    return '<a target="_blank" href="'.$data->url.'">Открыть</a>';
                },
            ],*/
            'position',
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
