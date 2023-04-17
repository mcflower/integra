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
        'q10',
        'q11',
        'q12',
        'q13',
        'q14',
        'q15',
        'q16',
        'q17',
        'q18',
        'q19',
        'q20',
        'q21',
        'q22',
        'q23',
        'q24',
        'q25',
        'q26',
        'q27',
        'q28',
        'q29',
        'q30',
        'q31',
        'q32',
        'q33',
        'q34',
        'q35',
        'q36',
        'q37',
        'q38',
        'q39',
        'q40',
        'q41',
        'q42',
        'q43',
        'q44',
        'q45',
        [
            'attribute' => 'created_at',
            'format' => 'raw',
            'value' => function($data){
                return date ('d.m.Y', $data->created_at);
            },
        ],
    ],
]) ?>
