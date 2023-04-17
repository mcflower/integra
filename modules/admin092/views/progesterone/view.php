<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Progesterone */

$this->title = $model->q1;
$this->params['breadcrumbs'][] = ['label' => '2 фаза цикла', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="progesterone-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
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

</div>
