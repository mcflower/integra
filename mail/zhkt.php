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
        'phone',
        'age',
        'email',
        'address',
        'q1',
        'q2',
        'q3',
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
        'recomended',
        'q4',
        'r16',
        [
            'attribute' => 'created_at',
            'format' => 'raw',
            'value' => function($data){
                return date ('d.m.Y', $data->created_at);
            },
        ],
    ],
]) ?>
