<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '2 фаза цикла';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="progesterone-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'q1',
            'q2',
            'q3',
            'q4',
            //'q5',
            //'q6',
            //'q7',
            //'q8',
            //'q9',
            //'q10',
            //'q11',
            //'q12',
            //'q13',
            //'q14',
            //'q15',
            //'q16',
            //'q17',
            //'q18',
            //'q19',
            //'q20',
            //'q21',
            //'q22',
            //'q23',
            //'q24',
            //'q25',
            //'q26',
            //'q27',
            //'q28',
            //'q29',
            //'q30',
            //'q31',
            //'q32',
            //'q33',
            //'q34',
            //'q35',
            //'q36',
            //'q37',
            //'q38',
            //'q39',
            //'q40',
            //'q41',
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
