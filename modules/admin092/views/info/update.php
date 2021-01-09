<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Info */

$this->title = 'Редактирование: инфо блоки на главной';
$this->params['breadcrumbs'][] = ['label' => 'Информация', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' =>'Просмотр', 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Ред.';
?>
<div class="info-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
