<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ZhktAnketa */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Анкеты ЖКТ', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="zhkt-anketa-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'r17',
            'phone',
            'age',
            'email:email',
            'address',
            'r1',
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
            'q1',
            'q2',
            'q3',
            'q4',
            'recomended',
            [
                'attribute' => 'created_at',
                'format' => 'raw',
                'value' => function($data){
                    return date ('d.m.Y', $data->created_at);
                },
            ],
//            'created_at',
//            'updated_at',
        ],
    ]) ?>

</div>
