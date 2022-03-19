<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Формы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
            'phone',
//            'address',
            'email:email',
            //'birthday',
            //'r1',
            //'r2',
            //'r3',
            //'r4',
            //'r5',
            //'r6',
            //'r7',
            //'r8',
            //'r9',
            //'q1',
            //'q2',
            //'q3',
            //'q4',
            //'q5',
            //'q6',
            //'q7',
            //'q8',
            //'q9',
            'activity',
            //'created_at',
            //'updated_at',
            [
                'attribute' => 'created_at',
                'format' => 'raw',
                'value' => function($data){
                    return date ('d.m.Y', $data->created_at);
                },
            ],
            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view}',
            ],
        ],
    ]); ?>


</div>
