<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\IntegraAnalysis */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Анализы клиники', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="integra-analysis-view">

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить запись?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'art',
            'name',
            [
                'attribute' => 'price',
                'format' => 'raw',
                'value' => function($data){
                    return $data->price . ' руб.';
                },
            ],
            [
                'attribute' => 'hide',
                'format' => 'raw',
                'value' => function($data){
                    return ($data->hide == 0) ? '<span class="label label-success">Отображается</span>' : '<span class="label label-danger">Скрыт</span>';
                },
            ],
            [
                'attribute' => 'created_at',
                'format' => 'raw',
                'value' => function($data){
                    return date ('d.m.Y', $data->created_at);
                },
            ],
            [
                'attribute' => 'updated_at',
                'format' => 'raw',
                'value' => function($data){
                    return date ('d.m.Y', $data->updated_at);
                },
            ],
        ],
    ]) ?>

</div>
