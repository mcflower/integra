<?php

use app\models\Xcontent;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\XuserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Пользователи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="xuser-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    
    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'email:email',
            //'hash',
            //'activity',


            [
                'attribute' => 'activity',
                'format' => 'raw',
                'filter' => Xcontent::getXcontentActivityArray(),
                'value' => function($data){
                    return $data->activityName;
                },
            ],
//            'buy',
            [
                'attribute' => 'buy',
                'format' => 'raw',
                'filter' => [
                    0 => 'Нет оплаты',
                    1 => 'Оплачено',
                ],
                'value' => function($data){
                    return ($data->buy == 1) ? '<span class="label label-success">Оплачено</span>' : '<span class="label label-default">Нет оплаты</span>';
                },
            ],


            //'wopen',
            //'wstart',
            //'wclose',
            //'created_at',
            [
                'attribute' => 'updated_at',
                'format' => 'raw',
                'filter' => '',
                'value' => function($data){
                    return date ('d.m.Y h:i:s', $data->updated_at);
                },
            ],
            'id',
            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {paid} {record} {invoice}',
                'buttons' => [
                    'invoice'=>function($url, $model, $key){
                        return Html::a("<span class='fa fa-rub'></span>", ['/admin092/xuser/send-invoice', 'id'=>$model->id], ['data'=>['pjax'=>0, 'method'=>'post', 'confirm'=>'Отправить ссылку на оплату записи?'], 'aria-label'=>'Запрос оплаты записи', 'title'=>'Запрос оплаты записи']);
                    },
                    'paid'=>function($url, $model, $key){
                        return Html::a("<span class='fa fa-money'></span>", ['/admin092/xuser/paid', 'id'=>$model->id], ['data'=>['pjax'=>0, 'method'=>'post', 'confirm'=>'Подтвердить оплату?'], 'aria-label'=>'Установить оплату', 'title'=>'Оплата']);
                    },
                    'record'=>function($url, $model, $key){
                        return Html::a("<span class='fa fa-video-camera'></span>", ['/admin092/xuser/send-record', 'id'=>$model->id], ['data'=>['pjax'=>0, 'method'=>'post', 'confirm'=>'Отправить ссылку на запись вебинара?'], 'aria-label'=>'Ссылка на запись вебинара', 'title'=>'Ссылка на запись вебинара']);
                    }
                ]
            ],
        ],
    ]); ?>


</div>
