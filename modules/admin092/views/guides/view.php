<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Guides */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Гайды', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="guides-view">

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            [
                'attribute' => 'url',
                'label' => 'Файл',
                'format' => 'raw',
                'value' => function($data){
                    return '<a target="_blank" href="https://integraforlife.com'.$data->url.'">Открыть</a>';
                },
            ],
            [
                'attribute' => 'price',
                'format' => 'raw',
                'value' => function($data){
                    return $data->price . ' руб.';
                },
            ],
            [
                'attribute' => 'hash',
                'label' => 'Страница гайда',
                'format' => 'raw',
                'value' => function($data){
                    return '<a target="_blank" href="https://integraforlife.com/guides/'.$data->hash.'">Открыть</a>';
                },
            ],
            'brief',
            [
                'attribute' => 'description',
                'format' => 'raw',
                'value' => function($data){
                    return $data->description;
                },
            ],
            [
                'attribute' => 'hide',
                'format' => 'raw',
                'value' => function($data){
                    return ($data->hide == 0) ? '<span class="label label-success">Нет</span>' : '<span class="label label-danger">Да</span>';
                },
            ],
            [
                'attribute'=>'img',
                'value'=>$model->img,
                'format' => ['image',['style'=>'height:100px;']],
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
