<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Event */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Формы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="event-view">

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

</div>
