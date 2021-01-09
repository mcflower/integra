<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Webinar */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Бесплатные вебинары', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Просмотр';
\yii\web\YiiAsset::register($this);
?>
<div class="webinar-view">

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'name',
            [
                'attribute'=>'img',
                'value'=>$model->img,
                'format' => ['image',['style'=>'max-width:200px;']],
            ],
            [
                'attribute' => 'url',
                'format' => 'raw',
                'value' => function($data){
                    return '<a target="_blank" href="'.$data->url.'">Открыть</a>';
                },
            ],
            'position',
            [
                'attribute' => 'hide',
                'format' => 'raw',
                'value' => function($data){
                    return ($data->hide == 0) ? '<span class="label label-success">Нет</span>' : '<span class="label label-danger">Да</span>';
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
