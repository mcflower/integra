<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GallerySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Галерея';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallery-index">

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
//            'img',
            [
                'attribute' => 'path',
                'format' => 'raw',
                'value' => function($data){
                    return 'https://'.Yii::$app->params['domain'].$data->img;
                },
            ],
            'name',
            [
                'attribute'=>'img',
                'filter' => '',
                'value'=>$model->img,
                'format' => ['image',['style'=>'height:100px;']],
            ],

            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view} {delete}',
            ],

//            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
