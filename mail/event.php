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
        'birthday',
        'phone',
        'email',
        'address',
        'q1',
        'r1',
        'r2',
        'q2',
        'r3',
        'q3',
        'r4',
        'r5',
        'q4',
        'r6',
        'r7',
        'r8',
        'r9',
        [
            'attribute' => 'created_at',
            'format' => 'raw',
            'value' => function($data){
                return date ('d.m.Y', $data->created_at);
            },
        ],
    ],
]) ?>
