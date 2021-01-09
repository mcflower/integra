<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Частые вопросы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="question-index">

    <p>
        <?= Html::a('Добавить вопрос', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'quest',
            //'answer:ntext',
            'position',
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
