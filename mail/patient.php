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
        'q1',
        'q2',
        'q3',
        'q4',
        'q5',
        'q6',
        'q7',
        'q8',
        'q9',
//        'q10',
        'q11',
        [
            'attribute' => 'created_at',
            'format' => 'raw',
            'value' => function($data){
                return date ('d.m.Y', $data->created_at);
            },
        ],
    ],
]) ?>
