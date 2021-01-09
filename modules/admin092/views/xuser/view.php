<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Xuser */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Пользователи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="xuser-view">

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Оплачено', ['paid', 'id' => $model->id], [
            'class' => 'btn btn-success',
            'data' => [
                'confirm' => 'Подтвердить оплату?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Запись', ['send-record', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Отправить ссылку на запись вебинара?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Счет', ['send-invoice', 'id' => $model->id], [
            'class' => 'btn btn-warning',
            'data' => [
                'confirm' => 'Отправить ссылку на оплату записи?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <p><strong>Оплачено</strong> - подтвердит оплату за участие в вебинаре</p>
    <p><strong>Запись</strong> - отправится ссылка на запись и сертификат</p>
    <p><strong>Счет</strong> - отправится счет на оплату записи вебинара</p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'email:email',
            'hash',
//            'activity',
            'activityName',
//            'buy',
            [
                'attribute' => 'buy',
                'format' => 'raw',
                'value' => function($data){
                    return ($data->buy == 1) ? '<span class="label label-success">Оплачено</span>' : '<span class="label label-default">Нет оплаты</span>';
                },
            ],
            [
                'attribute' => 'wopen',
                'format' => 'raw',
                'value' => function($data){
                    $result = "";
                    switch ($data->wopen) {
                        case 0:
                            $result = '<span class="label label-default">Не подписан</span>';
                            break;
                        case 1:
                            $result = '<span class="label label-warning">Ожидает</span>';
                            break;
                        case 2:
                            $result = '<span class="label label-success">Отправлено</span>';
                            break;
                    }
                    return $result;
                },
            ],
            [
                'attribute' => 'wstart',
                'format' => 'raw',
                'value' => function($data){
                    $result = "";
                    switch ($data->wstart) {
                        case 0:
                            $result = '<span class="label label-default">Не подписан</span>';
                            break;
                        case 1:
                            $result = '<span class="label label-warning">Ожидает</span>';
                            break;
                        case 2:
                            $result = '<span class="label label-success">Отправлено</span>';
                            break;
                    }
                    return $result;
                },
            ],
            [
                'attribute' => 'wclose',
                'format' => 'raw',
                'value' => function($data){
                    $result = "";
                    switch ($data->wclose) {
                        case 0:
                            $result = '<span class="label label-default">Не подписан</span>';
                            break;
                        case 1:
                            $result = '<span class="label label-warning">Ожидает</span>';
                            break;
                        case 2:
                            $result = '<span class="label label-success">Отправлено</span>';
                            break;
                    }
                    return $result;
                },
            ],
            [
                'label' => 'Сертификат',
                'format' => 'raw',
                'value' => function($data){
                    return ($data->buy == 1) ? '<a target="_blank" href="https://integraforlife.com/personal-certificate/'.$data->hash.'" class="btn-link">Открыть</a>' : '<span class="label label-default">Нет оплаты</span>';
                },
            ],
//            'wopen',
//            'wstart',
//            'wclose',
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
