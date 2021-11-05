<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Анкета «Здоровые сосуды»';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vessel-anketa-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
            'phone',
            'age',
            'email:email',
            //'address',
            //'r1',
            //'r2',
            //'r3',
            //'r4',
            //'r5',
            //'r6',
            //'r7',
            //'r8',
            //'r9',
            //'r10',
            //'r11',
            //'r12',
            //'r13',
            //'r14',
            //'r15',
            //'r16',
            //'r17',
            //'r18',
            //'r19',
            //'r20',
            //'r21',
            //'r22',
            //'r23',
            //'r24',
            //'r25',
            //'q1',
            //'q2',
            //'q3',
            //'q4',
            //'q5',
            //'q6',
            //'q7',
            //'q8',
            //'q9',
            //'q10',
            //'q11',
            //'q12',
            //'recomended',
            //'created_at',
            //'updated_at',

//            ['class' => 'yii\grid\ActionColumn'],
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
