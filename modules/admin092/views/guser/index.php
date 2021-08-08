<?php

use app\models\Guides;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Покупатели';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guser-index">

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            'email:email',
            //'hash',
            'gcontent',
            [
                'attribute' => 'gcontent',
                'format' => 'raw',
                'filter' => Guides::getGuidesHashArray(),
                'value' => function($data){
                    return $data->guideName;
                },
            ],
            //'status',
            [
                'attribute' => 'status',
                'format' => 'raw',
                'filter' => [
                    0 => 'Нет оплаты',
                    1 => 'Оплачено',
                ],
                'value' => function($data){
                    return ($data->status == 1) ? '<span class="label label-success">Оплачено</span>' : '<span class="label label-default">Нет оплаты</span>';
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

//            ['class' => 'yii\grid\ActionColumn'],
            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {paid} {record} {invoice}',
                'buttons' => [
                    'invoice'=>function($url, $model, $key){
                        return Html::a("<span class='fa fa-rub'></span>", ['/admin092/guser/send-invoice', 'id'=>$model->id], ['data'=>['pjax'=>0, 'method'=>'post', 'confirm'=>'Отправить ссылку на оплату записи?'], 'aria-label'=>'Запрос оплаты материала', 'title'=>'Запрос оплаты материала']);
                    },
                    'paid'=>function($url, $model, $key){
                        return Html::a("<span class='fa fa-money'></span>", ['/admin092/guser/paid', 'id'=>$model->id], ['data'=>['pjax'=>0, 'method'=>'post', 'confirm'=>'Подтвердить оплату?'], 'aria-label'=>'Установить оплату', 'title'=>'Оплата']);
                    },
                    'record'=>function($url, $model, $key){
                        return Html::a("<span class='fa fa-video-camera'></span>", ['/admin092/guser/send-record', 'id'=>$model->id], ['data'=>['pjax'=>0, 'method'=>'post', 'confirm'=>'Отправить ссылку на материал?'], 'aria-label'=>'Ссылка на материал', 'title'=>'Ссылка на запись вебинара']);
                    }
                ]
            ],
        ],
    ]); ?>


</div>
