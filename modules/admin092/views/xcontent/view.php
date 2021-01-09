<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Xcontent */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Контент', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Просмотр';
\yii\web\YiiAsset::register($this);
?>
<div class="xcontent-view">
    
    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('В продажу', ['open', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Закрыть', ['close', 'id' => $model->id], ['class' => 'btn btn-danger']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            [
                'attribute' => 'type',
                'format' => 'raw',
                'value' => function($data){
                    $result = "";
                    switch($data->type) {
                        case 1:
                            $result = '<span class="label label-warning">Запланирован</span>';
                            break;
                        case 2:
                            $result = '<span class="label label-success">В продаже</span>';
                            break;
                        case 3:
                            $result = '<span class="label label-default">Закончился</span>';
                            break;
                    }
                    return $result;
                },
            ],
            'activity',
            'name',
            'about',
            [
                'attribute'=>'photo',
                'value'=>$model->photo,
                'format' => ['image',['style'=>'height:100px;']],
            ],
            [
                'attribute' => 'description',
                'format' => 'raw',
                'value' => function($data){
                    return $data->description;
                },
            ],
//            'description',
            [
                'attribute'=>'img',
                'value'=>$model->img,
                'format' => ['image',['style'=>'height:100px;']],
            ],
            [
                'attribute' => 'xdate',
                'format' => 'raw',
                'value' => function($data){
                    return date('d.m.Y', $data->xdate);
                },
            ],
            [
                'attribute' => 'price',
                'format' => 'raw',
                'value' => function($data){
                    return $data->price . ' руб.';
                },
            ],
            'xtime',
            [
                'attribute' => 'url',
                'format' => 'raw',
                'value' => function($data){
                    return (!empty($data->url)) ? '<a target="_blank" href="'.$data->url.'">Открыть</a>' : '<span class="label label-warning">Вебинар не назначен</span>';
                },
            ],
            [
                'attribute' => 'vimeo',
                'format' => 'raw',
                'value' => function($data){
                    return (!empty($data->vimeo)) ? '<a target="_blank" href="https://integraforlife.com/video/'.$data->vimeo.'">Открыть</a>' : '<span class="label label-warning">Запись не опубликована</span>';
                },
            ],
            [
                'attribute' => 'expired',
                'format' => 'raw',
                'value' => function($data){
                    return ($data->expired > time()) ? '<span class="label label-success">'.date('d.m.Y', $data->expired).'</span>' : '<span class="label label-default">'.date('d.m.Y', $data->expired).'</span>';
                },
            ],
            [
                'attribute' => 'cert',
                'format' => 'raw',
                'value' => function($data){
                    return (!empty($data->cert)) ? '<a target="_blank" href="https://integraforlife.com'.$data->cert.'">Открыть</a>' : '<span class="label label-warning">Сертификат не загружен</span>';
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
