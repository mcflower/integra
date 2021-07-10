<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ZhktSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Анкета «ЖКТ»';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zhkt-anketa-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
            'phone',
//            'age',
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
            //'q1',
            //'q2',
            //'q3',
            //'q4',
            //'recomended',
            //'doctor_email:email',
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
//            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
