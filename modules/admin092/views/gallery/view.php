<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Gallery */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Галерея', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="gallery-view">

    <p>
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
//            'img',
            'name',
            [
                'attribute' => 'path',
                'format' => 'raw',
                'value' => function($data){
                    return 'https://'.Yii::$app->params['domain'].$data->img;
                },
            ],
            [
                'attribute'=>'img',
                'value'=>$model->img,
                'format' => ['image',['style'=>'max-width:300px;']],
            ],
        ],
    ]) ?>

</div>
