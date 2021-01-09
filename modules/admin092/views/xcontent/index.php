<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Контент';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="xcontent-index">

    <p>
        <?= Html::a('Создать контент', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                'attribute' => 'type',
                'format' => 'raw',
                'value' => function($data){
                    $result = "";
                    switch($data->type) {
                        case 1:
                            $result = '<span class="label label-warning">Запланирован</span>';
                            break;
                        case 2:
                            $result = '<span class="label label-success">В продаже</span>';
                            break;
                        case 3:
                            $result = '<span class="label label-default">Закончился</span>';
                            break;
                    }
                    return $result;
                },
            ],
            'name',
            [
                'attribute'=>'img',
                'value'=>$model->img,
                'format' => ['image',['style'=>'height:100px;']],
            ],
            [
                'attribute' => 'url',
                'format' => 'raw',
                'value' => function($data){
                    return (!empty($data->url)) ? '<a target="_blank" href="'.$data->url.'">Открыть</a>' : '<span class="label label-warning">Вебинар не назначен</span>';
                },
            ],
//            'hash',
            [
                'attribute' => 'vimeo',
                'format' => 'raw',
                'value' => function($data){
                    return (!empty($data->vimeo)) ? '<a target="_blank" href="https://integraforlife.com/video/'.$data->vimeo.'">Открыть</a>' : '<span class="label label-warning">Запись не опубликована</span>';
                },
            ],
            //'vimeo',
            //'activity',
//            'expired',
            [
                'attribute' => 'expired',
                'format' => 'raw',
                'value' => function($data){
                    return ($data->expired > time()) ? '<span class="label label-success">'.date('d.m.Y', $data->expired).'</span>' : '<span class="label label-default">'.date('d.m.Y', $data->expired).'</span>';
                },
            ],
            //'url:url',
        
            /*[
                'attribute' => 'created_at',
                'format' => 'raw',
                'value' => function($data){
                    return date ('d.m.Y', $data->created_at);
                },
            ],*/
            [
                'attribute' => 'updated_at',
                'format' => 'raw',
                'value' => function($data){
                    return date ('d.m.Y', $data->updated_at);
                },
            ],

            ['class' => 'yii\grid\ActionColumn',
                'template' => '{open} {view} {update} {close}',
                'buttons' => [
                    'open'=>function($url, $model, $key){
                        return Html::a("<span class='fa fa-ticket'></span>", ['/admin092/xcontent/open', 'id'=>$model->id], ['title'=>'Открыть продажу на вебинар', 'aria-label' => 'Открыть продажу на вебинар']);
                    },
                    'close'=>function($url, $model, $key){
                        return Html::a("<span class='fa fa-times'></span>", ['/admin092/xcontent/close', 'id'=>$model->id], ['title'=>'Закрыть продажу', 'aria-label' => 'Закрыть продажу']);
                    }
                ],
            ],
        ],
    ]); ?>


</div>
