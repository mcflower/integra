<?php

use yii\widgets\DetailView;
?>

<style>
    tr {
        background-color: #f8f8f8;
    }
    td {
        padding: 10px;
        border: #e9e9e9 1px solid;
    }
</style>
<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'name',
        'r1',
        'age',
        'phone',
        'email',
        'address',
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
        'q1',
        'r18',
        'r19',
        'r20',
        'r21',
        'r22',
        'r23',
        'q2',
        'q3',
        'q4',
        'q5',
        'q6',
        'q7',
        'q8',
        'q9',
        'q10',
        'recomended',
        'q11',
        'r24',
        'q12',
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
