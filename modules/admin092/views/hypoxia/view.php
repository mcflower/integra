<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Hypoxia */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Анкета «Гипоксия»', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="hypoxia-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'r1',
            'phone',
            'address',
            'email',
            'birthday',
            'q1',
            'q2',
            'q3',
            'q4',
            'r2',
            'r3',
            'r4',
            'r5',
            'r6',
            'r7',
            'r8',
            'r9',
            'r10',
            'r11',
            'r12',
            'r13',
            'r14',
            'r15',
            'r16',
            'r17',
            'q5',
            'q6',
            'q7',
            'q8',
            'q9',
            'q10',
            'q11',
            'q12',
            'q13',
            'q14',
            'q15',
            'q16',
            'q17',
            'r18',
            'r19',
            'r20',
            'r21',
            'r22',
            'r23',
            'q18',
            'r24',
            'q19',
            'r25',
            [
                'attribute' => 'created_at',
                'format' => 'raw',
                'value' => function($data){
                    return date ('d.m.Y', $data->created_at);
                },
            ],
        ],
    ]) ?>

</div>
